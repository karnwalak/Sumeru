<?php
namespace App\Http\Controllers;
use App\Models\project;
use App\Models\statesandcity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
class ProjectController extends Controller
{ 
    public function showcity(Request $req)
    {
        $data = statesandcity::distinct()->get(['state']);
        return view('../admin/CIVIL/addprojects')->with('data',$data);
    }
    public function create(Request $req)
    {

        $valid = Validator::make($req -> all(),[
            'project_name' => 'required',
            'project_location' => 'required|regex:/^[a-zA-Z\s]+$/',
            'state' => 'required|not_in:0',
            'city' => 'required|not_in:0',
            'contact' => 'required|regex:/^([+]\d{2})?\d{10}$/|unique:hr_employees,employee_contact_no',
            'budget' => 'required|numeric',
            'status' => 'required|not_in:0',
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $data = [
                'project_name' => $req -> post('project_name'),
                'project_location' => $req -> post('project_location'),
                'project_city' => $req -> post('city'),
                'project_state' => $req -> post('state'),
                'project_budget' => $req -> post('budget'),
                'office_contact' => $req -> post('contact'),
                'project_status' => $req -> post('status')
            ];
            $res = project::insert($data);
            if($res){
                return response()-> json([
                    'status' => 'success',
                    'msg'=>'Project Added!'
                  ]);
            }
            else{
                return response()-> json([
                    'status' => 'error',
                    'error'=>'Project Not Added!'
                  ]);
            }
        }
    }

    public function projectview(Request $req,$id)
    {
        return view('../admin/CIVIL/viewproject')->with('data',project::find($id));
    }

    public function show(Request $req)
    {
        return view('../admin/CIVIL/projects')->with('data',project::where('project_status','!=','delete')->get());
    }

    public function edit(Request $req,$id)
    {
        $state = statesandcity::distinct()->get(['state']);
        $city = statesandcity::get(['city']);
        return view('../admin/CIVIL/editproject')->with('data',project::find($id))->with('state',$state)->with('city',$city);
    }

    public function update(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'project_name' => 'required',
            'project_location' => 'required|regex:/^[a-zA-Z\s]+$/',
            'state' => 'required|not_in:0',
            'city' => 'required|not_in:0',
            'contact' => 'required|regex:/^([+]\d{2})?\d{10}$/|unique:hr_employees,employee_contact_no',
            'budget' => 'required|numeric',
            'status' => 'required|not_in:0',
           ]);
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $project_id = $req -> post('project_id');
            $project_name = $req -> post('project_name');
            $project_location = $req -> post('project_location');
            $project_city = $req -> post('city');
            $project_state = $req -> post('state');
            $project_budget = $req -> post('budget');
            $office_contact = $req -> post('contact');
            $project_status = $req -> post('status');
            $res = DB::table('projects') 
                ->where('id', $project_id)
                ->limit(1) 
                ->update(['project_name'=>$project_name,'project_location' => $project_location,'project_city'=>$project_city,'project_state'=>$project_state,
                'project_budget'=>$project_budget,'office_contact'=>$office_contact,'project_status'=>$project_status]); 
            if($res){
                return response()-> json([
                    'status' => 'success',
                    'msg'=>'Project Updated!'
                  ]);
            }
            else{
                return response()-> json([
                    'status' => 'error',
                    'error'=>'Project Not Updated!'
                  ]);
            }
        }
    }

    public function destroy(Request $req,$id)
    {
        $result=DB::table('projects') 
        ->where('id', $id)
        ->limit(1) 
        ->update(['project_status'=>'delete']); 
        if($result){
            session()->flash('success','Project Deleted!');
            return redirect('../admin/CIVIL/projects');
        }else{
            session()->flash('error','Project not Deleted!');
            return redirect('../admin/CIVIL/projects');
        } 
    }
    public function statusupdateproject(Request $req)
    {
        $id = $req -> id;
        $data = DB::SELECT("SELECT * FROM projects where id = $id");
        foreach ($data as $value) {
           
        }
        if($value -> project_status == "Active"){
         $result = DB::table('projects') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['project_status' => 'Inactive']); 
        }else{
         $result = DB::table('projects') 
            ->where('id', $id)
            ->limit(1) 
            ->update(['project_status' => 'Active']);
        }
    }
}
