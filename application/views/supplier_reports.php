<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Reports - Buyyn</title>
</head>
<body>
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
            
              <select name="language" aria-label="Select Month" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg rounded-4">
                                                                    <option value="- Report Type -">- Date Range -</option>
                                                                    <option value="option1">2020 - 2021</option>
                                                                    <option value="option2">2021 - 2022</option>
                                                                </select>
              </div>

              </div>
            
            <!--end::Destination-->
            <div class="col-md-3 mobile mobile w-100 mw-300px">
              <select name="language" aria-label="Select Month" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg">
                                                                    <option value="- Report Type -">- Report Type -</option>
                                                                    <option value="option1">Member Performance</option>
                                                                </select>
            </div>
            <div class="col-md-3 mobile mobile w-100 mw-300px">
             
                    <!-- <input class="form-control d-flex align-items-center" value="" id="kt_tagify_suppliers" /> -->
                    <input class="form-control d-flex align-items-center" type="text" id="myInput" onkeyup="searchFunction()" placeholder="Search Names..">
                
            </div>
            

            <div class="col-md-2 d-flex align-items-end justify-content-between">
              
              <button class="btn btn-primary mb-0 rounded-4 shadow-md">Apply</button> 
              <!--begin::Export dropdown-->
   <button type="button" class="btn btn-light-primary mx-2 w-100" style="width:150px;" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
    <span class="svg-icon svg-icon-1 position-absolute ml-4">...</span>
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
              <span
                class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4"
              >
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                    opacity="0.5"
                    x="17.0365"
                    y="15.1223"
                    width="8.15546"
                    height="2"
                    rx="1"
                    transform="rotate(45 17.0365 15.1223)"
                    fill="currentColor"
                  />
                  <path
                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                    fill="currentColor"
                  />
                </svg>
              </span>
              <!--end::Svg Icon-->
              <input
                type="text"
                data-kt-table-widget-4="search"
                class="form-control w-150px fs-7 ps-12"
                placeholder="Search"
              />
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
              <th class="min-w-150px fw-bold">Name</th>
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
      <tbody class="fs-5">
          <tr>
              <td class="fw-bold">Garrett</td>
              <td>Winters</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>63</td>
              <td>2011/07/25</td>
              <td>$170,750</td>
              <td>8422</td>
              <td>g.winters@datatables.net</td>
              <td>2011/07/25</td>
              <td>$170,750</td>
              <td>8422</td>
              <td>g.winters@datatables.net</td>
              <td>g.winters@datatables.net</td>
          </tr>
          <tr>
            <td class="fw-bold">Garrett</td>
            <td>Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>$170,750</td>
            <td>8422</td>
            <td>g.winters@datatables.net</td>
            <td>2011/07/25</td>
            <td>$170,750</td>
            <td>8422</td>
            <td>g.winters@datatables.net</td>
            <td>g.winters@datatables.net</td>
        </tr>
        <tr>
          <td class="fw-bold">Garrett</td>
          <td>Winters</td>
          <td>Accountant</td>
          <td>Tokyo</td>
          <td>63</td>
          <td>2011/07/25</td>
          <td>$170,750</td>
          <td>8422</td>
          <td>g.winters@datatables.net</td>
          <td>2011/07/25</td>
          <td>$170,750</td>
          <td>8422</td>
          <td>g.winters@datatables.net</td>
          <td>g.winters@datatables.net</td>
      </tr>
      <tr>
        <td class="fw-bold">Garrett</td>
        <td>Winters</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>63</td>
        <td>2011/07/25</td>
        <td>$170,750</td>
        <td>8422</td>
        <td>g.winters@datatables.net</td>
        <td>2011/07/25</td>
        <td>$170,750</td>
        <td>8422</td>
        <td>g.winters@datatables.net</td>
        <td>g.winters@datatables.net</td>
    </tr>
    <tr>
      <td class="fw-bold">Garrett</td>
      <td>Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>$170,750</td>
      <td>8422</td>
      <td>g.winters@datatables.net</td>
      <td>2011/07/25</td>
      <td>$170,750</td>
      <td>8422</td>
      <td>g.winters@datatables.net</td>
      <td>g.winters@datatables.net</td>
  </tr>
  <tr>
    <td class="fw-bold">Garrett</td>
    <td>Winters</td>
    <td>Accountant</td>
    <td>Tokyo</td>
    <td>63</td>
    <td>2011/07/25</td>
    <td>$170,750</td>
    <td>8422</td>
    <td>g.winters@datatables.net</td>
    <td>2011/07/25</td>
    <td>$170,750</td>
    <td>8422</td>
    <td>g.winters@datatables.net</td>
    <td>g.winters@datatables.net</td>
</tr>
<tr>
  <td class="fw-bold">Garrett</td>
  <td>Winters</td>
  <td>Accountant</td>
  <td>Tokyo</td>
  <td>63</td>
  <td>2011/07/25</td>
  <td>$170,750</td>
  <td>8422</td>
  <td>g.winters@datatables.net</td>
  <td>2011/07/25</td>
  <td>$170,750</td>
  <td>8422</td>
  <td>g.winters@datatables.net</td>
  <td>g.winters@datatables.net</td>
</tr>
<tr>
  <td class="fw-bold">Garrett</td>
  <td>Winters</td>
  <td>Accountant</td>
  <td>Tokyo</td>
  <td>63</td>
  <td>2011/07/25</td>
  <td>$170,750</td>
  <td>8422</td>
  <td>g.winters@datatables.net</td>
  <td>2011/07/25</td>
  <td>$170,750</td>
  <td>8422</td>
  <td>g.winters@datatables.net</td>
  <td>g.winters@datatables.net</td>
</tr>
<tr>
  <td class="fw-bold">Grand Total</td>
  <td>Winters</td>
  <td>Accountant</td>
  <td>Tokyo</td>
  <td>63</td>
  <td>2011/07/25</td>
  <td>$170,750</td>
  <td>8422</td>
  <td>g.winters@datatables.net</td>
  <td>2011/07/25</td>
  <td>$170,750</td>
  <td>8422</td>
  <td>g.winters@datatables.net</td>
  <td>g.winters@datatables.net</td>
</tr>
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
                        <!--end::Header-->
                        <!--begin::Toolbar-->

</div>
</div>
</div>


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

</body>
</html>