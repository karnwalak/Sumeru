<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\hr_task;
use App\Models\hr_employees;
use Validator;
class HrTaskController extends Controller
{
    public function create(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'compose_subject' => 'required',
            'message' => 'required',
            'responsible_person' => 'required',
            'deadline' => 'required',
            'status' => 'required'
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
           $res=  new hr_task;
           $ids = hr_task::max('id');
            // return $ids;
           $po_id = $ids + 1;
        //    return $po_id;
           $rep = $req -> post('responsible_person');
           $res -> task_title = $req -> post('compose_subject');
           $res -> task_discription = $req -> post('message');
           $res -> deadline = $req -> post('deadline');
           $priority = $req -> post('priority');
           if (isset($priority)) {
            $res -> is_priority = 'Yes';
           }else{
            $res -> is_priority = 'No';
           }
           $res -> task_parent = 0;
           $res -> task_status = $req -> post('status');
           $res -> created_by = $req -> post('admin_id');
           $res -> updated_by = $req -> post('admin_id');
           $res -> save();
           for ($i=0; $i < count($rep) ; $i++) {
            $data2 = [
             'task_id' => $po_id ,
             'emplyee_id' => $rep[$i] 
            ];
            $dd2 = DB::table('hr_task_emplyees') -> insert($data2);
           }
           if($res -> save() && $dd2){
            return response() -> json(['status' => 'success',
            'msg' => 'Task Added!']);
           }else{
            return response() -> json(['status' => 'error',
            'error' => 'Task Not Added!']);
           }
        }
    }
    public function show(Request $req)
    {
        return view('../admin/HR/addtasks') -> with('employee',hr_employees::where('employee_status','=','Active')->get());
    }
    public function showdata(Request $req)
    {
        $tasks = hr_task::where('task_status','!=','delete')->join('hr_task_emplyees','hr_tasks.id','=','hr_task_emplyees.task_id')
        ->get(['hr_tasks.*','hr_task_emplyees.emplyee_id']);
        return view('../admin/HR/tasksandprojects') -> with('tasks',$tasks);
    }
    public function view(Request $req,$id){
        return view('../admin/HR/viewtasks') -> with('viewtasks',hr_task::find($id));
    }
    public function edit(Request $req,$id){
        return view('../admin/HR/edittask')
        -> with('employee',hr_employees::where('employee_status','=','Active')->get())
        -> with('taskedit',hr_task::find($id));
    }
    public function edittask(Request $req){
        
        $valid = Validator::make($req -> all(),[
            'compose_subject' => 'required',
            'message' => 'required',
            'responsible_person' => 'required',
            'deadline' => 'required',
            'status' => 'required'
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
           $po_id = $req -> post('pid');
           $rep = $req -> post('responsible_person');
           $task_title = $req -> post('compose_subject');
           $task_discription = $req -> post('message');
           $deadline = $req -> post('deadline');
           $priority = $req -> post('priority');
           if (isset($priority)) {
            $is_priority = 'Yes';
           }else{
            $is_priority = 'No';
           }
           $task_parent = 0;
           $task_status = $req -> post('status');
           $created_by = $req -> post('admin_id');
           $updated_by = $req -> post('admin_id');
           $result = DB::table('hr_tasks') 
            ->where('id', $po_id)
            ->limit(1) 
            ->update(['task_title'=>$task_title,'task_discription' => $task_discription,'deadline'=>$deadline,'is_priority'=>$is_priority,
            'task_status'=>$task_status,'created_by'=>$created_by,'updated_by'=>$updated_by]);
           $delete = DB::DELETE("DELETE FROM hr_task_emplyees WHERE task_id = $po_id");
           for ($i=0; $i < count($rep) ; $i++) {
            $data2 = [
             'task_id' => $po_id ,
             'emplyee_id' => $rep[$i] 
            ];
            $dd2 = DB::table('hr_task_emplyees') -> insert($data2);
           }
           if($result && $delete && $dd2){
            return response() -> json(['status' => 'success',
            'msg' => 'Task Updated!']);
           }else{
            return response() -> json(['status' => 'error',
            'error' => 'Task Not Updated!']);
           }
        }
    
    }
}
