<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login - Buyyn</title>
	<meta charset="utf-8" />
	<meta name="description" content="Morbach Holdings" />
	<meta name="keywords" content="Morbach Holdings" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Morbach Holdings" />
	<meta property="og:url" content="https://morbachholdings.com/" />
	<meta property="og:site_name" content="Morbach Holdings" />
	<link rel="canonical" href="https://morbachholdings.com/" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.png" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<!--begin::Body-->
			<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
				<!--begin::Form-->
				<div class="d-flex flex-center flex-column flex-lg-row-fluid">
					<!--begin::Wrapper-->
					<div class="w-lg-500px p-10">

						<?php
						if ($validated == 1) {
						?>

							<!--begin::Alert-->
							<div class="alert alert-primary d-flex align-items-center p-5 verified_div">
								<div class="d-flex flex-column">
									<!--begin::Title-->
									<h4 class="mb-1 text-dark">Email has been verified</h4>
									<!--end::Title-->
									<!--begin::Content-->
									<span>The alert component can be used to highlight certain parts of your page for higher content visibility.</span>
									<!--end::Content-->
								</div>
								<!--end::Wrapper-->
							</div>


						<?php } ?>

						<!--begin::Alert-->
						<div id="invalid_credentials">

						</div>

						<!--begin::Form-->
						<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="index.php" action="#">
							<!--begin::Heading-->
							<div class="text-center mb-11">
								<!--begin::Title-->
								<h1 class="text-dark fw-bolder mb-3">Sign In</h1>
								<!--end::Title-->
							</div>
							<!--begin::Heading-->


							<!--begin::Input group=-->
							<div class="fv-row mb-8">
								<!--begin::Email-->
								<input type="text" placeholder="Email" name="email" id="email" autocomplete="off" class="form-control bg-transparent" />
								<!--end::Email-->
							</div>
							<!--end::Input group=-->
							<div class="fv-row mb-3">
								<!--begin::Password-->
								<input type="password" placeholder="Password" name="password" id="password" autocomplete="off" class="form-control bg-transparent" />
								<!--end::Password-->
							</div>
							<!--end::Input group=-->
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
								<div></div>
								<!--begin::Link-->
								<a href="<?php echo base_url() ?>authentication/reset" class="link-primary">Forgot Password ?</a>
								<!--end::Link-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Submit button-->
							<div class="d-grid mb-10">
								<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
									<!--begin::Indicator label-->
									<span class="indicator-label">Sign In</span>
									<!--end::Indicator label-->
									<!--begin::Indicator progress-->
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									<!--end::Indicator progress-->
								</button>
							</div>
							<!--end::Submit button-->
							<!--begin::Sign up-->
							<div class="text-gray-500 text-center fw-semibold fs-6">
								Not a Member yet?
								<a href="<?php echo base_url() ?>authentication/register" class="link-primary">Sign up</a>
							</div>
							<!--end::Sign up-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Form-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-wrap px-5">

				</div>
				<!--end::Footer-->
			</div>
			<!--end::Body-->
			<!--begin::Aside-->
			<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(<?php echo base_url() ?>assets/media/misc/auth-bg.png)">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
					<!--begin::Logo-->
					<a href="../../demo20/dist/index.php" class="mb-0 mb-lg-12">
						<img alt="Logo" src="<?php echo base_url() ?>assets/media/logos/logo.png" class="h-60px h-lg-60px" />
					</a>
					<!--end::Logo-->
					<!--begin::Image-->
					<img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="<?php echo base_url() ?>assets/media/misc/auth-screens.png" alt="" />
					<!--end::Image-->
					<!--begin::Title-->
					<h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
						Fast, Efficient and Productive
					</h1>
					<!--end::Title-->
					<!--begin::Text-->
					<div class="d-none d-lg-block text-white fs-base text-center">
						In this kind of post,
						<a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>introduces a person they’ve interviewed <br />and provides some
						background information about
						<a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and their <br />work following this is a transcript of the
						interview.
					</div>
					<!--end::Text-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Aside-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Root-->
	<!--end::Main-->

	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
	<script src="<?php echo base_url() ?>assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Custom Javascript(used by this page)-->

	<script>
		"use strict";
		var KTSigninGeneral = function() {
			var e, t, i;
			return {
				init: function() {
					e = document.querySelector("#kt_sign_in_form"), t = document.querySelector("#kt_sign_in_submit"), i = FormValidation.formValidation(e, {
						fields: {
							email: {
								validators: {
									regexp: {
										regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
										message: "The value is not a valid email address"
									},
									notEmpty: {
										message: "Email address is required"
									}
								}
							},
							password: {
								validators: {
									notEmpty: {
										message: "The password is required"
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
					}), t.addEventListener("click", (function(n) {
						n.preventDefault(), i.validate().then((function(i) {
							var email = document.getElementById('email').value;
							var password = document.getElementById('password').value;
							const invalid_credentials = document.getElementById('invalid_credentials');
							"Valid" == i ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
								t.removeAttribute("data-kt-indicator"), t.disabled = !1,

									$.ajax({
										url: '<?php echo base_url() ?>Authentication/logged',
										method: 'POST',
										data: {
											email: email,
											password: password
										},
										success: function(data) {

											var ret_data = $.parseJSON(data);
											if (ret_data.status == 1) {
												if (ret_data.user_group == 1) {
													Swal.fire({
														text: "You have successfully logged in!",
														icon: "success",
														buttonsStyling: !1,
														confirmButtonText: "Ok, got it!",
														customClass: {
															confirmButton: "btn btn-primary"
														}
													}).then((function(t) {
														if (t.isConfirmed) {
															e.querySelector('[name="email"]').value = "", e.querySelector('[name="password"]').value = "";

															location.href = '<?php echo base_url() ?>dashboard/dashboard';
														}
													}))
												} else {
													Swal.fire({
														text: "You have successfully logged in!",
														icon: "success",
														buttonsStyling: !1,
														confirmButtonText: "Ok, got it!",
														customClass: {
															confirmButton: "btn btn-primary"
														}
													}).then((function(t) {
														if (t.isConfirmed) {
															e.querySelector('[name="email"]').value = "", e.querySelector('[name="password"]').value = "";

															location.href = '<?php echo base_url() ?>authentication/login';
														}
													}))
												}
											} else {
												invalid_credentials.innerHTML = '<div class="alert alert-danger d-flex align-items-center p-5"><div class="d-flex flex-column"><h4 class="mb-1 text-dark">' + ret_data.user_group + '</h4><span>The alert component can be used to highlight certain parts of your page for higher content visibility.</span></div></div>';
											}




										}
									})
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
					}))
				}
			}
		}();
		KTUtil.onDOMContentLoaded((function() {
			KTSigninGeneral.init()
		}));
		
	</script>






</body>

</html>