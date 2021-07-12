<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\hr_department;
use App\Models\hr_designation;
use App\Models\hr_employees;
use Validator;
class HrDesignationController extends Controller
{
   public function show(Request $req){
     return view('../admin/HR/addhrdesignation') -> with('data',hr_department::where('status','!=','delete')->get());
   }
   public function addhrdesignation(Request $req)
   {
    $valid = Validator::make($req -> all(),[
        'name' => 'required|',
        'lead' => 'required',
        'status' => 'required|not_in:0',
       ]);
    if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
    }else{
       $data = [
           'name' => $req -> post('name'),
           'department_id' => $req -> post('lead'),
           'status' => $req -> post('status'),
       ];
       $res = hr_designation::insert($data);
       if($res){
          return response() -> json([
             'status' => 'success',
             'msg' => 'Designation Added!'
          ]);
       }else{
           return response() -> json([
             'status' => 'error',
             'error'=> 'Designation Not Added!'
           ]);
       }
    }
   }
   public function showdata(Request $req)
   {
       $data = hr_designation::orderBy('id','DESC')->where('status','!=','delete')->paginate(10);
       return view('../admin/HR/hrdesignation') -> with('data',$data);
   }
   public function edithrdesignation(Request $req,$id){
      $department = hr_department::where('status','!=','delete')-> get();
      return view('../admin/HR/edithrdesignation') -> with('data',hr_designation::find($id)) -> with('department',$department);
   }
   public function edit(Request $req)
   {
    $valid = Validator::make($req -> all(),[
        'name' => 'required|',
        'lead' => 'required',
        'status' => 'required|not_in:0',
       ]);
    if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
    }else{
        $id = $req -> post('pid');
        $name = $req -> post('name');
        $department_id = $req -> post('lead');
        $status = $req -> post('status');
        $result=DB::table('hr_designations') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['name' => $name,'department_id'=>$department_id,'status'=>$status]);
        if($result){
            return response()-> json([
              'status' => 'success',
              'msg'=>'Designation Updated!'
            ]);
        }else{
            return response()->json([
            'status' => 'error',
            'error' => 'Designation Not Updated!'
            ]);
        }
    }
   }
   public function delete(Request $req,$id)
   {
        $result=DB::table('hr_designations') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['status'=>'delete']); 
        if($result){
            session()->flash('success','Designation Deleted!');
            return redirect('../admin/HR/hrdesignation');
        }else{
            session()->flash('error','Designation not Deleted!');
            return redirect('../admin/HR/hrdesignation');
        } 
   }
   public function editstatus(Request $req){
    $id = $req -> id;
    // return $id;
    $data = DB::SELECT("SELECT * FROM hr_designations where id = $id");
    foreach ($data as $value) {
       
    }
    if($value -> status == "Active"){
     $res = DB::table('hr_designations') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['status' => 'Inactive']);
        if($res){
            return response()->json(['status' => 'inactive']);
        }
    }else{
     $result = DB::table('hr_designations') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['status' => 'Active']);
        if($result){
            return response()->json(['status' => 'active']);
        }
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
         $data = hr_designation::where('status','!=','delete')->orderBy('id')->paginate(10);
         if ($data) {
             return view('../admin/HR/searchdesignation',compact('data'));
         }else{
             return redirect('../hrdesignation');
         }
     }else if ($sname == $pname && $ty == null) {
         // $data = DB::SELECT("SELECT * FROM sellers WHERE seller_name LIKE '%$sname%'");
        $data = hr_designation::where('status','!=','delete')->where('name', 'like', '%' . $pname . '%')->paginate(10);
        if ($data) {
             return view('../admin/HR/searchdesignation',compact('data'));
         }else{
             return redirect('../hrdesignation');
         }
     }else if ($sname == null && $ty == $type) {
         $data = hr_designation::where('status', $type)->paginate(10);
        if ($data) {
             return view('../admin/HR/searchdesignation',compact('data'));
         }else{
             return redirect('../hrdesignation');
         }
     }else if ($sname == $pname && $ty == $type) {
       $data = hr_designation::where('name', 'like', '%' . $pname . '%')
       ->Where('status', $type)
       ->paginate(10);

         if ($data) {
             return view('../admin/HR/searchdesignation',compact('data'));
         }else{
             return redirect('../hrdesignation');
         }
     }
   }
}
