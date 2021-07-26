<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\hr_department;
use App\Models\hr_employees;
use Validator;
class HrDepartmentsController extends Controller
{
    public function create(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'name' => 'required|',
            'parent' => 'required',
            'lead' => 'required',
            'status' => 'required|not_in:0',
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
        $data = [
        'name' => $req -> post('name'),
        'parent' => $req -> post('parent'),
        'employee_id' => $req -> post('lead'),
        'status' => $req -> post('status')
        ];
        $res = hr_department::insert($data);
        if($res){
            return response() -> json(['status' => 'success','msg' => 'Department Added!']);
        }else{
            return response() -> json(['status' => 'error','error' => 'Department not Added!']);
        }
        }
    }
    public function showdata(Request $req)
    {
        $emp = DB::table('hr_employees')->where('employee_status','=','Active')->get();
        // return $emp;
        return view('../admin/HR/addhrdepartment') ->with('employee',$emp);
    }
    public function show(Request $req){
       $data = DB::table('hr_departments')
       ->join('hr_employees', 'hr_departments.employee_id', '=', 'hr_employees.id')
       ->select('hr_departments.*', 'hr_employees.employee_name')
       ->where('hr_departments.status','!=','delete')
       ->where('hr_departments.employee_id','=',session()->get('id'))
       ->get();
       return view('../admin/HR/hrdepartment') -> with('data',$data);
    }
    public function edit(Request $req,$id){
        $emp = hr_employees::get();
        $department = hr_department::get();
        return view('../admin/HR/edithrdepartment')
        ->with('data',hr_department::find($id))
        ->with('employees',$emp)
        ->with('department',$department);
    }
    public function edithrdepart(Request $req){
        $valid = Validator::make($req -> all(),[
            'name' => 'required|',
            'parent' => 'required',
            'lead' => 'required',
            'status' => 'required|not_in:0',
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $pid=$req -> post('pid');
            $name=$req -> post('name');
            $parent=$req -> post('parent');
            $employee_id = $req -> post('lead');
            $status = $req -> post('status');
            $result=DB::table('hr_departments') 
            ->where('id', $pid)
            ->limit(1) 
            ->update(['name'=>$name,'parent' => $parent,'employee_id' => $employee_id,'status'=>$status]); 
            if($result){
                return response()-> json([
                  'status' => 'success',
                  'msg'=>'Department Updated!'
                ]);
            }else{
                return response()->json([
                'status' => 'error',
                'error' => 'Department Not Updated!'
                ]);
            }
        }
    }
    public function delete(Request $req,$id)
    {
        $res = DB::table('hr_departments')
        -> where('parent',$id)
        ->update(['parent'=> 0]); 
        $result=DB::table('hr_departments') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['status'=>'delete']); 
            if($result && $res){
                session()->flash('success','Department Deleted!');
                return redirect('../admin/HR/hrdepartment');
            }elseif($result){
                session()->flash('success','Department Deleted!');
                return redirect('../admin/HR/hrdepartment');
            }
            else{
                session()->flash('error','Department not Deleted!');
                return redirect('../admin/HR/hrdepartment');
            } 
    }
    public function editstatus(Request $req){
        $id = $req -> id;
        // return $id;
        $data = DB::SELECT("SELECT * FROM hr_departments where id = $id");
        foreach ($data as $value) {
           
        }
        if($value -> status == "Active"){
         $result = DB::table('hr_departments') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['status' => 'Inactive']); 
        }else{
         $result = DB::table('hr_departments') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['status' => 'Active']);
        }
    }
    public function index(Request $req)
    {
        // $res = new Material;
        $sname = $req -> post('dname');
        $pname = $sname; 
        $ty = $req -> post('status');
        $type = $ty; 
        // return $req;
        if ($sname == null && $ty == null) {
            $data = hr_department::where('status','!=','delete')->orderBy('id')->paginate(10);
            if ($data) {
                return view('../admin/HR/hrdepartment',compact('data'));
            }else{
                return redirect('../hrdepartment');
            }
        }else if ($sname == $pname && $ty == null) {
            // $data = DB::SELECT("SELECT * FROM sellers WHERE seller_name LIKE '%$sname%'");
           $data = hr_department::where('status','!=','delete')->where('name', 'like', '%' . $pname . '%')->paginate(10);
           if ($data) {
                return view('../admin/HR/hrdepartment',compact('data'));
            }else{
                return redirect('../hrdepartment');
            }
        }else if ($sname == null && $ty == $type) {
            $data = hr_department::where('status', $type)->paginate(10);
           if ($data) {
                return view('../admin/HR/hrdepartment',compact('data'));
            }else{
                return redirect('../hrdepartment');
            }
        }else if ($sname == $pname && $ty == $type) {
          $data = hr_department::where('name', 'like', '%' . $pname . '%')
          ->Where('status', $type)
          ->paginate(10);
 
            if ($data) {
                return view('../admin/HR/hrdepartment',compact('data'));
            }else{
                return redirect('../hrdepartment');
            }
        }
    }
}
