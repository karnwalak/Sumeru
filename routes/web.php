<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('forgotpassword','forgot_password');
Route::view('setpassword/{id}','setpassword');
Route::post('forgotPassword','App\Http\Controllers\AdminController@forgotPassword');
Route::post('setPassword','App\Http\Controllers\AdminController@setPassword');
Route::post('auth','App\Http\Controllers\AdminController@auth');
Route::group(['middleware' => 'disable_back_btn'],function(){
    Route::group(['middleware' => 'admin_auth'],function(){
        //inv
        Route::view('admin/ERP/dashboard','admin/ERP/dashboard');
        Route::view('admin/ERP/materialdashboard','admin/ERP/materialdashboard');
        Route::view('admin/ERP/addseller','admin/ERP/addseller');
        Route::view('admin/ERP/addmaterial','admin/ERP/addmaterial');
        Route::view('admin/ERP/addproducts','admin/ERP/addproducts');
        // Route::view('admin/ERP/sellerpurchaseorder/{id}','admin/ERP/sellerpurchaseorder');
        Route::get('admin/ERP/sellerpurchaseorder/{id}','App\Http\Controllers\PurchaseController@showorder');
        Route::view('admin/ERP/createpurchaseorder','admin/ERP/createpurchaseorder');
        // Route::view('admin/ERP/viewpurchaseorder/{id}','admin/ERP/viewpurchaseorder');
        // Route::get('admin/ERP/viewpurchaseorder/{id}','App\Http\Controllers\PurchaseController@showdata');
        Route::get('admin/ERP/editpurchaseorder/{id}',[PurchaseController::class,'showdata']);
        Route::get('admin/ERP/createpurchaseorder',[PurchaseController::class,'showseller']);
        Route::get('admin/ERP/viewpurchaseorder/{id}',[PurchaseController::class,'showpurchase']);
        Route::view('admin/ERP/editpurchaseorder','admin/ERP/editpurchaseorder');
        Route::view('admin/ERP/purchaseorder/{id}','admin/ERP/purchaseorder');
        Route::view('admin/ERP/searchresult','admin/ERP/searchresult');
        Route::view('admin/ERP/searchcategory','admin/ERP/searchcategory');
        Route::view('admin/ERP/searchproduct','admin/ERP/searchproduct');
        Route::view('admin/ERP/searchorder','admin/ERP/searchorder');
        Route::view('admin/ERP/materialdashboard','admin/ERP/materialdashboard');
        Route::get('admin/ERP/materialcategory','App\Http\Controllers\CategoryController@show');
        Route::get('admin/ERP/materialspage','App\Http\Controllers\MaterialController@show');
        Route::get('admin/ERP/seller','App\Http\Controllers\SellerController@show');
        Route::get('admin/ERP/purchaseorder','App\Http\Controllers\PurchaseController@show');
        Route::get('admin/ERP/editsellers/{id}','App\Http\Controllers\SellerController@edit');
        // Route::view('admin/ERP/productstockrecord/{id}','admin/ERP/productstockrecord');
        Route::get('admin/ERP/productstockrecord/{id}','App\Http\Controllers\MaterialStockController@show');
        // Route::view('admin/ERP/editproducts/{id}','admin/ERP/editproducts');
        Route::get('admin/ERP/editproducts/{id}','App\Http\Controllers\MaterialController@edit');
        // Route::view('admin/ERP/editmaterials/{id}','admin/ERP/editmaterials');
        Route::get('admin/ERP/editmaterials/{id}','App\Http\Controllers\CategoryController@edit');
        // Route::view('admin/ERP/sellerprofile/{id}','admin/ERP/sellerprofile');
        Route::get('admin/ERP/sellerprofile/{id}','App\Http\Controllers\SellerController@showprofile');
        Route::post('admin/ERP/statusupdatematerialcategory','App\Http\Controllers\CategoryController@statusupdate');
        Route::post('admin/ERP/statusupdatematerial','App\Http\Controllers\MaterialController@statusupdate');
        Route::post('admin/ERP/fetchtype','App\Http\Controllers\MaterialController@fetchtype');
        Route::post('admin/ERP/statusupdateseller','App\Http\Controllers\SellerController@statusupdate');
        Route::post('admin/ERP/statusupdatepurcahseorder','App\Http\Controllers\PurchaseController@statusupdate');
        Route::post('admin/ERP/createpurchaseorder','App\Http\Controllers\PurchaseController@createpurchaseorder');
        Route::post('admin/ERP/editpurchaseorder','App\Http\Controllers\PurchaseController@editpurchaseorder');
        Route::post('admin/ERP/addSeller','App\Http\Controllers\SellerController@addSeller');
        Route::get('admin/ERP/sellerdelete/{id}','App\Http\Controllers\SellerController@sellerdelete');
        Route::get('admin/ERP/deletematrial/{id}','App\Http\Controllers\CategoryController@deletematrial');
        Route::post('admin/ERP/addCategory','App\Http\Controllers\CategoryController@addCategory');
        Route::post('admin/ERP/addProduct','App\Http\Controllers\MaterialController@addMaterial');
        Route::get('admin/ERP/deleteproduct/{id}','App\Http\Controllers\MaterialController@deleteproduct');
        Route::get('admin/ERP/deleteorder/{id}','App\Http\Controllers\PurchaseController@deleteorder');
        Route::post('admin/ERP/updateProducts','App\Http\Controllers\MaterialController@updateProducts');
        Route::post('admin/ERP/editCategory','App\Http\Controllers\CategoryController@editCategory');
        Route::post('admin/ERP/search','App\Http\Controllers\SellerController@index');
        Route::post('admin/ERP/searchorder','App\Http\Controllers\PurchaseController@index');
        Route::post('admin/ERP/searchcategory','App\Http\Controllers\CategoryController@index');
        Route::post('admin/ERP/searchproduct','App\Http\Controllers\MaterialController@index');
        Route::post('admin/ERP/searchstock','App\Http\Controllers\MaterialStockController@index');
        Route::post('admin/ERP/editSeller','App\Http\Controllers\SellerController@editSeller');
        Route::view('admin/FLAT/dashboard','admin/FLAT/dashboard');
        Route::view('admin/FLAT/searchflat','admin/FLAT/searchflat');
        Route::view('admin/ERP/searchstock','admin/ERP/searchstock');
        Route::view('admin/FLAT/searchflatcategory','admin/FLAT/searchflatcategory');
        Route::view('admin/FLAT/flatdashboard','admin/FLAT/flatdashboard');
        Route::view('admin/FLAT/addflatstockcategory','admin/FLAT/addflatstockcategory');
        Route::view('admin/FLAT/addflats','admin/FLAT/addflats');
        // Route::view('admin/FLAT/editflats/{id}','admin/FLAT/editflats');
        Route::get('admin/FLAT/editflats/{id}','App\Http\Controllers\FlatController@edit');
        // Route::view('admin/FLAT/editflatstockcategory/{id}','admin/FLAT/editflatstockcategory');
        Route::get('admin/FLAT/editflatstockcategory/{id}','App\Http\Controllers\FlatCategoryController@edit');
        Route::get('admin/FLAT/flatstockinventory','App\Http\Controllers\FlatController@show');
        Route::get('admin/FLAT/flatstockcategory','App\Http\Controllers\FlatCategoryController@show');
        Route::post('admin/FLAT/searchflatcategory','App\Http\Controllers\FlatCategoryController@index');
        Route::post('admin/FLAT/searchflat','App\Http\Controllers\FlatController@index');
        Route::post('admin/FLAT/statusupdateflatstockinventory','App\Http\Controllers\FlatController@statusupdate');
        Route::post('admin/FLAT/statusupdateflatstockcategory','App\Http\Controllers\FlatCategoryController@statusupdate');
        Route::post('admin/FLAT/addFlatCategory','App\Http\Controllers\FlatCategoryController@addFlatCategory');
        Route::get('admin/FLAT/deleteflatcategory/{id}','App\Http\Controllers\FlatCategoryController@deleteflatcategory');
        Route::post('admin/FLAT/updateFlatCategory','App\Http\Controllers\FlatCategoryController@updateFlatCategory');
        Route::post('admin/FLAT/addFlat','App\Http\Controllers\FlatController@addFlat');
        Route::get(' admin/FLAT/deleteflat/{id}','App\Http\Controllers\FlatController@deleteFlat');
        Route::post('admin/FLAT/editFlat','App\Http\Controllers\FlatController@editFlat');
        Route::get('admin/logout', function () {
        session()->flush();
        return redirect('/');
    });
    });
});