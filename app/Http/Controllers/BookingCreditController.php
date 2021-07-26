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
    public function checkbookingcheckbox(Request $req)
    {
        $id = $req -> id;
        // return $id;
        $data = crm_booking_payment_log::where('booking_id',$id)->get();
        $paid = crm_booking_payment_log::where('booking_id',$id)->sum('amount');
        $total = crm_booking::where('id',$id)->sum('booking_amount');
        foreach ($data as $value) {
        }
        $date = $value-> date;
        $payment_method = $value-> payment_method;
        $employee_id = $value-> employee_id;
        $comment = $value-> comment;
        $insert = [
           'booking_id' => $id,
           'date' => date('y-m-d'),
           'amount' => $total - $paid,
           'payment_method' => $payment_method,
           'employee_id' =>  $employee_id,
           'comment' => 'Recieved!',
           'status' => 'Submitted',
           'transction_id' => rand(100,999),
        ];
        $res = crm_booking_payment_log::insert($insert);
        // $result = crm_booking_payment_log::destroy($id);
    }
    public function showdata(Request $req)
    {
        $data = crm_booking_payment_log::where('crm_booking_payment_logs.status','=','Pending')
        ->join('hr_employees','crm_booking_payment_logs.employee_id','=','hr_employees.id')
        ->join('crm_bookings','crm_booking_payment_logs.booking_id','=','crm_bookings.id')
        ->select(['hr_employees.employee_name','hr_employees.employee_contact_no','crm_bookings.booking_amount','crm_booking_payment_logs.*'])
        ->where('hr_employees.id','=',session()->get('id'))
        ->paginate(10);

        $datas =crm_booking_payment_log::where('crm_booking_payment_logs.status','=','Submitted')
        ->join('hr_employees','crm_booking_payment_logs.employee_id','=','hr_employees.id')
        ->join('crm_bookings','crm_booking_payment_logs.booking_id','=','crm_bookings.id')
        ->select(['hr_employees.employee_name','hr_employees.employee_contact_no','crm_bookings.booking_amount','crm_booking_payment_logs.*'])
        ->where('hr_employees.id','=',session()->get('id'))
        ->paginate(10);

        return view('../admin/FINANCE/bookingcredit')->with('data',$data)->with('datas',$datas);
    }
}

