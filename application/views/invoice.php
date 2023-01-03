<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach ($invoice_data->result() as $row) { ?>
    <title><?php echo $row->reference_number ?> - Invoice</title>
<?php } ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used by this page)-->
    <link href="<?php echo base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body style="background: rgb(244, 247, 249);">
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column container">
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="container">
                                <!-- begin::Invoice 3-->
                                <div class="card">
                                    <!-- begin::Body-->
                                    <div class="card-body py-20">
                                        <!-- begin::Wrapper-->
                                        <div class="mw-lg-950px mx-auto w-100">
                                            <!-- begin::Header-->
                                            <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                                                <h4 class="fw-bolder text-gray-800 fs-2qx pe-5 pb-7">INVOICE</h4>
                                                <!--end::Logo-->
                                                <div class="text-sm-end">
                                                    <!--begin::Logo-->
                                                    <a href="#" class="d-block mw-150px ms-sm-auto">
                                                        <img alt="Logo" src="<?php echo base_url() ?>assets/media/profile/website_logo.png" class="w-50" />
                                                    </a>
                                                    <!--end::Logo-->
                                                    <!--begin::Text-->
                                                    <div class="text-sm-end fw-semibold fs-4 text-muted mt-7">
                                                        <div>Unit B6, 2 Westall Rd, Clayton</div>
                                                        <div>VIC 3168</div>
                                                    </div>
                                                    <div class="text-sm-end fw-semibold fs-4 text-muted mt-7">
                                                        <div><i class="fa-solid fa-phone"></i>&nbsp; <a href="tel: (03) 8838 8760"> (03) 8838 8760</a></div>
                                                        <div><i class="fa-solid fa-fax"></i>&nbsp; (03) 8838 8710</div>
                                                        <div><i class="fa-solid fa-envelope"></i>&nbsp; <a href="mailto:info@safetyheadquarters.com.au">info@safetyheadquarters.com.au</a></div>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="pb-12">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-column gap-7 gap-md-10">
                                                    <!--begin::Message-->
                                                    <div class="fw-bold fs-2">
                                                        <?php foreach ($invoice_data->result() as $row) { ?>
                                                            Dear <?php echo $row->Company_name ?>
                                                            <span class="fs-6">(<?php echo $row->Email ?>)</span>,
                                                        <?php } ?>
                                                        <br />
                                                        <span class="text-muted fs-5">Here are your order details. We thank you for your purchase.</span>
                                                    </div>
                                                    <!--begin::Message-->
                                                    <!--begin::Separator-->
                                                    <div class="separator"></div>
                                                    <!--begin::Separator-->
                                                    <!--begin::Order details-->
                                                    <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                                                        <?php foreach ($invoice_data->result() as $row) { ?>
                                                            <div class="flex-root d-flex flex-column">
                                                                <span class="text-muted">Order ID</span>
                                                                <span class="fs-5">#<?php echo $row->Invoice_ID ?></span>
                                                            </div>
                                                            <div class="flex-root d-flex flex-column">
                                                                <span class="text-muted">Date Placed</span>
                                                                <?php $date = date_create($row->date_placed) ?>
                                                                <span class="fs-5"><?php echo date_format($date, "d-F-Y"); ?></span>
                                                            </div>
                                                            <div class="flex-root d-flex flex-column">
                                                                <span class="text-muted">Reference Number</span>
                                                                <span class="fs-5">#<?php echo $row->reference_number ?></span>
                                                            </div>
                                                            <div class="flex-root d-flex flex-column">
                                                                <span class="text-muted">Financial Month & Year</span>
                                                                <span class="fs-5"><?php echo $row->financial_month ?> - <?php echo $row->financial_year ?></span>
                                                            </div>
                                                        <?php } ?>
                                                    </div>

                                                    <div class="d-flex justify-content-between flex-column">
                                                        <!--begin::Table-->
                                                        <div class="table-responsive border-bottom mb-9">
                                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                                <thead>
                                                                    <tr class="border-bottom fs-6 fw-bold text-muted">
                                                                        <th class="min-w-175px pb-2">Member Name</th>
                                                                        <th class="min-w-70px text-end pb-2">Reference Number</th>
                                                                        <th class="min-w-80px text-end pb-2"></th>
                                                                        <th class="min-w-100px text-end pb-2">Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fw-semibold text-gray-600">
                                                                <?php foreach ($invoice_member_data->result() as $row) { ?>
                                                                    <tr>
                                                                        <!--begin::Product-->
                                                                        <td>
                                                                            <div class="fw-bold"><?php echo $row->Company_name ?></div>
                                                                        </td>
                                                                        <!--end::Product-->
                                                                        <!--begin::SKU-->
                                                                        <td class="text-end"><?php echo $row->financial_month ?> - <?php echo $row->financial_year ?></td>
                                                                        <td class="text-end">&nbsp;</td>
                                                                        <td class="text-end">$<?php echo number_format($row->amount,2) ?></td>
                                                                        <!--end::Total-->
                                                                    </tr>
                                                                    <?php } ?>
                                                                   
                                                                    <!--end::Products-->
                                                                    <?php foreach ($invoice_data->result() as $row) { ?>
                                                                    <tr>
                                                                        <td colspan="3" class="text-end">Subtotal</td>
                                                                        <td class="text-end">$<?php echo number_format($row->amount,2) ?></td>
                                                                    </tr>
                                                                    <!--end::Subtotal-->
                                                                    <!--begin::VAT-->
                                                                    <tr>
                                                                        <td colspan="3" class="text-end">VAT (0%)</td>
                                                                        <td class="text-end">$0.00</td>
                                                                    </tr>
                                                                    <!--end::VAT-->
                                                                    <!--begin::Shipping-->

                                                                    <!--end::Shipping-->
                                                                    <!--begin::Grand total-->
                                                                    <tr>
                                                                        <td colspan="3" class="fs-3 text-dark fw-bold text-end">Grand Total</td>
                                                                        <td class="text-dark fs-3 fw-bolder text-end">$<?php echo number_format($row->amount,2) ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <!--end::Grand total-->

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!--end::Table-->
                                                    </div>
                                                    <!--end:Order summary-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Body-->
                                            <!-- begin::Footer-->
                                            <div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
                                                <!-- begin::Actions-->

                                                <!-- end::Actions-->
                                                <!-- begin::Action-->
                                                <button type="button" class="btn btn-success my-1 me-12" style="float: right;" onclick="window.print();"><i class="fa-solid fa-print"></i>&nbsp;Print Invoice</button>
                                                <!-- end::Action-->
                                            </div>
                                            <!-- end::Footer-->
                                        </div>
                                        <!-- end::Wrapper-->
                                    </div>
                                    <!-- end::Body-->
                                </div>
                                <!-- end::Invoice 1-->
                            </div>
                            <!--end::Content container-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="<?php echo base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js/charts/index.js"></script>
    <script src="<?php echo base_url() ?>assets/js/charts/xy.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets/js/charts/percent.js"></script>
            <script src="<?php echo base_url() ?>assets/js/charts/radar.js"></script> -->
    <script src="<?php echo base_url() ?>assets/js/charts/Animated.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets/js/charts/map.js"></script>
            <script src="<?php echo base_url() ?>assets/js/charts/worldLow.js"></script>
            <script src="<?php echo base_url() ?>assets/js/charts/continentsLow.js"></script>
            <script src="<?php echo base_url() ?>assets/js/charts/usaLow.js"></script>
            <script src="<?php echo base_url() ?>assets/js/charts/worldTimeZonesLow.js"></script>
            <script src="<?php echo base_url() ?>assets/js/charts/worldTimeZoneAreasLmarkAllReadow.js"></script> -->
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
</body>

</html>