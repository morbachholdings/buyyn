<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Process Log - Buyyn</title>
</head>
<body>
<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column me-3">
                            <!--begin::Title-->
                            <h1 class="d-flex text-dark fw-bolder my-1">Process Log</h1>
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
                                <div class="card card-flush h-xl-100 rounded-4 shadow-md">

                                    <!--begin::Body-->


                                    <div class="card-body pt-0 px-0">
                                      <!--begin::Nav-->
                                     
                                      <div class="tab-content">
                                          <!--begin::Tap pane-->
                                          <div class="tab-pane fade show active" id="kt_list_widget_10_tab_1">
                                              <!--begin::Item-->
                                              <div class="m-0">
                                                <div class="card-body pt-0">
                                                    <div class="col-xl-12">

<!--begin::Products-->
<div class="card card-flush">
										<!--begin::Card header-->
										<div class="card-header align-items-center py-1 gap-2 gap-md-5">
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
													<input type="text" 
                          data-kt-ecommerce-product-filter="search"
                          id="supplierProcessLogSearch"
                          onkeyup="searchSupplierProcessLogMember()"
                          class="form-control form-control-solid w-250px ps-14" 
                          placeholder="Search Members" />
												</div>
												<!--end::Search-->
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar flex-row-fluid justify-content-between gap-5">
												<div class="w-100 mw-250px mobile">
													<!--begin::Select2-->
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="LOG ID" data-kt-ecommerce-product-filter="logid">
														<option></option>
														<option value="404">404</option>
                            <option value="503">503</option>
                            <option value="504">504</option>
													</select>
													<!--end::Select2-->
												</div>
												

											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0 noPadding">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table_1">
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
													</tr>
													<!--end::Table row-->
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody class="fw-semibold text-gray-600">
													<!--begin::Table row-->
                         

                                                    <?php foreach ($all_processors->result() as $row) { ?>
                                                <tr>
                                                
                                                <td class="text-start pe-0">
                                                        <?php if ($row->process_type_id == 200) { ?>
                                                            <span class="badge py-3 px-4 fs-7 badge-light-success">200 OK</span>
                                                        <?php }else if($row->process_type_id == 522){ ?>
                                                            <span class="badge py-3 px-4 fs-7 badge-light-warning">522 Warning</span>
                                                        <?php }else{ ?>
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
									<!--end::Products-->


								
							<!--end::Products-->

                                                    
                                                      
                                                      
                                                    </div>
                                                   
                                            </div>
                                            </div>
                                          </div>
                                          <!--end::Tap pane-->
                                         
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
    
</body>
</html>