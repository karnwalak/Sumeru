<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\hr_employees;
use App\Models\hr_department;
use App\Models\hr_task;
use App\Models\hr_allowence;
use App\Models\hr_employee_allowence;
use App\Models\hr_shift;
use App\Models\hr_designation;
use Validator;
$employee = $data[0];
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="utf-8" />
	<base href="../">
	<title>ERP</title>
	<meta name="description" content="Updates and statistics" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendors Styles(used by this page)-->
	<link href="/../theme/html/demo4/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle49d8.css?v=7.2.8"
	rel="stylesheet" type="text/css" />
	<link href="/../theme/html/demo4/dist/assets/plugins/custom/leaflet/leaflet.bundle49d8.css?v=7.2.8" rel="stylesheet"
	type="text/css" />
	<!--end::Page Vendors Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="/../theme/html/demo4/dist/assets/plugins/global/plugins.bundle49d8.css?v=7.2.8" rel="stylesheet"
	type="text/css" />
	<link href="/../theme/html/demo4/dist/assets/plugins/custom/prismjs/prismjs.bundle49d8.css?v=7.2.8" rel="stylesheet"
	type="text/css" />
	<link href="/../theme/html/demo4/dist/assets/css/style.bundle49d8.css?v=7.2.8" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<link rel="shortcut icon" href="/../img/icon.jpg" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
	<!--begin::Main-->
	<!--begin::Header Mobile-->
	<div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
		<!--begin::Logo-->
		<a href="../ERP/dashboard">
				<img alt="Logo" src="/../img/logoicon.png" class="logo-default max-h-30px" />
		</a>
		<!--end::Logo-->
		<!--begin::Toolbar-->
		<div class="d-flex align-items-center">
			<!--begin::Aside Mobile Toggle-->
			<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
				<span></span>
			</button>
			<!--end::Aside Mobile Toggle-->
			<!--begin::Header Menu Mobile Toggle-->
			<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
				<span></span>
			</button>
			<!--end::Header Menu Mobile Toggle-->
			<!--begin::Topbar Mobile Toggle-->
			<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
				<span class="svg-icon svg-icon-xl">
					<!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/General/User.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
						viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<path
								d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
								fill="#000000" fill-rule="nonzero" opacity="0.3" />
							<path
								d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
								fill="#000000" fill-rule="nonzero" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
			</button>
			<!--end::Topbar Mobile Toggle-->
		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Header Mobile-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">
			<!--begin::Aside-->
			<div class="aside aside-left d-flex flex-column" id="kt_aside">
				<!--begin::Brand-->
				<div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-4 py-lg-8">
					<!--begin::Logo-->
                    <a href="../ERP/dashboard">
			              <img alt="Logo" src="/../img/logoicon.png" class="logo-default max-h-30px" />
		            </a>
					<!--end::Logo-->
				</div>
				<!--end::Brand-->
				<!--begin::Nav Wrapper-->
					@include('admin/sidebar')
				<!--end::Nav Wrapper-->
				<!--begin::Footer-->
				<div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-8">
					<!--begin::Quick Panel-->
					<a href="#" class="btn btn-icon btn-clean btn-lg mb-1" id="kt_quick_panel_toggle" data-toggle="tooltip"
						data-placement="right" data-container="body" data-boundary="window" title="Quick Panel">
						<span class="svg-icon svg-icon-xl">
							<!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
								height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
									<path
										d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
										fill="#000000" opacity="0.3" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</a>
					<!--end::Quick Panel-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<!-- add header -->
				@include('admin/HR/header')
				<!-- add header end -->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-5 gutter-b subheader-transparent" id="kt_subheader" >
							<div class="container d-flex flex-column">
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Modal-->
						<div class="modal fade" id="subheader7Modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
							<div class="modal-dialog modal-xl" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Select Location</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<i aria-hidden="true" class="ki ki-close"></i>
										</button>
									</div>
									<div class="modal-body">
										<div id="kt_subheader_leaflet" style="height:450px; width: 100%;"></div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
										<button id="submit" type="button" class="btn btn-primary font-weight-bold" data-dismiss="modal">Apply</button>
									</div>
								</div>
							</div>
						</div>
						<!--end::Modal-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Card-->
								<div class="card card-custom gutter-b">
									<div class="card-body">
										<!--begin::Details-->
										<div class="d-flex mb-9">
											<!--begin: Pic-->
											<div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
												<div class="symbol symbol-50 symbol-lg-120">
													<img src="/../upload/{{$employee -> employee_img}}" alt="image" />
												</div>
												<div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
													<span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
												</div>
											</div>
											<!--end::Pic-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<!--begin::Title-->
												<div class="d-flex justify-content-between flex-wrap mt-1">
													<div class="d-flex mr-3">
														<a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3">{{$employee -> employee_name}}</a>
														<a href="#">
															<i class="flaticon2-correct text-success font-size-h5"></i>
														</a>
													</div>
													<div class="my-lg-0 my-3">
														<!-- <a href="#" class="btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-3">ask</a> -->
														<a href="employees" class="btn  btn-info font-weight-bolder text-uppercase">Back</a>
													</div>
												</div>
												<!--end::Title-->
												<!--begin::Content-->
												<div class="d-flex flex-wrap justify-content-between mt-1">
													<div class="d-flex flex-column flex-grow-1 pr-8">
														<div class="d-flex flex-wrap mb-4">
															<a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<i class="flaticon2-new-email mr-2 font-size-lg"></i>{{$employee -> email_id}}</a>
															<a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<i class="flaticon2-calendar-3 mr-2 font-size-lg"></i>
															{{$employee -> name}}</a>
															<a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr
															</a>
															<a href="#" class="text-dark-50 text-hover-primary font-weight-bold">
															<i class="flaticon2-placeholder mr-2 font-size-lg"></i>{{$employee -> employee_city}}</a>
														</div>
														<span class="font-weight-bold text-dark-50">I distinguish three main text objectives could be merely to inform people.</span>
														<span class="font-weight-bold text-dark-50">A second could be persuade people.You want people to bay objective</span>
													</div>
													<!-- <div class="d-flex align-items-center w-25 flex-fill float-right mt-lg-12 mt-8">
														<span class="font-weight-bold text-dark-75">Progress</span>
														<div class="progress progress-xs mx-3 w-100">
															<div class="progress-bar bg-success" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<span class="font-weight-bolder text-dark">78%</span>
													</div> -->
												</div>
												<!--end::Content-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Details-->
										<div class="separator separator-solid"></div>
										<!--begin::Items-->
										<div class="d-flex align-items-center flex-wrap mt-8">
											<!--begin::Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
												<span class="mr-4">
													<i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column text-dark-75">
													<span class="font-weight-bolder font-size-sm">Salary</span>
													<span class="font-weight-bolder font-size-h5">
													<span class="text-dark-50 font-weight-bold">Rs.</span>{{$employee -> employee_basic_salary}}</span>
												</div>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
												<span class="mr-4">
													<i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column text-dark-75">
													<span class="font-weight-bolder font-size-sm">Shift</span>
													<span class="font-weight-bolder font-size-h5">
													<span class="text-dark-50 font-weight-bold">{{$employee -> shift_name}}</span></span>
												</div>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
												<span class="mr-4">
													<i class="flaticon-pie-chart display-4 text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column text-dark-75">
													<span class="font-weight-bolder font-size-sm">Date of Joining</span>
													<span class="font-weight-bolder font-size-h5">
													<span class="text-dark-50 font-weight-bold">{{$employee -> employee_joining_date}}</span></span>
												</div>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
												<span class="mr-4">
													<i class="flaticon-file-2 display-4 text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column flex-lg-fill">
													<span class="text-dark-75 font-weight-bolder font-size-sm">Tasks</span>
													<a href="employeetask/{{$employee -> id}}" class="text-primary font-weight-bolder">View</a>
												</div>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<!-- <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
												<span class="mr-4">
													<i class="flaticon-chat-1 display-4 text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column">
													<span class="text-dark-75 font-weight-bolder font-size-sm">648 Comments</span>
													<a href="#" class="text-primary font-weight-bolder">View</a>
												</div>
											</div> -->
											<!--end::Item-->
											<!--begin::Item-->
											<!-- <div class="d-flex align-items-center flex-lg-fill mb-2 float-left">
												<span class="mr-4">
													<i class="flaticon-network display-4 text-muted font-weight-bold"></i>
												</span>
												<div class="symbol-group symbol-hover">
													<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">
														<img alt="Pic" src="{{asset('assets/media/users/300_25.jpg')}}" />
													</div>
													<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Charlie Stone">
														<img alt="Pic" src="{{asset('assets/media/users/300_19.jpg')}}" />
													</div>
													<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Luca Doncic">
														<img alt="Pic" src="{{asset('assets/media/users/300_22.jpg')}}" />
													</div>
													<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">
														<img alt="Pic" src="{{asset('assets/media/users/300_23.jpg')}}" />
													</div>
													<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Teresa Fox">
														<img alt="Pic" src="../../../../theme/html/demo4/dist/assets/media/users/300_18.jpg" />
													</div>
													<div class="symbol symbol-30 symbol-circle symbol-light">
														<span class="symbol-label font-weight-bold">5+</span>
													</div>
												</div>
											</div> -->
											<!--end::Item-->
										</div>
										<!--begin::Items-->
									</div>
								</div>
								<!--end::Card-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-lg-8">
										<!--begin::Advance Table Widget 2-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Tasks and Projects</span>
													<!-- <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span> -->
												</h3>
												<!-- <div class="card-toolbar">
													<ul class="nav nav-pills nav-pills-sm nav-dark-75">
														<li class="nav-item">
															<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_1">Month</a>
														</li>
														<li class="nav-item">
															<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_2">Week</a>
														</li>
														<li class="nav-item">
															<a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_11_3">Day</a>
														</li>
													</ul>
												</div> -->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables11">
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
														<!--begin::Table-->
														<div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
												<table class="datatable-table" style="display: block;">
													<thead class="datatable-head">
														<tr class="datatable-row" style="left: 0px;">
															<!-- <th data-field="RecordID" class="datatable-cell-center datatable-cell datatable-cell-check"><span style="width: 20px;"><label class="checkbox checkbox-single checkbox-all"><input type="checkbox">&nbsp;<span></span></label></span></th> -->
															<th data-field="Sno" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">S No.</span></th>
															<th data-field="TaskName" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">Task Name</span></th>
															<th data-field="Deadline" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">Deadline</span></th>
															<th data-field="CreatedBy" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">Created By</span></th>
															<th data-field="Des" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">Description</span></th>
															<th data-field="Status" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">Status</span></th>
															<th data-field="Actions" data-autohide-disabled="false" class="datatable-cell-left datatable-cell datatable-cell-sort"><span style="width: 170px;">Actions</span></th>
														</tr>
													</thead>
													<tbody class="datatable-body" style="">
													<?php
													$id = $employee -> id;
													$tasks = hr_task::where('task_status','!=','delete')->join('hr_task_emplyees','hr_tasks.id','=','hr_task_emplyees.task_id')
													->where('hr_task_emplyees.emplyee_id','=',$id)
													->get(['hr_tasks.*','hr_task_emplyees.emplyee_id']);
													
													$a = 1; ?>
													@foreach($tasks as $task)
														<tr data-row="0" class="datatable-row" style="left: 0px;">
															<!-- <td class="datatable-cell-center datatable-cell datatable-cell-check" data-field="RecordID" aria-label="1"><span style="width: 20px;"><label class="checkbox checkbox-single"><input type="checkbox" value="1">&nbsp;<span></span></label></span></td> -->
															<td data-field="Sno" aria-label="64616-103" class="datatable-cell"><span style="width: 100px;">{{$a++}}</span></td>
															<td data-field="Name" aria-label="Flooring" class="datatable-cell"><span style="width: 100px;">{{$task -> task_title}}</span></td>
															<td data-field="Deadline" aria-label="06/2/2024" class="datatable-cell"><span style="width: 100px;">{{$task -> deadline}}</span></td>
															<td data-field="CreatedBy" aria-label="AmanRajvanshi" class="datatable-cell"><span style="width: 100px;">
															<?php 
																$pid = $task -> created_by;
																$pdata = DB::SELECT("SELECT * FROM users WHERE id = $pid"); 
																foreach ($pdata as  $pval) {
																}
																echo $pval -> user_email;
															?>
															</span></td>
															<td data-field="CreatedBy" aria-label="#######" class="datatable-cell"><span style="width: 100px;">{!!$task -> task_discription!!}</span></td>
															<td data-field="Status" aria-label="5" class="datatable-cell"><span style="width: 100px;"><input type="button" id="button" value="{{$task -> task_status}}" style="color:white" onclick="setColor(event, 'button', '#101010')"; data-count="1" /></span></td>
															<td class="datatable-cell-left datatable-cell" data-field="Actions" data-autohide-disabled="false" aria-label="null">
																<span style="overflow: visible; position: relative; width: 170px;">
																	<a href="viewtasks/{{$task -> id}}" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" title="Edit details">
																		<span class="svg-icon svg-icon-md">
																		<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path></svg>
																		</span>
																	</a>
																</span>
															</td>
														</tr>
													@endforeach
													</tbody>
												</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 2-->
									</div>
									<div class="col-lg-4">
										<!--begin::Mixed Widget 14-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title font-weight-bolder">Allowances</h3>
												<div class="card-toolbar">
													<!--begin: Datatable-->
													<div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
														<table class="datatable-table" style="display: block;">
															<thead class="datatable-head">
																<tr class="datatable-row" style="left: 0px;">
																	<!-- <th data-field="RecordID" class="datatable-cell-center datatable-cell datatable-cell-check"><span style="width: 20px;"><label class="checkbox checkbox-single checkbox-all"><input type="checkbox">&nbsp;<span></span></label></span></th> -->
																	<!-- <th data-field="Sno" class="datatable-cell datatable-cell-sort"><span style="width: 120px;">S No.</span></th> -->
																	<th data-field="Name" class="datatable-cell datatable-cell-sort"><span style="width: 120px;">Name</span></th>
																	<!-- <th data-field="Description" class="datatable-cell datatable-cell-sort"><span style="width: 120px;">Description</span></th> -->
																	<th data-field="Amount" class="datatable-cell datatable-cell-sort"><span style="width: 120px;">Amount</span></th>
																	<!-- <th data-field="Status" class="datatable-cell datatable-cell-sort"><span style="width: 120px;">Status</span></th> -->
																	<!-- <th data-field="Actions" data-autohide-disabled="false" class="datatable-cell-left datatable-cell datatable-cell-sort"><span style="width: 125px;">Actions</span></th> -->
																</tr>
															</thead>
															<tbody class="datatable-body" style="">
															<?php
															$ids = $employee -> id;
															$data = hr_allowence::where('allowence_status','!=','delete')->join('hr_employee_allowences','hr_allowences.id','=','hr_employee_allowences.allowence_id')
															->where('hr_employee_allowences.employee_id','=',$ids)
															->get(['hr_allowences.*','hr_employee_allowences.employee_id']);
															$a = 1; ?>
															@foreach($data as $value)
																<tr data-row="0" class="datatable-row datatable-row-even" style="left: 0px;">
																	<!-- <td class="datatable-cell-center datatable-cell datatable-cell-check" data-field="RecordID" aria-label="1"><span style="width: 20px;"><label class="checkbox checkbox-single"><input type="checkbox" value="1">&nbsp;<span></span></label></span></td> -->
																	<!-- <td data-field="Sno" aria-label="64616-103" class="datatable-cell"><span style="width: 120px;"></span></td> -->
																	<td data-field="Name" aria-label="Petrol" class="datatable-cell"><span style="width: 120px;">{{$value -> allowence_name}}</span></td>
																	<!-- <td data-field="Description" aria-label="abcdxyz" class="datatable-cell"><span style="width: 120px;">{{$value -> allowence_description}}</span></td> -->
																	<td data-field="Amount" aria-label="987" class="datatable-cell"><span style="width: 120px;">{{$value -> allowence_amount}}</span></td>
																	<!-- <td data-field="Status" aria-label="5" class="datatable-cell"><span style="width: 120px;"> -->
																	<!-- @if($value -> allowence_status == 'Active')
                                                                    <button class="btn btn-success statuschange" id="{{$value -> id}}" href="">{{$value -> allowence_status}}</button>
                                                                    @elseif($value -> allowence_status == 'Inactive')
                                                                    <button class="btn btn-danger statuschange" id="{{$value -> id}}" href="">{{$value -> allowence_status}}</button>
                                                                    @endif
																	</span></td> -->
																	<!-- <td class="datatable-cell-left datatable-cell" data-field="Actions" data-autohide-disabled="false" aria-label="null">
																		<span style="overflow: visible; position: relative; width: 125px;">
																		<a href="edithrallowances/{{$value -> id}}" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
																			<span class="svg-icon svg-icon-md">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
																						<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
																					</g>
																				</svg>
																			</span>
																		</a>
																		<a href="deletehrallowances/{{$value -> id}}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-clean btn-icon" title="Delete">
																			<span class="svg-icon svg-icon-md">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																			</span>
																		</a>
																		</span>
																	</td> -->
																</tr>
																@endforeach
															</tbody>
														</table>
														
													</div>
													<!--end: Datatable-->
												</div>
											</div>
											<!--end::Header-->
											
										</div>
										<!--end::Mixed Widget 14-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<!-- <div class="row"> -->
									<!-- <div class="col-lg-6"> -->
										<!--begin::Charts Widget 4-->
										<!-- <div class="card card-custom card-stretch gutter-b"> -->
											<!--begin::Header-->
											<!-- <div class="card-header h-auto border-0">
												<div class="card-title py-5">
													<h3 class="card-label">
														<span class="d-block text-dark font-weight-bolder">Recent Orders</span>
														<span class="d-block text-muted mt-2 font-size-sm">More than 500+ new orders</span>
													</h3>
												</div>
												<div class="card-toolbar">
													<ul class="nav nav-pills nav-pills-sm nav-dark-75" role="tablist">
														<li class="nav-item">
															<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_charts_widget_2_chart_tab_1">
																<span class="nav-text font-size-sm">Month</span>
															</a>
														</li>
														<li class="nav-item">
															<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_charts_widget_2_chart_tab_2">
																<span class="nav-text font-size-sm">Week</span>
															</a>
														</li>
														<li class="nav-item">
															<a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_charts_widget_2_chart_tab_3">
																<span class="nav-text font-size-sm">Day</span>
															</a>
														</li>
													</ul>
												</div>
											</div> -->
											<!--end::Header-->
											<!--begin::Body-->
											<!-- <div class="card-body">
												<div id="kt_charts_widget_4_chart"></div>
											</div> -->
											<!--end::Body-->
										<!-- </div> -->
										<!--end::Charts Widget 4-->
									<!-- </div>
									<div class="col-lg-6"> -->
										<!--begin::List Widget 11-->
										<!-- <div class="card card-custom card-stretch gutter-b"> -->
											<!--begin::Header-->
											<!-- <div class="card-header border-0">
												<h3 class="card-title font-weight-bolder text-dark">Trends</h3>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-ver"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right"> -->
															<!--begin::Navigation-->
															<!-- <ul class="navi navi-hover py-5">
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-drop"></i>
																		</span>
																		<span class="navi-text">New Group</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-list-3"></i>
																		</span>
																		<span class="navi-text">Contacts</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
																		<span class="navi-text">Groups</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
																		<span class="navi-text">Calls</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-gear"></i>
																		</span>
																		<span class="navi-text">Settings</span>
																	</a>
																</li>
																<li class="navi-separator my-3"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-magnifier-tool"></i>
																		</span>
																		<span class="navi-text">Help</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
																		<span class="navi-text">Privacy</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
																	</a>
																</li>
															</ul> -->
															<!--end::Navigation-->
														<!-- </div>
													</div>
												</div>
											</div> -->
											<!--end::Header-->
											<!--begin::Body-->
											<!-- <div class="card-body pt-0"> -->
												<!--begin::Item-->
												<!-- <div class="d-flex align-items-center mb-9 bg-light-warning rounded p-5"> -->
													<!--begin::Icon-->
													<!-- <span class="svg-icon svg-icon-warning mr-5">
														<span class="svg-icon svg-icon-lg"> -->
															<!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Home/Library.svg-->
															<!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																	<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																</g>
															</svg> -->
															<!--end::Svg Icon-->
														<!-- </span>
													</span> -->
													<!--end::Icon-->
													<!--begin::Title-->
													<!-- <div class="d-flex flex-column flex-grow-1 mr-2">
														<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Group lunch celebration</a>
														<span class="text-muted font-weight-bold">Due in 2 Days</span>
													</div> -->
													<!--end::Title-->
													<!--begin::Lable-->
													<!-- <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span> -->
													<!--end::Lable-->
												<!-- </div> -->
												<!--end::Item-->
												<!--begin::Item-->
												<!-- <div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
													begin::Icon
													<span class="svg-icon svg-icon-success mr-5">
														<span class="svg-icon svg-icon-lg">
															begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Communication/Write.svg
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																	<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																</g>
															</svg>
															end::Svg Icon
														</span>
													</span> -->
													<!--end::Icon-->
													<!--begin::Title-->
													<!-- <div class="d-flex flex-column flex-grow-1 mr-2">
														<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Home navigation optimization</a>
														<span class="text-muted font-weight-bold">Due in 2 Days</span>
													</div> -->
													<!--end::Title-->
													<!--begin::Lable-->
													<!-- <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span> -->
													<!--end::Lable-->
												<!-- </div> -->
												<!--end::Item-->
												<!--begin::Item-->
												<!-- <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-9"> -->
													<!--begin::Icon-->
													<!-- <span class="svg-icon svg-icon-danger mr-5">
														<span class="svg-icon svg-icon-lg"> -->
															<!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
															<!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
																	<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg> -->
															<!--end::Svg Icon-->
														<!-- </span>
													</span> -->
													<!--end::Icon-->
													<!--begin::Title-->
													<!-- <div class="d-flex flex-column flex-grow-1 mr-2">
														<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Rebrand strategy planning</a>
														<span class="text-muted font-weight-bold">Due in 2 Days</span>
													</div> -->
													<!--end::Title-->
													<!--begin::Lable-->
													<!-- <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span> -->
													<!--end::Lable-->
												<!-- </div> -->
												<!--end::Item-->
												<!--begin::Item-->
												<!-- <div class="d-flex align-items-center bg-light-info rounded p-5"> -->
													<!--begin::Icon-->
													<!-- <span class="svg-icon svg-icon-info mr-5">
														<span class="svg-icon svg-icon-lg"> -->
															<!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/General/Attachment2.svg-->
															<!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
																	<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
																	<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
																	<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
																</g>
															</svg> -->
															<!--end::Svg Icon-->
														<!-- </span>
													</span> -->
													<!--end::Icon-->
													<!--begin::Title-->
													<!-- <div class="d-flex flex-column flex-grow-1 mr-2">
														<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Product goals strategy meet-up</a>
														<span class="text-muted font-weight-bold">Due in 2 Days</span>
													</div> -->
													<!--end::Title-->
													<!--begin::Lable-->
													<!-- <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span> -->
													<!--end::Lable-->
												<!-- </div> -->
												<!--end::Item-->
											<!-- </div> -->
											<!--end::Body-->
										<!-- </div> -->
										<!--end::List Widget 11-->
									<!-- </div> -->
								<!-- </div> -->
								<!--end::Row-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
				<!--begin::Footer-->
				@include('admin/footer')
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Main-->
	@include('admin/usersidebar')
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop">
		<span class="svg-icon">
			<!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Navigation/Up-2.svg-->
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
				viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon points="0 0 24 0 24 24 0 24" />
					<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
					<path
						d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
						fill="#000000" fill-rule="nonzero" />
				</g>
			</svg>
			<!--end::Svg Icon-->
		</span>
	</div>
	<!--end::Scrolltop-->
	<script>
		var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
	</script>
	<!--begin::Global Config(global config for global JS scripts)-->
	<script>
		var KTAppSettings = {
			"breakpoints": {
				"sm": 576,
				"md": 768,
				"lg": 992,
				"xl": 1200,
				"xxl": 1200
			},
			"colors": {
				"theme": {
					"base": {
						"white": "#ffffff",
						"primary": "#8950FC",
						"secondary": "#E5EAEE",
						"success": "#1BC5BD",
						"info": "#8950FC",
						"warning": "#FFA800",
						"danger": "#F64E60",
						"light": "#F3F6F9",
						"dark": "#212121"
					},
					"light": {
						"white": "#ffffff",
						"primary": "#E1E9FF",
						"secondary": "#ECF0F3",
						"success": "#C9F7F5",
						"info": "#EEE5FF",
						"warning": "#FFF4DE",
						"danger": "#FFE2E5",
						"light": "#F3F6F9",
						"dark": "#D6D6E0"
					},
					"inverse": {
						"white": "#ffffff",
						"primary": "#ffffff",
						"secondary": "#212121",
						"success": "#ffffff",
						"info": "#ffffff",
						"warning": "#ffffff",
						"danger": "#ffffff",
						"light": "#464E5F",
						"dark": "#ffffff"
					}
				},
				"gray": {
					"gray-100": "#F3F6F9",
					"gray-200": "#ECF0F3",
					"gray-300": "#E5EAEE",
					"gray-400": "#D6D6E0",
					"gray-500": "#B5B5C3",
					"gray-600": "#80808F",
					"gray-700": "#464E5F",
					"gray-800": "#1B283F",
					"gray-900": "#212121"
				}
			},
			"font-family": "Poppins"
		};
	</script>
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
    <script src="/../theme/html/demo4/dist/assets/plugins/global/plugins.bundle49d8.js?v=7.2.8"></script>
    <script src="/../theme/html/demo4/dist/assets/plugins/custom/prismjs/prismjs.bundle49d8.js?v=7.2.8"></script>
    <script src="/../theme/html/demo4/dist/assets/js/scripts.bundle49d8.js?v=7.2.8"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="/../theme/html/demo4/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle49d8.js?v=7.2.8"></script>
    <script src="/../theme/html/demo4/dist/assets/plugins/custom/leaflet/leaflet.bundle49d8.js?v=7.2.8"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="/../theme/html/demo4/dist/assets/js/pages/widgets49d8.js?v=7.2.8"></script>
	<!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>