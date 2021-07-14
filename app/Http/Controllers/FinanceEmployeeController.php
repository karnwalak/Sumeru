<?php
namespace App\Http\Controllers;
use App\Models\hr_employees;
use App\Models\crm_booking;
use App\Models\PurchaseOrder;
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
        return $id;
    }
    public function editemployees(Request $req,$id)
    {
        return $id;
    }
}
