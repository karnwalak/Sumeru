<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="utf-8" />
	<title>ERP</title>
	<meta name="description" content="Updates and statistics" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--begin::Fonts-->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
							<div class="row p-3 justify-content-center">
							@if ($message = Session::get('success'))
							<div class="col-md-6 alert alert-primary alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button>    
								<strong>{{ $message }}</strong>
							</div>
							@endif
							@if ($message = Session::get('error'))
							<div class="col-md-6 alert alert-danger alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button>    
								<strong>{{ $message }}</strong>
							</div>
							@endif
								<!--begin::Card-->
								<div class="card card-custom">
									<!--begin::Header-->
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">Material Inventory</h3>									
										</div>
										<div class="row" style="display:grid;place-items:end;padding:10px 15px;">
												<a href="/../admin/ERP/addproducts" class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2">Add Products</a>
												</div>
									</div>
									<!--end::Header-->
									<!--begin::Body-->


									<div class="card card-custom gutter-b">
										<div class="card-body">
											<!--begin: Search Form-->
											<!--begin::Search Form-->
											<div class="mb-7">
                                                    <form method="post" action="searchproduct">
														<div class="row align-items-center">
		                                                    	{{@csrf_field()}}
																<div class="col-lg-9 col-xl-8">
																	<div class="row align-items-center">
																		<div class="col-md-4 my-2 my-md-0">
																			<div class="input-icon">
																				<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" name="pname">
																				<span>
																				<i class="flaticon2-search-1 text-muted"></i>
																				</span>
																			</div>
																		</div>
																		<!-- <div class="col-md-4 my-2 my-md-0">
																			<div class="row">
																				<label class="col-form-label text-left col-lg-4 col-sm-12">Status</label>
																				<div class="col-lg-8 col-md-8	 col-sm-12" data-select2-id="242">
																					<select class="form-control" id="kt_select2_1" name="status">
																						<option value="">Select</option>
																						<option value="Active">Active</option>
																						<option value="Inactive">Inactive</option>
																					</select>
																				</div>
																			</div>
																		</div> -->
																		<div class="col-md-4 my-2 my-md-0">
																			<div class="row">
																				<label class="col-form-label text-left col-lg-4 col-sm-12">Type</label>
																				<div class="col-lg-8 col-md-8	 col-sm-12" data-select2-id="242">
																					<select class="form-control" id="kt_select2_1" name="type">
																						<option value="">Select</option>
																						<option value="Combined">Combined</option>
																						<option value="Single">Single</option>
																					</select>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
																	<button type="submit" class="btn btn-light-primary px-6 font-weight-bold">Search</button>
																</div>
														</div>
													</form>
											</div>
											<!--end::Search Form-->
											<!--end: Search Form-->
											<!--begin: Selected Rows Group Action Form-->
											<div class="mt-10 mb-5 collapse" id="kt_datatable_group_action_form">
												<div class="d-flex align-items-center">
													<div class="font-weight-bold text-danger mr-3">Selected 
														<span id="kt_datatable_selected_records">0</span>records:
													</div>
													<div class="dropdown mr-2">
														<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">Update status</button>
														<div class="dropdown-menu dropdown-menu-sm">
															<ul class="nav nav-hover flex-column">
																<li class="nav-item">
																	<a href="#" class="nav-link">
																	<span class="nav-text">Pending</span>
																	</a>
																</li>
																<li class="nav-item">
																	<a href="#" class="nav-link">
																	<span class="nav-text">Delivered</span>
																	</a>
																</li>
																<li class="nav-item">
																	<a href="#" class="nav-link">
																	<span class="nav-text">Canceled</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
													<button class="btn btn-sm btn-danger mr-2" type="button" id="kt_datatable_delete_all">Delete All</button>
													<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#kt_datatable_fetch_modal">Fetch Selected Records</button>
												</div>
											</div>
											<!--end: Selected Rows Group Action Form-->
											<!--begin: Datatable-->
											
											<div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
												<table class="datatable-table" style="display: block;">
													<thead class="datatable-head">
														<tr class="datatable-row" style="left: 0px;">
															<th data-field="RecordID" class="datatable-cell-center datatable-cell datatable-cell-check"><span style="width: 20px;"><label class="checkbox checkbox-single checkbox-all"><input type="checkbox">&nbsp;<span></span></label></span></th>
															<th data-field="Sno" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">S No.</span></th>
															<th data-field="Name" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">Name</span></th>
															<th data-field="Category" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">Category</span></th>
															<th data-field="Modal" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">Modal</span></th>
															<th data-field="Sku" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">Sku</span></th>
															<th data-field="Type" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">Type</span></th>
															<th data-field="Stock" class="datatable-cell datatable-cell-sort"><span style="width: 100px;"><a href="productstockrecord.php">Stock</a></span></th>
															<th data-field="Status" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">Status</span></th>
															<th data-field="Actions" data-autohide-disabled="false" class="datatable-cell-left datatable-cell datatable-cell-sort"><span style="width: 125px;">Actions</span></th>
														</tr>
													</thead>
													<tbody class="datatable-body" style="">
														
														@foreach($data as $value)
														<tr data-row="0" class="datatable-row" style="left: 0px;">
															<td class="datatable-cell-center datatable-cell datatable-cell-check" data-field="RecordID" aria-label="1"><span style="width: 20px;"><label class="checkbox checkbox-single"><input type="checkbox" value="1">&nbsp;<span></span></label></span></td>
															<td data-field="Sno" aria-label="{{$value -> id}}" class="datatable-cell"><span style="width: 100px;">{{$value -> id}}</span></td>
															<td data-field="Name" aria-label="{{$value -> material_name}}" class="datatable-cell"><span style="width: 100px;">{{$value -> material_name}}</span></td>
															<td data-field="{{$value -> material_category}}" aria-label="{{$value -> material_category}}" class="datatable-cell"><span style="width: 100px;">
																<?php 
																$id = $value -> material_category;
                                                                $result = DB::SELECT("SELECT * FROM inventory_material_categories WHERE id = $id");
                                                                foreach ($result as $valu) {
                                                                	// code...
                                                                }
                                                                echo $valu -> category_name;
																?>
															</span></td>
															<td data-field="Modal" aria-label="{{$value -> modal}}" class="datatable-cell"><span style="width: 100px;">{{$value -> modal}}</span></td>
															<td data-field="Sku" aria-label="{{$value -> sku}}" class="datatable-cell"><span style="width: 100px;">{{$value -> sku}}</span></td>
															<td data-field="Type" aria-label="{{$value -> type}}" class="datatable-cell"><span style="width: 100px;">{{$value -> type}}</span></td>
															<td data-field="Stock" aria-label="Brazil" class="datatable-cell"><span style="width: 100px;"><a href="#">2016</a></span></td>
															<td data-field="Status" aria-label="5" class="datatable-cell">
								                               @if($value -> material_status == 'Active')
								                                <div class="form-check form-switch">
																  <input class="form-check-input statuschange" name="status" type="checkbox" id="{{$value -> id}}" checked />
																</div>
								                               @else
								                                <div class="form-check form-switch">
																  <input class="form-check-input statuschange" name="status" type="checkbox" id="{{$value -> id}}"/>
																</div>
                               									@endif
														  </td>
															<td class="datatable-cell-left datatable-cell" data-field="Actions" data-autohide-disabled="false" aria-label="null">
																<span style="overflow: visible; position: relative; width: 125px;">
																<a href="productstockrecord/{{$value -> id}}" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
																			<span class="svg-icon svg-icon-md">
																				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
																				<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
																				<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
																				</svg>
																			</span>
																		</a>
																		<a href="editproducts/{{$value -> id}}" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
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
																		<a href="deleteproduct/{{$value -> id}}" onclick="return confirm('Are you sure?');" class="btn btn-sm btn-clean btn-icon" title="Delete">
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
															</td>
														</tr>
														@endforeach
													</tbody>
												</table>
												<!-- <div class="datatable-pager datatable-paging-loaded"> -->
													<!-- <ul class="datatable-pager-nav my-2 mb-sm-0">
														<li><a title="First" class="datatable-pager-link datatable-pager-link-first datatable-pager-link-disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
														<li><a title="Previous" class="datatable-pager-link datatable-pager-link-prev datatable-pager-link-disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
														<li style="display: none;"><input type="text" class="datatable-pager-input form-control" title="Page number"></li>
														<li><a class="datatable-pager-link datatable-pager-link-number datatable-pager-link-active" data-page="1" title="1">1</a></li>
														<li><a class="datatable-pager-link datatable-pager-link-number" data-page="2" title="2">2</a></li>
														<li><a class="datatable-pager-link datatable-pager-link-number" data-page="3" title="3">3</a></li>
														<li><a class="datatable-pager-link datatable-pager-link-number" data-page="4" title="4">4</a></li>
														<li><a class="datatable-pager-link datatable-pager-link-number" data-page="5" title="5">5</a></li>
														<li><a title="Next" class="datatable-pager-link datatable-pager-link-next" data-page="2"><i class="flaticon2-next"></i></a></li>
														<li><a title="Last" class="datatable-pager-link datatable-pager-link-last" data-page="35"><i class="flaticon2-fast-next"></i></a></li>
													</ul> -->
													<!-- <div class="datatable-pager-info my-2 mb-sm-0">
														<div class="dropdown bootstrap-select datatable-pager-size" style="width: 60px;">
															<select class="selectpicker datatable-pager-size" title="Select page size" data-width="60px" data-container="body" data-selected="10">
																<option class="bs-title-option" value=""></option>
																<option value="5">5</option>
																<option value="10">10</option>
																<option value="20">20</option>
																<option value="30">30</option>
																<option value="50">50</option>
																<option value="100">100</option>
															</select>
																<div class="filter-option">
																	<div class="filter-option-inner">
																	</div>
																</div>
															<div class="dropdown-menu ">
																<div class="inner show" role="listbox" id="bs-select-5" tabindex="-1">
																	<ul class="dropdown-menu inner show" role="presentation"></ul>
																</div>
															</div>
														</div>
														<span class="datatable-pager-detail">Showing 1 - 10 of 350</span>
													</div> -->
												<!-- </div> -->
											</div>
											<!--end: Datatable-->
											<div class="">
													{{ $data->links()}}
											</div>
										</div>
									</div> 
								<!--end::Body-->
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
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
	<script type="text/javascript">
		$(document).ready(function(){
		  $(".statuschange").click(function () {
		    if ($(this).prop("checked") == true) {
		      $('.statuschange').val(1);
		      var val = 1;
		    } else {
		      $('.statuschange').val(0);
		      var val = 0;
		    }
		    var rowid = $(this).attr('id');
		    // alert(rowid);
		    // if($(this).prop("checked") == false){
		    //    alert("bye");
		    // }
		    $.ajax({
		      url: "statusupdatematerial",
		      method: "POST",
		      data : {id : rowid},
		      headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
		      success: function (data) {
		        console.log(data);
		        // $('#uploaded_image').html(data);
		        // $('#progressBar').val(100);
		        // $('#status').html('File Uploaded!');
		      }
		    });
		  });
		});
	</script>
</body>
<!--end::Body-->

</html>