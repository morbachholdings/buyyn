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
    <link rel="canonical" href="https://morbachholdings.com/" />
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
      <!--begin::Authentication - Sign-in -->
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
                class="form w-100"
                novalidate="novalidate"
                id="kt_sign_in_form"
                data-kt-redirect-url="index.php"
                action="#"
              >
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
                  <input
                    type="text"
                    placeholder="Email"
                    name="email"
                    autocomplete="off"
                    class="form-control bg-transparent"
                  />
                  <!--end::Email-->
                </div>
                <!--end::Input group=-->
                <div class="fv-row mb-3">
                  <!--begin::Password-->
                  <input
                    type="password"
                    placeholder="Password"
                    name="password"
                    autocomplete="off"
                    class="form-control bg-transparent"
                  />
                  <!--end::Password-->
                </div>
                <!--end::Input group=-->
                <!--begin::Wrapper-->
                <div
                  class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8"
                >
                  <div></div>
                  <!--begin::Link-->
                  <a
                    href="reset-password.php"
                    class="link-primary"
                    >Forgot Password ?</a
                  >
                  <!--end::Link-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Submit button-->
                <div class="d-grid mb-10">
                  <button
                    type="submit"
                    id="kt_sign_in_submit"
                    class="btn btn-primary"
                  >
                    <!--begin::Indicator label-->
                    <span class="indicator-label">Sign In</span>
                    <!--end::Indicator label-->
                    <!--begin::Indicator progress-->
                    <span class="indicator-progress"
                      >Please wait...
                      <span
                        class="spinner-border spinner-border-sm align-middle ms-2"
                      ></span
                    ></span>
                    <!--end::Indicator progress-->
                  </button>
                </div>
                <!--end::Submit button-->
                <!--begin::Sign up-->
                <div class="text-gray-500 text-center fw-semibold fs-6">
                  Not a Member yet?
                  <a
                    href="sign-up.php"
                    class="link-primary"
                    >Sign up</a
                  >
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
                class="h-60px h-lg-60px"
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
      <!--end::Authentication - Sign-in-->
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
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>
