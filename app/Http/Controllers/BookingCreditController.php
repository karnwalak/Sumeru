<?php
namespace App\Http\Controllers;
use App\Models\hr_employees;
use App\Models\crm_booking;
use App\Models\crm_booking_payment_log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
class BookingCreditController extends Controller
{
    public function showdata(Request $req)
    {
        $data = crm_booking::orderBy('id','DESC')
        ->where('crm_bookings.status','=','partiallybooked')
        ->join('hr_employees','crm_bookings.employee_id','=','hr_employees.id')
        ->join('crm_booking_payment_logs','crm_bookings.id','=','crm_booking_payment_logs.booking_id')
        ->select(['hr_employees.employee_name','hr_employees.employee_contact_no','crm_bookings.*','crm_booking_payment_logs.payment_method'])
        ->paginate(10);

        $datas = crm_booking::orderBy('id','DESC')
        ->where('crm_bookings.status','=','booked')
        ->join('hr_employees','crm_bookings.employee_id','=','hr_employees.id')
        ->join('crm_booking_payment_logs','crm_bookings.id','=','crm_booking_payment_logs.booking_id')
        ->select(['hr_employees.employee_name','hr_employees.employee_contact_no','crm_bookings.*','crm_booking_payment_logs.payment_method'])
        ->paginate(10);

        return view('../admin/FINANCE/bookingcredit')->with('data',$data)->with('datas',$datas);
    }
}

