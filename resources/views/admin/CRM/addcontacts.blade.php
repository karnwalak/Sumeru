<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
<meta charset="utf-8" />
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
			<img alt="Logo" src="/../img/logoicon.png"
				class="logo-default max-h-30px" />
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
						<img alt="Logo" src="/../img/logoicon.png"
							class="logo-default max-h-30px" />
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
				@include('admin/CRM/header')
				<!-- add header end -->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Details-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">New Contact</h5>
									<!--end::Title-->
									<!--begin::Separator-->
									<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
									<!--end::Separator-->
									<!--begin::Search Form-->
									<!-- <div class="d-flex align-items-center" id="kt_subheader_search">
										<span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Enter contact details and submit</span>
									</div> -->
									<!--end::Search Form-->
								</div>
								<!--end::Details-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--begin::Button-->
									<!-- <a href="contacts.php" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a> -->
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
														<div class="col-xl-12 col-xxl-10">															
															<div class="row" style="display:grid; justify-content:end;">
																<a href="contacts" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a>
															</div>
															<!--begin::Wizard Form-->
															<form class="form" id="kt_form">
																<div class="row justify-content-center">
																	<div class="col-xl-11">
																		<!--begin::Wizard Step 1-->
																		<div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
																			<h5 class="text-dark font-weight-bold mb-10">1. Applicant</h5>
																			<!--begin::Group-->
																			<div class="form-group row">
																				<div class="col-xl-10 col-md-10 col-sm-12">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Full Name</label>
																						<div class="col-lg-9 col-xl-9">
																							<input class="form-control form-control-solid form-control-lg" name="firstname" type="text" value="" required/>
																						</div>
																					</div>
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Father's/Husband Name</label>
																						<div class="col-lg-9 col-xl-9">
																							<input class="form-control form-control-solid form-control-lg" name="firstname" type="text" value="" required/>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-2 col-md-2 col-sm-12">
																					<div class="col-lg-9 col-xl-9">
																						<div class="image-input image-input-outline" id="kt_user_add_avatar">
																							<div class="image-input-wrapper" style="background-image: url(theme/html/demo4/dist/assets/media/users/100_6.jpg)"></div>
																							<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
																								<i class="fa fa-pen icon-sm text-muted"></i>
																								<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
																								<input type="hidden" name="profile_avatar_remove" />
																							</label>
																							<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
																								<i class="ki ki-bold-close icon-xs text-muted"></i>
																							</span>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<div class="col-xl-6">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Date Of Birth</label>
																						<div class="col-lg-9 col-xl-9">
																							<div class="input-group  input-group-lg">
																								<input type="date" class="form-control form-control-solid form-control-lg" name="dob" placeholder="Username" value="Rs." />
																								<div class="input-group-append">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-6">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Gender</label>
																						<div class="col-lg-9 col-xl-9">
																							<div class="input-group  input-group-lg">
																								<form action="">
																									<input type="radio" name="gender" value="male" style="margin:20px"> Male
																									<input type="radio" name="gender" value="female" style="margin:20px"> Female
																									<input type="radio" name="gender" value="other" style="margin:20px"> Other
																								</form>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<div class="col-xl-6">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Pan Number</label>
																						<div class="col-lg-9 col-xl-9">
																							<input class="form-control form-control-solid form-control-lg" name="pan" type="text" value="" required style="text-transform: uppercase;"/>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-6">
																					<div class="form-group row" data-select2-id="243">
																						<label class="col-form-label text-left col-lg-4 col-sm-12">Occupation</label>
																						<div class="col-lg-8 col-md-8 col-sm-12" data-select2-id="242">
																							<select class="form-control" id="kt_select2_1" name="param">
																								<option value="AK">Alaska</option>
																								<option value="HI">Hawaii</option>
																								<option value="CA">California</option>
																								<option value="NV">Nevada</option>
																								<option value="OR">Oregon</option>
																								<option value="WA">Washington</option>
																								<option value="AZ">Arizona</option>
																								<option value="CO">Colorado</option>
																								<option value="ID">Idaho</option>
																								<option value="MT">Montana</option>
																								<option value="NE">Nebraska</option>
																								<option value="NM">New Mexico</option>
																							</select>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Address(Correspondance)</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" id="address" name="address" type="text" value="" required/>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<div class="col-xl-4">
																					<div class="form-group row" data-select2-id="243">
																						<label class="col-form-label text-left col-lg-4 col-sm-12">State</label>
																						<div class="col-lg-8 col-md-8 col-sm-12" data-select2-id="242">
																							<select class="form-control" id="state" name="state">
																								<option value="">Select</option>
																								<option value="Delhi">Delhi</option>
																								<option value="Uttarakhand">Uttarakhand</option>
																								<option value="Uttar Pradesh">Uttar Pradesh</option>
																								<option value="Haryana">Haryana</option>
																							</select>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-4">
																					<div class="form-group row" data-select2-id="243">
																						<label class="col-form-label text-left col-lg-4 col-sm-12">City</label>
																						<div class="col-lg-8 col-md-8 col-sm-12" data-select2-id="242">
																							<select class="form-control" id="district" name="district">
																								<option value="">Select</option>
																								<option value="Saharanpur">Saharanpur</option>
																								<option value="Meerut">Meerut</option>
																								<option value="Dehradun">Dehradun</option>
																							</select>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-4">
																					<div class="form-group row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Pin Code</label>
																						<div class="col-lg-8 col-xl-8">
																							<input class="form-control form-control-solid form-control-lg" name="pincode" id="pincode" type="text" value="" required/>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row" style="display:grid;place-items:center;">
																				<div class="checkbox-list">
																					<label class="checkbox">
																							<input type="checkbox" id="checkbox" name="Checkbox"/>
																							<span></span>
																							Permanent Address Same as Correspondance Address	
																					</label>
																				</div> 
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Address(Permanent)</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" name="addressc" id="addressc" type="text" value="" required/>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<div class="col-xl-4">
																					<div class="form-group row" data-select2-id="243">
																						<label class="col-form-label text-left col-lg-4 col-sm-12">State</label>
																						<div class="col-lg-8 col-md-8 col-sm-12" data-select2-id="242">
																						    <select class="form-control" id="statec" name="statec">
																								<option value="">Select</option>
																								<option value="Delhi">Delhi</option>
																								<option value="Uttarakhand">Uttarakhand</option>
																								<option value="Uttar Pradesh">Uttar Pradesh</option>
																								<option value="Haryana">Haryana</option>
																							</select>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-4">
																					<div class="form-group row" data-select2-id="243">
																						<label class="col-form-label text-left col-lg-4 col-sm-12">City</label>
																						<div class="col-lg-8 col-md-8 col-sm-12" data-select2-id="242">
																						    <select class="form-control" id="districtc" name="districtc">
																								<option value="">Select</option>
																								<option value="Saharanpur">Saharanpur</option>
																								<option value="Meerut">Meerut</option>
																								<option value="Dehradun">Dehradun</option>
																							</select>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-4">
																					<div class="form-group row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Pin Code</label>
																						<div class="col-lg-8 col-xl-8">
																							<input class="form-control form-control-solid form-control-lg" name="pincodec" id="pincodec" type="text" value="" required/>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<h5 class="text-dark font-weight-bold mb-10">Contact Details</h5>
																			<!--begin::Group-->
																			<div class="form-group row">
																				<div class="col-xl-6">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Mobile</label>
																						<div class="col-lg-9 col-xl-9">
																							<div class="input-group  input-group-lg">
																								<div class="input-group-prepend">
																									<span class="input-group-text">
																										<i class="la la-phone"></i>
																									</span>
																								</div>
																								<input type="number" class="form-control form-control-solid form-control-lg" name="mobile"  placeholder="Phone" />
																							</div>
																							<span class="form-text text-muted">Enter valid Indian phone number(e.g: 9876-543-210).</span>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-6">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Office</label>
																						<div class="col-lg-9 col-xl-9">
																							<div class="input-group  input-group-lg">
																								<div class="input-group-prepend">
																									<span class="input-group-text">
																										<i class="la la-phone"></i>
																									</span>
																								</div>
																								<input type="number" class="form-control form-control-solid form-control-lg" name="officephone"  placeholder="Phone" />
																							</div>
																							<span class="form-text text-muted">Enter valid Indian phone number(e.g: 9876-543-210).</span>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<div class="col-xl-6">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Residence</label>
																						<div class="col-lg-9 col-xl-9">
																							<div class="input-group  input-group-lg">
																								<div class="input-group-prepend">
																									<span class="input-group-text">
																										<i class="la la-phone"></i>
																									</span>
																								</div>
																								<input type="number" class="form-control form-control-solid form-control-lg" name="mobile"  placeholder="Phone" />
																							</div>
																							<span class="form-text text-muted">Enter valid Indian phone number(e.g: 9876-543-210).</span>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-6">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
																						<div class="col-lg-9 col-xl-9">
																							<div class="input-group  input-group-lg">
																								<div class="input-group-prepend">
																									<span class="input-group-text">
																										<i class="la la-at"></i>
																									</span>
																								</div>
																								<input type="text" class="form-control form-control-solid form-control-lg" name="email" value="" required/>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<hr>
																			<h5 class="text-dark font-weight-bold mb-10">2. Co-Applicant</h5>
																			<!--begin::Group-->
																			<div class="form-group row">
																				<div class="col-xl-10 col-md-10 col-sm-12">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Full Name</label>
																						<div class="col-lg-9 col-xl-9">
																							<input class="form-control form-control-solid form-control-lg" name="firstname" type="text" value="" required/>
																						</div>
																					</div>
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Father's/Husband Name</label>
																						<div class="col-lg-9 col-xl-9">
																							<input class="form-control form-control-solid form-control-lg" name="firstname" type="text" value="" required/>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-2 col-md-2 col-sm-12">
																					<div class="col-lg-9 col-xl-9">
																						<div class="image-input image-input-outline" id="kt_user_add_avatar">
																							<div class="image-input-wrapper" style="background-image: url(theme/html/demo4/dist/assets/media/users/100_6.jpg)"></div>
																							<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
																								<i class="fa fa-pen icon-sm text-muted"></i>
																								<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
																								<input type="hidden" name="profile_avatar_remove" />
																							</label>
																							<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
																								<i class="ki ki-bold-close icon-xs text-muted"></i>
																							</span>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<div class="col-xl-6">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Date Of Birth</label>
																						<div class="col-lg-9 col-xl-9">
																							<div class="input-group  input-group-lg">
																								<input type="date" class="form-control form-control-solid form-control-lg" name="dob" placeholder="Username" value="Rs." />
																								<div class="input-group-append">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-6">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Gender</label>
																						<div class="col-lg-9 col-xl-9">
																							<div class="input-group  input-group-lg">
																								<form action="">
																									<input type="radio" name="gender" value="male" style="margin:20px"> Male
																									<input type="radio" name="gender" value="female" style="margin:20px"> Female
																									<input type="radio" name="gender" value="other" style="margin:20px"> Other
																								</form>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<div class="col-xl-6">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Pan Number</label>
																						<div class="col-lg-9 col-xl-9">
																							<input class="form-control form-control-solid form-control-lg" name="pan" type="text" value="" required style="text-transform: uppercase;"/>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-6">
																					<div class="form-group row" data-select2-id="243">
																						<label class="col-form-label text-left col-lg-4 col-sm-12">Occupation</label>
																						<div class="col-lg-8 col-md-8 col-sm-12" data-select2-id="242">
																							<select class="form-control" id="kt_select2_1" name="param">
																								<option value="AK">Alaska</option>
																								<option value="HI">Hawaii</option>
																								<option value="CA">California</option>
																								<option value="NV">Nevada</option>
																								<option value="OR">Oregon</option>
																								<option value="WA">Washington</option>
																								<option value="AZ">Arizona</option>
																								<option value="CO">Colorado</option>
																								<option value="ID">Idaho</option>
																								<option value="MT">Montana</option>
																								<option value="NE">Nebraska</option>
																								<option value="NM">New Mexico</option>
																							</select>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Address(Correspondance)</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" id="addressco" name="addressco" type="text" value="" required/>
																				</div>
																			</div>
																			<!--end::Group-->
																		<!--begin::Group-->
																		<div class="form-group row">
																				<div class="col-xl-4">
																					<div class="form-group row" data-select2-id="243">
																						<label class="col-form-label text-left col-lg-4 col-sm-12">State</label>
																						<div class="col-lg-8 col-md-8 col-sm-12" data-select2-id="242">
																							<select class="form-control" id="stateco" name="stateco">
																								<option value="">Select</option>
																								<option value="Delhi">Delhi</option>
																								<option value="Uttarakhand">Uttarakhand</option>
																								<option value="Uttar Pradesh">Uttar Pradesh</option>
																								<option value="Haryana">Haryana</option>
																							</select>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-4">
																					<div class="form-group row" data-select2-id="243">
																						<label class="col-form-label text-left col-lg-4 col-sm-12">City</label>
																						<div class="col-lg-8 col-md-8 col-sm-12" data-select2-id="242">
																							<select class="form-control" id="districtco" name="districtco">
																								<option value="">Select</option>
																								<option value="Saharanpur">Saharanpur</option>
																								<option value="Meerut">Meerut</option>
																								<option value="Dehradun">Dehradun</option>
																							</select>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-4">
																					<div class="form-group row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Pin Code</label>
																						<div class="col-lg-8 col-xl-8">
																							<input class="form-control form-control-solid form-control-lg" name="pincodeco" id="pincodeco" type="text" value="" required/>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row" style="display:grid;place-items:center;">
																				<div class="checkbox-list">
																					<label class="checkbox">
																							<input type="checkbox" id="checkboxco" name="Checkboxco"/>
																							<span></span>
																							Permanent Address Same as Correspondance Address	
																					</label>
																				</div> 
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Address(Permanent)</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" name="addresscco" id="addresscco" type="text" value="" required/>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<div class="col-xl-4">
																					<div class="form-group row" data-select2-id="243">
																						<label class="col-form-label text-left col-lg-4 col-sm-12">State</label>
																						<div class="col-lg-8 col-md-8 col-sm-12" data-select2-id="242">
																						    <select class="form-control" id="statecco" name="statecco">
																								<option value="">Select</option>
																								<option value="Delhi">Delhi</option>
																								<option value="Uttarakhand">Uttarakhand</option>
																								<option value="Uttar Pradesh">Uttar Pradesh</option>
																								<option value="Haryana">Haryana</option>
																							</select>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-4">
																					<div class="form-group row" data-select2-id="243">
																						<label class="col-form-label text-left col-lg-4 col-sm-12">City</label>
																						<div class="col-lg-8 col-md-8 col-sm-12" data-select2-id="242">
																						    <select class="form-control" id="districtcco" name="districtcco">
																								<option value="">Select</option>
																								<option value="Saharanpur">Saharanpur</option>
																								<option value="Meerut">Meerut</option>
																								<option value="Dehradun">Dehradun</option>
																							</select>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-4">
																					<div class="form-group row">
																						<label class="col-xl-4 col-lg-4 col-form-label">Pin Code</label>
																						<div class="col-lg-8 col-xl-8">
																							<input class="form-control form-control-solid form-control-lg" name="pincodecco" id="pincodecco" type="text" value="" required/>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<h5 class="text-dark font-weight-bold mb-10">Contact Details</h5>
																			<!--begin::Group-->
																			<div class="form-group row">
																				<div class="col-xl-6">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Mobile</label>
																						<div class="col-lg-9 col-xl-9">
																							<div class="input-group  input-group-lg">
																								<div class="input-group-prepend">
																									<span class="input-group-text">
																										<i class="la la-phone"></i>
																									</span>
																								</div>
																								<input type="number" class="form-control form-control-solid form-control-lg" name="mobile"  placeholder="Phone" />
																							</div>
																							<span class="form-text text-muted">Enter valid Indian phone number(e.g: 9876-543-210).</span>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-6">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Office</label>
																						<div class="col-lg-9 col-xl-9">
																							<div class="input-group  input-group-lg">
																								<div class="input-group-prepend">
																									<span class="input-group-text">
																										<i class="la la-phone"></i>
																									</span>
																								</div>
																								<input type="number" class="form-control form-control-solid form-control-lg" name="officephone"  placeholder="Phone" />
																							</div>
																							<span class="form-text text-muted">Enter valid Indian phone number(e.g: 9876-543-210).</span>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<div class="col-xl-6">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Residence</label>
																						<div class="col-lg-9 col-xl-9">
																							<div class="input-group  input-group-lg">
																								<div class="input-group-prepend">
																									<span class="input-group-text">
																										<i class="la la-phone"></i>
																									</span>
																								</div>
																								<input type="number" class="form-control form-control-solid form-control-lg" name="mobile"  placeholder="Phone" />
																							</div>
																							<span class="form-text text-muted">Enter valid Indian phone number(e.g: 9876-543-210).</span>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-6">
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
																						<div class="col-lg-9 col-xl-9">
																							<div class="input-group  input-group-lg">
																								<div class="input-group-prepend">
																									<span class="input-group-text">
																										<i class="la la-at"></i>
																									</span>
																								</div>
																								<input type="text" class="form-control form-control-solid form-control-lg" name="email" value="" required/>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																		</div>
																		<!--end::Wizard Step 1-->
																		<!--begin::Wizard Step 2-->
																		<div class="my-5 step" data-wizard-type="step-content">
																			<h5 class="text-dark font-weight-bold mb-10 mt-5">User's Account Details</h5>
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Language</label>
																				<div class="col-xl-9 col-lg-9">
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Time Zone</label>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Communication</label>
																				<div class="col-xl-9 col-lg-9 col-form-label">
																					<div class="checkbox-inline">
																						<label class="checkbox">
																						<input name="communication" type="checkbox" />
																						<span></span>Email</label>
																						<label class="checkbox">
																						<input name="communication" type="checkbox" />
																						<span></span>SMS</label>
																						<label class="checkbox">
																						<input name="communication" type="checkbox" />
																						<span></span>Phone</label>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<div class="separator separator-dashed my-10"></div>
																			<h5 class="text-dark font-weight-bold mb-10">User's Account Settings</h5>
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Login verification</label>
																				<div class="col-xl-9 col-lg-9">
																					<button type="button" class="btn btn-light-primary font-weight-bold btn-sm">Setup login verification</button>
																					<div class="form-text text-muted mt-3">After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised. 
																					<a href="#">Learn more</a>.</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Password reset verification</label>
																				<div class="col-xl-9 col-lg-9">
																					<div class="checkbox-inline">
																						<label class="checkbox mb-2">
																						<input type="checkbox" />
																						<span></span>Require personal information to reset your password.</label>
																					</div>
																					<div class="form-text text-muted">For extra security, this requires you to confirm your email or phone number when you reset your password. 
																					<a href="#" class="font-weight-bold">Learn more</a>.</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row mt-10">
																				<label class="col-xl-3 col-lg-3"></label>
																				<div class="col-xl-9 col-lg-9">
																					<button type="button" class="btn btn-light-danger font-weight-bold btn-sm">Deactivate your account ?</button>
																				</div>
																			</div>
																			<!--end::Group-->
																		</div>
																		<!--end::Wizard Step 2-->
																		<!--begin::Wizard Step 3-->
																		<div class="my-5 step" data-wizard-type="step-content">
																			<h5 class="mb-10 font-weight-bold text-dark">Setup Your Address</h5>
																			<!--begin::Group-->
																			<div class="form-group">
																				<label>Address Line 1</label>
																				<input type="text" class="form-control form-control-solid form-control-lg" name="address1" placeholder="Address Line 1" value="Address Line 1" />
																				<span class="form-text text-muted">Please enter your Address.</span>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group">
																				<label>Address Line 2</label>
																				<input type="text" class="form-control form-control-solid form-control-lg" name="address2" placeholder="Address Line 2" value="Address Line 2" />
																				<span class="form-text text-muted">Please enter your Address.</span>
																			</div>
																			<!--begin::Row-->
																			<div class="row">
																				<div class="col-xl-6">
																					<!--begin::Group-->
																					<div class="form-group">
																						<label>Postcode</label>
																						<input type="text" class="form-control form-control-solid form-control-lg" name="postcode" placeholder="Postcode" value="3000" />
																						<span class="form-text text-muted">Please enter your Postcode.</span>
																					</div>
																				</div>
																				<!--end::Group-->
																				<!--begin::Group-->
																				<div class="col-xl-6">
																					<div class="form-group">
																						<label>City</label>
																						<input type="text" class="form-control form-control-solid form-control-lg" name="city" placeholder="City" value="Melbourne" />
																						<span class="form-text text-muted">Please enter your City.</span>
																					</div>
																				</div>
																				<!--end::Group-->
																			</div>
																			<!--end::Row-->
																			<!--begin::Row-->
																			<div class="row">
																				<div class="col-xl-6">
																					<!--begin::Group-->
																					<div class="form-group">
																						<label>State</label>
																						<input type="text" class="form-control form-control-solid form-control-lg" name="state" placeholder="State" value="VIC" />
																						<span class="form-text text-muted">Please enter your State.</span>
																					</div>
																					<!--end::Group-->
																				</div>
																				<div class="col-xl-6">
																					<!--begin::Group-->
																					<div class="form-group">
																						<label>Country</label>
																					</div>
																					<!--end::Group-->
																				</div>
																			</div>
																		</div>
																		<!--end::Wizard Step 3-->
																		<!--begin::Wizard Step 4-->
																		<div class="my-5 step" data-wizard-type="step-content">
																			<h5 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h5>
																			<!--begin::Item-->
																			<div class="border-bottom mb-5 pb-5">
																				<div class="font-weight-bolder mb-3">Your Account Details:</div>
																				<div class="line-height-xl">John Wick 
																				<br />Phone: +61412345678 
																				<br />Email: johnwick@reeves.com</div>
																			</div>
																			<!--end::Item-->
																			<!--begin::Item-->
																			<div class="border-bottom mb-5 pb-5">
																				<div class="font-weight-bolder mb-3">Your Address Details:</div>
																				<div class="line-height-xl">Address Line 1 
																				<br />Address Line 2 
																				<br />Melbourne 3000, VIC, Australia</div>
																			</div>
																			<!--end::Item-->
																			<!--begin::Item-->
																			<div>
																				<div class="font-weight-bolder">Payment Details:</div>
																				<div class="line-height-xl">Card Number: xxxx xxxx xxxx 1111 
																				<br />Card Name: John Wick 
																				<br />Card Expiry: 01/21</div>
																			</div>
																			<!--end::Item-->
																		</div>
																		<!--end::Wizard Step 4-->
																		<!--begin::Wizard Actions-->
																		<div class="d-flex justify-content-between border-top pt-10 mt-15">
																			<div class="mr-2">
																				<button type="button" id="prev-step" class="btn btn-light-primary font-weight-bolder px-9 py-4" data-wizard-type="action-prev">Previous</button>
																			</div>
																			<div>
																				<button type="button" class="btn btn-success font-weight-bolder px-9 py-4" data-wizard-type="action-submit">Submit</button>

									<!--begin::Dropdown-->
									<div class="btn-group ml-2">
										<button type="submit" class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base">Submit</button>
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
		$('#checkbox').change(function(){
            var address = $('#address').val();
            var state = $('#state').val();
            var district = $('#district').val();
            var pincode = $('#pincode').val();
			$('#addressc').val(address);
			$('#statec').val(state);
			$('#districtc').val(district);
			$('#pincodec').val(pincode);
		});
		$('#checkboxco').change(function(){
            var addressco = $('#addressco').val();
            var stateco = $('#stateco').val();
            var districtco = $('#districtco').val();
            var pincodeco = $('#pincodeco').val();
			$('#addresscco').val(addressco);
			$('#statecco').val(stateco);
			$('#districtcco').val(districtco);
			$('#pincodecco').val(pincodeco);
		});
	  })
	</script>
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