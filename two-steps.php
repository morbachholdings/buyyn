<!DOCTYPE html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <base href="#" />
    <title>
		Morbach Holdings
    </title>
    <meta charset="utf-8" />
    <meta
      name="description"
      content="Morbach Holdings"
    />
    <meta
      name="keywords"
      content="Morbach Holdings"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta
      property="og:title"
      content="Morbach Holdings"
    />
    <meta property="og:url" content="https://morbachholdings.com/" />
    <meta property="og:site_name" content="Morbach Holdings" />
    <link rel="canonical" href="https://morbachholdingscom/" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.png" />
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"
    />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link
      href="assets/plugins/global/plugins.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_body" class="app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
      var defaultThemeMode = "light";
      var themeMode;
      if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-theme-mode")) {
          themeMode = document.documentElement.getAttribute("data-theme-mode");
        } else {
          if (localStorage.getItem("data-theme") !== null) {
            themeMode = localStorage.getItem("data-theme");
          } else {
            themeMode = defaultThemeMode;
          }
        }
        if (themeMode === "system") {
          themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches
            ? "dark"
            : "light";
        }
        document.documentElement.setAttribute("data-theme", themeMode);
      }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Authentication - Two-stes -->
      <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Body-->
        <div
          class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1"
        >
          <!--begin::Form-->
          <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-500px p-10">
              <!--begin::Form-->
              <form
                class="form w-100 mb-13"
                novalidate="novalidate"
                data-kt-redirect-url="../../demo20/dist/index.php"
                id="kt_sing_in_two_steps_form"
              >
                <!--begin::Icon-->
                <div class="text-center mb-10">
                  <img
                    alt="Logo"
                    class="mh-125px"
                    src="assets/media/svg/misc/smartphone-2.svg"
                  />
                </div>
                <!--end::Icon-->
                <!--begin::Heading-->
                <div class="text-center mb-10">
                  <!--begin::Title-->
                  <h1 class="text-dark mb-3">Two Step Verification</h1>
                  <!--end::Title-->
                  <!--begin::Sub-title-->
                  <div class="text-muted fw-semibold fs-5 mb-5">
                    Enter the verification code we sent to
                  </div>
                  <!--end::Sub-title-->
                  <!--begin::Mobile no-->
                  <div class="fw-bold text-dark fs-3">******7859</div>
                  <!--end::Mobile no-->
                </div>
                <!--end::Heading-->
                <!--begin::Section-->
                <div class="mb-10">
                  <!--begin::Label-->
                  <div class="fw-bold text-start text-dark fs-6 mb-1 ms-1">
                    Type your 6 digit security code
                  </div>
                  <!--end::Label-->
                  <!--begin::Input group-->
                  <div class="d-flex flex-wrap flex-stack">
                    <input
                      type="text"
                      name="code_1"
                      data-inputmask="'mask': '9', 'placeholder': ''"
                      maxlength="1"
                      class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
                      value=""
                    />
                    <input
                      type="text"
                      name="code_2"
                      data-inputmask="'mask': '9', 'placeholder': ''"
                      maxlength="1"
                      class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
                      value=""
                    />
                    <input
                      type="text"
                      name="code_3"
                      data-inputmask="'mask': '9', 'placeholder': ''"
                      maxlength="1"
                      class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
                      value=""
                    />
                    <input
                      type="text"
                      name="code_4"
                      data-inputmask="'mask': '9', 'placeholder': ''"
                      maxlength="1"
                      class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
                      value=""
                    />
                    <input
                      type="text"
                      name="code_5"
                      data-inputmask="'mask': '9', 'placeholder': ''"
                      maxlength="1"
                      class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
                      value=""
                    />
                    <input
                      type="text"
                      name="code_6"
                      data-inputmask="'mask': '9', 'placeholder': ''"
                      maxlength="1"
                      class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
                      value=""
                    />
                  </div>
                  <!--begin::Input group-->
                </div>
                <!--end::Section-->
                <!--begin::Submit-->
                <div class="d-flex flex-center">
                  <button
                    type="button"
                    id="kt_sing_in_two_steps_submit"
                    class="btn btn-lg btn-primary fw-bold"
                  >
                    <span class="indicator-label">Submit</span>
                    <span class="indicator-progress"
                      >Please wait...
                      <span
                        class="spinner-border spinner-border-sm align-middle ms-2"
                      ></span
                    ></span>
                  </button>
                </div>
                <!--end::Submit-->
              </form>
              <!--end::Form-->
              <!--begin::Notice-->
              <div class="text-center fw-semibold fs-5">
                <span class="text-muted me-1">Didn’t get the code ?</span>
                <a href="#" class="link-primary fs-5 me-1">Resend</a>
                <span class="text-muted me-1">or</span>
                <a href="#" class="link-primary fs-5">Call Us</a>
              </div>
              <!--end::Notice-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Form-->
          <!--begin::Footer-->
          <div class="d-flex flex-center flex-wrap px-5"></div>
          <!--end::Footer-->
        </div>
        <!--end::Body-->
        <!--begin::Aside-->
        <div
          class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
          style="background-image: url(assets/media/misc/auth-bg.png)"
        >
          <!--begin::Content-->
          <div
            class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100"
          >
            <!--begin::Logo-->
            <a href="../../demo20/dist/index.php" class="mb-0 mb-lg-12">
              <img
                alt="Logo"
                src="assets/media/logos/logo.png"
                class="h-60px h-lg-75px"
              />
            </a>
            <!--end::Logo-->
            <!--begin::Image-->
            <img
              class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
              src="assets/media/misc/auth-screens.png"
              alt=""
            />
            <!--end::Image-->
            <!--begin::Title-->
            <h1
              class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7"
            >
              Fast, Efficient and Productive
            </h1>
            <!--end::Title-->
            <!--begin::Text-->
            <div class="d-none d-lg-block text-white fs-base text-center">
              In this kind of post,
              <a href="#" class="opacity-75-hover text-warning fw-bold me-1"
                >the blogger</a
              >introduces a person they’ve interviewed <br />and provides some
              background information about
              <a href="#" class="opacity-75-hover text-warning fw-bold me-1"
                >the interviewee</a
              >and their <br />work following this is a transcript of the
              interview.
            </div>
            <!--end::Text-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Aside-->
      </div>
      <!--end::Authentication - Two-stes-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
      var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="assets/js/custom/authentication/sign-in/two-steps.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>
