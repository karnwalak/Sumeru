<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
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
				@include('admin/HR/header')
				<!-- add header end -->

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container-fluid">
								<!--begin::Card-->
								<div class="card card-custom gutter-b">
									<div class="card-body">
										<div class="d-flex">
											<!--begin: Info-->
											<div class="flex-grow-1">
												<!--begin: Title-->
												<div class="d-flex align-items-center justify-content-between flex-wrap">
													<div class="mr-3">
														<!--begin::Name-->
														<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{$viewtasks -> task_title}}
														<!-- <i class="flaticon2-correct text-success icon-md ml-2"></i></a> -->
														<!--end::Name-->
													</div>
													<div class="my-lg-0 my-1">
														<a href="#">
															<!-- <svg aria-hidden="true" focusable="false" data-prefix="fas" style="height:25px; margin:0 10px;" data-icon="bell" class="svg-inline--fa fa-bell fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path></svg> -->
														</a>
														<a href="#">
														<!-- <svg aria-hidden="true" focusable="false" data-prefix="fas" style="height:25px; margin:0 10px;" data-icon="cog" class="svg-inline--fa fa-cog fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg> -->
														</a>
														<a href="#">
															<div class="btn-group">
																	<!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add </button> -->
																<!-- <div class="dropdown-menu">
																		...
																</div> -->
															</div>
														</a>
													</div>
												</div>
												<!--end: Title-->
											</div>
											<!--end: Info-->
										</div>
										<!--begin: Items-->
									</div>
								</div>
								<!--end::Card-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-lg-8">
										<!--begin::Advance Table Widget 3-->
								<!--begin::Card-->
								<div class="card card-custom gutter-b">
									<div class="card-body">
										<div class="d-flex">
											<span class="text-muted">Task  #{{$viewtasks -> id}}- {{$viewtasks -> task_status}}</span>
										</div>
										<div class="separator separator-solid my-7"></div>
										<div class="">
										<label for="exampleTextarea">Provide more information</label>
											<textarea class="form-control" id="exampleTextarea" rows="3">
											  {{strip_tags(htmlspecialchars_decode($viewtasks -> task_discription))}}
											</textarea>
										</div>
										<div class="separator separator-solid my-7"></div>
										<!--begin: Items-->
										<div class="d-flex align-items-left flex-wrap">
											<!--begin: Item-->
											<div class="d-flex align-items-left flex-lg-fill mr-5 my-1">
											@if($viewtasks -> task_status == 'start')
											<a data-id="{{$viewtasks -> id}}" class="btn btn-light-success font-weight-bold mr-2 changebtn">Resume</a>
											@elseif($viewtasks -> task_status == 'resume')
											<a data-id="{{$viewtasks -> id}}" class="btn btn-light-success font-weight-bold mr-2 changebtn">Start</a>
											@elseif($viewtasks -> task_status == 'finish')
											<a class="btn btn-light mr-2" disabled>Start</a>
											@else
											<a data-id="{{$viewtasks -> id}}" class="btn btn-light-success font-weight-bold mr-2 changebtn">Start</a>
											@endif
											@if($viewtasks -> task_status == 'finish')
											<a data-id="{{$viewtasks -> id}}" class="d-none btn btn-light-success finishbtn font-weight-bold mr-2">Finish</a>
											@else
											<a data-id="{{$viewtasks -> id}}" class="btn btn-light-success finishbtn font-weight-bold mr-2">Finish</a>
											@endif
											<div class="dropdown">
											<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												More..
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
												<button class="dropdown-item btn btn-success" type="button">Copy</button>
												<button class="dropdown-item btn btn-success" type="button">Delete</button>
												<button class="dropdown-item btn btn-success" type="button">Create Subtask</button>
											</div>
											</div>
											<a href="edittask/{{$viewtasks -> id}}" class="btn btn-hover-bg-primary btn-text-dark btn-hover-text-white border-0 font-weight-bold mr-2">Edit</a>
										</div>
											<!--end: Item-->
											<!--begin: Item-->
										</div>
										<!--begin: Items-->
									</div>
								</div>
								<!--end::Card-->
										<div class="card card-custom card gutter-b">
											<!--begin::Header-->
											<div class="row">
												<ul class="nav nav-pills" id="myTab" role="tablist">
														<li>
																<div class="col-md-3 col-6" style="padding:20px 0px 20px 20px;">
																		<a href="#" class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2">Comments</a>
																</div>
														</li>
														<li>
																<div class="col-md-3 col-6" style="padding:20px 0px;">
																		<a href="allowances" class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2">History</a>
																</div>
														</li>
														<li>
																<div class="col-md-3 col-6" style="padding:20px 0px;">
																		<a href="#" class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2" style="width:125px !important;">Time Elapsed</a>
																</div>
														</li>
												</ul>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0 pb-3">
												<label for="exampleTextarea">Add a comment</label>
												<textarea class="form-control form-control-solid" rows="3"></textarea>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 3-->
									</div>
									<div class="col-lg-4">
										<!--begin::List Widget 14-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0">
												<h3 class="card-title font-weight-bolder text-dark">{{$viewtasks -> task_status}}</h3>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2">
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-10">
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
														<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Deadline:</a>
									
													</div>
													<!--end::Title-->
													<!--begin::Info-->
													<div class="d-flex align-items-center py-lg-0 py-2">
														<div class="d-flex flex-column text-right">
															<span class="text-dark-75 font-size-h6">{{$viewtasks -> deadline}}</span>
														</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Item-->
										<!-- <div class="separator separator-solid my-7"></div> -->
												<!--begin::Item-->
												<!-- <div class="d-flex flex-wrap align-items-center mb-10">
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
														<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Reminder:</a>
													</div>
													<div class="d-flex align-items-center py-lg-0 py-2">
														<div class="d-flex flex-column text-right">
															<span class="text-dark-75 font-weight-bolder font-size-h6">Remind
															<svg aria-hidden="true" focusable="false" data-prefix="fas" style="height:20px; margin:0 10px;" data-icon="bell" class="svg-inline--fa fa-bell fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path></svg>
														</span>
															</div>
													</div>
												</div> -->
												<!--end::Item-->
										<div class="separator separator-solid my-7"></div>
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-10">
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
														<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Created :</a>
													</div>
													<!--end::Title-->
													<!--begin::Info-->
													<div class="d-flex align-items-center py-lg-0 py-2">
														<div class="d-flex flex-column text-right">
															<span class="text-dark-75 font-weight-bolder font-size-h4">{{$viewtasks -> created_at}}</span>
														</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Item-->
										<div class="separator separator-solid my-7"></div>
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-10">
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
														<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Started :</a>
													</div>
													<!--end::Title-->
													<!--begin::Info-->
													<div class="d-flex align-items-center py-lg-0 py-2">
														<div class="d-flex flex-column text-right">
															<span class="text-dark-75 font-weight-bolder font-size-h4">None</span>
														</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Item-->
										<div class="separator separator-solid my-7"></div>
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-10">
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
														<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">End</a>
													</div>
													<!--end::Title-->
													<!--begin::Info-->
													<div class="d-flex align-items-center py-lg-0 py-2">
														<div class="d-flex flex-column text-right">
															<span class="text-dark-75 font-weight-bolder font-size-h4">None</span>
														</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Item-->
										<div class="separator separator-solid my-7"></div>
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-10">
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
														<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Created By</a>
													</div>
													<!--end::Title-->
													<!--begin::Info-->
													<div class="d-flex align-items-center py-lg-0 py-2">
														<div class="d-flex flex-column text-right">
															<span class="text-dark-75 font-weight-bolder font-size-h4">
															<?php 
																$pid = $viewtasks -> created_by;
																$pdata = DB::SELECT("SELECT * FROM users WHERE id = $pid"); 
																foreach ($pdata as  $pval) {
																}
																echo $pval -> user_email;
															?></span>
														</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Item-->
										<div class="separator separator-solid my-7"></div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::List Widget 14-->
									</div>
								</div>
								<!--end::Row-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
		$(document).ready(function(){
		  $(".changebtn").click(function () {
		    var rowid = $(this).attr('data-id');
		    // alert(rowid);
		    $.ajax({
		      url: "changetaskstatus",
		      method: "POST",
		      data : {id : rowid},
		      headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
		      success: function (data) {
                window.location.reload(); 
		      }
		    });
		  });
		  $(".finishbtn").click(function () {
		    var rowid = $(this).attr('data-id');
		    // alert(rowid);
		    $.ajax({
		      url: "finishstatus",
		      method: "POST",
		      data : {id : rowid},
		      headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
		      success: function (data) {
                window.location.reload(); 
		      }
		    });
		  });
		  
		});
	</script>
</body>
<!--end::Body-->

</html>