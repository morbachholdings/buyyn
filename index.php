<<<<<<< Updated upstream
<?php 
echo "Hello world";

?>
=======
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
      content="Morbach Holdings."
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
    <meta property="og:url" content="https://morbachholdings.com" />
    <meta property="og:site_name" content="Morbach Holdings" />
    <link rel="canonical" href="https://morbachholdings.com/" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.png" />
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"
    />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used by this page)-->
    <link
      href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/plugins/custom/datatables/datatables.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <!--end::Vendor Stylesheets-->
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
  <body id="kt_body" data-kt-app-header-stacked="true" class="app-default">
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
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
      <!--begin::Page-->
      <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
        <div id="kt_app_header" class="app-header">
          <!--begin::Header primary-->
          <div class="app-header-primary">
            <!--begin::Header primary container-->
            <div
              class="app-container container-xxl d-flex align-items-stretch justify-content-between"
            >
              <!--begin::Logo and search-->
              <div class="d-flex flex-stack flex-grow-1 flex-lg-grow-0">
                <!--begin::Logo wrapper-->
                <div class="d-flex align-items-center me-7">
                  <!--begin::Header secondary toggle-->
                  <button
                    class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 ms-n2 me-2"
                    id="kt_header_secondary_toggle"
                  >
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                    <span class="svg-icon svg-icon-1">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                          fill="currentColor"
                        />
                        <path
                          opacity="0.3"
                          d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                          fill="currentColor"
                        />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </button>
                  <!--end::Header secondary toggle-->
                  <!--begin::Logo-->
                  <a href="#" class="d-flex align-items-center">
                    <img
                      alt="Logo"
                      src="assets/media/logos/logo.png"
                      class="h-25px h-lg-30px"
                    />
                  </a>
                  <!--end::Logo-->
                </div>
                <!--end::Logo wrapper-->
                <!--begin::Search-->
                <div
                  id="kt_header_search"
                  class="header-search d-flex align-items-center w-lg-300px me-2"
                  data-kt-search-keypress="true"
                  data-kt-search-min-length="2"
                  data-kt-search-enter="enter"
                  data-kt-search-layout="menu"
                  data-kt-search-responsive="lg"
                  data-kt-menu-trigger="auto"
                  data-kt-menu-permanent="true"
                  data-kt-menu-placement="bottom-start"
                >
                  <!--begin::Tablet and mobile search toggle-->
                  <div
                    data-kt-search-element="toggle"
                    class="d-flex d-lg-none align-items-center"
                  >
                    <div
                      class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10"
                    >
                      <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                      <span class="svg-icon svg-icon-1">
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
                    </div>
                  </div>
                  <!--end::Tablet and mobile search toggle-->
                  <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                  <form
                    data-kt-search-element="form"
                    class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0"
                    autocomplete="off"
                  >
                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                    <input type="hidden" />
                    <!--end::Hidden input-->
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span
                      class="svg-icon svg-icon-2 svg-icon-lg-3 svg-icon-gray-800 position-absolute top-50 translate-middle-y ms-5"
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
                    <!--end::Icon-->
                    <!--begin::Input-->
                    <input
                      type="text"
                      class="search-input form-control form-control-solid ps-13"
                      name="search"
                      value=""
                      placeholder="Search..."
                      data-kt-search-element="input"
                    />
                    <!--end::Input-->
                    <!--begin::Spinner-->
                    <span
                      class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                      data-kt-search-element="spinner"
                    >
                      <span
                        class="spinner-border h-15px w-15px align-middle text-gray-400"
                      ></span>
                    </span>
                    <!--end::Spinner-->
                    <!--begin::Reset-->
                    <span
                      class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                      data-kt-search-element="clear"
                    >
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                      <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                        <svg
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect
                            opacity="0.5"
                            x="6"
                            y="17.3137"
                            width="16"
                            height="2"
                            rx="1"
                            transform="rotate(-45 6 17.3137)"
                            fill="currentColor"
                          />
                          <rect
                            x="7.41422"
                            y="6"
                            width="16"
                            height="2"
                            rx="1"
                            transform="rotate(45 7.41422 6)"
                            fill="currentColor"
                          />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <!--end::Reset-->
                  </form>
                  <!--end::Form-->
                  <!--begin::Menu-->
                  <div
                    data-kt-search-element="content"
                    class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 px-7 overflow-hidden"
                  >
                    <!--begin::Wrapper-->
                    <div data-kt-search-element="wrapper">
                      <!--begin::Recently viewed-->
                      <div data-kt-search-element="results" class="d-none">
                        <!--begin::Items-->
                        <div class="scroll-y mh-200px mh-lg-350px">
                          <!--begin::Category title-->
                          <h3
                            class="fs-5 text-muted m-0 pb-5"
                            data-kt-search-element="category-title"
                          >
                            Users
                          </h3>
                          <!--end::Category title-->
                          <!--begin::Item-->
                          <a
                            href="#"
                            class="d-flex text-dark text-hover-primary align-items-center mb-5"
                          >
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <img
                                src="assets/media/avatars/300-6.jpg"
                                alt=""
                              />
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div
                              class="d-flex flex-column justify-content-start fw-semibold"
                            >
                              <span class="fs-6 fw-semibold">Karina Clark</span>
                              <span class="fs-7 fw-semibold text-muted"
                                >Marketing Manager</span
                              >
                            </div>
                            <!--end::Title-->
                          </a>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <a
                            href="#"
                            class="d-flex text-dark text-hover-primary align-items-center mb-5"
                          >
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <img
                                src="assets/media/avatars/300-2.jpg"
                                alt=""
                              />
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div
                              class="d-flex flex-column justify-content-start fw-semibold"
                            >
                              <span class="fs-6 fw-semibold">Olivia Bold</span>
                              <span class="fs-7 fw-semibold text-muted"
                                >Software Engineer</span
                              >
                            </div>
                            <!--end::Title-->
                          </a>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <a
                            href="#"
                            class="d-flex text-dark text-hover-primary align-items-center mb-5"
                          >
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <img
                                src="assets/media/avatars/300-9.jpg"
                                alt=""
                              />
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div
                              class="d-flex flex-column justify-content-start fw-semibold"
                            >
                              <span class="fs-6 fw-semibold">Ana Clark</span>
                              <span class="fs-7 fw-semibold text-muted"
                                >UI/UX Designer</span
                              >
                            </div>
                            <!--end::Title-->
                          </a>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <a
                            href="#"
                            class="d-flex text-dark text-hover-primary align-items-center mb-5"
                          >
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <img
                                src="assets/media/avatars/300-14.jpg"
                                alt=""
                              />
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div
                              class="d-flex flex-column justify-content-start fw-semibold"
                            >
                              <span class="fs-6 fw-semibold">Nick Pitola</span>
                              <span class="fs-7 fw-semibold text-muted"
                                >Art Director</span
                              >
                            </div>
                            <!--end::Title-->
                          </a>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <a
                            href="#"
                            class="d-flex text-dark text-hover-primary align-items-center mb-5"
                          >
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <img
                                src="assets/media/avatars/300-11.jpg"
                                alt=""
                              />
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div
                              class="d-flex flex-column justify-content-start fw-semibold"
                            >
                              <span class="fs-6 fw-semibold"
                                >Edward Kulnic</span
                              >
                              <span class="fs-7 fw-semibold text-muted"
                                >System Administrator</span
                              >
                            </div>
                            <!--end::Title-->
                          </a>
                          <!--end::Item-->
                          <!--begin::Category title-->
                          <h3
                            class="fs-5 text-muted m-0 pt-5 pb-5"
                            data-kt-search-element="category-title"
                          >
                            Customers
                          </h3>
                          <!--end::Category title-->
                          <!--begin::Item-->
                          <a
                            href="#"
                            class="d-flex text-dark text-hover-primary align-items-center mb-5"
                          >
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <img
                                  class="w-20px h-20px"
                                  src="assets/media/svg/brand-logos/volicity-9.svg"
                                  alt=""
                                />
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div
                              class="d-flex flex-column justify-content-start fw-semibold"
                            >
                              <span class="fs-6 fw-semibold"
                                >Company Rbranding</span
                              >
                              <span class="fs-7 fw-semibold text-muted"
                                >UI Design</span
                              >
                            </div>
                            <!--end::Title-->
                          </a>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <a
                            href="#"
                            class="d-flex text-dark text-hover-primary align-items-center mb-5"
                          >
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <img
                                  class="w-20px h-20px"
                                  src="assets/media/svg/brand-logos/tvit.svg"
                                  alt=""
                                />
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div
                              class="d-flex flex-column justify-content-start fw-semibold"
                            >
                              <span class="fs-6 fw-semibold"
                                >Company Re-branding</span
                              >
                              <span class="fs-7 fw-semibold text-muted"
                                >Web Development</span
                              >
                            </div>
                            <!--end::Title-->
                          </a>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <a
                            href="#"
                            class="d-flex text-dark text-hover-primary align-items-center mb-5"
                          >
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <img
                                  class="w-20px h-20px"
                                  src="assets/media/svg/misc/infography.svg"
                                  alt=""
                                />
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div
                              class="d-flex flex-column justify-content-start fw-semibold"
                            >
                              <span class="fs-6 fw-semibold"
                                >Business Analytics App</span
                              >
                              <span class="fs-7 fw-semibold text-muted"
                                >Administration</span
                              >
                            </div>
                            <!--end::Title-->
                          </a>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <a
                            href="#"
                            class="d-flex text-dark text-hover-primary align-items-center mb-5"
                          >
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <img
                                  class="w-20px h-20px"
                                  src="assets/media/svg/brand-logos/leaf.svg"
                                  alt=""
                                />
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div
                              class="d-flex flex-column justify-content-start fw-semibold"
                            >
                              <span class="fs-6 fw-semibold"
                                >EcoLeaf App Launch</span
                              >
                              <span class="fs-7 fw-semibold text-muted"
                                >Marketing</span
                              >
                            </div>
                            <!--end::Title-->
                          </a>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <a
                            href="#"
                            class="d-flex text-dark text-hover-primary align-items-center mb-5"
                          >
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <img
                                  class="w-20px h-20px"
                                  src="assets/media/svg/brand-logos/tower.svg"
                                  alt=""
                                />
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div
                              class="d-flex flex-column justify-content-start fw-semibold"
                            >
                              <span class="fs-6 fw-semibold"
                                >Tower Group Website</span
                              >
                              <span class="fs-7 fw-semibold text-muted"
                                >Google Adwords</span
                              >
                            </div>
                            <!--end::Title-->
                          </a>
                          <!--end::Item-->
                          <!--begin::Category title-->
                          <h3
                            class="fs-5 text-muted m-0 pt-5 pb-5"
                            data-kt-search-element="category-title"
                          >
                            Projects
                          </h3>
                          <!--end::Category title-->
                          <!--begin::Item-->
                          <a
                            href="#"
                            class="d-flex text-dark text-hover-primary align-items-center mb-5"
                          >
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                                <span
                                  class="svg-icon svg-icon-2 svg-icon-primary"
                                >
                                  <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      opacity="0.3"
                                      d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                                      fill="currentColor"
                                    />
                                    <rect
                                      x="7"
                                      y="17"
                                      width="6"
                                      height="2"
                                      rx="1"
                                      fill="currentColor"
                                    />
                                    <rect
                                      x="7"
                                      y="12"
                                      width="10"
                                      height="2"
                                      rx="1"
                                      fill="currentColor"
                                    />
                                    <rect
                                      x="7"
                                      y="7"
                                      width="6"
                                      height="2"
                                      rx="1"
                                      fill="currentColor"
                                    />
                                    <path
                                      d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                              <span class="fs-6 fw-semibold"
                                >Si-Fi Project by AU Themes</span
                              >
                              <span class="fs-7 fw-semibold text-muted"
                                >#45670</span
                              >
                            </div>
                            <!--end::Title-->
                          </a>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <a
                            href="#"
                            class="d-flex text-dark text-hover-primary align-items-center mb-5"
                          >
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                <span
                                  class="svg-icon svg-icon-2 svg-icon-primary"
                                >
                                  <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <rect
                                      x="8"
                                      y="9"
                                      width="3"
                                      height="10"
                                      rx="1.5"
                                      fill="currentColor"
                                    />
                                    <rect
                                      opacity="0.5"
                                      x="13"
                                      y="5"
                                      width="3"
                                      height="14"
                                      rx="1.5"
                                      fill="currentColor"
                                    />
                                    <rect
                                      x="18"
                                      y="11"
                                      width="3"
                                      height="8"
                                      rx="1.5"
                                      fill="currentColor"
                                    />
                                    <rect
                                      x="3"
                                      y="13"
                                      width="3"
                                      height="6"
                                      rx="1.5"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                              <span class="fs-6 fw-semibold"
                                >Shopix Mobile App Planning</span
                              >
                              <span class="fs-7 fw-semibold text-muted"
                                >#45690</span
                              >
                            </div>
                            <!--end::Title-->
                          </a>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <a
                            href="#"
                            class="d-flex text-dark text-hover-primary align-items-center mb-5"
                          >
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                <span
                                  class="svg-icon svg-icon-2 svg-icon-primary"
                                >
                                  <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      opacity="0.3"
                                      d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                      fill="currentColor"
                                    />
                                    <rect
                                      x="6"
                                      y="12"
                                      width="7"
                                      height="2"
                                      rx="1"
                                      fill="currentColor"
                                    />
                                    <rect
                                      x="6"
                                      y="7"
                                      width="12"
                                      height="2"
                                      rx="1"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                              <span class="fs-6 fw-semibold"
                                >Finance Monitoring SAAS Discussion</span
                              >
                              <span class="fs-7 fw-semibold text-muted"
                                >#21090</span
                              >
                            </div>
                            <!--end::Title-->
                          </a>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <a
                            href="#"
                            class="d-flex text-dark text-hover-primary align-items-center mb-5"
                          >
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                <span
                                  class="svg-icon svg-icon-2 svg-icon-primary"
                                >
                                  <svg
                                    width="18"
                                    height="18"
                                    viewBox="0 0 18 18"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      opacity="0.3"
                                      d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z"
                                      fill="currentColor"
                                    />
                                    <path
                                      d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z"
                                      fill="currentColor"
                                    />
                                    <rect
                                      x="7"
                                      y="6"
                                      width="4"
                                      height="4"
                                      rx="2"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                              <span class="fs-6 fw-semibold"
                                >Dashboard Analitics Launch</span
                              >
                              <span class="fs-7 fw-semibold text-muted"
                                >#34560</span
                              >
                            </div>
                            <!--end::Title-->
                          </a>
                          <!--end::Item-->
                        </div>
                        <!--end::Items-->
                      </div>
                      <!--end::Recently viewed-->
                      <!--begin::Recently viewed-->
                      <div class="" data-kt-search-element="main">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack fw-semibold mb-4">
                          <!--begin::Label-->
                          <span class="text-muted fs-6 me-2"
                            >Recently Searched:</span
                          >
                          <!--end::Label-->
                          <!--begin::Toolbar-->
                          <div class="d-flex" data-kt-search-element="toolbar">
                            <!--begin::Preferences toggle-->
                            <div
                              data-kt-search-element="preferences-show"
                              class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle="
                              title="Show search preferences"
                            >
                              <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                              <span class="svg-icon svg-icon-1">
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    opacity="0.3"
                                    d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
                                    fill="currentColor"
                                  />
                                  <path
                                    d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </div>
                            <!--end::Preferences toggle-->
                            <!--begin::Advanced search toggle-->
                            <div
                              data-kt-search-element="advanced-options-form-show"
                              class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1"
                              data-bs-toggle="tooltip"
                              title="Show more search options"
                            >
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                              <span class="svg-icon svg-icon-2">
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </div>
                            <!--end::Advanced search toggle-->
                          </div>
                          <!--end::Toolbar-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Items-->
                        <div class="scroll-y mh-200px mh-lg-325px">
                          <!--begin::Item-->
                          <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/electronics/elc004.svg-->
                                <span
                                  class="svg-icon svg-icon-2 svg-icon-primary"
                                >
                                  <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z"
                                      fill="currentColor"
                                    />
                                    <path
                                      opacity="0.3"
                                      d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z"
                                      fill="currentColor"
                                    />
                                    <path
                                      opacity="0.3"
                                      d="M15 17H9V20H15V17Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                              <a
                                href="#"
                                class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                                >BoomApp by Keenthemes</a
                              >
                              <span class="fs-7 text-muted fw-semibold"
                                >#45789</span
                              >
                            </div>
                            <!--end::Title-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
                                <span
                                  class="svg-icon svg-icon-2 svg-icon-primary"
                                >
                                  <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      opacity="0.3"
                                      d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z"
                                      fill="currentColor"
                                    />
                                    <path
                                      d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                              <a
                                href="#"
                                class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                                >"Kept API Project Meeting</a
                              >
                              <span class="fs-7 text-muted fw-semibold"
                                >#84050</span
                              >
                            </div>
                            <!--end::Title-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
                                <span
                                  class="svg-icon svg-icon-2 svg-icon-primary"
                                >
                                  <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z"
                                      fill="currentColor"
                                    />
                                    <path
                                      opacity="0.3"
                                      d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                              <a
                                href="#"
                                class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                                >"KPI Monitoring App Launch</a
                              >
                              <span class="fs-7 text-muted fw-semibold"
                                >#84250</span
                              >
                            </div>
                            <!--end::Title-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
                                <span
                                  class="svg-icon svg-icon-2 svg-icon-primary"
                                >
                                  <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      opacity="0.3"
                                      d="M20 8L12.5 5L5 14V19H20V8Z"
                                      fill="currentColor"
                                    />
                                    <path
                                      d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                              <a
                                href="#"
                                class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                                >Project Reference FAQ</a
                              >
                              <span class="fs-7 text-muted fw-semibold"
                                >#67945</span
                              >
                            </div>
                            <!--end::Title-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                <span
                                  class="svg-icon svg-icon-2 svg-icon-primary"
                                >
                                  <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                      fill="currentColor"
                                    />
                                    <path
                                      opacity="0.3"
                                      d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                              <a
                                href="#"
                                class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                                >"FitPro App Development</a
                              >
                              <span class="fs-7 text-muted fw-semibold"
                                >#84250</span
                              >
                            </div>
                            <!--end::Title-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
                                <span
                                  class="svg-icon svg-icon-2 svg-icon-primary"
                                >
                                  <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
                                      fill="currentColor"
                                    />
                                    <path
                                      opacity="0.3"
                                      d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                              <a
                                href="#"
                                class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                                >Shopix Mobile App</a
                              >
                              <span class="fs-7 text-muted fw-semibold"
                                >#45690</span
                              >
                            </div>
                            <!--end::Title-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                              <span class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
                                <span
                                  class="svg-icon svg-icon-2 svg-icon-primary"
                                >
                                  <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      opacity="0.3"
                                      d="M20 8L12.5 5L5 14V19H20V8Z"
                                      fill="currentColor"
                                    />
                                    <path
                                      d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                              <a
                                href="#"
                                class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                                >"Landing UI Design" Launch</a
                              >
                              <span class="fs-7 text-muted fw-semibold"
                                >#24005</span
                              >
                            </div>
                            <!--end::Title-->
                          </div>
                          <!--end::Item-->
                        </div>
                        <!--end::Items-->
                      </div>
                      <!--end::Recently viewed-->
                      <!--begin::Empty-->
                      <div
                        data-kt-search-element="empty"
                        class="text-center d-none"
                      >
                        <!--begin::Icon-->
                        <div class="pt-10 pb-10">
                          <!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
                          <span class="svg-icon svg-icon-4x opacity-50">
                            <svg
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                opacity="0.3"
                                d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z"
                                fill="currentColor"
                              />
                              <path
                                d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z"
                                fill="currentColor"
                              />
                              <rect
                                x="13.6993"
                                y="13.6656"
                                width="4.42828"
                                height="1.73089"
                                rx="0.865447"
                                transform="rotate(45 13.6993 13.6656)"
                                fill="currentColor"
                              />
                              <path
                                d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z"
                                fill="currentColor"
                              />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Icon-->
                        <!--begin::Message-->
                        <div class="pb-15 fw-semibold">
                          <h3 class="text-gray-600 fs-5 mb-2">
                            No result found
                          </h3>
                          <div class="text-muted fs-7">
                            Please try again with a different query
                          </div>
                        </div>
                        <!--end::Message-->
                      </div>
                      <!--end::Empty-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Preferences-->
                    <form
                      data-kt-search-element="advanced-options-form"
                      class="pt-1 d-none"
                    >
                      <!--begin::Heading-->
                      <h3 class="fw-semibold text-dark mb-7">
                        Advanced Search
                      </h3>
                      <!--end::Heading-->
                      <!--begin::Input group-->
                      <div class="mb-5">
                        <input
                          type="text"
                          class="form-control form-control-sm form-control-solid"
                          placeholder="Contains the word"
                          name="query"
                        />
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="mb-5">
                        <!--begin::Radio group-->
                        <div class="nav-group nav-group-fluid">
                          <!--begin::Option-->
                          <label>
                            <input
                              type="radio"
                              class="btn-check"
                              name="type"
                              value="has"
                              checked="checked"
                            />
                            <span
                              class="btn btn-sm btn-color-muted btn-active btn-active-primary"
                              >All</span
                            >
                          </label>
                          <!--end::Option-->
                          <!--begin::Option-->
                          <label>
                            <input
                              type="radio"
                              class="btn-check"
                              name="type"
                              value="users"
                            />
                            <span
                              class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                              >Users</span
                            >
                          </label>
                          <!--end::Option-->
                          <!--begin::Option-->
                          <label>
                            <input
                              type="radio"
                              class="btn-check"
                              name="type"
                              value="orders"
                            />
                            <span
                              class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                              >Orders</span
                            >
                          </label>
                          <!--end::Option-->
                          <!--begin::Option-->
                          <label>
                            <input
                              type="radio"
                              class="btn-check"
                              name="type"
                              value="projects"
                            />
                            <span
                              class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                              >Projects</span
                            >
                          </label>
                          <!--end::Option-->
                        </div>
                        <!--end::Radio group-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="mb-5">
                        <input
                          type="text"
                          name="assignedto"
                          class="form-control form-control-sm form-control-solid"
                          placeholder="Assigned to"
                          value=""
                        />
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="mb-5">
                        <input
                          type="text"
                          name="collaborators"
                          class="form-control form-control-sm form-control-solid"
                          placeholder="Collaborators"
                          value=""
                        />
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="mb-5">
                        <!--begin::Radio group-->
                        <div class="nav-group nav-group-fluid">
                          <!--begin::Option-->
                          <label>
                            <input
                              type="radio"
                              class="btn-check"
                              name="attachment"
                              value="has"
                              checked="checked"
                            />
                            <span
                              class="btn btn-sm btn-color-muted btn-active btn-active-primary"
                              >Has attachment</span
                            >
                          </label>
                          <!--end::Option-->
                          <!--begin::Option-->
                          <label>
                            <input
                              type="radio"
                              class="btn-check"
                              name="attachment"
                              value="any"
                            />
                            <span
                              class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                              >Any</span
                            >
                          </label>
                          <!--end::Option-->
                        </div>
                        <!--end::Radio group-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="mb-5">
                        <select
                          name="timezone"
                          aria-label="Select a Timezone"
                          data-control="select2"
                          data-placeholder="date_period"
                          class="form-select form-select-sm form-select-solid"
                        >
                          <option value="next">Within the next</option>
                          <option value="last">Within the last</option>
                          <option value="between">Between</option>
                          <option value="on">On</option>
                        </select>
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="row mb-8">
                        <!--begin::Col-->
                        <div class="col-6">
                          <input
                            type="number"
                            name="date_number"
                            class="form-control form-control-sm form-control-solid"
                            placeholder="Lenght"
                            value=""
                          />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                          <select
                            name="date_typer"
                            aria-label="Select a Timezone"
                            data-control="select2"
                            data-placeholder="Period"
                            class="form-select form-select-sm form-select-solid"
                          >
                            <option value="days">Days</option>
                            <option value="weeks">Weeks</option>
                            <option value="months">Months</option>
                            <option value="years">Years</option>
                          </select>
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Actions-->
                      <div class="d-flex justify-content-end">
                        <button
                          type="reset"
                          class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                          data-kt-search-element="advanced-options-form-cancel"
                        >
                          Cancel
                        </button>
                        <a
                          href="../../demo22/dist/pages/search/horizontal.php"
                          class="btn btn-sm fw-bold btn-primary"
                          data-kt-search-element="advanced-options-form-search"
                          >Search</a
                        >
                      </div>
                      <!--end::Actions-->
                    </form>
                    <!--end::Preferences-->
                    <!--begin::Preferences-->
                    <form
                      data-kt-search-element="preferences"
                      class="pt-1 d-none"
                    >
                      <!--begin::Heading-->
                      <h3 class="fw-semibold text-dark mb-7">
                        Search Preferences
                      </h3>
                      <!--end::Heading-->
                      <!--begin::Input group-->
                      <div class="pb-4 border-bottom">
                        <label
                          class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                        >
                          <span
                            class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                            >Projects</span
                          >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value="1"
                            checked="checked"
                          />
                        </label>
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="py-4 border-bottom">
                        <label
                          class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                        >
                          <span
                            class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                            >Targets</span
                          >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value="1"
                            checked="checked"
                          />
                        </label>
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="py-4 border-bottom">
                        <label
                          class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                        >
                          <span
                            class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                            >Affiliate Programs</span
                          >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value="1"
                          />
                        </label>
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="py-4 border-bottom">
                        <label
                          class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                        >
                          <span
                            class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                            >Referrals</span
                          >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value="1"
                            checked="checked"
                          />
                        </label>
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="py-4 border-bottom">
                        <label
                          class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                        >
                          <span
                            class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                            >Users</span
                          >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value="1"
                          />
                        </label>
                      </div>
                      <!--end::Input group-->
                      <!--begin::Actions-->
                      <div class="d-flex justify-content-end pt-7">
                        <button
                          type="reset"
                          class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                          data-kt-search-element="preferences-dismiss"
                        >
                          Cancel
                        </button>
                        <button
                          type="submit"
                          class="btn btn-sm fw-bold btn-primary"
                        >
                          Save Changes
                        </button>
                      </div>
                      <!--end::Actions-->
                    </form>
                    <!--end::Preferences-->
                  </div>
                  <!--end::Menu-->
                </div>
                <!--end::Search-->
              </div>
              <!--end::Logo and search-->
              <!--begin::Navbar-->
              <div class="app-navbar gap-2">
                <!--begin::Activities-->
                <div class="app-navbar-item">
                  <!--begin::Drawer toggle-->
                  <div
                    class="btn btn-icon btn-color-white btn-custom bg-hover-white bg-hover-opacity-10"
                    id="kt_activities_toggle"
                  >
                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                    <span class="svg-icon svg-icon-1">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect
                          x="8"
                          y="9"
                          width="3"
                          height="10"
                          rx="1.5"
                          fill="currentColor"
                        />
                        <rect
                          opacity="0.5"
                          x="13"
                          y="5"
                          width="3"
                          height="14"
                          rx="1.5"
                          fill="currentColor"
                        />
                        <rect
                          x="18"
                          y="11"
                          width="3"
                          height="8"
                          rx="1.5"
                          fill="currentColor"
                        />
                        <rect
                          x="3"
                          y="13"
                          width="3"
                          height="6"
                          rx="1.5"
                          fill="currentColor"
                        />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                  <!--end::Drawer toggle-->
                </div>
                <!--end::Activities-->
                <!--begin::Chat-->
                <div class="app-navbar-item">
                  <!--begin::Notifications-->
                  <div class="d-flex align-items-center ms-1 ms-lg-3">
                    <!--begin::Menu- wrapper-->
                    <div
                      class="btn btn-icon btn-color-white btn-custom bg-hover-white bg-hover-opacity-10 w-30px h-30px w-md-40px h-md-40px"
                      data-kt-menu-trigger="click"
                      data-kt-menu-attach="parent"
                      data-kt-menu-placement="bottom-end"
                    >
                      <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                      <span class="svg-icon svg-icon-1">
                        <svg
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                            fill="#ffffff"
                          />
                          <path
                            d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                            fill="#ffffff"
                          />
                          <path
                            opacity="0.5"
                            d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                            fill="#ffffff"
                          />
                          <path
                            opacity="0.5"
                            d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                            fill="#ffffff"
                          />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                      <span class="bullet bullet-dot bg-white h-6px w-6px translate-middle animation-blink indi"></span>
                    </div>
                    <!--begin::Menu-->
                    <div
                      class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                      data-kt-menu="true"
                    >
                      <!--begin::Heading-->
                      <div
                        class="d-flex flex-column bgi-no-repeat rounded-top"
                        style="
                          background-image: url('assets/media/misc/menu-header-bg.jpg');
                        "
                      >
                        <!--begin::Title-->
                        <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                          Notifications
                          <span class="fs-8 opacity-75 ps-3">24 reports</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Tabs-->
                        <ul
                          class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9"
                        >
                          <li class="nav-item">
                            <a
                              class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                              data-bs-toggle="tab"
                              href="#kt_topbar_notifications_1"
                              >Alerts</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                              data-bs-toggle="tab"
                              href="#kt_topbar_notifications_2"
                              >Updates</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                              data-bs-toggle="tab"
                              href="#kt_topbar_notifications_3"
                              >Logs</a
                            >
                          </li>
                        </ul>
                        <!--end::Tabs-->
                      </div>
                      <!--end::Heading-->
                      <!--begin::Tab content-->
                      <div class="tab-content">
                        <!--begin::Tab panel-->
                        <div
                          class="tab-pane fade"
                          id="kt_topbar_notifications_1"
                          role="tabpanel"
                        >
                          <!--begin::Items-->
                          <div class="scroll-y mh-325px my-5 px-8">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                  <span class="symbol-label bg-light-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                    <span
                                      class="svg-icon svg-icon-2 svg-icon-primary"
                                    >
                                      <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                          opacity="0.3"
                                          d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z"
                                          fill="currentColor"
                                        />
                                        <path
                                          d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z"
                                          fill="currentColor"
                                        />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="mb-0 me-2">
                                  <a
                                    href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold"
                                    >Project Alice</a
                                  >
                                  <div class="text-gray-400 fs-7">
                                    Phase 1 development
                                  </div>
                                </div>
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">1 hr</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                  <span class="symbol-label bg-light-danger">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                    <span
                                      class="svg-icon svg-icon-2 svg-icon-danger"
                                    >
                                      <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <rect
                                          opacity="0.3"
                                          x="2"
                                          y="2"
                                          width="20"
                                          height="20"
                                          rx="10"
                                          fill="currentColor"
                                        />
                                        <rect
                                          x="11"
                                          y="14"
                                          width="7"
                                          height="2"
                                          rx="1"
                                          transform="rotate(-90 11 14)"
                                          fill="currentColor"
                                        />
                                        <rect
                                          x="11"
                                          y="17"
                                          width="2"
                                          height="2"
                                          rx="1"
                                          transform="rotate(-90 11 17)"
                                          fill="currentColor"
                                        />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="mb-0 me-2">
                                  <a
                                    href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold"
                                    >HR Confidential</a
                                  >
                                  <div class="text-gray-400 fs-7">
                                    Confidential staff documents
                                  </div>
                                </div>
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">2 hrs</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                  <span class="symbol-label bg-light-warning">
                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                    <span
                                      class="svg-icon svg-icon-2 svg-icon-warning"
                                    >
                                      <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                          opacity="0.3"
                                          d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                          fill="currentColor"
                                        />
                                        <path
                                          d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                          fill="currentColor"
                                        />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="mb-0 me-2">
                                  <a
                                    href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold"
                                    >Company HR</a
                                  >
                                  <div class="text-gray-400 fs-7">
                                    Corporeate staff profiles
                                  </div>
                                </div>
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">5 hrs</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                  <span class="symbol-label bg-light-success">
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
                                    <span
                                      class="svg-icon svg-icon-2 svg-icon-success"
                                    >
                                      <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                          opacity="0.3"
                                          d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z"
                                          fill="currentColor"
                                        />
                                        <path
                                          d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z"
                                          fill="currentColor"
                                        />
                                        <path
                                          opacity="0.3"
                                          d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z"
                                          fill="currentColor"
                                        />
                                        <path
                                          d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z"
                                          fill="currentColor"
                                        />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="mb-0 me-2">
                                  <a
                                    href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold"
                                    >Project Redux</a
                                  >
                                  <div class="text-gray-400 fs-7">
                                    New frontend admin theme
                                  </div>
                                </div>
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">2 days</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                  <span class="symbol-label bg-light-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
                                    <span
                                      class="svg-icon svg-icon-2 svg-icon-primary"
                                    >
                                      <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                          opacity="0.3"
                                          d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z"
                                          fill="currentColor"
                                        />
                                        <path
                                          d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z"
                                          fill="currentColor"
                                        />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="mb-0 me-2">
                                  <a
                                    href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold"
                                    >Project Breafing</a
                                  >
                                  <div class="text-gray-400 fs-7">
                                    Product launch status update
                                  </div>
                                </div>
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">21 Jan</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                  <span class="symbol-label bg-light-info">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
                                    <span
                                      class="svg-icon svg-icon-2 svg-icon-info"
                                    >
                                      <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                          opacity="0.3"
                                          d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z"
                                          fill="currentColor"
                                        />
                                        <path
                                          d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z"
                                          fill="currentColor"
                                        />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="mb-0 me-2">
                                  <a
                                    href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold"
                                    >Banner Assets</a
                                  >
                                  <div class="text-gray-400 fs-7">
                                    Collection of banner images
                                  </div>
                                </div>
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">21 Jan</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                  <span class="symbol-label bg-light-warning">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
                                    <span
                                      class="svg-icon svg-icon-2 svg-icon-warning"
                                    >
                                      <svg
                                        width="24"
                                        height="25"
                                        viewBox="0 0 24 25"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                          opacity="0.3"
                                          d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
                                          fill="currentColor"
                                        />
                                        <path
                                          d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
                                          fill="currentColor"
                                        />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="mb-0 me-2">
                                  <a
                                    href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold"
                                    >Icon Assets</a
                                  >
                                  <div class="text-gray-400 fs-7">
                                    Collection of SVG icons
                                  </div>
                                </div>
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8"
                                >20 March</span
                              >
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                          </div>
                          <!--end::Items-->
                          <!--begin::View more-->
                          <div class="py-3 text-center border-top">
                            <a
                              href="../../demo2/dist/pages/user-profile/activity.php"
                              class="btn btn-color-gray-600 btn-active-color-primary"
                              >View All
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                              <span class="svg-icon svg-icon-5">
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <rect
                                    opacity="0.5"
                                    x="18"
                                    y="13"
                                    width="13"
                                    height="2"
                                    rx="1"
                                    transform="rotate(-180 18 13)"
                                    fill="currentColor"
                                  />
                                  <path
                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                              <!--end::Svg Icon--></a
                            >
                          </div>
                          <!--end::View more-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div
                          class="tab-pane fade show active"
                          id="kt_topbar_notifications_2"
                          role="tabpanel"
                        >
                          <!--begin::Wrapper-->
                          <div class="d-flex flex-column px-9">
                            <!--begin::Section-->
                            <div class="pt-10 pb-0">
                              <!--begin::Title-->
                              <h3 class="text-dark text-center fw-bold">
                                Get Pro Access
                              </h3>
                              <!--end::Title-->
                              <!--begin::Text-->
                              <div
                                class="text-center text-gray-600 fw-semibold pt-1"
                              >
                                Outlines keep you honest. They stoping you from
                                amazing poorly about drive
                              </div>
                              <!--end::Text-->
                              <!--begin::Action-->
                              <div class="text-center mt-5 mb-9">
                                <a
                                  href="#"
                                  class="btn btn-sm btn-primary px-6"
                                  data-bs-toggle="modal"
                                  data-bs-target="#kt_modal_upgrade_plan"
                                  >Upgrade</a
                                >
                              </div>
                              <!--end::Action-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Illustration-->
                            <div class="text-center px-4">
                              <img
                                class="mw-100 mh-200px"
                                alt="image"
                                src="assets/media/illustrations/sigma-1/1.png"
                              />
                            </div>
                            <!--end::Illustration-->
                          </div>
                          <!--end::Wrapper-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div
                          class="tab-pane fade"
                          id="kt_topbar_notifications_3"
                          role="tabpanel"
                        >
                          <!--begin::Items-->
                          <div class="scroll-y mh-325px my-5 px-8">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-success me-4"
                                  >200 OK</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >New order</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8"
                                >Just now</span
                              >
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-danger me-4"
                                  >500 ERR</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >New customer</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">2 hrs</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-success me-4"
                                  >200 OK</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >Payment process</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">5 hrs</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-warning me-4"
                                  >300 WRN</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >Search query</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">2 days</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-success me-4"
                                  >200 OK</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >API connection</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">1 week</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-success me-4"
                                  >200 OK</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >Database restore</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">Mar 5</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-warning me-4"
                                  >300 WRN</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >System update</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">May 15</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-warning me-4"
                                  >300 WRN</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >Server OS update</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">Apr 3</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-warning me-4"
                                  >300 WRN</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >API rollback</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">Jun 30</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-danger me-4"
                                  >500 ERR</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >Refund process</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">Jul 10</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-danger me-4"
                                  >500 ERR</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >Withdrawal process</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">Sep 10</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                              <!--begin::Section-->
                              <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span
                                  class="w-70px badge badge-light-danger me-4"
                                  >500 ERR</span
                                >
                                <!--end::Code-->
                                <!--begin::Title-->
                                <a
                                  href="#"
                                  class="text-gray-800 text-hover-primary fw-semibold"
                                  >Mail tasks</a
                                >
                                <!--end::Title-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Label-->
                              <span class="badge badge-light fs-8">Dec 10</span>
                              <!--end::Label-->
                            </div>
                            <!--end::Item-->
                          </div>
                          <!--end::Items-->
                          <!--begin::View more-->
                          <div class="py-3 text-center border-top">
                            <a
                              href="../../demo2/dist/pages/user-profile/activity.php"
                              class="btn btn-color-gray-600 btn-active-color-primary"
                              >View All
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                              <span class="svg-icon svg-icon-5">
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <rect
                                    opacity="0.5"
                                    x="18"
                                    y="13"
                                    width="13"
                                    height="2"
                                    rx="1"
                                    transform="rotate(-180 18 13)"
                                    fill="currentColor"
                                  />
                                  <path
                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                              <!--end::Svg Icon--></a
                            >
                          </div>
                          <!--end::View more-->
                        </div>
                        <!--end::Tab panel-->
                      </div>
                      <!--end::Tab content-->
                    </div>
                    <!--end::Menu-->
                    <!--end::Menu wrapper-->
                  </div>
                  <!--end::Notifications-->
                </div>
                <!--end::Chat-->

                <!--begin::User-->
                <div class="app-navbar-item" id="kt_header_user_menu_toggle">
                  <!--begin::User info-->
                  <div
                    class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3"
                    data-kt-menu-trigger="click"
                    data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end"
                  >
                    <!--begin::Name-->
                    <div
                      class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4"
                    >
                      <span class="text-white fs-8 fw-bold lh-1 mb-1">Max</span>
                      <span class="text-white fs-8 opacity-75 fw-semibold lh-1"
                        >UX Designer</span
                      >
                    </div>
                    <!--end::Name-->
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px symbol-md-40px">
                      <img src="assets/media/avatars/300-1.jpg" alt="image" />
                    </div>
                    <!--end::Symbol-->
                  </div>
                  <!--end::User info-->
                  <!--begin::User account menu-->
                  <div
                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                    data-kt-menu="true"
                  >
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <div class="menu-content d-flex align-items-center px-3">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                          <img
                            alt="Logo"
                            src="assets/media/avatars/300-1.jpg"
                          />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                          <div class="fw-bold d-flex align-items-center fs-5">
                            Max Smith
                            <span
                              class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"
                              >Pro</span
                            >
                          </div>
                          <a
                            href="#"
                            class="fw-semibold text-muted text-hover-primary fs-7"
                            >max@kt.com</a
                          >
                        </div>
                        <!--end::Username-->
                      </div>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                      <a
                        href="../../demo22/dist/account/overview.php"
                        class="menu-link px-5"
                        >My Profile</a
                      >
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                      <a
                        href="../../demo22/dist/authentication/layouts/corporate/sign-in.php"
                        class="menu-link px-5"
                        >Sign Out</a
                      >
                    </div>
                    <!--end::Menu item-->
                  </div>
                  <!--end::User account menu-->
                </div>
                <!--end::User -->
                <!--begin::Aside toggle-->
                <!--end::Aside toggle-->
              </div>
              <!--end::Navbar-->
            </div>
            <!--end::Header primary container-->
          </div>
          <!--end::Header primary-->
          <!--begin::Header secondary-->
          <div
           class="app-header-secondary app-header-mobile-drawer"
           data-kt-drawer="true"
           data-kt-drawer-name="app-header-menu"
           data-kt-drawer-activate="{default: true, lg: false}"
           data-kt-drawer-overlay="true"
           data-kt-drawer-width="225px"
           data-kt-drawer-direction="start"
           data-kt-drawer-toggle="#kt_header_secondary_toggle"
           data-kt-sticky="true"
           data-kt-sticky-name="app-header-secondary-sticky"
           data-kt-sticky-offset="{default: 'false', lg: '300px'}"
           data-kt-swapper="true"
           data-kt-swapper-mode="append"
           data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_app_header'}"
         >
           <!--begin::Header secondary container-->
           <div
             class="app-container container-xxl app-container-fit-mobile d-flex align-items-stretch"
           >
             <!--begin::Menu wrapper-->
             <div class="header-menu d-flex align-items-stretch w-100">
               <!--begin::Menu-->
               <div
                 class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-state-primary menu-title-gray-700 menu-arrow-gray-400 menu-bullet-gray-400 fw-semibold my-5 my-lg-0 align-items-stretch"
                 id="#kt_header_menu"
                 data-kt-menu="true"
               >
                 <!--begin:Menu item-->
                 
                 <div class="menu-item">
                  <!--begin:Menu link-->
                  <a
                    class="menu-link py-3"
                    href="index.php"
                  >
                    <span class="menu-title">
                      <span class="menu-text">Dashboards</span>
                      <span class="menu-desc">Summery & Reports</span>
                    </span>
                  </a>
                  <!--end:Menu link-->
                </div>
                 
                 <!--end:Menu item-->
                 <!--begin:Menu item-->
                 
                 <div class="menu-item">
                  <!--begin:Menu link-->
                  <a
                    class="menu-link py-3"
                    href="submission.php"
                  >
                    <span class="menu-title">
                      <span class="menu-text">Submit & Submission Data</span>
                      <span class="menu-desc">Pages & Utilities</span>
                    </span>
                  </a>
                  <!--end:Menu link-->
                </div>
                 <!--end:Menu item-->
                 <!--begin:Menu item-->
                 <div class="menu-item">
                  <!--begin:Menu link-->
                  <a
                    class="menu-link py-3"
                    href="admins.php"
                  >
                    <span class="menu-title">
                      <span class="menu-text">Suppliers Members And Admins</span>
                      <span class="menu-desc">Administration</span>
                    </span>
                  </a>
                  <!--end:Menu link-->
                </div>
                 <!--end:Menu item-->
                 <!--begin:Menu item-->
                 <div class="menu-item">
                  <!--begin:Menu link-->
                  <a
                    class="menu-link py-3"
                    href="rebates.php"
                  >
                    <span class="menu-title">
                      <span class="menu-text">Rebates</span>
                      <span class="menu-desc">Description</span>
                    </span>
                  </a>
                  <!--end:Menu link-->
                </div>
                 
                 <!--end:Menu item-->
                 <!--begin:Menu item-->
                 <div class="menu-item">
                   <!--begin:Menu link-->
                   <a
                     class="menu-link py-3"
                     href="processLog.php"
                   >
                     <span class="menu-title">
                       <span class="menu-text">Process Log</span>
                       <span class="menu-desc">Description</span>
                     </span>
                   </a>
                   <!--end:Menu link-->
                 </div>
                 <!--end:Menu item-->

                  <!--begin:Menu item-->
                  <div class="menu-item">
                    <!--begin:Menu link-->
                    <a
                      class="menu-link py-3"
                      href="reports.php"
                    >
                      <span class="menu-title">
                        <span class="menu-text">Reports</span>
                        <span class="menu-desc">Description</span>
                      </span>
                    </a>
                    <!--end:Menu link-->
                  </div>
                  <!--end:Menu item-->

               </div>
               <!--end::Menu-->
             </div>
             <!--end::Menu wrapper-->
           </div>
           <!--end::Header secondary container-->
         </div>
          <!--end::Header secondary-->
        </div>
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
          <!--begin::Wrapper container-->
          <div
            class="app-container container-xxl d-flex flex-row flex-column-fluid"
          >
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
              <!--begin::Content wrapper-->
              <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                  <!--begin::Row-->
                  <div class="row g-5 g-xl-10 mb-xl-10">
                    <!--begin::Col-->
                    <div
                      class="col-md-12 col-lg-4 col-xl-4 col-xxl-4 mb-md-5 mb-xl-10"
                    >
                      <!--begin::Card widget 5-->
                      <div class="card card-flush h-100 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                          <!--begin::Title-->
                          <div class="card-title d-flex flex-column">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                              <!--begin::Amount-->
                              <span
                                class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2"
                                >1,836</span
                              >
                              <!--end::Amount-->
                              <!--begin::Badge-->
                              <span class="badge badge-light-danger fs-base">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                <span
                                  class="svg-icon svg-icon-5 svg-icon-danger ms-n1"
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
                                      x="11"
                                      y="18"
                                      width="13"
                                      height="2"
                                      rx="1"
                                      transform="rotate(-90 11 18)"
                                      fill="currentColor"
                                    />
                                    <path
                                      d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->2.2%</span
                              >
                              <!--end::Badge-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Subtitle-->
                            <span class="text-gray-400 pt-1 fw-semibold fs-6"
                              >Total Purchases</span
                            >
                            <!--end::Subtitle-->
                          </div>
                          <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0">
                          <!--begin::Progress-->
                          <div
                            class="d-flex align-items-center flex-column mt-3 w-100"
                          >
                            <div
                              class="d-flex justify-content-between w-100 mt-auto mb-2"
                            >
                              <span class="fw-bolder fs-6 text-dark"
                                >1,048 to Goal</span
                              >
                              <span class="fw-bold fs-6 text-gray-400"
                                >62%</span
                              >
                            </div>
                            <div
                              class="h-8px mx-3 w-100 bg-light-success rounded"
                            >
                              <div
                                class="bg-success rounded h-8px"
                                role="progressbar"
                                style="width: 62%"
                                aria-valuenow="50"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
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
                    <div
                      class="col-md-12 col-lg-4 col-xl-4 col-xxl-4 mb-md-5 mb-xl-10"
                    >
                      <!--begin::Card widget 6-->
                      <div class="card card-flush h-100 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                          <!--begin::Title-->
                          <div class="card-title d-flex flex-column">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                              <!--begin::Currency-->
                              <span
                                class="fs-4 fw-semibold text-gray-400 me-1 align-self-start"
                                >$</span
                              >
                              <!--end::Currency-->
                              <!--begin::Amount-->
                              <span
                                class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2"
                                >2,420</span
                              >
                              <!--end::Amount-->
                              <!--begin::Badge-->
                              <span class="badge badge-light-primary fs-base">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                <span
                                  class="svg-icon svg-icon-5 svg-icon-success ms-n1"
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
                                      x="13"
                                      y="6"
                                      width="13"
                                      height="2"
                                      rx="1"
                                      transform="rotate(90 13 6)"
                                      fill="currentColor"
                                    />
                                    <path
                                      d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->2.6%</span
                              >
                              <!--end::Badge-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Subtitle-->
                            <span class="text-gray-400 pt-1 fw-semibold fs-6"
                              >Rebate Earnings</span
                            >
                            <!--end::Subtitle-->
                          </div>
                          <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end px-0 pb-0">
                          <!--begin::Chart-->
                          <div
                            id="kt_card_widget_6_chart"
                            class="w-100"
                            style="height: 80px"
                          ></div>
                          <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                      </div>
                      <!--end::Card widget 6-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div
                      class="col-md-12 col-lg-4 col-xl-4 col-xxl-4 mb-md-5 mb-xl-10"
                    >
                      <!--begin::Card widget 5-->
                      <div class="card card-flush h-100 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                          <!--begin::Title-->
                          <div class="card-title d-flex flex-column">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                              <!--begin::Amount-->
                              <span
                                class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2"
                                >1,836</span
                              >
                              <!--end::Amount-->
                              <!--begin::Badge-->
                              <span class="badge badge-light-danger fs-base">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                <span
                                  class="svg-icon svg-icon-5 svg-icon-danger ms-n1"
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
                                      x="11"
                                      y="18"
                                      width="13"
                                      height="2"
                                      rx="1"
                                      transform="rotate(-90 11 18)"
                                      fill="currentColor"
                                    />
                                    <path
                                      d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                      fill="currentColor"
                                    />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->2.2%</span
                              >
                              <!--end::Badge-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Subtitle-->
                            <span class="text-gray-400 pt-1 fw-semibold fs-6"
                              >Top Performing Member</span
                            >
                            <!--end::Subtitle-->
                          </div>
                          <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0">
                          <!--begin::Progress-->
                          <div
                            class="d-flex align-items-center flex-column mt-3 w-100"
                          >
                            <div
                              class="d-flex justify-content-between w-100 mt-auto mb-2"
                            >
                              <span class="fw-bolder fs-6 text-dark"
                                >1,048 to Goal</span
                              >
                              <span class="fw-bold fs-6 text-gray-400"
                                >62%</span
                              >
                            </div>
                            <div
                              class="h-8px mx-3 w-100 bg-light-success rounded"
                            >
                              <div
                                class="bg-success rounded h-8px"
                                role="progressbar"
                                style="width: 62%"
                                aria-valuenow="50"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                            </div>
                          </div>
                          <!--end::Progress-->
                        </div>
                        <!--end::Card body-->
                      </div>
                      <!--end::Card widget 5-->
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Row-->
                  <!--begin::Row-->
                  <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col mb-xl-10">
                      <div class="card h-100">
                        <div class="d-flex align-items-end justify-content-end mt-3 mb-3 p-2">
                          <div class="col-md-2 mt-3 m-2">
                          <select name="language" aria-label="Select Year" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg">
                            <option value="- Select Action -">- Select Year -</option>
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 1</option>
                            <option value="option3">Option 1</option>
                        </select>
                          
                      </div>
                      <div class="col-md-2 mt-3 m-2">
                        <select name="language" aria-label="Select Year" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg">
                          <option value="- Select Action -">- Select Supplier -</option>
                          <option value="option1">Option 1</option>
                          <option value="option2">Option 1</option>
                          <option value="option3">Option 1</option>
                      </select>
                        
                    </div></div>
                        

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
                            <span class="card-label fw-bold text-gray-800"
                              >Process Log</span
                            >
                            <span class="text-gray-400 mt-1 fw-semibold fs-6"
                              >Avg. 57 orders per day</span
                            >
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
                                <select
                                  class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto"
                                  data-control="select2"
                                  data-hide-search="true"
                                  data-dropdown-css-class="w-150px"
                                  data-placeholder="Select an option"
                                  data-kt-table-widget-4="filter_status"
                                >
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
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-2">
                          <!--begin::Table-->
                          <table
                            class="table align-middle table-row-dashed fs-6 gy-3"
                            id="kt_table_widget_4_table"
                          >
                            <!--begin::Table head-->
                            <thead>
                              <!--begin::Table row-->
                              <tr
                                class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0"
                              >
                                <th class="min-w-100px">Order ID</th>
                                <th class="text-end min-w-100px">Created</th>
                                <th class="text-end min-w-125px">Customer</th>
                                <th class="text-end min-w-100px">Total</th>
                                <th class="text-end min-w-100px">Profit</th>
                                <th class="text-end min-w-50px">Status</th>
                                <th class="text-end"></th>
                              </tr>
                              <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                              <tr
                                data-kt-table-widget-4="subtable_template"
                                class="d-none"
                              >
                                <td colspan="2">
                                  <div class="d-flex align-items-center gap-3">
                                    <a
                                      href="#"
                                      class="symbol symbol-50px bg-secondary bg-opacity-25 rounded"
                                    >
                                      <img
                                        src=""
                                        data-kt-src-path="assets/media/stock/ecommerce/"
                                        alt=""
                                        data-kt-table-widget-4="template_image"
                                      />
                                    </a>
                                    <div class="d-flex flex-column text-muted">
                                      <a
                                        href="#"
                                        class="text-gray-800 text-hover-primary fw-bold"
                                        data-kt-table-widget-4="template_name"
                                        >Product name</a
                                      >
                                      <div
                                        class="fs-7"
                                        data-kt-table-widget-4="template_description"
                                      >
                                        Product description
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td class="text-end">
                                  <div class="text-gray-800 fs-7">Cost</div>
                                  <div
                                    class="text-muted fs-7 fw-bold"
                                    data-kt-table-widget-4="template_cost"
                                  >
                                    1
                                  </div>
                                </td>
                                <td class="text-end">
                                  <div class="text-gray-800 fs-7">Qty</div>
                                  <div
                                    class="text-muted fs-7 fw-bold"
                                    data-kt-table-widget-4="template_qty"
                                  >
                                    1
                                  </div>
                                </td>
                                <td class="text-end">
                                  <div class="text-gray-800 fs-7">Total</div>
                                  <div
                                    class="text-muted fs-7 fw-bold"
                                    data-kt-table-widget-4="template_total"
                                  >
                                    name
                                  </div>
                                </td>
                                <td class="text-end">
                                  <div class="text-gray-800 fs-7 me-3">
                                    On hand
                                  </div>
                                  <div
                                    class="text-muted fs-7 fw-bold"
                                    data-kt-table-widget-4="template_stock"
                                  >
                                    32
                                  </div>
                                </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <a
                                    href="../../demo22/dist/apps/ecommerce/catalog/edit-product.php"
                                    class="text-gray-800 text-hover-primary"
                                    >#XGY-346</a
                                  >
                                </td>
                                <td class="text-end">7 min ago</td>
                                <td class="text-end">
                                  <a
                                    href="#"
                                    class="text-gray-600 text-hover-primary"
                                    >Albert Flores</a
                                  >
                                </td>
                                <td class="text-end">$630.00</td>
                                <td class="text-end">
                                  <span class="text-gray-800 fw-bolder"
                                    >$86.70</span
                                  >
                                </td>
                                <td class="text-end">
                                  <span
                                    class="badge py-3 px-4 fs-7 badge-light-warning"
                                    >Pending</span
                                  >
                                </td>
                                
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <a
                                    href="../../demo22/dist/apps/ecommerce/catalog/edit-product.php"
                                    class="text-gray-800 text-hover-primary"
                                    >#YHD-047</a
                                  >
                                </td>
                                <td class="text-end">52 min ago</td>
                                <td class="text-end">
                                  <a
                                    href="#"
                                    class="text-gray-600 text-hover-primary"
                                    >Jenny Wilson</a
                                  >
                                </td>
                                <td class="text-end">$25.00</td>
                                <td class="text-end">
                                  <span class="text-gray-800 fw-bolder"
                                    >$4.20</span
                                  >
                                </td>
                                <td class="text-end">
                                  <span
                                    class="badge py-3 px-4 fs-7 badge-light-primary"
                                    >Confirmed</span
                                  >
                                </td>
                                
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <a
                                    href="../../demo22/dist/apps/ecommerce/catalog/edit-product.php"
                                    class="text-gray-800 text-hover-primary"
                                    >#SRR-678</a
                                  >
                                </td>
                                <td class="text-end">1 hour ago</td>
                                <td class="text-end">
                                  <a
                                    href="#"
                                    class="text-gray-600 text-hover-primary"
                                    >Robert Fox</a
                                  >
                                </td>
                                <td class="text-end">$1,630.00</td>
                                <td class="text-end">
                                  <span class="text-gray-800 fw-bolder"
                                    >$203.90</span
                                  >
                                </td>
                                <td class="text-end">
                                  <span
                                    class="badge py-3 px-4 fs-7 badge-light-warning"
                                    >Pending</span
                                  >
                                </td>
                                
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <a
                                    href="../../demo22/dist/apps/ecommerce/catalog/edit-product.php"
                                    class="text-gray-800 text-hover-primary"
                                    >#PXF-534</a
                                  >
                                </td>
                                <td class="text-end">3 hour ago</td>
                                <td class="text-end">
                                  <a
                                    href="#"
                                    class="text-gray-600 text-hover-primary"
                                    >Cody Fisher</a
                                  >
                                </td>
                                <td class="text-end">$119.00</td>
                                <td class="text-end">
                                  <span class="text-gray-800 fw-bolder"
                                    >$12.00</span
                                  >
                                </td>
                                <td class="text-end">
                                  <span
                                    class="badge py-3 px-4 fs-7 badge-light-success"
                                    >Shipped</span
                                  >
                                </td>
                                
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <a
                                    href="../../demo22/dist/apps/ecommerce/catalog/edit-product.php"
                                    class="text-gray-800 text-hover-primary"
                                    >#XGD-249</a
                                  >
                                </td>
                                <td class="text-end">2 day ago</td>
                                <td class="text-end">
                                  <a
                                    href="#"
                                    class="text-gray-600 text-hover-primary"
                                    >Arlene McCoy</a
                                  >
                                </td>
                                <td class="text-end">$660.00</td>
                                <td class="text-end">
                                  <span class="text-gray-800 fw-bolder"
                                    >$52.26</span
                                  >
                                </td>
                                <td class="text-end">
                                  <span
                                    class="badge py-3 px-4 fs-7 badge-light-success"
                                    >Shipped</span
                                  >
                                </td>
                                
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <a
                                    href="../../demo22/dist/apps/ecommerce/catalog/edit-product.php"
                                    class="text-gray-800 text-hover-primary"
                                    >#SKP-035</a
                                  >
                                </td>
                                <td class="text-end">2 day ago</td>
                                <td class="text-end">
                                  <a
                                    href="#"
                                    class="text-gray-600 text-hover-primary"
                                    >Eleanor Pena</a
                                  >
                                </td>
                                <td class="text-end">$290.00</td>
                                <td class="text-end">
                                  <span class="text-gray-800 fw-bolder"
                                    >$29.00</span
                                  >
                                </td>
                                <td class="text-end">
                                  <span
                                    class="badge py-3 px-4 fs-7 badge-light-danger"
                                    >Rejected</span
                                  >
                                </td>
                                
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <a
                                    href="../../demo22/dist/apps/ecommerce/catalog/edit-product.php"
                                    class="text-gray-800 text-hover-primary"
                                    >#SKP-567</a
                                  >
                                </td>
                                <td class="text-end">7 min ago</td>
                                <td class="text-end">
                                  <a
                                    href="#"
                                    class="text-gray-600 text-hover-primary"
                                    >Dan Wilson</a
                                  >
                                </td>
                                <td class="text-end">$590.00</td>
                                <td class="text-end">
                                  <span class="text-gray-800 fw-bolder"
                                    >$50.00</span
                                  >
                                </td>
                                <td class="text-end">
                                  <span
                                    class="badge py-3 px-4 fs-7 badge-light-success"
                                    >Shipped</span
                                  >
                                </td>
                                
                                </td>
                              </tr>
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
                        <div
                          class="card-header align-items-center border-0 mt-4"
                        >
                          <h3 class="card-title align-items-start flex-column">
                            <span class="fw-bold mb-2 text-dark"
                              >Quick View</span
                            >
                            <span class="text-muted fw-semibold fs-7"
                              >890,344 Sales</span
                            >
                          </h3>
                          <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button
                              type="button"
                              class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                              data-kt-menu-trigger="click"
                              data-kt-menu-placement="bottom-end"
                            >
                              <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                              <span class="svg-icon svg-icon-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24px"
                                  height="24px"
                                  viewBox="0 0 24 24"
                                >
                                  <g
                                    stroke="none"
                                    stroke-width="1"
                                    fill="none"
                                    fill-rule="evenodd"
                                  >
                                    <rect
                                      x="5"
                                      y="5"
                                      width="5"
                                      height="5"
                                      rx="1"
                                      fill="currentColor"
                                    />
                                    <rect
                                      x="14"
                                      y="5"
                                      width="5"
                                      height="5"
                                      rx="1"
                                      fill="currentColor"
                                      opacity="0.3"
                                    />
                                    <rect
                                      x="5"
                                      y="14"
                                      width="5"
                                      height="5"
                                      rx="1"
                                      fill="currentColor"
                                      opacity="0.3"
                                    />
                                    <rect
                                      x="14"
                                      y="14"
                                      width="5"
                                      height="5"
                                      rx="1"
                                      fill="currentColor"
                                      opacity="0.3"
                                    />
                                  </g>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 1-->
                            <div
                              class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                              data-kt-menu="true"
                              id="kt_menu_631f16f508ad8"
                            >
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
                                  <label class="form-label fw-semibold"
                                    >Status:</label
                                  >
                                  <!--end::Label-->
                                  <!--begin::Input-->
                                  <div>
                                    <select
                                      class="form-select form-select-solid"
                                      data-kt-select2="true"
                                      data-placeholder="Select option"
                                      data-dropdown-parent="#kt_menu_631f16f508ad8"
                                      data-allow-clear="true"
                                    >
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
                                  <label class="form-label fw-semibold"
                                    >Member Type:</label
                                  >
                                  <!--end::Label-->
                                  <!--begin::Options-->
                                  <div class="d-flex">
                                    <!--begin::Options-->
                                    <label
                                      class="form-check form-check-sm form-check-custom form-check-solid me-5"
                                    >
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="1"
                                      />
                                      <span class="form-check-label"
                                        >Author</span
                                      >
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label
                                      class="form-check form-check-sm form-check-custom form-check-solid"
                                    >
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="2"
                                        checked="checked"
                                      />
                                      <span class="form-check-label"
                                        >Customer</span
                                      >
                                    </label>
                                    <!--end::Options-->
                                  </div>
                                  <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                  <!--begin::Label-->
                                  <label class="form-label fw-semibold"
                                    >Notifications:</label
                                  >
                                  <!--end::Label-->
                                  <!--begin::Switch-->
                                  <div
                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid"
                                  >
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      value=""
                                      name="notifications"
                                      checked="checked"
                                    />
                                    <label class="form-check-label"
                                      >Enabled</label
                                    >
                                  </div>
                                  <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                  <button
                                    type="reset"
                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true"
                                  >
                                    Reset
                                  </button>
                                  <button
                                    type="submit"
                                    class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true"
                                  >
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
                              <div
                                class="timeline-label fw-bold text-gray-800 fs-6"
                              >
                                08:42
                              </div>
                              <!--end::Label-->
                              <!--begin::Badge-->
                              <div class="timeline-badge">
                                <i
                                  class="fa fa-genderless text-warning fs-1"
                                ></i>
                              </div>
                              <!--end::Badge-->
                              <!--begin::Text-->
                              <div
                                class="fw-mormal timeline-content text-muted ps-3"
                              >
                                Outlines keep you honest. And keep structure
                              </div>
                              <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                              <!--begin::Label-->
                              <div
                                class="timeline-label fw-bold text-gray-800 fs-6"
                              >
                                10:00
                              </div>
                              <!--end::Label-->
                              <!--begin::Badge-->
                              <div class="timeline-badge">
                                <i
                                  class="fa fa-genderless text-success fs-1"
                                ></i>
                              </div>
                              <!--end::Badge-->
                              <!--begin::Content-->
                              <div class="timeline-content d-flex">
                                <span class="fw-bold text-gray-800 ps-3"
                                  >AEOL meeting</span
                                >
                              </div>
                              <!--end::Content-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                              <!--begin::Label-->
                              <div
                                class="timeline-label fw-bold text-gray-800 fs-6"
                              >
                                14:37
                              </div>
                              <!--end::Label-->
                              <!--begin::Badge-->
                              <div class="timeline-badge">
                                <i
                                  class="fa fa-genderless text-danger fs-1"
                                ></i>
                              </div>
                              <!--end::Badge-->
                              <!--begin::Desc-->
                              <div
                                class="timeline-content fw-bold text-gray-800 ps-3"
                              >
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
                              <div
                                class="timeline-label fw-bold text-gray-800 fs-6"
                              >
                                16:50
                              </div>
                              <!--end::Label-->
                              <!--begin::Badge-->
                              <div class="timeline-badge">
                                <i
                                  class="fa fa-genderless text-primary fs-1"
                                ></i>
                              </div>
                              <!--end::Badge-->
                              <!--begin::Text-->
                              <div
                                class="timeline-content fw-mormal text-muted ps-3"
                              >
                                Indulging in poorly driving and keep structure
                                keep great
                              </div>
                              <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                              <!--begin::Label-->
                              <div
                                class="timeline-label fw-bold text-gray-800 fs-6"
                              >
                                21:03
                              </div>
                              <!--end::Label-->
                              <!--begin::Badge-->
                              <div class="timeline-badge">
                                <i
                                  class="fa fa-genderless text-danger fs-1"
                                ></i>
                              </div>
                              <!--end::Badge-->
                              <!--begin::Desc-->
                              <div
                                class="timeline-content fw-semibold text-gray-800 ps-3"
                              >
                                New order placed
                                <a href="#" class="text-primary">#XF-2356</a>.
                              </div>
                              <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                              <!--begin::Label-->
                              <div
                                class="timeline-label fw-bold text-gray-800 fs-6"
                              >
                                16:50
                              </div>
                              <!--end::Label-->
                              <!--begin::Badge-->
                              <div class="timeline-badge">
                                <i
                                  class="fa fa-genderless text-primary fs-1"
                                ></i>
                              </div>
                              <!--end::Badge-->
                              <!--begin::Text-->
                              <div
                                class="timeline-content fw-mormal text-muted ps-3"
                              >
                                Indulging in poorly driving and keep structure
                                keep great
                              </div>
                              <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                              <!--begin::Label-->
                              <div
                                class="timeline-label fw-bold text-gray-800 fs-6"
                              >
                                21:03
                              </div>
                              <!--end::Label-->
                              <!--begin::Badge-->
                              <div class="timeline-badge">
                                <i
                                  class="fa fa-genderless text-danger fs-1"
                                ></i>
                              </div>
                              <!--end::Badge-->
                              <!--begin::Desc-->
                              <div
                                class="timeline-content fw-semibold text-gray-800 ps-3"
                              >
                                New order placed
                                <a href="#" class="text-primary">#XF-2356</a>.
                              </div>
                              <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item mb-9">
                              <!--begin::Label-->
                              <div
                                class="timeline-label fw-bold text-gray-800 fs-6"
                              >
                                10:30
                              </div>
                              <!--end::Label-->
                              <!--begin::Badge-->
                              <div class="timeline-badge">
                                <i
                                  class="fa fa-genderless text-success fs-1"
                                ></i>
                              </div>
                              <!--end::Badge-->
                              <!--begin::Text-->
                              <div
                                class="timeline-content fw-mormal text-muted ps-3"
                              >
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
              <div
                id="kt_app_footer"
                class="app-footer align-items-center justify-content-between"
              >
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                  <span class="text-muted fw-semibold me-1">2022&copy;</span>
                  <a
                    href="https://buyyn.io"
                    target="_blank"
                    class="text-gray-800 text-hover-primary"
                    >Buyyn.io</a
                  >
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul
                  class="menu menu-gray-600 menu-hover-primary fw-semibold order-1"
                ></ul>
                <!--end::Menu-->
              </div>
              <!--end::Footer-->
            </div>
            <!--end:::Main-->
          </div>
          <!--end::Wrapper container-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div
      id="kt_activities"
      class="bg-body"
      data-kt-drawer="true"
      data-kt-drawer-name="activities"
      data-kt-drawer-activate="true"
      data-kt-drawer-overlay="true"
      data-kt-drawer-width="{default:'300px', 'lg': '900px'}"
      data-kt-drawer-direction="end"
      data-kt-drawer-toggle="#kt_activities_toggle"
      data-kt-drawer-close="#kt_activities_close"
    >
      <div class="card shadow-none border-0 rounded-0">
        <!--begin::Header-->
        <div class="card-header" id="kt_activities_header">
          <h3 class="card-title fw-bold text-dark">Activity Logs</h3>
          <div class="card-toolbar">
            <button
              type="button"
              class="btn btn-sm btn-icon btn-active-light-primary me-n5"
              id="kt_activities_close"
            >
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
              <span class="svg-icon svg-icon-1">
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                    opacity="0.5"
                    x="6"
                    y="17.3137"
                    width="16"
                    height="2"
                    rx="1"
                    transform="rotate(-45 6 17.3137)"
                    fill="currentColor"
                  />
                  <rect
                    x="7.41422"
                    y="6"
                    width="16"
                    height="2"
                    rx="1"
                    transform="rotate(45 7.41422 6)"
                    fill="currentColor"
                  />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </button>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body position-relative" id="kt_activities_body">
          <!--begin::Content-->
          <div
            id="kt_activities_scroll"
            class="position-relative scroll-y me-n5 pe-5"
            data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-wrappers="#kt_activities_body"
            data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
            data-kt-scroll-offset="5px"
          >
            <!--begin::Timeline items-->
            <div class="timeline">
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div
                  class="timeline-icon symbol symbol-circle symbol-40px me-4"
                >
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          opacity="0.3"
                          d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z"
                          fill="currentColor"
                        />
                        <path
                          d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z"
                          fill="currentColor"
                        />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      There are 2 new tasks for you in “AirPlus Mobile App”
                      project:
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Added at 4:23 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Nina Nilson"
                      >
                        <img src="assets/media/avatars/300-14.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <!--begin::Record-->
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5"
                    >
                      <!--begin::Title-->
                      <a
                        href="../../demo22/dist/apps/projects/project.php"
                        class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px"
                        >Meeting with customer</a
                      >
                      <!--end::Title-->
                      <!--begin::Label-->
                      <div class="min-w-175px pe-2">
                        <span class="badge badge-light text-muted"
                          >Application Design</span
                        >
                      </div>
                      <!--end::Label-->
                      <!--begin::Users-->
                      <div
                        class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2"
                      >
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <img src="assets/media/avatars/300-2.jpg" alt="img" />
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <img
                            src="assets/media/avatars/300-14.jpg"
                            alt="img"
                          />
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <div
                            class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary"
                          >
                            A
                          </div>
                        </div>
                        <!--end::User-->
                      </div>
                      <!--end::Users-->
                      <!--begin::Progress-->
                      <div class="min-w-125px pe-2">
                        <span class="badge badge-light-primary"
                          >In Progress</span
                        >
                      </div>
                      <!--end::Progress-->
                      <!--begin::Action-->
                      <a
                        href="../../demo22/dist/apps/projects/project.php"
                        class="btn btn-sm btn-light btn-active-light-primary"
                        >View</a
                      >
                      <!--end::Action-->
                    </div>
                    <!--end::Record-->
                    <!--begin::Record-->
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0"
                    >
                      <!--begin::Title-->
                      <a
                        href="../../demo22/dist/apps/projects/project.php"
                        class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px"
                        >Project Delivery Preparation</a
                      >
                      <!--end::Title-->
                      <!--begin::Label-->
                      <div class="min-w-175px">
                        <span class="badge badge-light text-muted"
                          >CRM System Development</span
                        >
                      </div>
                      <!--end::Label-->
                      <!--begin::Users-->
                      <div
                        class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px"
                      >
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <img
                            src="assets/media/avatars/300-20.jpg"
                            alt="img"
                          />
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <div
                            class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary"
                          >
                            B
                          </div>
                        </div>
                        <!--end::User-->
                      </div>
                      <!--end::Users-->
                      <!--begin::Progress-->
                      <div class="min-w-125px">
                        <span class="badge badge-light-success">Completed</span>
                      </div>
                      <!--end::Progress-->
                      <!--begin::Action-->
                      <a
                        href="../../demo22/dist/apps/projects/project.php"
                        class="btn btn-sm btn-light btn-active-light-primary"
                        >View</a
                      >
                      <!--end::Action-->
                    </div>
                    <!--end::Record-->
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          opacity="0.3"
                          d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z"
                          fill="currentColor"
                        />
                        <path
                          d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z"
                          fill="currentColor"
                        />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n2">
                  <!--begin::Timeline heading-->
                  <div class="overflow-auto pe-3">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      Invitation for crafting engaging designs that speak human
                      workshop
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Alan Nilson"
                      >
                        <img src="assets/media/avatars/300-1.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z"
                          fill="currentColor"
                        />
                        <path
                          opacity="0.3"
                          d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z"
                          fill="currentColor"
                        />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="mb-5 pe-3">
                    <!--begin::Title-->
                    <a
                      href="#"
                      class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2"
                      >3 New Incoming Project Files:</a
                    >
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Sent at 10:30 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Jan Hummer"
                      >
                        <img src="assets/media/avatars/300-23.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5"
                    >
                      <!--begin::Item-->
                      <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                        <!--begin::Icon-->
                        <img
                          alt=""
                          class="w-30px me-3"
                          src="assets/media/svg/files/pdf.svg"
                        />
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <div class="ms-1 fw-semibold">
                          <!--begin::Desc-->
                          <a
                            href="../../demo22/dist/apps/projects/project.php"
                            class="fs-6 text-hover-primary fw-bold"
                            >Finance KPI App Guidelines</a
                          >
                          <!--end::Desc-->
                          <!--begin::Number-->
                          <div class="text-gray-400">1.9mb</div>
                          <!--end::Number-->
                        </div>
                        <!--begin::Info-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                        <!--begin::Icon-->
                        <img
                          alt="../../demo22/dist/apps/projects/project.php"
                          class="w-30px me-3"
                          src="assets/media/svg/files/doc.svg"
                        />
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <div class="ms-1 fw-semibold">
                          <!--begin::Desc-->
                          <a href="#" class="fs-6 text-hover-primary fw-bold"
                            >Client UAT Testing Results</a
                          >
                          <!--end::Desc-->
                          <!--begin::Number-->
                          <div class="text-gray-400">18kb</div>
                          <!--end::Number-->
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex flex-aligns-center">
                        <!--begin::Icon-->
                        <img
                          alt="../../demo22/dist/apps/projects/project.php"
                          class="w-30px me-3"
                          src="assets/media/svg/files/css.svg"
                        />
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <div class="ms-1 fw-semibold">
                          <!--begin::Desc-->
                          <a href="#" class="fs-6 text-hover-primary fw-bold"
                            >Finance Reports</a
                          >
                          <!--end::Desc-->
                          <!--begin::Number-->
                          <div class="text-gray-400">20mb</div>
                          <!--end::Number-->
                        </div>
                        <!--end::Icon-->
                      </div>
                      <!--end::Item-->
                    </div>
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          opacity="0.3"
                          d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                          fill="currentColor"
                        />
                        <path
                          d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                          fill="currentColor"
                        />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      Task
                      <a href="#" class="text-primary fw-bold me-1">#45890</a
                      >merged with
                      <a href="#" class="text-primary fw-bold me-1">#45890</a>in
                      “Ads Pro Admin Dashboard project:
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Initiated at 4:23 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Nina Nilson"
                      >
                        <img src="assets/media/avatars/300-14.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          opacity="0.3"
                          d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                          fill="currentColor"
                        />
                        <path
                          d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                          fill="currentColor"
                        />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      3 new application design concepts added:
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Created at 4:23 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Marcus Dotson"
                      >
                        <img src="assets/media/avatars/300-2.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7"
                    >
                      <!--begin::Item-->
                      <div class="overlay me-10">
                        <!--begin::Image-->
                        <div class="overlay-wrapper">
                          <img
                            alt="img"
                            class="rounded w-150px"
                            src="assets/media/stock/600x400/img-29.jpg"
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Link-->
                        <div
                          class="overlay-layer bg-dark bg-opacity-10 rounded"
                        >
                          <a href="#" class="btn btn-sm btn-primary btn-shadow"
                            >Explore</a
                          >
                        </div>
                        <!--end::Link-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="overlay me-10">
                        <!--begin::Image-->
                        <div class="overlay-wrapper">
                          <img
                            alt="img"
                            class="rounded w-150px"
                            src="assets/media/stock/600x400/img-31.jpg"
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Link-->
                        <div
                          class="overlay-layer bg-dark bg-opacity-10 rounded"
                        >
                          <a href="#" class="btn btn-sm btn-primary btn-shadow"
                            >Explore</a
                          >
                        </div>
                        <!--end::Link-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="overlay">
                        <!--begin::Image-->
                        <div class="overlay-wrapper">
                          <img
                            alt="img"
                            class="rounded w-150px"
                            src="assets/media/stock/600x400/img-40.jpg"
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Link-->
                        <div
                          class="overlay-layer bg-dark bg-opacity-10 rounded"
                        >
                          <a href="#" class="btn btn-sm btn-primary btn-shadow"
                            >Explore</a
                          >
                        </div>
                        <!--end::Link-->
                      </div>
                      <!--end::Item-->
                    </div>
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                          fill="currentColor"
                        />
                        <path
                          opacity="0.3"
                          d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                          fill="currentColor"
                        />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      New case
                      <a href="#" class="text-primary fw-bold me-1">#67890</a>is
                      assigned to you in Multi-platform Database Design project
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="overflow-auto pb-5">
                      <!--begin::Wrapper-->
                      <div class="d-flex align-items-center mt-1 fs-6">
                        <!--begin::Info-->
                        <div class="text-muted me-2 fs-7">
                          Added at 4:23 PM by
                        </div>
                        <!--end::Info-->
                        <!--begin::User-->
                        <a href="#" class="text-primary fw-bold me-1"
                          >Alice Tan</a
                        >
                        <!--end::User-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          opacity="0.3"
                          d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                          fill="currentColor"
                        />
                        <path
                          d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                          fill="currentColor"
                        />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      You have received a new order:
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Placed at 5:05 AM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Robert Rich"
                      >
                        <img src="assets/media/avatars/300-4.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <!--begin::Notice-->
                    <div
                      class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6"
                    >
                      <!--begin::Icon-->
                      <!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
                      <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                        <svg
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            opacity="0.3"
                            d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z"
                            fill="currentColor"
                          />
                          <path
                            d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z"
                            fill="currentColor"
                          />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                      <!--end::Icon-->
                      <!--begin::Wrapper-->
                      <div
                        class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap"
                      >
                        <!--begin::Content-->
                        <div class="mb-3 mb-md-0 fw-semibold">
                          <h4 class="text-gray-900 fw-bold">
                            Database Backup Process Completed!
                          </h4>
                          <div class="fs-6 text-gray-700 pe-7">
                            Login into Admin Dashboard to make sure the data
                            integrity is OK
                          </div>
                        </div>
                        <!--end::Content-->
                        <!--begin::Action-->
                        <a
                          href="#"
                          class="btn btn-primary px-6 align-self-center text-nowrap"
                          >Proceed</a
                        >
                        <!--end::Action-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                          fill="currentColor"
                        />
                        <path
                          opacity="0.3"
                          d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                          fill="currentColor"
                        />
                        <path
                          opacity="0.3"
                          d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                          fill="currentColor"
                        />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">
                      New order
                      <a href="#" class="text-primary fw-bold me-1">#67890</a>is
                      placed for Workshow Planning & Budget Estimation
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Placed at 4:23 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <a href="#" class="text-primary fw-bold me-1"
                        >Jimmy Bold</a
                      >
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
            </div>
            <!--end::Timeline items-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer py-5 text-center" id="kt_activities_footer">
          <a
            href="../../demo22/dist/pages/user-profile/activity.php"
            class="btn btn-bg-body text-primary"
            >View All Activities
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
            <span class="svg-icon svg-icon-3 svg-icon-primary">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  opacity="0.5"
                  x="18"
                  y="13"
                  width="13"
                  height="2"
                  rx="1"
                  transform="rotate(-180 18 13)"
                  fill="currentColor"
                />
                <path
                  d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                  fill="currentColor"
                />
              </svg>
            </span>
            <!--end::Svg Icon--></a
          >
        </div>
        <!--end::Footer-->
      </div>
    </div>
    <!--end::Activities drawer-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
      <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
      <span class="svg-icon">
        <svg
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <rect
            opacity="0.5"
            x="13"
            y="6"
            width="13"
            height="2"
            rx="1"
            transform="rotate(90 13 6)"
            fill="currentColor"
          />
          <path
            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
            fill="currentColor"
          />
        </svg>
      </span>
      <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--begin::Modals-->
    <!--begin::Modal - View Users-->
    <div
      class="modal fade"
      id="kt_modal_view_users"
      tabindex="-1"
      aria-hidden="true"
    >
      <!--begin::Modal dialog-->
      <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
          <!--begin::Modal header-->
          <div class="modal-header pb-0 border-0 justify-content-end">
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-color-primary"
              data-bs-dismiss="modal"
            >
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
              <span class="svg-icon svg-icon-1">
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                    opacity="0.5"
                    x="6"
                    y="17.3137"
                    width="16"
                    height="2"
                    rx="1"
                    transform="rotate(-45 6 17.3137)"
                    fill="currentColor"
                  />
                  <rect
                    x="7.41422"
                    y="6"
                    width="16"
                    height="2"
                    rx="1"
                    transform="rotate(45 7.41422 6)"
                    fill="currentColor"
                  />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
          </div>
          <!--begin::Modal header-->
          <!--begin::Modal body-->
          <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
            <!--begin::Heading-->
            <div class="text-center mb-13">
              <!--begin::Title-->
              <h1 class="mb-3">Browse Users</h1>
              <!--end::Title-->
              <!--begin::Description-->
              <div class="text-muted fw-semibold fs-5">
                If you need more info, please check out our
                <a href="#" class="link-primary fw-bold">Users Directory</a>.
              </div>
              <!--end::Description-->
            </div>
            <!--end::Heading-->
            <!--begin::Users-->
            <div class="mb-15">
              <!--begin::List-->
              <div class="mh-375px scroll-y me-n7 pe-7">
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                        >Emma Smith
                        <span class="badge badge-light fs-8 fw-semibold ms-2"
                          >Art Director</span
                        ></a
                      >
                      <!--end::Name-->
                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">smith@kpmg.com</div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$23,000</div>
                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-semibold"
                        >M</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                        >Melody Macy
                        <span class="badge badge-light fs-8 fw-semibold ms-2"
                          >Marketing Analytic</span
                        ></a
                      >
                      <!--end::Name-->
                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">
                        melody@altbox.com
                      </div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$50,500</div>
                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                        >Max Smith
                        <span class="badge badge-light fs-8 fw-semibold ms-2"
                          >Software Enginer</span
                        ></a
                      >
                      <!--end::Name-->
                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">max@kt.com</div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$75,900</div>
                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                        >Sean Bean
                        <span class="badge badge-light fs-8 fw-semibold ms-2"
                          >Web Developer</span
                        ></a
                      >
                      <!--end::Name-->
                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">sean@dellito.com</div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$10,500</div>
                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                        >Brian Cox
                        <span class="badge badge-light fs-8 fw-semibold ms-2"
                          >UI/UX Designer</span
                        ></a
                      >
                      <!--end::Name-->
                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">
                        brian@exchange.com
                      </div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$20,000</div>
                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-warning text-warning fw-semibold"
                        >C</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                        >Mikaela Collins
                        <span class="badge badge-light fs-8 fw-semibold ms-2"
                          >Head Of Marketing</span
                        ></a
                      >
                      <!--end::Name-->
                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">mik@pex.com</div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$9,300</div>
                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                        >Francis Mitcham
                        <span class="badge badge-light fs-8 fw-semibold ms-2"
                          >Software Arcitect</span
                        ></a
                      >
                      <!--end::Name-->
                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$15,000</div>
                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-semibold"
                        >O</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                        >Olivia Wild
                        <span class="badge badge-light fs-8 fw-semibold ms-2"
                          >System Admin</span
                        ></a
                      >
                      <!--end::Name-->
                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">
                        olivia@corpmail.com
                      </div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$23,000</div>
                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-primary text-primary fw-semibold"
                        >N</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                        >Neil Owen
                        <span class="badge badge-light fs-8 fw-semibold ms-2"
                          >Account Manager</span
                        ></a
                      >
                      <!--end::Name-->
                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">
                        owen.neil@gmail.com
                      </div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$45,800</div>
                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                        >Dan Wilson
                        <span class="badge badge-light fs-8 fw-semibold ms-2"
                          >Web Desinger</span
                        ></a
                      >
                      <!--end::Name-->
                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">
                        dam@consilting.com
                      </div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$90,500</div>
                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-semibold"
                        >E</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                        >Emma Bold
                        <span class="badge badge-light fs-8 fw-semibold ms-2"
                          >Corporate Finance</span
                        ></a
                      >
                      <!--end::Name-->
                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">emma@intenso.com</div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$5,000</div>
                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                        >Ana Crown
                        <span class="badge badge-light fs-8 fw-semibold ms-2"
                          >Customer Relationship</span
                        ></a
                      >
                      <!--end::Name-->
                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">
                        ana.cf@limtel.com
                      </div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$70,000</div>
                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div class="d-flex flex-stack py-5">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-info text-info fw-semibold"
                        >A</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                      <!--begin::Name-->
                      <a
                        href="#"
                        class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary"
                        >Robert Doe
                        <span class="badge badge-light fs-8 fw-semibold ms-2"
                          >Marketing Executive</span
                        ></a
                      >
                      <!--end::Name-->
                      <!--begin::Email-->
                      <div class="fw-semibold text-muted">robert@benko.com</div>
                      <!--end::Email-->
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Stats-->
                  <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                      <div class="fs-5 fw-bold text-dark">$45,500</div>
                      <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::User-->
              </div>
              <!--end::List-->
            </div>
            <!--end::Users-->
            <!--begin::Notice-->
            <div class="d-flex justify-content-between">
              <!--begin::Label-->
              <div class="fw-semibold">
                <label class="fs-6">Adding Users by Team Members</label>
                <div class="fs-7 text-muted">
                  If you need more info, please check budget planning
                </div>
              </div>
              <!--end::Label-->
              <!--begin::Switch-->
              <label
                class="form-check form-switch form-check-custom form-check-solid"
              >
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  checked="checked"
                />
                <span class="form-check-label fw-semibold text-muted"
                  >Allowed</span
                >
              </label>
              <!--end::Switch-->
            </div>
            <!--end::Notice-->
          </div>
          <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
    </div>
    <!--end::Modal - View Users-->
    <!--begin::Modal - Users Search-->
    <div
      class="modal fade"
      id="kt_modal_users_search"
      tabindex="-1"
      aria-hidden="true"
    >
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
          <!--begin::Modal header-->
          <div class="modal-header pb-0 border-0 justify-content-end">
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-color-primary"
              data-bs-dismiss="modal"
            >
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
              <span class="svg-icon svg-icon-1">
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                    opacity="0.5"
                    x="6"
                    y="17.3137"
                    width="16"
                    height="2"
                    rx="1"
                    transform="rotate(-45 6 17.3137)"
                    fill="currentColor"
                  />
                  <rect
                    x="7.41422"
                    y="6"
                    width="16"
                    height="2"
                    rx="1"
                    transform="rotate(45 7.41422 6)"
                    fill="currentColor"
                  />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
          </div>
          <!--begin::Modal header-->
          <!--begin::Modal body-->
          <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
            <!--begin::Content-->
            <div class="text-center mb-13">
              <h1 class="mb-3">Search Users</h1>
              <div class="text-muted fw-semibold fs-5">
                Invite Collaborators To Your Project
              </div>
            </div>
            <!--end::Content-->
            <!--begin::Search-->
            <div
              id="kt_modal_users_search_handler"
              data-kt-search-keypress="true"
              data-kt-search-min-length="2"
              data-kt-search-enter="enter"
              data-kt-search-layout="inline"
            >
              <!--begin::Form-->
              <form
                data-kt-search-element="form"
                class="w-100 position-relative mb-5"
                autocomplete="off"
              >
                <!--begin::Hidden input(Added to disable form autocomplete)-->
                <input type="hidden" />
                <!--end::Hidden input-->
                <!--begin::Icon-->
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span
                  class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y"
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
                <!--end::Icon-->
                <!--begin::Input-->
                <input
                  type="text"
                  class="form-control form-control-lg form-control-solid px-15"
                  name="search"
                  value=""
                  placeholder="Search by username, full name or email..."
                  data-kt-search-element="input"
                />
                <!--end::Input-->
                <!--begin::Spinner-->
                <span
                  class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                  data-kt-search-element="spinner"
                >
                  <span
                    class="spinner-border h-15px w-15px align-middle text-muted"
                  ></span>
                </span>
                <!--end::Spinner-->
                <!--begin::Reset-->
                <span
                  class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                  data-kt-search-element="clear"
                >
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                  <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <rect
                        opacity="0.5"
                        x="6"
                        y="17.3137"
                        width="16"
                        height="2"
                        rx="1"
                        transform="rotate(-45 6 17.3137)"
                        fill="currentColor"
                      />
                      <rect
                        x="7.41422"
                        y="6"
                        width="16"
                        height="2"
                        rx="1"
                        transform="rotate(45 7.41422 6)"
                        fill="currentColor"
                      />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
                <!--end::Reset-->
              </form>
              <!--end::Form-->
              <!--begin::Wrapper-->
              <div class="py-5">
                <!--begin::Suggestions-->
                <div data-kt-search-element="suggestions">
                  <!--begin::Heading-->
                  <h3 class="fw-semibold mb-5">Recently searched:</h3>
                  <!--end::Heading-->
                  <!--begin::Users-->
                  <div class="mh-375px scroll-y me-n7 pe-7">
                    <!--begin::User-->
                    <a
                      href="#"
                      class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                    >
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle me-5">
                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Info-->
                      <div class="fw-semibold">
                        <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                        <span class="badge badge-light">Art Director</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::User-->
                    <!--begin::User-->
                    <a
                      href="#"
                      class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                    >
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle me-5">
                        <span
                          class="symbol-label bg-light-danger text-danger fw-semibold"
                          >M</span
                        >
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Info-->
                      <div class="fw-semibold">
                        <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                        <span class="badge badge-light"
                          >Marketing Analytic</span
                        >
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::User-->
                    <!--begin::User-->
                    <a
                      href="#"
                      class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                    >
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle me-5">
                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Info-->
                      <div class="fw-semibold">
                        <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                        <span class="badge badge-light">Software Enginer</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::User-->
                    <!--begin::User-->
                    <a
                      href="#"
                      class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                    >
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle me-5">
                        <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Info-->
                      <div class="fw-semibold">
                        <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                        <span class="badge badge-light">Web Developer</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::User-->
                    <!--begin::User-->
                    <a
                      href="#"
                      class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                    >
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle me-5">
                        <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Info-->
                      <div class="fw-semibold">
                        <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                        <span class="badge badge-light">UI/UX Designer</span>
                      </div>
                      <!--end::Info-->
                    </a>
                    <!--end::User-->
                  </div>
                  <!--end::Users-->
                </div>
                <!--end::Suggestions-->
                <!--begin::Results(add d-none to below element to hide the users list by default)-->
                <div data-kt-search-element="results" class="d-none">
                  <!--begin::Users-->
                  <div class="mh-375px scroll-y me-n7 pe-7">
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="0"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='0']"
                            value="0"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Emma Smith</a
                          >
                          <div class="fw-semibold text-muted">
                            smith@kpmg.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2" selected="selected">Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="1"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='1']"
                            value="1"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-danger text-danger fw-semibold"
                            >M</span
                          >
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Melody Macy</a
                          >
                          <div class="fw-semibold text-muted">
                            melody@altbox.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1" selected="selected">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="2"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='2']"
                            value="2"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Max Smith</a
                          >
                          <div class="fw-semibold text-muted">max@kt.com</div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3" selected="selected">
                            Can Edit
                          </option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="3"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='3']"
                            value="3"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Sean Bean</a
                          >
                          <div class="fw-semibold text-muted">
                            sean@dellito.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2" selected="selected">Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="4"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='4']"
                            value="4"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img
                            alt="Pic"
                            src="assets/media/avatars/300-25.jpg"
                          />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Brian Cox</a
                          >
                          <div class="fw-semibold text-muted">
                            brian@exchange.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3" selected="selected">
                            Can Edit
                          </option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="5"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='5']"
                            value="5"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-warning text-warning fw-semibold"
                            >C</span
                          >
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Mikaela Collins</a
                          >
                          <div class="fw-semibold text-muted">mik@pex.com</div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2" selected="selected">Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="6"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='6']"
                            value="6"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Francis Mitcham</a
                          >
                          <div class="fw-semibold text-muted">
                            f.mit@kpmg.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3" selected="selected">
                            Can Edit
                          </option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="7"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='7']"
                            value="7"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-danger text-danger fw-semibold"
                            >O</span
                          >
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Olivia Wild</a
                          >
                          <div class="fw-semibold text-muted">
                            olivia@corpmail.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2" selected="selected">Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="8"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='8']"
                            value="8"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-primary text-primary fw-semibold"
                            >N</span
                          >
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Neil Owen</a
                          >
                          <div class="fw-semibold text-muted">
                            owen.neil@gmail.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1" selected="selected">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="9"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='9']"
                            value="9"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img
                            alt="Pic"
                            src="assets/media/avatars/300-23.jpg"
                          />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Dan Wilson</a
                          >
                          <div class="fw-semibold text-muted">
                            dam@consilting.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3" selected="selected">
                            Can Edit
                          </option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="10"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='10']"
                            value="10"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-danger text-danger fw-semibold"
                            >E</span
                          >
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Emma Bold</a
                          >
                          <div class="fw-semibold text-muted">
                            emma@intenso.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2" selected="selected">Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="11"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='11']"
                            value="11"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img
                            alt="Pic"
                            src="assets/media/avatars/300-12.jpg"
                          />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Ana Crown</a
                          >
                          <div class="fw-semibold text-muted">
                            ana.cf@limtel.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1" selected="selected">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="12"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='12']"
                            value="12"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-info text-info fw-semibold"
                            >A</span
                          >
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Robert Doe</a
                          >
                          <div class="fw-semibold text-muted">
                            robert@benko.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3" selected="selected">
                            Can Edit
                          </option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="13"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='13']"
                            value="13"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img
                            alt="Pic"
                            src="assets/media/avatars/300-13.jpg"
                          />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >John Miller</a
                          >
                          <div class="fw-semibold text-muted">
                            miller@mapple.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3" selected="selected">
                            Can Edit
                          </option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="14"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='14']"
                            value="14"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <span
                            class="symbol-label bg-light-success text-success fw-semibold"
                            >L</span
                          >
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Lucy Kunic</a
                          >
                          <div class="fw-semibold text-muted">
                            lucy.m@fentech.com
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2" selected="selected">Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="15"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='15']"
                            value="15"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img
                            alt="Pic"
                            src="assets/media/avatars/300-21.jpg"
                          />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Ethan Wilder</a
                          >
                          <div class="fw-semibold text-muted">
                            ethan@loop.com.au
                          </div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1" selected="selected">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3">Can Edit</option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div
                      class="border-bottom border-gray-300 border-bottom-dashed"
                    ></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div
                      class="rounded d-flex flex-stack bg-active-lighten p-4"
                      data-user-id="16"
                    >
                      <!--begin::Details-->
                      <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label
                          class="form-check form-check-custom form-check-solid me-5"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="users"
                            data-kt-check="true"
                            data-kt-check-target="[data-user-id='16']"
                            value="16"
                          />
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                          <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                          <a
                            href="#"
                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                            >Max Smith</a
                          >
                          <div class="fw-semibold text-muted">max@kt.com</div>
                        </div>
                        <!--end::Details-->
                      </div>
                      <!--end::Details-->
                      <!--begin::Access menu-->
                      <div class="ms-2 w-100px">
                        <select
                          class="form-select form-select-solid form-select-sm"
                          data-control="select2"
                          data-hide-search="true"
                        >
                          <option value="1">Guest</option>
                          <option value="2">Owner</option>
                          <option value="3" selected="selected">
                            Can Edit
                          </option>
                        </select>
                      </div>
                      <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Users-->
                  <!--begin::Actions-->
                  <div class="d-flex flex-center mt-15">
                    <button
                      type="reset"
                      id="kt_modal_users_search_reset"
                      data-bs-dismiss="modal"
                      class="btn btn-active-light me-3"
                    >
                      Cancel
                    </button>
                    <button
                      type="submit"
                      id="kt_modal_users_search_submit"
                      class="btn btn-primary"
                    >
                      Add Selected Users
                    </button>
                  </div>
                  <!--end::Actions-->
                </div>
                <!--end::Results-->
                <!--begin::Empty-->
                <div data-kt-search-element="empty" class="text-center d-none">
                  <!--begin::Message-->
                  <div class="fw-semibold py-10">
                    <div class="text-gray-600 fs-3 mb-2">No users found</div>
                    <div class="text-muted fs-6">
                      Try to search by username, full name or email...
                    </div>
                  </div>
                  <!--end::Message-->
                  <!--begin::Illustration-->
                  <div class="text-center px-5">
                    <img
                      src="assets/media/illustrations/sketchy-1/1.png"
                      alt=""
                      class="w-100 h-200px h-sm-325px"
                    />
                  </div>
                  <!--end::Illustration-->
                </div>
                <!--end::Empty-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Search-->
          </div>
          <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Users Search-->
    <!--begin::Modal - Invite Friends-->
    <div
      class="modal fade"
      id="kt_modal_invite_friends"
      tabindex="-1"
      aria-hidden="true"
    >
      <!--begin::Modal dialog-->
      <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
          <!--begin::Modal header-->
          <div class="modal-header pb-0 border-0 justify-content-end">
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-color-primary"
              data-bs-dismiss="modal"
            >
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
              <span class="svg-icon svg-icon-1">
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                    opacity="0.5"
                    x="6"
                    y="17.3137"
                    width="16"
                    height="2"
                    rx="1"
                    transform="rotate(-45 6 17.3137)"
                    fill="currentColor"
                  />
                  <rect
                    x="7.41422"
                    y="6"
                    width="16"
                    height="2"
                    rx="1"
                    transform="rotate(45 7.41422 6)"
                    fill="currentColor"
                  />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
          </div>
          <!--begin::Modal header-->
          <!--begin::Modal body-->
          <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
            <!--begin::Heading-->
            <div class="text-center mb-13">
              <!--begin::Title-->
              <h1 class="mb-3">Invite a Friend</h1>
              <!--end::Title-->
              <!--begin::Description-->
              <div class="text-muted fw-semibold fs-5">
                If you need more info, please check out
                <a href="#" class="link-primary fw-bold">FAQ Page</a>.
              </div>
              <!--end::Description-->
            </div>
            <!--end::Heading-->
            <!--begin::Google Contacts Invite-->
            <div class="btn btn-light-primary fw-bold w-100 mb-8">
              <img
                alt="Logo"
                src="assets/media/svg/brand-logos/google-icon.svg"
                class="h-20px me-3"
              />Invite Gmail Contacts
            </div>
            <!--end::Google Contacts Invite-->
            <!--begin::Separator-->
            <div class="separator d-flex flex-center mb-8">
              <span
                class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3"
                >or</span
              >
            </div>
            <!--end::Separator-->
            <!--begin::Textarea-->
            <textarea
              class="form-control form-control-solid mb-8"
              rows="3"
              placeholder="Type or paste emails here"
            ></textarea>
            <!--end::Textarea-->
            <!--begin::Users-->
            <div class="mb-10">
              <!--begin::Heading-->
              <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
              <!--end::Heading-->
              <!--begin::List-->
              <div class="mh-300px scroll-y me-n7 pe-7">
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Emma Smith</a
                      >
                      <div class="fw-semibold text-muted">smith@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2" selected="selected">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-semibold"
                        >M</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Melody Macy</a
                      >
                      <div class="fw-semibold text-muted">
                        melody@altbox.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1" selected="selected">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Max Smith</a
                      >
                      <div class="fw-semibold text-muted">max@kt.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected="selected">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Sean Bean</a
                      >
                      <div class="fw-semibold text-muted">sean@dellito.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2" selected="selected">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Brian Cox</a
                      >
                      <div class="fw-semibold text-muted">
                        brian@exchange.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected="selected">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-warning text-warning fw-semibold"
                        >C</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Mikaela Collins</a
                      >
                      <div class="fw-semibold text-muted">mik@pex.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2" selected="selected">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Francis Mitcham</a
                      >
                      <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected="selected">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-semibold"
                        >O</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Olivia Wild</a
                      >
                      <div class="fw-semibold text-muted">
                        olivia@corpmail.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2" selected="selected">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-primary text-primary fw-semibold"
                        >N</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Neil Owen</a
                      >
                      <div class="fw-semibold text-muted">
                        owen.neil@gmail.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1" selected="selected">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Dan Wilson</a
                      >
                      <div class="fw-semibold text-muted">
                        dam@consilting.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected="selected">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-semibold"
                        >E</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Emma Bold</a
                      >
                      <div class="fw-semibold text-muted">emma@intenso.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2" selected="selected">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Ana Crown</a
                      >
                      <div class="fw-semibold text-muted">
                        ana.cf@limtel.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1" selected="selected">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-info text-info fw-semibold"
                        >A</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Robert Doe</a
                      >
                      <div class="fw-semibold text-muted">robert@benko.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected="selected">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >John Miller</a
                      >
                      <div class="fw-semibold text-muted">
                        miller@mapple.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected="selected">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-success text-success fw-semibold"
                        >L</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Lucy Kunic</a
                      >
                      <div class="fw-semibold text-muted">
                        lucy.m@fentech.com
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2" selected="selected">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed"
                >
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Ethan Wilder</a
                      >
                      <div class="fw-semibold text-muted">
                        ethan@loop.com.au
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1" selected="selected">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div class="d-flex flex-stack py-4">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2"
                        >Sean Bean</a
                      >
                      <div class="fw-semibold text-muted">sean@dellito.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true"
                    >
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected="selected">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
              </div>
              <!--end::List-->
            </div>
            <!--end::Users-->
            <!--begin::Notice-->
            <div class="d-flex flex-stack">
              <!--begin::Label-->
              <div class="me-5 fw-semibold">
                <label class="fs-6">Adding Users by Team Members</label>
                <div class="fs-7 text-muted">
                  If you need more info, please check budget planning
                </div>
              </div>
              <!--end::Label-->
              <!--begin::Switch-->
              <label
                class="form-check form-switch form-check-custom form-check-solid"
              >
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="1"
                  checked="checked"
                />
                <span class="form-check-label fw-semibold text-muted"
                  >Allowed</span
                >
              </label>
              <!--end::Switch-->
            </div>
            <!--end::Notice-->
          </div>
          <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Invite Friend-->
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>
      var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="assets/js/custom/graph/supplierPerformance-bar.js"></script>
    <script src="assets/js/custom/graph/supplierPerformance-line.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>
>>>>>>> Stashed changes
