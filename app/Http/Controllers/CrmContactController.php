<?php
namespace App\Http\Controllers;
use App\Models\crm_contact;
use App\Models\statesandcity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
class CrmContactController extends Controller
{
    public function showcity(Request $req)
    {
        $data = statesandcity::distinct()->get(['state']);
        return view('../admin/CRM/addcontacts')->with('data',$data);
    }
    public function addContact(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'name' => 'required|regex:/^[a-zA-Z ]*$/',
            'fathername' => 'required|regex:/^[a-zA-Z ]*$/',
            'applicant_image' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'pan' => 'required|regex:/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/',
            'occupation' => 'required|not_in:0',
            'address' => 'required',
            'state' => 'required|not_in:0',
            'city' => 'required|not_in:0',
            'pincode' => 'required|digits:6',
            'addresspermanent' => 'required',
            'statepermanent' => 'required|not_in:0',
            'citypermanent' => 'required|not_in:0',
            'pincodepermanent' => 'required|digits:6',
            'mobile' => 'required|digits:10|unique:crm_contacts,contact_mob_no',
            'officephone' => 'required|digits:10',
            'residencephone' => 'required|digits:10',
            'email' => 'required|email|unique:crm_contacts,contact_email',
            'coapplicantname' => 'required|regex:/^[a-zA-Z ]*$/',
            'coapplicantfathername' => 'required|regex:/^[a-zA-Z ]*$/',
            'coapplicant_image' => 'required',
            'coapplicantdob' => 'required',
            'coapplicantgender' => 'required',
            'coapplicantpan' => 'required|regex:/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/',
            'coapplicantoccupation' => 'required|not_in:0',
            'coapplicantaddress' => 'required',
            'coapplicantstate' => 'required|not_in:0',
            'coapplicantcity' => 'required|not_in:0',
            'coapplicantpincode' => 'required|digits:6',
            'coapplicantaddresspermanent' => 'required',
            'coapplicantstatepermanent' => 'required|not_in:0',
            'coapplicantcitypermanent' => 'required|not_in:0',
            'coapplicantpincodepermanent' => 'required|digits:6',
            'coapplicantmobile' => 'required|digits:10|unique:crm_contacts,co_applicant_mob_no',
            'coapplicantofficephone' => 'required|digits:10',
            'coapplicantresidencephone' => 'required|digits:10',
            'coapplicantemail' => 'required|email|unique:crm_contacts,co_applicant_email',
           ]);
     
           if (!$valid -> passes()) {
             return response() -> json(['status' => 'error',
             'error' => $valid -> errors()]);
           }else{
               $fileapp = $req -> file('applicant_image');
               $fileco = $req -> file('coapplicant_image');
               $applicant_img = 'A'.time().'.'.$fileapp->getClientOriginalExtension();  
               $co_applicant_img = 'B'.time().'.'.$fileco->getClientOriginalExtension();
               $data =[
                 'contact_img' => $applicant_img,
                 'contact_full_name' => $req -> post('name'), 
                 'contact_father' => $req -> post('fathername'),
                 'contact_correspondence_address' => $req -> post('address'),
                 'contact_permanent_address' => $req -> post('addresspermanent'),
                 'contact_state' => $req -> post('state'),
                 'contact_city' =>$req -> post('city') ,
                 'contact_pin' => $req -> post('pincode'),
                 'contact_email' => $req -> post('email'),
                 'contact_mob_no' => $req -> post('mobile'),
                 'contact_office_no' => $req -> post('officephone'),
                 'contact_residence_no' => $req -> post('residencephone'),
                 'contact_gender' => $req -> post('gender'),
                 'contact_dob' => $req -> post('dob'),
                 'contact_occuption' => $req -> post('occupation'),
                 'contact_pancard' => $req -> post('pan'),
                 'co_applicant_gender' => $req -> post('coapplicantgender'),
                 'co_applicant_dob' => $req -> post('coapplicantdob'),
                 'co_applicant_occuption' => $req -> post('coapplicantoccupation'),
                 'co_applicant_pancard' => $req -> post('coapplicantpan'),
                 'Co_applicant_full_name' => $req -> post('coapplicantname'),
                 'co_applicant_father' => $req -> post('coapplicantfathername'),
                 'co_applicant_state' => $req -> post('coapplicantstate'),
                 'co_applicant_city' =>$req -> post('coapplicantcity') ,
                 'co_applicant_correspondence_address' => $req -> post('coapplicantaddress'),
                 'co_applicant_permanent_address' => $req -> post('coapplicantaddresspermanent'),
                 'co_applicant_pincode' => $req -> post('coapplicantpincode'),
                 'co_applicant_mob_no' => $req -> post('coapplicantmobile'),
                 'co_applicant_residence_no' => $req -> post('coapplicantresidencephone'),
                 'co_applicant_email' =>$req -> post('coapplicantemail') ,
                 'co_applicant_office_no' => $req -> post('coapplicantofficephone'),
                 'co_applicant_img' => $co_applicant_img,
                 'contact_status' => 'Active',
               ];
               $res = crm_contact::insert($data);
               if ($res) {
                $fileapp->move('upload', $applicant_img);
                $fileco->move('upload', $co_applicant_img);
                return response() -> json(['status' => 'success',
                'msg' => 'Contact saved Successfully!']);
               }else{
                return response() -> json(['status' => 'error',
                'error' => 'Contact not saved!']); 
               }
           } 
    }
    public function editContact(Request $req){
        $valid = Validator::make($req -> all(),[
            'name' => 'required|regex:/^[a-zA-Z ]*$/',
            'fathername' => 'required|regex:/^[a-zA-Z ]*$/',
            'dob' => 'required',
            'gender' => 'required',
            'pan' => 'required|regex:/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/',
            'occupation' => 'required|not_in:0',
            'address' => 'required',
            'state' => 'required|not_in:0',
            'city' => 'required|not_in:0',
            'pincode' => 'required|digits:6',
            'addresspermanent' => 'required',
            'statepermanent' => 'required|not_in:0',
            'citypermanent' => 'required|not_in:0',
            'pincodepermanent' => 'required|digits:6',
            'mobile' => 'required|digits:10',
            'officephone' => 'required|digits:10',
            'residencephone' => 'required|digits:10',
            'email' => 'required|email',
            'coapplicantname' => 'required|regex:/^[a-zA-Z ]*$/',
            'coapplicantfathername' => 'required|regex:/^[a-zA-Z ]*$/',
            'coapplicantdob' => 'required',
            'coapplicantgender' => 'required',
            'coapplicantpan' => 'required|regex:/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/',
            'coapplicantoccupation' => 'required|not_in:0',
            'coapplicantaddress' => 'required',
            'coapplicantstate' => 'required|not_in:0',
            'coapplicantcity' => 'required|not_in:0',
            'coapplicantpincode' => 'required|digits:6',
            'coapplicantaddresspermanent' => 'required',
            'coapplicantstatepermanent' => 'required|not_in:0',
            'coapplicantcitypermanent' => 'required|not_in:0',
            'coapplicantpincodepermanent' => 'required|digits:6',
            'coapplicantmobile' => 'required|digits:10',
            'coapplicantofficephone' => 'required|digits:10',
            'coapplicantresidencephone' => 'required|digits:10',
            'coapplicantemail' => 'required|email',
           ]);
     
           if (!$valid -> passes()) {
             return response() -> json(['status' => 'error',
             'error' => $valid -> errors()]);
           }else{
               $pid = $req -> post('pid');
               $fileapp = $req -> file('applicant_image');
               if (isset($fileapp)) {
                $applicant_img = 'A'.time().'.'.$fileapp->getClientOriginalExtension(); 
               }
               $fileco = $req -> file('coapplicant_image');
               if (isset($fileco)) {
                $co_applicant_img = 'B'.time().'.'.$fileco->getClientOriginalExtension();
               }
            //    return $applicant_img;
               $contact_full_name = $req -> post('name'); 
               $contact_father = $req -> post('fathername');
               $contact_correspondence_address = $req -> post('address');
               $contact_permanent_address = $req -> post('addresspermanent');
               $contact_state = $req -> post('state');
               $contact_city =$req -> post('city') ;
               $contact_pin = $req -> post('pincode');
               $contact_mob_no = $req -> post('mobile');
               $contact_office_no = $req -> post('officephone');
               $contact_residence_no = $req -> post('residencephone');
               $contact_email = $req -> post('email');
               $Co_applicant_full_name = $req -> post('coapplicantname');
               $co_applicant_father = $req -> post('coapplicantfathername');
               $co_applicant_state = $req -> post('coapplicantstate');
               $co_applicant_city =$req -> post('coapplicantcity');
               $co_applicant_correspondence_address = $req -> post('coapplicantaddress');
               $co_applicant_permanent_address = $req -> post('coapplicantaddresspermanent');
               $co_applicant_pincode = $req -> post('coapplicantpincode');
               $co_applicant_mob_no = $req -> post('coapplicantmobile');
               $co_applicant_residence_no = $req -> post('coapplicantresidencephone');
               $co_applicant_email =$req -> post('coapplicantemail');
               $contact_gender = $req -> post('gender');
               $contact_dob = $req -> post('dob');
               $contact_occuption = $req -> post('occupation');
               $contact_pancard = $req -> post('pan');
               $co_applicant_gender = $req -> post('coapplicantgender');
               $co_applicant_dob = $req -> post('coapplicantdob');
               $co_applicant_occuption = $req -> post('coapplicantoccupation');
               $co_applicant_pancard = $req -> post('coapplicantpan');
               $co_applicant_office_no = $req -> post('coapplicantofficephone');
               //    $co_applicant_img = $co_applicant_img;
               $mobile_exist = crm_contact::where('id','!=',$pid) 
               ->where('contact_mob_no','=',$contact_mob_no) 
               -> count();
               if ($mobile_exist > 0) {
                return response() -> json(['status' => 'error',
                'error' => 'Applicant Mobile number already exist!']); 
               }
               $email_exist = crm_contact::where('id','!=',$pid) 
               ->where('contact_email','=',$contact_email) 
               -> count();
               if ($email_exist > 0) {
                return response() -> json(['status' => 'error',
                'error' => 'Applicant Email already exist!']); 
               }
               $co_mobile_exist = crm_contact::where('id','!=',$pid) 
               ->where('co_applicant_mob_no','=',$co_applicant_mob_no) 
               -> count();
               if ($co_mobile_exist > 0) {
                return response() -> json(['status' => 'error',
                'error' => 'Co-Applicant Mobile number already exist!']); 
               }
               $co_email_exist = crm_contact::where('id','!=',$pid) 
               ->where('co_applicant_email','=',$co_applicant_email) 
               -> count(); 
               if ($co_email_exist > 0) {
                return response() -> json(['status' => 'error',
                'error' => 'Co-Applicant Email already exist!']); 
               }
               if (isset($applicant_img)) {
                  $res1 = DB::table('crm_contacts')
                  ->where('id',$pid)
                  ->limit(1)
                  ->update(['contact_full_name' => $contact_full_name,'contact_father' =>$contact_father,'contact_correspondence_address' =>$contact_correspondence_address,
                  'contact_permanent_address' =>$contact_permanent_address,'contact_state' =>$contact_state,'contact_city' =>$contact_city,
                  'contact_pin' =>$contact_pin,'contact_mob_no' =>$contact_mob_no,'contact_office_no' =>$contact_office_no,'contact_residence_no' =>$contact_residence_no,
                  'contact_email' =>$contact_email,'Co_applicant_full_name' =>$Co_applicant_full_name,'co_applicant_father' =>$co_applicant_father,
                  'co_applicant_state' =>$co_applicant_state,'co_applicant_city' =>$co_applicant_city,'co_applicant_correspondence_address' =>$co_applicant_correspondence_address,
                  'co_applicant_permanent_address' =>$co_applicant_permanent_address,'co_applicant_pincode' =>$co_applicant_pincode,
                  'co_applicant_mob_no' =>$co_applicant_mob_no,'co_applicant_residence_no' =>$co_applicant_residence_no,'co_applicant_email' =>$co_applicant_email,
                  'contact_dob' =>$contact_dob,'contact_gender' =>$contact_gender,'contact_pancard' =>$contact_pancard,'contact_occuption' =>$contact_occuption,
                  'co_applicant_gender' =>$co_applicant_gender,'co_applicant_dob' =>$co_applicant_dob,'co_applicant_occuption' =>$co_applicant_occuption,
                  'co_applicant_pancard' =>$co_applicant_pancard,'co_applicant_office_no' =>$co_applicant_office_no,'contact_img' => $applicant_img]);
               }else if(isset($co_applicant_img)){
                $res2 = DB::table('crm_contacts')
                ->where('id',$pid)
                ->limit(1)
                ->update(['contact_full_name' => $contact_full_name,'contact_father' =>$contact_father,'contact_correspondence_address' =>$contact_correspondence_address,
                'contact_permanent_address' =>$contact_permanent_address,'contact_state' =>$contact_state,'contact_city' =>$contact_city,
                'contact_pin' =>$contact_pin,'contact_mob_no' =>$contact_mob_no,'contact_office_no' =>$contact_office_no,'contact_residence_no' =>$contact_residence_no,
                'contact_email' =>$contact_email,'Co_applicant_full_name' =>$Co_applicant_full_name,'co_applicant_father' =>$co_applicant_father,
                'co_applicant_state' =>$co_applicant_state,'co_applicant_city' =>$co_applicant_city,'co_applicant_correspondence_address' =>$co_applicant_correspondence_address,
                'co_applicant_permanent_address' =>$co_applicant_permanent_address,'co_applicant_pincode' =>$co_applicant_pincode,
                'co_applicant_mob_no' =>$co_applicant_mob_no,'co_applicant_residence_no' =>$co_applicant_residence_no,'co_applicant_email' =>$co_applicant_email,
                'contact_dob' =>$contact_dob,'contact_gender' =>$contact_gender,'contact_pancard' =>$contact_pancard,'contact_occuption' =>$contact_occuption,
                'co_applicant_gender' =>$co_applicant_gender,'co_applicant_dob' =>$co_applicant_dob,'co_applicant_occuption' =>$co_applicant_occuption,
                'co_applicant_pancard' =>$co_applicant_pancard,'co_applicant_office_no' =>$co_applicant_office_no,'co_applicant_img' => $co_applicant_img]);
               }else if(isset($applicant_img) && isset($co_applicant_img)){
                $res3 = DB::table('crm_contacts')
                ->where('id',$pid)
                ->limit(1)
                ->update(['contact_full_name' => $contact_full_name,'contact_father' =>$contact_father,'contact_correspondence_address' =>$contact_correspondence_address,
                'contact_permanent_address' =>$contact_permanent_address,'contact_state' =>$contact_state,'contact_city' =>$contact_city,
                'contact_pin' =>$contact_pin,'contact_mob_no' =>$contact_mob_no,'contact_office_no' =>$contact_office_no,'contact_residence_no' =>$contact_residence_no,
                'contact_email' =>$contact_email,'Co_applicant_full_name' =>$Co_applicant_full_name,'co_applicant_father' =>$co_applicant_father,
                'co_applicant_state' =>$co_applicant_state,'co_applicant_city' =>$co_applicant_city,'co_applicant_correspondence_address' =>$co_applicant_correspondence_address,
                'co_applicant_permanent_address' =>$co_applicant_permanent_address,'co_applicant_pincode' =>$co_applicant_pincode,
                'co_applicant_mob_no' =>$co_applicant_mob_no,'co_applicant_residence_no' =>$co_applicant_residence_no,'co_applicant_email' =>$co_applicant_email,
                'contact_dob' =>$contact_dob,'contact_gender' =>$contact_gender,'contact_pancard' =>$contact_pancard,'contact_occuption' =>$contact_occuption,
                'co_applicant_gender' =>$co_applicant_gender,'co_applicant_dob' =>$co_applicant_dob,'co_applicant_occuption' =>$co_applicant_occuption,
                'co_applicant_pancard' =>$co_applicant_pancard,'co_applicant_office_no' =>$co_applicant_office_no,'contact_img' => $applicant_img,'co_applicant_img' => $co_applicant_img]);
               }else{
                $res4 = DB::table('crm_contacts')
                ->where('id',$pid)
                ->limit(1)
                ->update(['contact_full_name' => $contact_full_name,'contact_father' =>$contact_father,'contact_correspondence_address' =>$contact_correspondence_address,
                'contact_permanent_address' =>$contact_permanent_address,'contact_state' =>$contact_state,'contact_city' =>$contact_city,
                'contact_pin' =>$contact_pin,'contact_mob_no' =>$contact_mob_no,'contact_office_no' =>$contact_office_no,'contact_residence_no' =>$contact_residence_no,
                'contact_email' =>$contact_email,'Co_applicant_full_name' =>$Co_applicant_full_name,'co_applicant_father' =>$co_applicant_father,
                'co_applicant_state' =>$co_applicant_state,'co_applicant_city' =>$co_applicant_city,'co_applicant_correspondence_address' =>$co_applicant_correspondence_address,
                'co_applicant_permanent_address' =>$co_applicant_permanent_address,'co_applicant_pincode' =>$co_applicant_pincode,
                'co_applicant_mob_no' =>$co_applicant_mob_no,'co_applicant_residence_no' =>$co_applicant_residence_no,'co_applicant_email' =>$co_applicant_email,
                'contact_dob' =>$contact_dob,'contact_gender' =>$contact_gender,'contact_pancard' =>$contact_pancard,'contact_occuption' =>$contact_occuption,
                'co_applicant_gender' =>$co_applicant_gender,'co_applicant_dob' =>$co_applicant_dob,'co_applicant_occuption' =>$co_applicant_occuption,
                'co_applicant_pancard' =>$co_applicant_pancard,'co_applicant_office_no' =>$co_applicant_office_no]);
               }
               if (isset($res1)) {
                $fileapp->move('upload', $applicant_img);
                return response() -> json(['status' => 'success',
                'msg' => 'Contact updated Successfully!']);
               }else if(isset($res2)){
                $fileco->move('upload', $co_applicant_img);
                return response() -> json(['status' => 'success',
                'msg' => 'Contact updated Successfully!']);
               }else if(isset($res3)){
                $fileapp->move('upload', $applicant_img);
                $fileco->move('upload', $co_applicant_img);
                return response() -> json(['status' => 'success',
                'msg' => 'Contact updated Successfully!']);
               }else if(isset($res4)){
                return response() -> json(['status' => 'success',
                'msg' => 'Contact updated Successfully!']);
               }else{
                return response() -> json(['status' => 'error',
                'error' => 'Contact not updated!']); 
               }
           }
    }
    public function showdata(Request $req)
    {
        return view('../admin/CRM/contacts') -> with('data',crm_contact::where('contact_status','!=','delete')->paginate(10));
    }
    public function contactview(Request $req ,$id)
    {
        return view('../admin/CRM/contactview') -> with('data',crm_contact::find($id));
    }
    public function deletecontact(Request $req ,$id)
    {
        $res = DB::table('crm_contacts') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['contact_status' => 'delete']);
        if($res){
            session() -> flash('success','Contact Deleted!');
            return redirect('admin/CRM/contacts');
        }else{
            session() -> flash('error','Contact Not Deleted!');
            return redirect('admin/CRM/contacts');
        }
    }
    public function editstatus(Request $req){
        $id = $req -> id;
        $data = DB::SELECT("SELECT * FROM crm_contacts where id = $id");
        foreach ($data as $value) {
           
        }
        if($value -> contact_status == "Active"){
         $result = DB::table('crm_contacts') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['contact_status' => 'Inactive']); 
        }else{
         $result = DB::table('crm_contacts') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['contact_status' => 'Active']);
        }
    }
    public function edit(Request $req,$id)
    {
        return view('../admin/CRM/editcontacts') -> with('data',crm_contact::find($id));
    }

}
