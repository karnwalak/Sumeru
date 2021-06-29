<?php
$value=$orders[0];
// $mdata=$items[0];

// echo $order->seller_name;
// exit;
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
<base href="../" >
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
	<style>
	
	#head{
		display:grid;
		place-items:end;
	}
		</style>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script> -->
      <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
      <!-- Javascript -->
      <script>
         $(function() {
			$( "#date" ).datepicker({
				format: "dd/mm/yyyy",
                autoclose: true
			});
         });
      </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
	<!--begin::Main-->
	<!--begin::Header Mobile-->
	<div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
		<!--begin::Logo-->
		<a href="../admin/dashboard">
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
					<a href="../admin/dashboard">
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
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Details-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Title-->
									<!-- <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Products</h5> -->
									<!--end::Title-->
									<!--begin::Separator-->
									<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
									<!--end::Separator-->
									<!--begin::Group Actions-->
									<div class="d-flex- align-items-center flex-wrap mr-2 d-none" id="kt_subheader_group_actions">
										<div class="text-dark-50 font-weight-bold">
										<span id="kt_subheader_group_selected_rows">23</span>Selected:</div>
										<div class="d-flex ml-6">
											<div class="dropdown mr-2" id="kt_subheader_group_actions_status_change">
												<button type="button" class="btn btn-light-primary font-weight-bolder btn-sm dropdown-toggle" data-toggle="dropdown">Update Status</button>
												<div class="dropdown-menu p-0 m-0 dropdown-menu-sm">
													<ul class="navi navi-hover pt-3 pb-4">
														<li class="navi-header font-weight-bolder text-uppercase text-primary font-size-lg pb-0">Change status to:</li>
														<li class="navi-item">
															<a href="#" class="navi-link" data-toggle="status-change" data-status="1">
																<span class="navi-text">
																	<span class="label label-light-success label-inline font-weight-bold">Approved</span>
																</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link" data-toggle="status-change" data-status="2">
																<span class="navi-text">
																	<span class="label label-light-danger label-inline font-weight-bold">Rejected</span>
																</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link" data-toggle="status-change" data-status="3">
																<span class="navi-text">
																	<span class="label label-light-warning label-inline font-weight-bold">Pending</span>
																</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link" data-toggle="status-change" data-status="4">
																<span class="navi-text">
																	<span class="label label-light-info label-inline font-weight-bold">On Hold</span>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
											<button class="btn btn-light-success font-weight-bolder btn-sm mr-2" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_records_fetch_modal">Fetch Selected</button>
											<button class="btn btn-light-danger font-weight-bolder btn-sm mr-2" id="kt_subheader_group_actions_delete_all">Delete All</button>
										</div>
									</div>
									<!--end::Group Actions-->
								</div>
								<!--end::Details-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--begin::Button-->
									<a href="/..//..//../.html" class=""></a>
									<!--end::Button-->
									<!--begin::Button-->

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
								<form id="form" enctype="multipart/form-data">
								<!--begin::Card-->
								{{@csrf_field()}}
								<div class="card card-custom">
									<!--begin::Header-->
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label" style="text-align:left;">Edit Purchase Order</h3>
											<!-- {{print_r($orders)}} -->
											<!-- <span class="d-block text-muted pt-2 font-size-sm">Materials made easy</span></h3> -->
										</div>
									</div>
									<div class="row">
										<div class="col-md-3" style="margin:10px;margin-top:16px;" >
											<div class="row">
											<!-- begin::Group -->
											<input type="hidden" name="pro_id" value="">
											<div class="form-group row" data-select2-id="243" style="margin-bottom:0px !important">
													<label class="col-xl-6 col-lg-6 col-form-label" id="head">Select Seller</label>
												<div class="col-lg-6 col-md-6 col-sm-6" data-select2-id="242">
													<input class="form-control form-control-solid form-control-lg" type="text" value="{{$value -> seller_name}}" readonly>
													<span style="color:red;" id="seller_error" class="field_error"></span>
												</div>
											</div>
											<!--end::Group-->
											</div>
										</div>
										<div class="col-md-4" style="margin:10px" >
											<div class="row">
													<label class="col-xl-6 col-lg-6 col-form-label"  id="head">Invoice Number</label>
													<div class="col-lg-6 col-xl-6">
														<input class="form-control form-control-solid form-control-lg" id="invoice" name="invoice" type="text" value="{{$value -> invoice_id}}" readonly />
													<span style="color:red;" id="invoice_error" class="field_error"></span>
													</div>
											</div>
										</div>
										<div class="col-md-4"  style="margin:10px">
											<div class="row">
													<label class="col-xl-6 col-lg-6 col-form-label" id="head">Select Date</label>
													<div class="col-lg-6 col-xl-6">
													<div class="input-group date">
														<input type="text" readonly class="form-control" value="{{$value -> date}}" name="date" id="date" placeholder="Select date" />
														<div class="input-group-append">
															<span class="input-group-text">
																<i class="la la-calendar-check-o"></i>
															</span>
														</div>
														<span style="color:red;" id="date_error" class="field_error"></span>
													</div>
													</input>
													</div>
											</div>
										</div>
									</div>
									<!-- <div class="row" style="display:grid;place-items:end;margin:10px 60px;">
									<button class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2">Add</button>
									</div> -->
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body">
  <!--begin: Datatable-->
  <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
    <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
					<table class="table table-bordered table-hover" id="invoiceItem">
					<thead>
						<tr>	
							
							<th width="38%">Item Name</th>
							<th width="15%">Quantity</th>
							<th width="15%">Type</th>
							<th width="15%">Price</th>								
							<th width="15%">Total</th>
							
						</tr>
					</thead>	
					<tbody>
					<?php $sum = 0; ?>
                     @foreach($items as $item)
					 <?php $x = 0; ?>
						<tr>
							<td>
						    <input type="text" class="form-control" value="{{$item -> material_name}}" readonly>
							</select>
							<span style="color:red;" id="item_name_error" class="field_error"></span>
							</td>
							
							<td><input value="{{$item -> material_quantity}}" readonly type="number" name="quantity[{{$x}}]" id="quantity" class="form-control quantity" autocomplete="off">
								<span style="color:red;" id="quantity_error" class="field_error"></span></td>
							<td>
								<input class="form-control" type="text" value="{{$item -> type}}" readonly>
								
								</select>
								<span style="color:red;" id="type_error" class="field_error"></span>
							</td>			
              <td><input value="{{$item -> material_price}}" readonly type="number" name="price" id="price" class="form-control price" autocomplete="off">
              	<span style="color:red;" id="price_error" class="field_error"></span></td>
							<td><input readonly type="number" value="{{$item -> material_quantity*$item -> material_price}}" name="amount"  id="amount" class="form-control amount" autocomplete="off">
								<span style="color:red;" id="amount_error" class="field_error"></span></td>
						</tr>
						<?php $x = 0; ?>
						<?php $sum = $sum+($item -> material_quantity*$item -> material_price);?>
						@endforeach
					</tbody>
												
					</table>
				</div>
    </div>
  </div>
	<div class="row">
		<div class="col-md-5" style="margin:10px">
			<div class="form-group row">
				<br>
				<label>Upload Invoice</label>
					<div class="col-lg-9">
						<div class="dropzone dropzone-multi" id="kt_dropzone_4">
							<div class="dropzone-panel mb-lg-0 mb-2">
							<a href="/../upload/{{$value -> invoice}}">View Invoice</a>
							</div>
						</div>
					</div>
			</div>
			<br>
			<div class="form-group row">
					<label>Comment</label>
						<input class="form-control" readonly name="comment" id="comment" type="text" value="{{$value -> comment}}" />
						<span style="color:red;" id="comment_error" class="field_error"></span>
			</div>
			<div class="form-group row">
				<label>Current Status</label>
				<input class="form-control" type="text" readonly value="{{$value -> order_status}}">
			
          <span class="field_error" style="color:red;" id="status_error"></span>
          <span style="color:red" id="error_msg"></span>
		    <span style="color:green" id="success_msg"></span>
			</div>
		</div>

		<div class="col-md-4">
		</div>
		<div class="col-md-2" style="margin:10px;">
			<div class="form-group row">
				<label>Sub-Total : </label>
					<b id="subtotal" style="margin-left:20px;">{{$sum}}</b>
				</input>
			</div>
			<div class="form-group row">
					<label>Discount</label>
						<input readonly class="form-control form-control-solid form-control-lg" name="discount" id="discount" type="text" value="{{$value -> discount}}" />
					  <span style="color:red;" id="discount_error" readonly class="field_error"></span>
			</div>
			<div class="form-group row">
					<label>Total</label>
					<b class="" style="margin-left:20px;" id="fullamount">{{$value -> order_amount}}</b>
					<input type="hidden" name="fullamount" value="{{$value -> order_amount}}" id="final">
			</div>
		</div>
	</div>
  <!--end: Datatable-->
</div>
									<!--end::Body-->
								</div>
							</form>
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
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

</body>
<!--end::Body-->

</html>