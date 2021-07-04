<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\hr_department;
use App\Models\hr_designation;
use App\Models\hr_employees;
use App\Models\hr_shift;
use Validator;
class HrShiftController extends Controller
{
    public function editstatus(Request $req){
        $id = $req -> id;
        // return $id;
        $data = DB::SELECT("SELECT * FROM hr_shifts where id = $id");
        foreach ($data as $value) {
           
        }
        if($value -> shift_status == "Active"){
         $res = DB::table('hr_shifts') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['shift_status' => 'Inactive']);
        }else{
         $result = DB::table('hr_shifts') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['shift_status' => 'Active']);
        }
    }
   public function create(Request $req)
   {
    //    return $req;
        $valid = Validator::make($req -> all(),[
            'shiftname' => 'required',
            'status' => 'required|not_in:0'
        ]);
    
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $res = new hr_shift;
            $res -> shift_name = $req -> post('shiftname');
            $res -> shift_status = $req ->post('status');
            $res -> mon_in = !empty($req->post('monfrom')) ? $req->post('monfrom') : '';
            $res -> mon_out = !empty($req->post('monto')) ? $req->post('monto') : '';
            $res -> tue_in = !empty($req->post('tuefrom')) ? $req->post('tuefrom') : '';
            $res -> tue_out = !empty($req->post('tueto')) ? $req->post('tueto') : '';
            $res -> wed_in = !empty($req->post('wedfrom')) ? $req->post('wedfrom') : '';
            $res -> wed_out = !empty($req->post('wedto')) ? $req->post('wedto') : '';
            $res -> thu_in = !empty($req->post('thufrom')) ? $req->post('thufrom') : '';
            $res -> thu_out = !empty($req->post('thuto')) ? $req->post('thuto') : '';
            $res -> fri_in = !empty($req->post('frifrom')) ? $req->post('frifrom') : '';
            $res -> fri_out = !empty($req->post('frito')) ? $req->post('frito') : '';
            $res -> sat_in = !empty($req->post('satfrom')) ? $req->post('satfrom') : '';
            $res -> sat_out = !empty($req->post('satto')) ? $req->post('satto') : '';
            $res -> save();
            if($res -> save()){
                return response() -> json(['status' => 'success',
                'msg' => 'Shift Added!']);
            }else{
                return response() -> json(['status' => 'error',
                'error' => 'Shift not Added!']);
            }
        }
   }
   public function show(Request $req){
       return view('../admin/HR/shifts') -> with('data',hr_shift::where('shift_status','!=','delete')->paginate(10));
   }
   public function edit(Request $req,$id){
       return view('../admin/HR/editshifts') -> with('data',hr_shift::find($id));
   }
   public function editshift(Request $req){
    $valid = Validator::make($req -> all(),[
        'shiftname' => 'required',
        'status' => 'required|not_in:0'
    ]);

    if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
    }else{
        $id = $req -> post('pid');
        $shift_name = $req -> post('shiftname');
        $shift_status = $req ->post('status');
        $mon_in = !empty($req->post('monfrom')) ? $req->post('monfrom') : '';
        $mon_out = !empty($req->post('monto')) ? $req->post('monto') : '';
        $tue_in = !empty($req->post('tuefrom')) ? $req->post('tuefrom') : '';
        $tue_out = !empty($req->post('tueto')) ? $req->post('tueto') : '';
        $wed_in = !empty($req->post('wedfrom')) ? $req->post('wedfrom') : '';
        $wed_out = !empty($req->post('wedto')) ? $req->post('wedto') : '';
        $thu_in = !empty($req->post('thufrom')) ? $req->post('thufrom') : '';
        $thu_out = !empty($req->post('thuto')) ? $req->post('thuto') : '';
        $fri_in = !empty($req->post('frifrom')) ? $req->post('frifrom') : '';
        $fri_out = !empty($req->post('frito')) ? $req->post('frito') : '';
        $sat_in = !empty($req->post('satfrom')) ? $req->post('satfrom') : '';
        $sat_out = !empty($req->post('satto')) ? $req->post('satto') : '';
        $result = DB::table('hr_shifts') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['shift_name'=>$shift_name,'shift_status' => $shift_status,'mon_in'=>$mon_in,'mon_out'=>$mon_out,'tue_in'=>$tue_in,
            'tue_out'=>$tue_out,'wed_in'=>$wed_in,'wed_out'=>$wed_out,'thu_in'=>$thu_in,'thu_out'=>$thu_out,'fri_in'=>$fri_in,
            'fri_out'=>$fri_out,'sat_in'=>$sat_in,'sat_out'=>$sat_out]); 
        if($result){
            return response() -> json(['status' => 'success',
            'msg' => 'Shift Updated!']);
        }else{
            return response() -> json(['status' => 'error',
            'error' => 'Shift not Updated!']);
        }
    }
   }
   public function delete(Request $req,$id){
    $result = DB::table('hr_shifts') 
    ->where('id', $id)
    ->limit(1) 
    ->update(['shift_status' => 'delete']); 
    if($result){
        session() -> flash('success','Shift Deleted!');
        return redirect('../admin/HR/shifts');
    }else{
        session() -> flash('error','Shift Not Deleted!');
        return redirect('../admin/HR/shifts');
    }
   }
}
