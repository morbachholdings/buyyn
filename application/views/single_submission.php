<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHQ54954 - Submission</title>
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
                                       

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($member_data->result() as $row){ ?>
                                    <tr>
                                        <td><?php echo $row->member_name ?></td>
                                        <td>$ <?php echo number_format((float)$row->amount, 2, '.', ',') ?></td>
                                        <td><?php echo $row->date_placed ?></td>

                                        <?php foreach($get_user->result() as $row){ ?>
                                        <td><?php echo $row->firstName ?></td>
                                        <?php } ?>

                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <button class="btn btn-danger col-md-3">Delete Submission</button>
                        </div>
                    </div>

                    <div id="kt_app_footer" class="app-footer align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2022&copy;</span>
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
    </script>
</body>

</html>