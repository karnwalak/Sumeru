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
    <style>
        #button {
            height: 30px;
            width: 80px;
            border: none;
            border-radius: 5px;
            background: green;
            color: white;
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
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
                        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center flex-wrap mr-2">
                                <!--begin::Title-->
                                <!-- <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Employees</h5> -->
                                <!--end::Title-->
                                <!--begin::Separator-->
                                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                                <!--end::Separator-->
                                <!--begin::Group Actions-->
                                <div class="d-flex- align-items-center flex-wrap mr-2 d-none" id="kt_subheader_group_actions">
                                    <div class="text-dark-50 font-weight-bold">
                                        <span id="kt_subheader_group_selected_rows">23</span>Selected:
                                    </div>
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
                                <a href="/metronic/demo4/.html" class=""></a>
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
                            <!--begin::Card-->
                            <div class="card card-custom">
                                <!--begin::Header-->
                                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                    <div class="card-title">
                                        <h3 class="card-label">Daily Reports
                                            <!-- <span class="d-block text-muted pt-2 font-size-sm">User management made easy</span> -->
                                        </h3>
                                    </div>
                                    <div class="card-toolbar">
                                        <!--begin::Button-->
                                        <a href="#">
                                            <a href="adddailyreports" class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2">Add Daily Reports</a>
                                        </a>
                                        <!--end::Button-->
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin: Datatable-->
                                    <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
                                        <table class="datatable-table" style="display: block;">
                                            <thead class="datatable-head">
                                                <tr class="datatable-row" style="left: 0px;">
                                                    <th data-field="RecordID" class="datatable-cell-left datatable-cell datatable-cell-sort datatable-cell-sorted" data-sort="asc"><span style="width: 40px;">S No.</span></th>
                                                    <th data-field="Name" class="datatable-cell datatable-cell-sort"><span style="width: 170px;">Name</span></th>
                                                    <th data-field="EmployeeID" class="datatable-cell datatable-cell-sort" data-sort="asc"><span style="width: 110px;">Employee ID</span></th>
                                                    <th data-field="Department" class="datatable-cell datatable-cell-sort"><span style="width: 110px;">Department</span></th>
                                                    <th data-field="Title" class="datatable-cell datatable-cell-sort"><span style="width: 110px;">Title</span></th>
                                                    <th data-field="DOC" class="datatable-cell datatable-cell-sort"><span style="width: 110px;">DOC</span></th>
                                                    <th data-field="Date&Time" class="datatable-cell datatable-cell-sort"><span style="width: 170px;">Date&Time</span></th>
                                                    <th data-field="Actions" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort"><span style="width: 130px;">Actions</span></th>
                                                </tr>
                                            </thead>
                                            <tbody style="" class="datatable-body">
                                            <?php $a = 1; ?>
                                            @foreach($data as $value)
                                                <tr data-row="0" class="datatable-row" style="left: 0px;">
                                                    <td class="datatable-cell-sorted datatable-cell-left datatable-cell" data-field="RecordID" aria-label="1"><span style="width: 40px;"><span class="font-weight-bolder">{{$a++}}</span></span></td>
                                                    <td data-field="Name" aria-label="64616-103" class="datatable-cell">
                                                        <span style="width: 170px;">
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-40 symbol-sm flex-shrink-0"> <img class="" src="/../upload/{{$value -> employee_img}}" alt="photo"> </div>
                                                                <div class="ml-4">
                                                                    <div class="text-dark-75 font-size-lg mb-0">{{$value -> employee_name}}</div>
                                                                    <!-- <a href="#" class="text-muted font-weight-bold text-hover-primary">hboule0@hp.com</a>								 -->
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </td>
                                                    <td data-field="EmployeeID" aria-label="10/15/2017" class="datatable-cell">
                                                        <span style="width: 110px;">
                                                            <div class=" mb-0">#{{$value -> employee_id}}</div>
                                                            <!-- <div class="text-muted">Rejected</div> -->
                                                        </span>
                                                    </td>
                                                    <td data-field="Department" aria-label="10/15/2017" class="datatable-cell">
                                                        <span style="width: 110px;">
                                                            <div class=" mb-0">
                                                                <?php 
																$pid = $value -> department_id;
																$pdata = DB::SELECT("SELECT * FROM hr_departments WHERE id = $pid"); 
																foreach ($pdata as  $pval) {
																}
																echo $pval -> name;
															?>
                                                            </div>
                                                            <!-- <div class="text-muted">Rejected</div> -->
                                                        </span>
                                                    </td>
                                                    <td data-field="Title" aria-label="Casper-Kerluke" class="datatable-cell">
                                                        <span style="width: 110px;">
                                                            <div class=" mb-0">{{$value -> title}}</div>
                                                        </span>
                                                    </td>
                                                    <td data-field="DOC" aria-label="Casper-Kerluke" class="datatable-cell">
                                                        <span style="width: 110px;">
                                                            <div class=" mb-0"> <a href="/../upload/{{$value -> doc_upload}}">View</a></div>
                                                        </span>
                                                    </td>
                                                    <td data-field="Date&Time" aria-label="Casper-Kerluke" class="datatable-cell">
                                                        <span style="width: 170px;">
                                                            <div class=" mb-0">{{$value -> date_time}}</div>
                                                        </span>
                                                    </td>
                                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
                                                        <span style="overflow: visible; position: relative; width: 130px;">
                                                            <a href="viewdailyreports/{{$value -> id}}" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" title="Edit details">
                                                                <span class="svg-icon svg-icon-md">
                                                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                        <path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                            <a href="editdailyreports/{{$value -> id}}" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" title="Edit details">
                                                                <span class="svg-icon svg-icon-md">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>
                                                                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
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
                                                    <!-- <select class="selectpicker datatable-pager-size" title="10" data-width="60px" data-container="body" data-selected="10">
                                                        <option class="bs-title-option" value=""></option>
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="30">30</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> -->
                                                    <!-- <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Select page size"> -->
                                                    <div class="filter-option">
                                                        <div class="filter-option-inner">
                                                            <!-- <div class="filter-option-inner-inner">10</div> -->
                                                        </div>
                                                    </div>
                                                    </button>
                                                    <div class="dropdown-menu ">
                                                        <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">
                                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <span class="datatable-pager-detail">Showing 1 - 10 of 350</span> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Datatable-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
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
    <script>
        // var count = 1;
        // function setColor(btn, color) {
        //     var property = document.getElementById(btn);
        //     if (count == 0) {
        //         property.style.backgroundColor = "green";
        // 		document.getElementById(btn).value ="Active";
        //         count = 1;        
        //     }
        //     else {
        //         property.style.backgroundColor = "red";
        // 		document.getElementById(btn).value ="Inactive";
        //         count = 0;
        //     }
        // }
        // document.getElementById("button").style.background='#000000';
        function setColor(e, btn, color) {
            var target = e.target,
                count = +target.dataset.count;

            target.style.backgroundColor = count === 1 ? "green" : '#ff0000';
            target.dataset.count = count === 1 ? 0 : 1;
        }

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
