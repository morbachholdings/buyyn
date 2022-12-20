<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Log - Buyyn</title>
</head>

<body style="background: rgb(244, 247, 249);">
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-column flex-column-fluid">
            <div class="wrapper d-flex flex-column flex-row-fluid container-xxl" id="kt_wrapper">
                <!--begin::Toolbar-->
                <div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">

                </div>
                <!--end::Toolbar-->
                <!--begin::Main-->
                <div class="d-flex flex-row flex-column-fluid align-items-stretch">
                    <!--begin::Content-->
                    <div class="content flex-row-fluid" id="kt_content">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <!--begin::Export dropdown-->
                                    <button type="button" class="btn btn-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr091.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="currentColor" />
                                                <path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.49 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="currentColor" />
                                                <path opacity="0.3" d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Export Report
                                    </button>
                                    <!--begin::Menu-->
                                    <div id="kt_datatable_example_export_menu" data-kt-menu="true" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="copy">Copy to clipboard</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="excel">Export as Excel</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="csv">Export as CSV</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="pdf">Export as PDF</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Export dropdown-->
                                    <!--begin::Hide default export buttons-->
                                    <div id="kt_datatable_example_buttons" class="d-none"></div>

                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body">
                                    <!--begin::Table-->
                                    <table class="table align-middle rounded table-row-dashed fs-6 g-5" id="kt_datatable_example">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase">
                                                <th class="min-w-100px">First Name</th>
                                                <th class="min-w-100px">Title</th>
                                                <th class="min-w-100px">Device</th>
                                                <th class="min-w-100px">IP Address</th>
                                                <th class="text-end min-w-75px">Date & Time</th>
                                                <th class="text-end min-w-75px">Code</th>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600">
                                            <?php foreach ($all_processors->result() as $row) { ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $row->First_name ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->title ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->device ?>
                                                    </td>
                                                    <td><?php echo $row->ip_address ?></td>
                                                    <td class="text-end pe-0"><?php echo $row->process_time ?></td>
                                                    <td class="text-end pe-0">
                                                        <?php if ($row->process_type_id == 200) { ?>
                                                            <span class="badge py-3 px-4 fs-7 badge-light-success">200 OK</span>
                                                        <?php }else if($row->process_type_id == 522){ ?>
                                                            <span class="badge py-3 px-4 fs-7 badge-light-warning">522 Warning</span>
                                                        <?php }else{ ?>
                                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">404 Error</span>
                                                        <?php } ?>

                                                    </td>

                                                </tr>
                                            <?php } ?>


                                        </tbody>
                                    </table>
                                    <!--end::Card body-->
                                </div>

                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Main-->
                        <!--begin::Footer-->
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

                        <!--end::Footer-->
                    </div>
                </div>
            </div>
            <script>
                "use strict";

                // Class definition
                var KTDatatablesExample = function() {
                    // Shared variables
                    var table;
                    var datatable;

                    // Private functions
                    var initDatatable = function() {
                        // Set date data order
                        const tableRows = table.querySelectorAll('tbody tr');

                        tableRows.forEach(row => {
                            const dateRow = row.querySelectorAll('td');
                            const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT").format(); // select date from 4th column in table
                            dateRow[3].setAttribute('data-order', realDate);
                        });

                        // Init datatable --- more info on datatables: https://datatables.net/manual/
                        datatable = $(table).DataTable({
                            "info": false,
                            'order': [],
                            'pageLength': 10,
                        });
                    }

                    // Hook export buttons
                    var exportButtons = () => {
                        const documentTitle = 'Customer Orders Report';
                        var buttons = new $.fn.dataTable.Buttons(table, {
                            buttons: [{
                                    extend: 'copyHtml5',
                                    title: documentTitle
                                },
                                {
                                    extend: 'excelHtml5',
                                    title: documentTitle
                                },
                                {
                                    extend: 'csvHtml5',
                                    title: documentTitle
                                },
                                {
                                    extend: 'pdfHtml5',
                                    title: documentTitle
                                }
                            ]
                        }).container().appendTo($('#kt_datatable_example_buttons'));

                        // Hook dropdown menu click event to datatable export buttons
                        const exportButtons = document.querySelectorAll('#kt_datatable_example_export_menu [data-kt-export]');
                        exportButtons.forEach(exportButton => {
                            exportButton.addEventListener('click', e => {
                                e.preventDefault();

                                // Get clicked export value
                                const exportValue = e.target.getAttribute('data-kt-export');
                                const target = document.querySelector('.dt-buttons .buttons-' + exportValue);

                                // Trigger click event on hidden datatable export buttons
                                target.click();
                            });
                        });
                    }

                    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
                    var handleSearchDatatable = () => {
                        const filterSearch = document.querySelector('[data-kt-filter="search"]');
                        filterSearch.addEventListener('keyup', function(e) {
                            datatable.search(e.target.value).draw();
                        });
                    }

                    // Public methods
                    return {
                        init: function() {
                            table = document.querySelector('#kt_datatable_example');

                            if (!table) {
                                return;
                            }

                            initDatatable();
                            exportButtons();
                            handleSearchDatatable();
                        }
                    };
                }();

                // On document ready
                KTUtil.onDOMContentLoaded(function() {
                    KTDatatablesExample.init();
                });
            </script>

</body>

</html>