<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="utf-8" />
	<title>ERP</title>
    <base href="../">
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
	<style>
		.btn:hover {
  background-color: #8950fc;
}

.btn:active, .btn:visited {
  background-color: #8950fc;
}

.active {
  background: #8950fc; 
}
	</style>
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
						<div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Details-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Title-->
									
									<!--end::Title-->
									<!--begin::Separator-->
									<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
									<!--end::Separator-->
									<!--begin::Search Form-->
									<div class="d-flex align-items-center" id="kt_subheader_search">
										<!-- <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Enter employee's details and submit</span> -->
									</div>
									<!--end::Search Form-->
								</div>
								<!--end::Details-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--begin::Button-->
									<!-- <a href="shifts.php" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a> -->
									<!--end::Button-->
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							<div class="row justify-content-center" id="msg"></div>
								<!--begin::Card-->
								<div class="card card-custom card-transparent">
									<div class="card-body p-0">
										<!--begin::Wizard-->
										<div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
											<!--begin::Card-->
											<div class="card card-custom card-shadowless rounded-top-0">
												<!--begin::Body-->
												<div class="card-body p-0">
													<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
													<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Edit Shifts</h5>
														<div class="col-xl-12 col-xxl-10">
														<div class="row" style="display:grid; justify-content:end;">
															<a href="shifts" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a>
														</div>
															<!--begin::Wizard Form-->
															<form class="form" id="form">
															{{@csrf_field()}}
																<div class="row justify-content-center">
																	<div class="col-xl-9">
																		<!--begin::Wizard Step 1-->
																		<div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
																			<!-- <h5 class="text-dark font-weight-bold mb-10">Shift Details</h5> -->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Shift Name</label>
																				<div class="col-lg-9 col-xl-9">
																				<input type="hidden" name="pid" value="{{$data -> id}}">
																					<input class="form-control form-control-solid form-control-lg" name="shiftname" type="text" value="{{$data -> shift_name}}" />
																					<span class="field_error text-danger" id="shiftname_error"></span>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!-- begin::Group -->
																			<div class="form-group row" data-select2-id="243">
																				<label class="col-form-label text-left col-lg-3 col-sm-12">Shift Status</label>
																				<div class="col-lg-9 col-md-9 col-sm-12" data-select2-id="242">
																				<select class="form-control" id="kt_select2_1" name="status">
																					    <option value="">Select</option>
																						@if($data -> shift_status == 'Active')
																						<option value="{{$data -> shift_status}}" selected>{{$data -> shift_status}}</option>
																						<option value="Inactive">Inactive</option>
																						@else
																						<option value="Active">Active</option>
																						<option value="{{$data -> shift_status}}" selected>{{$data -> shift_status}}</option>
																						@endif
																				</select>
																					<span class="field_error text-danger" id="status_error"></span>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																		</div>
																		<div class="row">
																			<div class="col-md-3"></div>
																			<div class="col-md-1 col-3" style="padding:10px 20px"><button type="button" class="btn btn-primary day" id="sun">Sun</button></div>
																			<div class="col-md-1 col-3" style="padding:10px 20px"><button type="button" class="btn btn-primary day" id="mon">Mon</button></div>
																			<div class="col-md-1 col-3" style="padding:10px 20px"><button type="button" class="btn btn-primary day" id="tue">Tue</button></div>
																			<div class="col-md-1 col-3" style="padding:10px 20px"><button type="button" class="btn btn-primary day" id="wed">Wed</button></div>
																			<div class="col-md-1 col-3" style="padding:10px 20px"><button type="button" class="btn btn-primary day" id="thu">Thu</button></div>
																			<div class="col-md-1 col-3" style="padding:10px 20px"><button type="button" class="btn btn-primary day" id="fri">Fri</button></div>
																			<div class="col-md-1 col-3" style="padding:10px 20px"><button type="button" class="btn btn-primary day" id="sat">Sat</button></div>
																			<div class="col-md-2"></div>
																		</div>
																		<div id="oculto">
																			<div id="sunDiv" data-id="d-none" class="box-info d-none">
																				<div class="row" style="padding:20px;">
																					<p><b>Time Slots</b> : Sunday</p>
																				</div>
																				<div class="row">
																					<div class="col-md-2 col-6">
																						<p>From:</p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg sun" name="sunfrom" type="time" value="" />
																					</div>
																					<div class="col-md-2 col-6">
																						<p>To: </p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg sun" name="sunto" type="time" value="" />
																					</div>
																				</div>
																			</div>
																			@if($data -> mon_in && $data -> mon_out)
																			<div id="monDiv"  class="box-info">
																				<div class="row" style="padding:20px;">
																					<p><b>Time Slots</b> : Monday</p>
																				</div>
																				<div class="row">
																					<div class="col-md-2 col-6">
																						<p>From:</p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg" name="monfrom" type="time" value="{{$data -> mon_in}}" />
																					</div>
																					<div class="col-md-2 col-6">
																						<p>To: </p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg" name="monto" type="time" value="{{$data -> mon_out}}" />
																					</div>
																				</div>
																			</div>
																			@else
																			<div id="monDiv" data-id="d-none" class="box-info d-none">
																				<div class="row" style="padding:20px;">
																					<p><b>Time Slots</b> : Monday</p>
																				</div>
																				<div class="row">
																					<div class="col-md-2 col-6">
																						<p>From:</p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg" id="monfrom" name="monfrom" type="time" value="" />
																					</div>
																					<div class="col-md-2 col-6">
																						<p>To: </p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg" id="monto"  name="monto" type="time" value="" />
																					</div>
																				</div>
																			</div>
																			@endif
																			@if($data -> tue_in && $data -> tue_out)
																			<div id="tueDiv" class="box-info">
																				<div class="row" style="padding:20px;">
																					<p><b>Time Slots</b> : Tuesday</p>
																				</div>
																				<div class="row">
																					<div class="col-md-2 col-6">
																						<p>From:</p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg" name="tuefrom" type="time" value="{{$data -> tue_in}}" />
																					</div>
																					<div class="col-md-2 col-6">
																						<p>To: </p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg" name="tueto" type="time" value="{{$data -> tue_out}}" />
																					</div>
																				</div>
																			</div>
																			@else
																			<div id="tueDiv" data-id="d-none" class="box-info d-none">
																				<div class="row" style="padding:20px;">
																					<p><b>Time Slots</b> : Tuesday</p>
																				</div>
																				<div class="row">
																					<div class="col-md-2 col-6">
																						<p>From:</p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg tue" name="tuefrom" type="time" value="" />
																					</div>
																					<div class="col-md-2 col-6">
																						<p>To: </p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg tue" name="tueto" type="time" value="" />
																					</div>
																				</div>
																			</div>
																			@endif
																			@if($data -> wed_in && $data -> wed_out)
																			<div id="wedDiv" class="box-info">
																				<div class="row" style="padding:20px;">
																					<p><b>Time Slots</b> : Wednesday</p>
																				</div>
																				<div class="row">
																					<div class="col-md-2 col-6">
																						<p>From:</p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg" name="wedfrom" type="time" value="{{$data -> wed_in}}" />
																					</div>
																					<div class="col-md-2 col-6">
																						<p>To: </p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg" name="wedto" type="time" value="{{$data -> wed_out}}" />
																					</div>
																				</div>
																			</div>
																			@else
																			<div id="wedDiv" data-id="d-none" class="box-info d-none">
																				<div class="row" style="padding:20px;">
																					<p><b>Time Slots</b> : Wednesday</p>
																				</div>
																				<div class="row">
																					<div class="col-md-2 col-6">
																						<p>From:</p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg wed" name="wedfrom" type="time" value="" />
																					</div>
																					<div class="col-md-2 col-6">
																						<p>To: </p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg wed" name="wedto" type="time" value="" />
																					</div>
																				</div>
																			</div>
																			@endif
																			@if($data -> thu_in && $data -> thu_out)
																			<div id="thuDiv" class="box-info">
																				<div class="row" style="padding:20px;">
																					<p><b>Time Slots</b> : Thursday</p>
																				</div>
																				<div class="row">
																					<div class="col-md-2 col-6">
																						<p>From:</p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg" name="thufrom" type="time" value="{{$data -> thu_in}}" />
																					</div>
																					<div class="col-md-2 col-6">
																						<p>To: </p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg" name="thuto" type="time" value="{{$data -> thu_out}}" />
																					</div>
																				</div>
																			</div>
																			@else
																			<div id="thuDiv" data-id="d-none" class="box-info d-none">
																				<div class="row" style="padding:20px;">
																					<p><b>Time Slots</b> : Thursday</p>
																				</div>
																				<div class="row">
																					<div class="col-md-2 col-6">
																						<p>From:</p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg thu" name="thufrom" type="time" />
																					</div>
																					<div class="col-md-2 col-6">
																						<p>To: </p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg thu" name="thuto" type="time" />
																					</div>
																				</div>
																			</div>
																			@endif
																			@if($data -> fri_in && $data -> fri_out)
																			<div id="friDiv" class="box-info">
																				<div class="row" style="padding:20px;">
																					<p><b>Time Slots</b> : Friday</p>
																				</div>
																				<div class="row">
																					<div class="col-md-2 col-6">
																						<p>From:</p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg" name="frifrom" type="time" value="{{$data -> fri_in}}" />
																					</div>
																					<div class="col-md-2 col-6">
																						<p>To: </p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg" name="frito" type="time" value="{{$data -> fri_out}}" />
																					</div>
																				</div>
																			</div>
																			@else
																			<div id="friDiv" data-id="d-none" class="box-info d-none">
																				<div class="row" style="padding:20px;">
																					<p><b>Time Slots</b> : Friday</p>
																				</div>
																				<div class="row">
																					<div class="col-md-2 col-6">
																						<p>From:</p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg fri" name="frifrom" type="time" value="" />
																					</div>
																					<div class="col-md-2 col-6">
																						<p>To: </p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg fri" name="frito" type="time" value="" />
																					</div>
																				</div>
																			</div>
																			@endif
																			@if($data -> sat_in && $data -> sat_out)
																			<div id="satDiv" class="box-info">
																				<div class="row" style="padding:20px;">
																					<p><b>Time Slots</b> : Saturday</p>
																				</div>
																				<div class="row">
																					<div class="col-md-2 col-6">
																						<p>From:</p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg" name="satfrom" type="time" value="{{$data -> sat_in}}" />
																					</div>
																					<div class="col-md-2 col-6">
																						<p>To: </p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg" name="satto" type="time" value="{{$data -> sat_out}}" />
																					</div>
																				</div>
																			</div>
																			@else
																			<div id="satDiv" data-id="d-none" class="box-info d-none">
																				<div class="row" style="padding:20px;">
																					<p><b>Time Slots</b> : Saturday</p>
																				</div>
																				<div class="row">
																					<div class="col-md-2 col-6">
																						<p>From:</p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg sat" name="satfrom" type="time" value="" />
																					</div>
																					<div class="col-md-2 col-6">
																						<p>To: </p>
																					</div>
																					<div class="col-md-4 col-6">
																						<input class="form-control form-control-solid form-control-lg sat" name="satto" type="time" value="" />
																					</div>
																				</div>
																			</div>
																			@endif
																	</div>
																		<!--begin::Wizard Actions-->
																		<div class="d-flex justify-content-between border-top pt-10 mt-15">
																			<div class="mr-2">
																				<button type="button" id="prev-step" class="btn btn-light-primary font-weight-bolder px-9 py-4" data-wizard-type="action-prev">Previous</button>
																			</div>
																			<div>
																				<button type="button" class="btn btn-success font-weight-bolder px-9 py-4" data-wizard-type="action-submit">Submit</button>
																			<!--begin::Dropdown-->
																			<div class="btn-group ml-2">
																				<button type="submit" class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base">Update</button>
																			</div>
																			<!--end::Dropdown-->
																			</div>
																		</div>
																		<!--end::Wizard Actions-->
																	</div>
																</div>
															</form>
															<!--end::Wizard Form-->
														</div>
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card-->
										</div>
										<!--end::Wizard-->
									</div>
								</div>
								<!--end::Card-->
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script>
	   $(document).ready(function(){
		  $('#sun').click(function(){
             $('#sunDiv').removeClass('d-none').toggle();
			 var a = $("#sunDiv").attr('data-id');
			 if(a == 'd-none'){
				 $('#sun').val('');
			 }
		  });
		  $('#mon').click(function(){
             $('#monDiv').removeClass('d-none').toggle();
			 var a = $("#monDiv").attr('data-id');
			 if(a == 'd-none'){
				 $('#monfrom').val('');
				 $('#monto').val('');
			 }
		  });
		  $('#tue').click(function(){
             $('#tueDiv').removeClass('d-none').toggle();
			 var a = $("#tueDiv").attr('data-id');
			 if(a == 'd-none'){
				 $('#tue').val('');
			 }
		  });
		  $('#wed').click(function(){
             $('#wedDiv').removeClass('d-none').toggle();
			 var a = $("#wedDiv").attr('data-id');
			 if(a == 'd-none'){
				 $('#wed').val('');
			 }
		  });
		  $('#thu').click(function(){
             $('#thuDiv').removeClass('d-none').toggle();
			 var a = $("#thuDiv").attr('data-id');
			 if(a == 'd-none'){
				 $('#thu').val('');
			 }
		  });
		  $('#fri').click(function(){
             $('#friDiv').removeClass('d-none').toggle();
			 var a = $("#friDiv").attr('data-id');
			 if(a == 'd-none'){
				 $('#fri').val('');
			 }
		  });
		  $('#sat').click(function(){
             $('#satDiv').removeClass('d-none').toggle();
			 var a = $("#satDiv").attr('data-id');
			 if(a == 'd-none'){
				 $('#sat').val('');
			 }
		  });
          $('#form').submit(function(e){
			  e.preventDefault();
			  $.ajax({
				  url : 'editshift',
				  method : 'POST',
				  data : $('#form').serialize(),
				  dataType : 'JSON',
                  success : function(result){
					if (result.status == 'error') {
						$('#msg').html("<div class='col-md-4 alert alert-danger alert-block'><strong>"+result.error+"</strong></div>");
						$.each(result.error,function(key,val){
						// console.log(key);
						// console.log(val);
						$('#'+key+'_error').html(val[0]);
						})
					}else if(result.status == 'success'){
						$('#form')[0].reset();
						$('#msg').html("<div class='col-md-4 alert alert-success alert-block'><strong>"+result.msg+"</strong></div>");
						setTimeout(function(){
						window.location.href = '../HR/shifts'; 
						}, 1000);
					}
				  },
				  complete:function(){
						$('body, html').animate({scrollTop:$('form').offset().top}, 'slow');
				  }
			  });
		  });
	   });
	</script>
<script>
function muestra_oculta(id){
  if (document.getElementById){
    var el = document.getElementById(id);
    el.style.display = (el.style.display == 'none') ? 'block' : 'none'; 
  }
}
window.onload = function(){
  muestra_oculta('contenido_a_mostrar1');
  muestra_oculta('contenido_a_mostrar2');
  muestra_oculta('contenido_a_mostrar3');
  muestra_oculta('contenido_a_mostrar4');
  muestra_oculta('contenido_a_mostrar5');
  muestra_oculta('contenido_a_mostrar6');
  muestra_oculta('contenido_a_mostrar7');
}
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
