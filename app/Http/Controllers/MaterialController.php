<?php

namespace App\Http\Controllers;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
class MaterialController extends Controller
{
    public function fetchtype(Request $req){
        $id = $req -> id;
        $data = DB::SELECT("SELECT * FROM inventory_materials where id = $id");
        foreach($data as $typ){
          $type = $typ -> type;
        }
        return response() -> json([
         'data' => $type
        ]);
       
    }
    public function statusupdate(Request $req){
    $id = $req -> id;
    // return $req;
    $data = DB::SELECT("SELECT * FROM inventory_materials where id = $id");
    foreach ($data as $value) {
       
    }
    // return $data;
    if($value -> material_status == "Active"){
     $result = DB::table('inventory_materials') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['material_status' => 'Inactive']); 
    }else{
     $result = DB::table('inventory_materials') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['material_status' => 'Active']);
    }
    }
    public function index(Request $req){
       $res = new Material;
       $sname = $req -> post('pname');
       $pname = $sname; 
       $ty = $req -> post('type');
       $type = $ty; 
       // return $req;
       if ($sname == null && $ty == null) {
           $data = Material::orderBy('id')->paginate(10);
           if ($data) {
               return view('../admin/ERP/searchproduct',compact('data'));
           }else{
               return redirect('../materialspage');
           }
       }else if ($sname == $pname && $ty == null) {
           // $data = DB::SELECT("SELECT * FROM sellers WHERE seller_name LIKE '%$sname%'");
          $data = Material::where('material_name', 'like', '%' . $pname . '%')->paginate(10);
          if ($data) {
               return view('../admin/ERP/searchproduct',compact('data'));
           }else{
               return redirect('../materialspage');
           }
       }else if ($sname == null && $ty == $type) {
           $data = Material::where('release_type', $type)->paginate(10);
          if ($data) {
               return view('../admin/ERP/searchproduct',compact('data'));
           }else{
               return redirect('../materialspage');
           }
       }else if ($sname == $pname && $ty == $type) {
         $data = Material::where('material_name', 'like', '%' . $pname . '%')
         ->Where('release_type', $type)
         ->paginate(10);

           if ($data) {
               return view('../admin/ERP/searchproduct',compact('data'));
           }else{
               return redirect('../materialspage');
           }
       }
    }
    public function addMaterial(Request $req){
        $valid = Validator::make($req -> all(),[
       'name' => 'required',
       'modal' => 'required',
       'sku' => 'required',
       'category' => 'required|not_in:0',
       'type' => 'required|not_in:0',
       'release_type' => 'required|not_in:0',
      ]);

      if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
      }else{
        $res = new Material;
        $res -> material_name = $req -> post('name');
        $res -> material_category = $req -> post('category');
        $res -> modal = $req -> post('modal');
        $res -> sku = $req -> post('sku');
        $res -> type = $req -> post('type');
        $res -> stock = '2016';
        $res -> release_type = $req -> post('release_type');
        $res -> material_status = 'Active';
        $res -> save();
        // return redirect('admin/ERP/addproducts');
        if ($res -> save()) {
          return response() -> json(['status' => 'success',
        'msg' => 'Product Added!']);
        }else{
          return response() -> json(['status' => 'error',
        'error' => 'Product not Added!']);
        }
      }
    }
    public function edit(Request $req,$id){
        return view('../admin/ERP/editproducts') -> with('value',Material::find($id));
    }
    public function updateProducts(Request $req){
        $valid = Validator::make($req -> all(),[
       'name' => 'required',
       'modal' => 'required',
       'sku' => 'required',
       'category' => 'required|not_in:0',
       'type' => 'required|not_in:0',
       'release_type' => 'required|not_in:0',
      ]);

      if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
      }else{
        $res = new Material;
        $id = $req -> post('pid');
        $material_name = $req -> post('name');
        $material_category = $req -> post('category');
        $modal = $req -> post('modal');
        $sku = $req -> post('sku');
        $type = $req -> post('type');
        $stock = '2016';
        $release_type = $req -> post('release_type');
        $material_status = 'Active';
        $result = DB::table('inventory_materials') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['material_name'=>$material_name,'material_category' => $material_category,'modal' => $modal,'sku' => $sku,'type' => $type,'release_type' => $release_type,'material_status' => $material_status]); 
            if ($result) {
                return response() -> json(['status' => 'success',
                'msg' => 'Product updated!']); 
            }else{
                return response() -> json(['status' => 'error',
                'error' => 'Product not updated!']);
            }
      }
    }
    public function deleteproduct(Request $req,$id){
         $res = new Material;
       $query = DB::table('inventory_materials') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['material_status' => 'Inactive']);
            if ($query) {
                session() -> flash('success','Category Deleted!');
                return redirect('admin/ERP/materialspage');
            }else{
            session() -> flash('error','Category not Deleted!');
            return redirect('admin/ERP/materialspage');
            }
    }
    public function show(Request $req){
        $data = Material::paginate(10);
        return view('../admin/ERP/materialspage',compact('data'));
    }
}
