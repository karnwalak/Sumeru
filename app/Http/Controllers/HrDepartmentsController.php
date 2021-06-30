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
        $emp = DB::table('hr_employees')->get();
        // return $emp;
        return view('../admin/HR/addhrdepartment') ->with('employee',$emp);
    }
    public function show(Request $req){
       $data = DB::table('hr_departments')
       ->join('hr_employees', 'hr_departments.employee_id', '=', 'hr_employees.id')
       ->select('hr_departments.*', 'hr_employees.employee_name')
       ->get();
       foreach ($data as $value) {
           $parent_id = $value-> parent;
        //    echo $parent_id;
        $res = hr_department::where('id',$parent_id);    
        }

       
       return view('../admin/HR/hrdepartment') -> with('data',$data) -> with('res',$res);
    }
    public function edit(Request $req,$id){
        return view('../admin/HR/edithrdepartment')->with('data',hr_department::find($id));
    }
}
