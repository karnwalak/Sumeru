<?php

namespace App\Http\Controllers;
use App\Models\Purchase;
use App\Models\PurchaseOrder;
use App\Models\purchase_order_payment_log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
class FinancePurchaseController extends Controller
{
    public function payAmount(Request $req){
        $valid = Validator::make($req -> all(),[
            'amount' => 'required|numeric',
            'transaction_type' => 'required|not_in:0',
            'comment' => 'required',
            'date' => 'required|date'
        ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $data = [
                'purchase_order_id' => $req -> post('tid'),
                'txn_amount' => $req -> post('amount'),
                'txn_date' => $req -> post('date'),
                'txn_method' => $req -> post('transaction_type'),
                'txn_status' => 'success',
                'comment' => $req -> post('comment'),
            ];
            $res = purchase_order_payment_log::insert($data);
            if($res){
                return response() -> json(['status' => 'success',
                'msg' => 'Payment Added!']);
            }else{
                return response() -> json(['status' => 'error',
                'error' => 'Payment Not Added!']);
            }
        }
    }
    public function show(Request $req){
        $data = Purchase::where('status','!=','delete')
        ->join('sellers','inventory_purchase_orders.seller_id','=','sellers.id')
        ->select(['inventory_purchase_orders.*','sellers.seller_name','sellers.seller_contact'])
        ->paginate(10);
        return view('../admin/FINANCE/purchaseorder')->with('data',$data);
    }
    public function viewpurchaseorder(Request $req,$id){
        $data = Purchase::where('status','!=','delete')
        ->where('inventory_purchase_orders.id','=',$id)
        ->join('sellers','inventory_purchase_orders.seller_id','=','sellers.id')
        ->join('purchase_order_payment_logs','inventory_purchase_orders.id','=','purchase_order_payment_logs.purchase_order_id')
        ->select(['inventory_purchase_orders.*','sellers.seller_name','sellers.seller_contact','purchase_order_payment_logs.txn_amount'])
        ->paginate(10);
        $material = PurchaseOrder::where('purchase_order_materials.purchase_order_id','=',$id)
        ->join('inventory_materials','purchase_order_materials.material_id','=','inventory_materials.id')
        // ->join('inventory_purchase_orders','purchase_order_materials.purchase_order_id','=','inventory_purchase_orders.id')
        ->get();
        return view('../admin/FINANCE/viewpurchaseorder')->with('data',$data)->with('material',$material);
    }
    public function addtransactionsorder(Request $req,$id){
        return view('../admin/FINANCE/addtransactionsorder')->with('id',$id)->with('data',purchase_order_payment_log::where('purchase_order_id','=',$id)->paginate(10));
    }
    public function purchaseorders(Request $req,$id){
        $data = Purchase::where('status','!=','delete')
        ->where('inventory_purchase_orders.seller_id','=',$id)
        ->join('sellers','inventory_purchase_orders.seller_id','=','sellers.id')
        ->select(['inventory_purchase_orders.*','sellers.seller_name','sellers.seller_contact'])
        ->paginate(10);
        return view('../admin/FINANCE/purchaseorders')->with('data',$data);
    }
    public function addtransactionsseller(Request $req,$id){
        return view('../admin/FINANCE/addtransactionsseller')->with('id',$id)->with('data',purchase_order_payment_log::where('purchase_order_id','=',$id)->paginate(10));
    }
    public function searchorder(Request $req)
    {
       $name = $req -> post('name');
       $st = $req -> post('status');
       if($name == null && $st == null){
            $data = Purchase::where('status','!=','delete')
            ->join('sellers','inventory_purchase_orders.seller_id','=','sellers.id')
            ->select(['inventory_purchase_orders.*','sellers.seller_name','sellers.seller_contact'])
            ->paginate(10);
            return view('../admin/FINANCE/purchaseorder')->with('data',$data);
       }else if($name && $st == null){
            $data = Purchase::where('status','!=','delete')
            ->join('sellers','inventory_purchase_orders.seller_id','=','sellers.id')
            ->select(['inventory_purchase_orders.*','sellers.seller_name','sellers.seller_contact'])
            ->where('sellers.seller_name','like','%'.$name.'%')
            ->paginate(10);
            return view('../admin/FINANCE/purchaseorder')->with('data',$data);
       }else if($name == null && $st){
            $data = Purchase::where('status','!=','delete')
            ->join('sellers','inventory_purchase_orders.seller_id','=','sellers.id')
            ->select(['inventory_purchase_orders.*','sellers.seller_name','sellers.seller_contact'])
            ->where('inventory_purchase_orders.order_status','=',$st)
            ->paginate(10);
            return view('../admin/FINANCE/purchaseorder')->with('data',$data);
       }else if($name && $st){
            $data = Purchase::where('status','!=','delete')
            ->join('sellers','inventory_purchase_orders.seller_id','=','sellers.id')
            ->select(['inventory_purchase_orders.*','sellers.seller_name','sellers.seller_contact'])
            ->where('sellers.seller_name','like','%'.$name.'%')
            ->where('inventory_purchase_orders.order_status','=',$st)
            ->paginate(10);
            return view('../admin/FINANCE/purchaseorder')->with('data',$data);
       }
    }
}
