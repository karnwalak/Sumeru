<?php
namespace App\Http\Controllers;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
class SellerController extends Controller
{
    public function statusupdate(Request $req){
    $id = $req -> id;
    $data = DB::SELECT("SELECT * FROM sellers where id = $id");
    foreach ($data as $value) {
       
    }
    if($value -> seller_status == "Active"){
     $result = DB::table('sellers') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['seller_status' => 'Inactive']); 
    }else{
     $result = DB::table('sellers') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['seller_status' => 'Active']);
    }
    }
    public function dataSeller(Request $req,$st)
    {
        return view('../admin/ERP/addseller') -> with('data',$st);
    }
    public function addSeller(Request $req)
    {
        // return $st;
        $valid = Validator::make($req -> all(),[
       'name' => 'required|regex:/^[a-zA-Z\s]+$/',
       'email' => 'required|email|unique:sellers,seller_email',
       'contact' => 'required|regex:/^([+]\d{2})?\d{10}$/|unique:sellers,seller_contact',
       'address' => 'required',
       'status' => 'required|not_in:0',
      ]);

      if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
      }else{
        $res = new Seller;
        $res -> seller_name = $req -> post('name');
        $res -> seller_contact = $req -> post('contact');
        $res -> seller_email = $req -> post('email');
        $res -> seller_address = $req -> post('address');
        $res -> seller_status = $req -> post('status');
        $res -> save();
        if ($res -> save()) {
            // session() -> flash('success','Seller added!');
            // return redirect('admin/ERP/seller');
            return response() -> json(['status' => 'success',
            'msg' => 'Seller added!']); 
        }else{
            return response() -> json(['status' => 'error',
            'error' => 'Seller not added!']);
        }
    }
}
    public function sellerdelete(Request $req,$id){
        $res = new Seller;
        $result = DB::table('sellers') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['seller_status' => 'delete']);
        if ($result) {
            session() -> flash('success','Seller deleted!');
            return redirect('admin/ERP/seller');  
        }else{
            session() -> flash('error','Seller not deleted!');
            return redirect('admin/ERP/seller');  
        }
    }
    public function edit(Request $req,$id){
        return view('../admin/ERP/editseller') -> with('value',Seller::find($id));
    }
    public function showprofile(Request $req,$id){
        return view('../admin/ERP/sellerprofile') -> with('value',Seller::find($id));
    }
    
    public function editSeller(Request $req){
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
        $res = new Seller;
        $id = $req -> post('seller_id');
        $seller_name = $req -> post('name');
        $seller_contact = $req -> post('contact');
        $seller_email = $req -> post('email');
        $seller_address = $req -> post('address');
        $seller_status = $req -> post('status');
        $email_exist = DB::SELECT("SELECT * FROM sellers WHERE seller_email = '$seller_email'");
        $mobile_exist = DB::SELECT("SELECT * FROM sellers WHERE seller_contact = '$seller_contact'");
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
            $result = DB::table('sellers') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['seller_name'=>$seller_name,'seller_contact' => $seller_contact,'seller_email' => $seller_email,'seller_address' => $seller_address,'seller_status' => $seller_status]); 
            if ($result) {
                // session() -> flash('success','Seller added!');
                // return redirect('admin/ERP/seller');
                return response() -> json(['status' => 'success',
                'msg' => 'Seller updated!']); 
            }else{
                return response() -> json(['status' => 'error',
                'error' => 'Seller not updated!']);
            }
        }  
    }
    }

    public function index(Request $req){
       $res = new Seller;
       $sname = $req -> post('seller_name');
       $seller_name = $sname; 
       $st = $req -> post('status');
       $status = $st; 
       // return $req;
       if ($seller_name == null && $status == null) {
           $data = Seller::where('seller_status','!=','delete')->paginate(10);
           if ($data) {
               return view('../admin/ERP/seller',compact('data'));
           }else{
               return redirect('../seller');
           }
       }else if ($seller_name == $sname && $status == null) {
           $data = Seller::where('seller_status','!=','delete')
           ->where('seller_name','like','%'.$sname.'%')
           ->paginate(10);
           if ($data) {
               return view('../admin/ERP/seller',compact('data'));
           }else{
               return redirect('../seller');
           }
       }else if ($seller_name == null && $status == $st) {
        $data = Seller::where('seller_status','=',$st)
        ->paginate(10);
           if ($data) {
               return view('../admin/ERP/seller',compact('data'));
           }else{
               return redirect('../seller');
           }
       }else if ($seller_name == $sname && $status == $st) {
        $data = Seller::where('seller_status','=',$st)
        ->where('seller_name','like','%'.$sname.'%')
        ->paginate(10);
           if ($data) {
               return view('../admin/ERP/seller',compact('data'));
           }else{
               return redirect('../seller');
           }
       }
    }
    public function show(Request $req){
        $data = Seller::orderBy('id','DESC')->where('seller_status','!=','delete')->paginate(10);
        return view('../admin/ERP/seller',compact('data'));
    }
}
