<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\hr_employees;
use App\Models\hr_department;
use App\Models\hr_shift;
use App\Models\hr_designation;
use Validator;

class HrEmployeesController extends Controller
{
    public function show(Request $req){
         return view('../admin/HR/addemployees') 
         -> with('shift',hr_shift::get())
         -> with('department',hr_department::get());
    }
    public function create(Request $req)
    {
        return $req;
    }
}
?>