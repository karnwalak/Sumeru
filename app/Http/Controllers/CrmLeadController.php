<?php
namespace App\Http\Controllers;
use App\Models\crm_lead;
use App\Models\FlatCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
class CrmLeadController extends Controller
{
    public function sortleads(Request $req,$st){
        $data = crm_lead::where('lead_status','=',$st)->join('flat_categories','crm_leads.product','=','flat_categories.id')
                ->get(['crm_leads.*','flat_categories.category_name']);
        if ($data) {
            return view('../admin/CRM/sortleads',compact('data'));
        }else{
            return redirect('../admin/CRM/leads');
        }
    }
    public function addleads(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'name' => 'required|regex:/^[a-zA-Z ]*$/',
            'phone' => 'required|digits:10||unique:crm_leads,lead_contact',
            'email' => 'required|email||unique:crm_leads,lead_email',
            'product' => 'required|not_in:0',
            'source' => 'required|not_in:0',
            'date' => 'required|date',
            'comment' => 'required',
           ]);
     
           if (!$valid -> passes()) {
             return response() -> json(['status' => 'error',
             'error' => $valid -> errors()]);
           }else{
               $data = [
                 'lead_name' => $req -> post('name'),
                 'lead_contact' => $req -> post('phone'),
                 'lead_email' => $req -> post('email'),
                 'product' => $req -> post('product'),
                 'lead_source' => $req -> post('source'),
                 'lead_start_date' => $req -> post('date'),
                 'lead_status' => 'Pending',
                 'follow_update' => 0,
                 'employee_id' => session() -> get('id'),
                 'lead_comment' =>  $req -> post('comment'),
               ];
               $res = crm_lead::insert($data);
               if($res){
                return response() -> json(['status' => 'success',
                'msg' => 'Lead Added!']);
               }else{
                return response() -> json(['status' => 'error',
                'error' => 'Lead Not Added!']);
               }
           }
    }
    public function show(Request $req)
    {
        return view('../admin/CRM/createleads') -> with('data',FlatCategory::where('category_status','=','Active')->get());
    }
    public function showdata(Request $req)
    {
        $data = crm_lead::orderBy('id', 'DESC')->where('lead_status','!=','delete')->where('employee_id','=',session()->get('id'))->join('flat_categories','crm_leads.product','=','flat_categories.id')
        ->get(['crm_leads.*','flat_categories.category_name']);
        return view('../admin/CRM/leads') -> with('data',$data);
    }
    public function updateleads(Request $req){
        // return $req;
        $valid = Validator::make($req -> all(),[
            'status' => 'required|not_in:0',
            'comment' => 'required',
           ]);
     
           if (!$valid -> passes()) {
             return response() -> json(['status' => 'error',
             'error' => $valid -> errors()]);
           }else{
            $pid = $req -> post('pid');
            $status = $req -> post('status');
            $date = $req -> post('date');
            $comment = $req -> post('comment');
            if (isset($date)) {
                $res = DB::table('crm_leads') 
                ->where('id', $pid)
                ->limit(1) 
                ->update(['lead_status' => $status,'follow_update' => $date ,'lead_comment' => $comment]);
            }else{
                $res = DB::table('crm_leads') 
                ->where('id', $pid)
                ->limit(1) 
                ->update(['lead_status' => $status,'lead_comment' => $comment]);
            }
               if($res){
                return response() -> json(['status' => 'success',
                'msg' => 'Lead Updated!']);
               }else{
                return response() -> json(['status' => 'error',
                'error' => 'Lead Not Updated!']);
               }
           }
    }
    public function delete(Request $req,$id){
        $res = DB::table('crm_leads') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['lead_status' => 'delete']);
        if($res){
            session() -> flash('success','Lead Deleted!');
            return redirect('admin/CRM/leads');
        }else{
            session() -> flash('error','Lead Not Deleted!');
            return redirect('admin/CRM/leads');
        }
    } 
    public function index(Request $req){
        $cname = $req -> post('leadname');
        $category_name = $cname; 
        $st = $req -> post('leadstatus');
        $status = $st; 
        // return $req;
        if ($category_name == null && $status == null) {
            $data = crm_lead::where('lead_status','!=','delete')->join('flat_categories','crm_leads.product','=','flat_categories.id')
            ->select(['crm_leads.*','flat_categories.category_name'])
            ->paginate(10);
            if ($data) {
                return view('../admin/CRM/leads',compact('data'));
            }else{
                return redirect('../admin/CRM/leads');
            }
        }else if ($category_name == $cname && $status == null) {
            $data = crm_lead::where('lead_status','!=','delete')
            ->where('lead_name', 'like', '%' . $cname . '%')
            ->join('flat_categories','crm_leads.product','=','flat_categories.id')
            ->select(['crm_leads.*','flat_categories.category_name'])
            ->paginate(10);
            if ($data) {
                return view('../admin/CRM/leads',compact('data'));
            }else{
                return redirect('../admin/CRM/leads');
            }
        }else if ($category_name == null && $status == $st) {
            $data = crm_lead::where('lead_status','=',$st)
            ->join('flat_categories','crm_leads.product','=','flat_categories.id')
            ->select(['crm_leads.*','flat_categories.category_name'])
            ->paginate(10);
            if ($data) {
                return view('../admin/CRM/leads',compact('data'));
            }else{
                return redirect('../admin/CRM/leads');
            }
        }else if ($category_name == $cname && $status == $st) {
            $data = crm_lead::where('lead_status','=',$st)
            ->where('lead_name', 'like', '%' . $cname . '%')
            ->join('flat_categories','crm_leads.product','=','flat_categories.id')
            ->select(['crm_leads.*','flat_categories.category_name'])
            ->paginate(10);
            if ($data) {
                return view('../admin/CRM/leads',compact('data'));
            }else{
                return redirect('../admin/CRM/leads');
            }
        }
     }
}
