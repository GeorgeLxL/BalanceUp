
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 10 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Balance UP | @yield('title')</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{asset('others/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('others/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('others/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('others/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="../others/assets/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body"  class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
	<div id="home">
   <!--begin::Main-->
   <!--begin::Header Mobile-->
   <div id="kt_header_mobile" class="header-mobile">
      <!--begin::Logo-->
      <a href="/">
         <img alt="Logo" src="{{asset('others/assets/media/logos/logo_black.png')}}" class="logo-default max-h-30px" />
      </a>
      <!--end::Logo-->
      <!--begin::Toolbar-->
      <div class="d-flex align-items-center">
         <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
            <span></span>
         </button>
         <button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
            <span class="svg-icon svg-icon-xl">
               <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                  height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                     <polygon points="0 0 24 0 24 24 0 24" />
                     <path
                        d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                     <path
                        d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                        fill="#000000" fill-rule="nonzero" />
                  </g>
               </svg>
               <!--end::Svg Icon-->
            </span>
         </button>
      </div>
      <!--end::Toolbar-->
   </div>
   <!--end::Header Mobile-->
   <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="d-flex flex-row flex-column-fluid page">
         <!--begin::Wrapper-->
         <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header header-fixed">
               <!--begin::Container-->
               <div class="container d-flex align-items-stretch justify-content-between">
                  <!--begin::Left-->
                  <div class="d-flex align-items-stretch mr-3">
                     <!--begin::Header Logo-->
                     <div class="header-logo">
                        <a href="/">
                           <img alt="Logo" src="{{asset('others/assets/media/logos/logo_black.png')}}"
                              class="logo-default max-h-40px" />
                           <img alt="Logo" src="{{asset('others/assets/media/logos/logo_black.png')}}"
                              class="logo-sticky max-h-40px" />
                        </a>
                     </div>
                     <!--end::Header Logo-->
                     <!--begin::Header Menu Wrapper-->
                     <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <!--begin::Header Menu-->
                        <div id="kt_header_menu"
                           class="header-menu header-menu-right header-menu-mobile header-menu-layout-default">
                           <!--begin::Header Nav-->

                           <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                     </div>
                     <!--end::Header Menu Wrapper-->
                  </div>
                  <!--end::Left-->
                  <!--begin::Topbar-->
                  <div class="topbar">
                     <div
                        class="topbar-item header-menu header-menu-right header-menu-mobile header-menu-layout-default">
                        <ul class="menu-nav">
                           <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here"
                              data-menu-toggle="click" aria-haspopup="true">
                              <a href="javascript:;" class="menu-link menu-toggle">
                                 <span class="menu-text"></span>
                                 <i class="menu-arrow"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div
                        class="topbar-item header-menu header-menu-right header-menu-mobile header-menu-layout-default">
                        <ul class="menu-nav">
                           <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
                              aria-haspopup="true">
                              <a href="javascript:;" class="menu-link menu-toggle">
                                 <span class="menu-text"></span>
                                 <span class="menu-desc"></span>
                                 <i class="menu-arrow"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!--end::Topbar-->
               </div>
               <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
               <!--begin::Subheader-->
               <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
                  <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                     <!--begin::Info-->
                     <div class="d-flex align-items-center flex-wrap mr-1">
                        <!--begin::Heading-->
                        <div class="d-flex flex-column">
                           <!--begin::Breadcrumb-->
                           <div class="d-flex align-items-center font-weight-bold my-2">
                           
                           </div>
                           <!--end::Breadcrumb-->
                        </div>
                        <!--end::Heading-->
                     </div>
                     <!--end::Info-->
                  </div>
               </div>
               <!--end::Subheader-->
               <!--begin::Entry-->
               <div class="d-flex flex-column-fluid">
					@yield('content')
			   </div>
               <!--end::Content-->
               <!--begin::Footer-->
               <div class="footer bg-white py-4 d-flex flex-lg-column" style="position:fixed; bottom: 0px; width: 100vw;" id="kt_footer">
                  <!--begin::Container-->
                  <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                     <!--begin::Copyright-->
                     <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">Copyright &copy 2020 </span>
                        <a href="http://keenthemes.com/metronic" target="_blank"
                           class="text-dark-75 text-hover-primary">Company name</a>
                     </div>
                     <!--end::Copyright-->
                     <!--end::Container-->
                  </div>
                  <!--end::Footer-->
               </div>
               <!--end::Wrapper-->
            </div>
            <!--end::Page-->
         </div>
         <!--end::Main-->
      </div>
	
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('others/assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('others/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
		<script src="{{asset('others/assets/js/scripts.bundle.js')}}"></script>
		
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{asset('others/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('others/assets/js/pages/widgets.js')}}"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>