<?php

namespace App\Http\Controllers;
use App\Models\crm_booking;
use App\Models\crm_contact;
use App\Models\crm_booking_payment_log;
use App\Models\crm_booking_payment_plan;
use App\Models\Flat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
class CrmBookingController extends Controller
{
    public function searchcash(Request $req)
    {
        $cname = $req -> post('booking_id');
        $category_name = $cname; 
        $st = $req -> post('status');
        $status = $st; 
        // return $req;
        if ($category_name == null && $status == null) {
            $data = crm_booking_payment_log::where('status','!=','delete')->paginate(10);    
            if ($data) {
                return view('../admin/CRM/cashcredit',compact('data'));
            }else{
                return redirect('../admin/CRM/cashcredit');
            }
        }else  if ($category_name == $cname && $status == null) {
            $data = crm_booking_payment_log::where('status','!=','delete')->where('booking_id','=',$cname)->paginate(10);    
            if ($data) {
                return view('../admin/CRM/cashcredit',compact('data'));
            }else{
                return redirect('../admin/CRM/cashcredit');
            }
        }else  if ($category_name == null && $status == $st) {
            $data = crm_booking_payment_log::where('status','=',$st)->paginate(10);    
            if ($data) {
                return view('../admin/CRM/cashcredit',compact('data'));
            }else{
                return redirect('../admin/CRM/cashcredit');
            }
        }
        else  if ($category_name == $cname && $status == $st) {
            $data = crm_booking_payment_log::where('booking_id','=',$cname)->where('status','=',$st)->paginate(10);    
            if ($data) {
                return view('../admin/CRM/cashcredit',compact('data'));
            }else{
                return redirect('../admin/CRM/cashcredit');
            }
        }
    }
    public function sortbookings(Request $req,$st){
        $data = crm_booking::where('status','=',$st)
        ->join('crm_contacts','crm_bookings.contact_id','=','crm_contacts.id')
        ->join('flat_ inventories','crm_bookings.product_id','=','flat_ inventories.id')
        ->select(['crm_bookings.*','crm_contacts.contact_full_name','crm_contacts.contact_mob_no','crm_contacts.contact_email','flat_ inventories.flat_stock_name'])
        ->paginate(10);
        if ($data) {
            return view('../admin/CRM/shortbooking',compact('data'));
        }else{
            return redirect('../admin/CRM/bookings');
        }
    }
    public function sortcash(Request $req,$st){
        // return $st;
        $data = crm_booking_payment_log::where('status','=',$st)->paginate(10);
        if ($data) {
            return view('../admin/CRM/shortcash',compact('data'));
        }else{
            return redirect('../admin/CRM/shortcash');
        }
    }
   public function showdata(Request $req)
   {
       return view('../admin/CRM/createbookings') 
       -> with('contact',crm_contact::get())
       -> with('flat',Flat::get());
   }
   public function fetchcontact(Request $req)
   {
        $id = $req -> id;
        $data = DB::SELECT("SELECT * FROM crm_contacts where id = $id");
        foreach($data as $value){
          $name = $value -> contact_full_name;
          $mobile = $value -> contact_mob_no;
          $address = $value -> contact_correspondence_address;
        }
        return response() -> json([
         'name' => $name,
         'mobile' => $mobile,
         'address' => $address
        ]);
   }
   public function fetchproduct(Request $req)
   {
        $id = $req -> id;
        $data = DB::SELECT("SELECT * FROM `flat_ inventories` where id = $id");
        foreach($data as $value){
          $productprice = $value -> flat_price;
        }
        return response() -> json([
         'productprice' => $productprice
        ]);
   }
   public function addBooking(Request $req){
    // return $req;
    $valid = Validator::make($req -> all(),[
        'contact' => 'required|not_in:0',
        'name' => 'required',
        'mobile' => 'required|numeric',
        'address' => 'required',
        'product' => 'required|not_in:0',
        'productprice' => 'required|numeric',
        'bookingamount' => 'required|numeric',
        'self' => 'required|numeric',
        'bank' => 'required|numeric',
        'no_of_payments' => 'required|numeric',
        'useramount' => 'required|numeric',
        'transaction_type' => 'required|not_in:0',
        'comment' => 'max:200',
    ]);
    if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
    }else{
        $mid = crm_booking::max('id');
        $maxid =$mid + 1;
        $ba = $req -> post('bookingamount');
        $date = date('y-m-d');
        if ($req -> post('bank') == 0) {
           $stat = 'booked';
        }else{
           $stat = 'partiallybooked';
        }
        for ($i=0; $i < count($req -> amount) ; $i++) {
        $data = [
         'id' =>18,
         'contact_id' =>$req -> post('contact'),
         'product_id' =>$req -> post('product'),
         'total_amount' =>$req -> post('productprice'),
         'booking_amount' =>$req -> post('bookingamount'),
         'booking_date' =>date('y-m-d'),
         'status' => $stat,
         'next_remainder' =>$req -> date[$i],
         'employee_id' =>session()->get('id'),
         'payment_by_banker' =>$req -> post('bank'),
         'payment_by_self' =>$req -> post('self'),
        ];
       }
        $res = crm_booking::insert($data);
        for ($i=0; $i < count($req -> amount) ; $i++) {
            $data2 = [
             'booking_id' => $maxid,
             'booking_price' => $req -> amount[$i],
             'days' => $req -> date[$i],
            ];
            $dd2 = DB::table('crm_booking_payment_plans') -> insert($data2);
         }
        if($res && $dd2){
            return response() -> json(['status' => 'success',
             'msg' => 'Booking successfull!'
            ]);
        }else{
            return response() -> json(['status' => 'error',
            'error' => 'Booking unsuccessfull!'
           ]);
        }
    }
   }
   public function show(Request $req)
   {
    $booking = crm_booking::orderBy('crm_bookings.id', 'DESC')
    ->where('status','!=','delete')
    ->join('crm_contacts','crm_bookings.contact_id','=','crm_contacts.id')
    ->join('flat_ inventories','crm_bookings.product_id','=','flat_ inventories.id')
    ->select(['crm_bookings.*','crm_contacts.contact_full_name','crm_contacts.contact_mob_no','crm_contacts.contact_email','flat_ inventories.flat_stock_name'])
    ->paginate(10);
    return view('../admin/CRM/bookings') -> with('data',$booking);
   }
   public function deletebooking($id)
   {
    $query = DB::table('crm_bookings') 
    ->where('id', $id)
    ->limit(1) 
    ->update(['status' => 'delete']);
    if ($query) {
        session() -> flash('success','Booking Deleted!');
        return redirect('admin/CRM/bookings');
    }else{
        session() -> flash('error','Booking not Deleted!');
        return redirect('admin/CRM/bookings');
    }
   }
   public function bookingsview(Request $req,$id){
    // $payment = crm_booking_payment_log::join('crm_booking_payment_plans','crm_booking_payment_logs.booking_id','=','crm_booking_payment_plans.booking_id')
    // ->where('crm_booking_payment_plans.booking_id','=',$id)
    // ->get(['crm_booking_payment_logs.*','crm_booking_payment_plans.*']);
    $payment = crm_booking_payment_log::where('booking_id','=',$id)->get();
    $booking = crm_booking::where('status','!=','delete')
    ->join('crm_contacts','crm_bookings.contact_id','=','crm_contacts.id')
    ->join('flat_ inventories','crm_bookings.product_id','=','flat_ inventories.id')
    ->where('crm_bookings.id','=',$id)
    ->get(['crm_bookings.*','crm_contacts.contact_full_name','crm_contacts.contact_mob_no','crm_contacts.contact_img','crm_contacts.contact_permanent_address','crm_contacts.contact_email','flat_ inventories.flat_stock_name']);
    return view('../admin/CRM/bookingsview') 
    -> with('payment',$payment)
    -> with('booking',$booking);
   }
   public function addPayment(Request $req){
    $valid = Validator::make($req -> all(),[
        'amount' => 'required|numeric',
        'transaction_type' => 'required|not_in:0',
        'comment' => 'max:200',
    ]);
    if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
    }else{
        $data = [
           'booking_id'  => $req -> post('booking_id'),
           'date'  => date('y-m-d'),
           'amount'  => $req -> post('amount'),
           'payment_method'  => $req -> post('transaction_type'),
           'transction_id'  => rand(1,1000),
           'employee_id'  => session() -> get('id'),
           'status' => 'Recieved',
           'comment'  => $req -> post('comment'),
        ];
        $res = crm_booking_payment_log::insert($data);
        if ($res) {
            return response() -> json([
              'status' => 'success',
              'msg' => 'Payment Added!'
            ]);
        }else{
            return response() -> json([
                'status' => 'error',
                'error' => 'Payment not Added!'
              ]);
        }
    }
   }
   public function index(Request $req){
    $cname = $req -> post('name');
    $category_name = $cname; 
    $st = $req -> post('status');
    $status = $st; 
    // return $req;
    if ($category_name == null && $status == null) {
        $booking = crm_booking::where('status','!=','delete')
                ->join('crm_contacts','crm_bookings.contact_id','=','crm_contacts.id')
                ->join('flat_ inventories','crm_bookings.product_id','=','flat_ inventories.id')
                // ->get(['crm_bookings.*','crm_contacts.contact_full_name','crm_contacts.contact_mob_no','crm_contacts.contact_img','crm_contacts.contact_email','flat_ inventories.flat_stock_name'])
                ->paginate(10);    
        if ($booking) {
            return view('../admin/CRM/searchbooking',compact('booking'));
        }else{
            return redirect('../admin/CRM/bookings');
        }
    }else if ($category_name == $cname && $status == null) {
        $booking = crm_booking::where('status','!=','delete')
                ->join('crm_contacts','crm_bookings.contact_id','=','crm_contacts.id')
                ->join('flat_ inventories','crm_bookings.product_id','=','flat_ inventories.id')
                ->where('crm_contacts.contact_full_name','like', '%' . $cname . '%')
                // ->get(['crm_bookings.*','crm_contacts.contact_full_name','crm_contacts.contact_mob_no','crm_contacts.contact_img','crm_contacts.contact_email','flat_ inventories.flat_stock_name']);
                ->paginate(10);  
        if ($booking) {
            return view('../admin/CRM/searchbooking',compact('booking'));
        }else{
            return redirect('../admin/CRM/bookings');
        }
    }else if ($category_name == null && $status == $st) {
        $booking = crm_booking::where('status','!=','delete')
        ->join('crm_contacts','crm_bookings.contact_id','=','crm_contacts.id')
        ->join('flat_ inventories','crm_bookings.product_id','=','flat_ inventories.id')
        ->where('crm_bookings.status','=', $st)
        // ->get(['crm_bookings.*','crm_contacts.contact_full_name','crm_contacts.contact_mob_no','crm_contacts.contact_img','crm_contacts.contact_email','flat_ inventories.flat_stock_name']); 
        ->paginate(10);   
        if ($booking) {
            return view('../admin/CRM/searchbooking',compact('booking'));
        }else{
            return redirect('../admin/CRM/bookings');
        }
    }else if ($category_name == $cname && $status == $st) {
        $booking = crm_booking::where('status','!=','delete')
        ->join('crm_contacts','crm_bookings.contact_id','=','crm_contacts.id')
        ->join('flat_ inventories','crm_bookings.product_id','=','flat_ inventories.id')
        ->where('crm_contacts.contact_full_name','like', '%' . $cname . '%')
        ->where('crm_bookings.status','=', $st)
        // ->get(['crm_bookings.*','crm_contacts.contact_full_name','crm_contacts.contact_mob_no','crm_contacts.contact_img','crm_contacts.contact_email','flat_ inventories.flat_stock_name']);  
        ->paginate(10);  
        if ($booking) {
            return view('../admin/CRM/searchbooking',compact('booking'));
        }else{
            return redirect('../admin/CRM/bookings');
        }
    }
}
public function showpayment(Request $req)
{
   return view('../admin/CRM/cashcredit') -> with('data',crm_booking_payment_log::paginate(10));
}
}
