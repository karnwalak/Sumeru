<?php

namespace App\Http\Controllers;
use App\Models\Flat;
use App\Models\FlatCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;

class FlatController extends Controller
{
    public function statusupdate(Request $req){
    $id = $req -> id;
    $data = FLAT::where('id',$id) -> get();
    foreach ($data as $value) {
       
    }
    if($value -> flat_status == "Active"){
     $result = DB::table('flat_ inventories') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['flat_status' => 'Inactive']); 
    }else{
     $result = DB::table('flat_ inventories') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['flat_status' => 'Active']);
    }
    }
    public function addFlat(Request $req){
       $valid = Validator::make($req -> all(),[
       'stockname' => 'required',
       'price' => 'required|numeric',
       'category' => 'required|not_in:0',
       'status' => 'required|not_in:0',
      ]);

      if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
      }else{
       $res = new Flat;
       $res -> flat_stock_name = $req -> post('stockname');
       $res -> flat_price = $req -> post('price');
       $res -> flat_category_id = $req -> post('category');
       $res -> flat_status = $req -> post('status');
       // return $req;
       $res -> save();
       if ($res -> save()) {
          return response() -> json(['status' => 'success',
        'msg' => 'Flate Added!']);
       } else {
          return response() -> json(['status' => 'error',
        'error' => 'Flat not Added!']);
       }
       
    }
    }
     public function index(Request $req){
       $res = new Flat;
       $cname = $req -> post('stockname');
       $category_name = $cname; 
       $st = $req -> post('status');
       $status = $st; 
       // return $req;
       if ($category_name == null && $status == null) {
           $data = Flat::where('flat_status','!=','delete')->get();
           if ($data) {
               return view('../admin/FLAT/searchflat',compact('data'));
           }else{
               return redirect('../admin/FLAT/searchflat');
           }
       }else if ($category_name == $cname && $status == null) {
           $data = Flat::where('flat_status','!=','delete')->where('flat_stock_name', 'like', '%' . $cname . '%')->paginate(10);
           if ($data) {
               return view('../admin/FLAT/searchflat',compact('data'));
           }else{
               return redirect('../admin/FLAT/searchflat');
           }
       }else if ($category_name == null && $status == $st) {
           $data = Flat::where('flat_status', $status)->paginate(10);
           if ($data) {
               return view('../admin/FLAT/searchflat',compact('data'));
           }else{
               return redirect('../admin/FLAT/searchflat');
           }
       }else if ($category_name == $cname && $status == $st) {
           $data = Flat::where('flat_stock_name', 'like', '%' . $cname . '%')
         ->Where('flat_status', $status)
         ->paginate(10);
           if ($data) {
               return view('../admin/FLAT/searchflat',compact('data'));
           }else{
               return redirect('../admin/FLAT/searchflat');
           }
       }
   }
   public function edit(Request $req,$id){
    $data = FlatCategory::where('category_status','!=','delete')->paginate(10);
    return view('../admin/FLAT/editflats') 
    -> with('val',Flat::find($id))
    -> with('data',$data);
   }
   public function editFlat(Request $req){
      $valid = Validator::make($req -> all(),[
       'stockname' => 'required',
       'price' => 'required|numeric',
       'category' => 'required|not_in:0',
       'status' => 'required|not_in:0',
      ]);

      if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
      }else{
       $res = new Flat;
       $flat_id = $req -> post('flat_id');
       $flat_stock_name = $req -> post('stockname');
       $flat_price = $req -> post('price');
       $flat_category_id = $req -> post('category');
       $flat_status = $req -> post('status');
       $result = DB::table('flat_ inventories') 
            ->where('id', $flat_id)
            ->limit(1) 
            ->update(['flat_stock_name'=>$flat_stock_name,'flat_price' => $flat_price,'flat_category_id' => $flat_category_id,'flat_status' => $flat_status]); 
            if ($result) {
                // session() -> flash('success','Seller added!');
                // return redirect('admin/ERP/seller');
                return response() -> json(['status' => 'success',
                'msg' => 'Flat updated!']); 
            }else{
                return response() -> json(['status' => 'error',
                'error' => 'Flat not updated!']);
            }
    }
   }
   public function deleteFlat(Request $req,$id){
       $res = new Flat;
       $result = DB::table('flat_ inventories') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['flat_status' => 'delete']); 
            if ($result) {
                session() -> flash('success','Flat deleted!');
                return redirect('../admin/FLAT/flatstockinventory');
            }else{
                session() -> flash('error','Flat Not deleted!');
                return redirect('../admin/FLAT/flatstockinventory');
            }
   }
   public function show(Request $req){
    $data = Flat::where('flat_status','!=','delete')->paginate(10);
    return view('../admin/Flat/flatstockinventory',compact('data'));
}
}
