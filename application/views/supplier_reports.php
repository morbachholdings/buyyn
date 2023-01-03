<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Buyyn</title>
    <link href="<?php echo base_url() ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css">
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css">
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled" style="background:#F4F7F9;">
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column me-3">
                            <!--begin::Title-->
                            <h1 class="d-flex text-dark fw-bolder my-1">Reports</h1>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Container-->
                </div>
                <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                    <!--begin::Post-->
                    <div class="content flex-row-fluid" id="kt_content">
                        <!--begin::Row-->
                        <div class="row g-5 g-xl-10 mb-xl-10">
                            <div class="col-xl-12 rounded-4">
                                <div class="card card-flush h-xl-100 rounded-4 shadow-md">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <div class="col-xl-12">
                                            <!--begin::Actions-->
                                            <div class="card-toolbar w-100">
                                                <!--begin::Filters-->
                                                <div class="d-flex flex-stack flex-wrap gap-4 w-100 align-items-end justify-content-start">

                                                    <!--begin::Destination-->
                                                    <div class="col-md-3 mobile w-100 mw-300px">
                                                        <div class=" align-items-center fw-bold rounded-4">

                                                            <select name="language" id="date_from" aria-label="Select Financial Year" data-control="select2" data-placeholder="Select Financial Year..." class="form-select form-select-solid form-select-lg rounded-4">
                                                                <option value="">- Select Financial Year -</option>
                                                                <option value="2018-2019">2018-2019</option>
                                                                <option value="2019-2020">2019-2020</option>
                                                                <option value="2020-2021">2020-2021</option>
                                                                <option value="2021-2022">2021-2022</option>
                                                                <option value="2022-2023">2022-2023</option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <!--end::Destination-->
                                                    <div class="col-md-3 mobile w-100 mw-300px">
                                                        <select name="language" id="report_type" aria-label="Select Report Type" data-control="select2" data-placeholder="Select Report Type..." class="form-select form-select-solid form-select-lg">
                                                            <option value="- Select Type -">- Select Type -</option>
                                                            <option value="Member Performance">Member Performance</option>
                                                           
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 mobile w-100 mw-300px">

                                                        <!-- <input class="form-control d-flex align-items-center" value="" id="kt_tagify_suppliers" /> -->
                                                        <input class="form-control d-flex align-items-center" type="text" id="myInput" onkeyup="searchFunction()" placeholder="Search Names.." style="display: none !important;">

                                                    </div>


                                                    <div class="col-md-2 d-flex align-items-end justify-content-between">

                                                        <button class="btn btn-primary mb-0 rounded-4 shadow-md" id="btn_search">Apply</button>
                                                        <!--begin::Export dropdown-->
                                                        <button type="button" class="btn btn-light-primary mx-2 w-100" style="width:150px;" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

                                                            Export
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div id="kt_datatable_example_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded-4 menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3" data-kt-export="csv">
                                                                    Export as CSV
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Export dropdown-->
                                                        <!--begin::Hide default export buttons-->
                                                        <div id="kt_datatable_example_buttons" class="d-none"></div>
                                                        <!--end::Hide default export buttons-->

                                                    </div>
                                                    <!--begin::Search-->
                                                    <div class="d-none position-relative my-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                        <span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                                                    </div>
                                                    <!--end::Search-->
                                                </div>
                                                <!--begin::Filters-->
                                            </div>
                                            <!--end::Actions-->




                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-12 my-3 rounded-4 shadow-md">
                                <div class="card card-flush h-xl-100 rounded-4 shadow-md">
                                    <!--begin::Body-->
                                    <div class="card-body rounded-4 shadow-md">
                                        <div class="col-xl-12 rounded-4 shadow-md">
                                            <!--begin::Actions-->
                                            <div class="card-toolbar w-100 rounded-4 shadow-md">
                                                <!--begin::Filters-->
                                                <h2>Report Details</h2>
                                                <table id="kt_datatable_fixed_columns_1" class="table table-striped table-row-bordered gy-5 gs-7 rounded-4 shadow-md">
                                                    <thead class="fs-7">
                                                        <tr class="fw-semibold fs-7 text-gray-800">
                                                            <th class="min-w-200px fw-bold">Name</th>
                                                            <th class="min-w-200px">July</th>
                                                            <th class="min-w-200px">August</th>
                                                            <th class="min-w-200px">September</th>
                                                            <th class="min-w-200px">October</th>
                                                            <th class="min-w-200px">November</th>
                                                            <th class="min-w-200px">December</th>
                                                            <th class="min-w-200px">January</th>
                                                            <th class="min-w-200px">February</th>
                                                            <th class="min-w-200px">March</th>
                                                            <th class="min-w-200px">April</th>
                                                            <th class="min-w-200px">May</th>
                                                            <th class="min-w-200px">June</th>
                                                            <th class="min-w-200px fw-bold">Grand Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fs-5 ret_data">

                                                    </tbody>
                                                </table>

                                                <!--begin::Filters-->
                                            </div>
                                            <!--end::Actions-->




                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-12 my-3 rounded-4 shadow-md">
                                <div class="card card-flush h-xl-100 rounded-4 shadow-md">
                                    <!--begin::Body-->
                                    <div class="card-body rounded-4 shadow-md">
                                        <div class="col-xl-12 rounded-4 shadow-md">
                                            <!--begin::Actions-->
                                            <div class="card-toolbar w-100 rounded-4 shadow-md">
                                                <h2>Report View</h2>
                                                <div class="card card-bordered">
                                                    <div class="card-body">
                                                        <div id="kt_apexcharts_1" style="height: 350px;"></div>


                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Actions-->




                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                                <!--begin::Container-->
                                <div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
                                    <!--begin::Copyright-->
                                    <div class="text-dark order-2 order-md-1">
                                        <span class="text-muted fw-bold me-1">2022 ©</span>
                                        <a href="#" target="_blank" class="text-gray-800 text-hover-primary">SafetyHq</a>
                                    </div>
                                    <!--end::Copyright-->
                                    <!--begin::Menu-->
                                    <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                                        <li class="menu-item">
                                            <span class="text-muted fw-bold me-1">Powered by:</span>
                                            <a href="#" target="_blank" class="text-gray-800 text-hover-primary">Buyyn</a>
                                        </li>

                                    </ul>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Container-->
                            </div>


                        </div>
                    </div>
                </div>


                <!-- <script src="<?php echo base_url() ?>assets/js/charts/percent.js"></script>
            <script src="<?php echo base_url() ?>assets/js/charts/radar.js"></script> -->
                <script src="<?php echo base_url() ?>assets/js/charts/Animated.js"></script>
                <!-- <script src="<?php echo base_url() ?>assets/js/charts/map.js"></script>
            <script src="<?php echo base_url() ?>assets/js/charts/worldLow.js"></script>
            <script src="<?php echo base_url() ?>assets/js/charts/continentsLow.js"></script>
            <script src="<?php echo base_url() ?>assets/js/charts/usaLow.js"></script>
            <script src="<?php echo base_url() ?>assets/js/charts/worldTimeZonesLow.js"></script>
            <script src="<?php echo base_url() ?>assets/js/charts/worldTimeZoneAreasLow.js"></script> -->
                <script src="<?php echo base_url() ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
                <!--end::Vendors Javascript-->
                <!--begin::Custom Javascript(used by this page)-->
                <script src="<?php echo base_url() ?>assets/js/widgets.bundle.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/widgets.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/apps/chat/chat.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/utilities/modals/users-search.js"></script>
                <!-- <script src="<?php echo base_url() ?>assets/js/custom/graph/supplierPerformance-bar.js"></script> -->
                <!-- <script src="<?php echo base_url() ?>assets/js/custom/graph/supplierPerformance-line.js"></script> -->

                <script src="<?php echo base_url() ?>assets/js/custom/account/settings/profile-details.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/pages/user-profile/general.js"></script>

                <script src="<?php echo base_url() ?>assets/js/custom/utilities/modals/upgrade-plan.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/utilities/modals/create-app.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/utilities/modals/new-target.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/utilities/modals/users-search.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/Date/datePicker.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/Table/pagination.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/Table/tagifySupplier.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/Table/tagifyMember.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/Table/reportTable.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/Table/barChart.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/Table/tableSearch.js"></script>
                <script src="<?php echo base_url() ?>assets/js/custom/Table/rebates/exportReport.js"></script>


                <script>
                    $(document).ready(function() {

                        var element = document.getElementById('kt_apexcharts_1');

                        function load_memberwise_data(date_from, date_to) {
                            $.ajax({
                                url: "<?php echo base_url(); ?>Charts/all_member_data",
                                method: "POST",
                                data: {
                                    date_from:date_from,
                                    date_to:date_to
                                },
                                dataType: "JSON",
                                success: function(data) {

                                    drawMonthwiseChart(data);
                                }
                            })
                        }

                        function load_suplierwise_data(date_from, date_to) {
                            $.ajax({
                                url: "<?php echo base_url(); ?>Charts/all_supplier_data",
                                method: "POST",
                                data: {
                                    date_from:date_from,
                                    date_to:date_to
                                },
                                dataType: "JSON",
                                success: function(data) {

                                    drawMonthwiseChart(data);
                                }
                            })
                        }



                        function drawMonthwiseChart(chart_data) {
                            var jsonData = (chart_data);


                            var options = {
                                series: [{
                                    name: 'Net Profit',

                                    data: jsonData
                                }],
                                chart: {
                                    fontFamily: 'inherit',
                                    type: 'bar',
                                    height: height,
                                    toolbar: {
                                        show: false
                                    }
                                },
                                plotOptions: {
                                    bar: {
                                        horizontal: false,
                                        columnWidth: ['20%'],
                                        endingShape: 'rounded'
                                    },
                                },
                                legend: {
                                    show: false
                                },
                                dataLabels: {
                                    enabled: false
                                },
                                stroke: {
                                    show: true,
                                    width: 2,
                                    colors: ['transparent']
                                },
                                xaxis: {
                                    categories: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                                    axisBorder: {
                                        show: false,
                                    },
                                    axisTicks: {
                                        show: false
                                    },
                                    labels: {
                                        style: {
                                            colors: labelColor,
                                            fontSize: '12px'
                                        }
                                    }
                                },
                                yaxis: {
                                    labels: {
                                        style: {
                                            colors: labelColor,
                                            fontSize: '12px'
                                        }
                                    }
                                },
                                fill: {
                                    opacity: 1
                                },
                                states: {
                                    normal: {
                                        filter: {
                                            type: 'none',
                                            value: 0
                                        }
                                    },
                                    hover: {
                                        filter: {
                                            type: 'none',
                                            value: 0
                                        }
                                    },
                                    active: {
                                        allowMultipleDataPointsSelection: false,
                                        filter: {
                                            type: 'none',
                                            value: 0
                                        }
                                    }
                                },
                                tooltip: {
                                    style: {
                                        fontSize: '12px'
                                    },
                                    y: {
                                        formatter: function(val) {
                                            return '$' + val + ' thousands'
                                        }
                                    }
                                },
                                colors: [baseColor, secondaryColor],
                                grid: {
                                    borderColor: borderColor,
                                    strokeDashArray: 4,
                                    yaxis: {
                                        lines: {
                                            show: true
                                        }
                                    }
                                }
                            };

                            var chart = new ApexCharts(element, options);
                            chart.render();
                        }



                        $('#btn_search').click(function() {
                            var date_from = "";
                            var date_to = "";
                            var date = $('#date_from').val();

                            if (date == "2018-2019") {
                                date_from = "2018";
                                date_to = "2019";
                            } else if (date == "2019-2020") {
                                date_from = "2019";
                                date_to = "2020";
                            } else if (date == "2020-2021") {
                                date_from = "2020";
                                date_to = "2021";
                            } else if (date == "2021-2022") {
                                date_from = "2021";
                                date_to = "2022";
                            } else if (date == "2022-2023") {
                                date_from = "2022";
                                date_to = "2023";
                            } else {
                                swal.fire({
                                    text: "Select a date range",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light-primary"
                                    }
                                });
                            }
                            var type = $('#report_type').val();
                            if (type == "- Select Type -") {
                                swal.fire({
                                    text: "Select a report type",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light-primary"
                                    }
                                });
                            } else if (type == "Member Performance") {
                                document.getElementById('myInput').style.display = 'block';
                                $('#kt_datatable_fixed_columns_1').find("tr:gt(0)").remove();
                                user_group = 3;

                                const formatter = new Intl.NumberFormat('en-US', {
                                    style: 'currency',
                                    currency: 'AUD',
                                });

                                $.ajax({
                                    url: "<?php echo base_url(); ?>Reports/view_member_report_supplier",
                                    method: "POST",
                                    data: {
                                        date_from: date_from,
                                        date_to: date_to,
                                        user_group: user_group

                                    },
                                    success: function(data) {
                                        var added = $.parseJSON(data);
                                        if (added.status == 1) {
                                            var values = added.ret_data;

                                            var html = "";
                                            var july = 0;
                                            var august = 0;
                                            var september = 0;
                                            var october = 0;
                                            var november = 0;
                                            var december = 0;
                                            var january = 0;
                                            var february = 0;
                                            var march = 0;
                                            var april = 0;
                                            var may = 0;
                                            var june = 0;
                                            var total = 0;
                                            var gj = 0;
                                            var ga = 0;
                                            var gs = 0;
                                            var go = 0;
                                            var gn = 0;
                                            var gd = 0;
                                            var gjan = 0;
                                            var gfeb = 0;
                                            var gmar = 0;
                                            var gapr = 0;
                                            var gmay = 0;
                                            var gjune = 0;

                                            html += '<tr style="display:none">';
                                            html += '<td></td>';
                                            html += '<td></td>';
                                            html += '<td></td>';
                                            html += '<td></td>';
                                            html += '<td></td>';
                                            html += '<td></td>';
                                            html += '<td></td>';
                                            html += '<td></td>';
                                            html += '<td></td>';
                                            html += '<td></td>';
                                            html += '<td></td>';
                                            html += '<td></td>';
                                            html += '<td></td>';


                                            html += '</tr>';

                                            $.each(values, function(index) {
                                                html += '<tr>';

                                                html += '<td>' + values[index].name + '</td>';
                                                if (values[index].July == null) {
                                                    html += '<td>$ 0</td>';
                                                    july = 0;
                                                } else {
                                                    html += '<td>$ ' + values[index].July + '</td>';
                                                    var a = parseFloat(values[index].July)
                                                    july += a;
                                                }

                                                if (values[index].August == null) {
                                                    html += '<td>$ 0</td>';
                                                    december = 0;
                                                } else {
                                                    html += '<td>$ ' + values[index].August + '</td>';
                                                    var b = parseFloat(values[index].August);
                                                    august += b;
                                                }
                                                if (values[index].September == null) {
                                                    html += '<td>$ 0</td>';
                                                    november = 0;
                                                } else {
                                                    html += '<td>$ ' + values[index].September + '</td>';
                                                    var c = parseFloat(values[index].September);
                                                    september += c;
                                                }
                                                if (values[index].October == null) {
                                                    html += '<td>$ 0</td>';
                                                    october = 0;
                                                } else {
                                                    html += '<td>$ ' + values[index].October + '</td>';
                                                    var d = parseFloat(values[index].October);
                                                    october += d;
                                                }
                                                if (values[index].November == null) {
                                                    html += '<td>$ 0</td>';
                                                    november = 0;
                                                } else {
                                                    html += '<td>$ ' + values[index].November + '</td>';
                                                    var e = parseFloat(values[index].November);
                                                    november += e;
                                                }
                                                if (values[index].December == null) {
                                                    html += '<td>$ 0</td>';
                                                    december = 0;
                                                } else {
                                                    html += '<td>$ ' + values[index].December + '</td>';
                                                    var f = parseFloat(values[index].December);
                                                    december += f;
                                                }
                                                if (values[index].January == null) {
                                                    html += '<td>$ 0</td>';
                                                    january = 0;
                                                } else {
                                                    html += '<td>$ ' + values[index].January + '</td>';
                                                    var g = parseFloat(values[index].January);
                                                    january += g;
                                                }
                                                if (values[index].February == null) {
                                                    html += '<td>$ 0</td>';
                                                    february = 0;
                                                } else {
                                                    html += '<td>$ ' + values[index].February + '</td>';
                                                    var h = parseFloat(values[index].February);
                                                    february += h
                                                }
                                                if (values[index].March == null) {
                                                    html += '<td>$ 0</td>';
                                                    march = 0;
                                                } else {
                                                    html += '<td>$ ' + values[index].March + '</td>';
                                                    var i = parseFloat(values[index].March);
                                                    march += i;
                                                }
                                                if (values[index].April == null) {
                                                    html += '<td>$ 0</td>';
                                                    april = 0;
                                                } else {
                                                    html += '<td>$ ' + values[index].April + '</td>';
                                                    var j = parseFloat(values[index].April);
                                                    april += j;
                                                }
                                                if (values[index].May == null) {
                                                    html += '<td>$ 0</td>';
                                                    may = 0;
                                                } else {
                                                    html += '<td>$ ' + values[index].May + '</td>';
                                                    var k = parseFloat(values[index].May);
                                                    may += k;
                                                }
                                                if (values[index].June == null) {
                                                    html += '<td>$ 0</td>';
                                                    june = 0;
                                                } else {
                                                    html += '<td>$ ' + values[index].June + '</td>';

                                                    var l = parseFloat(values[index].June);
                                                    june += l
                                                }
                                                if (values[index].row_total == null) {
                                                    html += '<td>$ 0</td>';
                                                    total = 0;
                                                } else {
                                                    html += '<td>$ ' + values[index].row_total + '</td>';

                                                    var m = parseFloat(values[index].row_total);
                                                    total += m
                                                }
                                                gj += parseFloat(values[index].July);
                                                ga += parseFloat(values[index].August);
                                                gs += parseFloat(values[index].September);
                                                go += parseFloat(values[index].October);
                                                gn += parseFloat(values[index].November);
                                                gd += parseFloat(values[index].December);
                                                gjan += parseFloat(values[index].January);
                                                gfeb += parseFloat(values[index].February);
                                                gmar += parseFloat(values[index].March);
                                                gapr += parseFloat(values[index].April);
                                                gmay += parseFloat(values[index].May);
                                                gjune += parseFloat(values[index].June);



                                            });

                                            html += '<tr>';
                                            html += '<td><b>Grand Total</b></td>';

                                            html += '<td><b>$ ' + parseFloat(gj).toFixed(2) + '</b></td>';
                                            html += '<td><b>$ ' + parseFloat(ga).toFixed(2) + '</b></td>';
                                            html += '<td><b>$ ' + parseFloat(gs).toFixed(2) + '</b></td>';
                                            html += '<td><b>$ ' + parseFloat(go).toFixed(2) + '</b></td>';
                                            html += '<td><b>$ ' + parseFloat(gn).toFixed(2) + '</b></td>';
                                            html += '<td><b>$ ' + parseFloat(gd).toFixed(2) + '</b></td>';
                                            html += '<td><b>$ ' + parseFloat(gjan).toFixed(2) + '</b></td>';
                                            html += '<td><b>$ ' + parseFloat(gfeb).toFixed(2) + '</b></td>';
                                            html += '<td><b>$ ' + parseFloat(gmar).toFixed(2) + '</b></td>';
                                            html += '<td><b>$ ' + parseFloat(gapr).toFixed(2) + '</b></td>';
                                            html += '<td><b>$ ' + parseFloat(gmay).toFixed(2) + '</b></td>';
                                            html += '<td><b>$ ' + parseFloat(gjune).toFixed(2) + '</b></td>';
                                            html += '</tr>';
                                            //var data = [july, august, september, october, november, december, january, february, march, april, may, june]

                                            $('.ret_data').append(html);
                                            load_memberwise_data(date_from,date_to);


                                        }
                                    },
                                });


                            } 

                        });
                    });
                </script>

</body>

</html>