<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Supplier Dashboard - Buyyn</title>
</head>

<body>
  <!--begin::Wrapper-->
  <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Wrapper container-->
    <div class="app-container container-xxl d-flex flex-row flex-column-fluid">
      <!--begin::Main-->
      <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
          <!--begin::Content-->
          <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-xl-10">
              <!--begin::Col-->
              <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6 mb-md-5 mb-xl-10">
                <!--begin::Card widget 5-->
                <div class="card card-flush h-100 mb-xl-10">
                  <!--begin::Header-->
                  <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                      <!--begin::Info-->
                      <div class="d-flex align-items-center">
                        <!--begin::Amount-->
                        <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2"><?php foreach ($view_total_sales->result() as $row)
                                                                                  if ($row->total_sales == NULL) {
                                                                                    echo "0";
                                                                                  } else {
                                                                                    echo number_format($row->total_sales);
                                                                                  }
                                                                                ?></span>
                        <!--end::Amount-->
                        <!--begin::Badge-->
                        <span class="badge badge-light-danger fs-base">
                          <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                          <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                              <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->2.2%
                        </span>
                        <!--end::Badge-->
                      </div>
                      <!--end::Info-->
                      <!--begin::Subtitle-->

                      <span class="text-gray-400 pt-1 fw-semibold fs-6">Total Sales: <?php echo date("Y"); ?></span>
                      <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                  </div>
                  <!--end::Header-->
                  <!--begin::Card body-->
                  <div class="card-body d-flex align-items-end pt-0">
                    <!--begin::Progress-->
                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                      <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                        <span class="fw-bolder fs-6 text-dark">1,048 to Goal</span>
                        <span class="fw-bold fs-6 text-gray-400">62%</span>
                      </div>
                      <div class="h-8px mx-3 w-100 bg-light-success rounded">
                        <div class="bg-success rounded h-8px" role="progressbar" style="width: 62%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <!--end::Progress-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Card widget 5-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6 mb-md-5 mb-xl-10">
                <!--begin::Card widget 6-->
                <div class="card card-flush h-100 mb-5 mb-xl-10">
                  <!--begin::Header-->
                  <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                      <!--begin::Info-->
                      <div class="d-flex align-items-center">
                        <!--begin::Currency-->
                        <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                        <!--end::Currency-->
                        <!--begin::Amount-->
                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2"><?php foreach ($view_top_sales->result() as $row)
                                                                                  if ($row->top_sales == NULL) {
                                                                                    echo "0";
                                                                                  } else {
                                                                                    echo number_format($row->top_sales);
                                                                                  }
                                                                                ?></span>
                        <!--end::Amount-->
                        <!--begin::Badge-->
                        <span class="badge badge-light-primary fs-base">
                          <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                          <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                              <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->2.6%
                        </span>
                        <!--end::Badge-->
                      </div>
                      <!--end::Info-->
                      <!--begin::Subtitle-->
                      <span class="text-gray-400 pt-1 fw-semibold fs-6">Top Performing Member : <?php foreach ($view_top_sales->result() as $row)

                                                                                                  echo $row->name;

                                                                                                ?></span>
                      <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                  </div>
                  <!--end::Header-->
                  <!--begin::Card body-->
                  <div class="card-body d-flex align-items-end px-0 pb-0">
                    <!--begin::Chart-->
                    <div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
                    <!--end::Chart-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Card widget 6-->
              </div>
              <!--end::Col-->

            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
              <!--begin::Col-->
              <div class="col mb-xl-10">
                <div class="card h-100">
                  <div class="row d-flex my-3 p-2">
                    <div class="col-md-2 mt-3 m-2">
                      <select name="language" aria-label="Select Year" id="selectYear" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg">
                        <option value="- Select Year -">
                          - Select Financial Year -
                        </option>
                        <?php
                        $endYear = date("Y") - 2014;

                        if (date("m-d") > '06-30') {
                          for ($i = date("Y") - $endYear; $i <= date("Y") + 1; $i++) {
                        ?>
                            <option value="<?php echo $i ?>">
                              <?php echo $i ?></option>
                          <?php
                          }
                        } else {
                          for ($i = date("Y") - $endYear; $i <= date("Y"); $i++) {
                          ?>
                            <option value="<?php echo $i ?>">
                              <?php echo $i ?></option>
                        <?php

                          }
                        }
                        ?>

                      </select>

                    </div>
                    <div class="col-md-2 mt-3 m-2">
                      <select name="language" id="selectMember" aria-label="Select Member" data-control="select2" data-placeholder="Select a Member..." class="form-select form-select-solid form-select-lg">
                        <option value="- Select Member -">- Select Member -</option>
                        <?php foreach ($all_membrs->result() as $row) { ?>
                          <option value="<?php echo $row->user_id ?>"><?php echo $row->Company_name ?></option>
                        <?php } ?>
                      </select>

                    </div>
                  </div>


                  <div class="card card-bordered">
                    <div class="card-body">
                      <div id="kt_charts_widget_23" class="w-100 h-500px"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end::col -->
            </div>

            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
              <!--begin::Col-->
              <div class="col-xl-8 mb-5 mb-xl-10">
                <!--begin::Table Widget 4-->
                <div class="card card-flush h-xl-100">
                  <!--begin::Card header-->
                  <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                      <span class="card-label fw-bold text-gray-800">Process Log</span>
                      <!-- <span class="text-gray-400 mt-1 fw-semibold fs-6"
                              >Avg. 57 orders per day</span >-->

                    </h3>
                    <!--end::Title-->
                    <!--begin::Actions-->
                    <div class="card-toolbar">
                      <!--begin::Filters-->
                      <div class="d-flex flex-stack flex-wrap gap-4">

                        <!--begin::Status-->
                        <div class="d-flex align-items-center fw-bold">
                          <!--begin::Label-->
                          <div class="text-gray-400 fs-7 me-2">
                            Status
                          </div>
                          <!--end::Label-->
                          <!--begin::Select-->
                          <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
                            <option></option>
                            <option value="Show All" selected="selected">
                              Show All
                            </option>
                            <option value="Shipped">Shipped</option>
                            <option value="Confirmed">Confirmed</option>
                            <option value="Rejected">Rejected</option>
                            <option value="Pending">Pending</option>
                          </select>
                          <!--end::Select-->
                        </div>
                        <!--end::Status-->
                        <!--begin::Search-->
                        <div class="position-relative my-1">
                          <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                          <span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                              <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                          <input type="text" id="processLogTableSearch" onkeyup="searchFunctionProcessLog()" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                        </div>
                        <!--end::Search-->
                      </div>
                      <!--begin::Filters-->
                    </div>
                    <!--end::Actions-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-2" style="overflow-x:scroll;">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                      <!--begin::Table head-->
                      <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                          <th class="min-w-125px">Log ID</th>
                          <th class="min-w-125px">Username</th>
                          <th class="min-w-125px">Action</th>
                          <th class="min-w-125px">Device Name</th>
                          <th class="min-w-125px">IP Address</th>
                          <th class="min-w-125px">Date and Time</th>
                          <th class="text-end"></th>
                        </tr>
                        <!--end::Table row-->
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody class="fw-bold text-gray-600">




                        <?php foreach ($all_processors->result() as $row) { ?>
                          <tr>

                            <td class="text-start pe-0">
                              <?php if ($row->process_type_id == 200) { ?>
                                <span class="badge py-3 px-4 fs-7 badge-light-success">200 OK</span>
                              <?php } else if ($row->process_type_id == 522) { ?>
                                <span class="badge py-3 px-4 fs-7 badge-light-warning">522 Warning</span>
                              <?php } else { ?>
                                <span class="badge py-3 px-4 fs-7 badge-light-danger">404 Error</span>
                              <?php } ?>

                            </td>
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


                          </tr>
                        <?php } ?>





                      </tbody>
                      <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                  </div>
                  <!--end::Card body-->





                </div>
                <!--end::Table Widget 4-->

              </div>
              <!--end::Col-->

              <!--begin::Col-->
              <div class="col-xl-4">
                <!--begin::List Widget 5-->
                <div class="card card-xl-stretch">
                  <!--begin::Header-->
                  <div class="card-header align-items-center border-0 mt-4">
                    <h3 class="card-title align-items-start flex-column">
                      <span class="fw-bold mb-2 text-dark">Quick View</span>
                      <span class="text-muted fw-semibold fs-7">890,344 Sales</span>
                    </h3>
                    <div class="card-toolbar">
                      <!--begin::Menu-->
                      <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                              <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                              <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                              <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                            </g>
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </button>
                      <!--begin::Menu 1-->
                      <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f16f508ad8">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                          <div class="fs-5 text-dark fw-bold">
                            Filter Options
                          </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                          <!--begin::Input group-->
                          <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Status:</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                              <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f16f508ad8" data-allow-clear="true">
                                <option></option>
                                <option value="1">Approved</option>
                                <option value="2">Pending</option>
                                <option value="2">In Process</option>
                                <option value="2">Rejected</option>
                              </select>
                            </div>
                            <!--end::Input-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Member Type:</label>
                            <!--end::Label-->
                            <!--begin::Options-->
                            <div class="d-flex">
                              <!--begin::Options-->
                              <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" value="1" />
                                <span class="form-check-label">Author</span>
                              </label>
                              <!--end::Options-->
                              <!--begin::Options-->
                              <label class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                <span class="form-check-label">Customer</span>
                              </label>
                              <!--end::Options-->
                            </div>
                            <!--end::Options-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Notifications:</label>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                              <label class="form-check-label">Enabled</label>
                            </div>
                            <!--end::Switch-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Actions-->
                          <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">
                              Reset
                            </button>
                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">
                              Apply
                            </button>
                          </div>
                          <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                      </div>
                      <!--end::Menu 1-->
                      <!--end::Menu-->
                    </div>
                  </div>
                  <!--end::Header-->
                  <!--begin::Body-->
                  <div class="card-body pt-5">
                    <!--begin::Timeline-->
                    <div class="timeline-label">
                      <!--begin::Item-->
                      <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">
                          08:42
                        </div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                          <i class="fa fa-genderless text-warning fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Text-->
                        <div class="fw-mormal timeline-content text-muted ps-3">
                          Outlines keep you honest. And keep structure
                        </div>
                        <!--end::Text-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">
                          10:00
                        </div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                          <i class="fa fa-genderless text-success fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Content-->
                        <div class="timeline-content d-flex">
                          <span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
                        </div>
                        <!--end::Content-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">
                          14:37
                        </div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                          <i class="fa fa-genderless text-danger fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Desc-->
                        <div class="timeline-content fw-bold text-gray-800 ps-3">
                          Make deposit
                          <a href="#" class="text-primary">USD 700</a>. to
                          ESL
                        </div>
                        <!--end::Desc-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">
                          16:50
                        </div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                          <i class="fa fa-genderless text-primary fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Text-->
                        <div class="timeline-content fw-mormal text-muted ps-3">
                          Indulging in poorly driving and keep structure
                          keep great
                        </div>
                        <!--end::Text-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">
                          21:03
                        </div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                          <i class="fa fa-genderless text-danger fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Desc-->
                        <div class="timeline-content fw-semibold text-gray-800 ps-3">
                          New order placed
                          <a href="#" class="text-primary">#XF-2356</a>.
                        </div>
                        <!--end::Desc-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">
                          16:50
                        </div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                          <i class="fa fa-genderless text-primary fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Text-->
                        <div class="timeline-content fw-mormal text-muted ps-3">
                          Indulging in poorly driving and keep structure
                          keep great
                        </div>
                        <!--end::Text-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">
                          21:03
                        </div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                          <i class="fa fa-genderless text-danger fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Desc-->
                        <div class="timeline-content fw-semibold text-gray-800 ps-3">
                          New order placed
                          <a href="#" class="text-primary">#XF-2356</a>.
                        </div>
                        <!--end::Desc-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="timeline-item mb-9">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">
                          10:30
                        </div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                          <i class="fa fa-genderless text-success fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Text-->
                        <div class="timeline-content fw-mormal text-muted ps-3">
                          Finance KPI Mobile app launch preparion meeting
                        </div>
                        <!--end::Text-->
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Timeline-->
                  </div>
                  <!--end: Card Body-->
                </div>
                <!--end: List Widget 5-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
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
        <!--end::Footer-->
      </div>
      <!--end:::Main-->
    </div>
    <!--end::Wrapper container-->
  </div>
  <!--end::Wrapper-->

  <script>
    var element = document.getElementById('kt_charts_widget_23');

    var height = parseInt(KTUtil.css(element, 'height'));
    var labelColor = KTUtil.getCssVariableValue('--kt-gray-500');
    var borderColor = KTUtil.getCssVariableValue('--kt-gray-200');
    var baseColor = KTUtil.getCssVariableValue('--kt-primary');
    var secondaryColor = KTUtil.getCssVariableValue('--kt-gray-300');
    $(document).ready(function() {
      load_memberwise_data();

    });

    function load_memberwise_data() {
      $.ajax({
        url: "<?php echo base_url(); ?>Charts/member_data",
        method: "POST",
        data: {},
        dataType: "JSON",
        success: function(data) {
          load_data(data);
        }
      })
    }

    $('#selectYear').change(function() {
      var date_from = "";
      var date_to = "";
      var year = $('#selectYear').val();
      var member = $('#selectMember').val();

      if (year == "- Select Year -" && member == "- Select Member -") {
        load_memberwise_data();
      } else if (year != "- Select Year -" && member == "- Select Member -") {

        $.ajax({
          url: "<?php echo base_url(); ?>Charts/member_data_single_year",
          method: "POST",
          data: {
            year: year
          },
          dataType: "JSON",
          success: function(data) {
            load_data(data);
          }
        })

      } else if (year != "- Select Year -" && member != "- Select Member -") {

        $.ajax({
          url: "<?php echo base_url(); ?>Charts/member_data_single",
          method: "POST",
          data: {
            year: year,
            member:member
          },
          dataType: "JSON",
          success: function(data) {
            load_data(data);
          }
        })

      }
    });



    function load_data(data) {
      var options = {

        series: [{
          name: 'Net Profit',
          data: data
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
              return '$' + val + ''
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
  </script>
</body>

</html>