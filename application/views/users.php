<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - Buyyn</title>
    <style>
         @media only screen and (max-width: 576px) {
        .mobile {
            width: 100% !important;
        }

        .noPadding {
            padding: 0 !important;
        }

        .mobileAlign {
            display: flex;
            flex-direction: column;
        }

        .mobileFont {
            font-size: 10px !important;
        }
    }
    </style>
</head>

<body style="background: rgb(244, 247, 249);">
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder my-1">Suppliers, Members and Admins</h1>
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
                <div class="col-xl-12">
                    <div class="card card-flush h-xl-100">
                        <div class="card-body pt-0 px-0">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9">
                                <!--begin::Item-->
                                <li class="nav-item col-4 mx-0 p-0">
                                    <!--begin::Link-->
                                    <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100 py-3" data-bs-toggle="pill" href="#kt_list_widget_10_tab_1">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bolder fs-6 mb-3">Suppliers</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item col-4 mx-0 px-0">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100 py-3" data-bs-toggle="pill" href="#kt_list_widget_10_tab_2">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bolder fs-6 mb-3">Members</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <li class="nav-item col-4 mx-0 px-0">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100 py-3" data-bs-toggle="pill" href="#kt_list_widget_10_tab_3">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bolder fs-6 mb-3">Admins</span>
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
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_list_widget_10_tab_1">
                                    <div class="card">
                                        <div class="card-header border-0 pt-6">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <!--begin::Search-->
                                                <div class="d-flex align-items-center position-relative my-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14 mobile" placeholder="Search user" />
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--begin::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                                    <!--begin::Filter-->
                                                    <button type="button" class="btn btn-sm btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Filter
                                                    </button>
                                                    <!--begin::Menu 1-->
                                                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                                        <!--begin::Header-->
                                                        <div class="px-7 py-5">
                                                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                        </div>
                                                        <!--end::Header-->
                                                        <!--begin::Separator-->
                                                        <div class="separator border-gray-200"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::Content-->
                                                        <div class="px-7 py-5" data-kt-user-table-filter="form">
                                                            <!--begin::Input group-->
                                                            <div class="mb-10">
                                                                <label class="form-label fs-6 fw-semibold">Status:</label>
                                                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                                                    <option></option>
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Approved">Approved</option>
                                                                    <option value="Suspended">Suspended</option>

                                                                </select>
                                                            </div>

                                                            <div class="d-flex justify-content-end">
                                                                <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                                                <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Menu 1-->
                                                    <!--end::Filter-->
                                                    <!--begin::Export-->
                                                    <a href="<?php echo base_url() ?>users/exportSupplier" type="button" class="btn bt-sm btn-light-primary me-3">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor" />
                                                                <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor" />
                                                                <path opacity="0.3" d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Export
                                                    </a>
                                                    <!--end::Export-->
                                                    <!--begin::Add user-->
                                                    <button type="button" class="btn btn-sm btn-primary p-2" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Add User
                                                    </button>
                                                    <!--end::Add user-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Group actions-->
                                                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                                                    <div class="fw-bold me-5">
                                                        <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                                                    </div>
                                                    <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                                                </div>
                                                <!--end::Group actions-->
                                                <!--begin::Modal - Adjust Balance-->

                                                <!--end::Modal - New Card-->
                                                <!--begin::Modal - Add task-->
                                                <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header" id="kt_modal_add_user_header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bold">Add Supplier</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" id="closeBtn" data-kt-users-modal-action="close">
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
                                                            <div class="modal-body">
                                                                <div class="mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-semibold mb-2">
                                                                        <span>Add Avatar</span>
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


                                                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?php echo base_url() ?>assets/media/avatars/blank.svg"></div>

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
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="">First Name</label><br>
                                                                        <input type="text" class="form-control" id="fname">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">Last Name</label><br>
                                                                        <input type="text" class="form-control" id="lname">
                                                                    </div>
                                                                </div>
                                                                <div class="row">&nbsp;</div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="">Company Name</label><br>
                                                                        <input type="text" class="form-control" id="company">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">Email</label><br>
                                                                        <input type="email" class="form-control" id="email">
                                                                    </div>
                                                                </div>
                                                                <div class="row">&nbsp;</div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="">Address</label><br>
                                                                        <input type="text" class="form-control" id="address">
                                                                    </div>
                                                                </div>
                                                                <div class="row">&nbsp;</div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="">Contact Number</label><br>
                                                                        <input type="text" class="form-control" id="phone">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">Register Date</label><br>
                                                                        <input type="date" class="form-control" id="reg_date">
                                                                    </div>
                                                                </div>
                                                                <div class="row">&nbsp;</div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="">ABN</label><br>
                                                                        <input type="text" class="form-control" id="abn">
                                                                    </div>
                                                                </div>

                                                                <div class="row">&nbsp;</div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="">Supplier Rebate</label><br>
                                                                        <input type="text" class="form-control" id="supplierRebate">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">Member Rebate</label><br>
                                                                        <input type="text" class="form-control" id="memberRebate">
                                                                    </div>
                                                                </div>
                                                                <div class="row">&nbsp;</div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="">Rebate Period</label><br>
                                                                        <select name="" id="period" class="form-control">
                                                                            <option value="-Select Period-">- Select Rebate Period -</option>
                                                                            <option value="Monthly">Monthly</option>
                                                                            <option value="Quarterly">Quarterly</option>
                                                                            <option value="Yearly">Yearly</option>
                                                                        </select>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="reset" class="btn btn-light me-3" id="discardSupplier">Discard</button>
                                                                <button type="submit" class="btn btn-primary" id="btnAddSupplier">
                                                                    <span class="indicator-label">Submit</span>
                                                                    <span class="indicator-progress">Please wait...
                                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                </button>
                                                            </div>

                                                        </div>
                                                        <!--end::Modal content-->
                                                    </div>
                                                    <!--end::Modal dialog-->
                                                </div>
                                                <!--end::Modal - Add task-->
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <div class="card-body pt-0">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="w-10px pe-2">
                                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                                            </div>
                                                        </th>
                                                        <th class="min-w-125px">Supplier Name</th>
                                                        <th class="min-w-125px">Contact Person</th>
                                                        <th class="min-w-125px">Email</th>
                                                        <th class="min-w-125px">Status</th>
                                                        <th class="min-w-125px">Joined Date</th>
                                                        <th class="text-end min-w-100px">Actions</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="text-gray-600 fw-semibold">
                                                    <?php foreach ($users_list->result() as $row) {
                                                        if ($row->user_group_id == 2) {
                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td class="d-flex align-items-center">

                                                                    <div class="d-flex flex-column">
                                                                        <a href="<?php echo base_url() ?>users/edit_users?id=<?php echo base64_encode($row->user_id) ?>" class="text-gray-800 text-hover-primary mb-1"><?php echo $row->Company_name ?></a>

                                                                    </div>

                                                                </td>
                                                                <td><?php echo $row->First_name ?></td>

                                                                <td>
                                                                    <?php echo $row->Email ?>
                                                                </td>
                                                                <td>
                                                                    <?php if ($row->status == 1) { ?>
                                                                        <div class="badge badge-light-success fw-bold">Approved</div>
                                                                    <?php } else if ($row->status == 2) { ?>
                                                                        <div class="badge badge-light-warning fw-bold">Pending</div>
                                                                    <?php } else { ?>
                                                                        <div class="badge badge-light-danger fw-bold">Suspended</div>
                                                                    <?php } ?>
                                                                </td>
                                                                <td><?php echo $row->Register_date ?></td>

                                                                <td class="text-end">
                                                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions

                                                                        <span class="svg-icon svg-icon-5 m-0">
                                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                                            </svg>
                                                                        </span>

                                                                    </a>

                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                        <?php if ($row->status == 2) { ?>
                                                                            <div class="menu-item px-3">
                                                                                <a href="<?php echo base_url() ?>users/edit_users?id=<?php echo base64_encode($row->user_id) ?>" class="menu-link px-3">Edit</a>
                                                                            </div>

                                                                            <div class="menu-item px-3">
                                                                                <a href="javascript:;" class="menu-link px-3 approveUser" user_id="<?php echo $row->user_id ?>" user_name="<?php echo $row->Company_name ?>" class="menu-link px-3">Approve</a>
                                                                            </div>
                                                                            <div class="menu-item px-3">
                                                                                <a href="javascript:;" class="menu-link px-3 deleteUser" user_id="<?php echo $row->user_id ?>" user_name="<?php echo $row->Company_name ?>" data-kt-users-table-filter="delete_row">Suspend</a>
                                                                            </div>
                                                                        <?php } else if ($row->status == 1) { ?>
                                                                            <div class="menu-item px-3">
                                                                                <a href="<?php echo base_url() ?>users/edit_users?id=<?php echo base64_encode($row->user_id) ?>" class="menu-link px-3">Edit</a>
                                                                            </div>
                                                                            <div class="menu-item px-3">
                                                                                <a href="javascript:;" class="menu-link px-3 deleteUser" user_id="<?php echo $row->user_id ?>" user_name="<?php echo $row->Company_name ?>" data-kt-users-table-filter="delete_row">Suspend</a>
                                                                            </div>

                                                                        <?php } else { ?>

                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3 resumeUser" user_id="<?php echo $row->user_id ?>" user_name="<?php echo $row->Company_name ?>">Resume</a>
                                                                            </div>

                                                                        <?php } ?>

                                                                    </div>
                                                                </td>
                                                            </tr>
                                                    <?php }
                                                    } ?>
                                                </tbody>

                                            </table>


                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kt_list_widget_10_tab_2">
                                    <div class="card">
                                        <div class="card-header border-0 pt-6">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <!--begin::Search-->
                                                <div class="d-flex align-items-center position-relative my-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <input type="text" data-kt-member-table-filter="search" class="form-control form-control-solid w-100 ps-14 moblie" placeholder="Search user" />
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--begin::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex justify-content-end" data-kt-member-table-toolbar="base">
                                                    <!--begin::Filter-->
                                                    <button type="button" class="btn btn-sm btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Filter
                                                    </button>
                                                    <!--begin::Menu 1-->
                                                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                                        <!--begin::Header-->
                                                        <div class="px-7 py-5">
                                                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                        </div>
                                                        <!--end::Header-->
                                                        <!--begin::Separator-->
                                                        <div class="separator border-gray-200"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::Content-->
                                                        <div class="px-7 py-5" data-kt-member-table-filter="form">
                                                            <!--begin::Input group-->
                                                            <div class="mb-10">
                                                                <label class="form-label fs-6 fw-semibold">Status:</label>
                                                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-member-table-filter="role" data-hide-search="true">
                                                                    <option></option>
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Approved">Approved</option>
                                                                    <option value="Suspended">Suspended</option>

                                                                </select>
                                                            </div>

                                                            <div class="d-flex justify-content-end">
                                                                <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-member-table-filter="reset">Reset</button>
                                                                <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-member-table-filter="filter">Apply</button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Menu 1-->
                                                    <!--end::Filter-->
                                                    <!--begin::Export-->
                                                    <button type="button" class="btn btn-sm btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_members">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor" />
                                                                <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor" />
                                                                <path opacity="0.3" d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Export
                                                    </button>
                                                    <!--end::Export-->
                                                    <!--begin::Add user-->
                                                    <button type="button" class="btn btn-sm btn-primary p-2" data-bs-toggle="modal" data-bs-target="#kt_modal_add_member">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Add User
                                                    </button>
                                                    <!--end::Add user-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Group actions-->
                                                <div class="d-flex justify-content-end align-items-center d-none" data-kt-member-table-toolbar="selected">
                                                    <div class="fw-bold me-5">
                                                        <span class="me-2" data-kt-member-table-select="selected_count"></span>Selected
                                                    </div>
                                                    <button type="button" class="btn btn-danger" data-kt-member-table-select="delete_selected">Delete Selected</button>
                                                </div>
                                                <!--end::Group actions-->
                                                <!--begin::Modal - Adjust Balance-->
                                                <div class="modal fade" id="kt_modal_export_members" tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bold">Export Users</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-member-modal-action="close">
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
                                                                <form id="kt_modal_export_member_form" class="form" action="#">
                                                                    <!--begin::Input group-->
                                                                    <div class="fv-row mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="fs-6 fw-semibold form-label mb-2">Select Roles:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <select name="role" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                                            <option></option>
                                                                            <option value="Administrator">Administrator</option>
                                                                            <option value="Analyst">Analyst</option>
                                                                            <option value="Developer">Developer</option>
                                                                            <option value="Support">Support</option>
                                                                            <option value="Trial">Trial</option>
                                                                        </select>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="fv-row mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="required fs-6 fw-semibold form-label mb-2">Select Export Format:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                                            <option></option>
                                                                            <option value="excel">Excel</option>
                                                                            <option value="pdf">PDF</option>
                                                                            <option value="cvs">CVS</option>
                                                                            <option value="zip">ZIP</option>
                                                                        </select>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Actions-->
                                                                    <div class="text-center">
                                                                        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                                                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                                            <span class="indicator-label">Submit</span>
                                                                            <span class="indicator-progress">Please wait...
                                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                        </button>
                                                                    </div>
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
                                                <!--end::Modal - New Card-->
                                                <!--begin::Modal - Add task-->
                                                <div class="modal fade" id="kt_modal_add_member" tabindex="-1" aria-hidden="true">
                                                    <!--begin::Modal dialog-->
                                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                                        <!--begin::Modal content-->
                                                        <div class="modal-content">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header" id="kt_modal_add_user_header">
                                                                <!--begin::Modal title-->
                                                                <h2 class="fw-bold">Add Member</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" id="closeModal">
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
                                                            <div class="modal-body">
                                                                <div class="mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-semibold mb-2">
                                                                        <span>Add Avatar</span>
                                                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg."></i>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Image input wrapper-->
                                                                    <div class="mt-1">
                                                                        <!--begin::Image placeholder-->
                                                                        <style>
                                                                            .image-input-placeholder {
                                                                                background-image: url('<?php echo base_url() ?>assets/media/svg/avatars/blank.png');
                                                                            }

                                                                            [data-theme="dark"] .image-input-placeholder {
                                                                                background-image: url('<?php echo base_url() ?>assets/media/svg/avatars/blank-dark.svg');
                                                                            }
                                                                        </style>
                                                                        <!--end::Image placeholder-->
                                                                        <!--begin::Image input-->
                                                                        <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                                                            <!--begin::Preview existing avatar-->


                                                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?php echo base_url() ?>assets/media/avatars/blank.png"></div>

                                                                            <!--end::Preview existing avatar-->
                                                                            <!--begin::Edit-->
                                                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                                <!--begin::Inputs-->
                                                                                <input type="file" name="files[]" multiple id="multiFilesMember" accept=".png, .jpg, .jpeg" />
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
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="">First Name</label><br>
                                                                        <input type="text" class="form-control" id="fname_member">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">Last Name</label><br>
                                                                        <input type="text" class="form-control" id="lname_member">
                                                                    </div>
                                                                </div>
                                                                <div class="row">&nbsp;</div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="">Company Name</label><br>
                                                                        <input type="text" class="form-control" id="company_member">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">Email</label><br>
                                                                        <input type="email" class="form-control" id="email_member">
                                                                    </div>
                                                                </div>
                                                                <div class="row">&nbsp;</div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="">Address</label><br>
                                                                        <input type="text" class="form-control" id="address_member">
                                                                    </div>
                                                                </div>
                                                                <div class="row">&nbsp;</div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="">Contact Number</label><br>
                                                                        <input type="text" class="form-control" id="phone_member">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">Register Date</label><br>
                                                                        <input type="date" class="form-control" id="reg_date_member">
                                                                    </div>
                                                                </div>
                                                                <div class="row">&nbsp;</div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="">ABN</label><br>
                                                                        <input type="text" class="form-control" id="abn_member">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="reset" class="btn btn-light me-3" id="discardMember">Discard</button>
                                                                <button type="submit" class="btn btn-primary" id="btnAddMember">
                                                                    <span class="indicator-label">Submit</span>
                                                                    <span class="indicator-progress">Please wait...
                                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                </button>
                                                            </div>

                                                            <!--end::Modal body-->
                                                        </div>
                                                        <!--end::Modal content-->
                                                    </div>
                                                    <!--end::Modal dialog-->
                                                </div>
                                                <!--end::Modal - Add task-->
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <div class="card-body pt-0">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_members">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="w-10px pe-2">
                                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_members .form-check-input" value="1" />
                                                            </div>
                                                        </th>
                                                        <th class="min-w-125px">Member Name</th>
                                                        <th class="min-w-125px">Contact Person</th>
                                                        <th class="min-w-125px">Email</th>
                                                        <th class="min-w-125px">Status</th>
                                                        <th class="min-w-125px">Joined Date</th>
                                                        <th class="text-end min-w-100px">Actions</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="text-gray-600 fw-semibold">
                                                    <!--begin::Table row-->
                                                    <?php foreach ($users_list->result() as $row) {
                                                        if ($row->user_group_id == 3) { ?>
                                                            <tr>
                                                                <!--begin::Checkbox-->
                                                                <td>
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <!--end::Checkbox-->
                                                                <!--begin::User=-->
                                                                <td class="d-flex align-items-center">

                                                                    <div class="d-flex flex-column">
                                                                        <a href="<?php echo base_url() ?>users/edit_users?id=<?php echo base64_encode($row->user_id) ?>" class="text-gray-800 text-hover-primary mb-1"><?php echo $row->Company_name ?></a>
                                                                        <!-- <span>smith@kpmg.com</span> -->
                                                                    </div>
                                                                    <!--begin::User details-->
                                                                </td>
                                                                <!--end::User=-->
                                                                <!--begin::Role=-->
                                                                <td><?php echo $row->First_name ?></td>
                                                                <!--end::Role=-->
                                                                <!--begin::Last login=-->
                                                                <td>
                                                                    <?php echo $row->Email ?>
                                                                </td>
                                                                <!--end::Last login=-->
                                                                <!--begin::Two step=-->
                                                                <td>
                                                                    <?php if ($row->status == 1) { ?>
                                                                        <div class="badge badge-light-success fw-bold">Approved</div>
                                                                    <?php } else if ($row->status == 2) { ?>
                                                                        <div class="badge badge-light-warning fw-bold">Pending</div>
                                                                    <?php } else { ?>
                                                                        <div class="badge badge-light-danger fw-bold">Suspended</div>
                                                                    <?php } ?>
                                                                </td>
                                                                <!--end::Two step=-->
                                                                <!--begin::Joined-->
                                                                <td><?php echo $row->Register_date ?></td>
                                                                <!--begin::Joined-->
                                                                <!--begin::Action=-->
                                                                <td class="text-end">
                                                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
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
                                                                        <?php if ($row->status == 2) { ?>
                                                                            <div class="menu-item px-3">
                                                                                <a href="<?php echo base_url() ?>users/edit_users?id=<?php echo base64_encode($row->user_id) ?>" class="menu-link px-3">Edit</a>
                                                                            </div>

                                                                            <div class="menu-item px-3">
                                                                                <a href="javascript:;" class="menu-link px-3 approveUser" user_id="<?php echo $row->user_id ?>" user_name="<?php echo $row->Company_name ?>" class="menu-link px-3">Approve</a>
                                                                            </div>
                                                                            <div class="menu-item px-3">
                                                                                <a href="javascript:;" class="menu-link px-3 deleteUser" user_id="<?php echo $row->user_id ?>" user_name="<?php echo $row->Company_name ?>" data-kt-users-table-filter="delete_row">Suspend</a>
                                                                            </div>
                                                                        <?php } else if ($row->status == 1) { ?>
                                                                            <div class="menu-item px-3">
                                                                                <a href="<?php echo base_url() ?>users/edit_users?id=<?php echo base64_encode($row->user_id) ?>" class="menu-link px-3">Edit</a>
                                                                            </div>
                                                                            <div class="menu-item px-3">
                                                                                <a href="javascript:;" class="menu-link px-3 deleteUser" user_id="<?php echo $row->user_id ?>" user_name="<?php echo $row->Company_name ?>" data-kt-users-table-filter="delete_row">Suspend</a>
                                                                            </div>

                                                                        <?php } else { ?>

                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3 resumeUser" user_id="<?php echo $row->user_id ?>" user_name="<?php echo $row->Company_name ?>">Resume</a>
                                                                            </div>

                                                                        <?php } ?>

                                                                    </div>
                                                                    <!--end::Menu-->
                                                                </td>
                                                                <!--end::Action=-->
                                                            </tr>
                                                    <?php }
                                                    } ?>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>


                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kt_list_widget_10_tab_3">
                                    <div class="card">
                                        <div class="card-header border-0 pt-6">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <!--begin::Search-->
                                                <div class="d-flex align-items-center position-relative my-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <input type="text" data-kt-admin-table-filter="search" class="form-control form-control-solid w-250px ps-14 mobile" placeholder="Search user" />
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--begin::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex justify-content-end" data-kt-admin-table-toolbar="base">
                                                    <!--begin::Filter-->
                                                    <button type="button" class="btn btn-sm btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Filter
                                                    </button>
                                                    <!--begin::Menu 1-->
                                                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                                        <!--begin::Header-->
                                                        <div class="px-7 py-5">
                                                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                        </div>
                                                        <!--end::Header-->
                                                        <!--begin::Separator-->
                                                        <div class="separator border-gray-200"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::Content-->
                                                        <div class="px-7 py-5" data-kt-admin-table-filter="form">
                                                            <!--begin::Input group-->
                                                            <div class="mb-10">
                                                                <label class="form-label fs-6 fw-semibold">Status:</label>
                                                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-admin-table-filter="role" data-hide-search="true">
                                                                    <option></option>
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Approved">Approved</option>
                                                                    <option value="Suspended">Suspended</option>

                                                                </select>
                                                            </div>

                                                            <div class="d-flex justify-content-end">
                                                                <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-admin-table-filter="reset">Reset</button>
                                                                <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-admin-table-filter="filter">Apply</button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Menu 1-->
                                                    <!--end::Filter-->
                                                    <!--begin::Export-->
                                                    <a href="<?php echo base_url() ?>users/exportAdmin" type="button" class="btn btn-sm btn-light-primary me-3">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor" />
                                                                <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor" />
                                                                <path opacity="0.3" d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Export
                                                    </a>
                                                    <!--end::Export-->
                                                    <!--begin::Add user-->
                                                    <button type="button" class="btn btn-sm btn-primary p-2" data-bs-toggle="modal" data-bs-target="#kt_modal_add_admin">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Add User
                                                    </button>
                                                    <!--end::Add user-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Group actions-->
                                                <div class="d-flex justify-content-end align-items-center d-none" data-kt-admin-table-toolbar="selected">
                                                    <div class="fw-bold me-5">
                                                        <span class="me-2" data-kt-admin-table-select="selected_count"></span>Selected
                                                    </div>
                                                    <button type="button" class="btn btn-danger" data-kt-admin-table-select="delete_selected">Delete Selected</button>
                                                </div>
                                                <!--end::Group actions-->
                                                <!--begin::Modal - Adjust Balance-->

                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <div class="card-body pt-0">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_admin">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="w-10px pe-2">
                                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_admin .form-check-input" value="1" />
                                                            </div>
                                                        </th>
                                                        <th class="min-w-125px">Admin Name</th>
                                                        <th class="min-w-125px">Contact Person</th>
                                                        <th class="min-w-125px">Email</th>
                                                        <th class="min-w-125px">Status</th>
                                                        <th class="min-w-125px">Joined Date</th>
                                                        <th class="text-end min-w-100px">Actions</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="text-gray-600 fw-semibold">
                                                    <!--begin::Table row-->
                                                    <?php foreach ($users_list->result() as $row) {
                                                        if ($row->user_group_id == 1) {
                                                    ?>
                                                            <tr>
                                                                <!--begin::Checkbox-->
                                                                <td>
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <!--end::Checkbox-->
                                                                <!--begin::User=-->
                                                                <td class="d-flex align-items-center">

                                                                    <div class="d-flex flex-column">
                                                                        <a href="<?php echo base_url() ?>users/edit_users?id=<?php echo base64_encode($row->user_id) ?>" class="text-gray-800 text-hover-primary mb-1"><?php echo $row->Company_name ?></a>
                                                                        <!-- <span>smith@kpmg.com</span> -->
                                                                    </div>
                                                                    <!--begin::User details-->
                                                                </td>
                                                                <!--end::User=-->
                                                                <!--begin::Role=-->
                                                                <td><?php echo $row->First_name ?></td>
                                                                <!--end::Role=-->
                                                                <!--begin::Last login=-->
                                                                <td>
                                                                    <?php echo $row->Email ?>
                                                                </td>
                                                                <!--end::Last login=-->
                                                                <!--begin::Two step=-->
                                                                <td>
                                                                    <?php if ($row->status == 1) { ?>
                                                                        <div class="badge badge-light-success fw-bold">Approved</div>
                                                                    <?php } else if ($row->status == 2) { ?>
                                                                        <div class="badge badge-light-warning fw-bold">Pending</div>
                                                                    <?php } else { ?>
                                                                        <div class="badge badge-light-danger fw-bold">Suspended</div>
                                                                    <?php } ?>
                                                                </td>
                                                                <!--end::Two step=-->
                                                                <!--begin::Joined-->
                                                                <td><?php echo $row->Register_date ?></td>
                                                                <!--begin::Joined-->
                                                                <!--begin::Action=-->
                                                                <td class="text-end">
                                                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
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
                                                                        <?php if ($row->status == 2) { ?>
                                                                            <div class="menu-item px-3">
                                                                                <a href="<?php echo base_url() ?>users/edit_users?id=<?php echo base64_encode($row->user_id) ?>" class="menu-link px-3">Edit</a>
                                                                            </div>

                                                                            <div class="menu-item px-3">
                                                                                <a href="javascript:;" class="menu-link px-3 approveUser" user_id="<?php echo $row->user_id ?>" user_name="<?php echo $row->Company_name ?>" class="menu-link px-3">Approve</a>
                                                                            </div>
                                                                            <div class="menu-item px-3">
                                                                                <a href="javascript:;" class="menu-link px-3 deleteUser" user_id="<?php echo $row->user_id ?>" user_name="<?php echo $row->Company_name ?>" data-kt-users-table-filter="delete_row">Suspend</a>
                                                                            </div>
                                                                        <?php } else if ($row->status == 1) { ?>
                                                                            <div class="menu-item px-3">
                                                                                <a href="<?php echo base_url() ?>users/edit_users?id=<?php echo base64_encode($row->user_id) ?>" class="menu-link px-3">Edit</a>
                                                                            </div>
                                                                            <div class="menu-item px-3">
                                                                                <a href="javascript:;" class="menu-link px-3 deleteUser" user_id="<?php echo $row->user_id ?>" user_name="<?php echo $row->Company_name ?>" data-kt-users-table-filter="delete_row">Suspend</a>
                                                                            </div>

                                                                        <?php } else { ?>

                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3 resumeUser" user_id="<?php echo $row->user_id ?>" user_name="<?php echo $row->Company_name ?>">Resume</a>
                                                                            </div>

                                                                        <?php } ?>

                                                                    </div>
                                                                    <!--end::Menu-->
                                                                </td>
                                                                <!--end::Action=-->
                                                            </tr>
                                                    <?php }
                                                    } ?>
                                                    <!--end::Table row-->

                                                </tbody>
                                                <!--end::Table body-->
                                            </table>


                                        </div>
                                        <div class="modal fade" id="kt_modal_add_admin" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header" id="kt_modal_add_user_header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bold">Add Admin</h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" id="closeAdmin" data-kt-users-modal-action="close">
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
                                                    <div class="modal-body">
                                                        <div class="mb-7">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold mb-2">
                                                                <span>Add Avatar</span>
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


                                                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?php echo base_url() ?>assets/media/avatars/blank.svg"></div>

                                                                    <!--end::Preview existing avatar-->
                                                                    <!--begin::Edit-->
                                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                                        <!--begin::Inputs-->
                                                                        <input type="file" name="files[]" multiple id="multiFiles_admin" accept=".png, .jpg, .jpeg" />
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
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="">First Name</label><br>
                                                                <input type="text" class="form-control" id="fname_admin">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="">Last Name</label><br>
                                                                <input type="text" class="form-control" id="lname_admin">
                                                            </div>
                                                        </div>
                                                        <div class="row">&nbsp;</div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="">Company Name</label><br>
                                                                <input type="text" class="form-control" id="company_admin">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="">Email</label><br>
                                                                <input type="email" class="form-control" id="email_admin">
                                                            </div>
                                                        </div>
                                                        <div class="row">&nbsp;</div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="">Address</label><br>
                                                                <input type="text" class="form-control" id="address_admin">
                                                            </div>
                                                        </div>
                                                        <div class="row">&nbsp;</div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="">Contact Number</label><br>
                                                                <input type="text" class="form-control" id="phone_admin">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="">Register Date</label><br>
                                                                <input type="date" class="form-control" id="reg_date_admin">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" class="btn btn-light me-3" id="discardAdmin">Discard</button>
                                                        <button type="submit" class="btn btn-primary" id="btnAddAdmin">
                                                            <span class="indicator-label">Submit</span>
                                                            <span class="indicator-progress">Please wait...
                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                    </div>

                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
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
    <script src="<?php echo base_url() ?>assets/js/custom/apps/user-management/users/list/table.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets/js/custom/apps/user-management/users/list/export-users.js"></script> -->
    <!-- <script src="<?php echo base_url() ?>assets/js/custom/apps/user-management/users/list/add.js"></script> -->

    <script>
        $('#closeBtn').click(function() {
            $('#kt_modal_add_user').modal('toggle');
        });
        $('#discardSupplier').click(function() {
            $('#kt_modal_add_user').modal('toggle');
        });
        $('#closeModal').click(function() {
            $('#kt_modal_add_member').modal('toggle');
        });
        $('#discardMember').click(function() {
            $('#kt_modal_add_member').modal('toggle');
        });
        $('#closeAdmin').click(function() {
            $('#kt_modal_add_admin').modal('toggle');
        });
        $('#discardAdmin').click(function() {
            $('#kt_modal_add_admin').modal('toggle');
        });

        $('#btnAddSupplier').click(function() {
            var first_name = $('#fname').val();
            var last_name = $('#lname').val();
            var company = $('#company').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var address = $('#address').val();
            var register_date = $('#reg_date').val();
            var supplierRebate = $('#supplierRebate').val();
            var memberRebate = $('#memberRebate').val();
            var period = $('#period').val();
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
            } else if (email == "") {
                swal.fire({
                    text: "Sorry, Email required",
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

            }
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
            } else if (period == "-Select Period-") {
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
                                url: "<?php echo base_url(); ?>users/add_supplier",
                                method: "POST",
                                data: {
                                    first_name: first_name,
                                    last_name: last_name,
                                    company: company,
                                    phone: phone,
                                    address: address,
                                    register_date: register_date,
                                    abn: abn,
                                    image_name: image_name,
                                    supplierRebate: supplierRebate,
                                    memberRebate: memberRebate,
                                    period: period,
                                    email: email
                                },
                                success: function(data) {
                                    alert(data);
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


        $('#btnAddMember').click(function() {
            var first_name = $('#fname_member').val();
            var last_name = $('#lname_member').val();
            var company = $('#company_member').val();
            var phone = $('#phone_member').val();
            var email = $('#email_member').val();
            var address = $('#address_member').val();
            var register_date = $('#reg_date_member').val();
            var abn = $('#abn_member').val();
            var form_data = new FormData();
            var image = document.getElementById('multiFilesMember').files.length;
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
            } else if (email == "") {
                swal.fire({
                    text: "Sorry, Email required",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                });
            } else if (document.getElementById('multiFilesMember').files.length > 1) {
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
                    form_data.append("files[]", document.getElementById('multiFilesMember').files[x]);
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
                                url: "<?php echo base_url(); ?>users/add_member",
                                method: "POST",
                                data: {
                                    first_name: first_name,
                                    last_name: last_name,
                                    company: company,
                                    phone: phone,
                                    address: address,
                                    register_date: register_date,
                                    image_name: image_name,
                                    email: email
                                },
                                success: function(data) {
                                    alert(data);
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

        $('#btnAddAdmin').click(function() {
            var first_name = $('#fname_admin').val();
            var last_name = $('#lname_admin').val();
            var company = $('#company_admin').val();
            var phone = $('#phone_admin').val();
            var email = $('#email_admin').val();
            var address = $('#address_admin').val();
            var register_date = $('#reg_date_admin').val();
            var form_data = new FormData();
            var image = document.getElementById('multiFiles_admin').files.length;
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
            } else if (email == "") {
                swal.fire({
                    text: "Sorry, Email required",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                });
            } else if (document.getElementById('multiFilesMember').files.length > 1) {
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
                    form_data.append("files[]", document.getElementById('multiFiles_admin').files[x]);
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
                                url: "<?php echo base_url(); ?>users/add_admin",
                                method: "POST",
                                data: {
                                    first_name: first_name,
                                    last_name: last_name,
                                    company: company,
                                    phone: phone,
                                    address: address,
                                    register_date: register_date,
                                    image_name: image_name,
                                    email: email
                                },
                                success: function(data) {
                                    alert(data);
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

        $('.approveUser').click(function() {
            var user_id = $(this).attr('user_id');
            var user_name = $(this).attr('user_name');
            Swal.fire({
                text: "Are you sure you want to approve " + user_name + "?",
                icon: "warning",
                showCancelButton: !0,
                buttonsStyling: !1,
                confirmButtonText: "Yes, approve!",
                cancelButtonText: "No, cancel",
                customClass: {
                    confirmButton: "btn fw-bold btn-warning",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            }).then((function(e) {
                if (e.value) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>users/approve_user",
                        method: "POST",
                        data: {
                            user_id: user_id,

                        },
                        success: function(data) {
                            var ret_data = $.parseJSON(data);
                            if (ret_data.status == 1) {
                                swal.fire({
                                    text: user_name + ret_data.ret_data,
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
                    Swal.fire({
                        text: "Selected user was not approved.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary"
                        }
                    })
                }
            }))
        })

        $('.deleteUser').click(function() {
            var user_id = $(this).attr('user_id');
            var user_name = $(this).attr('user_name');
            Swal.fire({
                text: "Are you sure you want to suspend " + user_name + "?",
                icon: "warning",
                showCancelButton: !0,
                buttonsStyling: !1,
                confirmButtonText: "Yes, suspend!",
                cancelButtonText: "No, cancel",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            }).then((function(e) {
                if (e.value) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>users/suspend_user",
                        method: "POST",
                        data: {
                            user_id: user_id,

                        },
                        success: function(data) {
                            var ret_data = $.parseJSON(data);
                            if (ret_data.status == 1) {
                                swal.fire({
                                    text: user_name + ret_data.ret_data,
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
                    Swal.fire({
                        text: "Selected user was not deleted.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary"
                        }
                    })
                }
            }))
        });

        $('.resumeUser').click(function() {
            var user_id = $(this).attr('user_id');
            var user_name = $(this).attr('user_name');
            Swal.fire({
                text: "Are you sure you want to resume " + user_name + "?",
                icon: "warning",
                showCancelButton: !0,
                buttonsStyling: !1,
                confirmButtonText: "Yes, resume!",
                cancelButtonText: "No, cancel",
                customClass: {
                    confirmButton: "btn fw-bold btn-success",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            }).then((function(e) {
                if (e.value) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>users/resume_user",
                        method: "POST",
                        data: {
                            user_id: user_id,

                        },
                        success: function(data) {
                            var ret_data = $.parseJSON(data);
                            if (ret_data.status == 1) {
                                swal.fire({
                                    text: user_name + ret_data.ret_data,
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
                    Swal.fire({
                        text: "Selected user was not resumed.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary"
                        }
                    })

                }
            }))
        })







        // Member Table Data Start===================================================
        "use strict";
        var KTUsers = function() {
            var e, t, n, r, o = document.getElementById("kt_table_members"),
                c = () => {
                    o.querySelectorAll('[data-kt-member-table-filter="delete_row"]').forEach((t => {
                        t.addEventListener("click", (function(t) {
                            t.preventDefault();
                            const n = t.target.closest("tr"),
                                r = n.querySelectorAll("td")[1].querySelectorAll("a")[1].innerText;
                            // alert(r);
                            Swal.fire({
                                text: "Are you sure you want to delete " + r + "?",
                                icon: "warning",
                                showCancelButton: !0,
                                buttonsStyling: !1,
                                confirmButtonText: "Yes, delete!",
                                cancelButtonText: "No, cancel",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-danger",
                                    cancelButton: "btn fw-bold btn-active-light-primary"
                                }
                            }).then((function(t) {
                                t.value ? Swal.fire({
                                    text: "You have deleted " + r + "!.",
                                    icon: "success",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary"
                                    }
                                }).then((function() {
                                    e.row($(n)).remove().draw()
                                })).then((function() {
                                    a()
                                })) : "cancel" === t.dismiss && Swal.fire({
                                    text: customerName + " was not deleted.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary"
                                    }
                                })
                            }))
                        }))
                    }))
                },
                l = () => {
                    const c = o.querySelectorAll('[type="checkbox"]');
                    t = document.querySelector('[data-kt-member-table-toolbar="base"]'), n = document.querySelector('[data-kt-member-table-toolbar="selected"]'), r = document.querySelector('[data-kt-member-table-select="selected_count"]');
                    const s = document.querySelector('[data-kt-member-table-select="delete_selected"]');
                    c.forEach((e => {
                        e.addEventListener("click", (function() {
                            setTimeout((function() {
                                a()
                            }), 50)
                        }))
                    })), s.addEventListener("click", (function() {
                        alert(s);
                        Swal.fire({
                            text: "Are you sure you want to delete selected customers?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, delete!",
                            cancelButtonText: "No, cancel",
                            customClass: {
                                confirmButton: "btn fw-bold btn-danger",
                                cancelButton: "btn fw-bold btn-active-light-primary"
                            }
                        }).then((function(t) {
                            t.value ? Swal.fire({
                                text: "You have deleted all selected customers!.",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            }).then((function() {
                                c.forEach((t => {
                                    t.checked && e.row($(t.closest("tbody tr"))).remove().draw()
                                }));
                                o.querySelectorAll('[type="checkbox"]')[0].checked = !1
                            })).then((function() {
                                a(), l()
                            })) : "cancel" === t.dismiss && Swal.fire({
                                text: "Selected customers was not deleted.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            })
                        }))
                    }))
                };
            const a = () => {
                const e = o.querySelectorAll('tbody [type="checkbox"]');
                let c = !1,
                    l = 0;
                e.forEach((e => {
                    e.checked && (c = !0, l++)
                })), c ? (r.innerHTML = l, t.classList.add("d-none"), n.classList.remove("d-none")) : (t.classList.remove("d-none"), n.classList.add("d-none"))
            };
            return {
                init: function() {
                    o && (o.querySelectorAll("tbody tr").forEach((e => {
                        const t = e.querySelectorAll("td"),
                            n = t[3].innerText.toLowerCase();
                        let r = 0,
                            o = "minutes";
                        n.includes("yesterday") ? (r = 1, o = "days") : n.includes("mins") ? (r = parseInt(n.replace(/\D/g, "")), o = "minutes") : n.includes("hours") ? (r = parseInt(n.replace(/\D/g, "")), o = "hours") : n.includes("days") ? (r = parseInt(n.replace(/\D/g, "")), o = "days") : n.includes("weeks") && (r = parseInt(n.replace(/\D/g, "")), o = "weeks");
                        const c = moment().subtract(r, o).format();
                        t[3].setAttribute("data-order", c);
                        const l = moment(t[5].innerHTML, "DD MMM YYYY, LT").format();
                        t[5].setAttribute("data-order", l)
                    })), (e = $(o).DataTable({
                        info: !1,
                        order: [],
                        pageLength: 10,
                        lengthChange: !1,
                        columnDefs: [{
                            orderable: !1,
                            targets: 0
                        }, {
                            orderable: !1,
                            targets: 6
                        }]
                    })).on("draw", (function() {
                        l(), c(), a()
                    })), l(), document.querySelector('[data-kt-member-table-filter="search"]').addEventListener("keyup", (function(t) {
                        e.search(t.target.value).draw()
                    })), document.querySelector('[data-kt-member-table-filter="reset"]').addEventListener("click", (function() {
                        document.querySelector('[data-kt-member-table-filter="form"]').querySelectorAll("select").forEach((e => {
                            $(e).val("").trigger("change")
                        })), e.search("").draw()
                    })), c(), (() => {
                        const t = document.querySelector('[data-kt-member-table-filter="form"]'),
                            n = t.querySelector('[data-kt-member-table-filter="filter"]'),
                            r = t.querySelectorAll("select");
                        n.addEventListener("click", (function() {
                            var t = "";
                            r.forEach(((e, n) => {
                                e.value && "" !== e.value && (0 !== n && (t += " "), t += e.value)
                            })), e.search(t).draw()
                        }))
                    })())
                }
            }
        }();
        KTUtil.onDOMContentLoaded((function() {
            KTUsers.init()
        }));



        "use strict";
        var KTModalExportMembers = function() {
            const t = document.getElementById("kt_modal_export_members"),
                e = t.querySelector("#kt_modal_export_member_form"),
                n = new bootstrap.Modal(t);
            return {
                init: function() {
                    ! function() {
                        var o = FormValidation.formValidation(e, {
                            fields: {
                                format: {
                                    validators: {
                                        notEmpty: {
                                            message: "File format is required"
                                        }
                                    }
                                }
                            },
                            plugins: {
                                trigger: new FormValidation.plugins.Trigger,
                                bootstrap: new FormValidation.plugins.Bootstrap5({
                                    rowSelector: ".fv-row",
                                    eleInvalidClass: "",
                                    eleValidClass: ""
                                })
                            }
                        });
                        const i = t.querySelector('[data-kt-member-modal-action="submit"]');
                        i.addEventListener("click", (function(t) {
                            t.preventDefault(), o && o.validate().then((function(t) {
                                console.log("validated!"), "Valid" == t ? (i.setAttribute("data-kt-indicator", "on"), i.disabled = !0, setTimeout((function() {
                                    i.removeAttribute("data-kt-indicator"), Swal.fire({
                                        text: "User list has been successfully exported!",
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    }).then((function(t) {
                                        t.isConfirmed && (n.hide(), i.disabled = !1)
                                    }))
                                }), 2e3)) : Swal.fire({
                                    text: "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                })
                            }))
                        })), t.querySelector('[data-kt-member-modal-action="cancel"]').addEventListener("click", (function(t) {
                            t.preventDefault(), Swal.fire({
                                text: "Are you sure you would like to cancel?",
                                icon: "warning",
                                showCancelButton: !0,
                                buttonsStyling: !1,
                                confirmButtonText: "Yes, cancel it!",
                                cancelButtonText: "No, return",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                    cancelButton: "btn btn-active-light"
                                }
                            }).then((function(t) {
                                t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
                                    text: "Your form has not been cancelled!.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                })
                            }))
                        })), t.querySelector('[data-kt-member-modal-action="close"]').addEventListener("click", (function(t) {
                            t.preventDefault(), Swal.fire({
                                text: "Are you sure you would like to cancel?",
                                icon: "warning",
                                showCancelButton: !0,
                                buttonsStyling: !1,
                                confirmButtonText: "Yes, cancel it!",
                                cancelButtonText: "No, return",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                    cancelButton: "btn btn-active-light"
                                }
                            }).then((function(t) {
                                t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
                                    text: "Your form has not been cancelled!.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                })
                            }))
                        }))
                    }()
                }
            }
        }();
        KTUtil.onDOMContentLoaded((function() {
            KTModalExportMembers.init()
        }));

        // Member Table Data End===================================================




        // Member Table Data Start===================================================
        "use strict";
        var KTAdmin = function() {
            var e, t, n, r, o = document.getElementById("kt_table_admin"),
                c = () => {
                    o.querySelectorAll('[data-kt-admin-table-filter="delete_row"]').forEach((t => {
                        t.addEventListener("click", (function(t) {
                            t.preventDefault();
                            const n = t.target.closest("tr"),
                                r = n.querySelectorAll("td")[1].querySelectorAll("a")[1].innerText;
                            Swal.fire({
                                text: "Are you sure you want to delete " + r + "?",
                                icon: "warning",
                                showCancelButton: !0,
                                buttonsStyling: !1,
                                confirmButtonText: "Yes, delete!",
                                cancelButtonText: "No, cancel",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-danger",
                                    cancelButton: "btn fw-bold btn-active-light-primary"
                                }
                            }).then((function(t) {
                                t.value ? Swal.fire({
                                    text: "You have deleted " + r + "!.",
                                    icon: "success",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary"
                                    }
                                }).then((function() {
                                    e.row($(n)).remove().draw()
                                })).then((function() {
                                    a()
                                })) : "cancel" === t.dismiss && Swal.fire({
                                    text: customerName + " was not deleted.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary"
                                    }
                                })
                            }))
                        }))
                    }))
                },
                l = () => {
                    const c = o.querySelectorAll('[type="checkbox"]');
                    t = document.querySelector('[data-kt-admin-table-toolbar="base"]'), n = document.querySelector('[data-kt-admin-table-toolbar="selected"]'), r = document.querySelector('[data-kt-admin-table-select="selected_count"]');
                    const s = document.querySelector('[data-kt-admin-table-select="delete_selected"]');
                    c.forEach((e => {
                        e.addEventListener("click", (function() {
                            setTimeout((function() {
                                a()
                            }), 50)
                        }))
                    })), s.addEventListener("click", (function() {
                        Swal.fire({
                            text: "Are you sure you want to delete selected customers?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, delete!",
                            cancelButtonText: "No, cancel",
                            customClass: {
                                confirmButton: "btn fw-bold btn-danger",
                                cancelButton: "btn fw-bold btn-active-light-primary"
                            }
                        }).then((function(t) {
                            t.value ? Swal.fire({
                                text: "You have deleted all selected customers!.",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            }).then((function() {
                                c.forEach((t => {
                                    t.checked && e.row($(t.closest("tbody tr"))).remove().draw()
                                }));
                                o.querySelectorAll('[type="checkbox"]')[0].checked = !1
                            })).then((function() {
                                a(), l()
                            })) : "cancel" === t.dismiss && Swal.fire({
                                text: "Selected customers was not deleted.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            })
                        }))
                    }))
                };
            const a = () => {
                const e = o.querySelectorAll('tbody [type="checkbox"]');
                let c = !1,
                    l = 0;
                e.forEach((e => {
                    e.checked && (c = !0, l++)
                })), c ? (r.innerHTML = l, t.classList.add("d-none"), n.classList.remove("d-none")) : (t.classList.remove("d-none"), n.classList.add("d-none"))
            };
            return {
                init: function() {
                    o && (o.querySelectorAll("tbody tr").forEach((e => {
                        const t = e.querySelectorAll("td"),
                            n = t[3].innerText.toLowerCase();
                        let r = 0,
                            o = "minutes";
                        n.includes("yesterday") ? (r = 1, o = "days") : n.includes("mins") ? (r = parseInt(n.replace(/\D/g, "")), o = "minutes") : n.includes("hours") ? (r = parseInt(n.replace(/\D/g, "")), o = "hours") : n.includes("days") ? (r = parseInt(n.replace(/\D/g, "")), o = "days") : n.includes("weeks") && (r = parseInt(n.replace(/\D/g, "")), o = "weeks");
                        const c = moment().subtract(r, o).format();
                        t[3].setAttribute("data-order", c);
                        const l = moment(t[5].innerHTML, "DD MMM YYYY, LT").format();
                        t[5].setAttribute("data-order", l)
                    })), (e = $(o).DataTable({
                        info: !1,
                        order: [],
                        pageLength: 10,
                        lengthChange: !1,
                        columnDefs: [{
                            orderable: !1,
                            targets: 0
                        }, {
                            orderable: !1,
                            targets: 6
                        }]
                    })).on("draw", (function() {
                        l(), c(), a()
                    })), l(), document.querySelector('[data-kt-admin-table-filter="search"]').addEventListener("keyup", (function(t) {
                        e.search(t.target.value).draw()
                    })), document.querySelector('[data-kt-admin-table-filter="reset"]').addEventListener("click", (function() {
                        document.querySelector('[data-kt-admin-table-filter="form"]').querySelectorAll("select").forEach((e => {
                            $(e).val("").trigger("change")
                        })), e.search("").draw()
                    })), c(), (() => {
                        const t = document.querySelector('[data-kt-admin-table-filter="form"]'),
                            n = t.querySelector('[data-kt-admin-table-filter="filter"]'),
                            r = t.querySelectorAll("select");
                        n.addEventListener("click", (function() {
                            var t = "";
                            r.forEach(((e, n) => {
                                e.value && "" !== e.value && (0 !== n && (t += " "), t += e.value)
                            })), e.search(t).draw()
                        }))
                    })())
                }
            }
        }();
        KTUtil.onDOMContentLoaded((function() {
            KTAdmin.init()
        }));



        "use strict";
        var KTModalExportAdmin = function() {
            const t = document.getElementById("kt_modal_export_admin"),
                e = t.querySelector("#kt_modal_export_admin_form"),
                n = new bootstrap.Modal(t);
            return {
                init: function() {
                    ! function() {
                        var o = FormValidation.formValidation(e, {
                            fields: {
                                format: {
                                    validators: {
                                        notEmpty: {
                                            message: "File format is required"
                                        }
                                    }
                                }
                            },
                            plugins: {
                                trigger: new FormValidation.plugins.Trigger,
                                bootstrap: new FormValidation.plugins.Bootstrap5({
                                    rowSelector: ".fv-row",
                                    eleInvalidClass: "",
                                    eleValidClass: ""
                                })
                            }
                        });
                        const i = t.querySelector('[data-kt-admin-modal-action="submit"]');
                        i.addEventListener("click", (function(t) {
                            t.preventDefault(), o && o.validate().then((function(t) {
                                console.log("validated!"), "Valid" == t ? (i.setAttribute("data-kt-indicator", "on"), i.disabled = !0, setTimeout((function() {
                                    i.removeAttribute("data-kt-indicator"), Swal.fire({
                                        text: "User list has been successfully exported!",
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    }).then((function(t) {
                                        t.isConfirmed && (n.hide(), i.disabled = !1)
                                    }))
                                }), 2e3)) : Swal.fire({
                                    text: "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                })
                            }))
                        })), t.querySelector('[data-kt-admin-modal-action="cancel"]').addEventListener("click", (function(t) {
                            t.preventDefault(), Swal.fire({
                                text: "Are you sure you would like to cancel?",
                                icon: "warning",
                                showCancelButton: !0,
                                buttonsStyling: !1,
                                confirmButtonText: "Yes, cancel it!",
                                cancelButtonText: "No, return",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                    cancelButton: "btn btn-active-light"
                                }
                            }).then((function(t) {
                                t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
                                    text: "Your form has not been cancelled!.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                })
                            }))
                        })), t.querySelector('[data-kt-admin-modal-action="close"]').addEventListener("click", (function(t) {
                            t.preventDefault(), Swal.fire({
                                text: "Are you sure you would like to cancel?",
                                icon: "warning",
                                showCancelButton: !0,
                                buttonsStyling: !1,
                                confirmButtonText: "Yes, cancel it!",
                                cancelButtonText: "No, return",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                    cancelButton: "btn btn-active-light"
                                }
                            }).then((function(t) {
                                t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
                                    text: "Your form has not been cancelled!.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                })
                            }))
                        }))
                    }()
                }
            }
        }();
        KTUtil.onDOMContentLoaded((function() {
            KTModalExportAdmin.init()
        }));

        // Admin Table Data End===================================================
    </script>


</body>

</html>