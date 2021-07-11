<?php
namespace App\Http\Controllers;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
class CommentController extends Controller
{
    public function addcomment(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'comment' => 'required'
        ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $timestamp = time();
            $time = date("F d, Y h:i:s A", $timestamp);
            $data = [
               'task_id' => $req -> post('task_id'),
               'comment' => $req -> post('comment'),
               'employee_id' => $req -> post('employee_id'),
               'action' => 'NA',
               'updated_at' =>  date("F j, Y, g:i a"),
            ];
            $res = comment::insert($data);
            if($res){
                return response() -> json([
                  'status' => 'success',
                  'msg' => 'comment added!'
                ]);
            }else{
                return response() -> json([
                    'status' => 'error',
                    'error' => 'comment not added!'
                  ]);
            }
        }
    }
}
