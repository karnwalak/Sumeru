<?php

namespace App\Http\Controllers;
use App\Models\purchase_order_request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;

class PurchaseOrderRequestController extends Controller
{
    public function viewrequest(Request $req,$id)
    {
        $data = purchase_order_request::where('purchase_order_requests.id','=',$id)->join('hr_employees','purchase_order_requests.emp_id','=','hr_employees.id')
        ->get(['purchase_order_requests.*','hr_employees.employee_name','hr_employees.employee_img','hr_employees.department_id']);
        return view('../admin/ERP/viewrequest')->with('data',$data);
    }

   
    public function create(Request $req)
    {
        // return $req;
        $valid = Validator::make($req -> all(),[
            'title' => 'required',
            'message' => 'required',
            'status' => 'required|not_in:0',
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $data = [
                'emp_id' => session()->get('id'),
                'title' => $req -> post('title'),
                'status' =>  $req -> post('status'),
                'description' => $req -> post('message'),
            ];
            $res = purchase_order_request::insert($data);
            if($res){
                return response()-> json([
                    'status' => 'success',
                    'msg'=>'Request Added!'
                  ]);
            }else{
                return response()-> json([
                    'status' => 'error',
                    'error'=>'Request Not Added!'
                  ]);
            }
    
        }
    }

    public function show(Request $req)
    {
        $data = purchase_order_request::where('purchase_order_requests.emp_id','=',session()->get('id'))->join('hr_employees','purchase_order_requests.emp_id','=','hr_employees.id')
        ->get(['purchase_order_requests.*','hr_employees.employee_name','hr_employees.employee_contact_no','hr_employees.department_id']);
        return view('../admin/ERP/purchaseorderrequest')->with('data',$data);
    }

    
    public function edit(Request $request, $id)
    {
        return view('../admin/ERP/editrequest')->with('data',purchase_order_request::find($id));
    }

   
    public function update(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'title' => 'required',
            'message' => 'required',
            'status' => 'required|not_in:0',
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $pid = $req -> post('pid');
            $title = $req -> post('title');
            // $doc_upload =  $file_name;
            $status =$req -> post('status');
            $description = $req -> post('message');
            $res=DB::table('purchase_order_requests') 
            ->where('id', $pid)
            ->limit(1) 
            ->update(['title' => $title,'description' => $description,'status' =>$status]); 
            if($res){
                return response()-> json(['status' => 'success','msg'=>'Request Updated!'
                  ]);
            }else{
                return response()-> json(['status' => 'error','error'=>'Request Not Updated!'
                  ]);
            }
        }
    }
}
