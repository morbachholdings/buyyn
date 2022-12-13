<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register - Buyyn</title>

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
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/media/logos/favicon.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>

<body>
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <!--begin::Form-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10">
                        <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="<?php echo base_url()?>authentication/index" action="#">
                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <!--begin::Title-->
                                <h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
                                <!--end::Title-->
                                <!--begin::Subtitle-->

                                <!--end::Subtitle=-->
                            </div>
                            <!--begin::Heading-->
                            <div class="row fv-row mb-8">
                                <div class="col-md-6">
                                    <input type="text" placeholder="First Name" name="first-name" id="first-name" autocomplete="off" class="form-control bg-transparent" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Last Name" name="last-name" id="last-name" autocomplete="off" class="form-control bg-transparent" />
                                </div>
                            </div>


                            <!--begin::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Email-->
                                <input type="text" placeholder="Email" name="email" id="email" autocomplete="off" class="form-control bg-transparent" />
                                <!--end::Email-->
                            </div>
                            <!--begin::Input group-->
                            <div class="fv-row mb-8" data-kt-password-meter="true">
                                <!--begin::Wrapper-->
                                <div class="mb-1">
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative mb-3">
                                        <input class="form-control bg-transparent" type="password" placeholder="Password" id="password" name="password" autocomplete="off" />
                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                            <i class="bi bi-eye-slash fs-2"></i>
                                            <i class="bi bi-eye fs-2 d-none"></i>
                                        </span>
                                    </div>
                                    <!--end::Input wrapper-->
                                    <!--begin::Meter-->
                                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                    </div>
                                    <!--end::Meter-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Hint-->
                                <div class="text-muted">
                                    Use 8 or more characters with a mix of letters, numbers &
                                    symbols.
                                </div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Input group=-->
                            <!--end::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Repeat Password-->
                                <input placeholder="Repeat Password" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent" />
                                <!--end::Repeat Password-->
                            </div>
                            <!--end::Input group=-->
                            <!--begin::Accept-->
                            <div class="fv-row mb-8">
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                    <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
                                        <button id="kt_drawer_example_basic_button" class="btn link-primary m-0 p-0">
                                            Terms
                                        </button>
                                        <!-- <a href="#" class="ms-1 link-primary">Terms</a> -->
                                    </span>
                                </label>
                            </div>
                            <!--begin::View component-->
                            <div id="kt_drawer_example_basic" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_drawer_example_basic_button" data-kt-drawer-close="#kt_drawer_example_basic_close" data-kt-drawer-width="500px">
                                Terms and Conditions
                            </div>
                            <!--end::View component-->
                            <!--end::Accept-->
                            <!--begin::Submit button-->
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Sign up</span>
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
                                Already have an Account?
                                <a href="<?php echo base_url() ?>" class="link-primary fw-semibold">Sign in</a>
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
        <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Root-->
    <!--end::Main-->


    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used by this page)-->
    <!-- <script src="<?php echo base_url() ?>assets/js/authentication/auth.js"></script> -->
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        "use strict";
        var KTSignupGeneral = function() {
            var e, t, a, r, s = function() {
                return 100 === r.getScore()
            };
            return {
                init: function() {
                    e = document.querySelector("#kt_sign_up_form"), t = document.querySelector("#kt_sign_up_submit"), r = KTPasswordMeter.getInstance(e.querySelector('[data-kt-password-meter="true"]')), a = FormValidation.formValidation(e, {
                        fields: {
                            "first-name": {
                                validators: {
                                    notEmpty: {
                                        message: "First Name is required"
                                    }
                                }
                            },
                            "last-name": {
                                validators: {
                                    notEmpty: {
                                        message: "Last Name is required"
                                    }
                                }
                            },
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
                                    },
                                    callback: {
                                        message: "Please enter valid password",
                                        callback: function(e) {
                                            if (e.value.length > 0) return s()
                                        }
                                    }
                                }
                            },
                            "confirm-password": {
                                validators: {
                                    notEmpty: {
                                        message: "The password confirmation is required"
                                    },
                                    identical: {
                                        compare: function() {
                                            return e.querySelector('[name="password"]').value
                                        },
                                        message: "The password and its confirm are not the same"
                                    }
                                }
                            },
                            toc: {
                                validators: {
                                    notEmpty: {
                                        message: "You must accept the terms and conditions"
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger({
                                event: {
                                    password: !1
                                }
                            }),
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                        }
                    }), t.addEventListener("click", (function(s) {
                        s.preventDefault(), a.revalidateField("password"), a.validate().then((function(a) {
                            var firstname = document.getElementById('first-name').value;
                            var lastname = document.getElementById('last-name').value;
                            var email = document.getElementById('email').value;
                            var password = document.getElementById('password').value;
                            "Valid" == a ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
                                t.removeAttribute("data-kt-indicator"), t.disabled = !1,

                                    $.ajax({
                                        url: '<?php echo base_url() ?>Authentication/add_user',
                                        method: 'POST',
                                        data: {
                                            firstname: firstname,
                                            lastname: lastname,
                                            email: email,
                                            password: password
                                        },
                                        success: function(data) {
                                            var ret_data = $.parseJSON(data);
                                            if (ret_data.status == 1) {
                                                Swal.fire({
                                                    text: "Successfully Registered. ",
                                                    icon: "success",
                                                    buttonsStyling: !1,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: {
                                                        confirmButton: "btn btn-primary"
                                                    }
                                                }).then((function(t) {
                                                    if (t.isConfirmed) {
                                                        e.reset(), r.reset();
                                                        var a = e.getAttribute("data-kt-redirect-url");
                                                        a && (location.href = a)
                                                    }
                                                }))
                                            } else {
                                                Swal.fire({
                                                    text: "Email already in use",
                                                    icon: "error",
                                                    buttonsStyling: !1,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: {
                                                        confirmButton: "btn btn-primary"
                                                    }
                                                });
                                            }




                                        }
                                    })



                            }), 1500)) : Swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
















                        }))
                    })), e.querySelector('input[name="password"]').addEventListener("input", (function() {
                        this.value.length > 0 && a.updateFieldStatus("password", "NotValidated")
                    }))
                }
            }
        }();
        KTUtil.onDOMContentLoaded((function() {
            KTSignupGeneral.init()
        }));
    </script>
</body>

</html>