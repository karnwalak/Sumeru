<?php
namespace App\Http\Controllers;
use App\Models\hr_employees;
use App\Models\crm_booking;
use App\Models\PurchaseOrder;
use App\Models\hr_department;
use App\Models\hr_task;
use App\Models\hr_allowence;
use App\Models\hr_employee_allowence;
use App\Models\hr_shift;
use App\Models\hr_designation;
use App\Models\purchase_order_payment_log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
class FinanceEmployeeController extends Controller
{
    public function show(Request $req)
    {
        $data = crm_booking::orderBy('id','DESC')
                ->where('status','=','partiallybooked')
                ->join('hr_employees','crm_bookings.employee_id','=','hr_employees.id')
                ->select(['hr_employees.employee_name','hr_employees.employee_contact_no','crm_bookings.*'])
                ->paginate(10);
        $datas = crm_booking::orderBy('id','DESC')
                ->where('status','=','booked')
                ->join('hr_employees','crm_bookings.employee_id','=','hr_employees.id')
                ->select(['hr_employees.employee_name','hr_employees.employee_contact_no','crm_bookings.*'])
                ->paginate(10);
        return view('../admin/FINANCE/salaries') -> with('data',$data)-> with('datas',$datas);
    }
    public function addtransactionsemployee(Request $req,$id)
    {
        return view('../admin/FINANCE/addtransactionsemployee') -> with('id',$id);
    }
    public function editemployees(Request $req,$id)
    {
        return view('../admin/FINANCE/editemployees')  
        -> with('employee',hr_employees::find($id))
        -> with('shift',hr_shift::where('shift_status','=','Active')->get())
        -> with('allowance',hr_allowence::where('allowence_status','=','Active')->get())
        -> with('employee_allowance',hr_employee_allowence::where('employee_id','=',$id)->get())
        -> with('department',hr_department::where('status','=','Active')->get());;
    }
}
