<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
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
									
									<!--end::Title-->
									<!--begin::Separator-->
									<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
									<!--end::Separator-->
									<!--begin::Search Form-->
									<!-- <div class="d-flex align-items-center" id="kt_subheader_search">
										<span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Enter employee's details and submit</span>
									</div> -->
									<!--end::Search Form-->
								</div>
								<!--end::Details-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--begin::Button-->
									<!-- <a href="leads.php" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a> -->
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
													<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Create Leads</h5>
														<div class="col-xl-12 col-xxl-10">															
															<div class="row" style="display:grid; justify-content:end;">
																<a href="leads" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a>
															</div>
															<!--begin::Wizard Form-->
															<form class="form" id="form">
															{{@csrf_field()}}
																<div class="row justify-content-center">
																	<div class="col-xl-9">
																		<!--begin::Wizard Step 1-->
																		<div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
																			<h5 class="text-dark font-weight-bold mb-10">Leads Details:</h5>
																			<!--begin::Group-->
																			<!-- <div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label text-left">Avatar</label>
																				<div class="col-lg-9 col-xl-9">
																					<div class="image-input image-input-outline" id="kt_user_add_avatar">
																						<div class="image-input-wrapper" style="background-image: url(../../../../theme/html/demo4/dist/assets/media/users/100_6.jpg)"></div>
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
																			</div> -->
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Name</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" name="name" type="text" value="" />
																					<span class="field_error text-danger" id="name_error"></span>
																				</div>
																			</div>
																			<!--end::Group-->
																				<!--begin::Group-->
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
																					<div class="col-lg-9 col-xl-9">
																						<div class="input-group input-group-lg">
																							<div class="input-group-prepend">
																								<span class="input-group-text">
																									<i class="la la-phone"></i>
																								</span>
																							</div>
																							<input type="text" class="form-control form-control-solid form-control-lg" name="phone" value="" placeholder="Phone" />
																						</div>
																						<span class="form-text text-muted">Enter valid Indian phone number(e.g: 9876-543-210).</span><br>
																						<span class="field_error text-danger" id="phone_error"></span>
																					</div>
																				</div>
																				<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
																				<div class="col-lg-9 col-xl-9">
																					<div class="input-group input-group-lg">
																						<div class="input-group-prepend">
																							<span class="input-group-text">
																								<i class="la la-at"></i>
																							</span>
																						</div>
																						<input type="text" class="form-control form-control-solid form-control-lg" name="email" value="" />
																					</div>
																					<span class="field_error text-danger" id="email_error"></span>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row" data-select2-id="243">
																					<label class="col-form-label text-left col-lg-3 col-sm-12">Interested Products	</label>
																					<div class="col-lg-9 col-md-9 col-sm-12" data-select2-id="242">
																						<select class="form-control" id="kt_select2_1" name="product">
																							<option value="">Select</option>
																							@foreach($data as $value)
																							<option value="{{$value -> id}}">{{$value -> category_name}}</option>
																							@endforeach
																						</select>
																						<span class="field_error text-danger" id="product_error"></span>
																					</div>
																				</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<!--begin::Group-->
																			<div class="form-group row" data-select2-id="243">
																					<label class="col-form-label text-left col-lg-3 col-sm-12">Lead Source</label>
																					<div class="col-lg-9 col-md-9 col-sm-12" data-select2-id="242">
																						<select class="form-control" id="kt_select2_1" name="source">
																							<option value="">Select</option>
																							<option value="I AM Builders">I AM Builders</option>
																							<option value="Construct Connect">Construct Connect</option>
																							<option value="Home Advisor">Home Advisor</option>
																						</select>
																						<span class="field_error text-danger" id="source_error"></span>
																					</div>
																				</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Lead/ Follow UP Date</label>
																				<div class="col-lg-9 col-xl-9">
																					<div class="input-group input-group-lg">
																						<input type="date" class="form-control form-control-lg" name="date"/>
																						<div class="input-group-append">
																						</div>
																					</div>
																					<span class="field_error text-danger" id="date_error"></span>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Comment</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" name="comment" type="text" value="" />
																					<span class="field_error text-danger" id="comment_error"></span>
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
																						<select class="form-control form-control-lg form-control-solid" name="language">
																							<option value="">Select Language...</option>
																							<option value="id">Bahasa Indonesia - Indonesian</option>
																							<option value="msa">Bahasa Melayu - Malay</option>
																							<option value="ca">Catal?? - Catalan</option>
																							<option value="cs">??e??tina - Czech</option>
																							<option value="da">Dansk - Danish</option>
																							<option value="de">Deutsch - German</option>
																							<option value="en" selected="selected">English</option>
																							<option value="en-gb">English UK - British English</option>
																							<option value="es">Espa??ol - Spanish</option>
																							<option value="eu">Euskara - Basque (beta)</option>
																							<option value="fil">Filipino</option>
																							<option value="fr">Fran??ais - French</option>
																							<option value="ga">Gaeilge - Irish (beta)</option>
																							<option value="gl">Galego - Galician (beta)</option>
																							<option value="hr">Hrvatski - Croatian</option>
																							<option value="it">Italiano - Italian</option>
																							<option value="hu">Magyar - Hungarian</option>
																							<option value="nl">Nederlands - Dutch</option>
																							<option value="no">Norsk - Norwegian</option>
																							<option value="pl">Polski - Polish</option>
																							<option value="pt">Portugu??s - Portuguese</option>
																							<option value="ro">Rom??n?? - Romanian</option>
																							<option value="sk">Sloven??ina - Slovak</option>
																							<option value="fi">Suomi - Finnish</option>
																							<option value="sv">Svenska - Swedish</option>
																							<option value="vi">Ti???ng Vi???t - Vietnamese</option>
																							<option value="tr">T??rk??e - Turkish</option>
																							<option value="el">???????????????? - Greek</option>
																							<option value="bg">?????????????????? ???????? - Bulgarian</option>
																							<option value="ru">?????????????? - Russian</option>
																							<option value="sr">???????????? - Serbian</option>
																							<option value="uk">???????????????????? ???????? - Ukrainian</option>
																							<option value="he">???????????????? - Hebrew</option>
																							<option value="ur">???????? - Urdu (beta)</option>
																							<option value="ar">?????????????? - Arabic</option>
																							<option value="fa">?????????? - Persian</option>
																							<option value="mr">??????????????? - Marathi</option>
																							<option value="hi">?????????????????? - Hindi</option>
																							<option value="bn">??????????????? - Bangla</option>
																							<option value="gu">????????????????????? - Gujarati</option>
																							<option value="ta">??????????????? - Tamil</option>
																							<option value="kn">??????????????? - Kannada</option>
																							<option value="th">????????????????????? - Thai</option>
																							<option value="ko">????????? - Korean</option>
																							<option value="ja">????????? - Japanese</option>
																							<option value="zh-cn">???????????? - Simplified Chinese</option>
																							<option value="zh-tw">???????????? - Traditional Chinese</option>
																						</select>
																					</div>
																				</div>
																				<!--end::Group-->
																				<!--begin::Group-->
																				<div class="form-group row">
																					<label class="col-form-label col-xl-3 col-lg-3">Time Zone</label>
																					<div class="col-xl-9 col-lg-9">
																						<select class="form-control form-control-lg form-control-solid" name="timezone">
																							<option data-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
																							<option data-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
																							<option data-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
																							<option data-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
																							<option data-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
																							<option data-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
																							<option data-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
																							<option data-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
																							<option data-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
																							<option data-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
																							<option data-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
																							<option data-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
																							<option data-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
																							<option data-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
																							<option data-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
																							<option data-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
																							<option data-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
																							<option data-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
																							<option data-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
																							<option data-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
																							<option data-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
																							<option data-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
																							<option data-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
																							<option data-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
																							<option data-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
																							<option data-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
																							<option data-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
																							<option data-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
																							<option data-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
																							<option data-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
																							<option data-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
																							<option data-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
																							<option data-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
																							<option data-offset="0" value="Azores">(GMT) Azores</option>
																							<option data-offset="0" value="Monrovia">(GMT) Monrovia</option>
																							<option data-offset="0" value="UTC">(GMT) UTC</option>
																							<option data-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
																							<option data-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
																							<option data-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
																							<option data-offset="3600" value="London">(GMT+01:00) London</option>
																							<option data-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
																							<option data-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
																							<option data-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
																							<option data-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
																							<option data-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
																							<option data-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
																							<option data-offset="7200" value="Prague">(GMT+02:00) Prague</option>
																							<option data-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
																							<option data-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
																							<option data-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
																							<option data-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
																							<option data-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
																							<option data-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
																							<option data-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
																							<option data-offset="7200" value="Paris">(GMT+02:00) Paris</option>
																							<option data-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
																							<option data-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
																							<option data-offset="7200" value="Bern">(GMT+02:00) Bern</option>
																							<option data-offset="7200" value="Rome">(GMT+02:00) Rome</option>
																							<option data-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
																							<option data-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
																							<option data-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
																							<option data-offset="7200" value="Harare">(GMT+02:00) Harare</option>
																							<option data-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
																							<option data-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
																							<option data-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
																							<option data-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
																							<option data-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
																							<option data-offset="10800" value="Riga">(GMT+03:00) Riga</option>
																							<option data-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
																							<option data-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
																							<option data-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
																							<option data-offset="10800" value="Athens">(GMT+03:00) Athens</option>
																							<option data-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
																							<option data-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
																							<option data-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
																							<option data-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
																							<option data-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
																							<option data-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
																							<option data-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
																							<option data-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
																							<option data-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
																							<option data-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
																							<option data-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
																							<option data-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
																							<option data-offset="14400" value="Baku">(GMT+04:00) Baku</option>
																							<option data-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
																							<option data-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
																							<option data-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
																							<option data-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
																							<option data-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
																							<option data-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
																							<option data-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
																							<option data-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
																							<option data-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
																							<option data-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
																							<option data-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
																							<option data-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
																							<option data-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
																							<option data-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
																							<option data-offset="21600" value="Astana">(GMT+06:00) Astana</option>
																							<option data-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
																							<option data-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
																							<option data-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
																							<option data-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
																							<option data-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
																							<option data-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
																							<option data-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
																							<option data-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
																							<option data-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
																							<option data-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
																							<option data-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
																							<option data-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
																							<option data-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
																							<option data-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
																							<option data-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
																							<option data-offset="28800" value="Perth">(GMT+08:00) Perth</option>
																							<option data-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
																							<option data-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
																							<option data-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
																							<option data-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
																							<option data-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
																							<option data-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
																							<option data-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
																							<option data-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
																							<option data-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
																							<option data-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
																							<option data-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
																							<option data-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
																							<option data-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
																							<option data-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
																							<option data-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
																							<option data-offset="36000" value="Guam">(GMT+10:00) Guam</option>
																							<option data-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
																							<option data-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
																							<option data-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
																							<option data-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
																							<option data-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
																							<option data-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
																							<option data-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
																							<option data-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
																							<option data-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
																							<option data-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
																						</select>
																					</div>
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
																							<select name="country" class="form-control form-control-solid form-control-lg">
																								<option value="">Select</option>
																								<option value="AF">Afghanistan</option>
																								<option value="AX">??land Islands</option>
																								<option value="AL">Albania</option>
																								<option value="DZ">Algeria</option>
																								<option value="AS">American Samoa</option>
																								<option value="AD">Andorra</option>
																								<option value="AO">Angola</option>
																								<option value="AI">Anguilla</option>
																								<option value="AQ">Antarctica</option>
																								<option value="AG">Antigua and Barbuda</option>
																								<option value="AR">Argentina</option>
																								<option value="AM">Armenia</option>
																								<option value="AW">Aruba</option>
																								<option value="AU" selected="selected">Australia</option>
																								<option value="AT">Austria</option>
																								<option value="AZ">Azerbaijan</option>
																								<option value="BS">Bahamas</option>
																								<option value="BH">Bahrain</option>
																								<option value="BD">Bangladesh</option>
																								<option value="BB">Barbados</option>
																								<option value="BY">Belarus</option>
																								<option value="BE">Belgium</option>
																								<option value="BZ">Belize</option>
																								<option value="BJ">Benin</option>
																								<option value="BM">Bermuda</option>
																								<option value="BT">Bhutan</option>
																								<option value="BO">Bolivia, Plurinational State of</option>
																								<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																								<option value="BA">Bosnia and Herzegovina</option>
																								<option value="BW">Botswana</option>
																								<option value="BV">Bouvet Island</option>
																								<option value="BR">Brazil</option>
																								<option value="IO">British Indian Ocean Territory</option>
																								<option value="BN">Brunei Darussalam</option>
																								<option value="BG">Bulgaria</option>
																								<option value="BF">Burkina Faso</option>
																								<option value="BI">Burundi</option>
																								<option value="KH">Cambodia</option>
																								<option value="CM">Cameroon</option>
																								<option value="CA">Canada</option>
																								<option value="CV">Cape Verde</option>
																								<option value="KY">Cayman Islands</option>
																								<option value="CF">Central African Republic</option>
																								<option value="TD">Chad</option>
																								<option value="CL">Chile</option>
																								<option value="CN">China</option>
																								<option value="CX">Christmas Island</option>
																								<option value="CC">Cocos (Keeling) Islands</option>
																								<option value="CO">Colombia</option>
																								<option value="KM">Comoros</option>
																								<option value="CG">Congo</option>
																								<option value="CD">Congo, the Democratic Republic of the</option>
																								<option value="CK">Cook Islands</option>
																								<option value="CR">Costa Rica</option>
																								<option value="CI">C??te d'Ivoire</option>
																								<option value="HR">Croatia</option>
																								<option value="CU">Cuba</option>
																								<option value="CW">Cura??ao</option>
																								<option value="CY">Cyprus</option>
																								<option value="CZ">Czech Republic</option>
																								<option value="DK">Denmark</option>
																								<option value="DJ">Djibouti</option>
																								<option value="DM">Dominica</option>
																								<option value="DO">Dominican Republic</option>
																								<option value="EC">Ecuador</option>
																								<option value="EG">Egypt</option>
																								<option value="SV">El Salvador</option>
																								<option value="GQ">Equatorial Guinea</option>
																								<option value="ER">Eritrea</option>
																								<option value="EE">Estonia</option>
																								<option value="ET">Ethiopia</option>
																								<option value="FK">Falkland Islands (Malvinas)</option>
																								<option value="FO">Faroe Islands</option>
																								<option value="FJ">Fiji</option>
																								<option value="FI">Finland</option>
																								<option value="FR">France</option>
																								<option value="GF">French Guiana</option>
																								<option value="PF">French Polynesia</option>
																								<option value="TF">French Southern Territories</option>
																								<option value="GA">Gabon</option>
																								<option value="GM">Gambia</option>
																								<option value="GE">Georgia</option>
																								<option value="DE">Germany</option>
																								<option value="GH">Ghana</option>
																								<option value="GI">Gibraltar</option>
																								<option value="GR">Greece</option>
																								<option value="GL">Greenland</option>
																								<option value="GD">Grenada</option>
																								<option value="GP">Guadeloupe</option>
																								<option value="GU">Guam</option>
																								<option value="GT">Guatemala</option>
																								<option value="GG">Guernsey</option>
																								<option value="GN">Guinea</option>
																								<option value="GW">Guinea-Bissau</option>
																								<option value="GY">Guyana</option>
																								<option value="HT">Haiti</option>
																								<option value="HM">Heard Island and McDonald Islands</option>
																								<option value="VA">Holy See (Vatican City State)</option>
																								<option value="HN">Honduras</option>
																								<option value="HK">Hong Kong</option>
																								<option value="HU">Hungary</option>
																								<option value="IS">Iceland</option>
																								<option value="IN">India</option>
																								<option value="ID">Indonesia</option>
																								<option value="IR">Iran, Islamic Republic of</option>
																								<option value="IQ">Iraq</option>
																								<option value="IE">Ireland</option>
																								<option value="IM">Isle of Man</option>
																								<option value="IL">Israel</option>
																								<option value="IT">Italy</option>
																								<option value="JM">Jamaica</option>
																								<option value="JP">Japan</option>
																								<option value="JE">Jersey</option>
																								<option value="JO">Jordan</option>
																								<option value="KZ">Kazakhstan</option>
																								<option value="KE">Kenya</option>
																								<option value="KI">Kiribati</option>
																								<option value="KP">Korea, Democratic People's Republic of</option>
																								<option value="KR">Korea, Republic of</option>
																								<option value="KW">Kuwait</option>
																								<option value="KG">Kyrgyzstan</option>
																								<option value="LA">Lao People's Democratic Republic</option>
																								<option value="LV">Latvia</option>
																								<option value="LB">Lebanon</option>
																								<option value="LS">Lesotho</option>
																								<option value="LR">Liberia</option>
																								<option value="LY">Libya</option>
																								<option value="LI">Liechtenstein</option>
																								<option value="LT">Lithuania</option>
																								<option value="LU">Luxembourg</option>
																								<option value="MO">Macao</option>
																								<option value="MK">Macedonia, the former Yugoslav Republic of</option>
																								<option value="MG">Madagascar</option>
																								<option value="MW">Malawi</option>
																								<option value="MY">Malaysia</option>
																								<option value="MV">Maldives</option>
																								<option value="ML">Mali</option>
																								<option value="MT">Malta</option>
																								<option value="MH">Marshall Islands</option>
																								<option value="MQ">Martinique</option>
																								<option value="MR">Mauritania</option>
																								<option value="MU">Mauritius</option>
																								<option value="YT">Mayotte</option>
																								<option value="MX">Mexico</option>
																								<option value="FM">Micronesia, Federated States of</option>
																								<option value="MD">Moldova, Republic of</option>
																								<option value="MC">Monaco</option>
																								<option value="MN">Mongolia</option>
																								<option value="ME">Montenegro</option>
																								<option value="MS">Montserrat</option>
																								<option value="MA">Morocco</option>
																								<option value="MZ">Mozambique</option>
																								<option value="MM">Myanmar</option>
																								<option value="NA">Namibia</option>
																								<option value="NR">Nauru</option>
																								<option value="NP">Nepal</option>
																								<option value="NL">Netherlands</option>
																								<option value="NC">New Caledonia</option>
																								<option value="NZ">New Zealand</option>
																								<option value="NI">Nicaragua</option>
																								<option value="NE">Niger</option>
																								<option value="NG">Nigeria</option>
																								<option value="NU">Niue</option>
																								<option value="NF">Norfolk Island</option>
																								<option value="MP">Northern Mariana Islands</option>
																								<option value="NO">Norway</option>
																								<option value="OM">Oman</option>
																								<option value="PK">Pakistan</option>
																								<option value="PW">Palau</option>
																								<option value="PS">Palestinian Territory, Occupied</option>
																								<option value="PA">Panama</option>
																								<option value="PG">Papua New Guinea</option>
																								<option value="PY">Paraguay</option>
																								<option value="PE">Peru</option>
																								<option value="PH">Philippines</option>
																								<option value="PN">Pitcairn</option>
																								<option value="PL">Poland</option>
																								<option value="PT">Portugal</option>
																								<option value="PR">Puerto Rico</option>
																								<option value="QA">Qatar</option>
																								<option value="RE">R??union</option>
																								<option value="RO">Romania</option>
																								<option value="RU">Russian Federation</option>
																								<option value="RW">Rwanda</option>
																								<option value="BL">Saint Barth??lemy</option>
																								<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
																								<option value="KN">Saint Kitts and Nevis</option>
																								<option value="LC">Saint Lucia</option>
																								<option value="MF">Saint Martin (French part)</option>
																								<option value="PM">Saint Pierre and Miquelon</option>
																								<option value="VC">Saint Vincent and the Grenadines</option>
																								<option value="WS">Samoa</option>
																								<option value="SM">San Marino</option>
																								<option value="ST">Sao Tome and Principe</option>
																								<option value="SA">Saudi Arabia</option>
																								<option value="SN">Senegal</option>
																								<option value="RS">Serbia</option>
																								<option value="SC">Seychelles</option>
																								<option value="SL">Sierra Leone</option>
																								<option value="SG">Singapore</option>
																								<option value="SX">Sint Maarten (Dutch part)</option>
																								<option value="SK">Slovakia</option>
																								<option value="SI">Slovenia</option>
																								<option value="SB">Solomon Islands</option>
																								<option value="SO">Somalia</option>
																								<option value="ZA">South Africa</option>
																								<option value="GS">South Georgia and the South Sandwich Islands</option>
																								<option value="SS">South Sudan</option>
																								<option value="ES">Spain</option>
																								<option value="LK">Sri Lanka</option>
																								<option value="SD">Sudan</option>
																								<option value="SR">Suriname</option>
																								<option value="SJ">Svalbard and Jan Mayen</option>
																								<option value="SZ">Swaziland</option>
																								<option value="SE">Sweden</option>
																								<option value="CH">Switzerland</option>
																								<option value="SY">Syrian Arab Republic</option>
																								<option value="TW">Taiwan, Province of China</option>
																								<option value="TJ">Tajikistan</option>
																								<option value="TZ">Tanzania, United Republic of</option>
																								<option value="TH">Thailand</option>
																								<option value="TL">Timor-Leste</option>
																								<option value="TG">Togo</option>
																								<option value="TK">Tokelau</option>
																								<option value="TO">Tonga</option>
																								<option value="TT">Trinidad and Tobago</option>
																								<option value="TN">Tunisia</option>
																								<option value="TR">Turkey</option>
																								<option value="TM">Turkmenistan</option>
																								<option value="TC">Turks and Caicos Islands</option>
																								<option value="TV">Tuvalu</option>
																								<option value="UG">Uganda</option>
																								<option value="UA">Ukraine</option>
																								<option value="AE">United Arab Emirates</option>
																								<option value="GB">United Kingdom</option>
																								<option value="US">United States</option>
																								<option value="UM">United States Minor Outlying Islands</option>
																								<option value="UY">Uruguay</option>
																								<option value="UZ">Uzbekistan</option>
																								<option value="VU">Vanuatu</option>
																								<option value="VE">Venezuela, Bolivarian Republic of</option>
																								<option value="VN">Viet Nam</option>
																								<option value="VG">Virgin Islands, British</option>
																								<option value="VI">Virgin Islands, U.S.</option>
																								<option value="WF">Wallis and Futuna</option>
																								<option value="EH">Western Sahara</option>
																								<option value="YE">Yemen</option>
																								<option value="ZM">Zambia</option>
																								<option value="ZW">Zimbabwe</option>
																							</select>
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--end::Page Scripts-->
    <script type="text/javascript">
        $(document).ready(function(){
        $("#form").submit(function(e){
          e.preventDefault();
          $('.field_error').html('');
          $.ajax({
            url:'addleads',
            data:$("#form").serialize(),
            type:'post',
            success:function(result){
              if (result.status == 'error') {
				$('#msg').html("<div class='col-md-4 alert alert-danger alert-block'><strong>"+result.error+"</strong></div>");
                $.each(result.error,function(key,val){
                  // console.log(key);
                  // console.log(val);
                  $('#'+key+'_error').html(val[0]);
                })
              }else if(result.status == 'success'){
                $('.form')[0].reset();
				$('#msg').html("<div class='col-md-4 alert alert-success alert-block'><strong>"+result.msg+"</strong></div>");
                setTimeout(function(){
                   window.location.href = '../CRM/leads'; 
                }, 1000);
              }
            },
            complete:function(){
          		$('body, html').animate({scrollTop:$('form').offset().top}, 'slow');
        	}
          });
        })
      });
    </script>
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