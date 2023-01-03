<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
</head>

<body>
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder my-1">My Profile</h1>
                <!--end::Title-->
            </div>
        </div>
        <!--end::Container-->
    </div>
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl bg-transparent">
        <!--begin::Post-->
        <div class="content flex-row-fluid bg-transparent" id="kt_content">
            <!--begin::Row-->



            <!--begin::Navbar-->
            <div class="card">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap">
                        <!--begin: Pic-->
                        <div class="me-7 mb-4">
                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                <?php foreach ($all_data->result() as $row) {
                                    if ($row->Profile_image != null) {
                                ?>
                                        <img src="<?php echo base_url() ?>assets/media/profile/<?php echo $row->Profile_image ?>" alt="image" />
                                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>


                                    <?php } else { ?>
                                        <img src="<?php echo base_url() ?>assets/media/svg/avatars/blank.svg" alt="image" />
                                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>

                                <?php }
                                } ?>

                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::User-->
                                <?php foreach ($all_data->result() as $row) { ?>
                                    <div class="d-flex flex-column">
                                        <!--begin::Name-->
                                        <div class="d-flex align-items-center mb-2">
                                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"><?php echo $row->First_name ?>&nbsp;<?php echo $row->Last_name ?></a>
                                            <a href="#">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                                <?php if ($row->status == 1) { ?>
                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                            <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
                                                            <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
                                                        </svg>
                                                    </span>
                                                <?php } ?>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                        <!--end::Name-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">

                                            <a href="tel:<?php echo $row->Contact_number ?>" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">

                                                <span class="svg-icon svg-icon-4 me-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
                                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <?php echo $row->Contact_number ?>
                                            </a>
                                            <a href="mailto:<?php echo $row->Email ?>" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                <span class="svg-icon svg-icon-4 me-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
                                                        <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon--><?php echo $row->Email ?>
                                            </a>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                <?php } ?>
                                <!--end::User-->
                                <!--begin::Actions-->

                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="3600" data-kt-countup-prefix="$">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Earnings</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                        <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="75">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Projects</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Success Rate</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Wrapper-->

                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <div class="card card-flush h-xl-100">

                        <!--begin::Body-->
                        <div class="card-body pt-0 px-0 pb-0">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-0">
                                <!--begin::Item-->
                                <li class="nav-item col-2 mx-0 p-0">
                                    <!--begin::Link-->
                                    <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100 py-3" data-bs-toggle="pill" href="#kt_list_widget_10_tab_1">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bolder fs-6 mb-3">Overview</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item col-2 mx-0 px-0">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100 py-3" data-bs-toggle="pill" href="#kt_list_widget_10_tab_2">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bolder fs-6 mb-3">Edit Profile</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item col-2 mx-0 px-0">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100 py-3" data-bs-toggle="pill" href="#kt_list_widget_10_tab_3">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bolder fs-6 mb-3">Security</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <li class="nav-item col-2 mx-0 px-0">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100 py-3" data-bs-toggle="pill" href="#kt_list_widget_10_tab_4">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bolder fs-6 mb-3">Logs</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->

                                <!--begin::Bullet-->
                                <span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
                                <!--end::Bullet-->
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 my-5">
                <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="col-xl-12">
                            <!--begin::Actions-->
                            <div class="card-toolbar w-100">
                                <!--begin::Filters-->

                                <div class="tab-content my-3">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="kt_list_widget_10_tab_1">
                                        <div class="m-0">
                                            <div class="card-body pt-0">
                                                <div class="col-xl-12">

                                                    <!--begin::details View-->
                                                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                                        <!--begin::Card header-->
                                                        <div class="card-header cursor-pointer">
                                                            <!--begin::Card title-->
                                                            <div class="card-title m-0">
                                                                <h3 class="fw-bold m-0">Profile Details</h3>
                                                            </div>
                                                            <!--end::Card title-->
                                                            <!--begin::Action-->
                                                            <!-- <a href="#kt_list_widget_10_tab_2" class="btn btn-primary align-self-center">Edit Profile</a> -->
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--begin::Card header-->
                                                        <!--begin::Card body-->
                                                        <?php foreach ($all_data->result() as $row) { ?>
                                                            <div class="card-body p-9">
                                                                <!--begin::Row-->
                                                                <div class="row mb-7">

                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-8">
                                                                        <span class="fw-bold fs-6 text-gray-800"><?php echo $row->First_name ?>&nbsp;<?php echo $row->Last_name ?></span>
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Row-->
                                                                <!--begin::Input group-->
                                                                <div class="row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 fw-semibold text-muted">Company</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-8 fv-row">
                                                                        <span class="fw-semibold text-gray-800 fs-6"><?php echo $row->Company_name ?></span>
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 fw-semibold text-muted">Contact Phone
                                                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-8 d-flex align-items-center">
                                                                        <span class="fw-bold fs-6 text-gray-800 me-2"><?php echo $row->Contact_number ?></span>
                                                                        <!-- <span class="badge badge-success">Verified</span> -->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 fw-semibold text-muted">Address</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-8">
                                                                        <span class="fw-bold fs-6 text-gray-800 me-2"><?php echo $row->Address ?></span>
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 fw-semibold text-muted">Email </label>

                                                                    <!-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i></label> -->
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-8">
                                                                        <span class="fw-bold fs-6 text-gray-800"><?php echo $row->Email ?></span>
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 fw-semibold text-muted">ABN</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-8">
                                                                        <span class="fw-bold fs-6 text-gray-800"><?php echo $row->ABN ?></span>
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="row mb-10">
                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 fw-semibold text-muted">Register Date</label>
                                                                    <!--begin::Label-->
                                                                    <!--begin::Label-->
                                                                    <div class="col-lg-8">
                                                                        <span class="fw-semibold fs-6 text-gray-800"><?php echo $row->Register_date ?></span>
                                                                    </div>
                                                                    <!--begin::Label-->
                                                                </div>
                                                                <!--end::Input group-->

                                                            </div>
                                                        <?php } ?>
                                                        <!--end::Card body-->
                                                    </div>
                                                    <!--end::details View-->

                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="tab-pane fade" id="kt_list_widget_10_tab_2">
                                        <div class="m-0">
                                            <div class="card-body pt-0">
                                                <div class="col-xl-12">


                                                    <!--begin::Basic info-->
                                                    <div class="card mb-5 mb-xl-10">
                                                        <!--begin::Card header-->
                                                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                                                            <!--begin::Card title-->
                                                            <div class="card-title m-0">
                                                                <h3 class="fw-bold m-0">Edit Profile</h3>
                                                            </div>
                                                            <!--end::Card title-->
                                                        </div>
                                                        <!--begin::Card header-->
                                                        <!--begin::Content-->
                                                        <div id="kt_account_settings_profile_details" class="collapse show">
                                                            <!-- <form id="kt_account_settings_profile_details" class="form"> -->
                                                            <?php foreach ($all_data->result() as $row) { ?>
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-8">
                                                                        <!--begin::Image input-->

                                                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('<?php echo base_url() ?>assets/media/svg/avatars/blank.svg')">

                                                                            <!--begin::Preview existing avatar-->
                                                                            <?php if ($row->Profile_image != null) { ?>
                                                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?php echo base_url() ?>assets/media/profile/<?php echo $row->Profile_image ?>)"></div>
                                                                            <?php } else { ?>
                                                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?php echo base_url() ?>assets/media/svg/avatars/blank.svg)"></div>
                                                                            <?php } ?>
                                                                            <!--end::Preview existing avatar-->
                                                                            <!--begin::Label-->
                                                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                                <!--begin::Inputs-->
                                                                                <input type="file" id="multiFiles" name="files[]" multiple accept=".png, .jpg, .jpeg" />
                                                                                <input type="hidden" name="avatar_remove" />
                                                                                <!--end::Inputs-->

                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Cancel-->
                                                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                                                <i class="bi bi-x fs-2"></i>
                                                                            </span>
                                                                            <!--end::Cancel-->
                                                                            <!--begin::Remove-->
                                                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                                                <i class="bi bi-x fs-2"></i>
                                                                            </span>
                                                                            <!--end::Remove-->
                                                                        </div>
                                                                        <!--end::Image input-->
                                                                        <!--begin::Hint-->
                                                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                                        <!--end::Hint-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-8">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-6 fv-row">
                                                                                <input type="text" name="fname" id="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="<?php echo $row->First_name ?>" />
                                                                            </div>
                                                                            <!--end::Col-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-6 fv-row">
                                                                                <input type="text" name="lname" id="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="<?php echo $row->Last_name ?>" />
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Company</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-8 fv-row">
                                                                        <input type="text" name="company" id="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="<?php echo $row->Company_name ?>" />
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                                        <span class="required">Contact Phone</span>
                                                                        <!-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i> -->
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-8 fv-row">
                                                                        <input type="tel" name="phone" id="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="<?php echo $row->Contact_number ?>" />
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                                        <span class="required">Email</span>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-8 fv-row">
                                                                        <input type="text" name="email" id="email" disabled class="form-control form-control-lg form-control-solid" placeholder="Email" value="<?php echo $row->Email ?>" />
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Address</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-8 fv-row">
                                                                        <input type="text" name="address" id="address" class="form-control form-control-lg form-control-solid" placeholder="Address" value="<?php echo $row->Address ?>" />
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Register Date</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-8 fv-row">
                                                                        <input type="date" name="reg" id="reg_date" class="form-control form-control-lg form-control-solid" placeholder="Address" value="<?php echo $row->Register_date ?>" />
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                                        <span class="required">ABN</span>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-8 fv-row">
                                                                        <input type="text" name="abn" id="abn" class="form-control form-control-lg form-control-solid" placeholder="ABN" value="<?php echo $row->ABN ?>" />
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Actions-->

                                                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                                                    <button type="submit" class="btn btn-primary" user_id="<?php echo $row->user_id ?>" id="btnUpdate">Save Changes</button>
                                                                </div>
                                                            <?php } ?>
                                                            <!--end::Actions-->
                                                            <!-- </form> -->
                                                        </div>
                                                        <!--begin::Sign-in Method-->
                                                        <div class="card mb-5 mb-xl-10">
                                                            <!--begin::Card header-->
                                                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
                                                                <div class="card-title m-0">
                                                                    <h3 class="fw-bold m-0">Sign-in Method</h3>
                                                                </div>
                                                            </div>
                                                            <!--end::Card header-->
                                                            <!--begin::Content-->
                                                            <div id="kt_account_settings_signin_method" class="collapse show">
                                                                <!--begin::Card body-->

                                                                <div class="card-body border-top p-9">
                                                                    <!--begin::Email Address-->
                                                                    <?php foreach ($all_data->result() as $row) { ?>
                                                                        <div class="d-flex flex-wrap align-items-center">
                                                                            <!--begin::Label-->
                                                                            <div id="kt_signin_email">
                                                                                <div class="fs-6 fw-bold mb-1">Email Address</div>
                                                                                <div class="fw-semibold text-gray-600"><?php echo $row->Email ?></div>
                                                                            </div>
                                                                            <!--end::Label-->
                                                                            <!--begin::Edit-->
                                                                            <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                                                                                <!--begin::Form-->
                                                                                <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                                                                                    <div class="row mb-6">
                                                                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                                                                            <div class="fv-row mb-0">
                                                                                                <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
                                                                                                <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="<?php echo $row->Email ?>" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="fv-row mb-0">
                                                                                                <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
                                                                                                <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="text" id="user_id" value="<?php echo $row->user_id ?>" style="display: none;">
                                                                                    <div class="d-flex">
                                                                                        <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
                                                                                        <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                                                                    </div>
                                                                                </form>
                                                                                <!--end::Form-->
                                                                            </div>
                                                                            <!--end::Edit-->
                                                                            <!--begin::Action-->
                                                                            <div id="kt_signin_email_button" class="ms-auto">
                                                                                <button class="btn btn-light btn-active-light-primary">Change Email</button>
                                                                            </div>
                                                                            <!--end::Action-->
                                                                        </div>
                                                                        <!--end::Email Address-->
                                                                        <!--begin::Separator-->
                                                                        <div class="separator separator-dashed my-6"></div>
                                                                        <!--end::Separator-->
                                                                        <!--begin::Password-->
                                                                        <div class="d-flex flex-wrap align-items-center mb-10">
                                                                            <!--begin::Label-->
                                                                            <div id="kt_signin_password">
                                                                                <div class="fs-6 fw-bold mb-1">Password</div>
                                                                                <div class="fw-semibold text-gray-600">************</div>
                                                                            </div>
                                                                            <!--end::Label-->
                                                                            <!--begin::Edit-->
                                                                            <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                                                                                <!--begin::Form-->
                                                                                <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                                                                                    <div class="row mb-1">
                                                                                        <div class="col-lg-4">
                                                                                            <div class="fv-row mb-0">
                                                                                                <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
                                                                                                <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4">
                                                                                            <div class="fv-row mb-0">
                                                                                                <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
                                                                                                <input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4">
                                                                                            <div class="fv-row mb-0">
                                                                                                <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
                                                                                                <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                                                                                    <div class="d-flex">
                                                                                        <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
                                                                                        <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                                                                    </div>
                                                                                </form>
                                                                                <!--end::Form-->
                                                                            </div>
                                                                            <!--end::Edit-->
                                                                            <!--begin::Action-->
                                                                            <div id="kt_signin_password_button" class="ms-auto">
                                                                                <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                                                                            </div>
                                                                            <!--end::Action-->
                                                                        </div>
                                                                        <!--end::Password-->
                                                                    <?php } ?>
                                                                </div>

                                                                <!--end::Card body-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Sign-in Method-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_list_widget_10_tab_3">
                                        <div class="m-0">
                                            <div class="card-body pt-0">
                                                <div class="col-xl-12">


                                                    <!--begin::Row-->
                                                    <div class="row g-xxl-9">
                                                        <!--begin::Col-->
                                                        <div class="col-xxl-8">


                                                            <!--begin::Login sessions-->
                                                            <div class="card mb-5 mb-xl-10">
                                                                <!--begin::Card header-->
                                                                <div class="card-header">
                                                                    <!--begin::Heading-->
                                                                    <div class="card-title">
                                                                        <h3>Login Sessions</h3>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Toolbar-->

                                                                    <!--end::Toolbar-->
                                                                </div>
                                                                <!--end::Card header-->
                                                                <!--begin::Card body-->
                                                                <div class="card-body p-0">
                                                                    <!--begin::Table wrapper-->
                                                                    <div class="table-responsive">
                                                                        <!--begin::Table-->
                                                                        <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                                                            <!--begin::Thead-->
                                                                            <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                                                                <tr>
                                                                                    <th class="min-w-150px">First Name</th>
                                                                                    <th class="min-w-100px">Status</th>
                                                                                    <th class="min-w-150px">Device</th>
                                                                                    <th class="min-w-150px">IP Address</th>
                                                                                    <th class="min-w-100px">Time</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <!--end::Thead-->
                                                                            <!--begin::Tbody-->
                                                                            <tbody class="fw-6 fw-semibold text-gray-600">
                                                                                <?php foreach ($all_logins->result() as $row) { ?>
                                                                                    <tr>
                                                                                        <td><?php echo $row->First_name ?></td>
                                                                                        <td>
                                                                                            <?php if ($row->status == 1) {  ?>
                                                                                                <span class="badge badge-light-success fs-7 fw-bold">Success</span>
                                                                                            <?php } else if ($row->status == 2) { ?>
                                                                                                <span class="badge badge-light-warning fs-7 fw-bold">Warning</span>
                                                                                            <?php } else { ?>
                                                                                                <span class="badge badge-light-danger fs-7 fw-bold">Failed</span>
                                                                                            <?php } ?>
                                                                                        </td>
                                                                                        <td><?php echo $row->Device ?></td>
                                                                                        <td><?php echo $row->IP_address ?></td>
                                                                                        <?php
                                                                                        $date = new DateTime("now", new DateTimeZone('Australia/Melbourne'));
                                                                                        $now = date_create($date->format('Y-m-d H:i:s'));

                                                                                        $diff = date_diff($now, date_create($row->logged_time));
                                                                                        $time = "";
                                                                                        $mins = $diff->days * 24 * 60;
                                                                                        $mins += $diff->h * 60;
                                                                                        $mins += $diff->i;

                                                                                        if ($mins > 60) {
                                                                                            $time = $diff->h;
                                                                                        ?>
                                                                                            <td><?php echo $time ?> hours ago</td>
                                                                                        <?php

                                                                                        } else {
                                                                                            $time = $mins;
                                                                                        ?>
                                                                                            <td><?php echo $time ?> mins ago</td>
                                                                                        <?php
                                                                                        }


                                                                                        ?>

                                                                                    </tr>
                                                                                <?php } ?>

                                                                            </tbody>
                                                                            <!--end::Tbody-->
                                                                        </table>
                                                                        <!--end::Table-->
                                                                    </div>
                                                                    <!--end::Table wrapper-->
                                                                </div>
                                                                <!--end::Card body-->
                                                            </div>
                                                            <!--end::Login sessions-->

                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-xxl-4">
                                                            <!--begin::Security recent alerts-->
                                                            <div class="card card-xxl-stretch-50 mb-5 mb-xl-10">
                                                                <!--begin::Body-->
                                                                <div class="card-body pt-5">
                                                                    <!--begin::Carousel-->
                                                                    <div id="kt_security_recent_alerts" class="carousel carousel-custom carousel-stretch slide" data-bs-ride="carousel" data-bs-interval="8000">
                                                                        <!--begin::Heading-->
                                                                        <div class="d-flex flex-stack align-items-center flex-wrap">
                                                                            <h4 class="text-gray-400 fw-semibold mb-0 pe-2">Recent Alerts</h4>
                                                                            <!--begin::Carousel Indicators-->
                                                                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                                                                <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="0" class="ms-1 active"></li>
                                                                                <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="1" class="ms-1"></li>
                                                                                <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="2" class="ms-1"></li>
                                                                            </ol>
                                                                            <!--end::Carousel Indicators-->
                                                                        </div>
                                                                        <!--end::Heading-->
                                                                        <!--begin::Carousel inner-->
                                                                        <div class="carousel-inner pt-6">
                                                                            <!--begin::Item-->
                                                                            <div class="carousel-item active">
                                                                                <!--begin::Wrapper-->
                                                                                <div class="carousel-wrapper">
                                                                                    <!--begin::Description-->
                                                                                    <div class="d-flex flex-column flex-grow-1">
                                                                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary">Latest Announcements</a>
                                                                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">In the last year, you’ve probably had to adapt to new ways of living and working.</p>
                                                                                    </div>
                                                                                    <!--end::Description-->
                                                                                    <!--begin::Summary-->
                                                                                    <div class="d-flex flex-stack pt-8">
                                                                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Jun 10, 2021</span>
                                                                                        <a href="#" class="btn btn-sm btn-light">Learn More</a>
                                                                                    </div>
                                                                                    <!--end::Summary-->
                                                                                </div>
                                                                                <!--end::Wrapper-->
                                                                            </div>
                                                                            <!--end::Item-->
                                                                            <!--begin::Item-->
                                                                            <div class="carousel-item">
                                                                                <!--begin::Wrapper-->
                                                                                <div class="carousel-wrapper">
                                                                                    <!--begin::Description-->
                                                                                    <div class="d-flex flex-column flex-grow-1">
                                                                                        <a href="#" class="fw-bold text-dark text-hover-primary">Login Attempt Failed</a>
                                                                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">As we approach one year of working remotely, we wanted to take a look back and share some ways teams around the world have collaborated effectively.</p>
                                                                                    </div>
                                                                                    <!--end::Description-->
                                                                                    <!--begin::Summary-->
                                                                                    <div class="d-flex flex-stack pt-8">
                                                                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Oct 05, 2021</span>
                                                                                        <a href="#" class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Join</a>
                                                                                    </div>
                                                                                    <!--end::Summary-->
                                                                                </div>
                                                                                <!--end::Wrapper-->
                                                                            </div>
                                                                            <!--end::Item-->
                                                                            <!--begin::Item-->
                                                                            <div class="carousel-item">
                                                                                <!--begin::Wrapper-->
                                                                                <div class="carousel-wrapper">
                                                                                    <!--begin::Description-->
                                                                                    <div class="d-flex flex-column flex-grow-1">
                                                                                        <a href="#" class="fw-bold text-dark text-hover-primary">Top Picks For You</a>
                                                                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">Today we are excited to share an amazing certification opportunity which is designed to teach you everything</p>
                                                                                    </div>
                                                                                    <!--end::Description-->
                                                                                    <!--begin::Summary-->
                                                                                    <div class="d-flex flex-stack pt-8">
                                                                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Sep 11, 2021</span>
                                                                                        <a href="#" class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Collaborate</a>
                                                                                    </div>
                                                                                    <!--end::Summary-->
                                                                                </div>
                                                                                <!--end::Wrapper-->
                                                                            </div>
                                                                            <!--end::Item-->
                                                                        </div>
                                                                        <!--end::Carousel inner-->
                                                                    </div>
                                                                    <!--end::Carousel-->
                                                                </div>
                                                                <!--end::Body-->
                                                            </div>
                                                            <!--end::Security recent alerts-->
                                                            <!--begin::Security guidelines-->
                                                            <div class="card card-xxl-stretch-50 mb-5 mb-xl-10">
                                                                <!--begin::Body-->
                                                                <div class="card-body pt-5">
                                                                    <!--begin::Carousel-->
                                                                    <div id="kt_security_guidelines" class="carousel carousel-custom carousel-stretch slide" data-bs-ride="carousel" data-bs-interval="8000">
                                                                        <!--begin::Heading-->
                                                                        <div class="d-flex flex-stack align-items-center flex-wrap">
                                                                            <h4 class="text-gray-400 fw-semibold mb-0 pe-2">Security Guidelines</h4>
                                                                            <!--begin::Carousel Indicators-->
                                                                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                                                                <li data-bs-target="#kt_security_guidelines" data-bs-slide-to="0" class="ms-1 active"></li>
                                                                                <li data-bs-target="#kt_security_guidelines" data-bs-slide-to="1" class="ms-1"></li>
                                                                                <li data-bs-target="#kt_security_guidelines" data-bs-slide-to="2" class="ms-1"></li>
                                                                            </ol>
                                                                            <!--end::Carousel Indicators-->
                                                                        </div>
                                                                        <!--end::Heading-->
                                                                        <!--begin::Carousel inner-->
                                                                        <div class="carousel-inner pt-6">
                                                                            <!--begin::Item-->
                                                                            <div class="carousel-item active">
                                                                                <!--begin::Wrapper-->
                                                                                <div class="carousel-wrapper">
                                                                                    <!--begin::Description-->
                                                                                    <div class="d-flex flex-column flex-grow-1">
                                                                                        <a href="#" class="fs-5 fw-bold text-dark text-hover-primary">Get Start Your Security</a>
                                                                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">In the last year, you’ve probably had to adapt to new ways of living and working.</p>
                                                                                    </div>
                                                                                    <!--end::Description-->
                                                                                    <!--begin::Summary-->
                                                                                    <div class="d-flex flex-stack pt-8">
                                                                                        <span class="text-muted fw-semibold fs-6 pe-2">34, Soho Avenue, Tokio</span>
                                                                                        <a href="#" class="btn btn-sm btn-light">Register</a>
                                                                                    </div>
                                                                                    <!--end::Summary-->
                                                                                </div>
                                                                                <!--end::Wrapper-->
                                                                            </div>
                                                                            <!--end::Item-->
                                                                            <!--begin::Item-->
                                                                            <div class="carousel-item">
                                                                                <!--begin::Wrapper-->
                                                                                <div class="carousel-wrapper">
                                                                                    <!--begin::Description-->
                                                                                    <div class="d-flex flex-column flex-grow-1">
                                                                                        <a href="#" class="fw-bold text-dark text-hover-primary">Security Policy Update</a>
                                                                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">As we approach one year of working remotely, we wanted to take a look back and share some ways teams around the world have collaborated effectively.</p>
                                                                                    </div>
                                                                                    <!--end::Description-->
                                                                                    <!--begin::Summary-->
                                                                                    <div class="d-flex flex-stack pt-8">
                                                                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Oct 05, 2021</span>
                                                                                        <a href="#" class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Explore</a>
                                                                                    </div>
                                                                                    <!--end::Summary-->
                                                                                </div>
                                                                                <!--end::Wrapper-->
                                                                            </div>
                                                                            <!--end::Item-->
                                                                            <!--begin::Item-->
                                                                            <div class="carousel-item">
                                                                                <!--begin::Wrapper-->
                                                                                <div class="carousel-wrapper">
                                                                                    <!--begin::Description-->
                                                                                    <div class="d-flex flex-column flex-grow-1">
                                                                                        <a href="#" class="fw-bold text-dark text-hover-primary">Terms Of Use Document</a>
                                                                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">Today we are excited to share an amazing certification opportunity which is designed to teach you everything</p>
                                                                                    </div>
                                                                                    <!--end::Description-->
                                                                                    <!--begin::Summary-->
                                                                                    <div class="d-flex flex-stack pt-8">
                                                                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Nov 10, 2021</span>
                                                                                        <a href="#" class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Discover</a>
                                                                                    </div>
                                                                                    <!--end::Summary-->
                                                                                </div>
                                                                                <!--end::Wrapper-->
                                                                            </div>
                                                                            <!--end::Item-->
                                                                        </div>
                                                                        <!--end::Carousel inner-->
                                                                    </div>
                                                                    <!--end::Carousel-->
                                                                </div>
                                                                <!--end::Body-->
                                                            </div>
                                                            <!--end::Security guidelines-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->



                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="kt_list_widget_10_tab_4">
                                        <div class="m-0">
                                            <div class="card-body pt-0">
                                                <div class="col-xl-12">


                                                    <!--begin::Card-->
                                                    <div class="card pt-4">
                                                        <!--begin::Card header-->
                                                        <div class="card-header border-0">
                                                            <!--begin::Card title-->
                                                            <div class="card-title">
                                                                <h2>Logs</h2>
                                                            </div>
                                                            <!--end::Card title-->
                                                            <!--begin::Card toolbar-->

                                                            <!--end::Card toolbar-->
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                        <div class="card-body py-0">
                                                            <!--begin::Table wrapper-->
                                                            <div class="table-responsive">
                                                                <!--begin::Table-->
                                                                <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                                                                    <thead>
                                                                        <tr class="fw-semibold fs-6 text-muted">
                                                                            <th>Code Name</th>
                                                                            <th>Directory Path</th>
                                                                            <th class="text-end">Time</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <!--begin::Badge=-->
                                                                            <td class="min-w-70px">
                                                                                <div class="badge badge-light-danger">500 ERR</div>
                                                                            </td>
                                                                            <!--end::Badge=-->
                                                                            <!--begin::Status=-->
                                                                            <td>POST /v1/invoice/in_7407_8312/invalid</td>
                                                                            <!--end::Status=-->
                                                                            <!--begin::Timestamp=-->
                                                                            <td class="pe-0 text-end min-w-200px">22 Sep 2022, 11:05 am</td>
                                                                            <!--end::Timestamp=-->
                                                                        </tr>
                                                                        <!--end::Table row-->

                                                                        <!--end::Table row-->
                                                                    </tbody>

                                                                </table>

                                                                <!--end::Table-->
                                                            </div>
                                                            <!--end::Table wrapper-->
                                                        </div>
                                                        <!--end::Card body-->
                                                    </div>
                                                    <!--end::Card-->


                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
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


    <script>
        $('#btnUpdate').click(function() {
            var user_id = $(this).attr('user_id');
            var first_name = $('#fname').val();
            var last_name = $('#lname').val();
            var company = $('#company').val();
            var phone = $('#phone').val();
            var address = $('#address').val();
            var register_date = $('#reg_date').val();
            var abn = $('#abn').val();
            var form_data = new FormData();
            var image = document.getElementById('multiFiles').files.length;

            if (first_name == "") {
                swal.fire({
                    text: "Sorry, First Name required",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                });
            } 
            else if (company == "") {
                swal.fire({
                    text: "Sorry, company name required",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                });
            } else if (phone == "") {
                swal.fire({
                    text: "Sorry, phone required",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                });
            } else if (abn == "") {
                swal.fire({
                    text: "Sorry, ABN required",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                });
            } else if (document.getElementById('multiFiles').files.length > 1) {
                swal.fire({
                    text: "Sorry, You can't add multiple images.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                });

            } else {
                for (var x = 0; x < image; x++) {
                    form_data.append("files[]", document.getElementById('multiFiles').files[x]);
                }

                $.ajax({
                    url: "<?php echo base_url(); ?>edit_profile/upload_image",
                    method: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success: function(data) {
                        var ret_data = $.parseJSON(data);
                        if (ret_data.status == 1) {
                            var image_name = ret_data.ret_data;

                            $.ajax({
                                url: "<?php echo base_url(); ?>edit_profile/update_profile",
                                method: "POST",
                                data: {
                                    user_id: user_id,
                                    first_name: first_name,
                                    last_name: last_name,
                                    company: company,
                                    phone: phone,
                                    address: address,
                                    register_date: register_date,
                                    abn: abn,
                                    image_name: image_name
                                },
                                success: function(data) {
                                    var ret_data = $.parseJSON(data);
                                    if (ret_data.status == 1) {
                                        swal.fire({
                                            text: ret_data.ret_data,
                                            icon: "success",
                                            buttonsStyling: false,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn font-weight-bold btn-light-primary"
                                            }
                                        }).then(function() {
                                            location.reload();
                                        });
                                    } else {
                                        swal.fire({
                                            text: ret_data.ret_data,
                                            icon: "error",
                                            buttonsStyling: false,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn font-weight-bold btn-light-primary"
                                            }
                                        });

                                    }

                                }
                            });



                        } else {
                            swal.fire({
                                text: ret_data.ret_data,
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            });
                        }


                    }
                });
            }


        });



        "use strict";

        // Class definition
        var KTAccountSettingsSigninMethods = function() {
            var signInForm;
            var signInMainEl;
            var signInEditEl;
            var passwordMainEl;
            var passwordEditEl;
            var signInChangeEmail;
            var signInCancelEmail;
            var passwordChange;
            var passwordCancel;

            var toggleChangeEmail = function() {
                signInMainEl.classList.toggle('d-none');
                signInChangeEmail.classList.toggle('d-none');
                signInEditEl.classList.toggle('d-none');
            }

            var toggleChangePassword = function() {
                passwordMainEl.classList.toggle('d-none');
                passwordChange.classList.toggle('d-none');
                passwordEditEl.classList.toggle('d-none');
            }

            // Private functions
            var initSettings = function() {
                if (!signInMainEl) {
                    return;
                }

                // toggle UI
                signInChangeEmail.querySelector('button').addEventListener('click', function() {
                    toggleChangeEmail();
                });

                signInCancelEmail.addEventListener('click', function() {
                    toggleChangeEmail();
                });

                passwordChange.querySelector('button').addEventListener('click', function() {
                    toggleChangePassword();
                });

                passwordCancel.addEventListener('click', function() {
                    toggleChangePassword();
                });
            }

            var handleChangeEmail = function(e) {
                var validation;

                if (!signInForm) {
                    return;
                }

                validation = FormValidation.formValidation(
                    signInForm, {
                        fields: {
                            emailaddress: {
                                validators: {
                                    notEmpty: {
                                        message: 'Email is required'
                                    },
                                    emailAddress: {
                                        message: 'The value is not a valid email address'
                                    }
                                }
                            },

                            confirmemailpassword: {
                                validators: {
                                    notEmpty: {
                                        message: 'Password is required'
                                    }
                                }
                            }
                        },

                        plugins: { //Learn more: https://formvalidation.io/guide/plugins
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: '.fv-row'
                            })
                        }
                    }
                );

                signInForm.querySelector('#kt_signin_submit').addEventListener('click', function(e) {
                    e.preventDefault();
                    console.log('click');

                    validation.validate().then(function(status) {
                        if (status == 'Valid') {
                            var user_id = document.getElementById('user_id').value;
                            var email = document.getElementById('emailaddress').value;
                            var password = document.getElementById('confirmemailpassword').value;

                            $.ajax({
                                url: '<?php echo base_url() ?>edit_profile/change_email',
                                method: 'POST',
                                data: {
                                    user_id: user_id,
                                    email: email,
                                    password: password

                                },
                                success: function(data) {
                                    var ret_data = $.parseJSON(data);
                                    if (ret_data.status == 1) {
                                        swal.fire({
                                            text: ret_data.ret_data,
                                            icon: "success",
                                            buttonsStyling: false,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn font-weight-bold btn-light-primary"
                                            }
                                        }).then(function() {
                                            signInForm.reset();
                                            validation.resetForm(); // Reset formvalidation --- more info: https://formvalidation.io/guide/api/reset-form/
                                            toggleChangeEmail();
                                            location.href = "<?php echo base_url() ?>";
                                        });
                                    } else {
                                        swal.fire({
                                            text: ret_data.ret_data,
                                            icon: "error",
                                            buttonsStyling: false,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn font-weight-bold btn-light-primary"
                                            }
                                        });
                                    }



                                }
                            });





                        } else {
                            swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            });
                        }
                    });
                });
            }

            var handleChangePassword = function(e) {
                var validation;

                // form elements
                var passwordForm = document.getElementById('kt_signin_change_password');

                if (!passwordForm) {
                    return;
                }

                validation = FormValidation.formValidation(
                    passwordForm, {
                        fields: {
                            currentpassword: {
                                validators: {
                                    notEmpty: {
                                        message: 'Current Password is required'
                                    }
                                }
                            },

                            newpassword: {
                                validators: {
                                    notEmpty: {
                                        message: 'New Password is required'
                                    }
                                }
                            },

                            confirmpassword: {
                                validators: {
                                    notEmpty: {
                                        message: 'Confirm Password is required'
                                    },
                                    identical: {
                                        compare: function() {
                                            return passwordForm.querySelector('[name="newpassword"]').value;
                                        },
                                        message: 'The password and its confirm are not the same'
                                    }
                                }
                            },
                        },

                        plugins: { //Learn more: https://formvalidation.io/guide/plugins
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: '.fv-row'
                            })
                        }
                    }
                );

                passwordForm.querySelector('#kt_password_submit').addEventListener('click', function(e) {
                    e.preventDefault();
                    console.log('click');

                    validation.validate().then(function(status) {
                        if (status == 'Valid') {
                            var user_id = document.getElementById('user_id').value;
                            var currentpassword = document.getElementById('currentpassword').value;
                            var newpassword = document.getElementById('newpassword').value;
                            $.ajax({
                                url: '<?php echo base_url() ?>edit_profile/change_password',
                                method: 'POST',
                                data: {
                                    user_id: user_id,
                                    currentpassword: currentpassword,
                                    newpassword: newpassword

                                },
                                success: function(data) {
                                    var ret_data = $.parseJSON(data);
                                    if (ret_data.status == 1) {
                                        swal.fire({
                                            text: ret_data.ret_data,
                                            icon: "success",
                                            buttonsStyling: false,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn font-weight-bold btn-light-primary"
                                            }
                                        }).then(function() {
                                            passwordForm.reset();
                                            validation.resetForm(); // Reset formvalidation --- more info: https://formvalidation.io/guide/api/reset-form/
                                            toggleChangePassword();
                                        });

                                    } else {
                                        swal.fire({
                                            text: ret_data.ret_data,
                                            icon: "error",
                                            buttonsStyling: false,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn font-weight-bold btn-light-primary"
                                            }
                                        });

                                    }



                                }
                            });

                        } else {
                            swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            });
                        }
                    });
                });
            }

            // Public methods
            return {
                init: function() {
                    signInForm = document.getElementById('kt_signin_change_email');
                    signInMainEl = document.getElementById('kt_signin_email');
                    signInEditEl = document.getElementById('kt_signin_email_edit');
                    passwordMainEl = document.getElementById('kt_signin_password');
                    passwordEditEl = document.getElementById('kt_signin_password_edit');
                    signInChangeEmail = document.getElementById('kt_signin_email_button');
                    signInCancelEmail = document.getElementById('kt_signin_cancel');
                    passwordChange = document.getElementById('kt_signin_password_button');
                    passwordCancel = document.getElementById('kt_password_cancel');

                    initSettings();
                    handleChangeEmail();
                    handleChangePassword();
                }
            }
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function() {
            KTAccountSettingsSigninMethods.init();
        });
    </script>


</body>

</html>