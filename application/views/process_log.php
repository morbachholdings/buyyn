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
                    <div class="row g-5 g-xl-10 mb-xl-10 rounded-4 shadow-md">
                            <div class="col-xl-12 rounded-4 shadow-md">
                                <!--begin::Card-->
                                <div class="card rounded-4 shadow-md">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 pt-6">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <!--begin::Search-->
                                            <div class="d-flex align-items-center position-relative my-1">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                            height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <input type="text" data-kt-customer-table-filter="search"
                                                    class="form-control form-control-solid w-250px ps-15"
                                                    placeholder="Search Customers" />
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--begin::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Toolbar-->
                                            <div class="d-flex justify-content-end"
                                                data-kt-customer-table-toolbar="base">
                                                <!--begin::Filter-->
                                                <div class="w-250px mobile">
                                                    <!--begin::Select2-->
                                                    <select class="form-select form-select-solid" data-control="select2"
                                                        data-hide-search="true" data-placeholder="Log ID"
                                                        data-kt-ecommerce-order-filter="status">
                                                        <option></option>
                                                        <option value="404 Error">404 Error</option>
                                                        <option value="200 OK">200 OK</option>
                                                        
                                                    </select>
                                                    <!--end::Select2-->
                                                </div>
                                                <!--end::Filter-->

                                            </div>
                                            <!--end::Toolbar-->
                                            <!--begin::Group actions-->
                                            <div class="d-flex justify-content-end align-items-center d-none"
                                                data-kt-customer-table-toolbar="selected">
                                                <div class="fw-bold me-5">
                                                    <span class="me-2"
                                                        data-kt-customer-table-select="selected_count"></span>Selected
                                                </div>
                                                <button type="button" class="btn btn-danger"
                                                    data-kt-customer-table-select="delete_selected">Delete
                                                    Selected</button>
                                            </div>
                                            <!--end::Group actions-->
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5"
                                            id="kt_ecommerce_products_table_1">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

                                                    <th class="min-w-125px">FIRST NAME</th>
                                                    <th class="min-w-125px">TITLE</th>
                                                    <th class="min-w-125px">DEVICE</th>
                                                    <th class="min-w-125px">IP ADDRESS</th>
                                                    <th class="min-w-125px">DATE & TIME</th>
                                                    <th class="min-w-125px">CODE</th>

                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
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
                                                    <td class="text-start pe-0"><?php echo $row->process_time ?></td>
                                                    <td class="text-start pe-0">
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
                                            <!--end::Table body-->
                                        </table></div>
                                        
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                               
                            </div>
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