<?php

namespace App\Http\Controllers;

use App\Models\FlatCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
class FlatCategoryController extends Controller
{
    public function statusupdate(Request $req){
    $id = $req -> id;
    $data = DB::SELECT("SELECT * FROM flat_categories where id = $id");
    foreach ($data as $value) {
       
    }
    if($value -> category_status == "Active"){
     $result = DB::table('flat_categories') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['category_status' => 'Inactive']); 
    }else{
     $result = DB::table('flat_categories') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['category_status' => 'Active']);
    }
    }
    public function deleteflatcategory(Request $req,$id)
    {
         // $= DB::DELETE("DELETE FROM inventory_material_categories WHERE id=$id");
         $query = DB::table('flat_categories') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['category_status' => 'delete']);
        if ($query) {
            session() -> flash('success','Flat Category Deleted!');
            return redirect('admin/FLAT/flatstockcategory');
        }else{
            session() -> flash('error','Flat Category not Deleted!');
            return redirect('admin/FLAT/flatstockcategory');
        }
    }
   public function addFlatCategory(Request $req){
    $valid = Validator::make($req -> all(),[
       'category' => 'required|not_in:0',
       'parent_category' => 'required',
       'status' => 'required|not_in:0',
      ]);

      if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
      }else{
        $res = new FlatCategory;
        $res -> category_name = $req -> post('category');
        $res -> category_parent = $req -> post('parent_category');
        $res -> category_status = $req -> post('status');
        $res -> save();
        if($res -> save()){
          return response() -> json(['status' => 'success',
          'msg' => 'Flate Category Added!']);
        }else{
          return response() -> json(['status' => 'error',
          'error' => 'Flat Category Not Added!']);
        }
      }
      // return $req;
   }
   public function edit(Request $req,$id){
    return view('../admin/FLAT/editflatstockcategory') -> with('value',FlatCategory::find($id));
   }
   public function updateFlatCategory(Request $req){
        $valid = Validator::make($req -> all(),[
       'category' => 'required|not_in:0',
       'parent_category' => 'required',
       'status' => 'required|not_in:0',
      ]);

      if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
      }else{
        $res = new FlatCategory;
        $id = $req -> post('ca_id');
        $category_name = $req -> post('category');
        $category_parent = $req -> post('parent_category');
        $category_status = $req -> post('status');
        $result = DB::table('flat_categories') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['category_name'=>$category_name,'category_parent' => $category_parent,'category_status' => $category_status]); 
        if ($result) {
            // session() -> flash('success','Seller added!');
            // return redirect('admin/ERP/seller');
            return response() -> json(['status' => 'success',
            'msg' => 'Flat Category updated!']); 
        }else{
            return response() -> json(['status' => 'error',
            'error' => 'Flat Category not updated!']);
        }
      }
   }
   public function index(Request $req){
       $res = new FlatCategory;
       $cname = $req -> post('category');
       $category_name = $cname; 
       $st = $req -> post('status');
       $status = $st; 
       // return $req;
       if ($category_name == null && $status == null) {
           $data = DB::SELECT("SELECT * FROM flat_categories WHERE category_status!='delete'");
           if ($data) {
               return view('../admin/FLAT/searchflatcategory',compact('data'));
           }else{
               return redirect('../admin/FLAT/searchflatcategory');
           }
       }else if ($category_name == $cname && $status == null) {
           $data = DB::SELECT("SELECT * FROM flat_categories WHERE category_name LIKE '%$cname%' AND category_status!='delete'");
           if ($data) {
               return view('../admin/FLAT/searchflatcategory',compact('data'));
           }else{
               return redirect('../admin/FLAT/searchflatcategory');
           }
       }else if ($category_name == null && $status == $st) {
           $data = DB::SELECT("SELECT * FROM flat_categories WHERE category_status ='$st'");
           if ($data) {
               return view('../admin/FLAT/searchflatcategory',compact('data'));
           }else{
               return redirect('../admin/FLAT/searchflatcategory');
           }
       }else if ($category_name == $cname && $status == $st) {
           $data = DB::SELECT("SELECT * FROM flat_categories WHERE category_status ='$st' AND category_name LIKE '%$cname%'");
           if ($data) {
               return view('../admin/FLAT/searchflatcategory',compact('data'));
           }else{
               return redirect('../admin/FLAT/searchflatcategory');
           }
       }
   }
   public function show(Request $req){
    $data = FlatCategory::where('category_status','!=','delete')->paginate(10);
    return view('../admin/FLAT/flatstockcategory',compact('data'));
}
}
