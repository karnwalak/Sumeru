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
	<style>
		#kt_content{
			overflow-x:hidden;
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
				<!--begin::Toolbar-->
				<div class="row" style="display:grid;place-items:end;margin:5px 20px">
					<!--begin::Button-->
					<a href="tasksandprojects" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a>
					<!--end::Button-->
				</div>
				<!--end::Toolbar-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<div class="row">
						<div class="col-md-6 col-12" >
							<div class="show" id="kt_inbox_compose" data-backdrop="false" style="display: block; padding-left: 0px;" aria-modal="true" role="dialog">
									<div class="modal-dialog" role="document">
											<div class="modal-content">
													<!--begin::Form-->
													<form id="kt_inbox_compose_form">
															<!--begin::Header-->
															<div class="d-flex align-items-center justify-content-between py-5 pl-8 pr-5 border-bottom">
																	<h5 class="font-weight-bold m-0">Compose</h5>
															</div>
															<!--end::Header-->
															<!--begin::Body-->
															<div class="d-block">
																	<!--begin::To-->
																	<div class="d-flex align-items-center border-bottom inbox-to px-8 min-h-45px">
																			<div class="text-dark-50 w-75px">To:</div>
																			<div class="d-flex align-items-center flex-grow-1">
																					<tags class="tagify form-control border-0" tabindex="-1">
																							<tag title="Chris Muller" spellcheck="false" tabindex="-1" class="tagify__tag tagify__tag--primary tagify--noAnim" __isvalid="true" pic="./assets/media/users/100_11.jpg" initialsstate="" initials="" email="chris.muller@wix.com" value="Chris Muller" contenteditable="false">
																									<x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x>
																									<div><span class="tagify__tag-text">Chris Muller</span></div>
																							</tag>
																							<tag title="Lina Nilson" spellcheck="false" tabindex="-1" class="tagify__tag tagify__tag--primary tagify--noAnim" __isvalid="true" pic="./assets/media/users/100_15.jpg" initialsstate="danger" initials="LN" email="lina.nilson@loop.com" value="Lina Nilson" contenteditable="false">
																									<x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x>
																									<div><span class="tagify__tag-text">Lina Nilson</span></div>
																							</tag>
																							<span data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false" contenteditable=""></span>
																					</tags>
																					<input type="text" class="form-control border-0" name="compose_to" value="Chris Muller, Lina Nilson">
																			</div>
																			<div class="ml-2">
																					<span class="text-muted font-weight-bold cursor-pointer text-hover-primary mr-2" data-inbox="cc-show">Cc</span>
																					<span class="text-muted font-weight-bold cursor-pointer text-hover-primary" data-inbox="bcc-show">Bcc</span>
																			</div>
																	</div>
																	<!--end::To-->
																	<!--begin::CC-->
																	<div class="d-none align-items-center border-bottom inbox-to-cc pl-8 pr-5 min-h-45px">
																			<div class="text-dark-50 w-75px">Cc:</div>
																			<div class="flex-grow-1">
																					<tags class="tagify form-control border-0 tagify--noTags tagify--empty" tabindex="-1">
																							<span data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false" contenteditable=""></span>
																					</tags>
																					<input type="text" class="form-control border-0" name="compose_cc" value="">
																			</div>
																			<span class="btn btn-clean btn-xs btn-icon" data-inbox="cc-hide">
																			<i class="la la-close"></i>
																			</span>
																	</div>
																	<!--end::CC-->
																	<!--begin::BCC-->
																	<div class="d-none align-items-center border-bottom inbox-to-bcc pl-8 pr-5 min-h-45px">
																			<div class="text-dark-50 w-75px">Bcc:</div>
																			<div class="flex-grow-1">
																					<tags class="tagify form-control border-0 tagify--noTags tagify--empty" tabindex="-1">
																							<span data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false" contenteditable=""></span>
																					</tags>
																					<input type="text" class="form-control border-0" name="compose_bcc" value="">
																			</div>
																			<span class="btn btn-clean btn-xs btn-icon" data-inbox="bcc-hide">
																			<i class="la la-close"></i>
																			</span>
																	</div>
																	<!--end::BCC-->
																	<!--begin::Subject-->
																	<div class="border-bottom">
																			<input class="form-control border-0 px-8 min-h-45px" name="compose_subject" placeholder="Subject">
																	</div>
																	<!--end::Subject-->
																	<!--begin::Message-->
																	<div class="ql-toolbar ql-snow px-5 border-top-0 border-left-0 border-right-0">
																			<span class="ql-formats">
																					<span class="ql-header ql-picker">
																							<span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-1">
																									<svg viewBox="0 0 18 18">
																											<polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
																											<polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
																									</svg>
																							</span>
																							<span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-1"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="3"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span></span>
																					</span>
																					<select class="ql-header" style="display: none;">
																							<option value="1"></option>
																							<option value="2"></option>
																							<option value="3"></option>
																							<option selected="selected"></option>
																					</select>
																			</span>
																			<span class="ql-formats">
																					<button type="button" class="ql-bold">
																							<svg viewBox="0 0 18 18">
																									<path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path>
																									<path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path>
																							</svg>
																					</button>
																					<button type="button" class="ql-italic">
																							<svg viewBox="0 0 18 18">
																									<line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
																									<line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
																									<line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
																							</svg>
																					</button>
																					<button type="button" class="ql-underline">
																							<svg viewBox="0 0 18 18">
																									<path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
																									<rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect>
																							</svg>
																					</button>
																					<button type="button" class="ql-link">
																							<svg viewBox="0 0 18 18">
																									<line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line>
																									<path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path>
																									<path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path>
																							</svg>
																					</button>
																			</span>
																			<span class="ql-formats">
																					<button type="button" class="ql-list" value="ordered">
																							<svg viewBox="0 0 18 18">
																									<line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line>
																									<line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line>
																									<line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line>
																									<line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line>
																									<path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path>
																									<path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path>
																									<path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path>
																							</svg>
																					</button>
																					<button type="button" class="ql-list" value="bullet">
																							<svg viewBox="0 0 18 18">
																									<line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line>
																									<line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line>
																									<line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line>
																									<line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line>
																									<line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line>
																									<line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line>
																							</svg>
																					</button>
																			</span>
																			<span class="ql-formats">
																					<button type="button" class="ql-clean">
																							<svg class="" viewBox="0 0 18 18">
																									<line class="ql-stroke" x1="5" x2="13" y1="3" y2="3"></line>
																									<line class="ql-stroke" x1="6" x2="9.35" y1="12" y2="3"></line>
																									<line class="ql-stroke" x1="11" x2="15" y1="11" y2="15"></line>
																									<line class="ql-stroke" x1="15" x2="11" y1="11" y2="15"></line>
																									<rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="7" x="2" y="14"></rect>
																							</svg>
																					</button>
																			</span>
																	</div>
																	<div id="kt_inbox_compose_editor" class="border-0 ql-container ql-snow" style="height: 250px">
																			<div class="ql-editor ql-blank px-8" data-gramm="false" placeholder="Type message..." spellcheck="false" contenteditable="true">
																					<p><br></p>
																			</div>
																			<grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: auto;" class="cGcvT"></grammarly-extension>
																			<grammarly-extension data-grammarly-shadow-root="true" style="mix-blend-mode: darken; position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: auto;" class="cGcvT"></grammarly-extension>
																			<div class="ql-clipboard" tabindex="-1" contenteditable="true"></div>
																			<div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div>
																	</div>
																	<!--end::Message-->
																	<!--begin::Attachments-->
																	<div class="dropzone dropzone-multi px-8 py-4" id="kt_inbox_compose_attachments">
																			<div class="dropzone-items">
																			</div>
																			<div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div>
																	</div>
																	<!--end::Attachments-->
															</div>
															<!--end::Body-->
															<!--begin::Footer-->
															<div class="d-flex align-items-center justify-content-between py-5 pl-8 pr-5 border-top">
																	<!--begin::Actions-->
																	<div class="d-flex align-items-center mr-3">
																			<!--begin::Other-->
																			<span class="btn btn-icon btn-sm btn-clean mr-2 dz-clickable" id="kt_inbox_compose_attachments_select">
																			<i class="flaticon2-clip-symbol"></i>
																			</span>
																			<span class="btn btn-icon btn-sm btn-clean">
																			<i class="flaticon2-pin"></i>
																			</span>
																			<!--end::Other-->
																	</div>
																	<!--end::Actions-->
																	<!--begin::Toolbar-->
																	<div class="d-flex align-items-center">
																			<span class="btn btn-icon btn-sm btn-clean mr-2" data-toggle="tooltip" title="" data-original-title="More actions">
																			<i class="flaticon2-settings"></i>
																			</span>
																			<span class="btn btn-icon btn-sm btn-clean" data-inbox="dismiss" data-toggle="tooltip" title="" data-original-title="Dismiss reply">
																			<i class="flaticon2-rubbish-bin-delete-button"></i>
																			</span>
																	</div>
																	<!--end::Toolbar-->
															</div>
															<!--end::Footer-->
													</form>
													<!--end::Form-->
											</div>
									</div>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="row" style="margin: 25px; justify-content:center;">
								<input type="checkbox" id="priority" name="priority" value="high" style="margin: 2px;margin-bottom: 8px;!important">
								<label for="priority">High Priority</label>
							</div>
							<div class="row" style="margin:2em;">
								<p style="font-size:20px;"><b>Responsible Person</b></p><br>
							</div>
							<div class="row" style="margin:2em;">
								<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="width:100%;background-color:transparent;border:1px solid black;border-radius:5px;height:40px;">
										<option selected>Open this select menu</option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
								</select>
							</div>
							<div class="row" style="margin:2em;">
								<p style="font-size:20px;"><b>Deadline</b></p><br>
							</div>
							<div class="row" style="margin:2em;">
								<input type="text" class="form-control form-control-solid form-control-lg" name="companywebsite" />
							</div>
							<div class="row" style="display: grid;place-items: end;margin: 25px;">
								<!--begin::Dropdown-->
								<div class="btn-group ml-2">
									<button type="button" class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base">Submit</button>
									<button type="button" class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
									<div class="dropdown-menu dropdown-menu-sm p-0 m-0 dropdown-menu-right">
										<ul class="navi py-5">
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-writing"></i>
													</span>
													<span class="navi-text">Save &amp; continue</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-medical-records"></i>
													</span>
													<span class="navi-text">Save &amp; add new</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-hourglass-1"></i>
													</span>
													<span class="navi-text">Save &amp; exit</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!--end::Dropdown-->
							</div>
						</div>
					</div>
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