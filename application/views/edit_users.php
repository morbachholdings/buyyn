<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - Buyyn</title>
</head>

<body style="background: rgb(244, 247, 249);">
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-column flex-column-fluid">
            <!--begin::Header-->
            <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!--begin::Container-->

                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid container-xxl" id="kt_wrapper">
                <!--begin::Toolbar-->
                <div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">

                </div>
                <!--end::Toolbar-->
                <!--begin::Main-->
                <div class="d-flex flex-row flex-column-fluid align-items-stretch">
                    <!--begin::Content-->
                    <div class="content flex-row-fluid" id="kt_content">
                        <!--begin::Layout-->
                        <div class="d-flex flex-column flex-lg-row">
                            <!--begin::Sidebar-->
                            <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                                <!--begin::Card-->
                                <div class="card mb-5 mb-xl-8">
                                    <!--begin::Card body-->
                                    <div class="card-body">
                                        <!--begin::Summary-->
                                        <!--begin::User Info-->
                                        <div class="d-flex flex-center flex-column py-5">
                                            <?php foreach ($user_details->result() as $row) {
                                                if ($row->Profile_image == null) {
                                            ?>
                                                    <div class="symbol symbol-100px symbol-circle mb-7">
                                                        <img src="<?php echo base_url() ?>assets/media/svg/avatars/blank.svg" alt="image" />
                                                    </div>
                                                <?php } else { ?>
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-100px symbol-circle mb-7">
                                                        <img src="<?php echo base_url() ?>assets/media/profile/<?php echo $row->Profile_image ?>" alt="image" />
                                                    </div>
                                                <?php } ?>
                                                <!--end::Avatar-->
                                                <!--begin::Name-->
                                                <p class="fs-3 text-gray-800 fw-bold mb-3"><?php echo $row->First_name ?> <?php echo $row->Last_name ?></p>
                                                <!--end::Name-->
                                                <!--begin::Position-->
                                                <div class="mb-9">
                                                    <!--begin::Badge-->
                                                    <?php if ($row->user_group_id == 1) { ?>
                                                        <div class="badge badge-lg badge-light-primary d-inline">Administrator</div>
                                                    <?php } else if ($row->user_group_id == 2) { ?>

                                                        <div class="badge badge-lg badge-light-warning d-inline">Supplier</div>

                                                    <?php } else { ?>
                                                        <div class="badge badge-lg badge-light-success d-inline">Member</div>
                                                    <?php } ?>
                                                    <!--begin::Badge-->
                                                </div>
                                                <!--end::Position-->
                                                <!--begin::Info-->
                                                <!--begin::Info heading-->
                                                <?php if ($row->user_group_id == 2) { ?>
                                                    <div class="fw-bold mb-3">Submissions
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Number of submissions for current year"></i>
                                                    </div>
                                                    <!--end::Info heading-->
                                                    <div class="d-flex flex-wrap flex-center">
                                                        <!--begin::Stats-->
                                                        <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                                            <div class="fs-4 fw-bold text-gray-700">
                                                                <span class="w-75px">243</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                                <span class="svg-icon svg-icon-3 svg-icon-success">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <div class="fw-semibold text-muted">Total</div>
                                                        </div>
                                                        <!--end::Stats-->
                                                        <!--begin::Stats-->
                                                        <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                                            <div class="fs-4 fw-bold text-gray-700">
                                                                <span class="w-50px">56</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                                <span class="svg-icon svg-icon-3 svg-icon-danger">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                                        <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <div class="fw-semibold text-muted">Solved</div>
                                                        </div>
                                                        <!--end::Stats-->
                                                        <!--begin::Stats-->
                                                        <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                                            <div class="fs-4 fw-bold text-gray-700">
                                                                <span class="w-50px">188</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                                <span class="svg-icon svg-icon-3 svg-icon-success">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <div class="fw-semibold text-muted">Open</div>
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::Info-->
                                            <?php }
                                            } ?>
                                        </div>
                                        <!--end::User Info-->
                                        <!--end::Summary-->
                                        <!--begin::Details toggle-->
                                        <div class="d-flex flex-stack fs-4 py-3">
                                            <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details
                                                <span class="ms-2 rotate-180">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div>
                                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
                                                <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">Edit</a>
                                            </span>
                                        </div>
                                        <!--end::Details toggle-->
                                        <div class="separator"></div>
                                        <!--begin::Details content-->
                                        <div id="kt_user_view_details" class="collapse show">
                                            <div class="pb-5 fs-6">
                                                <?php foreach ($user_details->result() as $row) { ?>
                                                    <!--begin::Details item-->
                                                    <div class="fw-bold mt-5">Company Name</div>
                                                    <div class="text-gray-600"><?php echo $row->Company_name ?></div>
                                                    <!--begin::Details item-->
                                                    <!--begin::Details item-->
                                                    <div class="fw-bold mt-5">Email</div>
                                                    <div class="text-gray-600">
                                                        <a href="#" class="text-gray-600 text-hover-primary"><?php echo $row->Email ?></a>
                                                    </div>
                                                    <!--begin::Details item-->
                                                    <!--begin::Details item-->
                                                    <div class="fw-bold mt-5">Address</div>
                                                    <div class="text-gray-600">
                                                        <?php
                                                        echo $row->Address
                                                        ?>
                                                    </div>
                                                    <!--begin::Details item-->
                                                    <!--begin::Details item-->
                                                    <div class="fw-bold mt-5">Language</div>
                                                    <div class="text-gray-600">English</div>
                                                    <!--begin::Details item-->
                                                    <!--begin::Details item-->
                                                    <div class="fw-bold mt-5">Last Login</div>
                                                    <?php foreach ($log_details->result() as $row) { ?>

                                                        <div class="text-gray-600"><?php echo $row->logged_time ?></div>
                                                    <?php } ?>
                                                    <!--begin::Details item-->
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <!--end::Details content-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                            </div>
                            <!--end::Sidebar-->
                            <!--begin::Content-->
                            <div class="flex-lg-row-fluid ms-lg-15">
                                <!--begin:::Tabs-->
                                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                                    <!--begin:::Tab item-->
                                    <?php foreach ($user_details->result() as $row) {
                                        if ($row->user_group_id == 2) {
                                    ?>
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_tab">Rebate Details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_overview_security">Security</a>
                                            </li>
                                            <!--end:::Tab item-->
                                            <!--begin:::Tab item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab">Events & Logs</a>
                                            </li>
                                        <?php } else {  ?>
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4 active" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_overview_security">Security</a>
                                            </li>
                                            <!--end:::Tab item-->
                                            <!--begin:::Tab item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab">Events & Logs</a>
                                            </li>

                                    <?php }
                                    } ?>


                                </ul>
                                <!--end:::Tabs-->
                                <!--begin:::Tab content-->
                                <div class="tab-content" id="myTabContent">
                                    <!--begin:::Tab pane-->
                                    <?php foreach ($user_details->result() as $row) {
                                        if ($row->user_group_id == 2) {
                                    ?>
                                            <div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
                                                <!--begin::Card-->
                                                <div class="card card-flush mb-6 mb-xl-9">
                                                    <!--begin::Card header-->
                                                    <div class="card-header mt-6">
                                                        <!--begin::Card title-->
                                                        <div class="card-title flex-column">
                                                            <h2 class="mb-1">Rebate Details</h2>
                                                            <!-- <div class="fs-6 fw-semibold text-muted">2 upcoming meetings</div> -->
                                                        </div>

                                                    </div>
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body p-9 pt-4">
                                                        <?php if (is_array($rebates) || is_object($rebates)) { ?>
                                                            <?php foreach ($rebates as $row) {

                                                            ?>
                                                                <div class="row">

                                                                    <div class="col-md-4">
                                                                        <!--begin::Label-->
                                                                        <label class="fs-6 fw-semibold mb-2">Supplier Rebate</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->

                                                                        <input type="text" class="form-control form-control-solid" placeholder="" id="supplierRebate" name="" value="<?php echo $row->supplier_rebate ?>">
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <!--begin::Label-->
                                                                        <label class="fs-6 fw-semibold mb-2">Member Rebate</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <input type="text" class="form-control form-control-solid" placeholder="" name="" id="memberRebate" value="<?php echo $row->member_rebate ?>">
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <!--begin::Label-->
                                                                        <label class="fs-6 fw-semibold mb-2">Rebate Period</label>
                                                                        <!--end::Label-->
                                                                        <input type="text" class="form-control form-control-solid" id="rebatePeriod" value="<?php echo $row->rebate_period ?>">
                                                                        <!--end::Input-->
                                                                    </div>

                                                                </div><br>
                                                                <button class="btn btn-success" style="float: right;" rebate_id="<?php echo $row->rebate_id ?>" id="rebateUpdate">Update</button>

                                                                <!-- <="btn btn-success" style="float: right;" rebate_id="" id="rebateAdd">Add</button> -->
                                                            <?php  } ?>


                                                        <?php  } else { ?>
                                                            <div class="row">

                                                                <div class="col-md-4">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-semibold mb-2">Supplier Rebate</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->

                                                                    <input type="text" class="form-control form-control-solid" placeholder="" id="supplierR" name="" value="">
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-semibold mb-2">Member Rebate</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="" id="memberR" value="">
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-semibold mb-2">Rebate Period</label>
                                                                    <!--end::Label-->
                                                                    <input type="text" class="form-control form-control-solid" id="rebateP" value="">
                                                                    <!--end::Input-->
                                                                </div>

                                                            </div><br>
                                                            <?php foreach ($user_details->result() as $row) { ?>
                                                                <button class="btn btn-success" style="float: right;" user_id="<?php echo $row->user_id ?>" id="rebateAdd">Add</button>
                                                            <?php } ?>


                                                        <?php   } ?>

                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->

                                            </div>
                                            <!--end:::Tab pane-->
                                            <!--begin:::Tab pane-->
                                            <div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
                                                <!--begin::Card-->
                                                <div class="card pt-4 mb-6 mb-xl-9">
                                                    <!--begin::Card header-->
                                                    <div class="card-header border-0">
                                                        <!--begin::Card title-->
                                                        <div class="card-title">
                                                            <h2>Profile</h2>
                                                        </div>
                                                        <!--end::Card title-->
                                                    </div>
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body pt-0 pb-5">
                                                        <!--begin::Table wrapper-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                                                                <!--begin::Table body-->
                                                                <tbody class="fs-6 fw-semibold text-gray-600">
                                                                    <?php foreach ($user_details->result() as $row) { ?>
                                                                        <tr>
                                                                            <td>Email</td>
                                                                            <td><?php echo $row->Email ?></td>
                                                                            <td class="text-end">
                                                                                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_email">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                                    <span class="svg-icon svg-icon-3">
                                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Role</td>
                                                                            <td>Supplier</td>
                                                                            <td class="text-end">
                                                                                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                                    <span class="svg-icon svg-icon-3">
                                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table wrapper-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->

                                            </div>
                                            <!--end:::Tab pane-->
                                            <!--begin:::Tab pane-->
                                            <div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
                                                <!--begin::Card-->
                                                <div class="card pt-4 mb-6 mb-xl-9">
                                                    <!--begin::Card header-->
                                                    <div class="card-header border-0">
                                                        <!--begin::Card title-->
                                                        <div class="card-title">
                                                            <h2>Login Sessions</h2>
                                                        </div>
                                                    </div>
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body pt-0 pb-5">
                                                        <!--begin::Table wrapper-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                                                                <!--begin::Table head-->
                                                                <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                                                    <!--begin::Table row-->
                                                                    <tr class="text-start text-muted text-uppercase gs-0">
                                                                        <th class="min-w-100px">IP Address</th>
                                                                        <th>Status</th>
                                                                        <th>Device</th>
                                                                        <th class="min-w-125px">Time</th>
                                                                        <!-- <th class="min-w-70px">Actions</th> -->
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                </thead>
                                                                <!--end::Table head-->
                                                                <!--begin::Table body-->
                                                                <tbody class="fs-6 fw-semibold text-gray-600">
                                                                    <?php foreach ($log_details->result() as $row) { ?>
                                                                        <tr>
                                                                            <td><?php echo $row->IP_address ?></td>
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
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table wrapper-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card pt-4 mb-6 mb-xl-9">
                                                    <!--begin::Card header-->
                                                    <div class="card-header border-0">
                                                        <!--begin::Card title-->
                                                        <div class="card-title">
                                                            <h2>Logs</h2>
                                                        </div>
                                                    </div>
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body py-0">
                                                        <!--begin::Table wrapper-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_users_logs">
                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                    <!--begin::Table row-->
                                                                    <tr>
                                                                        <!--begin::Badge=-->
                                                                        <td class="min-w-70px">
                                                                            <div class="badge badge-light-success">200 OK</div>
                                                                        </td>
                                                                        <!--end::Badge=-->
                                                                        <!--begin::Status=-->
                                                                        <td>POST /v1/invoices/in_1168_3486/payment</td>
                                                                        <!--end::Status=-->
                                                                        <!--begin::Timestamp=-->
                                                                        <td class="pe-0 text-end min-w-200px">24 Jun 2022, 5:20 pm</td>
                                                                        <!--end::Timestamp=-->
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                    <!--begin::Table row-->

                                                                    <!--end::Table row-->
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table wrapper-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->

                                                <!--end::Card-->
                                            </div>
                                        <?php  } else { ?>
                                            <div class="tab-pane fade show active" id="kt_user_view_overview_security" role="tabpanel">
                                                <!--begin::Card-->
                                                <div class="card pt-4 mb-6 mb-xl-9">
                                                    <!--begin::Card header-->
                                                    <div class="card-header border-0">
                                                        <!--begin::Card title-->
                                                        <div class="card-title">
                                                            <h2>Profile</h2>
                                                        </div>
                                                        <!--end::Card title-->
                                                    </div>
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body pt-0 pb-5">
                                                        <!--begin::Table wrapper-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                                                                <!--begin::Table body-->
                                                                <tbody class="fs-6 fw-semibold text-gray-600">
                                                                    <?php foreach ($user_details->result() as $row) { ?>
                                                                        <tr>
                                                                            <td>Email</td>
                                                                            <td><?php echo $row->Email ?></td>
                                                                            <td class="text-end">
                                                                                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_email">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                                    <span class="svg-icon svg-icon-3">
                                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </button>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>Role</td>
                                                                            <?php if ($row->user_group_id == 1) { ?>
                                                                                <td>Administrator</td>
                                                                            <?php } else { ?>
                                                                                <td>Member</td>
                                                                            <?php } ?>
                                                                            <td class="text-end">
                                                                                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                                    <span class="svg-icon svg-icon-3">
                                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table wrapper-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->

                                            </div>
                                            <!--end:::Tab pane-->
                                            <!--begin:::Tab pane-->
                                            <div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
                                                <!--begin::Card-->
                                                <div class="card pt-4 mb-6 mb-xl-9">
                                                    <!--begin::Card header-->
                                                    <div class="card-header border-0">
                                                        <!--begin::Card title-->
                                                        <div class="card-title">
                                                            <h2>Login Sessions</h2>
                                                        </div>
                                                        <!--end::Card title-->
                                                        <!--begin::Card toolbar-->

                                                        <!--end::Card toolbar-->
                                                    </div>
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body pt-0 pb-5">
                                                        <!--begin::Table wrapper-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                                                                <!--begin::Table head-->
                                                                <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                                                    <!--begin::Table row-->
                                                                    <tr class="text-start text-muted text-uppercase gs-0">
                                                                        <th class="min-w-100px">IP Address</th>
                                                                        <th>Status</th>
                                                                        <th>Device</th>
                                                                        <th class="min-w-125px">Time</th>
                                                                        <!-- <th class="min-w-70px">Actions</th> -->
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                </thead>
                                                                <!--end::Table head-->
                                                                <!--begin::Table body-->
                                                                <tbody class="fs-6 fw-semibold text-gray-600">
                                                                    <?php foreach ($log_details->result() as $row) { ?>
                                                                        <tr>
                                                                            <td><?php echo $row->IP_address ?></td>
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
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table wrapper-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card pt-4 mb-6 mb-xl-9">
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
                                                            <table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_users_logs">
                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                    <!--begin::Table row-->
                                                                    <tr>
                                                                        <!--begin::Badge=-->
                                                                        <td class="min-w-70px">
                                                                            <div class="badge badge-light-success">200 OK</div>
                                                                        </td>
                                                                        <!--end::Badge=-->
                                                                        <!--begin::Status=-->
                                                                        <td>POST /v1/invoices/in_1168_3486/payment</td>
                                                                        <!--end::Status=-->
                                                                        <!--begin::Timestamp=-->
                                                                        <td class="pe-0 text-end min-w-200px">24 Jun 2022, 5:20 pm</td>
                                                                        <!--end::Timestamp=-->
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                    <!--begin::Table row-->

                                                                    <!--end::Table row-->
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table wrapper-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->

                                                <!--end::Card-->
                                            </div>


                                    <?php }
                                    } ?>
                                </div>
                                <!--end:::Tab content-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Layout-->
                        <!--begin::Modals-->
                        <!--begin::Modal - Update user details-->
                        <div class="modal fade" id="kt_modal_update_details" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Form-->
                                    <form class="form" action="javascript:;" id="kt_modal_update_user_form">
                                        <!--begin::Modal header-->
                                        <div class="modal-header" id="kt_modal_update_user_header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bold">Update User Details</h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" id="closeBtn">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--end::Modal header-->
                                        <!--begin::Modal body-->
                                        <div class="modal-body py-10 px-lg-17">
                                            <!--begin::Scroll-->
                                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_user_header" data-kt-scroll-wrappers="#kt_modal_update_user_scroll" data-kt-scroll-offset="300px">
                                                <!--begin::User toggle-->
                                                <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_user_info">User Information
                                                    <span class="ms-2 rotate-180">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::User toggle-->
                                                <!--begin::User form-->
                                                <div id="kt_modal_update_user_user_info" class="collapse show">
                                                    <!--begin::Input group-->
                                                    <div class="mb-7">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold mb-2">
                                                            <span>Update Avatar</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg."></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Image input wrapper-->
                                                        <div class="mt-1">
                                                            <!--begin::Image placeholder-->
                                                            <style>
                                                                .image-input-placeholder {
                                                                    background-image: url('<?php echo base_url() ?>assets/media/svg/avatars/blank.svg');
                                                                }

                                                                [data-theme="dark"] .image-input-placeholder {
                                                                    background-image: url('<?php echo base_url() ?>assets/media/svg/avatars/blank-dark.svg');
                                                                }
                                                            </style>
                                                            <!--end::Image placeholder-->
                                                            <!--begin::Image input-->
                                                            <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                                                <!--begin::Preview existing avatar-->
                                                                <?php foreach ($user_details->result() as $row) {
                                                                    if ($row->Profile_image == null) { ?>
                                                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?php echo base_url() ?>assets/media/avatars/blank.svg"></div>
                                                                    <?php } else {  ?>
                                                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?php echo base_url() ?>assets/media/profile/<?php echo $row->Profile_image ?>"></div>


                                                                <?php }
                                                                } ?>
                                                                <!--end::Preview existing avatar-->
                                                                <!--begin::Edit-->
                                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                                    <!--begin::Inputs-->
                                                                    <input type="file" name="files[]" multiple id="multiFiles" accept=".png, .jpg, .jpeg" />
                                                                    <input type="hidden" name="avatar_remove" />
                                                                    <!--end::Inputs-->
                                                                </label>
                                                                <!--end::Edit-->
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
                                                        </div>
                                                        <!--end::Image input wrapper-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <?php foreach ($user_details->result() as $row) { ?>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="fs-6 fw-semibold mb-2">First Name</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" class="form-control form-control-solid" placeholder="" id="fname" name="name" value="<?php echo $row->First_name ?>" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="fs-6 fw-semibold mb-2">Last Name</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" class="form-control form-control-solid" placeholder="" id="lname" name="name" value="<?php echo $row->Last_name ?>" />
                                                            </div>
                                                        </div>


                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold mb-2">
                                                                <span>Email</span>
                                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="email" class="form-control form-control-solid" placeholder="" disabled name="email" value="<?php echo $row->Email ?>" />
                                                            <!--end::Input-->
                                                        </div>
                                                </div>
                                                <!--end::User form-->
                                                <!--begin::Address toggle-->
                                                <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_address" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_address">Company Details
                                                    <span class="ms-2 rotate-180">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Address toggle-->
                                                <!--begin::Address form-->
                                                <div id="kt_modal_update_user_address" class="collapse show">
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold mb-2">Company Name</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input class="form-control form-control-solid" placeholder="" id="company" name="address1" value="<?php echo $row->Company_name ?>" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold mb-2">Contact Number</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input class="form-control form-control-solid" placeholder="" id="phone" name="contact" value="<?php echo $row->Contact_number ?>" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold mb-2">Register Date</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input class="form-control form-control-solid" placeholder="" id="reg_date" name="" value="<?php echo $row->Register_date ?>" type="date" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold mb-2">Address</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input class="form-control form-control-solid" placeholder="" id="address" name="city" value="<?php echo $row->Address ?>" type="text" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold mb-2">ABN</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input class="form-control form-control-solid" placeholder="" id="abn" name="city" value="<?php echo $row->ABN ?>" type="text" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->

                                                    <!--end::Input group-->
                                                </div>

                                                <!--end::Address form-->
                                            </div>
                                            <!--end::Scroll-->
                                        </div>
                                        <!--end::Modal body-->
                                        <!--begin::Modal footer-->
                                        <div class="modal-footer flex-center">
                                            <!--begin::Button-->
                                            <button type="reset" class="btn btn-light me-3" id="discard" data-kt-users-modal-action="cancel">Discard</button>
                                            <!--end::Button-->
                                            <!--begin::Button-->
                                            <button type="submit" class="btn btn-primary" id="btnUpdate" user_id="<?php echo $row->user_id ?>">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                            <!--end::Button-->
                                        </div>
                                    <?php } ?>
                                    <!--end::Modal footer-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                            </div>
                        </div>
                        <!--end::Modal - Update user details-->


                        <div class="modal fade" id="kt_modal_update_email" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Update Email Address</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" id="closeEmail">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                        <!--begin::Form-->
                                        <form id="kt_modal_update_email_form" class="form" action="javascript:;">
                                            <!--begin::Notice-->
                                            <!--begin::Notice-->

                                            <!--end::Notice-->
                                            <!--end::Notice-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mb-2">
                                                    <span class="required">Email Address</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <?php foreach ($user_details->result() as $row) { ?>
                                                    <input class="form-control form-control-solid" placeholder="" id="profile_email" name="profile_email" value="<?php echo $row->Email ?>" />

                                                    <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="text-center pt-15">
                                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" id="discardEmail">Discard</button>
                                                <button type="submit" id="btnUpdateEmail" user_id="<?php echo $row->user_id ?>" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">Submit</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                        <?php } ?>
                                        <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - Update email-->

                        <!--begin::Modal - Update role-->
                        <div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Update User Role</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" id="btnCloseRole" data-kt-users-modal-action="close">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                        <!--begin::Form-->
                                        <form id="kt_modal_update_role_form" class="form" action="javascript:;">
                                            <!--begin::Notice-->
                                            <!--begin::Notice-->
                                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                                <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
                                                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack flex-grow-1">
                                                    <!--begin::Content-->
                                                    <div class="fw-semibold">
                                                        <div class="fs-6 text-gray-700">Please note that reducing a user role rank, that user will lose all priviledges that was assigned to the previous role.</div>
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Notice-->
                                            <!--end::Notice-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mb-5">
                                                    <span class="required">Select a user role</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input row-->
                                                <?php foreach ($user_details->result() as $row) {
                                                    if ($row->user_group_id == 1) {
                                                ?>
                                                        <div class="d-flex">
                                                            <!--begin::Radio-->
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input me-3 adminGroup" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_0" checked='checked' />
                                                                <!--end::Input-->
                                                                <!--begin::Label-->
                                                                <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                                    <div class="fw-bold text-gray-800">Administrator</div>
                                                                    <div class="text-gray-600">Best for business owners and company administrators</div>
                                                                </label>
                                                                <!--end::Label-->
                                                            </div>
                                                        </div>
                                                        <!--end::Radio-->
                                                        <!--end::Input row-->
                                                        <div class='separator separator-dashed my-5'></div>
                                                        <!--begin::Input row-->
                                                        <div class="d-flex">
                                                            <!--begin::Radio-->
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input me-3 supplierGroup" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_1" />
                                                                <!--end::Input-->
                                                                <!--begin::Label-->
                                                                <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                                    <div class="fw-bold text-gray-800">Supplier</div>
                                                                    <div class="text-gray-600">Best for developers or people primarily using the API</div>
                                                                </label>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Radio-->
                                                        </div>
                                                        <div class="d-flex">
                                                            <!--begin::Radio-->
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input me-3 memberGroup" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_2" />
                                                                <!--end::Input-->
                                                                <!--begin::Label-->
                                                                <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                                    <div class="fw-bold text-gray-800">Member</div>
                                                                    <div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
                                                                </label>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Radio-->
                                                        </div>
                                                        <!--end::Input row-->
                                                        <div class='separator separator-dashed my-5'></div>
                                                        <!--begin::Input row-->

                                                    <?php } else if ($row->user_group_id == 2) { ?>
                                                        <div class="d-flex">
                                                            <!--begin::Radio-->
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input me-3 adminGroup" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_0" />
                                                                <!--end::Input-->
                                                                <!--begin::Label-->
                                                                <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                                    <div class="fw-bold text-gray-800">Administrator</div>
                                                                    <div class="text-gray-600">Best for business owners and company administrators</div>
                                                                </label>
                                                                <!--end::Label-->
                                                            </div>
                                                        </div>

                                                        <!--end::Input row-->
                                                        <div class='separator separator-dashed my-5'></div>
                                                        <!--begin::Input row-->
                                                        <div class="d-flex">
                                                            <!--begin::Radio-->
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input me-3 supplierGroup" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_1" checked />
                                                                <!--end::Input-->
                                                                <!--begin::Label-->
                                                                <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                                    <div class="fw-bold text-gray-800">Supplier</div>
                                                                    <div class="text-gray-600">Best for developers or people primarily using the API</div>
                                                                </label>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Radio-->
                                                        </div>
                                                        <div class='separator separator-dashed my-5'></div>
                                                        <div class="d-flex">
                                                            <!--begin::Radio-->
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input me-3 memberGroup" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_2" />
                                                                <!--end::Input-->
                                                                <!--begin::Label-->
                                                                <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                                    <div class="fw-bold text-gray-800">Member</div>
                                                                    <div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
                                                                </label>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Radio-->
                                                        </div>
                                                        <!--end::Input row-->
                                                        <div class='separator separator-dashed my-5'></div>
                                                    <?php } else { ?>
                                                        <div class="d-flex">
                                                            <!--begin::Radio-->
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input me-3 adminGroup" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_0" />
                                                                <!--end::Input-->
                                                                <!--begin::Label-->
                                                                <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                                    <div class="fw-bold text-gray-800">Administrator</div>
                                                                    <div class="text-gray-600">Best for business owners and company administrators</div>
                                                                </label>
                                                                <!--end::Label-->
                                                            </div>
                                                        </div>
                                                        <!--end::Input row-->
                                                        <div class='separator separator-dashed my-5'></div>
                                                        <!--begin::Input row-->
                                                        <div class="d-flex">
                                                            <!--begin::Radio-->
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input me-3 supplierGroup" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
                                                                <!--end::Input-->
                                                                <!--begin::Label-->
                                                                <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                                    <div class="fw-bold text-gray-800">Member</div>
                                                                    <div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
                                                                </label>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Radio-->
                                                        </div>
                                                        <!--end::Input row-->
                                                        <div class='separator separator-dashed my-5'></div>
                                                        <div class="d-flex">
                                                            <!--begin::Radio-->
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input me-3 memberGroup" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_2" checked />
                                                                <!--end::Input-->
                                                                <!--begin::Label-->
                                                                <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                                    <div class="fw-bold text-gray-800">Member</div>
                                                                    <div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
                                                                </label>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Radio-->
                                                        </div>
                                                        <!--end::Input row-->
                                                        <div class='separator separator-dashed my-5'></div>
                                                        <!--begin::Input row-->

                                                        <!--end::Input row-->
                                            </div>
                                        <?php } ?>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3" id="discardRole" data-kt-users-modal-action="cancel">Discard</button>
                                            <button type="submit" class="btn btn-primary" user_id="<?php echo $row->user_id ?>" id="btnChangeRole" data-kt-users-modal-action="submit">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                    <?php
                                                } ?>
                                    <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>


                        <!--end::Modal - Add task-->
                        <!--end::Modals-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Main-->
                <!--begin::Footer-->

                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <script>
        $('#closeBtn').click(function() {
            $('#kt_modal_update_details').modal('toggle');
        });
        $('#discard').click(function() {
            $('#kt_modal_update_details').modal('toggle');
        });
        $('#closeEmail').click(function() {
            $('#kt_modal_update_email').modal('toggle');
        });
        $('#discardEmail').click(function() {
            $('#kt_modal_update_email').modal('toggle');
        });
        $('#btnCloseRole').click(function() {
            $('#kt_modal_update_role').modal('toggle');
        });
        $('#discardRole').click(function() {
            $('#kt_modal_update_role').modal('toggle');
        });

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
            } else if (company == "") {
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
                    url: "<?php echo base_url(); ?>Edit_profile/upload_image",
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
                                url: "<?php echo base_url(); ?>Edit_Profile/update_profile",
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
                                text: "File already exist !",
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

        // Update Rebate ===================================================
        $('#rebateUpdate').click(function() {
            var rebate_id = $(this).attr('rebate_id');
            var supplierRebate = $('#supplierRebate').val();
            var memberRebate = $('#memberRebate').val();
            var period = $('#rebatePeriod').val();

            if (supplierRebate == "") {
                swal.fire({
                    text: "Supplier Rebate Empty",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                });
            } else if (memberRebate == "") {
                swal.fire({
                    text: "Member Rebate is Empty",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                });
            } else if (period == "") {
                swal.fire({
                    text: "Member Rebate is Empty",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                });
            } else {
                $.ajax({
                    url: "<?php echo base_url(); ?>Users/update_rebate",
                    method: "POST",
                    data: {
                        rebate_id: rebate_id,
                        supplierRebate: supplierRebate,
                        memberRebate: memberRebate,
                        period: period,

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
            }


        });

        //End Update Rebate =================================================

        //Update Email ===========================================
        $('#btnUpdateEmail').click(function() {
            var user_id = $(this).attr('user_id');
            var profile_email = $('#profile_email').val();

            if (profile_email == "") {
                swal.fire({
                    text: "Email Required",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                });
            } else {
                $.ajax({
                    url: "<?php echo base_url(); ?>Users/update_email",
                    method: "POST",
                    data: {
                        user_id: user_id,
                        profile_email: profile_email


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

            }
        });

        // End Update Email ===============================

        //Start update role===================================
        $('#btnChangeRole').click(function() {
            var user_id = $(this).attr('user_id');
            var role = $('input[name="user_role"]:checked').val();
            $.ajax({
                url: "<?php echo base_url(); ?>Users/update_role",
                method: "POST",
                data: {
                    user_id: user_id,
                    role: role


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

        });

        //End Update Role =============================================
        $('#rebateAdd').click(function() {
            var user_id = $(this).attr('user_id');
            var supplierRebate = $('#supplierR').val();
            var memberRebate = $('#memberR').val();
            var period = $('#rebateP').val();

            if (supplierRebate == "") {
                swal.fire({
                    text: "Supplier Rebate Empty",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                });
            } else if (memberRebate == "") {
                swal.fire({
                    text: "Member Rebate is Empty",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                });
            } else if (period == "") {
                swal.fire({
                    text: "Member Rebate is Empty",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                });
            } else {
                $.ajax({
                    url: "<?php echo base_url(); ?>Users/add_rebate",
                    method: "POST",
                    data: {
                        user_id: user_id,
                        supplierRebate: supplierRebate,
                        memberRebate: memberRebate,
                        period: period,

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
            }
        });
    </script>
</body>

</html>