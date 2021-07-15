<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Purchase;
use App\Models\Seller;
use App\Models\PurchaseOrder;
use App\Models\MaterialStock;
use App\Models\Material;
use Illuminate\Http\Request;
use Validator;
class PurchaseController extends Controller
{
    public function statusupdate(Request $req)
    {
    $id = $req -> id;
    $data = DB::SELECT("SELECT * FROM inventory_purchase_orders where id = $id");
    foreach ($data as $value) {
       
    }
    if($value -> order_status == "Active"){
     $result = DB::table('inventory_purchase_orders') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['order_status' => 'Inactive']); 
    }else{
     $result = DB::table('inventory_purchase_orders') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['order_status' => 'Active']);
    }
    }
    public function deleteorder(Request $req,$id){
       $query = DB::table('inventory_purchase_orders') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['status' => 'delete']);
        $query2 = DB::table('material_stock_records') 
            ->where('purchase_order_id', $id)
            ->limit(1) 
            ->update(['status' => 'remove']);
        if ($query && $query2) {
            session() -> flash('success','Order Deleted!');
            return redirect('admin/ERP/purchaseorder');
        }else{
            session() -> flash('error','Order not Deleted!');
            return redirect('admin/ERP/purchaseorder');
        }
    }
    public function createpurchaseorder(Request $req){
        // return $req;
        $ids = Purchase::max('id');
        // return $ids;
        $po_id = $ids + 1;
        // return $po_id;
         $valid = Validator::make($req -> all(),[
           'seller' => 'required|not_in:0',
           'invoice' => 'required',
           'date' => 'required',
           'type' => 'required|array|distinct',
           'total' => 'required|array|distinct',
           'status' => 'required',
           'invoice_file' => 'required|mimes:pdf|max:512',
           'comment' => 'required|max:200',
           'item_name' => 'required|array|distinct|not_in:0',
           'quantity' => 'required|array|distinct',
           'price' => 'required|array|distinct',
           'discount' => 'numeric',
      ]);
    // return dd($req -> all());
      if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
      }else{
        $seller_id = $req -> seller;
        $invoice_id = $req -> invoice;
        $total = $req -> total;
        $date = $req -> date;
        $order_status = $req -> status;
        $type = $req -> type;
        $comment = $req -> comment;
        $discount = $req -> discount;
        $sub_total = $req -> fullamount;
        $material_id = $req -> item_name;
        $price = $req -> price;
        $quantity = $req -> quantity;
        $file = $req -> file('invoice_file'); 
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $data = [
            'seller_id' => $seller_id,
            'invoice_id' => $invoice_id, 
            'total' => $sub_total, 
            'order_amount' => $sub_total - $discount, 
            'date' => $date,
            'order_status' => $order_status,
            'invoice' =>  $file_name,
            'comment' => $comment,
            'status' => 'Active',
            'discount' => $discount
        ];
        $dd1 = DB::table('inventory_purchase_orders') -> insert($data);
        for ($i=0; $i < count($req -> item_name) ; $i++) {
           $data2 = [
            'material_id' => $material_id[$i] ,
            'purchase_order_id' => $po_id,
            'material_quantity' => $quantity[$i] ,
            'material_price' => $price[$i] 
           ];
           $dd2 = DB::table('purchase_order_materials') -> insert($data2);
        }
        if ($dd1 && $dd2) {
               $file->move('upload', $file_name);
               return response() -> json(['status' => 'success',
               'msg' => 'Purchased Successfully!']);
            }else{
               return response() -> json(['status' => 'error',
                'error' => 'There are some problem with your order!']);
            }
    }
    }

    public function editpurchaseorder(Request $req){
        $valid = Validator::make($req -> all(),[
            'seller' => 'required|not_in:0',
            'invoice' => 'required',
            'date' => 'required',
            'type' => 'required|array|distinct',
            'total' => 'required|array|distinct',
            'status' => 'required',
            'fullamount' => 'required|numeric',
            'invoice_file' => 'mimes:pdf|max:512',
            'comment' => 'required|max:200',
            'item_name' => 'required|array|distinct|not_in:0',
            'quantity' => 'required|array|distinct',
            'price' => 'required|array|distinct',
            'discount' => 'required|numeric',
       ]);
    //    return $req;
      if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
      }else{
        // return count($req->item_name);
        $pro_id = $req -> post('pid');
        $status = $req -> post('status');
        $seller_id = $req -> seller;
        $invoice_id = $req -> invoice;
        $total = $req -> total;
        $order_amount = $req -> final;
        $date = $req -> date;
        $order_status = $req -> status;
        $type = $req -> type;
        $comment = $req -> comment;
        $discount = $req -> discount;
        $sub_total = $req -> fullamount;
        $material_id = $req -> item_name;
        $price = $req -> price;
        $quantity = $req -> quantity;
        $file = $req -> file('invoice_file'); 
        if (isset($file)) {
            $file_name = time().'.'.$file->getClientOriginalExtension();
        }
        if($order_status == 'Recieved'){
            for ($i=0; $i < count($req -> item_name) ; $i++) {
                $stock = [
                    'material_id' => $material_id[$i] ,
                    'stock_type' => 'ADD' ,
                    'stock_date' => $date ,
                    'invoice_id' => $invoice_id,
                    'stock_quantity' => $quantity[$i] ,
                    'comment' => $comment ,
                    'stock_cost' => $total[$i] ,
                    'material_cost' => $price[$i]
                ];
                $stock_data = DB::table('material_stock_records') -> insert($stock);
            }
        }
        if(isset($file_name)){
            $result = DB::table('inventory_purchase_orders') 
        ->where('id', $pro_id)
        ->limit(1) 
        ->update(['id'=>$pro_id,'seller_id' => $seller_id,'invoice_id'=>$invoice_id,'order_amount'=>$order_amount,'order_status'=>$order_status,'invoice'=>$file_name,'comment'=>$comment,'discount'=>$discount,'date'=>$date,'total'=>$sub_total,'status'=>$status]); 
        }else{
            $result = DB::table('inventory_purchase_orders') 
            ->where('id', $pro_id)
            ->limit(1) 
            ->update(['id'=>$pro_id,'seller_id' => $seller_id,'invoice_id'=>$invoice_id,'order_amount'=>$order_amount,'order_status'=>$order_status,'comment'=>$comment,'discount'=>$discount,'date'=>$date,'total'=>$sub_total,'status'=>$status]); 
        }
        $de = DB::DELETE("DELETE FROM purchase_order_materials WHERE purchase_order_id = $pro_id");
        for ($i=0; $i < count($req -> item_name) ; $i++) {
            $data2 = [
             'material_id' => $material_id[$i] ,
             'purchase_order_id' => $pro_id,
             'material_quantity' => $quantity[$i] ,
             'material_price' => $price[$i] 
            ];
            $dd2 = DB::table('purchase_order_materials') -> insert($data2);
         }
        if ($result  && $de && $dd2 && $stock_data) {
            return response() -> json(['status' => 'success',
                'msg' => 'Order updated!']);
        }else{
             return response() -> json(['status' => 'error',
                'error' => 'Order not updated!']);
        }
       }


    }
    public function index(Request $req)
    {
       $res = new Purchase;
       // $res = new Seller;
       $cname = $req -> post('invoice');
       $category_name = $cname; 
       $st = $req -> post('status');
       $status = $st; 
       // return $req;
       if ($category_name == null && $status == null) {
           $data = Purchase::where('status','!=','delete')->paginate(10);
           if ($data) {
               return view('../admin/ERP/searchorder',compact('data'));
           }else{
               return redirect('../admin/FLAT/searchorder');
           }
       }
       else if ($category_name == $cname && $status == null) {
           $data = Purchase::where('invoice_id', 'like', '%' . $cname . '%')->where('status','!=','delete')->paginate(10);
           if ($data) {
               return view('../admin/ERP/searchorder',compact('data'));
           }else{
               return redirect('../admin/ERP/searchorder');
           }
       }
       else if ($category_name == null && $status == $st) {
           $data = Purchase::where('order_status', $status)->paginate(10);
           if ($data) {
               return view('../admin/ERP/searchorder',compact('data'));
           }else{
               return redirect('../admin/ERP/searchorder');
           }
       }
       else if ($category_name == $cname && $status == $st) {
           $data = Purchase::where('invoice_id', 'like', '%' . $cname . '%')
         ->Where('order_status', $status)
         ->paginate(10);
           if ($data) {
               return view('../admin/ERP/searchorder',compact('data'));
           }else{
               return redirect('../admin/ERP/searchorder');
           }
       }
    }
    public function show(Request $req){
        $data = Purchase::orderBy('id', 'DESC')->where('status','!=','delete')->paginate(10);
        return view('../admin/ERP/purchaseorder',compact('data'));
    }
    public function showorder(Request $req,$id){
        // return $id;
        $data = Purchase::where('seller_id',$id)->where('status','!=','delete')->paginate(10);
        return view('../admin/ERP/sellerpurchaseorder',compact('data'));
    }
    public function showdata(Request $req,$id){
        $orders = Purchase::where('status','!=','delete')->join('sellers','inventory_purchase_orders.seller_id','=','sellers.id')->
        where('inventory_purchase_orders.id',$id)->get(['inventory_purchase_orders.*','sellers.seller_name','sellers.seller_contact']);
        
        //fetch order materials and ma
        $item = PurchaseOrder::join('inventory_materials','purchase_order_materials.material_id','=','inventory_materials.id')->
        where('purchase_order_materials.purchase_order_id',$id)->get(['inventory_materials.*','purchase_order_materials.*']);
      

        $seller = Seller::where('seller_status','!=','delete')->where('seller_status','!=','Inactive')->get();   
        $material = Material::where('material_status','!=','delete')->where('material_status','!=','Inactive')->get();
        // print_r($orer);
        // print_r($item);
        return view('../admin/ERP/editpurchaseorder') -> with('orders',$orders) 
        -> with('items',$item)-> with('sellers',$seller)-> with('mdata',$material);
        
    }
    public function showpurchase(Request $req,$id){
        $orders = Purchase::where('status','!=','delete')->join('sellers','inventory_purchase_orders.seller_id','=','sellers.id')->
        where('inventory_purchase_orders.id',$id)->get(['inventory_purchase_orders.*','sellers.seller_name','sellers.seller_contact']);
        
        //fetch order materials and ma
        $item = PurchaseOrder::join('inventory_materials','purchase_order_materials.material_id','=','inventory_materials.id')->
        where('purchase_order_materials.purchase_order_id',$id)->get(['inventory_materials.*','purchase_order_materials.*']);
      

        $seller = Seller::where('seller_status','!=','delete')->where('seller_status','!=','Inactive')->get();   
        $material = Material::where('material_status','!=','delete')->where('material_status','!=','Inactive')->get();
        // print_r($orer);
        // print_r($item);
        return view('../admin/ERP/viewpurchaseorder') -> with('orders',$orders) 
        -> with('items',$item)-> with('sellers',$seller)-> with('mdata',$material);
        
    }

    public function showseller(Request $req){
        $seller = Seller::where('seller_status','!=','delete')->where('seller_status','!=','Inactive')->get();   
        $material = Material::where('material_status','!=','delete')->where('material_status','!=','Inactive')->get();
        // print_r($orer);
        // print_r($item);
        return view('../admin/ERP/createpurchaseorder') -> with('seller',$seller)-> with('material',$material);
        
    }
}
