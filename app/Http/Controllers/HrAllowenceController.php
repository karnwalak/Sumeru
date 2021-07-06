<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\hr_department;
use App\Models\hr_allowence;
use App\Models\hr_designation;
use App\Models\hr_employees;
use Validator;

class HrAllowenceController extends Controller
{
    
    public function create(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'name' => 'required',
            'description' => 'required',
            'amount' => 'required|numeric',
            'status' => 'required|not_in:0',
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
           $data = [
               'allowence_name' => $req -> post('name'),
               'allowence_amount' => $req -> post('amount'),
               'allowence_description' => $req -> post('description'),
               'allowence_status' => $req -> post('status'),
           ];
           $res = hr_allowence::insert($data);
           if($res){
              return response() -> json([
                 'status' => 'success',
                 'msg' => 'Allowence Added!'
              ]);
           }else{
               return response() -> json([
                 'status' => 'error',
                 'error'=> 'Allowence Not Added!'
               ]);
           }
        }
    }
    public function showdata(Request $req)
    {
        $data = hr_allowence::where('allowence_status','!=','delete')->paginate(10);
        return view('../admin/HR/hrallowance') -> with('data',$data);
    }
    public function edithrallowances(Request $req,$id){
        return view('../admin/HR/edithrallowances') -> with('data',hr_allowence::find($id));
    }
    public function edithrallowence(Request $req){
        $valid = Validator::make($req -> all(),[
            'name' => 'required',
            'description' => 'required',
            'amount' => 'required|numeric',
            'status' => 'required|not_in:0',
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
               $id = $req -> post('pid');
               $allowence_name = $req -> post('name');
               $allowence_amount = $req -> post('amount');
               $allowence_description = $req -> post('description');
               $allowence_status = $req -> post('status');
               $result=DB::table('hr_allowences') 
                ->where('id', $id)
                ->limit(1) 
                ->update(['allowence_name' => $allowence_name,'allowence_amount'=> $allowence_amount,'allowence_status'=>$allowence_status,'allowence_description'=> $allowence_description]);
                if($result){
                    return response()-> json([
                    'status' => 'success',
                    'msg'=>'Allowence Updated!'
                    ]);
                }else{
                    return response()->json([
                    'status' => 'error',
                    'error' => 'Allowence Not Updated!'
                    ]);
                }
        }
    }
    public function delete(Request $req,$id)
    {
        $result=DB::table('hr_allowences') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['allowence_status'=>'delete']); 
        if($result){
            session()->flash('success','Allowance Deleted!');
            return redirect('../admin/HR/hrallowance');
        }else{
            session()->flash('error','Allowance not Deleted!');
            return redirect('../admin/HR/hrallowance');
        } 
    }
    public function editstatus(Request $req){
        $id = $req -> id;
        // return $id;
        $data = DB::SELECT("SELECT * FROM hr_allowences where id = $id");
        foreach ($data as $value) {
           
        }
        if($value -> allowence_status == "Active"){
         $res = DB::table('hr_allowences') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['allowence_status' => 'Inactive']);
        }else{
         $result = DB::table('hr_allowences') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['allowence_status' => 'Active']);
        }
    }
    public function index(Request $req){
        // $res = new Material;
        $sname = $req -> post('name');
        $pname = $sname; 
        $ty = $req -> post('status');
        $type = $ty; 
        // return $req;
        if ($sname == null && $ty == null) {
            $data = hr_allowence::where('allowence_status','!=','delete')->orderBy('id')->paginate(10);
            if ($data) {
                return view('../admin/HR/searchallowence',compact('data'));
            }else{
                return redirect('../hrallowance');
            }
        }else if ($sname == $pname && $ty == null) {
            // $data = DB::SELECT("SELECT * FROM sellers WHERE seller_name LIKE '%$sname%'");
           $data = hr_allowence::where('allowence_status','!=','delete')->where('allowence_name', 'like', '%' . $pname . '%')->paginate(10);
           if ($data) {
                return view('../admin/HR/searchallowence',compact('data'));
            }else{
                return redirect('../hrallowance');
            }
        }else if ($sname == null && $ty == $type) {
            $data = hr_allowence::where('allowence_status', $type)->paginate(10);
           if ($data) {
                return view('../admin/HR/searchallowence',compact('data'));
            }else{
                return redirect('../hrallowance');
            }
        }else if ($sname == $pname && $ty == $type) {
          $data = hr_allowence::where('allowence_name', 'like', '%' . $pname . '%')
          ->Where('allowence_status', $type)
          ->paginate(10);
   
            if ($data) {
                return view('../admin/HR/searchallowence',compact('data'));
            }else{
                return redirect('../hrallowance');
            }
        }
      }
}
