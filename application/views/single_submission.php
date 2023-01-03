<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach ($supplier_data->result() as $row) { ?>
        <title><?php echo $row->reference_number ?> - Submission</title>
    <?php } ?>
</head>

<body style="background: rgb(244, 247, 249);">
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
                            <h1 class="d-flex text-dark fw-bolder my-1">Submission Details</h1>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Container-->
                </div>
                <div id="kt_content_container" class="container">
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-md-4 mb-xl-10">
                            <!--begin::Card widget 28-->
                            <div class="card card-flush">
                                <!--begin::Header-->

                                <!--end::Card title-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end">
                                    <!--begin::Wrapper-->
                                    <?php foreach ($supplier_data->result() as $row) { ?>
                                        <div class="d-flex flex-column">
                                            <span class="fw-bolder fs-2x text-dark"><?php echo $row->financial_year ?></span>
                                            <span class="fw-bold fs-7 text-gray-500">Financial Year</span>
                                        </div>
                                    <?php } ?>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 28-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 mb-xl-10">
                            <!--begin::Card widget 28-->
                            <div class="card card-flush">
                                <!--begin::Header-->

                                <!--end::Card title-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end">
                                    <!--begin::Wrapper-->
                                    <?php foreach ($supplier_data->result() as $row) { ?>
                                        <div class="d-flex flex-column">
                                            <span class="fw-bolder fs-2x text-dark"><?php echo $row->financial_month ?></span>
                                            <span class="fw-bold fs-7 text-gray-500">Financial Month</span>
                                        </div>
                                    <?php } ?>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 28-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 mb-xl-10">
                            <!--begin::Card widget 28-->
                            <div class="card card-flush">
                                <!--begin::Header-->

                                <!--end::Card title-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end">
                                    <!--begin::Wrapper-->
                                    <?php foreach ($supplier_data->result() as $row) { ?>
                                        <div class="d-flex flex-column">
                                            <span class="fw-bolder fs-2x text-dark"><?php echo $row->Company_name ?></span>
                                            <span class="fw-bolder fs-2x text-dark">$ <?php echo number_format((float)$row->amount, 2, '.', ','); ?></span>
                                            <span class="fw-bold fs-7 text-gray-500">Supplier</span>
                                        </div>
                                    <?php } ?>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 28-->
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row">
                        <div class="card">
                            <table id="kt_datatable_dom_positioning" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800 px-7">
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Date Placed</th>
                                        <th>Added By</th>
                                        <th>&nbsp;</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($member_data->result() as $row) { ?>
                                        <tr>
                                            <td><?php echo $row->member_name ?></td>
                                            <td>$ <?php echo number_format((float)$row->amount, 2, '.', ',') ?></td>
                                            <td><?php echo $row->date_placed ?></td>

                                            <?php foreach ($get_user->result() as $row) { ?>
                                                <td><?php echo $row->firstName ?></td>
                                            <?php } ?>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-5 m-0">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="javascript:;" target="_blank" class="menu-link px-3">Edit</a>
                                                    </div>
                                                    <!--end::Menu item-->


                                                </div>
                                                <!--end::Menu-->
                                            </td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <?php foreach ($supplier_data->result() as $row) { ?>
                                <button class="btn btn-danger col-md-3" refNum="<?php echo $row->reference_number ?>" id="btnDelete">Delete Submission</button>
                            <?php } ?>
                        </div>
                    </div>

                    <div id="kt_app_footer" class="app-footer align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&copy;</span>
                            <a href="https://buyyn.io" target="_blank" class="text-gray-800 text-hover-primary">Buyyn.io</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1"></ul>
                        <!--end::Menu-->
                    </div>
                </div>



            </div>

        </div>


    </div>
    <script>
        $("#kt_datatable_dom_positioning").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });

        // Delete Submissions
        $('#btnDelete').click(function() {
            var reference = $(this).attr('refNum');
            Swal.fire({
                text: "Are you sure you want to delete ?",
                icon: "warning",
                showCancelButton: !0,
                buttonsStyling: !1,
                confirmButtonText: "Yes, Delete!",
                cancelButtonText: "No",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            }).then((function(e) {
                if (e.value) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>submissions/submission_deleted",
                        method: "POST",
                        data: {
                            reference: reference,

                        },
                        success: function(data) {
                            swal.fire({
                                text: reference+" Deleted !",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            }).then(function() {
                                location.reload();
                            });

                        }
                    });



                } else {

                }
            }))
        });
    </script>
</body>

</html>