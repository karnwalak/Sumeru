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
       return view('../admin/HR/shifts') -> with('data',hr_shift::paginate(10));
   }
}
