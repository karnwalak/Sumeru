<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\hr_employees;
use App\Models\hr_department;
use App\Models\hr_task;
use App\Models\hr_allowence;
use App\Models\hr_employee_allowence;
use App\Models\hr_shift;
use App\Models\hr_designation;
use Validator;

class HrEmployeesController extends Controller
{
    public function editloginpermission(Request $req)
    {
        $id = $req -> id;
        // return $id;
        $data = DB::SELECT("SELECT * FROM hr_employees where id = $id");
        foreach ($data as $value) {
           
        }
        if($value -> employee_login == "yes"){
         $res = DB::table('hr_employees') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['employee_login' => 'no']);
        }else{
         $result = DB::table('hr_employees') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['employee_login' => 'yes']);
        }
    }
    public function fetchmobile(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'mobile' => 'required|regex:/^([+]\d{2})?\d{10}$/',
            // 'otp' => 'numeric|digits:6',
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $mobile = $req -> post('mobile');
            $res = hr_employees::where('employee_contact_no','=',$mobile)->get();
            foreach ($res as $value) {
                $id = $value->id;
            }
            if (isset($id)) {
                $date = date("Y-m-d H:i:s");
                $currentDate = strtotime($date);
                $futureDate = $currentDate+(60*5);
                $formatDate = date("Y-m-d H:i:s", $futureDate);
                $otp = 123456;
                $password= md5($otp);
                $result = DB::table('hr_employees') 
                ->where('id', $id)
                ->limit(1) 
                ->update(['employee_password' => $password,'expire_password'=>$formatDate]);
                return response() -> json([
                    'status'=> 'success',
                    'msg'=>'User Found!'
                ]);
            } else {
                return response() -> json([
                    'status'=> 'error',
                    'error'=>'User Not Found!'
                ]);
            }
        }
    }
    public function emplogin(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'otp' => 'required|numeric|digits:6',
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $mobile = $req -> post('mobile');
            $otp = $req -> post('otp');
            $password = md5($otp);
            $res = hr_employees::where('employee_contact_no','=',$mobile)
            ->where('employee_password','=',$password)
            ->get();
            // return $res;
            foreach ($res as $value) {
                $id = $value -> id;
                $username = $value -> employee_name;
                $employee_login = $value -> employee_login;
                $expire = $value -> expire_password;
            }
            // return $employee_login;
            if ($employee_login == 'yes') {
                $cur_time = date("Y-m-d H:i:s");
                // return $cur_time;
                if($cur_time <= $expire){
                    if (isset($res['0'] -> id)) {
                        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz{}[]$!/+';
                        $pass = substr(str_shuffle($data), 0, 10);
                        $result = DB::table('hr_employees') 
                        ->where('id', $id)
                        ->limit(1) 
                        ->update(['employee_password' => $pass,'expire_password'=>date("Y-m-d H:i:s")]);        
                        session() -> put('id',$id);
                        session() -> put('username',$username);
                        $req -> session() -> put('ADMIN_LOGIN',true);
                        $req -> session() -> put('ADMIN_ID',$res['0'] -> id);
                        return response() -> json(['status' => 'success',
                           'msg' => 'You are logged in now!']);
                      }else{
                        return response() -> json(['status' => 'error',
                           'error' => 'Please enter correct details!']);
                      }
                }else{
                    return response()->json(['status'=>'error','error'=>'OTP has been expired!']);
                }
            } else {
                return response()->json(['status'=>'error','error'=>'User is disabled by admin!']);
            }
            
        }
    }
    public function employeetask(request $req,$id){
        $tasks = hr_task::where('task_status','!=','delete')->join('hr_task_emplyees','hr_tasks.id','=','hr_task_emplyees.task_id')
        ->where('hr_task_emplyees.emplyee_id','=',$id)
        ->get(['hr_tasks.*','hr_task_emplyees.emplyee_id']);
        return view('../admin/HR/employeetask') -> with('tasks',$tasks);
    }
    public function fetchshift(Request $req,$id){
        return view('../admin/HR/employeeshift') -> with('data',hr_shift::where('shift_status','!=','delete')
        ->where('id','=',$id)
        ->paginate(10));
    }
    public function editstatus(Request $req){
        $id = $req -> id;
        // return $id;
        $data = DB::SELECT("SELECT * FROM hr_employees where id = $id");
        foreach ($data as $value) {
           
        }
        if($value -> employee_status == "Active"){
         $res = DB::table('hr_employees') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['employee_status' => 'Inactive']);
        }else{
         $result = DB::table('hr_employees') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['employee_status' => 'Active']);
        }
    }
    public function show(Request $req){
         return view('../admin/HR/addemployees') 
         -> with('shift',hr_shift::where('shift_status','=','Active')->get())
         -> with('department',hr_department::where('status','=','Active')->get())
         -> with('allowance',hr_allowence::where('allowence_status','=','Active')->get());
    }
    public function showdata(Request $req){
        return view('../admin/HR/employees') 
        -> with('employee',hr_employees::orderBy('id','DESC')->where('employee_status','!=','delete')->paginate(10));
    }
    public function create(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'profile_avatar' => 'required|max:512',
            'fullname' => 'required|regex:/^[a-zA-Z\s]+$/',
            'shift' => 'required',
            'department' => 'required',
            'phone' => 'required|regex:/^([+]\d{2})?\d{10}$/|unique:hr_employees,employee_contact_no',
            'email' => 'required|email|unique:hr_employees,email_id',
            'salary' => 'required|numeric',
            // 'allowence' => 'required|not_in:0',
            'employee_status' => 'required|not_in:0',
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $ids = hr_employees::max('id');
            // return $ids;
            $po_id = $ids + 1;
            $allowence = $req -> post('allowence');
            $file = $req -> file('profile_avatar');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $data = [
               'employee_name' => $req -> post('fullname'),
               'department_id' => $req -> post('department'),
               'shift_id' => $req -> post('shift'),
               'employee_contact_no' => $req -> post('phone'),
               'employee_joining_date' => Date('y-m-d'),
               'employee_img' => $file_name,
               'email_id' => $req -> post('email'),
               'employee_basic_salary' => $req -> post('salary'),
               'employee_status' => $req -> post('employee_status'),
            ];
            // return count($req -> allowence);
            $res = hr_employees::insert($data);
            if(isset($allowence)){
                for ($i=0; $i < count($req -> allowence) ; $i++) {
                    $data2 = [
                     'employee_id' => $po_id ,
                     'allowence_id' => $allowence[$i] 
                    ];
                    $dd2 = DB::table('hr_employee_allowences') -> insert($data2);
                 }
            }
            if($res){
                $file->move('upload', $file_name);
                return response()-> json([
                    'status' => 'success',
                    'msg'=>'Employee Added!'
                  ]);
            }
            else if($res && $dd2){
                $file->move('upload', $file_name);
                return response()-> json([
                    'status' => 'success',
                    'msg'=>'Employee Added!'
                  ]);
            }else{
                return response()-> json([
                    'status' => 'error',
                    'error'=>'Employee Not Added!'
                  ]);
            }
        }
    }
    public function profile(Request $req,$id){
        $employee = hr_employees::join('hr_shifts','hr_employees.shift_id','=','hr_shifts.id')->
        join('hr_departments','hr_employees.department_id','=','hr_departments.id')->
        where('hr_employees.id','=',$id)->get(['hr_employees.*','hr_shifts.shift_name','hr_departments.name']);
        return view('../admin/HR/employeeprofile') 
        -> with('data',$employee);
    }
    public function delete(Request $req,$id){
        $result=DB::table('hr_employees') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['employee_status'=>'delete']); 
        if($result){
            session()->flash('success','Employee Deleted!');
            return redirect('../admin/HR/employees');
        }else{
            session()->flash('error','Employee not Deleted!');
            return redirect('../admin/HR/employees');
        } 
    }
    public function edit(Request $req,$id){
        return view('../admin/HR/editemployees') 
        -> with('employee',hr_employees::find($id))
        -> with('shift',hr_shift::where('shift_status','=','Active')->get())
        -> with('allowance',hr_allowence::where('allowence_status','=','Active')->get())
        -> with('employee_allowance',hr_employee_allowence::where('employee_id','=',$id)->get())
        -> with('department',hr_department::where('status','=','Active')->get());
    } 
    public function editemployee(Request $req){
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
            
            if($result && $dd2){
                return response()-> json([
                    'status' => 'success',
                    'msg'=>'Employee Updated!'
                  ]);
            }else if($result || $dd2){
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
}
?>