<?php

namespace App\Http\Controllers;

use App\Models\MaterialStock;
use App\Models\Material;
use App\Models\Purchase;
use Illuminate\Http\Request;

class MaterialStockController extends Controller
{
    public function index(Request $req){
        // return $req;
        $res = new MaterialStock;
        $sname = $req -> post('name');
        $pname = $sname; 
        $ty = $req -> post('type');
        $type = $ty; 
        // return $req;
        if ($sname == null && $ty == null) {
            $data = MaterialStock::paginate(10);
            if ($data) {
                return view('../admin/ERP/searchstock',compact('data'));
            }else{
                return redirect('../admin/ERP/productstockrecord');
            }
        }else if ($sname == $pname && $ty == null) {
            // $data = DB::SELECT("SELECT * FROM sellers WHERE seller_name LIKE '%$sname%'");
           $data = MaterialStock::where('material_id', 'like', '%' . $pname . '%')->paginate(10);
           if ($data) {
                return view('../admin/ERP/searchstock',compact('data'));
            }else{
                return redirect('../admin/ERP/productstockrecord');
            }
        }else if ($sname == null && $ty == $type) {
            $data = MaterialStock::where('stock_type', $type)->paginate(10);
           if ($data) {
                return view('../admin/ERP/searchstock',compact('data'));
            }else{
                return redirect('../admin/ERP/productstockrecord');
            }
        }else if ($sname == $pname && $ty == $type) {
          $data = MaterialStock::where('material_id', 'like', '%' . $pname . '%')
          ->Where('stock_type', $type)
          ->paginate(10);
 
            if ($data) {
                return view('../admin/ERP/searchstock',compact('data'));
            }else{
                return redirect('../admin/ERP/productstockrecord');
            }
        }
     }
    public function show(Request $req,$id){
        $data = MaterialStock::where('material_id',$id)
        ->join('inventory_purchase_orders','material_stock_records.invoice_id','=','inventory_purchase_orders.invoice_id')
        ->select(['inventory_purchase_orders.*','material_stock_records.*'])
        -> paginate(10);
        return view('../admin/ERP/productstockrecord')->with('data',$data);
    }
}
