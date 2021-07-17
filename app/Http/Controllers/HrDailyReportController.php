<?php

namespace App\Http\Controllers;
use App\Models\hr_daily_report;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\hr_department;
use App\Models\hr_employees;
use Validator;

class HrDailyReportController extends Controller
{
    public function editdailyreports(Request $req,$id)
    {
        return view('../admin/HR/editdailyreports')->with('data',hr_daily_report::find($id));
    }
    public function editreport(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'title' => 'required',
            'message' => 'required',
            'file' => 'mimes:pdf',
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $file = $req -> file('file');
            if (isset($file)) {
                $file_name = time().'.'.$file->getClientOriginalExtension();
            }
            $pid = $req -> post('pid');
            $title = $req -> post('title');
            // $doc_upload =  $file_name;
            $date_time = date("F j, Y, g:i a");
            $description = $req -> post('message');
            if(isset($file_name)){
                $file->move('upload', $file_name);
                $res=DB::table('hr_daily_reports') 
                ->where('id', $pid)
                ->limit(1) 
                ->update(['title' => $title,'description' => $description,'date_time'=>$date_time,'doc_upload'=> $file_name]); 
            }else{
                $res=DB::table('hr_daily_reports') 
                ->where('id', $pid)
                ->limit(1) 
                ->update(['title' => $title,'description' => $description,'date_time'=>$date_time]); 
            }
            if($res){
                return response()-> json(['status' => 'success','msg'=>'Report Updated!'
                  ]);
            }else{
                return response()-> json(['status' => 'error','error'=>'Report Not Updated!'
                  ]);
            }
        }
    }
    public function viewdailyreports(Request $req,$id)
    {
        $data = hr_daily_report::where('hr_daily_reports.id',$id)->join('hr_employees','hr_daily_reports.employee_id','=','hr_employees.id')
        ->get(['hr_daily_reports.*','hr_employees.employee_name','hr_employees.employee_img','hr_employees.department_id']);
        return view('../admin/HR/viewdailyreports')->with('data',$data);
    }
   public function show(Request $req)
   {
       $data = hr_daily_report::where('hr_daily_reports.employee_id','=',session()->get('id'))->join('hr_employees','hr_daily_reports.employee_id','=','hr_employees.id')
       ->get(['hr_daily_reports.*','hr_employees.employee_name','hr_employees.employee_img','hr_employees.department_id']);
       return view('../admin/HR/dailyreports')->with('data',$data);
   }
   public function addreport(Request $req){
    $valid = Validator::make($req -> all(),[
        'title' => 'required',
        'message' => 'required',
        'file' => 'required|mimes:pdf',
       ]);
    if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
    }else{

        $file = $req -> file('file');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        // return $file_name;
        $data = [
            'employee_id' => session()->get('id'),
            'title' => $req -> post('title'),
            'doc_upload' =>  $file_name,
            'date_time' =>  date("F j, Y, g:i a"),
            'description' => $req -> post('message'),
        ];
        $res = hr_daily_report::insert($data);
        if($res){
            $file->move('upload', $file_name);
            return response()-> json([
                'status' => 'success',
                'msg'=>'Report Added!'
              ]);
        }else{
            return response()-> json([
                'status' => 'error',
                'error'=>'Report Not Added!'
              ]);
        }

    }
      
   }
}
