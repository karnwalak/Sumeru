<?php
// print_r($data);
// exit;
?>
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
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
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
                    <a href="#" class="btn btn-icon btn-clean btn-lg mb-1" id="kt_quick_panel_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Quick Panel">
                        <span class="svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
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
                @include('admin/FINANCE/header')
                <!-- add header end -->

                <!--begin::Entry-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
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
															<span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Enter new category and submit</span>
														</div> -->
                                <!--end::Search Form-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center">
                                <!--begin::Button-->
                                <!-- <a href="hrdesignation.php" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a> -->
                                <!--end::Button-->
                            </div>
                            <!--end::Toolbar-->
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
                               												 <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Add Employee Transactions</h5>
                                                        <div class="row" style="display:flex; justify-content:end;">
																														<button data-toggle="modal" data-target="#exampleModalCenter"  type="button" class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base" style="margin:0px 10px;">Add Expenses</button>
                                                            <a href="purchaseorder" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base" style="margin:0px 10px;">Back</a>
                                                        </div>
                                                        <!--begin::Wizard Form-->
                                                        <form class="form" id="kt_form">
                                                            <div class="row justify-content-center">
                                                                <div class="col-xl-9">
                                                                    <!--begin::Wizard Step 1-->
                                                                    <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
                                                                        <!-- <h5 class="text-dark font-weight-bold mb-10">Details:</h5> -->
                                                                        <div class="row">
                                                                            <!--begin::Group-->
                                                                            <div class="col-xl-5 col-12">
                                                                                <div class="form-group row">
                                                                                        <label class="col-xl-3 col-lg-3 col-form-label">From</label>
                                                                                        <div class="col-lg-9 col-xl-9">
                                                                                        <input class="form-control form-control-solid form-control-lg" name="from" type="text" value="" />
                                                                                            <!-- <div class="input-group input-group-solid input-group-lg">
                                                                                                <input type="date" class="form-control form-control-solid form-control-lg" name="companywebsite" placeholder="Username" value="Rs." />
                                                                                                <div class="input-group-append">
                                                                                                </div>
                                                                                            </div> -->
                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Group-->
                                                                            <!--begin::Group-->
                                                                            <div class="col-xl-5 col-12">
                                                                                <div class="form-group row">
                                                                                        <label class="col-xl-3 col-lg-3 col-form-label">To</label>
                                                                                        <div class="col-lg-9 col-xl-9">
                                                                                        <input class="form-control form-control-solid form-control-lg" name="to" type="text" value="" />
                                                                                            <!-- <div class="input-group input-group-solid input-group-lg">
                                                                                                <input type="date" class="form-control form-control-solid form-control-lg" name="companywebsite" placeholder="Username" value="Rs." />
                                                                                                <div class="input-group-append">
                                                                                                </div>
                                                                                            </div> -->
                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Group-->
                                                                            <!--begin::Dropdown-->
                                                                            <div class="col-xl-2 col-12">
                                                                                <div class="btn-group ml-2">
                                                                                        <button type="button" class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base">Search</button>
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Dropdown-->
                                                                        </div>
                                                                    <div class="row">
                                                                        <!--begin::Group-->
                                                                        <div class="col-xl-5 col-12">
                                                                            <div class="form-group row">
                                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Total</label>
                                                                                    <div class="col-lg-9 col-xl-9">
                                                                                            <input class="form-control form-control-solid form-control-lg" name="firstname" type="text" value="" />
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Group-->
                                                                    </div>
                                                                    </div>
                                                                    <!-- table -->
                                                                    <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
                                                                        <table class="datatable-table" style="display: block;">
                                                                            <thead class="datatable-head">
                                                                                <tr class="datatable-row" style="left: 0px;">
                                                                                    <!-- <th data-field="RecordID" class="datatable-cell-center datatable-cell datatable-cell-check"><span style="width: 20px;"><label class="checkbox checkbox-single checkbox-all"><input type="checkbox">&nbsp;<span></span></label></span></th> -->
                                                                                    <th data-field="SNo." class="datatable-cell datatable-cell-sort"><span style="width: 100px;">S No.</span></th>
                                                                                    <th data-field="Amount" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">Amount</span></th>
                                                                                    <th data-field="Reasons" class="datatable-cell datatable-cell-sort"><span style="width: 100px;">Reasons</span></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="datatable-body" style="">
                                                                                <?php $a = 1; ?>
                                                                                @foreach($data as $value)
                                                                                <tr data-row="0" class="datatable-row" style="left: 0px;">
                                                                                    <!-- <td class="datatable-cell-center datatable-cell datatable-cell-check" data-field="RecordID" aria-label="1"><span style="width: 20px;"><label class="checkbox checkbox-single"><input type="checkbox" value="1">&nbsp;<span></span></label></span></td> -->
                                                                                    <td data-field="SNo." aria-label="1234-56" class="datatable-cell"><span style="width: 100px;">{{$a++}}</span></td>
                                                                                    <td data-field="Amount" aria-label="Rs. 30000" class="datatable-cell"><span style="width: 100px;">Rs. {{$value -> amount}}</span></td>
                                                                                    <td data-field="Reasons" aria-label="Lorem ipsum dolor sit." class="datatable-cell"><span style="width: 110px;">{{$value -> comment}}</span></td>
                                                                                </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                        <div class="datatable-pager datatable-paging-loaded">
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
                                                                            <div class="datatable-pager-info my-2 mb-sm-0">
                                                                                <div class="dropdown bootstrap-select datatable-pager-size" style="width: 60px;">
                                                                                    <!-- <select class="selectpicker datatable-pager-size" title="Select page size" data-width="60px" data-container="body" data-selected="10">
                                                                                        <option class="bs-title-option" value=""></option>
                                                                                        <option value="5">5</option>
                                                                                        <option value="10">10</option>
                                                                                        <option value="20">20</option>
                                                                                        <option value="30">30</option>
                                                                                        <option value="50">50</option>
                                                                                        <option value="100">100</option>
                                                                                    </select> -->
                                                                                    <!-- <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-5" aria-haspopup="listbox" aria-expanded="false" title="Select page size"> -->
                                                                                        <div class="filter-option">
                                                                                            <div class="filter-option-inner">
                                                                                                <!-- <div class="filter-option-inner-inner">10</div> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </button>
                                                                                    <div class="dropdown-menu ">
                                                                                        <div class="inner show" role="listbox" id="bs-select-5" tabindex="-1">
                                                                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- <span class="datatable-pager-detail">Showing 1 - 10 of 350</span> -->
                                                                                    </div>
                                                                                </div>
                                                                    </div>
                                                                    <!-- table -->
                                                                    <!--begin::Wizard Actions-->
                                                                    <div class="d-flex justify-content-between border-top pt-10 mt-15">
                                                                        <div class="mr-2">
                                                                            <button type="button" id="prev-step" class="btn btn-light-primary font-weight-bolder px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                                                        </div>
                                                                        <div>
                                                                            <button type="button" class="btn btn-success font-weight-bolder px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                                                            <!-- <button type="button" id="next-step" class="btn btn-primary font-weight-bolder px-9 py-4" data-wizard-type="action-next">Next</button> -->
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
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                      <form id="form">
                                                        {{@csrf_field()}}
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Add Cash Incentives</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <span id="error_msg" class="text-danger px-5"></span>
                                                        <span id="success_msg" class="text-success px-5"></span>
                                                        <div class="modal-body">		
                                                            <div class="row" style="margin:10px">
                                                                <div class="form-group row">
                                                                    <label class="col-xl-12 col-lg-12 col-form-label">Amount</label>
                                                                        <div class="col-lg-12 col-xl-12">
                                                                            <input class="form-control form-control-solid form-control-lg" name="amount" type="text" placeholder="Amount" value="" style="width: 100% !important;" />
                                                                            <input name="employee_id" type="hidden" value="{{session()->get('id')}}"/>
                                                                        </div>
                                                                        <span class="field_error text-danger" id="amount_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin:10px">
                                                                <div class="form-group row">
                                                                    <label class="col-xl-12 col-lg-12 col-form-label">Comment</label>
                                                                        <div class="col-lg-12 col-xl-12">
                                                                            <textarea class="form-control form-control-solid form-control-lg" name="comment" type="text" value="" style="width: 100% !important;"></textarea>
                                                                        </div>
                                                                        <span class="field_error text-danger" id="comment_error"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                      </form>
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
                <!--end::Entry-->
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
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
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
    <script>
        $(document).ready(function(){
            $("#form").submit(function(e){
            e.preventDefault();
            $('.field_error').html('');
            $.ajax({
                url:'addcashincentive',
                method:"POST",
                data:$('#form').serialize(),
                dataType:'JSON',
                success:function(result){
                if (result.status == 'error') {
                    $('#error_msg').html(result.error);
                    $.each(result.error,function(key,val){
                    // console.log(key);
                    // console.log(val);
                    $('#'+key+'_error').html(val[0]);
                    })
                }else if(result.status == 'success'){
                    $('.form')[0].reset();
                    $('#success_msg').html(result.msg);
                    window.location.reload();
                }
                },
                complete:function(){
                    $('body, html').animate({scrollTop:$('form').offset().top}, 'slow');
                }
            });
            });
        });
    </script>
</body>
<!--end::Body-->

</html>
