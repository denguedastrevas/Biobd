<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>BIOBD</title>

    <meta name="description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <!-- Page Container -->
    <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header


        Footer

            ''                                          Static Footer if no class is added
            'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-dark'                          Dark themed Header
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed page-header-dark main-content-narrow">
        <!-- Side Overlay-->
        <aside id="side-overlay">
            <!-- Side Header -->
            <div class="bg-image" style="background-image: url('assets/media/various/bg_side_overlay_header.jpg');">
                <div class="bg-primary-op">
                    <div class="content-header">
                        <!-- User Avatar -->
                        <a class="img-link mr-1" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                        </a>
                        <!-- END User Avatar -->

                        <!-- User Info -->
                        <div class="ml-2">
                            <a class="text-white font-w600" href="javascript:void(0)">John Doe</a>
                            <div class="text-white-75 font-size-sm">Administrator</div>
                        </div>
                        <!-- END User Info -->

                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="ml-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times-circle"></i>
                        </a>
                        <!-- END Close Side Overlay -->
                    </div>
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="content-side">
                <!-- Side Overlay Tabs -->
                <div class="block block-transparent pull-x pull-t">
                    <ul class="nav nav-tabs nav-tabs-block nav-justified" data-toggle="tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#so-settings">
                                <i class="fa fa-fw fa-cog"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#so-people">
                                <i class="far fa-fw fa-user-circle"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#so-profile">
                                <i class="far fa-fw fa-edit"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="block-content tab-content overflow-hidden">
                        <!-- Settings Tab -->
                        <div class="tab-pane pull-x fade fade-up show active" id="so-settings" role="tabpanel">
                            <div class="block mb-0">
                                <!-- Color Themes -->
                                <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Color Themes</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="row gutters-tiny text-center">
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-default" data-toggle="theme" data-theme="default" href="#">
                                                    Default
                                                </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xwork" data-toggle="theme" data-theme="assets/css/themes/xwork.min.css" href="#">
                                                    xWork
                                                </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xmodern" data-toggle="theme" data-theme="assets/css/themes/xmodern.min.css" href="#">
                                                    xModern
                                                </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xeco" data-toggle="theme" data-theme="assets/css/themes/xeco.min.css" href="#">
                                                    xEco
                                                </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xsmooth" data-toggle="theme" data-theme="assets/css/themes/xsmooth.min.css" href="#">
                                                    xSmooth
                                                </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xinspire" data-toggle="theme" data-theme="assets/css/themes/xinspire.min.css" href="#">
                                                    xInspire
                                                </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xdream" data-toggle="theme" data-theme="assets/css/themes/xdream.min.css" href="#">
                                                    xDream
                                                </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xpro" data-toggle="theme" data-theme="assets/css/themes/xpro.min.css" href="#">
                                                    xPro
                                                </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xplay" data-toggle="theme" data-theme="assets/css/themes/xplay.min.css" href="#">
                                                    xPlay
                                                </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Color Themes -->

                                <!-- Sidebar -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Sidebar</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="row gutters-tiny text-center">
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Sidebar -->

                                <!-- Header -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Header</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="row gutters-tiny text-center">
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">Light</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Header -->

                                <!-- Content -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Content</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="row gutters-tiny text-center">
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Content -->
                            </div>
                        </div>
                        <!-- END Settings Tab -->

                        <!-- People -->
                        <div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel">
                            <div class="block mb-0">
                                <!-- Section -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Section</span>
                                </div>
                                <div class="block-content">
                                    <p>
                                        ...
                                    </p>
                                </div>
                                <!-- Section -->
                            </div>
                        </div>
                        <!-- END People -->

                        <!-- Profile -->
                        <div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel">
                            <div class="block mb-0">
                                <!-- Section -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Section</span>
                                </div>
                                <div class="block-content">
                                    <p>
                                        ...
                                    </p>
                                </div>
                                <!-- Section -->
                            </div>
                        </div>
                        <!-- END Profile -->
                    </div>
                </div>
                <!-- END Side Overlay Tabs -->
            </div>
            <!-- END Side Content -->
        </aside>
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="bg-header-dark">
                <div class="content-header bg-white-10">
                    <!-- Logo -->
                    <a class="link-fx font-w600 font-size-lg text-white" href="">
                        <span class="smini-visible">
                                <span class="text-white-75">D</span><span class="text-white">x</span>
                        </span>
                        <!--
                        <span class="smini-hidden">
                                <span class="text-white">Dash</span><span class="text-white-75">mix</span> <span class="text-white font-size-base font-w400">2.3</span>
                        </span> -->
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <!-- Toggle Sidebar Style -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                        <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" data-toggle="layout" data-action="sidebar_style_toggle" href="javascript:void(0)">
                            <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                        </a>
                        <!-- END Toggle Sidebar Style -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-times-circle"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="banco.php">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Bancos</span>
                            <!--<span class="nav-main-link-badge badge badge-pill badge-success">3</span>-->
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="loanList.php">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Acessos</span>
                            <!--<span class="nav-main-link-badge badge badge-pill badge-success">3</span>-->
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="loanList.php">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Duvidas</span>
                            <!--<span class="nav-main-link-badge badge badge-pill badge-success">3</span>-->
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="qmsomos.php">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Quem somos</span>
                            <!--<span class="nav-main-link-badge badge badge-pill badge-success">3</span>-->
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="loanList.php">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Upload</span>
                            <!--<span class="nav-main-link-badge badge badge-pill badge-success">3</span>-->
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="up.php">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Suporte</span>
                            <!--<span class="nav-main-link-badge badge badge-pill badge-success">3</span>-->
                        </a>
                    </li>
                    
                    <!--
                    <li class="nav-main-heading">Heading</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                            <span class="nav-main-link-name">Dropdown</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="javascript:void(0)">
                                    <span class="nav-main-link-name">Link #1</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="javascript:void(0)">
                                    <span class="nav-main-link-name">Link #2</span>
                                </a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
            <!-- END Side Navigation -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div>
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-dual mr-1" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Open Search Section -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-dual" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-fw fa-search"></i> <span class="ml-1 d-none d-sm-inline-block">Search</span>
                        </button>
                    <!-- END Open Search Section -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div>
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-fw fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">Admin</span>
                                <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
                            </button>
                        <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                            <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                                User Options
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-user mr-1"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span><i class="far fa-fw fa-envelope mr-1"></i> Inbox</span>
                                    <span class="badge badge-primary badge-pill">3</span>
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-file-alt mr-1"></i> Invoices
                                </a>
                                <div role="separator" class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="far fa-fw fa-building mr-1"></i> Settings
                                </a>
                                <!-- END Side Overlay -->

                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> Sign Out
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->

                    <!-- Notifications Dropdown -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-fw fa-bell"></i>
                                <span class="badge badge-secondary badge-pill">5</span>
                            </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                                Notifications
                            </div>
                            <ul class="nav-items my-2">
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mx-3">
                                            <i class="fa fa-fw fa-check-circle text-success"></i>
                                        </div>
                                        <div class="media-body font-size-sm pr-2">
                                            <div class="font-w600">App was updated to v5.6!</div>
                                            <div class="text-muted font-italic">3 min ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mx-3">
                                            <i class="fa fa-fw fa-user-plus text-info"></i>
                                        </div>
                                        <div class="media-body font-size-sm pr-2">
                                            <div class="font-w600">New Subscriber was added! You now have 2580!</div>
                                            <div class="text-muted font-italic">10 min ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mx-3">
                                            <i class="fa fa-fw fa-times-circle text-danger"></i>
                                        </div>
                                        <div class="media-body font-size-sm pr-2">
                                            <div class="font-w600">Server backup failed to complete!</div>
                                            <div class="text-muted font-italic">30 min ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mx-3">
                                            <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                                        </div>
                                        <div class="media-body font-size-sm pr-2">
                                            <div class="font-w600">You are running out of space. Please consider upgrading your plan.</div>
                                            <div class="text-muted font-italic">1 hour ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mx-3">
                                            <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                        </div>
                                        <div class="media-body font-size-sm pr-2">
                                            <div class="font-w600">New Sale! + $30</div>
                                            <div class="text-muted font-italic">2 hours ago</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="p-2 border-top">
                                <a class="btn btn-light btn-block text-center" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-eye mr-1"></i> View All
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Notifications Dropdown -->

                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-dual" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="far fa-fw fa-list-alt"></i>
                        </button>
                    <!-- END Toggle Side Overlay -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-primary">
                <div class="content-header">
                    <form class="w-100" method="POST">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                            </div>
                            <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary-darker">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">BIOBD</h1>
                        <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-alt">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Dashboard</a>
                                </li>
                                <!--<li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Account</a>
                                </li>-->
                                <li class="breadcrumb-item active" aria-current="page">Current</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            <div class="content">
                <!-- Your Block -->
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Bem vindo ao BioBD <small></small>
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                                    <i class="si si-pin"></i>
                                </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                    <i class="si si-close"></i>
                                </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>
                       
                        </p>
                    </div>
                </div>
                <!-- END Your Block -->
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-0">
                <div class="row font-size-sm">
                    <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-right">
                       
                    </div>
                    <!--
                    <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                        <a class="font-w600" href="https://1.envato.market/r6y" target="_blank">Dashmix 2.3</a> &copy; <span data-toggle="year-copy"></span>
                    </div> -->
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!-- Dashmix JS -->
    <script src="assets/js/dashmix.core.min.js"></script>
    <script src="assets/js/dashmix.app.min.js"></script>
</body>

</html>