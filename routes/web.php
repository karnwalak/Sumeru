<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\HrDepartmentsController;
use App\Http\Controllers\HrDesignationController;
use App\Http\Controllers\HrShiftController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\BookingCreditController;
use App\Http\Controllers\FinancePurchaseController;
use App\Http\Controllers\FinanceEmployeeController;
use App\Http\Controllers\CrmBookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CrmLeadController;
use App\Http\Controllers\CrmContactController;
use App\Http\Controllers\HrAllowenceController;
use App\Http\Controllers\HrEmployeesController;
use App\Http\Controllers\HrTaskController;
use App\Http\Controllers\HrDailyReportController;
use App\Http\Controllers\PurchaseOrderRequestController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\WorkerTaskController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FetchCityController;
Route::get('/', function () {
    return view('welcome');
});
Route::view('forgotpassword','forgot_password');
Route::view('setpassword/{id}','setpassword');
Route::post('forgotPassword','App\Http\Controllers\AdminController@forgotPassword');
Route::post('setPassword','App\Http\Controllers\AdminController@setPassword');
Route::post('auth','App\Http\Controllers\AdminController@auth');
Route::view('employeelogin','employeelogin');
Route::post('fetchmobile',[HrEmployeesController::class,'fetchmobile']);
Route::post('emplogin',[HrEmployeesController::class,'emplogin']);
Route::group(['middleware' => 'disable_back_btn'],function(){
    Route::group(['middleware' => 'admin_auth'],function(){
        //inv
        Route::view('admin/ERP/dashboard','admin/ERP/dashboard');
        Route::get('admin/ERP/viewrequest/{id}',[PurchaseOrderRequestController::class,'viewrequest']); 
        Route::get('admin/ERP/editrequest/{id}',[PurchaseOrderRequestController::class,'edit']);
        Route::post('admin/ERP/updaterequest',[PurchaseOrderRequestController::class,'update']);
        Route::get('admin/ERP/purchaseorderrequest',[PurchaseOrderRequestController::class,'show']);
        Route::post('admin/ERP/addrequest',[PurchaseOrderRequestController::class,'create']);
        Route::view('admin/ERP/addrequest','admin/ERP/addrequest');
        Route::view('admin/ERP/materialdashboard','admin/ERP/materialdashboard');
        // Route::view('admin/ERP/addseller','admin/ERP/addseller');
        Route::get('admin/ERP/addseller/{st}',[SellerController::class,'dataSeller']);
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
        Route::post('admin/ERP/editcategorystatus',[CategoryController::class,'statusupdate']);
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
        Route::view('admin/ERP/searchstock','admin/ERP/searchstock');
        /**********************************************FLAT Inventory*******************************************************/
        Route::view('admin/FLAT/dashboard','admin/FLAT/dashboard');
        Route::view('admin/FLAT/searchflat','admin/FLAT/searchflat');
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
        /*****************************************HR AND PAYROLL*****************************************************************/
        Route::view('admin/HR/hrdashboard','admin/HR/hrdashboard');
        Route::view('admin/HR/hrdepartment','admin/HR/hrdepartment');
        Route::view('admin/HR/employeeshift','admin/HR/employeeshift');
        Route::get('admin/HR/hrdepartment',[HrDepartmentsController::class,'show']);
        Route::POST('admin/HR/addcomment',[CommentController::class,'addcomment']);
        Route::get('admin/HR/employeetask/{id}',[HrEmployeesController::class,'employeetask']);
        Route::get('admin/HR/employees',[HrEmployeesController::class,'showdata']);
        Route::get('admin/HR/addemployees',[HrEmployeesController::class,'show']);
        Route::get('admin/HR/addtasks',[HrTaskController::class,'show']);
        Route::get('admin/HR/edittask/{id}',[HrTaskController::class,'edit']);
        Route::POST('admin/HR/edittasks',[HrTaskController::class,'edittask']);
        Route::post('admin/HR/changetaskstatus',[HrTaskController::class,'changetaskstatus']);
        Route::post('admin/HR/finishstatus',[HrTaskController::class,'finishstatus']);
        Route::POST('admin/HR/addtasks',[HrTaskController::class,'create']);
        Route::POST('admin/HR/addemployee',[HrEmployeesController::class,'create']);
        Route::POST('admin/HR/editloginpermission',[HrEmployeesController::class,'editloginpermission']);
        Route::get('admin/HR/fetchshift/{id}',[HrEmployeesController::class,'fetchshift']);
        Route::POST('admin/HR/addshift',[HrShiftController::class,'create']);
        Route::get('admin/HR/shifts',[HrShiftController::class,'show']);
        Route::view('admin/HR/addhrdepartment','admin/HR/addhrdepartment');
        Route::get('admin/HR/addhrdepartment',[HrDepartmentsController::class,'showdata']);
        Route::get('admin/HR/hrdesignation',[HrDesignationController::class,'showdata']);
        Route::get('admin/HR/tasksandprojects',[HrTaskController::class,'showdata']);
        Route::get('admin/HR/deletedepartment/{id}',[HrDepartmentsController::class,'delete']);
        Route::get('admin/HR/deletehrdesignation/{id}',[HrDesignationController::class,'delete']);
        Route::get('admin/HR/deletehrallowances/{id}',[HrAllowenceController::class,'delete']);
        Route::post('admin/HR/addhrdesignation',[HrDesignationController::class,'addhrdesignation']);
        Route::get('admin/HR/addhrdesignation',[HrDesignationController::class,'show']);
        Route::post('admin/HR/addhrdepart',[HrDepartmentsController::class,'create']);
        Route::post('admin/HR/addhrallowences',[HrAllowenceController::class,'create']);
        Route::get('admin/HR/hrallowance',[HrAllowenceController::class,'showdata']);
        Route::get('admin/HR/edithrallowances/{id}',[HrAllowenceController::class,'edithrallowances']);
        Route::post('admin/HR/searchdesignation',[HrDesignationController::class,'index']);
        Route::post('admin/HR/searchdepartment',[HrDepartmentsController::class,'index']);
        Route::post('admin/HR/searchallowence',[HrAllowenceController::class,'index']);
        Route::post('admin/HR/editdepartmentstatus',[HrDepartmentsController::class,'editstatus']);
        Route::post('admin/HR/editdesignationstatus',[HrDesignationController::class,'editstatus']);
        Route::post('admin/HR/editallowencestatus',[HrAllowenceController::class,'editstatus']);
        Route::post('admin/HR/editshiftstatus',[HrShiftController::class,'editstatus']);
        Route::post('admin/HR/editemployeestatus',[HrEmployeesController::class,'editstatus']);
        Route::post('admin/HR/edithrdepart',[HrDepartmentsController::class,'edithrdepart']);
        Route::post('admin/HR/edithrallowence',[HrAllowenceController::class,'edithrallowence']);
        // Route::view('admin/HR/addhrdesignation','admin/HR/addhrdesignation');
        Route::view('admin/HR/addshifts','admin/HR/addshifts');
        Route::view('admin/HR/shorttasks','admin/HR/shorttasks');
        Route::post('admin/HR/addtasks',[HrTaskController::class,'create']);
        Route::post('admin/HR/serachtask',[HrTaskController::class,'index']);
        Route::get('admin/HR/viewtasks/{id}',[HrTaskController::class,'view']);
        Route::get('admin/HR/task/{st}',[HrTaskController::class,'mytask']);
        Route::view('admin/HR/addhrallowances','admin/HR/addhrallowances');
        Route::view('admin/HR/searchtask','admin/HR/searchtask');
        // Route::view('admin/HR/hrallowance','admin/HR/hrallowance');
        Route::view('admin/HR/allowances','admin/HR/allowances');
        // Route::view('admin/HR/editemployees','admin/HR/editemployees');
        Route::get('admin/HR/editemployees/{id}',[HrEmployeesController::class,'edit']);
        Route::post('admin/HR/editemployee',[HrEmployeesController::class,'editemployee']);
        Route::get('admin/HR/edithrdepartment/{id}',[HrDepartmentsController::class,'edit']);
        Route::view('admin/HR/edithrdepartment','admin/HR/edithrdepartment');
        Route::get('admin/HR/edithrdesignation/{id}',[HrDesignationController::class,'edithrdesignation']);
        Route::post('admin/HR/edithrdesignation',[HrDesignationController::class,'edit']);
        Route::get('admin/HR/editshifts/{id}',[HrShiftController::class,'edit']);
        Route::get('admin/HR/deleteshift/{id}',[HrShiftController::class,'delete']);
        Route::get('admin/HR/deleteemployee/{id}',[HrEmployeesController::class,'delete']);
        Route::post('admin/HR/editshift',[HrShiftController::class,'editshift']);
        Route::get('admin/HR/employeeprofile/{id}',[HrEmployeesController::class,'profile']);
        Route::view('admin/HR/viewtasks','admin/HR/viewtasks');
        // Route::view('admin/HR/dailyreports','admin/HR/dailyreports');
        Route::view('admin/HR/adddailyreports','admin/HR/adddailyreports');
        Route::get('admin/HR/viewdailyreports/{id}',[HrDailyReportController::class,'viewdailyreports']);
        Route::get('admin/HR/editdailyreports/{id}',[HrDailyReportController::class,'editdailyreports']);
        Route::get('admin/HR/dailyreports',[HrDailyReportController::class,'show']);
        Route::POST('admin/HR/addreport',[HrDailyReportController::class,'addreport']);
        Route::POST('admin/HR/editreport',[HrDailyReportController::class,'editreport']);
        
        // Route::view('admin/HR/employees','admin/HR/employees');
        // Route::view('admin/HR/hrdesignation','admin/HR/hrdesignation');
        // Route::view('admin/HR/shifts','admin/HR/shifts');
        // Route::view('admin/HR/tasksandprojects','admin/HR/tasksandprojects');
       
        
        /****************************************************CRM*****************************************************************/
        Route::view('admin/CRM/crmdashboard','admin/CRM/crmdashboard');
        Route::get('admin/CRM/cashcredit',[CrmBookingController::class,'showpayment']);
        Route::get('admin/CRM/createleads',[CrmLeadController::class,'show']);
        Route::post('admin/CRM/updateleads',[CrmLeadController::class,'updateleads']);
        Route::post('admin/CRM/searchlead',[CrmLeadController::class,'index']);
        Route::get('admin/CRM/sortleads/{st}',[CrmLeadController::class,'sortleads']);
        Route::get('admin/CRM/leads',[CrmLeadController::class,'showdata']);
        Route::post('admin/CRM/addleads',[CrmLeadController::class,'addleads']);
        Route::post('admin/CRM/addContact',[CrmContactController::class,'addContact']);
        Route::get('admin/CRM/addcontacts',[CrmContactController::class,'showcity']);
        Route::post('admin/CRM/editContact',[CrmContactController::class,'editContact']);
        Route::get('admin/CRM/deletelead/{id}',[CrmLeadController::class,'delete']);
        Route::get('admin/CRM/deletecontact/{id}',[CrmContactController::class,'deletecontact']);
        Route::post('admin/CRM/editcontactstatus',[CrmContactController::class,'editstatus']);
        Route::view('admin/CRM/editleads','admin/CRM/editleads');
        Route::view('admin/CRM/sortleads','admin/CRM/sortleads');
        Route::get('admin/CRM/contacts',[CrmContactController::class,'showdata']);
        Route::get('admin/CRM/createbookings',[CrmBookingController::class,'showdata']);
        Route::get('admin/CRM/bookings',[CrmBookingController::class,'show']);
        Route::get('admin/CRM/deletebooking/{id}',[CrmBookingController::class,'deletebooking']);
        Route::post('admin/CRM/fetchcontact',[CrmBookingController::class,'fetchcontact']);
        Route::post('admin/CRM/searchcash',[CrmBookingController::class,'searchcash']);
        Route::get('admin/CRM/sortbookings/{st}',[CrmBookingController::class,'sortbookings']);
        Route::get('admin/CRM/sortcash/{st}',[CrmBookingController::class,'sortcash']);
        Route::post('admin/CRM/fetchproduct',[CrmBookingController::class,'fetchproduct']);
        Route::post('admin/CRM/addBooking',[CrmBookingController::class,'addBooking']);
        Route::post('admin/CRM/addPayment',[CrmBookingController::class,'addPayment']);
        Route::post('admin/CRM/searchbooking',[CrmBookingController::class,'index']);
        Route::view('admin/CRM/shortbooking','admin/CRM/shortbooking');
        Route::view('admin/CRM/editcontacts','admin/CRM/editcontacts');
        Route::get('admin/CRM/bookingsview/{id}',[CrmBookingController::class,'bookingsview']);
        // Route::view('admin/CRM/bookings','admin/CRM/bookings');
        // Route::view('admin/CRM/bookingsview','admin/CRM/bookingsview');
        // Route::view('admin/CRM/cashcredit','admin/CRM/cashcredit');
        Route::view('admin/CRM/searchbooking','admin/CRM/searchbooking');
       
        Route::get('admin/CRM/contactview/{id}',[CrmContactController::class,'contactview']);
        Route::get('admin/CRM/editcontacts/{id}',[CrmContactController::class,'edit']);
        /*******************************************************FINANCE************************************************************/
        Route::view('admin/FINANCE/financedashboard','admin/FINANCE/financedashboard');
        Route::get('admin/FINANCE/editemployees/{id}',[FinanceEmployeeController::class,'editemployees']);
        Route::view('admin/FINANCE/dailycashincentive','admin/FINANCE/dailycashincentive');
        Route::post('admin/FINANCE/editemployee',[FinanceEmployeeController::class,'editdata']);
        Route::get('admin/FINANCE/addtransactionsemployee/{id}',[FinanceEmployeeController::class,'addtransactionsemployee']);
        Route::Post('admin/FINANCE/searchorder',[FinancePurchaseController::class,'searchorder']);
        Route::view('admin/FINANCE/addtransactionsemployee','admin/FINANCE/addtransactionsemployee');
        Route::get('admin/FINANCE/viewpurchaseorder/{id}',[FinancePurchaseController::class,'viewpurchaseorder']);
        Route::get('admin/FINANCE/addtransactionsorder/{id}',[FinancePurchaseController::class,'addtransactionsorder']);
        Route::get('admin/FINANCE/purchaseorders/{id}',[FinancePurchaseController::class,'purchaseorders']);
        Route::get('admin/FINANCE/addtransactionsseller/{id}',[FinancePurchaseController::class,'addtransactionsseller']);
        Route::post('admin/FINANCE/checkbookingcheckbox',[BookingCreditController::class,'checkbookingcheckbox']);
        Route::post('admin/FINANCE/addcashincentive',[FinanceEmployeeController::class,'addcashincentive']);
        Route::get('admin/FINANCE/dailycashincentive',[FinanceEmployeeController::class,'showinsentive']);
        // Route::view('admin/FINANCE/addtransactionsorder','admin/FINANCE/addtransactionsorder');
        // Route::view('admin/FINANCE/purchaseorder','admin/FINANCE/purchaseorder');
        Route::get('admin/FINANCE/purchaseorder',[FinancePurchaseController::class,'show']);
        Route::get('admin/FINANCE/salaries',[FinanceEmployeeController::class,'show']);
        // Route::view('admin/FINANCE/bookingcredit','admin/FINANCE/bookingcredit');
        Route::post('admin/FINANCE/payAmount',[FinancePurchaseController::class,'payAmount']);
        Route::post('admin/FINANCE/payAmountEmployee',[FinanceEmployeeController::class,'payAmountEmployee']);
        Route::get('admin/FINANCE/bookingcredit',[BookingCreditController::class,'showdata']);
        /*******************************************************CIVIL************************************************************/
        Route::get('admin/CIVIL/workers',[WorkerController::class,'showdata']);
        Route::POST('admin/CIVIL/addWorker',[WorkerController::class,'create']);
        Route::POST('admin/CIVIL/statusupdateworker',[WorkerController::class,'statusupdate']);
        Route::view('admin/CIVIL/addworkers','admin/CIVIL/addworkers');
        Route::get('admin/CIVIL/editworker/{id}',[WorkerController::class,'edit']);
        Route::get('admin/CIVIL/workerdelete/{id}',[WorkerController::class,'destroy']);
        Route::POST('admin/CIVIL/editWorker',[WorkerController::class,'update']);
        Route::get('admin/CIVIL/addwork/{ids}',[WorkerTaskController::class,'showdata']);
        Route::POST('admin/CIVIL/addWork',[WorkerTaskController::class,'create']);
        Route::get('admin/CIVIL/viewwork/{id}',[WorkerTaskController::class,'viewwork']);
        // Route::get('admin/CIVIL/viewwork/{id}',[WorkerTaskController::class,'viewwork']);
        Route::POST('admin/CIVIL/changeworkstatus',[WorkerTaskController::class,'changeworkstatus']);
        Route::POST('admin/CIVIL/finishstatus',[WorkerTaskController::class,'finishstatus']);
        Route::get('admin/CIVIL/editwork/{id}',[WorkerTaskController::class,'editwork']);
        Route::POST('admin/CIVIL/updatework',[WorkerTaskController::class,'updatework']);
        Route::get('admin/CIVIL/workerprofile/{id}',[WorkerController::class,'workerprofile']);
        Route::get('admin/CIVIL/works/{id}',[WorkerTaskController::class,'show']);
        Route::get('admin/CIVIL/employeework/{id}',[WorkerController::class,'showwork']);
        Route::get('admin/CIVIL/sortwork/{st}',[WorkController::class,'sortwork']);
        Route::get('admin/CIVIL/projects',[ProjectController::class,'show']);
        Route::get('admin/CIVIL/addprojects',[ProjectController::class,'showcity']);
        // Route::view('admin/CIVIL/addprojects','admin/CIVIL/addprojects');
        Route::POST('admin/CIVIL/addproject',[ProjectController::class,'create']);
        Route::get('admin/CIVIL/projectview/{id}',[ProjectController::class,'projectview']);
        Route::get('admin/CIVIL/editproject/{id}',[ProjectController::class,'edit']);
        Route::get('admin/CIVIL/deleteproject/{id}',[ProjectController::class,'destroy']);
        Route::post('admin/CIVIL/updateproject',[ProjectController::class,'update']);
        Route::post('admin/CIVIL/statusupdateproject',[ProjectController::class,'statusupdateproject']);
        Route::post('admin/fetchcity',[FetchCityController::class,'fetchcity']);
        Route::get('admin/logout', function () {
        session()->flush();
        return redirect('/');
    });
    });
});