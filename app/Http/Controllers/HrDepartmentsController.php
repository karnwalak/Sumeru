<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\hr_departments;
use App\Models\hr_employees;
use Validator;
use View;
class HrDepartmentsController extends Controller
{
    public function showdata(Request $req)
    {
        $emp = DB::table('hr_employees')->get();
        // return $emp;
        return view('../admin/HR/addhrdepartment') ->with('employee',$emp);
    }
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
        $res = hr_departments::insert($data);
        if($res){
            return response() -> json(['status' => 'success',
             'msg' => 'Department Added!'
            ]);
        }else{
            return response() -> json(['status' => 'error',
            'msg' => 'Department not Added!'
        ]);
        }
        }
    }
}
