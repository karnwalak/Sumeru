<?php

namespace App\Http\Controllers;
use App\Models\worker_task;
use App\Models\worker;
use App\Models\work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
class WorkerTaskController extends Controller
{
    public function finishstatus(Request $req)
    {
        $id = $req -> id;
        DB::table('worker_tasks') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['end_date' => date('y-m-d')]); 
        DB::table('works') 
            ->where('task_id', $id)
            ->limit(1) 
            ->update(['status' => 'finish']); 
    }
    public function changeworkstatus(Request $req)
    {
        $id = $req -> id;
        // return $id;
        $data = DB::SELECT("SELECT * FROM works where task_id = $id");
        foreach ($data as $value) {
           
        }
        if($value -> status == "start"){
         $result = DB::table('works') 
            ->where('task_id', $id)
            ->limit(1) 
            ->update(['status' => 'resume']); 
        }else{
         $result = DB::table('works') 
            ->where('task_id', $id)
            ->limit(1) 
            ->update(['status' => 'start']);
        $result = DB::table('worker_tasks') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['start_date' => date('y-m-d')]);
        }
    }
    public function showdata(Request $req,$ids)
    {
        $worker = worker::where('worker_status','=','Active')->get();
        return view('../admin/CIVIL/addwork')->with('worker',$worker)->with('id',$ids);
    }
    public function show(Request $req,$id)
    {
        $data = worker_task::join('works','worker_tasks.id','=','works.task_id')
        ->join('workers','workers.id','=','works.worker_id')
        ->where('works.worker_id','=',$id)
        ->get(['worker_tasks.*','works.*','workers.worker_name']);
        return view('../admin/CIVIL/works')->with('data',$data);
    }
    public function create(Request $req)
    {
       // return $req;
       $valid = Validator::make($req -> all(),[
        'compose_subject' => 'required',
        'message' => 'required',
        'responsible_person' => 'required',
        'inventory_access' => 'required',
        'payment' => 'required',
        'deadline' => 'required',
        'status' => 'required'
       ]);
    if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
    }else{
       $res=  new worker_task;
       $ids = worker_task::max('id');
        // return $ids;
       $po_id = $ids + 1;
    //    return $po_id;
       $rep = $req -> post('responsible_person');
       $res -> task_title = $req -> post('compose_subject');
       $res -> task_description = $req -> post('message');
       $res -> deadline = $req -> post('deadline');
       $res -> inventory_access = $req -> post('inventory_access');
       $res -> payment = $req -> post('payment');
       $res -> start_date = NULL;
       $res -> end_date = NULL;
    //    $res -> task_status = $req -> post('status');
       $res -> created_by =session()->get('id');
    //    $res -> updated_by = $req -> post('admin_id');
       $res -> save();
       for ($i=0; $i < count($rep) ; $i++) {
        $data2 = [
         'task_id' => $po_id ,
         'worker_id' => $rep[$i],
         'status' => 'Pending' 
        ];
        $dd2 = DB::table('works') -> insert($data2);
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
   public function viewwork(Request $req,$id)
   {
    //    return $id;
        $data = worker_task::join('works','worker_tasks.id','=','works.task_id')
        ->join('workers','workers.id','=','works.worker_id')
        ->where('works.task_id','=',$id)
        ->get(['worker_tasks.*','works.*','workers.worker_name']);
        return view('../admin/CIVIL/viewwork')->with('data',$data);
   }
   public function editwork(Request $req,$id)
   {
    $worker = work::join('workers','works.worker_id','=','workers.id')
    ->where('works.worker_id',$id)
    ->get(['workers.worker_name','workers.id']);
    return view('../admin/CIVIL/editwork')
    -> with('worker',$worker)
    -> with('workers',worker::where('worker_status','=','Active')->get())
    -> with('workedit',worker_task::find($id));
   }
   public function updatework(Request $req)
   {
    $valid = Validator::make($req -> all(),[
        'compose_subject' => 'required',
        'message' => 'required',
        'responsible_person' => 'required',
        'inventory_access' => 'required',
        'payment' => 'required',
        'deadline' => 'required',
        'status' => 'required'
       ]);
    if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
    }else{
       $po_id = $req -> post('task_id');
       $rep = $req -> post('responsible_person');
       $task_title = $req -> post('compose_subject');
       $task_description = $req -> post('message');
       $deadline = $req -> post('deadline');
       $inventory_access = $req -> post('inventory_access');
       $payment = $req -> post('payment');
       $result = DB::table('worker_tasks') 
        ->where('id', $po_id)
        ->limit(1) 
        ->update(['task_title'=>$task_title,'task_description' => $task_description,'deadline'=>$deadline,
        'inventory_access'=> $inventory_access,'payment'=>$payment]);
       $delete = DB::DELETE("DELETE FROM works WHERE task_id = $po_id");
       for ($i=0; $i < count($rep) ; $i++) {
        $data2 = [
         'task_id' => $po_id ,
         'worker_id' => $rep[$i],
         'status' => 'Pending',
        ];
        $dd2 = DB::table('works') -> insert($data2);
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
