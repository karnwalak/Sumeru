<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
use Mail;
class AdminController extends Controller
{
    public function setPassword(Request $req){
      $valid = Validator::make($req -> all(),[
      'password' => 'required|required_with:confirm_password|same:confirm_password|regex:/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',
      ]);
      if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
      }else{
         $res = new Admin;
         $id = $req -> post('id');
         $pass = $req -> post('password');
         $password = md5($pass);
         $result = DB::table('users') 
                ->where('id', $id) 
                ->limit(1) 
                ->update(['user_password' => $password]);
        if ($result) {
          return response() -> json(['status' => 'success',
          'msg' => 'Password Reset!']);
        }else{
          return response() -> json(['status' => 'error',
          'msg' => 'Password not Reset!']);
        }
      }
    }
    public function forgotPassword(Request $req){
            $valid = Validator::make($req -> all(),[
             'email' => 'required|email',
            ]);
            if (!$valid -> passes()) {
              return response() -> json(['status' => 'error',
              'error' => $valid -> errors()]);
            }else{
              $res = new Admin;
              $email = $req -> post('email');
              $result = DB::SELECT("SELECT * FROM users WHERE user_email = '$email'");
              foreach ($result as $value) {
                $id = $value -> id;
              }
              // return $db_email;
              if ($result) {
                session() ->put('id',$id);
                $data=['name'=>"Akshay",'data'=>"Hello Akshay"];
                 $user['to']=$email;
                 Mail::send('mail',$data,function($message) use ($user){
                 $message->to($user['to']);
                 $message->subject('no-reply:');
                 });
                return response() -> json(['status' => 'success',
                'msg' => 'Password set link has been sent!']);
                 // echo "string";
              }else{
                return response() -> json(['status' => 'error',
                'error' => 'Email not found!']);
              }
            }
    }
    public function auth(Request $req){
      $valid = Validator::make($req -> all(),[
       'username' => 'required',
       'password' => 'required',
      ]);

      if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
      }else{
      // $remember_me = $req->has('remember_me') ? true : false;
      $username = $req -> post('username');
      $pas = $req -> post('password');
      $pass = md5($pas);
      // return $req;
      // $password = md5($pass);
      $result = Admin::where(['user_email' => $username,'user_password' => $pass]) -> get();
      foreach ($result as $value) {
        $id = $value -> id;
        $username = $value -> user_email;
      }
      // if (isset($result['0'] -> id,$remember_me)) {
      if (isset($result['0'] -> id)) {
        session() -> put('id',$id);
        session() -> put('username',$username);
        $req -> session() -> put('ADMIN_LOGIN',true);
        $req -> session() -> put('ADMIN_ID',$result['0'] -> id);
        return response() -> json(['status' => 'success',
           'msg' => 'You are logged in now!']);
      }else{
        return response() -> json(['status' => 'error',
           'error' => 'Please enter correct details!']);
      }
    }
    }
}
