<?php
namespace App\Http\Controllers;
use App\Models\project;
use App\Models\statesandcity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
class FetchCityController extends Controller
{
    public function fetchcity(Request $req)
    {
        $state = $req -> state;
        // return $state;
        $data = statesandcity::where('state','=',$state)->get(['city']);
        // return $data;
        return response()->json($data);
    }
}
