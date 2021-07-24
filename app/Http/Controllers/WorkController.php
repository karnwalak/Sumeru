<?php
namespace App\Http\Controllers;
use App\Models\work;
use App\Models\worker_task;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function sortwork(Request $req,$st)
    {
        // return $st;
        $data = work::join('worker_tasks','works.task_id','=','worker_tasks.id')
        ->join('workers','works.worker_id','=','workers.id')
        ->where('works.status','=',$st)
        ->where('workers.id','=',session()->get('id'))
        ->get(['worker_tasks.*','works.*','workers.worker_name']);    
        if ($data) {
            return view('../admin/CIVIL/works',compact('data'));
        }else{
            return redirect('../admin/CIVIL/works');
        }
    }
}
