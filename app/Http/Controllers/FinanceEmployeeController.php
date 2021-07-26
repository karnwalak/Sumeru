<?php
namespace App\Http\Controllers;
use App\Models\hr_employees;
use App\Models\crm_booking;
use App\Models\PurchaseOrder;
use App\Models\hr_department;
use App\Models\hr_task;
use App\Models\hr_allowence;
use App\Models\employee_salarie;
use App\Models\hr_employee_allowence;
use App\Models\hr_shift;
use App\Models\hr_designation;
use App\Models\purchase_order_payment_log;
use App\Models\crm_booking_payment_log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
use Carbon\Carbon;
class FinanceEmployeeController extends Controller
{
    public function showinsentive(Request $req)
    {
        return view('../admin/FINANCE/dailycashincentive') -> with('data',employee_salarie::where('employee_id',session()->get('id'))->get());
    }
    public function addcashincentive(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'amount' => 'required|numeric',
            'comment' => 'required',
        ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $data = [
            'employee_id' => $req -> post('employee_id'),
            'date' => date('y-m-d'),
            'amount' => $req -> post('amount'),
            'comment' => $req -> post('comment'),
            'payment_type' => 'UPI',
            ];
            $res = employee_salarie::insert($data);
            if($res){
                return response() -> json(['status' => 'success',
                'msg' => 'Icentive Added!']);
            }else{
                return response() -> json(['status' => 'error',
                'error' => 'Icentive Not Added!']);
            }
        }
    }
    public function checkbookingcheckbox(Request $req)
    {
        $id = $req -> id;
        $data = crm_booking_payment_log::where('booking_id',$id)->get();
        $paid = crm_booking_payment_log::where('booking_id',$id)->sum('amount');
        $total = crm_booking::where('id',$id)->sum('booking_amount');
        foreach ($data as $value) {
        }
        $date = $value-> date;
        $payment_method = $value-> payment_method;
        $employee_id = $value-> employee_id;
        $transction_id = $value-> transction_id;
        $comment = $value-> comment;
        // $insert = [
        //    'date' => date('y-m-d'),
        //    'amount' => $total - $paid,
        //    'payment_type' => $payment_method,
        //    'employee_id' =>  $employee_id,
        //    'comment' => 'Recieved!',
        // ];
        // $res = employee_salarie::insert($insert);
        $query = DB::table('crm_bookings') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['status' => 'booked']);
    }
    public function show(Request $req)
    {
        $data = hr_employees::orderBy('id','DESC')->where('employee_status','!=','delete')->where('id','=',session()->get('id'))->get();
        return view('../admin/FINANCE/salaries') -> with('data',$data);
        // $data = employee_salaries::join('hr_employees','employee_salaries.employee_id','=','hr_employees.employee_id')
        // ->select('hr_employees.*','SUM(employee_salaries.amount) as amount')
        // // ->groupBy('employee_salaries')
        // // ->where('employee_salaries.date', Carbon::now()->month)
        // // ->where('employee_status','!=','delete')
        // ->get();
        // return view('../admin/FINANCE/salaries') -> with('data',$data);
    }
    public function addtransactionsemployee(Request $req,$id)
    {
        return view('../admin/FINANCE/addtransactionsemployee') 
        -> with('id',$id) 
        -> with('data',employee_salarie::where('employee_id',$id)->paginate(10));
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
    public function editdata(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'profile_avatar' => 'max:1024',
            'fullname' => 'required|regex:/^[a-zA-Z\s]+$/',
            'shift' => 'required',
            'department' => 'required',
            'phone' => 'required|regex:/^([+]\d{2})?\d{10}$/',
            'email' => 'required|email',
            'salary' => 'required|numeric',
            // 'allowence' => 'required|not_in:0',
            'employee_status' => 'required|not_in:0',
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $pro_id = $req -> post('pid');
            $allowence = $req -> post('allowence');
            $file = $req -> file('profile_avatar');
            if (isset($file)) {
                $file_name = time().'.'.$file->getClientOriginalExtension();
            }
            $employee_name = $req -> post('fullname');
            $department_id = $req -> post('department');
            $shift_id = $req -> post('shift');
            $employee_contact_no = $req -> post('phone');
            $email_id = $req -> post('email');
            $employee_basic_salary = $req -> post('salary');
            $employee_status = $req -> post('employee_status');
            $email_exist = DB::SELECT("SELECT * FROM hr_employees WHERE email_id = '$email_id'");
            $mobile_exist = DB::SELECT("SELECT * FROM hr_employees WHERE employee_contact_no = '$employee_contact_no'");
            // return count($email_exist);
            foreach ($email_exist as $value) {
            }
            foreach ($mobile_exist as $val) {
            }
            if(count($email_exist) > 0 && $value ->id != $pro_id){
                return response() -> json(['status' => 'error',
                'error' => 'Email already exist!']); 
            }elseif(count($mobile_exist) > 0 && $val ->id != $pro_id){
                return response() -> json(['status' => 'error',
                'error' => 'Mobile already exist!']); 
            }else{
            if(isset($file_name)){
                $file->move('upload', $file_name);
                $result = DB::table('hr_employees') 
                ->where('id', $pro_id)
                ->limit(1) 
                ->update(['department_id'=>$department_id,'shift_id' => $shift_id,'employee_name'=>$employee_name,'employee_contact_no'=>$employee_contact_no,
                'email_id'=>$email_id,'employee_img'=>$file_name,'employee_basic_salary'=>$employee_basic_salary,'employee_status'=>$employee_status]); 
            }else{
                $result = DB::table('hr_employees') 
                ->where('id', $pro_id)
                ->limit(1) 
                ->update(['department_id'=>$department_id,'shift_id' => $shift_id,'employee_name'=>$employee_name,'employee_contact_no'=>$employee_contact_no,
                'email_id'=>$email_id,'employee_basic_salary'=>$employee_basic_salary,'employee_status'=>$employee_status]); 
            }
            }
            if (isset($allowence)) {
                $de = DB::DELETE("DELETE FROM hr_employee_allowences WHERE employee_id = $pro_id");
                for ($i=0; $i < count($req -> allowence) ; $i++) {
                $data2 = [
                 'employee_id' => $pro_id ,
                 'allowence_id' => $allowence[$i] 
                ];
                $dd2 = DB::table('hr_employee_allowences') -> insert($data2);
                }
            }
            
            if($result){
                return response()-> json([
                    'status' => 'success',
                    'msg'=>'Employee Updated!'
                  ]);
            }else if($dd2){
                return response()-> json([
                    'status' => 'success',
                    'msg'=>'Employee Updated!'
                  ]);
            }else if($result && $dd2){
                return response()-> json([
                    'status' => 'success',
                    'msg'=>'Employee Updated!'
                  ]);
            }else{
                return response()-> json([
                    'status' => 'error',
                    'error'=>'Employee Not Updated!'
                  ]);
            }
        }
    }
    public function payAmountEmployee(request $req)
    {
        $valid = Validator::make($req -> all(),[
            'amount' => 'required|numeric',
            'transaction_type' => 'required|not_in:0',
            'comment' => 'required',
            'date' => 'required|date'
        ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $data = [
                'amount' => $req -> post('amount'),
                'date' => $req -> post('date'),
                'payment_type' => $req -> post('transaction_type'),
                'employee_id' => session()->get('id'),
                'comment' => $req -> post('comment'),
            ];
            $res = employee_salarie::insert($data);
            if($res){
                return response() -> json(['status' => 'success',
                'msg' => 'Payment Added!']);
            }else{
                return response() -> json(['status' => 'error',
                'error' => 'Payment Not Added!']);
            }
        }
    }
}
