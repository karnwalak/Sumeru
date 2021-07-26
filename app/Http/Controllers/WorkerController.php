<?php

namespace App\Http\Controllers;
use App\Models\worker;
use App\Models\work;
use App\Models\worker_task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
class WorkerController extends Controller
{
    public function statusupdate(Request $req)
    {
        $id = $req -> id;
        $data = DB::SELECT("SELECT * FROM workers where id = $id");
        foreach ($data as $value) {
           
        }
        if($value -> worker_status == "Active"){
         $result = DB::table('workers') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['worker_status' => 'Inactive']); 
        }else{
         $result = DB::table('workers') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['worker_status' => 'Active']);
        }
    }
    public function showdata(Request $req)
    {
        return view('admin/CIVIL/workers') -> with('data',worker::where('worker_status','!=','delete')->where('created_by','=',session()->get('id'))->get());
    }
    public function create(Request $req)
    {
       // return $st;
       $valid = Validator::make($req -> all(),[
        'name' => 'required|regex:/^[a-zA-Z\s]+$/',
        'email' => 'required|email|unique:workers,worker_email',
        'contact' => 'required|regex:/^([+]\d{2})?\d{10}$/|unique:workers,worker_contact',
        'address' => 'required',
        'status' => 'required|not_in:0',
       ]);
 
       if (!$valid -> passes()) {
         return response() -> json(['status' => 'error',
         'error' => $valid -> errors()]);
       }else{
         $res = new worker;
         $res -> worker_name = $req -> post('name');
         $res -> worker_contact = $req -> post('contact');
         $res -> worker_email = $req -> post('email');
         $res -> worker_address = $req -> post('address');
         $res -> worker_status = $req -> post('status');
         $res -> created_by = $req -> session()->get('id');
         $res -> save();
         if ($res -> save()) {
             // session() -> flash('success','worker added!');
             // return redirect('admin/ERP/worker');
             return response() -> json(['status' => 'success',
             'msg' => 'Worker added!']); 
         }else{
             return response() -> json(['status' => 'error',
             'error' => 'Worker not added!']);
         }
     }
    }
    public function edit(Request $req,$id)
    {
        return view('admin/CIVIL/editworker') -> with('data',worker::find($id));
    }
    public function update(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email',
            'contact' => 'required|regex:/^([+]\d{2})?\d{10}$/',
            'address' => 'required',
            'status' => 'required|not_in:0',
           ]);
     
           if (!$valid -> passes()) {
             return response() -> json(['status' => 'error',
             'error' => $valid -> errors()]);
           }else{
             $res = new worker;
             $id = $req -> post('worker_id');
             $worker_name = $req -> post('name');
             $worker_contact = $req -> post('contact');
             $worker_email = $req -> post('email');
             $worker_address = $req -> post('address');
             $worker_status = $req -> post('status');
             $email_exist = DB::SELECT("SELECT * FROM workers WHERE worker_email = '$worker_email'");
             $mobile_exist = DB::SELECT("SELECT * FROM workers WHERE worker_contact = '$worker_contact'");
             foreach ($email_exist as $value) {
             }
             foreach ($mobile_exist as $val) {
             }
             if (count($email_exist) > 0 && $value -> id != $id) {
                 return response() -> json(['status' => 'error',
                'error' => 'Email already exist!']);  
             }else if (count($mobile_exist) > 0 && $val -> id != $id) {
                 return response() -> json(['status' => 'error',
                 'error' => 'Mobile already exist!']);  
             }else{
                 $result = DB::table('workers') 
                 ->where('id', $id)
                 ->limit(1) 
                 ->update(['worker_name'=>$worker_name,'worker_contact' => $worker_contact,'worker_email' => $worker_email,'worker_address' => $worker_address,'worker_status' => $worker_status]); 
                 if ($result) {
                     // session() -> flash('success','worker added!');
                     // return redirect('admin/ERP/worker');
                     return response() -> json(['status' => 'success',
                     'msg' => 'Worker updated!']); 
                 }else{
                     return response() -> json(['status' => 'error',
                     'error' => 'Worker not updated!']);
                 }
             }  
         }
    }
    public function destroy(Request $req,$id)
    {
        $res = new worker;
        $result = DB::table('workers') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['worker_status' => 'delete']);
        if ($result) {
            session() -> flash('success','Worker deleted!');
            return redirect('admin/CIVIL/workers');  
        }else{
            session() -> flash('error','Worker not deleted!');
            return redirect('admin/CIVIL/workers');  
        }
    }
    public function workerprofile(Request $req,$id)
    {
        $data = work::join('worker_tasks','works.task_id','=','worker_tasks.id')
        ->where('works.worker_id','=',$id)
        ->get(['worker_tasks.*','works.*']);
        return view('../admin/CIVIL/workerprofile')->with('data',worker::find($id))->with('task',$data);
    }
    public function showwork(Request $req,$id)
    {
        $data = work::join('worker_tasks','works.task_id','=','worker_tasks.id')
        ->join('workers','works.worker_id','=','workers.id')
        ->where('works.worker_id','=',$id)
        ->get(['worker_tasks.*','works.status','workers.worker_name']);
        return view('../admin/CIVIL/employeework')->with('data',$data);
    }
}
