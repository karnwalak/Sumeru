<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
class CategoryController extends Controller
{
    public function statusupdate(Request $req){
        $id = $req -> id;
        // return $id;
        $data = DB::SELECT("SELECT * FROM inventory_material_categories where id = $id");
        foreach ($data as $value) {
           
        }
        if($value -> category_status == "Active"){
         $result = DB::table('inventory_material_categories') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['category_status' => 'Inactive']); 
        }else{
         $result = DB::table('inventory_material_categories') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['category_status' => 'Active']);
        }
    }
    public function addCategory(Request $req)
    {
        $valid = Validator::make($req -> all(),[
       'category_name' => 'required',
       'parent_category' => 'required',
       'status' => 'required|not_in:0',
      ]);

      if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
      }else{
        $res = new Category;
        $res -> category_name = $req -> post('category_name');
        $res -> category_parent = $req -> post('parent_category');
        $res -> category_status = $req -> post('status');
        $res -> save();
        if ($res -> save()) {
           return response() -> json(['status' => 'success',
           'msg' => 'Category Added!']);
        } else {
           return response() -> json(['status' => 'error',
           'error' => 'Category Not Added!']);
        }
    }
    }
    public function edit(Request $req,$id){
         return view('../admin/ERP/editmaterials') -> with('value',Category::find($id));
    }
    public function editCategory(Request $req){
        // return $id;
      $valid = Validator::make($req -> all(),[
       'category_name' => 'required',
       'parent_category' => 'required',
       'status' => 'required|not_in:0',
      ]);

      if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
      }else{
        $res = new Category;
        $cat_id = $req -> post('cat_id');
        $category_name = $req -> post('category_name');
        $category_parent = $req -> post('parent_category');
        $category_status = $req -> post('status');
        // echo "$cat_id <br/>$category_name <br/>$category_parent <br/>$category_status";

       $result = DB::table('inventory_material_categories') 
            ->where('id', $cat_id)
            ->limit(1) 
            ->update(['category_name'=>$category_name,'category_parent' => $category_parent,'category_status' => $category_status]); 
            if ($result) {
                // session() -> flash('success','Seller added!');
                // return redirect('admin/ERP/seller');
                return response() -> json(['status' => 'success',
                'msg' => 'Category updated!']); 
            }else{
                return response() -> json(['status' => 'error',
                'error' => 'Category not updated!']);
            }
    }   
    }
    public function deletematrial(Request $req,$id){
        // $= DB::DELETE("DELETE FROM inventory_material_categories WHERE id=$id");
         $query = DB::table('inventory_material_categories') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['category_status' => 'delete']);
        if ($query) {
            $query2= DB::table('inventory_material_categories') 
            ->where('category_parent', $id) 
            ->update(['category_parent' => 0]);
            if ($query2) {
                session() -> flash('success','Category Deleted!');
                return redirect('admin/ERP/materialcategory');
            }else if($query){
                session() -> flash('success','Category Deleted!');
                return redirect('admin/ERP/materialcategory');
            }else{
            session() -> flash('error','Category not Deleted!');
            return redirect('admin/ERP/materialcategory');
            }
        }else{
            session() -> flash('error','Category not Deleted!');
            return redirect('admin/ERP/materialcategory');
        }
    }
    public function index(Request $req){
       $res = new Category;
       $cname = $req -> post('category_name');
       $category_name = $cname; 
       $st = $req -> post('status');
       $status = $st; 
       // return $req;
       if ($category_name == null && $status == null) {
           $data = Category::orderby('id','DESC')->where('category_status','!=','delete')->paginate(10);
           if ($data) {
               return view('../admin/ERP/materialcategory',compact('data'));
           }else{
               return redirect('../admin/ERP/materialcategory');
           }
       }else if ($category_name == $cname && $status == null) {
           $data =Category::orderby('id','DESC')
           ->where('category_name', 'like', '%' . $cname . '%')
           ->where('category_status','!=','delete')
           ->paginate(10);
           if ($data) {
               return view('../admin/ERP/materialcategory',compact('data'));
           }else{
               return redirect('../admin/ERP/materialcategory');
           }
       }else if ($category_name == null && $status == $st) {
            $data =Category::orderby('id','DESC')
            ->where('category_name', 'like', '%' . $cname . '%')
            ->where('category_status','=',$st)
            ->paginate(10);
           if ($data) {
               return view('../admin/ERP/materialcategory',compact('data'));
           }else{
               return redirect('../admin/ERP/materialcategory');
           }
       }else if ($category_name == $cname && $status == $st) {
           $data = DB::SELECT("SELECT * FROM inventory_material_categories WHERE category_status ='$st' AND category_name LIKE '%$cname%'");
           if ($data) {
               return view('../admin/ERP/materialcategory',compact('data'));
           }else{
               return redirect('../admin/ERP/materialcategory');
           }
       }
    }
    public function show(Request $req){
        $data = Category::orderBy('id','DESC')->where('category_status','!=','delete')->paginate(10);
        return view('../admin/ERP/materialcategory',compact('data'));
    }
}
