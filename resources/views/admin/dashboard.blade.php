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
						<img alt="Logo" src="/../img/logoicon.png" class="max-h-30px" />
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
				@include('admin/ERP/header')
				<!-- add header end -->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Row-->
								<div class="row">									
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body text-center pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="mt-0">
													<div class="symbol symbol-circle symbol-lg-90">
														<img src="/../theme/html/demo4/dist/assets/media/project-logos/2.png" alt="image" />
													</div>
												</div>
												<!--end::User-->
												<!--begin::Name-->
												<div class="my-0">
													<a href="../CRM/crmdashboard" class="text-dark font-weight-bold text-hover-primary font-size-h4">CRM</a>
												</div>
												<!--end::Name-->
											</div>
											<!--end::Body-->
										</div>
									</div>									
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body text-center pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="mt-0">
													<div class="symbol symbol-circle symbol-lg-90">
														<img src="/../theme/html/demo4/dist/assets/media/project-logos/2.png" alt="image" />
													</div>
												</div>
												<!--end::User-->
												<!--begin::Name-->
												<div class="my-0">
													<a href="materialdashboard" class="text-dark font-weight-bold text-hover-primary font-size-h4">Inventory Management</a>
												</div>
												<!--end::Name-->
											</div>
											<!--end::Body-->
										</div>
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row">									
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body text-center pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="mt-0">
													<div class="symbol symbol-circle symbol-lg-90">
														<img src="/../theme/html/demo4/dist/assets/media/project-logos/2.png" alt="image" />
													</div>
												</div>
												<!--end::User-->
												<!--begin::Name-->
												<div class="my-0">
													<a href="sales_management" class="text-dark font-weight-bold text-hover-primary font-size-h4">Sales Management</a>
												</div>
												<!--end::Name-->
											</div>
											<!--end::Body-->
										</div>
									</div>									
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body text-center pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="mt-0">
													<div class="symbol symbol-circle symbol-lg-90">
														<img src="/../theme/html/demo4/dist/assets/media/project-logos/2.png" alt="image" />
													</div>
												</div>
												<!--end::User-->
												<!--begin::Name-->
												<div class="my-0">
													<a href="../FINANCE/financedashboard" class="text-dark font-weight-bold text-hover-primary font-size-h4">Financial Management</a>
												</div>
												<!--end::Name-->
											</div>
											<!--end::Body-->
										</div>
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row">									
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body text-center pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="mt-0">
													<div class="symbol symbol-circle symbol-lg-90">
														<img src="/../theme/html/demo4/dist/assets/media/project-logos/2.png" alt="image" />
													</div>
												</div>
												<!--end::User-->
												<!--begin::Name-->
												<div class="my-0">
													<a href="../HR/hrdashboard" class="text-dark font-weight-bold text-hover-primary font-size-h4">HR & Payroll Management</a>
												</div>
												<!--end::Name-->
											</div>
											<!--end::Body-->
										</div>
									</div>									
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body text-center pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="mt-0">
													<div class="symbol symbol-circle symbol-lg-90">
														<img src="/../theme/html/demo4/dist/assets/media/project-logos/2.png" alt="image" />
													</div>
												</div>
												<!--end::User-->
												<!--begin::Name-->
												<div class="my-0">
													<a href="project_management" class="text-dark font-weight-bold text-hover-primary font-size-h4">Projtect Management</a>
												</div>
												<!--end::Name-->
											</div>
											<!--end::Body-->
										</div>
									</div>
								</div>
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