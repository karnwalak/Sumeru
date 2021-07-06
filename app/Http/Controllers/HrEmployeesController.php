<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\hr_employees;
use App\Models\hr_department;
use App\Models\hr_allowence;
use App\Models\hr_employee_allowence;
use App\Models\hr_shift;
use App\Models\hr_designation;
use Validator;

class HrEmployeesController extends Controller
{
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
        -> with('employee',hr_employees::where('employee_status','!=','delete')->paginate(10));
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
            'allowence' => 'required|not_in:0',
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
               'employee_img' => $file_name,
               'email_id' => $req -> post('email'),
               'employee_basic_salary' => $req -> post('salary'),
               'employee_status' => $req -> post('employee_status'),
            ];
            // return count($req -> allowence);
            $res = hr_employees::insert($data);
            for ($i=0; $i < count($req -> allowence) ; $i++) {
                $data2 = [
                 'employee_id' => $po_id ,
                 'allowence_id' => $allowence[$i] 
                ];
                $dd2 = DB::table('hr_employee_allowences') -> insert($data2);
             }
            if($res && $dd2){
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
        return view('../admin/HR/employeeprofile') 
        -> with('employee',hr_employees::find($id));
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
            'allowence' => 'required|not_in:0',
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
            $de = DB::DELETE("DELETE FROM hr_employee_allowences WHERE employee_id = $pro_id");
            for ($i=0; $i < count($req -> allowence) ; $i++) {
                $data2 = [
                 'employee_id' => $pro_id ,
                 'allowence_id' => $allowence[$i] 
                ];
                $dd2 = DB::table('hr_employee_allowences') -> insert($data2);
             }
            if($result && $dd2){
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