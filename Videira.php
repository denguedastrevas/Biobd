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
                        <a class="nav-main-link active" href="loanList.php">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                            <!--<span class="nav-main-link-badge badge badge-pill badge-success">3</span>-->
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="loanList.php">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Loans</span>
                            <!--<span class="nav-main-link-badge badge badge-pill badge-success">3</span>-->
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="loanList.php">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Borrowers</span>
                            <!--<span class="nav-main-link-badge badge badge-pill badge-success">3</span>-->
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="loanList.php">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Transactions</span>
                            <!--<span class="nav-main-link-badge badge badge-pill badge-success">3</span>-->
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="loanList.php">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Activity</span>
                            <!--<span class="nav-main-link-badge badge badge-pill badge-success">3</span>-->
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="up.php">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Upload</span>
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
                        <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Transcriptoma</h1>
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
                        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>geneID</th>
                <th>Base mean</th>
                <th>Log2(fc)</th>
                <th>stdErr</th>
                <th>Wald-Statse</th>
                <th>P-value</th>
                <th>P-adj</th>
            </tr>
            >VIT_01s0010g03900.t01 cds chromosome:IGGP_12x:1:21368964:21386383:-1 gene:VIT_01s0010g03900 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGGAGAGGTAGGGTTGAGTTGAAGAGGATTGAGAACAAGATCAACAGGCAAGTGACC
TTCGCTAAGAGAAGAAATGGCCTTCTCAAGAAGGCGTACGAACTTTCGGTGCTCTGCGAC
GCCGAGGTTGCTCTCATCATCTTCTCCAATAGAGGAAAACTCTACGAGTTCTGCAGTAGC
TCGAGCATGCTCAAAACCCTTGAGAGGTATCAGAAGTGCAATTATGGAGCACCGGAGACA
AATGTATCCACAAGGGAGGCCCTGGAGTTAAGTAGTCAGCAGGAATATTTGAAACTTAAA
GCACGTTATGAAGCCCTACAACGATCCCAGAGGAATCTTCTTGGGGAGGATCTTGGCCCT
TTGAGCACGAAGGAACTTGAGTCACTGGAAAGGCAGCTTGATGTATCACTGAAGCAGATC
AGGTCAACGCGAACACAGTACATGCTGGATCAACTCACCGATCTTCAGAGAAAGGAACAC
ATGCTCAATGAAGCAAACAAGACCCTGAAGCAAAGGTTGTTGGAAGGAACACAGGTAAAC
CAGCTCCAGTGGAATCCAAATGCACAAGACGTGGGCTATGGTCGGCAACAAGCTCAGCCT
CAGGGCGATGGCTTCTTCCATCCCTTAGAGTGTGAGCCCACGTTACAAATCGGCCCGATC
CAATAA
>VIT_19s0085g00150.t01 cds chromosome:IGGP_12x:19:22499713:22500162:-1 gene:VIT_19s0085g00150 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGTGCTTGAATCGTTAGACCTCTCTTCGAACAAGCTCAGTGGGAGAATTCCAAGGGAG
TTGACAAGTCTAACGTTTCTTGAAGTCCTAAATCTTTCAAAAAATCATCTCACTGGAGTC
ATTCCTCGAGGCAACCAATTTGATTCATTCACAAATAATTCATATAGTGGGAATATAGGA
TTATGTGGATTTCCCTTATCTAAGAAATGTGTAGTTGATGAAGCACCACAACCTCCCAAA
GAAGAGGAGGTGGAATCTGATACTGGATTTGATTGGAAAGTCATATTGATGGGGTATGGC
TGTGGACTAGTAGTTGGATTGTCTATTGGGTGCCTCGTCTTCTTAACAAGAAAGCCTAAA
TGGTTTGTAAGAATGATTGAAGGAGATAGACACAAGAAGGTTAGAAAGTCAACAAGGAGC
ACTTGTAGGCATGGAGCAAGAAGAAGTTAG
>VIT_01s0010g00120.t01 cds chromosome:IGGP_12x:1:14497779:14497910:-1 gene:VIT_01s0010g00120 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTCAATGGAATTTTCACATCAGATGAGAGGGATTGCTAAGTCGACAAGAGTGTGCATT
CAAGTAGAGTGGCAGCTGCAATCACTAACCTTACAATGCAGTACTAGTGACACCCTGGGC
CCACTCCTATAG
>VIT_17s0000g04140.t01 cds chromosome:IGGP_12x:17:4232779:4244926:-1 gene:VIT_17s0000g04140 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAGCCGCTCTCCTTCATTTTCTTTGAAAACGGAATCCAACCCGAAGCTAGACCTGAAA
TCATTGAGGCAGTGGGTTGTTGCATTTTGCATTATCAAGTTTGATCTTGAGCAGGGTCAG
CTAATTGAAGAGTGTTACCCACCTGGCTGTCTTACACAAGATGAGGAGCTTGAAGTTGCG
TTTAGTTCATTCCCAGACTCTGTTTCCCAGCACCAGAATCGCTCAAGCATCCATGATTGT
ATCTTCTTTTTCCGGTTTCAAAGAAGGGAAAATTCTCAACGGGGGAAAGTAATGAAAAAT
ACCGGTGACTGTAAAGGTGCGAAATATTTGTATGGTTATGTGTTTAATAGGCAGAGACAT
GATGAGAGACTAAAGCGAGGTGGGGATCAAAGATCCGTAGTGATATTGTCTCACAATCCT
TACTCCAGTGTGTTTAGACCTTTGTTACAAATCATGGGTCCTCTGTATTTTGACATTGGA
AAGAAAGCTCTAGAGCACATAGCTTCTTATGTTTCAATATGGCCTGCTCCAATACCTGGT
AAGTTAATGGAACTTCCTATTGGTAATGCAATGCTTAAGGTGAACTTGCCGCCTGCTCAT
AGCTTGCCCTCAGACAGTGGAGTGCTGTTTGAAGAGTCTATCTCTTCAATGGCTCCTTTT
CTTCCTACGAATCAATCAGTTCCACAGGGTCTTTTCCATGATTCAGATCTTTTTGGTATA
TTCAGGGGCCTACTCTTGCAACTTTGGGTGTTGTGGGAGTTGTTACTTATTGGTGAACCT
ATTCTTATTATAGCACCAACACCGCCCCAGTGTTGTGAGGCTGTTGCTGGTCTTGTTAGC
CTGGTTGCACCACTGCTTTGTAGTGTTGACTTCAGGCCTTATTTCACCATTCATGACCCA
GAATTTGCCCATTTAAACTCTCTTCAAGAGGGAGATATCTTTCCTCCAATGGTTTTGGGT
GTGACAAACCTCTTTTTCCTCAAAGCTCTTCGTATTGTCCCCCATGTAGTTTCAGTTGGA
AGCCCTTCTCCTAATTCAAACCGGCCTGTCCTTGCTGCTAGATCCTCTACTGGGAGATTT
TCTGCTAGGCCAGAAGGCTTTGGTCTTCAACAGCTTTCGCTAAGGAAGTTTTCCCCCTCT
AATTTGTTGAGTGCTGTTAAGTTGAGGAGAGAGGGTCCCCTTTGTCTCATGACAGAACAT
AAGGAAGCCATTTGGACTACCTATGCTGCAACAACCAAGCCAGACACTTCTATTTTGAAT
AGGCTTATTGATGCAGGGATGTCACCAAGGGTTGAGGAGTCAATGTCGGTTGTTAATAAC
GAGATATTACGTCGCCATTTTTTGGAGCTTACTACAAACTTTTTGGCCCCTTTTGGACCA
TATTTTAGAGTTATCACTCCTTCTGAAGGATCTTCTCCATTTGTTGATCCTCCTTCTCTT
ACTCCTTTCAATGCCGATGAATTTCTTGGAAGCTTATCGGCAAGAGGCCCAGGGAAGTTT
TTATCAAAGCGGATGAGATCTAACTGGCTGGACCTGTATAGGCGATTTTTGAGGGGCCAC
AACTTCATGCCATGGTTTCAAAGAAGGCGTGCTGTTGCCGAACAAGAACAACATAGACTA
TGGAGGCAGGCGAGAATGAATACTGACATACAACATTTTATATCTAAGATGTCTGAACTG
GAAATTGTCGATTCTTTCAATGCCATTGAGAGACATCTTCTTGGAGAAATAAAGCTGCTG
CAATCAGAAAGGGGTAATCCAGACTCTGCAGCAACTTTCCAGAAACTGAAGGGTGATCTA
CAGGCAGTATTTAATTTGCTTCCCAAGGACATGCAGCAGCTTCTGCTTCTCAACCCACAA
AAGGCAGCTCTTCTACAAGGAAGTCTTGAAGTGATGGAACTTCCCCCCGGGCACCAAACC
ACAGAAGTTGGGGTTGTTGCTTCCGCTTCTCCCAGATAA
>VIT_12s0035g00810.t01 cds chromosome:IGGP_12x:12:20398372:20405511:-1 gene:VIT_12s0035g00810 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAAGATCTGAAGATGGCGATGAACGAACACATGGACTTAATGGCGGATCTCGTACAG
AAATTCACTGCGGAGCTCCGTACCGGATTCCAGCCTGCTTACGATAATTTCATTGGTTTC
TTCCACGCTATCGATTGGAAGGAGCCATGGTTAATTGGCTTGTTGTCGTTCCACTTTGCC
CTGTTGCTAGTAACTTTCTTATCAAGGAAGCATATCAATTTCCAAATGTGCTTGTTCCTT
TTGGCATTGAGCGGTGTTTATCTTGCTGAGACAATCAATAAATTTCTGGGGAGCAACTGG
AAAAAATTTGCAGGCCAGAATTATTTTGATCCACGAGGCCTTTTTCTTTCAGTGCTCTGG
TCTGGACCCCTTCTGCTGATTGCTATCATAATTTTGTTGAATACCCTCTTCTCTTTATGC
CGACTACTAATTAAGTGGAAAAGAGCCGAGCTCAGGCATCGGGCACTACTTGCTAGAAAC
AAGCAGGATTAG
>VIT_11s0118g00060.t01 cds chromosome:IGGP_12x:11:5580210:5582473:-1 gene:VIT_11s0118g00060 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAGTCCTTTGGAGAGAATTGAACGTGGTCTGGCAAGTGCACGAGCGGCAATACGTGAA
GCAGTTCGTTCAAGCAATTATACTTCACAAAAGAAAGAAAATTTCATCCCTAGAGGAGCT
GTTTACAGAAATCCATACGCATTTCATCAGAGTCACATAGAAATGGAGAAGAGATTCAAG
ATATGGACCTACAAGGAGGGAGACCAACCCCTAGTGCATGGTGGGCCAAAAAATAGCATC
TATGGCATTGAAGGGCAATTTATGGATGAGATGGAAAGTGGAGACAGCCACTTCATGGCG
GGTCATCCTGATGTGGCTCATGTCTTTTACATCCCAATAAGTGTAACTCGCATTGCTCAC
TATATCTACTCTCCTCCTGTTGACTACTCTGGTCACATGCTTCAACGATTGGTCACAGAC
TACATCTACGTTGTTTCAAATAAATATCCATATTGGAATAGAAGTAATGGAGCTGACCAT
TTCCTAGTCTCTTGCCATGATTGGGCACCAGAGATTTCGATTGTAACCCCTGACCTCTAC
AAGCATTTCATCAGAGTCCTTTGCAATGCCAACACCTCCGAAAGGTTCCAGCCCATCAGA
GACATCTCTTTGCCAGAAGTCAACATACCCAAAGGCAAGCTCGGCCCACCTCACCTCGAC
AAACCCCCTAACCAGCGTCACATCCTCGCCTTCTTCTCCGGCCGTGAATCCGGCTACATG
CGAACCCTCCTGTTCAGGTCCTGGAAAGAAAATGATGACGAAGTCCAGGTGTACGAGCAC
CTTCCCAGCAATCGAGACTACGCTAAATCAATGGTTGACAGCAAGTTTTGCCTGTGTCCA
AGTGGATGGGAAGTTGCCAGCCCCAGAGTAGTGGAAGCAATCGCTGCTGGGTGTGTGCCT
GTAATCATCTGCGATTACTATGTGCTGCCGTTTAGTGAAGTTCTTGATTGGAGCAAGTTT
TCCATAAATATCACTTCGGACAAGATACCGGAAATTAAGAAGATATTGAAAGCGGTTCCG
AATGAGAGGTATTTGAGGATGCAAAAGAGGGTGAAGCAAGTGCAGAGGCATTTCGTGATA
AACCGGCCGGCGCAGCCCTACGATATGCTTCATATGATTCTTCATTCGGTGTGGCTAAGG
CGCCTTAATGTTAGGCTGCGGTCTTGA
>VIT_00s1458g00010.t01 cds chromosome:IGGP_12x:Un:39225125:39226050:1 gene:VIT_00s1458g00010 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAACCCTAAAATTTCAGATTTTGGCATGGCAAGATTATTTGTAGTAGATCAAACCCAA
GGCAATACCAGTAGAATTGTAGGAACCTATGGCTATATGGCTCCTGAATATGCCATGCAT
GGACACTTTTCAGTTAAGACAGATGTTTATAGCTTTGGTGTTCTAGTTCTGGAAATTGTG
AGCGGCCAAAGGAACAATTGTATCCATATCGGCGAGAATGTTGAGGATCTCCTGAGCTAT
GCCTGGAAAAATTGGAGGGAGGGGAAAGCAACTAATGTGATGGATCCAACAATGGGGATT
GGCTCAACAAGTGAAATAATGAGATGCATCCACATTGGGCTCCTATGCGTGCAAGAAAAT
GAAGCTGACAGACCAACCATGGCTTCTATTGTTCTCATGCTTAATAGCTACTCTTTGAGT
CTCCCACTACCTTCACAACCTGCATTCTTTATGAATAGTGGCATGAATGGGGACTTGCCT
CTTGAACTAGAGGATAATTCAAGCGTGACCAAGTCAGATCATTCTCAAAGTAAATCTGCC
AAGTTTTCAGCAAATGAGGCTTCAATCACTGATCTGTATCCTCGATAA
>VIT_05s0077g02000.t01 cds chromosome:IGGP_12x:5:1552762:1558886:1 gene:VIT_05s0077g02000 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAGCGTCCCTTCCTTCCTAGTAAACCCCTTGCAAAAGCCAATCCAGATCTTTCGTGCT
CTCAATGGAGATGACTTCTACATTTGCAGATTTCAGGAGCCTGGAATGGAAGCTGCGCTT
GCTGAGATTGGTCCTGCCAGAGTTTTGAAATCTGCTCTCACAAGCCGCAAAACTGGTCCA
CCTCGTTTACCAGAAGGACAGCAAGCCTTTGCAGGCACCCCAGATGTCTTGCCCTCCTGG
CTGTCTGAAGAAGAAGTTAATTATTATGTTTCCAAGTATGAGAGGACAGGGTTCACTGGA
GGCTTGAACTACTACCGAAATATGGACCTAAACTGGGAACTCACAGCAGCCTGGGCTGGG
AGTCAAATCAAAGTGCCAAGTAAGTTTGTTGTGGGCCACCTGGACCTTACATATAACACC
ATGGGCTTCAAGGAATTTATGAAGAATGATGAGTTCAGGAAACATGTGCCATTTTTGGGG
GAAATAGTTGTGATGGAAGGAGTGGGCCACTTTCTGCATGAAGAAAAGCCAGATGAGGTC
AACCAACACATCCATGAATTCTTTCAGAAGTTCTGA
>VIT_00s0174g00060.t01 cds chromosome:IGGP_12x:Un:6854600:6856220:1 gene:VIT_00s0174g00060 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCCATAAAAGTGCTAAGCAAGAAAATAATGGGCACTCGTGTGGTTAGTGGAAGTGTG
TGTGTTGTTACCGGTTTCGTTACAAGGAATAATTGGTTCAATGCTACAAGCAACTTGGGA
TTTCAACGGAGCTTTGTGACTATTACACTAAGTGACATCAAGAGTGTCGAGAAGAAAAGT
GTTGTAGTCCAGATGGAGAAGACAACTTCTCTCTCAGTAGGCATGATGCAGAAGAAGTCT
AGAGGCTTGATGAGAGGCATGTTTCTGAATTGGGTGATGGATTTTGATGATCGTTGTCAG
AAGCTTATCGATGGTGGTCGCAGTGAGTTGGAAACTAAAAGTGTAGGAGAAGTAGAAGAT
GAAGATGAAAAAGGACATGAATATGGGTATAAGGTTGTTGAGTGGACAGAGGATGATCAG
AAGAATCTCACAGATCTTGGGACTTCTGAGATAGAAAGGAACAAGGCAACCACTTCGAAA
TAG
>VIT_01s0137g00780.t01 cds chromosome:IGGP_12x:1:7278734:7280232:1 gene:VIT_01s0137g00780 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGGCTCTCCAATTTCCACAGCCCAGCTGAAGGTGTGCTTCCTGTGCTAGTAATGAAC
ACGGTTATGTCAGTGGCTCTGTTGAAGAATATGGTGAGATCTGTGCTTCAAGTGATGGGT
GCTAATGGGAGCTCTCCCAATTTAGAGGAAGACCCATCAAATGAAGAGTACTCACCAATG
TCAGAGAATGCCAAGGAGAGAAGAGTATCAGTAACCCAGTTCAAGTCTTTGAGTCACAGC
AGAATGCCTGCAGTGCAGGCAGTAGTGGCACTGGCACTGGATGGTGTTCTTCAATGGATT
GTTGTGTGTGTCTGTGTAGGTTTGAAGCCGAGGAGGAGGTTAGTGAGTTGTCTTGCAAGC
ATTTCTTCCACAAGGGTTGCTGGGAAAAGTGGTTTGATAACAAGCATAGTAGCTGCCCTC
TATGTAGGGAAAGAGGGTTATCATTACTTACTGGAGCTGCAAATCATAAGTGGACAAATC
AGATCAGGTCATGATATCCCAGTATGTGGGTCTGATTTGGTTGGGGGCCACATCCAATGT
TGTCCTCGATCTCTAATCAGTGCCAAATCTGCCGAAACTAGGTATAGGAGACGAGGATGT
GTGTTGGCTTGCACCATACATAATTTTGCTGCTTCTACCGTGGAGGGGACTTCTTCTGAC
TCCCAGGCCAATACCCGCAACTTGGCCCACGGATGGGAGCTTCAAGAGGGCAGGAAAGGT
CACTATCAGTAA
>VIT_17s0000g09570.t01 cds chromosome:IGGP_12x:17:11284888:11286905:1 gene:VIT_17s0000g09570 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGAAGCTTTCTAGATCTTCTGTACAAGGAAAACGCGTCGTTCTTTCTGCTATTTCTC
CCCTTTTTCGTCTTCATATACTTCCTCATCAAATGGCTCTATCCTACTACTCCTGCAGTC
ACCACAAAGAGGCTACCTCCTTCCCCACCAAAGCTCCCAATCATTGGAAACCTCCACCAA
CTAGGCTTGCTCCCTCACCGCTCCCTCTGGGCCTTGGCTCAGCGCCATGGCCCCATTATG
CTGCTCCATTTTGGCAAAGTTCCAGTGGTCATCGTCTCAGCTGCAGACGCTGCAAGAGAG
ATCATGAAGACCAATGATGTCATCTTTTTAAACAGACCTAAATCGAGCATCTTTGCGAAA
CTTCTCTATGATTACAAGGACGTTTCCATGGCCCCCTATGGAGAGTACTGGAGACAGATG
AGGAGTATCTGTGTACTCCACCTTCTCAGCAACAGAAGGGTTCAGTCCTTCCGAGGAGTC
CGCGAAGAAGAGACAGCCCTTCTGATGGAGAAGATCTCTTCCTCTTCTTCCTCCTCCACC
CCAATTGATTTGAGCAAAATGTTTCTGTCCCTAACAAATGATCTCATATGCAGAGTTGCC
CTAGGAAGAAAATACAGCGGAGATGAAACTGGAAGAAAATATAGAGAACTGCTGAAGGAG
TTTGTGGGGTTGCTGGGTGGCTTCGATGTTGCCGACTACATTCCATGGCTGTCATGGGTG
AACTTCATCAATGGTTTGGATGCAAAAGTGGAGAAAGTTGCTAAAGAGTTCGATAGATTT
CTTGATGAAGTGGTGAAAGAGCACGTGGAGAGAAGGAAAAGAGGTGTAGATGAGGAAGTG
AAGGATTTTGTGGACGTTTTGCTTGGCATTCAGGAGGATAATGTCACAGGCGTTGCCATA
ACTGGAGTTTGCATCAAAGCTCTTACTCTGGACATGTTTGCTGCTGGAAGTGACACTACA
TACACAGTCTTGGAGTGGGCAATGACAGAGCTCTTGAGGCACCCACAAGTCATGAGGCAA
CTTCAGAATGAGGTCAGAGGAATTGCTCAAGGCAAACTCCTCATAACTGAGGATGACTTA
GACAAAATGCAATATTTGAAGGCAGTGATCAAAGAGACTCTCAGACTACACCCTCCAGTC
CCACTACTACTTCCCAGAGAATCCACCCGGGGCGCCAAAATAATGGGCTACGACATTGAA
GTAGGGACACAAGTCATTACCAATGCATGGGCAATTGGGAGAGACCCACTGTTATGGGAT
GAGGCTGAGGAGTTTCGGCCAGAAAGGTTCTTGAATTCTTCTATAGATTTCACAGGGAAA
GACTTTGAGTTGATCCCATTTGGAGCTGGCCGGAGAGGTTGCCCGGGAACTCTGTTCGCG
GCAATGGCAATCGAGGTTGCGTTAGCAAATCTTGTTCATCAGTTTGATTGGGAAGTGGGG
GGTGGAGGTAGAAGGGAGGACTTGGATATGACTGAATGCACTGGTCTGACCATTCATAGA
AAAGTTCCACTTCTTGCAGTTGCAACTCCATGGCCTCGCTGA
>VIT_00s0286g00010.t01 cds chromosome:IGGP_12x:Un:21395739:21396014:1 gene:VIT_00s0286g00010 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTCGTCTGTGGTCTTGATGTTGAGTAGTGAAACTGCAACATTGCCATTGCCAAAGAAC
CCTGGGTTCTGCCTGGGAAGGAAACTTGTGGAAACAGATTCATCTTCAAGCAAGCAAGAA
GAAACATTCACTGTAAACCAAGTCACAGTTACAGTTATGGACGCTCGGTAA
>VIT_00s2191g00010.t01 cds chromosome:IGGP_12x:Un:41265605:41267225:-1 gene:VIT_00s2191g00010 gene_biotype:protein_coding transcript_biotype:protein_coding
AAAGGGGAACTTGTGACTTGTTCCAAAGACACAAACTCCGAGCTGTTTTTTGCGGTTTTA
GGAGGTCTCGGGCAGTTTGGGATTATAATAAGAGCAAGGATCGCTCTAAAACCGGCACCA
AAAAGAGTAAAATGGATACAGATGCTTTACGATGACTTCTCCACATTTTCTAGAGACCAA
GAACATTTGATTTCAATCAATGGACTGGACTATTTGGAAGGTTCACTCTTGATGCAAAAT
AGTTCTCCTAATAACTGGAGATCCTCTTTCTCACCCTCTGAATACCCGAGAATATCTTCA
CTAATATCCAAGAATGGCATCATCTACTGCCTTGAAGTGGTCAAGTATTACGATGAACTC
ACAAGCCATACAGTTGATGAGGAACTCCAGGAGCTGCTTAAAGGCTTGAATTTCCTTCCT
GGTTTTGTTTTCACAAAAGATGTCTCCTTAGTAGATTTTCTAAACCGAGTTCATAGCGAA
GAGCTAAATCTTCGAGCAAAAGGACTGTGGGATGTTCCTCATCCATGGCTGAATCTCTTT
GTTCCGGGATCCCGTATCTCAGACTTCAACTCAGGTGTCTTCAGGGACATTCTCCCCAAA
ATAAACCAGACCACTGGAACATTCCTCATCTACCCAGTGATCCGAAACAAGTGGGATGAT
AGGACGTCTGCAGTTATACCAGATGAAGATATATTCTACACTGTAGGATTGTTGCATTCA
AGTGGGGCTGATGACTGGGAACCCTTGGAGAATCAAAACAAAGAAATACTGAAGTTTTGT
GATAAAGCTGGTATCAAGATTAAGCGGTACCTTTCCCGCTACACAACCAAGAAAGATTGG
ATGAATCATTTCGGCCCAAAATGGAGGACTTTTGAAGACAGGAAAGCTCAGTTTGATCCA
AAAATGATATTATCACCTGGACAGCAAATTTTCAATTCCGTTTAA
>VIT_01s0127g00430.t01 cds chromosome:IGGP_12x:1:7763505:7789707:1 gene:VIT_01s0127g00430 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAGCGGCAATGAGTTCCGATTCTTTTTGTCCTGCGACATCAATCTTCCAGTTACCTTT
CGCATCGAGAGGTTGGAAGGCAATTTGCCTTCTGTCAAGTCCTCTATCTCAGAATTTGAT
TACACTACAGAGGAGAGAAGAGCTGAGCTATATGTTGAATGTGCACTATTCATTGATGGT
GCTCCATTCGGGCTTCCCACTAGAACAAGGTTGGAATCTACAGGACCATCATATTGCTGG
AATGAACTCATTACTTTGAGTACAAAATATCGCGACCTAACTGCTCACTCACAACTTGCA
TTAACAGTTTGGGATGTTTCATGTGGGAAAGATGAGGGATTGATTGGTGGGGCTACCATT
CTTCTCTTTAGCAGCAAAAAGCAACTCAAAACAGGGAAACAGAAGCTTAGGCTTTGGCCT
GGAAAAGAAGCAGATGGATCATTTCCAACAACTACTCCTGGAAAGGTCCCTAGGCATGAG
CGTGGAGAATTGGAGCGTCTAGAAAAGCTTATGAACAAGTATGAAAGGGGACAGATTCAG
CGTGTTGATTGGCTGGATCGCCTCACATTCAAAGCCATGGAGAAAATCAAGGAACGAGAA
AGCTGTAAAAATGGAAGTTCTCATTTATATCTGGTGGTTGATTTCTGCAGTTTCGAACAT
CGAGTTGTTTTTCAGGAGTCGGGAGCGAACTTTTTCTTGCCATCCCCTCCTATAGCTTCT
ACAAATGAACTTGTTATTGTGTGGGATCCAGAAGTGGGGAAAATGAATCCCTCCGAGCAC
AAGCAACTAAAGCTAGCAAGGAGTTTAGCTCGTGGAATCATTGACAGAGATCTCAAACCA
AGCAATAATGAAAGAAAGTCCATACAACGGATATTGAAATACCCCCCAACAAGGATTTTG
AGTGGAGATGAGAAGCAGCTTTTGTGGAAATTCCGTTTCTCATTGATGTCTGAGAAGAGG
GCTCTCACGAAGTTTCTCCGATGTGTTGAATGGAGTGATCTTCAGGAAGCAAAGCAGGCA
TTAGAACTGATGGGCAAGTGGGAAATGATAGATGTGTGCGATGCATTGGAGCTTCTGTCT
CCTGTTTTTGAAAGTGAAGAGGTTCGTGCATATGCTGTCAGTGTTCTTGAAAGAGCTGAT
GATGAAGAGCTTCAATGTTACTTACTTCAACTGGTTCAGGCTCTTCGTTTCGAGCGCTCT
GATAAATCTCGCCTTTGCCATTTCCTTGTGCAACGATCATTGCGCAATATCGAGTTGGCT
AGCTTTCTCCGTTGGTATGTTACCGTGGAACTTAATGATCCTGCATATGCAAAGCGTTTT
TACTGTACCTATGAGATCCTCGAAGACAATATGATGAAGTTGGGAGCTGGTGCAAATGGA
GATGAAGACGGACTTAAGTTATGGCAGAGTTTGGTGCGTCAGACAGAACTGACAGCTCAG
TTGTGTTTAATAATGAGAGATGTAAGAACTGTGCGTGGTGGAACCCAGAAGAAAATTGAA
AAGCTTAGACAGCTTCTTTCTGGCCTTCTTAGTGAGCTTACCTATTTTGAAGAGCCAATA
CGATCACCAGTTGCACCAGGTGTGCTCATCACTGGTATCGTGCCTTCAGAATCATCAATA
TTCAAGAGTGCTCTGCATCCTTTACGCCTGACTTTCCGAACAGCAAGTGGTGGAAGTTGC
AAGATCATATTTAAGAAGGGGGATGATATTCGACAAGACCAATTGGTTGTTCAAATGGTA
TCTCTCATGGATCGATTGCTTAAATTGGAGAATCTTGATCTACACTTAACTCCGTACAGA
GTACTAGCAACTGGACAGGATGAAGGCATGCTGGAATTCATACCATCCAGCTCTTTGGCG
CAGATTCTCTCTGAACATCGTAGTATTATAAGCTATCTGCAGAAGTTTCATCCGGATGAG
CATGGGCCTTTTGGAATCACAGCCACCTGTCTTGAAACATTTATAAAAAGCTGTGCTGGC
TACTCAGTTATTACATATATTCTGGGCATTGGAGACAGGCACCTAGACAACCTTCTCCTT
AGGGATGATGGGCGTCTGTTCCATGTTGATTTTGGATTTATTTTAGGCCGAGATCCTAAG
CCATTTCCACCACCAATGAAGCTTTGCAAAGAAATGGTTGAGGCTATGGGTGGAGCAGAA
AGCCCATACTATACCAGGTTCAAATCCTATTGTTGTGAAGCATACAATATCCTCCGCAAA
TCTAGTAACCTCATTTTGAATCTGTTCCATCTGATGGCGGGTTCCAATATTCCTGACATA
GCTTCTGATCCTGAGAAAGGCATTCTTAAGCTTCAAGAGAAGTTTAAGTTGGACTTGGAC
GATGAAGCCTGCATTCACTTTTTCCAGGATCTTATCAATGAGAGTGTGAGTGCATTGTTT
CCTCAAATGGTTGAAACAATTCATCGGTGGGCTCAATACTGGCGCTGA
>VIT_19s0027g01900.t01 cds chromosome:IGGP_12x:19:22201586:22201893:-1 gene:VIT_19s0027g01900 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAAATCGGTAGCGGCAAGTAGTGTTGCCGACCAAGCCAAAGCCGTCACTAGCGTGCTT
AATACAGTTAACATGGCACCCTATTTCATCATTGACATAGCAGCTATGTGTTCCAAACAA
ATTAGTTGA
>VIT_17s0053g00970.t01 cds chromosome:IGGP_12x:17:16699944:16705592:-1 gene:VIT_17s0053g00970 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGTTGCGGGAGTGATTATAAACAGCTTAAAATCCCTTTTGAGGTGGGACAAAGGTGGC
CGCTACTATATATGGCTCAGTGGACCCACTGCCATAATATCACTACGTATGCTTCCCCAC
GTTTTTCTGCCGCTCACCTCACTGCCAAACCCATTTTTGCTCACCCTCATTGCAAAACCA
TTTCTGCTTCCTTGCCAAATCCATTGTCGGTGCCAATACGAGATTAAGAACCCTACATTT
CTGCTTACTTGGGTTTCGAGCAAAGGATTATGGTTTTCAGTTCACAAAGCCAATAAAAGT
TGA
>VIT_17s0000g04960.t01 cds chromosome:IGGP_12x:17:5399673:5414553:-1 gene:VIT_17s0000g04960 gene_biotype:protein_coding transcript_biotype:protein_coding description:Hexosyltransferase [Source:UniProtKB/TrEMBL;Acc:F6GTE5]
ATGCGGAGGCGGCCGGCTGATTACCGGCGCCCGGTTCGGAGGAGGTTTTCATATTGGATC
TGGGCGCTTCTTGGGTTGTTCTCTGTTGCCGGGTTGGTTCTGTTTATGGTTCAGCATAAT
TATCACGAGGATCGGGTCGAACAGCCGACACTGGAGAAAAATGCAAAAAGTGAACACATT
TCATACAAGGGTTTAAATTTTACTGAAGAAATATTAAGTGCTACCTCATTGGCCAGGCAA
CTGGCTGAGCAAATATCACTTGCCAAGGCTTATGTCATTATCGCAAAAGAGCACAATAAC
CTTCAGCTTGCTTGGGAGTTCAGCTCAAAGATTAGAAGTTGCCAGCTTTTGCTCTCAAAA
GCTGCCATGAGAGAGGAACCCATCACATTGGAGGAAGCAGAGCCCATTATTAAAAGTCTA
TCTGCTCTAATCTTTAAGGCGCAAGATGCCCATTATGATGTTGCTACCACAATAATGACA
ATGAAATCCCATATTCAAGCCCTTGAAGAGCGTGCAAAGGCAGCGACAATTCAGAGCACA
GTGTTTGGGCAATTGACAGCTGAGGCACTACCTAAGAGCCTCCACTGCCTAAATGTTAAA
CTCACAACTGATTGGCTCAGGAAGTCATCCCTGCAAGACCTTGCAGAAGAGAAGGGAAAC
TCTCCCCGACTCGTAGACAACAATCTCTATCATTTCTGCATATTTTCAGATAATCTTCTG
GCTGTCTCTGTAGTTATCAACTCTACTATATCCAATGCTGATCATCCAAAGCAGCTTGTC
TTCCATATTGTCACAAATGGAATCAACTATGGAGCAATGCAAGCTTGGTTCCTCAGTAAC
GACTTCAAAGGGTCCACGATTGAAGTACAGAACATTGAGGAGTTCTCTTGGTTGAATGCT
TCTTATGCTCCAGTTATGAAACAGCTTCTTGATGCAGATTCACGAGAATATTATTTTAAG
GGGTCTGAAGATTTGGAGGTTGAACCAAAGTTTCGAAACCCAAAGTATATATATTTGTTG
AATCACCTACGATTTTACATCCCAGAGATTTATCCACAGCTGGAGAAAGTTGTTTTCCTT
GATGATGATGTTGTTGTCCAGAAGGATTTGACCTCACTTTTTTCATTGGATTTGCATGGA
AATGTGAATGGAGCTGTGGAAACTTGTCTTGAAGCATTTCATCGTTATTACAAGTATCTC
AATTTCTCAAACACAATCATCAGCTCAAAGTTTGACCCACAGGCTTGTGGATGGGCATTT
GGTATGAATGTTTTTGATTTGATTGGATGGAGAAAAGCGAATGTGACTGCAAGGTATCAT
TTCTGGCAGGGTCAGAATGCTGACCAGACACTATGGAAGATGGGCATCCTTCCTGCTGGT
CTTTTGACCTTTTATGGACTAACAGAACCACTTGATCGAAGATGGCATGTGCTAGGATTG
GGTTATGATCTGAACATTGACAACCGTCTGATTGAGACTGCTGCAGTGATTCACTTCAAT
GGAAACATGAAGCCATGGCTGAAATTGGCTATTGGCAGGTACAAGCCTCTATGGGAACGG
TATGTAAATCAGAGCCACCCATACCTTCAAGATTGTGTCACAAGTTGA
>VIT_14s0108g00600.t01 cds chromosome:IGGP_12x:14:29337527:29339153:1 gene:VIT_14s0108g00600 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGCCATGGCATGGTTCGCCTTCAAATCCTAACTGCCAACCACTTCTGCCCCCCAAAA
CCTTCCAACGGTAATTTGAATTTGGTTTCCACAAAGCAACAATGCCTCTCTCTCCTGAAC
CTCTGCTCCTCCATGAAACATCTCTTTCAAATTCGAGGACATGGTTTCATCGCAGGCCCC
CTCCTCCGGTTCTGTGCTTCTTCTCCCTTAGGAAACCTGAACCACGCCAGAGTCCTTCTC
AGCGGCTCCGAGAAATCGGAGGTTTCTTCATGGAACGATCTCATCAGAAGCTATGCTACC
AGGGATTCTCCGAGGGAAGCTATTGGGGCTTATCTTGAAATGCGAAGCTTGGGGATTAGT
CCCGATAAGCTCACCTTCCCGATCCTCCTCAAGGCGTGCGCTGCGATTTCAGCGTTCAAT
GAAGGGAGGAAGATTCAGGTGGATGTAATGAAGCATGGTTTGGACTGTAATGTCTATGTT
CAGAATACTATGATTCATTTTTATGGGTCTTGCAAGAGGATTCGGGACGCACGGAGGATG
TTCGACGAAATGTCTTATAGAACTGTTGTTTCTTGGAATGCTGTGCTCTCGGCTTGTGTT
GATAATGAGTGGCTGAACGATTCATTTGGGCTTTTTGTAAAGATGAGGGGTTCTGGGTTT
GATCCTGATGAGACCACAATGGTGATCCTGCTATCTGCGTGCTCCGAGCTTGGGAACTTG
AGTTTTGGGAGATGGGTTCATTCCCAAGTGATTGAAAAGGGGATGGTTGTGAATTGTCGA
CTGGGTACGGCACTTGTTGACATGTATGCCAAGTGTGGGGCAGTGTGTGAAGCTAGTCTA
GTGTTTCATAGGATGCTTGAGAGAAATGTATGGACATGGAGTGCGATGATTCTCGGGCTA
GCTCAGCATGGTTTTGCCAAGGAAGCCCTAGAACTTTTTCCCAAGATGAAGCAGTCTTCA
ATATCCCCAAATTATGTGACCTTTCTTGGAGTCCTCTGTGCTTGTAGCCATGCTGGGCTG
GTCGATGACGGGTACAGATTCTTTCATGACATGGAATATGTGCATGGCATTGAACCCATG
ATGATACACTATGGTGCCATGGTGGATATCTTGAGCCGTGCTGGTCGTCTGAAAGAGGCT
TACAACTTCATCTTGAACATGCCTGTTGAAGCCGACCCAGTTGTATGGAGGACATTGCTC
AGTGCATGCACCATTCATGGCATCAATGACAATGATGGGGTCGGTGATAAGGTCAGAAAA
CGGTTACTTGAATTGGAGCCGAGGAGAAGCGGGAATTTTGTGATGGTTGCAAATATGTAT
GCTGAAGTTGGGAAGTGGGACAAGGCAGCAAATGTGAGGAGGACTATGAAAGACACAGGG
TTGAAGAAGATGGCTGGGGAGAGCTGCATTGAGGTAGGTGGATCCATCCATAGGTTCTTT
TCAGGGGATGATCCCCAACTTGATTGTGAGGATGTCCTTCAGTTACTAGATGGATTAAAC
CTACATATGAAGACGGTTAGCAACTTGTAA
>VIT_09s0002g07510.t01 cds chromosome:IGGP_12x:9:7546635:7549901:-1 gene:VIT_09s0002g07510 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAACCTATCCATTAACTACCTCTTTCAACCATCTCTCAACCACTTTAACTGTCACTAT
TCCCGCCATTTCTTTCTCCTTCCTAACCCCAACTCCAAGTCCTTCTCAGCCCATTTCGGC
CATACTACCACCACCATCAAACTCAAATTCAATGGCCCAGATTCTCCAAAACCCACTTCA
ATTCACACTAAACCCGCCTCCGACGTCAACCCATTACCTTACTCTTCCCTCATCCAGGAC
TGCATTGATTCCAACTCGTTCCAGCGCGGAAAATCAATCCATACCCAGATGATCTCTAAT
GGGTATAACCCAGATGCCTATTTAATGACTAAAATTCTTATGCTTTATGCTAGAAGTGGG
TGTTTAGATGATTTGTGTTACGCGCGGAAACTGTTTGAAGAAATGCCTGAACGAAACTTG
ACGGCTTGGAATACCATGATCCTTGCGTATGCACGGGTCGATGATTATATGGAAGTGTTG
AGGTTGTATGGTAGAATGCGAGGTTCAGGGAATTTTTCAGATAAGTTTACGTTTCCAAGT
GTGATCAAGGCGTGCATTGCCATGGAAGACATGGGTGGGGTTCGGCAGCTGCAGAGTTCG
GTTGTTAAGGCAGGCTTGAATTGTAATTTGTTCGTGGGCGGGGCGCTGGTTGATGGGTAT
GCTAGGTTTGGTTGGATGGATGATGCAGTCACTTCATTGGATGAGATTGAGGGAACCAGT
GTAGTTACTTGGAATGCAGTCATTGCAGGGTATGTTAAGATATTGAGTTGGGAGGAGGCT
TGGGGAATCTTTGACAGGATGCTGAAGATTGGTGTGTGCCCGGATAATTTCACTTTTGCT
TCTGCATTAAGGGTTTGTGGTGCCTTGAGATCTAGAGACGGAGGGAAGCAAGTGCATTCT
AAGTTGATTGCCTGTGGATTTAAGGGTGACACTTTTGTGGGTAATGCTCTTATTGATATG
TATGCAAAATGTGATGATGAAGAGAGTTGTTTGAAGGTTTTTGATGAAATGGGAGAGAGG
AATCAAGTTACTTGGAACTCGATTATATCAGCAGAAGCACAGTTTGGACATTTTAATGAT
GCTCTGGTGTTGTTCTTGAGAATGCAGGAGTCGGGTTATAAGAGCAATAGGTTCAACTTA
GGAAGCATTCTCATGGCTTCTGCTGGTTTGGCTGACATTGGAAAGGGTCGTGAATTGCAT
GGCCATTTAGTCAGGAATCTACTCAATTCTGACATCATTCTGGGGAGTGCATTAGTGGAT
ATGTACTCAAAATGTGGGATGGTAGAAGAAGCTCACCAGGTTTTTAGGAGTTTGTTGGAG
AGGAATGAAGTTTCATATAATGCTCTACTTGCAGGGTATGTTCAAGAGGGTAAAGCGGAA
GAAGCACTCGAACTTTATCATGATATGCAATCAGAGGATGGTATTCAACCTGATCAATTT
ACATTCACTACTCTATTGACCCTTTGTGCCAATCAACGGAACGATAATCAAGGGAGGCAA
ATCCATGCACACCTTATTAGAGCAAATATCACAAAGAATATAATTGTAGAAACTGAATTG
GTTCACATGTATTCAGAGTGTGGAAGATTGAACTATGCTAAGGAGATCTTCAATCGGATG
GCAGAAAGGAATGCCTACTCATGGAATTCGATGATTGAGGGGTATCAGCAAAATGGCGAA
ACTCAGGAAGCTTTACGACTTTTCAAACAAATGCAGCTCAATGGAATAAAACCAGATTGT
TTTTCTCTATCTAGCATGCTCTCCTCATGTGTAAGTCTTTCTGACTCTCAAAAAGGGAGA
GAGCTCCACAATTTTATAGTAAGAAACACCATGGAAGAGGAAGGGATCCTACAAGTAGTG
CTTGTTGATATGTATGCAAAGTGTGGGTCAATGGATTATGCATGGAAAGTTTATGATCAG
ACAATAAAGAAAGATGTCATCCTCAACAATGTAATGGTTTCTGCATTTGTGAACTCTGGG
AGAGCGAATGATGCCAAAAATTTGTTTGATCAGATGGAACAGAGAAACACGGCCTTATGG
AATTCTATTCTTGCAGGTTATGCAAACAAAGGGTTGAAAAAGGAAAGCTTCAATCACTTT
CTAGAAATGCTGGAAAGTGATATTGAATATGATGTCTTAACAATGGTGACTATTGTCAAC
TTATGTTCTAGCCTTCCAGCCCTTGAACATGGGGACCAACTTCACAGCCTTATTATCAAG
AAGGGATTTGTAAATTGTTCAGTAGTTCTTGAGACTGCCTTGGTTGACATGTACTCAAAA
TGTGGGGCCATAACGAAAGCGAGAACAGTGTTTGACAATATGAATGGGAAAAACATCGTC
TCTTGGAATGCAATGATTAGTGGTTACTCAAAGCATGGATGCAGCAAAGAAGCCCTTATT
CTTTATGAGGAAATGCCAAAAAAAGGGATGTATCCAAATGAAGTCACCTTCCTGGCTATA
CTTTCAGCTTGCAGTCACACTGGATTGGTAGAGGAAGGCTTGAGAATTTTCACCTCCATG
CAAGAGGATTACAACATTGAAGCAAAGGCAGAGCATTACACTTGTATGGTTGATCTTCTT
GGTCGTGCTGGACGACTGGAGGATGCCAAGGAATTTGTTGAGAAAATGCCAATTGAGCCA
GAGGTATCCACATGGGGTGCCCTATTGGGAGCTTGCAGAGTACACAAGGACATGGATATG
GGGAGGCTTGCAGCTCAACGCCTTTTTGAATTAGACCCACAAAATCCAGGGCCCTATGTT
ATAATGTCCAACATCTATGCTGCAGCAGGAAGATGGAAGGAGGTTGAAGATATAAGGCAA
ATGATGAAAATGAAAGGGGTGAAGAAAGACCCAGGTGTTAGCTGGATTGAGATTAACAGT
GAGATTCAGATTTTTCATGCTGGATCAAAGACGCATCCCAAAACAGAGGAAATCTACAAT
AATTTAAGACACTTGACCTTGCAAAGTAAGGGTTTGGGATATATCCCAGACACTAGCTTT
ATTCTTCAAAATGTCAAGGATATTAAGGAGGAGGAAGAAGAAGAGTATTTGCTGCAACAC
AGTGAACGATTGGCACTTAGTTTGGGCCTCATTAGCTTACCTAAGAAATCCACAATCCGA
GTTTTCAAAAACCTTCGAATCTGTGGTGATTGTCACACTGCAACCAAGTTCATTTCCAAG
ATCACAGGCCGCCGGATCATTGCAAGGGATACAAACCGGTTTCATCATTTTGAAAATGGA
AAATGTTCTTGTGGGGATTACTGGTAG
>VIT_06s0004g03820.t01 cds chromosome:IGGP_12x:6:4794620:4796193:1 gene:VIT_06s0004g03820 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGACTAGAAGAGTTAGAAGCAAAAGGATCTTGTCTTTTGCAGAAGTTGCCGTTCAAGCT
GCCAATTCCAAACTCTTCAGGGAATACATTGGAGCTGAGTCTGAATCAATCAAGTTAACT
GATGTGCCCATAAATTCTAAAGTCGAATTCCATTTCATCCTAGCTTTTGCTATGGACTAT
ACAAATGGAAACTCTCCTTCACCTAGCAATGGCAAGTTCAACATTTTCTGGGAGTTCAAT
CATCTGGGTCCTGGGGAAATTGCCTCAATAAAACATGGGCACTCCAATGTCAAGGTTGCT
GTTAGCTTGGGTGGTGATACTGTAGGTGATGGGAAAGCATTTTTTGCACCAAATTCAATA
GACTCTTGGGTTAAAAATTCTGTTTCTTCGCTAACGAATATGATAAAAGAATACAATTTA
GATGGGATTGATATTGACTATGAACACTTCCATTCAGATCCAAGCACCTTTGCAGAATGT
ATAGGGCAACTCATAATGAGTCTCAAGAAAAGTGGTGCAATTTCATTTGCTTCAATTGCC
CCCTTTGATGATGAGGAAGTCCAAAGCCATTATTTGGCATTATGGAAGAAATATGGACAT
GTCATTGACTATGTGAACTTCCAGTTTTATGCATATGATAAGATTAGTGTTTCACAGTTT
GTAAGTTATTTTAAGAAACAAGCTTCCAACTATGCTGGTGGTCAGATTTTAGCCAGCTTC
ATAAGTGGTGGGGGAGGTGGTTTGAAGCCTGATGATGGGTTTTTTGAAGCCTGCAGTGAG
CTGAAGGGAGAAGGAATTCTTGGGGGCATCTTTATATGGTGCGCTGATGAATCAACAAAA
CTAGGGTTTGAATATGAGAAGTCGTCTCAGGATTTTCTGGCATCTGCTTGA
>VIT_03s0038g01430.t01 cds chromosome:IGGP_12x:3:993344:994100:1 gene:VIT_03s0038g01430 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTGCCCCATTCGAGTCCACTGGCATGTTAAGAACAACTACATGTCCCACTGGAGGGTG
AAACTGACAATCTCAAACTACAACCTCGCGAAAAACTACTCAGATTGGAACATATTGGTT
CAGCACCCTGGTTTCAGCCAGAATACAACAACATACAGCTTCAACAGCACAGCACTTCCC
ACTGTTGGGTTTGCAGATGAGATTGCTCTCTTCTGGGGAGTAACCTTCTACAACAATGAG
CTTTTGCATGCTGATGACAAGAAACTGGGCTCAGTGACAACAGAGATACTTCTGGGCAAG
GACTCAAACTCATTCACATTAAACGGCGGGTGGGCCTTCCCTCGAAGAATATATTTCAAT
GGTGAGAACTGTGAAATGCCTCTTCCAGACACTTACCCTATGCTGCCAAACGGTTCCTCA
ACTCAGAAGCTTACTCATCCCCAGTTCTTCCTTCTCCTACTCTGTTTAACTGTCAAAGTT
CTAGCTATTTGGCTTTGA
>VIT_12s0059g02360.t01 cds chromosome:IGGP_12x:12:7147609:7148670:-1 gene:VIT_12s0059g02360 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTGACTTGGATCACTCCTCTGATGGCAGCTCTCTGGATTCTAGAGAGGGAAGCAGT
CAAGATTCCAAGCTTGAATTCTCTGAAGATGAGGAAACCCTGATCACTAGGATGTTCAAT
CTGGTTGGAGAGAGGTGGTCTCTGATTGCTGGGAGAATTCCTGGAAGAACGGCAGAGGAA
ATTGAGAAGTACTGGACTTCAAGATATTCATCAAGTGAATGA
>VIT_10s0116g01260.t01 cds chromosome:IGGP_12x:10:649106:651787:-1 gene:VIT_10s0116g01260 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGATTCAGCTACTGTTCACGGTGATATTCGCCGAAATGGCTATGATCATGGTGCTCCTC
TTCAAGACTCCACTGAGGAAGCTGGTGATCATGGGGCTGGATAGAGTGAAGCGCGGTCGA
GGCCCTATTATGGTGAAGACGGTGGCGGCAACGGTGCTGGTGGTGCTGATCTCGAGTGTG
TACAGTATGATGAAGATCCGGAAGCGTGGGATCGATGATGATGTTGTTAATCCCACGGAT
CAGGTTCTGATGGCCAAGCATCTTCTGGAGACTTCGCTTATGGGATTCACCCTCTTCCTT
GCACTAATGATAGACAGACTACACCACTACATCAGAGAACTCCGTTTAAGAAGGAAGAGC
ATGGAAGCTATAAAGAAACAAAACCGAGGCTTTGAGGATGGAAAAACTGGTGGTTCAGCA
GAAATCAAAGCCATGGAGGAAGAGATGGCAGCATTAGGGGCAAAGCTTAAGCAGCTGGAA
TCTGAAATTGAGACAAAAACAAAAGAAGCAAAGGCTGCAGAAACCAATGCTGTGGCTCTG
AGGAAACAATCTGAAGGCTTCCTTCTTGAATACGACCGTTTGCTTGAGGAAAACCAGAAT
CTTCGGAACCAGTTGCAGTCATTAGACCGAAGATTGTCACATTCTGGTAGCAAGAAGAAC
ACATAA
>VIT_12s0034g02390.t01 cds chromosome:IGGP_12x:12:18887112:18897524:1 gene:VIT_12s0034g02390 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGTTGCCGGAGTGGACTCGTCGGACCCTGCTACAGTGGCAGGAATTGCGATGGATTTT
CCGGTGTCGGATGAGGCGGCGTTTGTTTCGCCTCCGAGGGTTCCACCGAGGCTCCGGAGG
AGGCTCGTGGAGAGCAGGAGTCCGTCCACTGCTGAGGAAATCGAAGCCAAGCTTCGGGAC
GCCGATCGTCGGAGACAGCAATTCTACGAGAGGCTGTCAAGCAAGGCACGGCCAAAGATG
AGAAGCCCGTCACGGTCTTCCTCCAATGAGGAAGACCTTGGTCAGCGTCTTGAAGCAAAG
CTCCAAGCAGCTGAGCAGAAAAGGTTGAGCATTTTGGCAAAGGCTCAGATGCGGTTGGCT
AGGTTGGATGAGCTTCGGCAAGCTGCTAAAATAGAGGTACAAATGCGTTTTGAAAAGGAG
CGCAAGAATCTTGGTACAAAAGTGGAATCACGGGTTCAGCAGGCAGAAGAAAATAGAATG
CTCATCCAAAAGGCTTATAGGCAGAGGAGGGCCACGTTAAAGGAGAGAACATCTCAGTCC
TTATTGAGGAGGATGGCTCGGGAGAGCAAGTATAAGGAGCGTGTGCGTGCTGCAATTCAC
CAGAAGCGTGTTGCTGCTGAGAAGAAGCGCTTAGGATTGCTGGAAGCAGAGAAGAAGAGA
GCACGTGCTCGGGTATTGCAAGTGCGGCGGGTAGCTAAGTCTGTTTCTCATCAACGAGAA
ATTGAGAGGAGGAGAATAAAAGATCAGTTGGAAGATCGACTACAAAGGGCAAAGAGGCAG
AGAGCAGAATATCTGAGGCAGAGAGGAAGACTACATGGTTCTGCGCGTGTGAATTTGAAG
AAGATGCACAGGCAGGCAGATCTCCTTTCAAGGAAACTAGCGAGGTGCTGGAGACGGTTC
CTCAAGCTGAAGGGAACTACGTTAACCTTGGCAAAAGCTTTTGATGCCTTGAAAATTAAT
GAGGAATGTGTTAAGTCAATGCCATTTGAGCAGCTTGCTCTTCTGATTGAATCAACTGCT
ACCCTTGAGACTGTAAAAGCTCTACTAGACCGGTTTGAGAGTCGCTTTAAGCTTTCACAG
GCTATTGCTGCTACCACTAGTCCATCCAGCTGGAATAACATCGATCACCTTCTAAAGAGA
GTCGCTTCCCCAAATAGAAGGGGTACACCTAGGACTTCTAGTAGGAGCAGAGGCACAAAG
AAACAGGGGTCCATCAGACAAGCAGCCAAAATTCCAGCCAAATTATCAAGGTATCAAGTG
AGAGTGGTGCTCTGTGCTTACATGATATTGGGTCATCCAGATGCTGTTTTCAGTGGTCAA
GGAGAGTGTGAGATTGCACTGGCCCAGTCAGCTAAAAGTTTTGTACGAGAGTTTGAATTA
CTGATAAAGATTATTTTAGATGGGCCCATGCAGAGTTCTGATGAAGAGTCTGACCCCACA
TTGCCAAGACGTTGGGCCTTCAGGTCTCAGCTTGTGGCATTTGATAAAGCCTGGTGCGCC
TACTTGAATTGCTTTGTGGTGTGGAAAGTTAAGGATGCTCGGTCATTGGAGGAGGATTTG
GTGAGAGCAGCTTGCCAGCTTGAGCTCTCTATGATTCAAACTTGCAAGATTACTCCAAAA
GGAGATAATGGTGCTCTTACTCATGACATGAAGGCAATTCAGAAGCAGGTTACAGAAGAT
CAGAAACTTCTGAGGGAAAAAGTGCAACATCTGAGTGGAGATGCTGGGATTGAGCGTATG
GAATGTGCTCTTTCCGAGACACGAAGTAAATACTTTCAAGCAATGGAGAAAGGAATCTCG
ATAGGGTCACCAATTGTGCAATTTTTATCTCCAACCCTGCCTAGTTCCTCAGATGCACCT
TCTGTTGCTAGTCCAGAGAAAAGAAGTAACCTGATTGAGGGCAGTGAGAAGTCAAGCCAT
GTAGTTCGCTCCTTATTTGGAGAAGATGCTTCTTCCCAGCCTGGAATAGCTGGCCTCTCT
TCTCCTAGAAGCAGTTTAGACGGTCAGTTGGATTCTTCTGCCAAAAAATTGGTAGCAGAA
AATGAATTGATTGTAAATGAACTTGTTCATGAGCAGCACTATGCTTTTGCTGATAGCTTG
AGTATTGCTGACAAAGAGCAAAGGAATATGAAGACAAAGATTAGAGAGACAATGGAGAAG
GCTTTCTGGGATGGCATTATGGAATCTATGAAAGAGGATGAGCCCAACTATGATCGGGTT
GTTGAACTCATGCGGGAAGTGAGGGATGAAATCTGCAATGTAGCTCCTCAGAGCTGGAAA
CCAGAGATTGTTGAAGCTATTGATCTAGATATTCTTTCTCAGGTGCTGAAGTCAGGAAAC
CTGGACATAGATTATCTTGGAAAGATTTTGGAGTATGCGCTGGTCACTTTGCAGAAGCTC
TCGGCTCCAGCTAATGAAGGTGAAATGAAGGTGATTCATGAGGGATTATTGAAGGAACTG
GCTGAGATATGTGAAACAGAAGATAAATTGAAGAATTCACATGTTATTGCAATGATCAAG
GGTCTGCGCTTTGTTCTGGAGCAGGTTCAGGCACTTAAGCAGGAGATAAGCAAAGCACGT
ATAAGAATGATGGAGCCTTTGCTAAAGGGGCCTGCAGGTTTTGATTACCTTAAAAATGCT
TTTGCCAACCATTATGGTTCTCCATCTGATGCATTCACCTCTCTACCACTGACGGCTCAG
TGGATTTCATCCATATGGCATGGCAAAGATCAAGAGTGGAATGAACACAAAAATTCTCTC
TCAGCCTTGACAAATGGTGAAAGTTCATATCAGGGGCGTCTTCCTTCCACCACTCTTAGA
ACTGGTGGCAGCATTATGGTCAAAACTAATGGAAGCCAAGTGACTTCGGTTCCTTCAGCT
GCAACTAGTACAGGTAATCAACAACCTGAATGCAATGGAGAAAGGGTTGATTTGTTGGTG
AGGCTTGGGTTGTTGAAGCTAGTAAGCGGGATATCTGGTATAACACAGGAATCTTTACCT
GAAACACTTAAGCTTAACCTCAATAGGCTGAGAGCTGTTCAAGCCCAGATTCAGAAGATC
ATTGTGATTTCCACCAGCATTCTTGTTTGTCGACAAATCCTCATGAGTGAGGTAGCACTA
GCCAACCCTGTGGAGATGGAAAACATGGTAGTTAGGTGTGGAGAAGAAGTCTCAGAGCTC
TTGGACCGTTCTGAAGAGGCAGGAATTGAAGAAATTGTTGAAATCATGAGTGGATTTTCA
AGAGATGGTGAGGAAGCCTCCAACATCAACAAGCTTCAAGCGAGGAAAGCAGTTATGAGT
AGGATGTTGGTGAAGAGCCTGCAAGCTGGGGATGCCGTGTTTGAGAGAATATCCCATGCT
GTTTATTTGGCTGCAAGAGGAGTAGTGCTTGCAGGGAATGGCCCTCAAGGAAGAAAATTA
GCAGAAATGGCACTCCGGCGGGTGGGAGCTGTTGATCTGACTGATAGAGTGGTGGAAGCT
GCTGAAATATCGCTGGCAGCAGCCACGGTGTCGGTTAATGTTCATGGGCAATGGTATACA
TATCTGACTGATAACATGTGA
>VIT_03s0063g01800.t01 cds chromosome:IGGP_12x:3:5135440:5144942:1 gene:VIT_03s0063g01800 gene_biotype:protein_coding transcript_biotype:protein_coding description:Proteasome assembly chaperone 2 [Source:UniProtKB/TrEMBL;Acc:D7TPV2]
ATGGAGTTTATTGTAGAAGAAGGCAAACACCTCAACAACGATTGCTCCACTCTTGTTCTG
CCTGCTTTGTCGATTGGAAATGTAGGGCAGTTGGCGGTGGACCTCTTGATCTCGTCTACG
AGAGCGGAGAGAATAGGTTATTTGGATGACCCTTATGTGCTACCTTGTGTTGGCAATGAT
GCATATGGCCCTATACCACGAGGCGAGGTTGCTCTGCCTCTCGAAGCTTATGATTCTTCT
CTTAATAAATTGACACTTGTCCAACAAAGATCTCCAGTTCTTAAGGGGATGATGGTTGAA
TTTGCTAAGAATTTGGCTTATTTTGCTGCTGACAGTGGGAAGAAGCATGTTATTGTGCTC
TCTAGCCTAGATTTTGGGCAGTGGCAAAGGATTGATATGTCAAGTGGTTCACAGATATAT
TACATCTCCAGTGCCAATATGGATGGAGCAGACGATGACTGTGAAAAACTAGGGTGGAAA
AAATTACATGAATATAACCCTGCTCAGAGGCGATGGAAGTATCTTAGTACATTAGCTGCA
GGAAATGCTATGCAGGAAGATGGTTTGGCTTTTGAAGATGAACTTGAAGACGAAGAAGAT
TACTACCCAAGTTTGCCATTTGCTGCACTTTTATCTTGTTTTAAGGCCAAAGGTTTGAAG
GTAACTTGCTTATTATGTTACTGCTCAGAAGGGGACAATATACCTGATGCTTTCAATCTG
GCTGACGCGGCATGCAAACTTCTTGAGCTTAGCCCCCAAAATTTCCATGGTGATCAAGGT
GGTAATTGGGCTATTCCATTTTCATGGAAGACTGTTTATGGGCCACCCCCAGATATGTCT
CTCTTTTAG
>VIT_12s0055g00310.t01 cds chromosome:IGGP_12x:12:12989334:12990881:1 gene:VIT_12s0055g00310 gene_biotype:protein_coding transcript_biotype:protein_coding description:Glycosyltransferase [Source:UniProtKB/TrEMBL;Acc:F6H1R0]
ATGAAACAAACTGAGCTTGTCTTCATCCCACTTCCGATCATTGGCCACCTTTCACCTACA
GTGGAGATGGCAAAGCTGCTTACTCAGCGAGACCCCCGATTCTCAATCACGATCTTCATC
ATGAAGTTTCCGTTTGGGTCCATTGATAGTATGACCACGGACTCTGATTCCATACGTTTC
GTCACACTTCCTCCTGTAGAGTTCAGCTCCGGAGCGACGACGCCTGGTCCCTTCATGTCT
GAATTCATCAAAGCTCAGACACTACTCGTCAGAGACGCAGTCCACGAGCTCACTCGCTCC
AACTCGGTTCGGCTCGCTGGGTTCGTTATTGACGCGCTCTGCACCCACATGATTGATGTG
GCCGATGAGTTTGGGGTGCCTTCCTATCTCTTCTCCACTTCCAGCGCCGCTTCTCTTGGC
TTCCTGTTGCATCTTCAGTTCCTCCATGACTATGAGGGGTTGAATCTTGATGAGTTCAAG
GACTCGGATGCTGAGTTGCAGGTTCCGAGTTATGCTAACTCGGTTCCAGGTAAGGTCTTC
CCTCCTATGATTTTTTACAAGGAACTCGGTGGGGCTCCGGGGTATATGTATCATATGAGG
AGATTAAGACAAGCCAAGGGTGTTATGGTAAATACATTTATTGATCTTGAATCACATGCT
ATTCAATCATTTTCTGGGAGTAAAATACCGCCGGTGTATCCCGTTGGACCCATTCTCAAC
ACCCAAATGGGATATGGTGGGGATCAACAAGATGCTAGTGCCATCATGAGCTGGCTTGAT
GATCAGCCCCCATCGTCAGTTGTTTTCCTTTGCTTCGGGAGCATAGGAAGCTTTGGTGCG
GATCAGATCAAGGAGATAGCATATGGGTTAGAGCGCAGTGGGCATCGCTTCTTGTGGTCC
CTTCGCCAAGCTCCCCCAAACGGTAAAATGGCATTTCCAAGGGACTTTGAAAATATTGAG
GAAGTTCTACCGGAAGGGTTTTTACCGCGGACGGCTGGAATTGGAAAGATGATTGGATGG
GCTCCACAAGTAGCGGTTTTAGCTCACTCAGCTGTTGGAGGATTTGTTTCTCATTGTGGA
TGGAATTCTCTCCTAGAAAGCATATGGAATGGTGTTCCAGTAGCCACATGGCCAATGTAT
GCGGAACAACAAATCAATGCATTTCAAATGGTGAAAGATTTAGGATTAGCAGTAGAAATT
AAAATTGATTATGATAAGGATAACAGCTATATTGTAAATGCTCATGAGATTGAAAACGGA
TTAAAGAAATTGATGAGCATTAATAGTGAAGTGAGGAAGAAAATGAATGAAATGCAACAA
ATAAGTAGAAGAGTTATGATAGATGGTGGATCCTCGCACTCTTCTTTAGGTCATTTTATT
GAAAACGTAATGACTAATATTCCATAA
>VIT_06s0009g01950.t01 cds chromosome:IGGP_12x:6:14183083:14183349:-1 gene:VIT_06s0009g01950 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTTCCCACTGTGCAGTCTTGCCGGCATCCTCTCATCGCTGCATAGCTCCGCCAAGAAC
TCCGGCGGAGATCTTCTTGTTCCTCCACAAAAATACATCAACGCGTTTTCCTTCGCCGAG
AACTGTGTTGACCAGCTTCTCCCGTCCAAAAAGGCGAAAATCCTTGGCTTTGATGGAAGA
CGACGAGAATGGCACCCGCGAGATTATCCAAAAATAATGCTTCCACATTCCTCAAGGATG
AATCAATTAAACACAACTTTCATCTAG
>VIT_13s0158g00380.t01 cds chromosome:IGGP_12x:13:21283084:21284766:-1 gene:VIT_13s0158g00380 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGATGATGGAGAGGTAGAGCTTTCAGATCATGTTCTGTTATCAAACCCCAATTCATCT
AGCAATTTCCAGGGTTCAACCCCGATCGACTCGTTTCTTGATGATTTTCTGAAGAATACA
AGAACATGCACTCACACTCACACTTGCAATCCCCCTGGCCCGGACGCGGCACACACTCAT
ACATGCTATCACACACACACCCAAGTCTTTGCATCCGAAGAAGATGAAGTGCCAAACAAT
AAAGAACATTTGATTTCGAAAGTTAGGAGGCCTTCTGGAAATAGGGAAGCTGTTAGAAAG
TATAGAGAGAAGAAGAAGGCACACACAGCTTACTTGGAGGAGGAAGTCAAGAAATTGCGC
CTATTGAATCAGCAGCTTGTTAAGAAATTGCAAGGGCAGGCAGTTCTTGAAGCCGAGGTT
TTGAGGCTGAGGAGCCTTTTGCTGGACCTTAGAGGAAAGATTGATAATGAGTTGGGTGTT
TTCCCCTTCCAGAAGCAGTGTAATACCACTTTGAGTTTCAAGGAAGGTGATTGTGGACTG
CAGTCTGCTAGCGGGGCAATTGACCCGAGGTGTGAGATGGATTTGCCATGCTTCCATCCT
CATGTGGGATCATCTTCGCAGGCTAGTATTAGTGGGAGTGGGAAAATGGTGGTTTCATGG
GAGGGAAATTGTCAGCCTGCAGTTGTAGATTGTAGAGGTAACATAAATGATATGGTAAGT
GCTGAAGGACACACAATGGACACTGTGGAAGCCTTGAACTATGTACTTACTGAGGGAATT
TGTAATTCTGATATATCTGTGACTGCTTGTATGAAGCCGCCTATGATGAAAATAAAGCTG
TTTTTTTCTTGTTTTAGATGA
>VIT_18s0001g08930.t01 cds chromosome:IGGP_12x:18:7474794:7480633:-1 gene:VIT_18s0001g08930 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCCGGTGATGCTGCCGGGGGTGGCGACAGTGCTGGCGACTTGCAGCCGCATCCGGTG
TTGGAACAGCTCCCTGGCATTCAGTATTGCATGAACAGCCCTCCTCCGTGGCCTGAAGCT
ATTTTGTTGGGCTTTCAACATTATCTTTTGACTCTTGGAATTACTGTTTTGATTCCCAGT
ATATTAGTTCCTCAAATGGGTGGTGGCAATGATGAAAAGGCAAGGGCAATTCAAACCTTA
CTCTTTGTTTCAGGACTCAACACACTCTTGCAATCTTTCTTTGGAACCCGACTTCCAAAT
ATGGTTGTGGGATCATACGCATTTTTAGTTCCTGCAACTTCTATTCTCCTATCCAAGAGA
TATAATAAATTTGAAGATCCCCTTGAGAGGTATGAACAGACAATGAGAGGTATACAGGGT
GCTTTAATTGCAACTTCATTTTTCCAGATGATTGTGGGTTTCCTGGGCTTATGGAGAAAC
GTTGTCAGGTTGATTAGCCCACTGTCTGCAGTTCCCCTTGTAACTTCCACAGCAGTTGGC
CTCTACCATCTTGGTTTTCCGATGCTGGGGAGATGTGTTGAAGTTGGATGTCCAGAGTTG
ATTTTGATGGTTTTTATCTCACAGGCAAGTACATTACCATTGATGGAGGCCATATATGAC
CGATATGCAATGTTATTCTCAGTCCCAATTGTATGGTCATATGCACACATTCTGACTGCT
AGTGGTGTGTATGATGGCAAACCTCCGAACACCCAGATAAGCTGCCGCACTGATCGTTCT
GGACTCGTTGGTGGCAGTCCTTGGATACGAATTCCTAGTCCATTTCAATGGGGGACGCCC
ACTTTTAATGCAGGAGAAGCTTTTGCAATGATGGCGGCTTCCTTTGTTGCTCTTATTGAG
TCCACTGGTACATTTATTGCTACATCAAGATATGGGAGTGCCACTCCCATACCACCATCT
GTTATCAGCCGTGGTGCTGGCTGGCTGGGAATAGGAGTTTTGCTAAATGGCTTTTTTGGT
GCTGTAACTGGCTCTACCATATCAGTAGAAAATGTTGGGCTATTGGCAGTGACAAGAGTT
GGAAGTCGAAGAGTCATTCAAATATCAGCAGGGTTTATGATATTCTTCTCTGTATTAGGA
AAATTTGGAGCCGTATTTGCCTCAATACCTTTGCCAATCATAGCAGCTTTGTACTGTGTC
TTCTTTGCCTATGTTTTTTCTTCAGGGCTTGGATTTCTCCAGTTCTGTAACCTCAACAGT
TTCAGAACAAAGTTCATCCTAGGCTTCTCCATTTTCATGGGCTTTTCAATACCACAGTAC
TTAGAAGAATATCAACTAAGTTCCAGACCTGGTCATGTCCACACCAATTCTGGACCGTTT
AATGACATGATGACTGTCATCTTCATGTCAAACGCGACGGTTGCTGCTATGATTGCTTTG
TTATTGGATACCACTCTTTCCTGGGGGAAAGATGGTGGTAGCAACGATAGCGGCTCACAT
TGGTGGAGAAAGTTCAGTTCATATAATTCAGATGTGAGAAGTGATGAATTTTATGCACTG
CCATTCAAACTCAATAAGTTTTTCCCAGCTCATTGA
>VIT_17s0000g02200.t01 cds chromosome:IGGP_12x:17:1829898:1832876:1 gene:VIT_17s0000g02200 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCGAAGGTCAGTAGGACGGGGAGAAACAGAAACCTGGAAACCCTGCTGGTCATGGAC
AAGTCGGTGAAAATTGAGAACCAGGCTGTCACGCATGAACCCCGGAAAATGATTCCAGGC
CAAGGACTGGAGTTTAGTAACCTTTCCTATAGTGTGCCGAAGCAGCAGAAGAAGGATGGC
GCGACAATCACCAAAGAAGTTTACCTTCTTAATGATCTTTCTGGCCAGGCAGTTAGAGGT
GAAATCATGGCCATCTTGGGGCCTAGCGGGGCTGGAAAATCCACGTTTCTGGACGCCTTG
GCTGGGAGGATTGCTCGTGGAAGTCTTGAGGGGTCTGTCAAAATCAATGGAAAGCCGGTT
TCCGCAAGCTATATGAAGATGGTTTCTTCTTATGTAATGCAAGATGATCAGCTCTTTGCC
ATGTTGACAGTCTTTGAGACCCTCATGTTTGCAGCTGAGGTTAGGCTTCCTCCTTCAATT
TCCAGATCAGAGAAGAGAAAACGAGTTTTCGAGCTCATTGATCAACTGGGCTTACAGAGT
GCAACCCATACATATATCGGCAATGAAGGCAGACGGGGAGTGTCCGGTGGAGAGCGGCGG
AGAGTATCTATAGGGATTGATATAATCCACAAGCCACCGCTGCTGTTCCTGGATGAACCC
ACCTCCGGTCTGGACTCTACAAGCGCTTACAGTGTGGTGGAAAAGGTTCAGGACATTGCA
AGAAGTGGTAGCATTGTCCTCATGACCATACACCAACCATCTTTCAGAATCCAGATGCTC
CTCGACCGTATCACAGTCCTAGCAAGGGGCAGACTGATATATACTGGAAGACCAACTGAT
CTTCCTACCTACCTCTCTGCATTCGGAAGACCAGTTCCAGATGGTGAGAACAGCCTTGAA
TATCTCCTGGATGTGATCAAAGAGTATGATGAATCAACCATAGGAGTTGATCCTCTTGTT
CTGTACCAGCGGGATGGCATCAAGCCTGATCAAGTGGCAAGAACCCCTATTCCAAAAACA
CCCAAGACCCCCAACACTCCTTACAGAAAGACTCCTGCATCACAGCTTTTCAGTCTCCGA
AGCCAACCATTTTCGACTGGGAATTCGACTCCTCGGCTAGATGCTCATTACAATGATGAT
GACGATGATGATTTTGACAACTCCCTTGAAAGAAAAATCGCAACACCAAAGCATTTTCAT
GGTAAACACAGGGCCAAATTTGCAAATCCATGGCTTCGCGAAGTAGCAGTACTGTCATGG
CGGAACATACTCAATATCATCCGCACCCCAGAGCTCTTCCTCTCCCGTGAGATCGTTCTG
TTGGTTATGGCTCTCATCCTCTCTTCTCTCTTCCCAAACCTGGGAGACGATAGCTTGAAG
ACAGTGAACCGGCTTCTTAATTTCTATATCTTTGCAGTCTGTCTTGTCTTCTTCTCTTCC
AATGATGCCGTTCCAACCTTCATCCAAGAGCGATTTATCTTCATGAGAGAAACAGCCCAC
AATGCATACCGGGCTTCTTCTTACGTCGTATCGTCCCTCATTGTCTACCTCCCGTTTTTT
GCCATTCAGGGCCTCACGTTTGCCATGATCACCCGGTATATACTCCACCTGAAAAGCGAC
GTCATCTTCTTCTGGCTAATCCTTTATGCATCACTCATCACCACAAATGCTTATGTGATG
CTTGTTAGCGCACTGGTGCCAAGCTACATCACAGGTTATGCTGTCGTCATTGCCACCACT
GCTCTTTTCTTCCTATCTTGTGGGTTCTTCTTGAAGCGAACTAAAATACCCAACTACTGG
ATCTGGCTCCATTACATATCTGCAATCAAATACCCATTTGAAGCATTACTGATAAATGAG
TTCCAAGGCACCCGCTGCTACAAGGGATCTCCTGCTGATCTTTCGCCAGGCCCTCTTGGT
AACTTGAACTACAGCCCAGAGCACAACAAATTTGTATCAATAAACTGCACATTGATAGGT
GATGATATTCTGTCCTCCATGGATCTTCAGTTGAAGAACATTTGGTATGATATTGCTATC
CTGTTGGGGTGGGGAGTTCTTTACCGCCTCTTCTTCTACGTGGTTCTGAGATTTTACTCC
AAGAATGAGAGGAAATGA
>VIT_12s0134g00300.t01 cds chromosome:IGGP_12x:12:7856180:7860518:-1 gene:VIT_12s0134g00300 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGTTCCTGTCTCTGCAACTCACATGCTATCTACCATCTTTTTCGTCTTGTGTTCTGTC
CTGTATTGCTCTGCTAGAGATACCATCACACCGGAGGACTGGCTTAGTAATGATGGAGAA
ACTGTTGTTTCTGCAGGCAAAACTTTTGAACTTGGCTTCTTTAATCCAGGTGGAAGCTCC
AAGATTGGAAGATTCGTGGGCATATGGTATTACAGGTCGAAACCACAAAGAGTTGTATGG
GTGGCCAACCGAAAGAACCCCCTTCCCCTTTCTGACACCCCCTCTGGAGTTTTTGCCATT
AAAGAAGATGGTCAGCTCAAGGTATTGGATGCAAATGGGACAGTTCACTGGCATTCTGAT
ATTGAAACATCTTTATCTACAGGGAGGGTGGTGAAGCTCATGGACTCTGGGAACCTTGTT
TTGAGCTACAACAGATCGGGGAAGATTCTTTGGGAGAGCTTCCATAATCCTACAGATACT
TTTCTTCCGGGGATGAAGATGGATGAAACCTTAACATTGACTTCATGGCTGAGTTCTGTT
GACCCGGCACCTGGAAACTATACTTTCAAGATAGATCAAGACAATAAGGATCATTATAAC
ATATGGGAAAGTTCAATTGTCCCATATTGGAGCAGTGAGGACTCGAAAGGAACGCCTGAT
GAAATTCCAGATGCAATACTCAGCTTGTTATCCAACCTCAGCAAGAATGGTAAGCCAACC
AGCTATATAAAATTCTTCAATGGAACCCTTGAAATACTGTCCCGCAGGTATAAGAATACC
ACGCGGTTGGTGATGAATTCTTCAGGGGAAATCCAGTACTATCTGAATCCGAATACATCA
TCTCCAGACTGGTGGGCACCTCGAGATCGATGCAGTGTGTCAAAAGCTTGTGGGAAATTC
GGTAGTTGTAACACTAAAAATCCTTTGATGTGCAAATGTTTACCTGGGTTCAAACCCGCC
TCGCCGGATAAGTGGAAAACTGAAGACTTTTCAAGTGGGTGTACCAGAAAGTCTCCCATA
TGCGAGGAGAATTCTAGTAAAGACATGTTCCTGAGCTTAAAGATGATGAAAGTGAGAAAG
CCAGACTCTCAGATTGACGCAGATCCAAATGATAGTGATCCTTGCAGAAAGGCTTGCCTT
GAAAAATGCCAATGTCAAGCTTATGCTGAAACTTATATCAAACAAGAAAGAGGTGATACT
GATGCCCTAAAATGCTTGATTTGGACGGAAGACCTTACTGATCTTCAGGAGGAGTATGCC
TTTGATGCCCACAACCTCTCCGTTCGTGTGGCCATTTCAGATATAAAACCAACAGTAAGG
AATTGTGAAACTTGTGGTTCAAGCATGATTCCTTATCCTCTAAGCACTGGATCAAAGTGT
GGTGATCCCATGTACTTCAATTTTGAGTGTAACAGTACCACAGGCCAGGTTCAGTTCAAG
GTACCTGGTGGTGCCTACCGAGTAACTAGCATTAACCCAGAGACATTAAGATTTGTAATC
CAACTGAAAGAAGCAGATTGCAGTTCTCGAAGTTTAATTCCGCCACTAGACCCACCTTTT
CGCATAACTGATGCGTGCAAAGAGGTTGGAACTGACCATTTTGGCTCTGAGATGTCATTG
AAAAATAGTATTGAAGTAGAGATCAGTTGGGATCCACCATCGGAGCCGGCGTGTACCTCA
TCAGCAGATTGCAAAGACTGGCCAAATTCAATCTGCGGAACGCGAGATGGAATGAGTAGG
TGCTTTTGCAATGAAAACTTCAAATGGAATAGCTCAAGTTTAAATTGTACACAAGGTGTC
AAACCTGCTGATCAGAAGTCATCGTGGTCATCTCCAGTGGTTGTGGTAGGCATAACAATT
GCTGTTGTTCTAGTTGCGGTTTTAGGCATCATTGGTTATATTGCTTATTTGCGCAAAAGA
ACCATCACCAAAAGGAAAGAGAACAGAGCAAATCAAGTGCTTCACTTATATGATAGTGAG
AGTCGTGTGAAACACTCAATAGACTCGGAGCAATTCAAAGAAGAGGATAAGAAAGGCATT
GATGTACCGTTTTTCGACTTAGAAGACATACTGGCTGCTACAAATAACTTTTCAGATGCA
AATAAGCTTGGACAAGGGGGTTTTGGGCCAGTTTACAAGGGCAAGTTTCCAGAGGGGCAA
GAAATTGCAGTTAAGAGACTCTCTAGAGCTTCAGGACAAGGCCTACAGGAATTTAAGAAT
GAGGTTGTTTTAATTGCCAAACTTCAGCATCGGAATCTGGTTAGACTTTTGGGCTATTGT
GTTGAAGGTGATGAGAAGATTTTACTCTATGAATATATGGCCAACAAAAGCTTAGATTCC
TTCATATTTGATCGAACCCTATGCATGTTACTGAACTGGGAGAAGCGGTTTGACATCATT
ATGGGAATTGCTAGAGGGCTGCTGTATCTTCACCAAGATTCAAGATTGAAGATTATTCAT
AGGGACTTGAAAACAAGCAACATTCTACTTGATGATGAGATGAATCCCAAAATTTCAGAC
TTTGGCTTGGCGAGGATTTTTGACAGTAAGCAAGTAGAGGCAAGCACAAACAGAGTAGTT
GGAACTTATGGCTATATGTCTCCAGAGTATGCATTGGATGGGTTTTTCTCAGAGAAGTCT
GATGTCTTTAGCTTTGGTGTTATGGTGCTTGAGATCATCAGTGGGAAGAGGAACACTGGC
TTTTATCAGTCTGACCAAACACTGAGCCTTCTGGGTCAAGCATGGAAGCTATTGAAAGAA
GACAAGGTGTTGGAGCTGATGGACCAGACACTATGCGAAACATGCAACACAAAAGAATTT
TTGAGGTGTGTGAATGTTGGGCTGTTGTGTGTGCAAGAAGACCCAAGTGACCGTCCCACC
ATGGCAGTTGCAGTTGTAATGCTCAGCAGTGACATTGCAACAATGCCGGTTCCTAAACAA
CCGGCTTTTGTCCTAAAAAGAGACCTTTCTAGGACAGCTTCTTCTTCTAGCAAACCTGAA
GTATCCTGGAACAGTGAAATCCTAGCCACCATAGAAGAAGGTCGATAG
>VIT_05s0062g00520.t01 cds chromosome:IGGP_12x:5:18667048:18669055:1 gene:VIT_05s0062g00520 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGGCAGCACCACTTCCTCATTATATCACATCCACTGCAAGGCCACATCAACCCAGCC
CTCCAATTAGCCAAGCGCCTGATCAGAACCGGCGCCCACGTCACATTCGCCGTCTCCGTC
TCCGCCCATCGCCGAATGCCCAAAGATCCGACCCTCCCCGGTTTAACCCTAGTCCCCTTC
TCCGATGGCTATGATGATGGGTTAAAGTACTCCAATGATCATGCCCAGCACTATATGTCC
GAGATCAAGCGTTGTGGATCAGAAACCCTCAGGCGGATCACTGCAATGAGCGCTGACCAA
GGCCGACCAGTTACTTGCTTACTGCACACCATCCTCCTAACCTGGGCGGCAGAACTGGCG
CGTAGCCTTCAGGTTCCGTCGGCGCTTCTTTGGATTCAGAGCGCCACTGTTTTCACCATT
TACTATCATTACTTCAATGGTTATGGTGATGTGGTTGGAGACTGCAGCAATGAGGGTTCA
AGTCCAATTGAGTTACCGGGGCTTCCAATACTGCTGTCTAGCTGTGATATTCCGTCTTTT
TTACTCTCTTCAAACATATATGCTTCGTTGCTCTCAACATTTCAAGAGGAAATGGAGGCA
CTAAGGCAAGAGACGAACCCCAAAGTGCTGGTGAACACCTTCGACGCACTGGAGGCCGAG
GCGCTACGAGCTGTGGATAAGGAGGAGGCAGGTGGTGACTTGCTAAGGAAGGTGATTCCA
AGAAAAGAAAGAGGAGGAACAGGAAGAGGAGAGAGGAGAGTTTAG
>VIT_01s0011g05300.t01 cds chromosome:IGGP_12x:1:4920398:4927966:1 gene:VIT_01s0011g05300 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGATGGCTTCGACAATACCACCTCATTTCAAGTTTAAGGTTTGGAACAATCATCCACAC
CCAAACACCCACTTGGATGTTATTGCAGTTAGACCCACAAGAACCCGAAGGAGTCCAACT
GCCTCATTCTGTTCTACCCATCAGCATCATCTTCTTCATCATCATATCTTCAACCACAAA
TCAAGTTCTATCCGTACAGTCCTCACAAGGGTCAGCGGCGATGGTGGAGGTATTGTTGAT
GCCGCCTCACAACAGTCTGCTTCTGCGGATGGCATGTGCTCTTCCCTCCTGGCTTTACAT
GGTGATGCATCCTCTCACTTACTGTTGCAGGACAGAAATACAATAAACAGCAGCTCTCCT
AGTCTTGGTGATGGTTATGTGGCATTGTTTGTTCGGATGCTTGGGCTAGATAATGATCCT
CTTGATAGGGAACAGGCAGTAGTAGCATTGTGGAAATATTCACTTGGAGGAAAGCAGTAT
ATTGATGCCATAATGCAATTCCGAGGCTGCTTAAATCTCACAGTAAATCTCCTTAAATCA
GACTCCAGTTCTACTTGTGAAGCAGCTGCAGGCCTTCTACGAGAAATAGCTTCAATTAAT
CTACACAGAGAGTCAGTAGCAGAAAGTGGGGCAATAGAAGAGATAACTGGTTTGTTGAGG
CATTCTTCCTTGACATCTGAGGTGAAGGAGCAAAGTATTTGTACTCTATGGAATCTGTCT
GTAGATGAAAAGCTCAGAATGAAAATTGCTAACACTGATCTTCTGCCGCTAGTAATCAGG
TCCCTGGAGGATGAGGATATTAAAGTGAAGGAGGCAGCTGGAGGGGTTTTGGCAAATTTG
GCATTAAGCACATCTCTTCACAGCATCATGGTTGAAGCAGGTGTTATTCCAAAATTGGCA
AAGCTTTTAAGAATTGATGTAGAAGGATCTAAAGTCATTAAAAAGGAAGCAAGAAATGCA
TTGTTGGAACTTGCTAAGGATGAATATAATAGAATTCTCATCGTTGAGGAGGGTCTGGTC
ATAGTGCCAATGATTGGTGCAGCTGCCTACAAGGCCTTGACACCAGGTTTGTACTCATGG
CCTTCTTTACCTGATGGTACAAAGATCGAACAGAGTTCCAAAGCTCCCTCAAAGTATGGC
GCCTCTGAATTACTCCTTGGATTGAATATTGATGACAAGAATGCTGAAATAGATAAAAGC
AAGATAAATGCAGTAGTTGGGCGTACACAGCAACAGTTTCTTGCTCGTATTGGGGCTATA
GAGGTGGAAGATGAAAGAAAATCCCAATCTGTATCCACAAGTCAGCGGTTTACACTTTTG
CCATGGATGGATGGTGTTGCTCGGTTAGTTCTGATTCTTGGGCTTGAAGATGAGTTGGCC
ATTTCAAGAGCTGCAGAATCAATTGCTGATGCATCTATTAATGAGCATATGCGGATCTCA
TTCAAGGAAGCTGGAGCCATGAAGCATCTAGTTCGACTTTTAGACCATAATAATGATTCG
GTTAGATTTGCTGTAACTTGTGCTTTGGAAAGGTTGTCTGTCAGCAACAGCATCTGCCAG
CTAATCGAAGCTGAAGGTGTTATATATCCTTTACTTAATGCTCTGAAGCACTCAGGGACA
TCTGAAACTTTGATGGAAAAGACTTTGGATATTTTGGCACGGATTTTAGACCCTGGTAAA
GAAATGAAATCAAAGTTTTATGAAGGACCAGTTAATGGATCAAAGAAGGGATTGAATGCA
ATGGGAAGGCCTGATGCCACTATTCAATTTGTTGGAAACATGGACGAGACAGCTGTATCA
AAATCAACTACAGGGAAAGATGTCATGGACTCTGCCATCATTGCTTGCCTTGTTGAAATT
TTAAAGACTCCATCCCCAAATTTGCAGAGAAAAGCATCTTCCATCCTTGAGTTCCTGACA
ATTATTGAGCCACACTTGGACACAATCCTTTCAGTAGACATTGAATCTGGTTTGGAAGCT
GTTTTCCAACAGAAGATTTTGGACGATACAGAATCTGATATGGGTGATCAGCGGCCAGAA
CTACATGCCTTGAAAGTCGAAGAAGCCGGTCTCGCTATATCTGCTGCATCACGCTTACTG
ACAAAATTACTTGACTTTGTGCAGTTTCGCCAAACAATAAATGCTGCACGGTTCACAAAA
TTGCTACGTAAAACTCTCAGGTCAAATATTCCTCTTCACAACAAAGACTGGGTTGCAGCT
TGCCTAGTTAAACTGAGTTCTTTGTCTGGTCCCAACCAAGATTTTGATGATCCAGTCAAC
CTGGAGGTAACTCTTTATGAGACTGTCCCAAGACTTGTTGAGCAGATCAAAACCTCTTTC
TCTCCAGAAGCACAAGAAGCTGCTGTTATAGAACTCAACAGAATAATTTCGGAAGGGGTG
GTGGATTCTACTCGTGCAGTTGCTGCTGAGGGAGGAATATTCCCATTAGTGAAGGTGATT
GAAGAAGGGAGTGAGAGGGCTGTTGAAGCTGCCTTAGCTATACTGTATAATATAAGCATG
GACAGTGAGAACCATTCGGCAATTATAGCTGCTGGAGCAATCCCAGCATTGAGGAGAATT
GTTCTTTCACAAGGGCCACAGTGGATGCGAGCGCTTCATTTGCTGAGGACTTTGCCTACA
TGA
>VIT_07s0031g00300.t01 cds chromosome:IGGP_12x:7:16533318:16534039:1 gene:VIT_07s0031g00300 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGCACCGACCAAATTTCCTCTTTGCAAGCCCTGTTGGCCCTTCTCTGGCGATCCGTA
ACTCGCAGTAGGCGTTTCCCAGAGGATCAAGAGAGCTGGTATGCATTTCTAATAGGTATG
AGACCAAGGATGCGTCCACCATTGCCCCAACAATATTTTGGGGCTGCAGCTCAGTCCGGA
ATCGTAACGATGAAAGCAGATGAGCTACTGGAGCGCGGTTTGGGTCATGCGGCTTGGCAG
ATGAATAAGATGGTCGCTGCCAATACTGCATTAGAAGCCACCAATTTCTTGGAATCCTGG
ATAAAAAACCCAATGCCCTTTCCACTTATAAATTTTATAATCAACAATTCTTTGTGCATG
AGCGGTTCGCCACGATTCAATGTGTACGGTACTGATTTTGGTTGGGGAAGACCAATTGCG
GTTAGAAGTGGAGGTGGGAACAAGCCTTATGGGAAGACCACCCTTTTTCAGGGAGCAGAC
GAAGGAAGCATTGATATTGAAGCTTGCCTGTTTGCTGAAACCTTTGAGGCTATGATGGAG
GATGCCGAGTTCATGGAAGCTGTCACCGTTTGA
>VIT_19s0014g05050.t01 cds chromosome:IGGP_12x:19:5376784:5377821:1 gene:VIT_19s0014g05050 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGACAAGTTCTAAACAGCTTGAAGTTCAATCAGAAGATCGAACTCCACAGAAATGGTGC
GTTTCATTGAGGGAAGACAAGTTTGAAGCATTTCTCTCCCAAGGCAACCCAACAGTGAGG
AAGGTTTTTGGTGATGGGTCACTGTTCAGCCCCTTCTTGTTCAGAAAATTCTTTGATCCT
TCTGATGCCTTCCCTCTATGGGAGTTTGAGTCTGATGTTTTGCTGTCTCATCTTCGGAGT
TCCGGTCAGACCACGGTCGATTGGCTCCAGACAGATAAAGACTATGTACTAAAAGCAGAA
CTACCAGGAGTTGGGAAAAATAGTGTTCAAGTCTATGTGGAAAATGGGAAAGTTGTGGAG
ATTAGTGGACTATGGAGGCATCAAAAGGAGCCCAAGACAAAGGAATGGAGAAGTGGGCAT
TGGTGGGAACATGGATATGTCCGGAGGCTTGAGCTGCCGGAAAATGCAGATTGGAGGAGG
ATTGAGGCCAGTGTGAAGGATGAAATATATTTGGAGATTAGAATTCCCAAGTGTGATATT
CCTCATGGAAAGGAAGAGGGAGCTGAAGATTCTGAATAA
>VIT_18s0001g04020.t01 cds chromosome:IGGP_12x:18_random:3653922:3657395:1 gene:VIT_18s0001g04020 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCTTCTTTTGGAAGAGTACAAGAAAAGCCTATGGAATCCAATGGTGCTCTTTCATTGT
CCTAAGGAAGTAGCTACTCAAGTCTCAGCATGTCCTCTCGTCCAAATTCCTAAACCCGAA
AATCGCCCTAGGGCAAAGTTTCACCCTAGCATTTGGGGTGACCAATTCATTACCTACACT
CCCGAAGATGAGGTTACACGTGCTTGCAAAGAGAAGCAACTTGAAGATCTGAAAGAGGAA
GTCAGAAGGGACTTAATGGCTGCTGCTGGTAACCCTTCGCAAGTCTTGAACTTCATTGAT
GCAGTGCAACGGCTTGGGGTGGCATACCACTTTGAAAGAGAGAGAAGAATCATTACAACA
TATTTATGA
>VIT_14s0128g00030.t01 cds chromosome:IGGP_12x:14:2616036:2620415:-1 gene:VIT_14s0128g00030 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCCATTCTTCACTTGTCTCTCTCTCCACGCCCCTTAAAACCTCCCCAAAACCCAAAC
CCCACCACCCCAAAACCCAGAATCCTCTGCAATTCCTCCAAGAGAGACTTCATACTCAAC
ACTGCTTCCCTCTGTGCATTTTCTTTGTCAGCACACTACCCAGTTGCCATAGCCTTTGCT
GATACTTCCCCATCTTCAAAATCCATACTGTCTGCCATAGCAAACACCAAAACTTGGTTT
CAGTTCTTTGGTGATGGGTTCTCCATCCGGGTTCCACCTGAGTTTGAGGACATTATGGAG
CCTGAGGATTTCAATGCTGGATTGTCTCTTTATGGAGATAAGGCAAAGCCCAGGACATTT
GCAGCTAGGTTTGCATCTTCGGATGGATCAGAAGTTTTGAGCGTTGTAATTCGGCCTACC
AATCAGCTGAAGATCACCTTCTTGGAGGCCAAAGATATTACTGATTTAGGTTCCTTGAAG
GAGGCAGCAAAAATCTTTGTCCCAGCTGCGGCAACTTTGTACTCTGCCCGAACAATAAAA
ATAAAGGAAGATGATGGTTTCAGGACGTATTACTTCTATGAGTTTGGTAGAGATGAACAG
CACCTAGCTGTAGTTGCTGCTGTTAACGGCGGAAAGGCTTTTATTGCTGGAGCAGCTGCC
CCACAGTTTAAGTGGGATGATGACGGTGTCAAGCTTCGTTCTGCTGCTATATCACTGACA
CTGTTATAG
>VIT_04s0023g01020.t01 cds chromosome:IGGP_12x:4:17429935:17435841:-1 gene:VIT_04s0023g01020 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAGCAAAGCTGAAAATGAAAAAAAGGGGGGGCAAAAAGGAAAAATTGAGAAAGCACCA
ACAAAGACCCATTTGATGCCTTCTCTTTTTCTCTTTACAACACCGCCTCTTCCACCTGTT
TTCTCTCACTCAAAGGTCCACAACCCAATTCCGATCGCCCACAAGTCCAATTTTGCAAAT
TCTATGTCCCAAGACTTCCACCAAGGTATCTTCAGTTTCTCGAATGGGTTCGAGAGATCG
GCGGTGACACACCAAGAACAGCAGCAGCAACAGCAGCACATAACACAGCAGATCCGGAGG
GATAAGCTGAGGGTGCAAGGGTTCGAACCGCCACCGCCATTAGTGGCCATAGAAGAAGAA
GAATCTGGTGGGCTTCCCGTGTACGAGACAGCTGGGATGTTGTCTGAAATGTTCAATTTT
GGTCCTGGAGCCACCACGGCCGCGGAACTGTTGGAGCATCAGCTGCCATCGAATTATCGG
AACCCGCGGCCAGCAACGGCGGTAACGGGGGTGAGTAACTCGGAATGGTATGGGAGCAGA
CAAGGGATGGTGGGAGGTTTGGGACCGTTGGGTGATTCAAAGAATCAAAACGTAAATAAC
CGTGACAGTCTAGCTCAGCATCATCATCAGATTTCAAGCATTAATGCGGACTCAGCTGCT
GCCATGCAGCTTTTCCTCATGAATCCGCAACCCAGATCACCTTCTCCACCTCCACAACCC
CATCCTCATCCCCATCCTCCTGCAACTTCTTCTACACTTCATATGCTGCTTCCAAACCAA
TCCACTTCCCTCCAAGGCTTTGCTACTGCTTCTGCACCAGGAGGGGGGGCTTTTGGTGCT
AGTGTAATACCTCCATCCCAATTCACATGGGTTCCTGATAGCGGTCATGAAAGCGGTAAC
AACCCTAGTGAAATTGGAGGAATTGTAGAAGGCCAAGGCCTTTCCTTGTCCCTATCCTCT
TCATTGCAGCATTTGGAAGCAGCTAAAGCCGAGGAATTGAGGATGGGAGACAGCGGCATG
CTGTTCTACGGCCAAGGAGGGGGTTCTTCTTCGGCTCAATATCCGTATAAGAGCTTGGGC
GGTCATCAACAGCCATTGCATTTGCAAGGGGGAGTGGGTCACAACCACCAAGTTCATGTC
GGGTTTGGATCTTCATTGGGAGCGGTGAATGTTATGAGGAATTCCAAGTATGTGAAGGCT
GCCCAAGAATTATTGGAAGAATTTTGCAGTGTTGGGAGGGGTCAGTTCAAGAAGAACAAG
TTTGGGAGACACAACACCAACCCTAATTCTAATCCAGGTGGCGGCAGTGCTGGTGGAGGC
GGCTCTTCATCCTCGTCAAAAGATCTTCCTCCTTTGTCAGCTGCTGATAGAATTGAGCAT
CAGAGAAGAAAGGTCAAACTATTATCCATGCTTGATGAGGCATGGAAGACAAATAGAAAA
TTCCGGCAAGTTTCCATGAATATTTTATACACCAGGGTGGATCGAAGATACAATCACTAC
TGTGAACAAATGCAAATGGTGGTGAACTCGTTTGATTTGGTGATGGGGTTCGGAGCGGCA
GTTCCATACACGGCACTAGCGCAGAAGGCCATGTCCAGGCACTTCCGGTGTTTGAAGGAT
GCAATTGCAGTACAACTGAAGCACAGCTGCGAGCTGCTTGGAGAAAAAGATCCCTCGGGG
ACTTCAGGAGTGACCAAAGGAGAGACACCGAGGCTGAGGCTGTTGGAGCAAAGCCTCAGA
CAGCAAAGAGCCTTCCATCAAATGGGAATGATGGAACAAGAAGCTTGGAGACCCCAAAGA
GGCTTGCCTGAACGTTCTGTCAACATTTTGAGATCCTGGCTTTTTGAGCACTTCCTTCAT
CCGTACCCAAGCGATGCAGATAAGCATCTGTTGGCACGACAGACTGGTTTATCGAGAAAT
CAGGTCTCGAACTGGTTCATTAATGCCAGGGTCCGGTTGTGGAAACCCATGGTGGAGGAA
ATGTACCAGCAGGAAACGAAAGAAGAAGAGGGATCAGAAGAGAGAGAAGTGAATCAGCTG
CAAAGTAGTGGGCTAGCACAGACACCAACACCTTCGACAGGTGCAGGAGGTGCAGCTGCA
GCCACAGCATCAACAACACCAACAACAACAACTACAGCAACGGGCAAAAGATCCGAAATC
AATGCAGCCGATGGCGACCCTTCACTCATCGCAATCAATAGACAATGCTTCTCGGAAAAC
CAAGCAAAACAAGCCACCTCCACTATCCCCACCACTACCTCCACCTCCGCTGACGTGTCA
CCACCTCCACCCGTATCCCAATGTTTTCCGACCACCCATGACTCTGACCTGCACCATCGA
CTCCCTGTTGATGACACCTGTCGCCGCGGAAGCCTTGTTTCTTCTGATTTCGGGACCACC
TCTACTAACCCTGACATTGGGTCAACACTCATAAGGTTCGGGACCACCGCCGGTGATGTC
TCCCTCACTCTCGGCCTCCGCCACGCCGGCAACCTCCCGGACAAGAGTCCCTTCTCCGTT
AGAGACTTCGGTGGCTGTTAA
>VIT_16s0115g00050.t01 cds chromosome:IGGP_12x:16:3563415:3564236:1 gene:VIT_16s0115g00050 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGATTTTGTGCGGGAGTCCTCATCCTTTTTTCGATAGAAAAACATCCATCGTGAGTAAG
TACATTAGCGAATTGGATGATTGCGAGAAGCTATTTATTCCAATGCATGACGATTGCCCT
GGTCATTGGTATCTGTGCGTCATTGACTTCAAACACTTTGATATCCAAATTTTGGATTCA
TTATGA
>VIT_09s0002g08260.t01 cds chromosome:IGGP_12x:9:8876008:8906108:-1 gene:VIT_09s0002g08260 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTGCCGTCTCACTCGACCTCGCGACCACCTTTCTCACCTTCGCTTCACGTCCTAGG
GTTCGTACCTCAGTGTTGCCCCTTCTTTGGAGGCCGAAGGCTTATGGTTCCCATTCTCTC
AACTTTCATTCGTTTCCGGTCCCTTCGAGGAGGATTGTTGCCGTCGCTGGCGTTTCCTCC
AAGCCCCAGAGGGACCGCCGTCGATTCTCGGCGGTGGCGGCCCAGACGACGCAGAGTGAG
GGCTCCGATGTGCTGACGAAAATCCCCCCTGATGATCGGATTCCAGCGACCATCATTACT
GGGTTCTTGGGCTCTGGGAAGACTACTTTACTAAACCATATATTAACTGCTGATCACGGG
AAACGCATTGCAGTGATTGAAAATGAGTATGGTGAAGTCGACATCGATGGTTCTCTAGTT
GCTGCAAAGACTACTGGGGCAGAGGACATAATTATGCTCAATAATGGTTGTCTCTGCTGC
ACTGTGAGGGGTGATCTTGTTAGGATGATTTCAGAATTGGTCAATAAAAAGAAAGGGAAA
TTTGATCATATTGTTATAGAGACTACAGGATTGGCAAATCCAGCACCAATCATTCAGACA
TTTTATGCTGAGGATCAGATTTTCAATGATGTCAAACTGGATGGCGTTGTTACTTTGGTT
GATGCTAAACATGCTGATTTTCACTTGGATGAGGTTAAGCCTAAAGGAGTGGTCAATGAA
GCAGTAGAGCAAATTGCCTATGCTGACCGTATTATAGTTAATAAGATTGATCTTGTTGGT
GAGCCAGAAATTGCTTCATTGGTCCAGCGGATAAAGAATATAAATCGCTTGGCTCATCTC
AAGCGGACAGAGTTTGGAAAAGTTGACTTGGATTATGTACTTGGAGTAGGAGGCTTTGAT
TTGGAGAGGATTGAGAGTGCTGTCAATTCAGAAGGTGTGAAGGAAGATCATGCCACTCAC
AGCCACGATCATGATCATGACCATGATCACCATGATCATCATCATCATGAACATGACCAC
AGACATGAGCACAATGATCACCATTCCCATGATCACACTCATGACCCAGGTGTTTCTTCA
GTCAGCATAGTTTGTGAAGGGAGCTTGGACCTTGAGAAGGCTAACATATGGTTGGGTACA
TTGTTGTTGGAACGTAGTGAAGATATATATCGGATGAAAGGTCTCCTTTCTGTTCAGGGT
ATGGATGAGAGGTTTGTCTTTCAGGGAGTTCATGATATATTCCAAGGTTCACCTGATCGG
TTATGGGGCCCAGATGAACCAAGAGTAAACAAGATCGTGTTCATAGGGAAGAACTTAGAT
GGAAAGGAATTAGAAAAGGGTTTTAAAGCTTGTTTACTGTCAAAATAA
>VIT_05s0049g01890.t01 cds chromosome:IGGP_12x:5:9358647:9364737:1 gene:VIT_05s0049g01890 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGATCGATTTGCAGAAAGGGATCCAACGAGGAGTTCTTGTTCTCCTGATGAGTGCACCA
TATGGAAGAACTTCTTCTATTTTGAGGGAGAAAATCTGGCAAGTAGTATTCTATATTTCT
GTGAAGGAGTATATGCCAAGAGCAGTTGTGCCTATGATTTCTGTTCCTAAAGGAAACAAA
GACCAAGAATTTGTACAGAATGACAGAGCTAGATCAATCTTACGACCCCGAGCTGTTTTA
TCTAGTCCTGATAATGACAGGATGATTGGGAAGAGAAACAGGATGGAGAAAAAGCAACCT
TCACCTCCAAAAAATCATAAGTTGGTCCAGAGCAAGCATGCCCTATGCAAGATTGTCCCA
AGCCCTATCCAAAGCTGTATCCCAAGCCAAGTTGTCACTAGAAGTCCTAGAAACACAAGA
AGAAAGACCAAGCAAGAGGCTGGTGATAGTAACAGTGACCCCGTAAAAACAAGAAAAGGG
TCTAAGGAGGAGGCTAGTGATAGAAAAAGTGATCTTAAAGCAAAGAAAGGGCCAGCAGGA
GCCGTTCCAAGTGGGAAGCTGAACCAGGGAACAAGGAGACCGAGCTCTGTGAGAACGTGA
>VIT_07s0129g01110.t01 cds chromosome:IGGP_12x:7:16265333:16267378:1 gene:VIT_07s0129g01110 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGTCAGTCCCACTCATCCTCATCCGCCGGAGCAGCTCCGGCGCCTCCAGCGATCCCG
ATGGGTCCGGTAGTTCCGACATCTCTTCTAGCTCCGGCGATGTCTTCGGCTCCAGGGATG
TATCTCCGTGAATCTAATTCTAGCCTTCGATCCACCGCCAGATCGCCGCTCTACATTTCT
ATGCCGGAAACGGACGACTGTGTCGAGTCTTCGGAGGTTGATGGGCCAGATTATACTTCG
GATCTTCCAGACGATATATTGGCTTGCATTTTTCAGTTTCTAAGTACCGGTGACCGAAAA
CGGTGCTCTCTGGTGTGCCAGCGGTGGCTTCTGGTGGAGGGCCGGAGCCGTCACCGTTTA
TCTCTCAACGCGCAATCGGAAATTATTCCTCTGATTCCTTGCATCTTCTTCCGGTTCGAC
TCTGTCTCGAAACTTACTCTGAAGTGCGATCGCAGATCAATCAGCATAAGCGACGACGCT
TTGATTCTTATCTCGAACTTGTCCAAAAACCTAACTCGCCTCAAGCTTCGCGGTTGCCGT
GAACTCACCGATGTCGGAATGGCCGCATTGGCTAAGAACTGCAAGGGTTTGAAGAAGCTC
TCGTGTGGTTCCTGCACTTTCGGCACCAAGGGCATCAACGCAGTACTCGATCACTGCTCA
GCTCTGGAAGAACTCTCTGTCAAGAGGCTTCGCGGTATGAATGACCGTGGCGTCGCCGAG
CCCATAGGCCCTGGCGTCGCCGCTTCTTCGCTCAAATCTCTGTGTCTCAAGGAGCTTTAC
AATGGACAGTGCTTCGAACGGCTTGTAGTCGCCTCGAAGAAGCTCAGAACACTGAAACTG
TTTGGCTGCTTTGGCGATTGGGATAGATTTCTTGAAACGGTAACAGATGGGAACAGTAAC
CTTGTTGAAATCCATCTAGAGAGGCTGCAAGTCACTGATATGGGCCTTTCAGCGATTTCA
AAATGTTTGAATTTGGAGATTTTGCACATTCTCAGGACCCCGGAGTGTACAAATTTGGGG
CTCGTGTCTGTGGCTGGAAATTGTAAGCTCTTGAGGAAGCTTCATATTGATGGATGGAGA
ACGAATCGAATTGGTGACGAGGGGTTGATTGCTGTAGCTAAACAATGCACTAACCTGCAA
GAGCTTGTTTTGATTGGTGTAAATCCTACTTCATCGAGTATAACTGCAGTCGCGTCCAAT
TGCCAAAAATTGGAAAGATTGGCTTTGTGTGGGAGTCAAACAATTGGCGATAAGGAAATT
TCAAGCATTGCAGCAAAATGCACGGCATTGAGAAAGCTATGTATTAAGGGATGCCCTATT
TCTGATCACGGGATGGAAGCTCTCGCTTGGGGTTGCCCTAATCTGGTTAAGGTCAAGGTA
AAGAAGTGTCCAGGAGTGACCTGCGAAGCTGTAGATTCGTTGAGAGCAAGAAGGGAAGCA
TTGATAGTAAATTTGGATGCTGTTGCGGTTGAAACTTTGGATGCAAGCACTAGTGATGGT
GGAGCCCAAGAAGATGGACAGGAACCTCCCCCAATGGTAAGCCAAGTAACTGTTGTTGAT
GGTCCTTCGGGCAGTAATGGTCTATCAGCATTGTTCAAGTCAAAATTTGGCCATTTTGCA
GGCAGGAACTTAGTGGCATGCGCATTCGGAAGGTGGTCAAACAGTAGAGGTAGTTCTGCT
GACGGCAAATGA
>VIT_11s0052g01160.t01 cds chromosome:IGGP_12x:11:18936290:18937226:-1 gene:VIT_11s0052g01160 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTCGGACGATTATGAAACCCCGAGTCCTGATGGAACCCAGTTTCCGGATGGCTTGAGG
GTCCTGGCGGTTGATGACAATATAGTTTGTCTGAAAATCCTCGTAACTTTGCTTGAGCAA
TGTCGGTACAAAGTTACTGCTACAACGAAGGCTTGTGAAGCTCTGGAGATGTTGAGGGAG
AACCGAGAAAATTTCGATATTGTGATCACCGACGTGAAGATGCCGGACATGGACGGATTC
ACGCTTCTGAAGATCATAGGACTCGAAATGGACATACCAGTAATCATGACGTCTGTGAAC
GACGACAGAAGCACGGTCTTGAAGGGGATAAGGCATGGCGCCCGGGACTATCTGCTGAAG
CCTGTGAGGGTGTTGGAGATCAAGAACATATGGCAGCATGTTGTAAGGAAAAATTTGTTT
GATTCCGGTAAGCCTGGCGTCAAGGAGGAAAAAGCTATGGAGATGGAGAAAAGCAAGGAG
AAAGGAGGAGGAGAAGAAGAAGAAGAAGAAGAAGATCATCCCAAGGAACATTCTTTTGAA
GATGGATCTGTCCGGAAGAAACAGCGGCTTAATTGGACGTCTGAGCTCCATATCAAATTT
CTCAACGCCATTCACCAGCTGGAAACAGCAGATAGTAGGTGTTTGATTTAA
>VIT_10s0042g00020.t01 cds chromosome:IGGP_12x:10:12691489:12692838:1 gene:VIT_10s0042g00020 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAAGCTCTCACAATTTTTTATCTTCTCTTTTATTTCGATTTCTCTTTTTGGATGTGTT
AATTCACATCAAGCCCTCAAATACAACACACTTGAACTTCCTTCAGGGGTATCTGGCCCT
GAAAGCATTGCCTTCGATTGTAATGGAGATGGTCCTTATACTGGGATCTCGGATGGTAAA
ATTTTAAAATGGCAAGGTTCCAAACATGGATGGAAGGAGTTTGCAATCACTTCCCCATTC
AGGATTCCTAAATTTTGTGATGGATCACTCAACCCTGCAATGGAACAAGTGTGTGGAAGA
CCATTGGGTCTTAAATTCAATGAAGCAACATGTGATCTTTACATTGCAGATGCCTATTTT
GGGCTATTGGTGGTTGGGCAAAATGGTGGAGTTGCCAAACAAGTAGCCATTAGTGCAGAA
GGAGTCCCATTTCGATTCACTAATGCTTTGGACATTGATCAAAACACCGGAGTTGTCTAT
TTTACCGATACTAGCACCATATTCCAAAGATGGGCTTATGCAATAGTAATGCAAATTGGG
GATAAGACTGGAAGGTTACTAAAATACGATCCAAGGACCAAAGAAGTGACGGTGTTGTTA
AGAGGCTTATCATTTTCAAACGGGGTTGCATTAAGCGAAGACAAATATTTTGTTTTAGTT
ACTGAAATGACTGCCGCCAAAATCACAAGATATTGGCTCCAAGGTCAAAAATCTCAATTG
AGTGACACTTTTACACAACTTGTTGGGTGTCCGGATAATATTCAAAGAAACATTCATGGG
GAATTTTGGGTTGCACAAAATAATTGTGGAAGACCAGAAGTAAAAGTTAGACCGGTAAGA
CTTAATAAAGAAGGGAAGATCGTTGAAGAATTAAGCGTAGATGTTGGCCCTTTGAGTGAA
GTCCAAGAGAAAAATAATAGTTTATGGTTAGGTTATGTGATTTTGTCGTATATAGGTGTG
TTAAATTAG
>VIT_04s0008g01770.t01 cds chromosome:IGGP_12x:4:1382423:1384601:1 gene:VIT_04s0008g01770 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTGTGACTTCCACTTCCGCCACCGCCTCCCTTCTCCGGCCAAATTTCAGAACGTCG
CCGCCACGACACGGCGGCCAATTCTCAAATTCAATTGCGATCGCGTTCAAGCCGCGAAGA
TTCCGGATAAGGAGCTCCGGTGATGCTCCGCTGGAAACTACAGATGAATCAGACTCAAAC
AGTCCTGTTGAGACTCCGAAGGGACCTCCGTCTTTGATCTCGGCTTTGAATGTTGAAAAA
GCTCTTCGCGGCATTGCGATTACTGATGCAGATCACTACGGCAGACTTGGACTTCAGAGA
GAATGCTCATACGATCAAGTTACAGTTGCATATAAGAGAAAGGTTGAAGAACTGAAGAGT
CAGGAATTGGATGAAGAGGAAGCTAACAACAAGCTTGGCCTCCTAAAGGAATCATATTCG
ATTTTGTCATCTCCGAAAGAGAGAAGATTATACGATTGGAGCTTGGCCAGAAGTGAGAAA
CGAGACAGATATGCCTGGCCTTTCGAGGTCGAGAAAGCAAAAACTCCCACAGAGGAGCCT
CCTGCTCAGGAACCGGAAGATGTGAGGCCTACTATTTTAGTGGGATACTTCTTGTTTGCT
TGGTTGATTTTATCCTTCACGTTATCTATCGCTCTCAATAGATAG
>VIT_17s0000g07550.t01 cds chromosome:IGGP_12x:17:8541793:8543606:1 gene:VIT_17s0000g07550 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGATTACCGATTCGATCACCAGCGCTGCGGCCTCGATCTCTAAGGAGTTCGGCAAGAAG
AAGAGGACGAACAGGACAGCAAAATTGAAGCAGTGCAAGCTCGATGCTCGCCGCGAGCAA
TGGCTTTCCAAAGTCAAGAACAATGGATGTAGGGGAGAATCGGAGGGTATTCCGGAATCT
TCAATGCATAAGAGAAATGAAAGCAATGAAAGCAATCGTTCATTAGAAAATTTAGAGGTG
AGGCCGAGAGGGGGAGAAAATGATGGATCCGTTCACCATGACAGTGATTCGGAGTCCCCT
GCAAACAGTCCCACAAGTCATATTAGTAGCATCTTGGGCAGTACTGATTCAGGAACGAAT
TATCATGCGAGCAGCAGTAGCAGTAGCAGCAGTGGTGGGTGTTGTTCAGGTAGTATCACA
GAAGAAGAAGAAGAAGAAGGGAATGATGAATGTTTGGATGATTGGGAGGCTGTTGCTGAT
GCTTTGGCTGCCGTTGACAAGCAGAAAATCCCAGTCCAGGAAGGCCATGTAGAACAGGAA
TCGCATGTAGAGCAGAAACCTGTGGTCCGTTCGGGTTCTCCTGGTGGAATAAGTAAGGAC
ACTGGCTTAGGAATTGAAATCCACAAACCAGAACATGTGGGAATGGTTCCTAGGGCCCCA
GCAAATGGACAAGCGTGGAGGGCTGATGATGCTTTCAGACCTCAGAGTTTACCGAATTTG
TCCAAGCAGCATAGCTTTCCCATGAATTCAGACCGGCATTATGGTCATGGAGGGGTCCCA
TGGGCTCGTAGCAGTGTTGCGGCCATTCCAATTTCATGCCCCATATGCTATGAAGATTTG
GATTTCACGGACTCTAGTTTTTTACCTTGTTCTTGTGGGTTTCGTCTTTGCCTTTTCTGC
CACAAGAGGATTCTTGAAGAAGATGGGCGCTGTCCAGGTTGCAGGAAGCCATATGATTGT
GATCCTGTTGAGGCAGAGGCCATTGTGAATGGGGGCAGCCTGACATTCCGGTTGGGTCGC
TCTTATAGCATGATTGCAAGGTCTTAG
>VIT_17s0000g06210.t01 cds chromosome:IGGP_12x:17:6769421:6770613:1 gene:VIT_17s0000g06210 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCAAAGCTTGTCCCTCTTCTGCTTTTGGCACTCTTTTCCATTTCCATGGTTGCAACA
AAGGTCATGGCAAAAGAAGCCCAATACCATCTTGACAGTGGGTCGTATGGTCCAGGGAGT
CTCAAGAGCAACCAATGCCCATCACAATGCACGAGGAGATGTAGCAAGACGCAGTACCAC
AAACCATGCATGTTTTTCTGTCAAAAGTGCTGTGCCAAGTGCCTGTGTGTACCCCCTGGC
TACTATGGGAATAAGGCAGTGTGCCCTTGCTACAACAACTGGAAGACCAAGGAGGGAGGA
CCCAAGTGCCCTTAG
>VIT_03s0017g01290.t01 cds chromosome:IGGP_12x:3:17178182:17181964:-1 gene:VIT_03s0017g01290 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAAACTGTGCCAAGGCCAAGACCTAGAGAAGTTTTAGGTGGTGTAGATAAGGAGGGT
GGTATTTTCTTGACATGGGAGGATTTGTCCGTGACTGCTTCCAATGGAAAAGGTGGCAGC
AGACTGCTCCTTCAAGGGCTTACTGGTTTTGCCAGGCCGGGCGAAGTCTTGGCTATAATG
GGTCCTTCTGGTTGCGGCAAGTCCACTCTTCTTGATGCATTAGCAGGAAGATTGGGATCC
AACATAAGTCAGAGTGGAATGGTACTTGTTAATGGCCATCAACAGACACTAGCTTATGGA
ACATCGGCATATGTGACTCAAGATGACACATTGATTACCACTTTAACGGTTGGAGAAGCC
GTGTGCTACTCTGCTCTGCTCCAGTTGCCAGACTCCATGTCCAAATCAGAGAAGAAGGAG
AGAGCAGACATGACCATAAGAGAGATGGGCCTGCAAGATGCCGTAAACACAAGAATAGGA
GGGTGGGGTGTTAAGGGCATTAGCGGTGGACAAAAGAGGAGAGTCAGCATATGCATAGAG
ATCCTAACACACCCCAAGCTTCTCTTCCTTGATGAACCGACAAGCGGGCTTGATAGTGCT
GCTTCATACTATGTCATGAGCAGAATCACAGGCCTTGATCGACAACATGGAAGGACTATC
ATAACATCTATTCACCAGCCCAGCTGTGAGGTCTTTGCACTCTTCGACAATCTTTGTCTT
CTGTCTTCAGGTAGAACAGTATACTTTGGTCCAGCTCATGCGGCAGATGAGTTCTTCTCT
TCAAATGGTTTCCCTTGCCCAACTCATCAAAACCCATCAGATCACTTCCTCAAAACAATA
AACAAAGATTTTGAACAGGACATTGAACAAGGTTTTGGGGGAAAGAAATCGAAAGAGGAA
GCAATTGATATTCTTACAAAGGCGTACAAATCATCTGGTAATTTCCAGCAAGTTCAATCA
CAGGTTGCTAAGATACATAAAAAGGAAGGTGGAGCCTTGAAGAAGAGAAGCCATGCTAGC
TTCCTTAACCAGTGTCTTGTTCTTACAAGAAGATCTTTCGTGAACATGTACCGAGATTTA
GGCTACTACTGGTTGCGCCTAGCAGTCTATATCGCATTGACTATAGCCCTGGGCACCATT
TTTTATAACGTTGGCCATAGTAACAGTTCCATTAAGGATCGAGGTGCAATGCTCATGTAT
GTAGCTTCATTCTTAACTTTCATGACTATTGGTGGATTCCCTTCTTTTGTGGAAGACATG
AAGGTTTTTGGGCGCGAGAGATTAAATGGGCATTATGGGTCGAGTGCATTTGTTGTTGGA
AACACACTTTCTTCAATACCATACTTGCTAGTGATTTCTCTGATCCCGGGCGCAATTGCT
TATTACCTAACTGGACTTCAGAAAGGATGTGAACACTCCATTTACTATGCTTTGGTGCTT
TTCACTTGTATGATATTGGTTGAAGGCCTTATGATGATTGTGGCGAGTATAGTCCCCAAT
TTCCTCATGGGTATAATAACAGGTGCTGGAATTCAAGGGCTACTGATGCTGAGTGGTGGG
TTTTTCCGATTGCCGGATGATTTTCCAAAACCATTTTGGAGATACCCATTATACTACCTG
TCGTTCAACAAGTATGCTTACCAAGGGCTGTACAAGAATGAGTTCCAAGGACTAAAATTT
CCTAATGATGAAGCTGGAGGGCCACCCATCATTTCTGGTGAAGAAATTTTGAGAAAGAGA
TGGCAAGTCGAAATGGTTTACTCGAAGTGGATTGATCTTGCCATCTTGCTGGGAATGGCA
GTTTTATATCGACTTCTGTTCTTGATTACTATCAAGACAACCGAAAAGGTAATCCCACTT
GTCAAGGCTTTGGTGTCAAGACCGAGCAAGCGATCAAAGCAGGTGAGGAAATTTGGGGAA
TGCATCACAATTTAG
>VIT_08s0040g00870.t01 cds chromosome:IGGP_12x:8:11857207:11860728:-1 gene:VIT_08s0040g00870 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGTTGTGGCTTCAAAATGGAGGTTTCTCCAAACCCTAATCCCTCAGCGGACTCTGAA
CCACTGGCAGTGCCGCCTCTGGACCCGGACTTCTTCTCTGATAACAGCAACGACGCTGCC
CTGCATGAAACCTTCATGTCTGATCTAGGTTTGGACGGCGTCGACTTCGATTTCACCTTC
GACGACCTCTACTTCCCATCTGAATCCGAAGATTTTCTTGCCGATTTTCCTTTGCCCGAG
GAAGGTTCTGGTGGTCATGATTCTGCAGATCGGAGCTTTGATGTTTCTAAGGTTTTGAAT
TCTCCTTCGCCCGAATCGGGGAATTGTGGCGTTGAGAGTTCTCTGCCGTGTCAGGTTTCC
GGAGACCGGAATTCCGATGTTTCTTCTATTGAGTTGGGCTGTTGTGATCAGAAGCTTTCT
CCGCCGGTGGCATCTCAGAGTTCCAGCGATCAGAATTTGGATGGTGCTAGGGTTTTGAAT
GTGCCGTCGCCGGAGTCTGGAAGCTGCGATCGGGGGTTTTCGGGACCGGAATCGTCTCAG
GGTTCCGGAAACGGTGGATCTGGGGTTCCGGGGGCAGTGAATTCCCCGTTGTTGGATTCT
GGTAATTCCGATCATTCTAGTTGGGTTCCATCTTCGCCCAATTTGGCCGATAATTCGTGG
GGTGTTGTTGATCAGAAAGTTAAATTGGAAGATTCTGGGAAAAATTCTGTGCCCAAGAGG
AAAAAAGAACAGGATGACTCAACAACTGAATCAAGGAGCAGCAAATTTCGGAGATCGTCC
ATATGCAGCGAAACCGCCAATGCATCGAACGACGAAGAGGAGAAAAAGAAGGCAAGATTG
ATGAGGAATCGTGAAAGCGCCCAGCTTTCTAGGCAGAGAAAGAAGCATTATGTAGAGGAG
CTTGAGGAAAAGATAAGATCAATGCATTCAACAATTCAAGATTTGACTGGTAAGATTTCA
ATTATAATGGCTGAAAATGCAAATCTTAGGCAACAATTCGGTGGTGGCGGCATGTGCCCA
CCACCACATGCCGGCATGTACCCTCATCCTTCAATGGCACCCATGGCTTATCCGTGGGTA
CCTTGTGCACCATATGTAGTGAAGCCGCAAGGGTCTCAAGTACCATTGGTTCCAATACCT
AGATTGAAACCACAGGCTCCTGTCTCGGCCCCAAAGGTTAAGAAAACGGAGAATAAGAAG
AATGAGGTTCCCTTGGTTCCAAAACCACAGCAGCCTGTGGCGGATCCAAATGTTAAGAAG
ACGGAGAATAAGAAGAATGAGACTAAAAGTAAGAAGGTTGTCAGTGTTAGTTTGCTTGGC
ATGCTGTCTTTTATGTTCCTTATGGGATGTCTGGTACCCTTTGTCAACATCAAGTATGGA
GGAATTAAGGAAACTGTTCCTGGTAGATCTGATTATATTAGCAATAGGTTTTCTGATATG
CACCGCAGGAGGATTTTGACAGTTAAGGACGATTTGAATGGGTCAAATTATGGCATGGGA
GTGGGATTTGATGATAGAATTCATAGTGAGAGAGGCCGAGGTGGAGGGTCTGGGTCAGAA
GTTAAGCAGAAAGGAGGAGGATCAAAGCCATTACCTGGTTCAGATGGGTACGCTCATTCA
CGTAATGCTAGTGAGCCTCTTGTTGCTTCACTTTATGTACCTAGAAATGATAAGCTTGTG
AAGATTGATGGCAACTTGATAATTCATTCTGTTCTGGCCAGTGAGAAAGCCATGGCATCT
CATGCAGCTCTTGCTAAGAAGAGTCCTAAACCTTCTGTTTCTTTGGCTAATGATGTTAGA
GAGACTGGTCTAGCAATTGCTGGAAATTTGGCTACAGCATTCCCTGTTTCTGAAGTTGGA
AGGAATAAAGGGAGACATCCTCACCTGTTCAGAAACCCGGCTGAACAACATAAGGCTCTT
GCATCTGGTTCTTCAGATACTTTAAAAGAAAATTTGCAGCCCACGTCAACCGATGGTAAA
CTGCAACAGTGGTTCCGTGAAGGCCTTGCAGGGCCAATGTTGAGCTCTGGCATGTGCACC
GAAGTTTTCCAGTTTGATGTTTCACCAGCTCCTGGAGCCATAGTACCAGTCTCCTCAGTG
GCCAACATCTCTGCAGAAAACCAGCAGAATGCTACTCACCTAAACAAGGGAAGGAATAGA
AGGATCCTCCACGGTCTTCCCATACCCCTTGCTGGATCCACCCACAACATTACTGAAGAA
GGCATGGGAAGAAATTCACAGAAAGACAACTTTCAAGGCAGTAATAAAAATGTCTCTTCT
ATGGTTGTTTCTGTTCTTTTTGATCCCAGGGAGGCTGGCGACAGTGATGGTGATGGCATG
ATGGGTCCCAAATCCCTCTCGAGAATATTTGTTGTTGTGCTTCTAGATAGCGTCAAGTAT
GTAACTTACTCATGTGGACTTCCGCTGAAGGCGTCTGCTCCTCATCTGGTGACTAAATGA
>VIT_04s0008g02850.t01 cds chromosome:IGGP_12x:4:2365579:2368890:-1 gene:VIT_04s0008g02850 gene_biotype:protein_coding transcript_biotype:protein_coding description:Proteasome subunit beta type [Source:UniProtKB/TrEMBL;Acc:D7SU52]
ATGGGAACGACTATCATTGGAGTCACCTACAATGGTGGTGTCGTCCTCGGCGCCGACTCC
AGAACCAGCACTGGAATGTATGTCGCTAACAGAGCATCGGACAAAATCACACAGCTGACA
GATAATGTCTACATTTGTCGCTCTGGATCGGCTGCAGATTCTCAGATTGTCTCTGATTAT
GTGCGTTACTTTCTTCATCAACACACGATACAGCTTGGGCAGCCTGCGACTGTCAAAGTT
GCTGCAAACCTTGTCAGGCTTGTATCATATAATAACAAGAACATGCTAGAGACTGGCTTA
ATAGTTGGTGGATGGGATAAGTATGAAGGTGGTAAAATATATGCAATCCCTCTTGGAGGA
ACAATTATAGAGCAGCCTTTTGCTATTGGAGGTTCTGGCTCCACTTACTTGTATGGATTT
TTTGACCAAGCATGGAAAGAGGGAATGACTAAGGATGAAGCTGAGCAATTAGTGGTTAAG
GCTGTCTCTCTTGCCATTGCTCGTGATGGAGCTAGCGGTGGTGTCATCCGCACTGTCATT
ATAAACTCTGAAGGAGTGACAAGAAACTTCTACCCAGGTGATTCTCTTCCACTGTGGCAC
GAGGAGTTGCCACCTCAGAATTCATTGCTGGAACTACTGCACTCTTCTAGTCCTGAGCCA
ATGAACGTGTAA
>VIT_18s0001g04160.t01 cds chromosome:IGGP_12x:18:3741241:3745559:1 gene:VIT_18s0001g04160 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTTTGCAGAATATTGGTGCTGGAAACAGGGATGATGCCTTCTATAGGTATAAGATG
CCCAAAATGATAACCAAGATTGAAGGTCGAGGGAATGGAATCAAGACTAATGTGGTCAAC
ATGGTTGATATTGCAAAGGCCTTGGCTAGACCTGCATCTTACACAACCAAGTATTTTGGT
TGTGAGCTTGGAGCGCAGTCCAAATTTGATGAAAGGACTGGAACTTCCCATGTCAATGGA
GCCCATGACACTCCAAAGCTTGCTGGGCTTCTTGAAAACTTTATCAAGAAATATGTTCAG
TGCTATGGTTGTGGGAACCCTGAAACTGAAATAGTCATTACCAAGACACAGATGATTACC
CTGAAATGTGCTGCATGTGGGTTTGTTTCAGATGTCGATATGAGGGATAAGCTCACAACA
TTTATCCTCAAGAATCCTCCTGAGCAAAAGAAAACATCAAAAGACAAGAAGGCAATGAGA
AGGGCTGAGAAGGAGCGGCTCAAGGAAGGGGAGGCTGCTGATGAGGAGCAGAAGAAGCTG
AAAAAAGAGGCTGTGAAGAAAAAGGGCTCTTCAGTTAGTTCCAAGGATGTGACTTCCAAA
GTTGCATCAACAAAGAAGACCACCAGTGTATCTGATGAGGATCGTTCCCCAACTGGTAGC
CAGGCTGATGAGAATGAAACAGAACCTGCTGATGAAAGTGATGATGATGTCCAATGGAAA
ACGGACCCATCTGTGGAGGCAGCTCAGCAACGAATCAAGGAACAACTGAGTGCTGTTACC
GCTGGGATGGTTATGCTGTCTATGGATGAAGAGAAGGCAAAATCAACAAAGAAGTCCCCG
AAACATGAAGAGAAATCTGAGCTCAAGGGAGCCCAAAATGGGACTAAATCAGGTAATAAT
CAAGAAAGGCTTGTTGATGAAATCAAAGAGTATCTGAAGAAGGGTCCTTCTGCAGTCAAA
CTCAAGAACTTTTTGGGATCCCTTTCAGGGACTTCCCAAGAAATCATTGATGCCCTGTTT
GAAGCTCTATTTATGGGCATTGGGAAGGGGCTTGCTAAAGAGGTGGCCAAAAAGAAAACC
TACCTGGCAGCAGTCACCCAGGAAGATCGTTCGCAGTCCATTCTGCTGCGTGCTATTGAG
TCCTTTTGTGGGAAATCAAATCCTGAGGCAGTAAAAGAGGTGGGCTTGGTTCTGAAAGCG
CTGTATGACAATGATTTGCTGGAGGAAGAGTTCATACTAGAGTGGTATAAGCAGGGCTTG
GCTGGTGGGAATAAGAACTCTAAGATCTGGAAGAATGTCAAGCCTTTCATTGAATGGCTC
CAGAGTGCCGAGTCTGAATCAGAAGAGGAGTGA
>VIT_16s0050g01920.t01 cds chromosome:IGGP_12x:16:18856483:18860368:1 gene:VIT_16s0050g01920 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGTTCCAACAAGAACCATCAATGGGCTGCCCAATCAATAACAAAAGGCCCTCGATGG
TGGCCGGAAAAGCGAGCTCGACACGGAGAAACAATTGCCCATGCAGTTTGGGAGATCACA
GAGCGAACTGTTGGAGTCTGGGCTTTTGTTTCTTCGTGTCGATCTCGCTTCCCTTTATGG
CAGAGCTTTTCTCACCCTTCAGACACTCTCCTCCCAAACCAACCTCTCACAGCTTCAATG
CAGCTCACATCCTCCTCACCGGCGCATGGTGGTTACTACACTATCCAGATGCTGCAGCAG
CCCACTTCCCTCAGCCTTGGACTCATCTACAACTTGCCCGACTCTTACATCACCTCGTTG
CAGTCTTACACCAACTACTCCTACTGGTCTGGACCCGATATATCAAACGTAACAGGCGAT
GTAGTCGCGGTTTTAGACAGGGCGGGGAGCTTTGGGATCATGCCATTAGTTCTTCGAAGA
CTGATACTCGAGATGAATGGGAATTTGAGGCTGTATCGTTGGGACGATGATGTGAACTGC
ACTCGCCAATGGGTGCCTGAATGGGCTGCAGTTTCTAACCCATGTGATATTGCTGGGGTT
TGCGGAAATGGGGTGTGTAGCTTGGACAGAAGCAAGACTAATGCCTCCTGTACATGCCTG
CCGGGGGCTTCTAAGGTGGGAGACAGCGGCCAGTGCTCAGAGAATTCGTCGGTGTCAGCT
GGGAAATGTGATAATAATCATCGGAATTCAACTGCTTCCAAGCTGAAGATGTCTATAGTA
CAGCAAACTAACTACTATTACCCTGAATCTTCGATTATAGCAAATTATAGTAACATGTCC
CAATTGTCAAAGTGTGGGGATGCTTGTTTATCAGACTGTGATTGTGTTGCTTCCGTGTAT
GGGCCGAGTGAGGAAAAGCCTTACTGTTGGCTGCTGAACAGCTTGGAGTTCGGTGGATTC
GAGGACACGAGTTCGACGTTGTTTGTGAAGGTTGGGCCTAATGGGTCACCTGAAGACAAA
GCAACAGGATCTGGGGATTCATCTGATGGCCTCCGGGACAAGGTCTTGGTTCTTCCAATT
GTTCTCAGCATGACTGTCCTTGTAGCACTCCTCTGCCTGTTGTTATATCACACTCTGTAC
AGAAGGAGGGCCTTGAAGAGATCCCTGGAAAGCTCCTTGAGTGTGTCCGGTGCGCCAATG
AATTTCAGTTACCGCAATTTGCAGTCCAGAACCGGCAATTTTTCGCAGTTGCTCGGCACA
GGAGGGTTTGGGAGTGTATACAAGGGAAGCCTTTCAGATGAGGCATTGGTTGCAGTGAAG
AAGCTTGACAAGGTTTTGTCTCATGGGGAGAAGGAATTCATAACTGAAGTGAACACCATT
GGCTCTATGCATCACATGAACCTGGTTCGCCTATGTGGCTACTGCTCGGAAGGCTCTCAC
CGGCTTCTGGTTTATGAGTTCATGAAAAATGGTTCCTTGGACAAGTGGATATTCCCCTCA
AAGCATTGCCGGGACAGACTGCTAGATTGGGGAACTCGTTTCCATATAGCCATTGCTACT
GCACAAGGGATTGCTTATTTTCATGAGCAGTGCAGGAATCGGATAATCCACTGCGATATC
AAGCCTGAAAACATACTTCTAGATGAGAATTTCTGTCCAAAAGTTTCAGACTTTGGACTA
GCAAAGCTGATGGGCAGAGAGCATTCACATGTTGTCACTATGGTGAGAGGAACTAGGGGC
TATCTGGCTCCAGAATGGGTTAGCAACCGGCCTATTACTGTAAAAGCCGATGTCTACAGT
TACGGAATGCTTCTCCTGGAGATTGTTGGTGGCCGGAGAAACCTTGACATGACCTTTGAT
GCAGAAGACTTCTTCTATCCTGGGTGGGCTTTTAAGGAAATGAGTAATGGGACGACAAGA
AAAGTTGCAGACAGGCGACTGGAAGGGGCAGTGGAGGAAGAGGAGCTAGAAAGAGCATTG
AAAACTGGCTTTTGGTGCATTCAAGATGAGGTTTTCATGAGGCCTTCAATGGGGGAAGTG
GTGAAGATGTTGGAAGGATCACTTGAAATCAACACACCGCCAATGCCACAGACAGTTCTG
GAGCTCATGGAGGAGGGCTTAGACAATGTATACAGAGCCATGAAGAGAGAGTTCAACCAG
TCCAGCTTCTTCACCATCAATAATAGTACCCATCCTTCATCAAGGGCTACATGTAGTTAT
TCCACAATGTCACCTAGATAG
>VIT_14s0036g01020.t01 cds chromosome:IGGP_12x:14:11517308:11520581:1 gene:VIT_14s0036g01020 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGATCGTTGATAAAATACCTACAAAAGCTTTTCTGAAATCCTCACAATCCTTGGCTGCT
GAAGAAAGCGATTGGGGGACAGTTAAGGTCGGCATCGTTTGTGCGTATGTTGTTTACAGA
GGGAGAGAAAATGGTAGGAAGATTCAGAATTTCACTCTGATGCAGATCTTTGTTAAGACC
CTTACTGGGAAGACTATAACCCTTGAAGTGGAAAGTTCTGATACCATTGACAATGTTAAG
GCGAAAATCCAAGACAAGGAGGGTATCCCCCCTGACCAGCAAAGGTTGATTTTTGCTGGA
AAGCAGCTTGAGGATGGCAGGACTTTGGCAGATTATAACATTCAGAAAGAGTCCACACTC
CACCTCGTCCTTCGATTGAGAGGTGGAATGCAAATATTTGTTAAGACACTCACTGGAAAG
ACCATCACCCTTGAAGTTGAGAGCTCTGATACGATTGACAATGTAAAGGCGAAAATCCAA
GACAAGGAAGGAATCCCCCCTGATCAGCAAAGGTTGATTTTTGCTGGAAAGCAGCTTGAG
GATGGCAGGACTTTGGCCGATTATAACATTCAGAAAGAGTCCACACTCCACCTGGTCCTC
CGTTTGAGAGGTGGAATGCAAATCTTTGTTAAGACACTCACTGGAAAAACCATCACCCTT
GAAGTAGAGAGTTCTGACACGATTGACAATGTAAAGGCAAAAATCCAAGACAAGGAGGGA
ATCCCCCCAGACCAGCAGAGGCTCATCTTTGCTGGTAAACAGCTTGAGGATGGTCGGACC
TTGGCAGATTACAACATTCAGAAAGAGTCCACCCTTCATTTGGTTCTCCGGCTGAGAGGT
GGAATGCAAATATTTGTAAAGACGCTGACCGGGAAGACCATCACTCTTGAGGTGGAGAGC
TCTGACACAATCGACAATGTGAAGGCGAAGATCCAAGACAAGGAGGGTATCCCCCCAGAT
CAGCAGAGGCTCATCTTTGCTGGTAAACAGCTTGAGGATGGAAGGACTCTGGCTGATTAC
AACATACAAAAGGAATCCACCCTTCACCTGGTTCTTCGCCTTCGTGGAGGTATGCAGATA
TTTGTGAAGACCCTGACGGGAAAGACGATCACACTAGAGGTGGAGAGCTCAGACACCATA
GATAATGTGAAGGCCAAAATTCAGGACAAGGAGGGGATCCCTCCAGATCAGCAGAGGCTG
ATCTTTGCAGGGAAGCAGTTGGAGGATGGTCGGACACTTGCTGATTACAACATTCAGAAG
GAGTCCACTCTTCACTTGGTCCTTCGTCTTCGTGGGGGGTCTGGGTTCTGA
>VIT_00s2221g00010.t01 cds chromosome:IGGP_12x:Un:41364309:41364703:1 gene:VIT_00s2221g00010 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCCCACAAAGCAGCGTGATGGCTATTATACTGGGCAGGCTGGTGACATCCCGGATTGC
CTCTATGAATGGCTTGCAAAATGGCATGGTCTTGGTTATGAGCATGCTACATGGAAGCTA
CAGAATGCTTCATTTCTGAATTCACCTGAAGCTCAGAGTCTTATAAGGGAGTATGAAAAT
GTCGCCGAAAAGCAAAGAGTGCTTCTGATCCTTCCATAA
>VIT_05s0020g01760.t01 cds chromosome:IGGP_12x:5:3474560:3474914:1 gene:VIT_05s0020g01760 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGATCGTGTTGGGAAGTTGGCGTCGCAAAAGGCAGTGGTGATCTTCAGTAAGAGTTCC
TGTTGCATGAGCCATGCCATCAAGAGATTGTTCTATGAACAAGGGGTTAGTCCGGCAATC
CACGAGCTCGACGAGGACTCCAGAGGGAAAGAAATGGAGTGGGCTCTGATGAGGCTAGGG
TGCAACCCCTCAGTTCCGGCTGTGTTCATTGGGGGGAAATTTGTGGGCTCTGCAAATACT
GTGATGACCCTTCATCTCAATGGCTCACTTAAGAAAATGCTGAAAGAAGCCGGAGCTATA
TGGCTTTAG
>VIT_11s0206g00040.t01 cds chromosome:IGGP_12x:11:7365757:7367391:1 gene:VIT_11s0206g00040 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCCACCTCCGTTAGAATTGCCGTCGTCGGTGATGTGCATGACGATTGGAATCTACAA
GAAGACACGAAGGCCCTTCAATTTCTGCAGCCAGATTTGGTGCTGTTTACAGGTGATTTT
GGTAACGAGAATGTTGAACTCGTTAGAAGTGTTGCTAACCTTGAAATGGCTAAAGTGGTT
ATTTTAGGGAACCATGATGCCTGGACTACTCAGCAGTTTTCTGGAAAGAAGAAAGATGGT
GTTCAACTTCAGCTGGAATGGTGA
>VIT_11s0016g04060.t01 cds chromosome:IGGP_12x:11:3306255:3323305:1 gene:VIT_11s0016g04060 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCCAGATTTGAGAAGTGGAGTTCGCCGATCAAAGAGAATCAACGATATCCAAGAAAAT
GCTGCCGCTTTAGTTCCTGCTACCCGGCGTGGTGCTGGAAGAGGTGATGACTCGAAAGCT
CAAGCCATAAAATCACCTTCACCAAAGCCATATAATCCAGCATTTTTTTATCCAAGGCCA
AGGCCAGCTGGAAGAGGTAGAGGGGCTAGAGCAATGAATCAAGATAAGAATGGCAAGCTT
TTTGGTACTGGAGTTGGTGGCCGGGGGCGTGTAGGCTTGGATTTGGCTGCTAGAGAGGTG
GTCACCATTCCAGATGAAGTGGTTGCGGAGAAGGGTGCAGAAAAGTTGGCTGCTGTGGAG
GAGGAAGGAAGCGCAAGTCCACTTCCTGAGAAGGTACAGATTTCCAATTCCCCTATGTAC
AAGCTAGACAGAAAGCTGGGTAAAGGGGGTTTTGGGCAAGTTTATGTTGGAAGAAGGGTA
ACTGGTGGCACAGGGCGCACTGGACCTGATGCTTTTGAGGTTGCTCTAAAGCTTGAGCAT
CGGAATGGTAAAGGCTGCAGTTATGGCCCACCTTATGAGTGGCAAGTCTACAGCACTCTT
AATGGTTGTTATGGACTTCCCTTGGTCCATTATAAAGGTCGCCAAGGAGACTACTATATC
CTTGTCATGGACATGCTAGGACCGAGTTTATGGGATGTATGGAACTCTAACAGCCAGATG
CTGTCTGAGGAGATGGTTTCCTGTATAGCTGTTGAGGCTATATCAATATTAGAGCAGCTT
CATTTAAGAGGTTTTGTGCATGGAGACGTAAAGCCAGAAAACTTTTTGCTTGGTCTGCCT
GGATCACCTAATGAAAAGAAGTTGTATTTAATTGATCTTGGTTTAGCTTCAAGATGGAGG
GAAGCGTCCTCTGGTCATCATGTGGATTATGACCAAAAGCCCGATGTTTTCAGGGGAACT
GTACGTTATGCAAGCGTACATGCTCATTTGGGAAGGACCGGCAGCCGAAGGGATGACCTT
GAATCATTAGCTTATACGCTAATTTTCCTCCTCCGAGGAAAGCTTCCCTGGCAAGGTTTT
ATTGGGGAGAATAAAGGATTTCTTGTTTGTAAGAAGAAGATGGCAACTTCTCCTGAGATG
CTTTGTTGCTTATGTCCTCCCCCTTTTCAACAGTTTCTTGAGATGGTGACCAACATGAGA
TTTGATGAAGAACCCAATTACATAAAGCTGATTTCCCTTTTTGATAACAGCATTGGTTCC
ATTGCATCTTTGCGGCCTATCAGAATAGATGGTGCTTTAAAGGTGGGTCAAAAAAGGGCA
AGGCTTTCTGAGCAAGAAGATGGTGGTCAGCCTAAGAAGAAAGTTCGGCTAGGTTCTCCA
GCTATGCAATGGATATCAGTTTATAACTCCAGAGCGTCGATGAAGCAGAGATATCACTAC
AATGTAATGGATTCAAGGCTTCATCAGCATGTGGAGAAAGGAAGGGAAGATGGACTGTAT
ATTAGCTGTGTAGCTTCGTCAACAAATTTATGGGCCATCATTATGGATGCAGGAACGGGG
TTCACATCCCAGGTTTATGAACTCTCAACCATTTTCTTACACAAGGAGTGGATAATGGAA
CAGTGGGATAAGAACTTCTATATCACTTCCGTTGCTGGTGCAAGCAATGGCAATGCTTTG
GTGGTAATGTCAAAGGGGACCCCTTATAATCAACAATCATATAAAGTGAGCGATGTATTT
CCTTTCAAATGGATAAATAAGAAGTGGAAAGAAGGCTTTTTTGTTACGTCCATGACCACT
GCAGGCAGCAGATGGGGCATTGTCATGTCCCGAAATGCAGGTTTTTCTAATCAGGTTGTT
GAGCTCGATTTCCTCTATCCAAGTGAAGGGATCCACAGAAGATGGGAGAGTGGATATCGA
ATTACCTCAACCGCTGCAACAGCAGATCAAGCTGCATTCATACTCAGTACATCCAAGAGG
AGAACACAAGATGTGACGCAAGAAACTCTCCGGACATCTGCTTTTCCTTGCACCCATGTT
AAGGATAAATGGTCAAAGAATCTGTATATTGCATCGATCTGCTATGGGAGAACTGTCTCT
TAA
>VIT_11s0149g00360.t01 cds chromosome:IGGP_12x:11:7256605:7262019:1 gene:VIT_11s0149g00360 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAATTCATTGAAAGCTTATTCTCTTCCACATCACTTGTACGAAACACAAGGTATGAT
GCAACTGCCGCCGCCGGCGACGGTGTTGGAAATCTTCACATTGCATTGAATGGGTTAAAT
GTGCTGCTCTTCATATGGCAGATCCCTACCGGAATCAAAATAGTATTCAAAGTGTTTGAG
TTTGCTAATTGGCATTGA
>VIT_19s0090g01590.t01 cds chromosome:IGGP_12x:19:7671515:7674046:-1 gene:VIT_19s0090g01590 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCGACGGCGGATTCTCCAAACACCGATTCTGATGCTGATTTCGAAAACCCTAACTCT
ACTGTTACCTCCAATTCTTCAGACGCTTTGAAAGCTAACCTTTCCGGTCCTCCTATAGTA
TGCCTTCTCAGGTTCGCCGGCGACTCAGTCGCTGGCGCTTTCATGGGCTCCATTTTCGGC
TACGGTTTGGGTTTGGTTAAGAAAAAAGGCTTTAAAGGATCCTTTGCAGAGGCCGGATCT
TCTGCCAAGACATTTGCAATTTTGTCTGGAGTTCACAGTTTGGTTGTCTGTTTTCTGAAG
AGGTTGAGAGGAAAGGATGATGTTGTGAATGCTGGAGTAGCTGGGTGTTGCACTGGTCTC
GCATTAAGTTTTCCAGGTACACCACAGGCTCTTCTACAGAGCTGCGTCACTTTTGGGGTG
TTCTCATTTATCATTGAAGGGCTTAACAAGCAGCAGCCAGCCCTTGCACATCCATTTTCA
ATGAGAAACGAAAGAGGGGGCAAAAAGGCACTTCCTCCCCTAGCATTCCCTCTTCCAGAT
GAGTTGAAAGAATCCTTCTCACACTTCTGCCGGTCCCTGCAAAAACCCAACAAGGGCAAT
TTTCCTGCAGCTCACTGA
>VIT_14s0068g01520.t01 cds chromosome:IGGP_12x:14:25235153:25236812:-1 gene:VIT_14s0068g01520 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTTTAAGAATCAGCTGCAAGAACTTGCCCAGAGAAGCTGTTTCAACCTCCCTTCTTAT
GCCTGCATCAGAGAAGGACCTGATCATGCACCGAGATTCAAAGCTTCTGTGAACTTCAAT
GGTGAGATCTTTGAGAGCCCCAGTTACTGCACCACGTTGAGGCAGGCAGAGCATGCAGCT
GCTGAAGTGGCTCTCAATGTCCTCTCCACAAGGGGTCCTTCAAGGTCTTTAACTGCCAGA
GTTCTTGATGAGACTGGAGTCTACAAAAACCTCCTCCAAGAAACTGCTCATAGAGCTGGC
TTGAACCTTCCAGTTTACACCACGGTGAGATCAGGTCCTGGCCATGTCCCTGTTTTCACT
TGTACAGTAGAGCTAGCTGGTATGAATTTTACAGGTGAGTCAGCCAAAACAAAGAAGCAA
GCTGAAAAGAATGCTGCAATAGCAGCTTGGTCTGCCTTGAAAAGAGTGCCAAACTTGGGT
TCATTATCCCATTTAAGTAAGGAAGCAGAGTCTCGTGAAGAACAGGTCGTGGTGGCAAGG
GTTCTCTCAAATTTCAGGTCCAAAGATGAAAGCAGACCAATCAGGAGGTGGGATCAGAAT
CAAGCAAGAAGAAGAATGGTGAGGGGTCATGGTGGTTCTGGTTCTTCATCCACTTCTAAT
AACTCCCAACAGTTTCAAAAGTGGAGGCCTATGGATCTATTAATGGATTCTGTCCCAGAA
GGTGGTACTGCACAAAATCAAAACTGCTTTGTAGCTCTTCTTCCTCCACCTCCACCTAGA
ACAGCTTCAAAGATCTTACCACCAATTTCACCCAGAGACACTCTATCTCTCTACCCATCA
ACCAGGCCTATCCCAGTACAAGCCATCGGCAGGTCACAAGTTAAAATGCCAGAGGTACCA
ACTCTGTTGGAAGAGCATCAAAGGGATGAGGAAGAATGGCTTGATGGGAAATCAAATCTC
ATCAGAAAGCCCACCGAAAAAGAGTGTCCCAGCAATGCAAATGCGAGCAGTGTCTATGGG
GCAAACTCTATCTACCGGCCATTTCCCTTGCCGAATGCTGGGAAGCTAAACACTTCACTG
CCTGATAGCCCTCATCAACCACATGAGCAAACCCATATCAAGAATAATCCTTTTGGGAAT
CCAACACCATCAGCAATGAAGGGTTCCGCAGGTATTCACATTCCCAGGACCATGGGCACC
GGAGGGTTCCAACCACACAGGATTGCCCCAGCAGTTCAAATCAGGTCAGTGATCCCAGTC
TGTGCAGCACCACCTCCTCCAATGAGACTCCCACCATCAAACCATCCAACAAGGAATGAA
GCTTCTCCATCAGCCTTGAGTGCTTCTTCTTCAATCCCCGCACATACAGGAGCCGGCTTA
AAGTTCAACAAGCCAGAGCTATACTCCACTCAACTCAGTTCTGAGTTCAACAAGCTACAG
TTGTGA
>VIT_18s0001g15280.t01 cds chromosome:IGGP_12x:18:13418393:13429810:-1 gene:VIT_18s0001g15280 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCGCTCTCCCAAACACAAAACTCAAAAACCCGTTTCCAAACCGGAGAGCGCCACCAAT
GCTACCGCCTCTTCCACTTTCTTTGATATCTACGGTCCAGAGGCTAAGGCTGAAGTTGTT
TTCAAGACTCCCGATGCCGACTCAACGTTGAATCTGCAAGACGTTCAAGGACTTGTAACT
TGGGTGCTTGCTGAAGGATTCATGCCATCGTGGATTTTTATTAAAAACAAACCCCTGATT
CCAAAAGTGGTTATGCTCTATGTCCCAGGCCTTGATGCAGCTTTGTACATGTCACAATCT
AAAATACTTAGTGGTTTGAAAGAATTCTGTGGCAATCCAAGGGCAGTTTTAGCTCTTAGC
TGTGTATCAGATAGAATGCAGACGATTGATGCACTCCTGACATGCAAGCTCAAAAGAAAG
AGAAATGAAGTTGATTCAGCATTGAAAAAACATGATCAGACATCTGAACAAGGGGGTTGT
AGTGGTGGTTCAAATAATTCATCGTCCATGGAAGTTTTGAAAGATTTACCTTTCCCCATT
ACATATTACACACTCACAGCAAAGGAACTGGAAGATAATGGATATTGTCATGATCAACCA
GGTTTTGTTTCGACTCTTCCTGCTCCTTCAGGATGTCGCCTCTATGAAATGTTGGCACTT
GATTGCGAGATGTGTGTCACAAGCGAGGGGTTTGAGCTCACAAGAATTAGTCTGGTAGAT
ATTAAAGGACAGGTCGTGTTAGATAAATTGGTTAAGCCATCAAATCGTATCATTGATTAC
AACACTAGGTATAGTGGAATCACCTGTGAGATGTTGAATGGGGTGACTACAGGTCTGAAG
GATGTTCAGGAAGATTTTCTGAAGCTGGTTTACAAAGAGACCATCCTAGTCGGACATTCA
TTGGAGAATGATTTGTTAGCTTTGAAGATCTCTCATGATTTGGTGATTGATACTGCAGTA
TTATACAAGCACCCTCGTGGTGCATCTTATAAAACTGCTCTTCGAGTGCTCACTAGGAGA
TTTCTTTCTAGGGAGATACAGGAATCAAGAAATGGACATGACAGCATTGAAGATGCAAGA
GCTGCTATGGAGCTGGCACTGTTAAAGATCAGACATGGACCTGAATTTGGTTCACCTCCG
TCATTTATGCGGAAGAAGCTCCTTACAGTTTTGAATGATTATGGCAAAACTTCCTCTTTC
ATTGATGATATTTCTATAGTTAGGCGATACACTTCTGAGGCATCCCATGCGTTTCCTGTG
TCTTCTGATGTTGAAGCTCTTTCAAAGGCCAAAAAGGAGGTAAAGAATGATAAGGTACAC
TTTGTTTGGACTCAATTCTCAGAATTGAATTCCTATTTCAAGAAACAAGCAGAGGACACG
GACAAGTTGAATGCAAAACTGGCAGAGATGATATCATTGCTTACTTGTAATAAGAAGTCT
ACCACACCAAAAGGCATCAAGTTTAGTGTGACTTCTGAATTGAAGGACATACTAACTTGC
ATTGACACTAGAATCCGAAGCCTCTACCATGAATTGCCTGCTAATACTATGCTTATAATT
TGCACAGGTCATGGAGACACAGCCATTGTCCATAGATTGAGGAAAATGCTCAGAGAGCAG
ATTGAAACCACAGTAAGCCGTGAGAAACTTGTAAAAGTCTTGGAAGAGCTCCAGGCCCAG
GCTGAGGTAGCTTTGTGTTTTGTGGGTGTGAAGCATTGA
>VIT_06s0004g06470.t01 cds chromosome:IGGP_12x:6:7194372:7194413:-1 gene:VIT_06s0004g06470 gene_biotype:protein_coding transcript_biotype:protein_coding description:Putative uncharacterized protein [Source:UniProtKB/TrEMBL;Acc:D7SJZ2]
ATGAGAGATTTTCCAAATGAGAGAAGAAAGTATTTAGATTAG
>VIT_14s0060g00450.t01 cds chromosome:IGGP_12x:14:418589:426137:-1 gene:VIT_14s0060g00450 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCCGTTTTATGGCTCGCTCCGTCGTCTCTCTCCGATGACTTATCCGTACGGTCAAGAT
AGTGTTGATCTCTGGTCTGAAATCGCAGCCACAGAGGAAGGGGAGGGAAACAGGAAACAA
CAGATTGCTGTTATTTACAGAAGAAGAAGAAGGACCGAGAACACTCTCAAAGATGTAGAC
ACAAACCAGTCCAGTTTGAATAATGGGAATCGGCTGAGTTTGGCTGCTCCAGTTAAGAGA
GTTAGTTGGAATCGTTCTCTTTCTATCAGAGGGAGGACGAGCATTGCGGTATTTGCATGT
GTGGAGTACCAACCTCAACAGAGGAAGCCCAGAAGGAAAGCAAAACCACCTCTTCCCAGA
GGAAAATTTGTGCAGCCTCAAAGCTTTGAACAGGAGCGGGCATACTTTCAAGAAGTTGAT
GCATATGAATTGTTGGAGGAAAGCCCCTCTCCCAAGAGGTTTGGTACATGGGCCATGGGT
GTCCAAAGTGATGACATTGTTTTACCACATTTATCCTCAGTATTAAACAAATGGTTAATT
GCCAAGAAGCTAAATTACAGTTATGGACCATCTGGCTCCCTATCTAAGATACTAGAAACT
CCAGCAATGCCTATGGAACCTATTTGTGGTGATGGTTTTGATGCTTTAACTGTGAAAACC
CCTGAGAAAGCTTCTCCGCAAGTCTGTTTGGGTTTGCATTCTGTTCAGGACAGATTTAAT
TCAAATTTCATGAATAAAGATGTTGTTGGAAGGCAAACAGGATCACAAAAGAGCAATGAA
GTGTCCTTGACCACAGGTGACGAGGGGTGTGAAGATATAGATGTGGCGATTAAGAAACTC
TCATTGACATCAAGGTCTGCATCATTGGGTGGGGACCACTGGGATTCATTTTCAGCACTG
CTAACAGTTTGTGAACAGTCTGCTCCATCGACTTTGTTAGATGTATTCTCGAAGTATTGT
GATCCAGAAAGCATTGTCAAAATCGGTGAAGGTACATATGGTGAAGCTTTCAGGGCTGGT
AAAACTGTCTGCAAAATAGTTCCAATTGATGGAGACTTACTAGTGAACGGGGAAGTACAA
AAGAGATCAGGTGAATTGCTTGAGGAGGCCATACTTTCCCGAACTCTTAATCATTTACGA
GGGGATGGGGGTCGTGTTAACAATTCCTGTACCAGCTTCATAGAAACGCTAGATTTAAGG
GTATGCCAAGGCCCTTATGATGCAGCCCTGATACGAGCATGGGAAGATTGGGATGAAAAG
CATGGTTCAGAAAATGATCATCCTAGAGAATTTCCAGAAAAACAGTGCTATGTTGTGTTT
GTTCTAGAACATGGTGGTAAGGATCTTGAAAGCTTTGTGCTTTTGAACTTTGATGAAGTA
CGGAGTTTATTGGTTCAGGTTACAGTTGCCTTGGCTGTGGCAGAAGCTGCATATGAATTT
GAACATCGTGATCTACACTGGGGTAACATACTTCTAAGTCGGAAAGATTCTGAAATGTTG
CAGTTCACTCTTGAGGGAAAGAATATGTTTGTCAAAACATTTGGATTGTCAATATCCATA
ATTGATTTTACTCTTTCCAGAATCAATACTGGCGAAGCTATACTTTTTCTAGACCTATCT
TCAGACCCAGAACTCTTTAAGGGTCCAAAAGGAGACAAACAGTCAAATACATACAGGAAG
ATGAAGGAGATAACTGAAGATTTCTGGGAGGGAAGTTTCCCCAAAACAAACGTGCTGTGG
TTGCAGTACTTGGTGGACATTTTGCTATTGAAGAAATCTTTTAAACGAACTTCAAAGGAT
GAGAGAGAGTTACGTTCACTGAAGAAGCGTATGGACAACTATGGCTCAGCAAAAGAAGCA
ACCTCTGATCCTTTCTTCACTGATATGTTTGTTGATCATGCCATTTGA
>VIT_16s0050g00510.t01 cds chromosome:IGGP_12x:16:17429551:17447121:-1 gene:VIT_16s0050g00510 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGTACTCATGTTGCTGGTATTGCTATATACAACTTTTCACCCAAAGGAGCCATTGTTG
AATAGAGTTGCAGCTGGAGCACAGATGATATCTTGTAAAATTGGAGACTCACGCCTAGGT
TCAATGGAAACAGGAACAGGCTTGACCAGAGCATTAATAGCTGCTGTGGAGGAAATCGAG
GACTGTACATTATGTGTCTTCCTATTTATAGTGACTCTCTTTTCCAGCTAA
>VIT_04s0044g01170.t01 cds chromosome:IGGP_12x:4:22551652:22554070:1 gene:VIT_04s0044g01170 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAACGAGGGCAACTCTTATTGGGAGAGAACCCGAGTGCTCAAAAGGTGGATCCAAAC
CATGGCAAAGATTGTGGTGGAGCCATGGGCTCCTCGGCATCAAGTACTTCCAAGGGATCC
CGAGATTTATCCAATGGCTCTGAATCGTTTCGAAGGCTAGAGGTGGGTGTACCAAACACC
AACTCCTCACAGAAGAAGCTCTCTTGGTTGAGATCCCAAATTGTGGGTGGGGACGCAGAG
TTCAGCTCCCCCTTTGGAGTCCGCAGGCTCACCTATGCTGATCATACTGCCTCAGGCCGG
TGTCTACGCTACATCGAAAACTACATCAACGATAATGTTCTTCCCTTCTATGGGAACACT
CATACCTGCGATAGTTTTGTGGGAAGCCGGACTACAAAAATGGTGCATGAAGCCACCAGG
TACATCAGGAAGTGCCTAGGCGGTCGACAAGATGATGCACTCATGTTCTGCGGCTCAGGC
ACCACTGCAGCCATCAAACGGCTACAAGAGGTAATGGGGATCACTGTTCCATCCGTTCTG
AGAGAGAGAGTATTGAAAACTTTTAGGAGCGAGGAAAGATGGGTTGTCTTTGTGGGGCCT
TATGAGCACCACTCCAACCTCCTGTCATGGAGGCAAAGCCTAGCAGAAGTGGTGGAGATT
GGTTTGGATGATGATGGCCTACTCGACATGGAAGCTCTAAGACTACAACTTGAATCTTAT
CGCCGCTCCAACCGCCCCTTGCTGGGTTCTTTCTCAGCTTGTAGTAATGTAACCGGAATA
TTTACAGACACCCGAGCGCTGGCTCAGCTTCTTCACCGATATGGAGGTTTTGTATGCTTT
GATTTTGCTGCAAGTGGTCCTTATGTGGAAATTGATATGAGATCGGGCGACATTGATTGC
TACGATGCCATTTTTTTAAGTCCACACAAGTTTCTCGGCGGACCTGGGTCCCCGGGTATC
CTTCTAATGAGCAAGGCGCTCTACCAACTCGGTTGTTCAGCTCCATCAACTTGTGGGGGT
GGGATTGTTGATTTTGTCAATGGCTTTAACGAAAAGGACACATTATATTTGGAGGACATA
GAGGGAAGGGAAGATGTTGGAACTCCACCCATCATCCAGAAAACCAGAGCAGCATTGGCT
TTCTGGGTAAAGGAATACGTTGGCTACAACGTTATAGAAGAAGAGGAGAACAATTACACT
GAAGCAGCACTGGAGAGGCTTCTACCAAATCCAAACATATGGGTTTTAGGAAATACAACC
GCAAAGCGTCAAGCCATCCTGTCATTCCTTGTTTACTCCACCACAAACTCTGCCTCAGAT
GACATGAGTAGAGAGGAAACAAAGGGAAGGTTTTACATGTGGAGAGAGACGGGGAATAGA
AAAGATAAGCCTCTTCATGGACCTTTTGTTGCAAAGCTCCTCAACGACCTGTTTGGCATC
CAAGCTCGAGGTGGGTGTGCTTGTGCTGGACCCTACGGTCACAGCTTGCTCAAGGTGGAT
GAGACCCAATCCCTTGCATTCAGATCCGCCATCCAAAAGGGTTATTCAGGAATCAAACCC
GGGTGGACGAGAATTAGCTTCCCCTACTACATGTCAAGCGAGGAGTTCGAGTTCATCCTA
GATGCACTGGAATTCATAGCTACTTACGGCCAGCGCTTCCTCCCTCTGTATCACTTCAAC
TGGAAAACAGGCAGCTGGAGCTTCAGGAAGAAGGCACTCAAAGATACCTCGACTCCAACA
CTCTCTCTCTTCAAGGCCATGCCAGCATTTAGTTCAATCAGTGATGGATCAAGACTACAC
ACCCATGCTGGCAATAAAGATGAAATAATCAGCAGATACGCATCATATCTGGCGACTGCA
AACAAAATCGCCAGTCTCCTTGAGAAGTTCCCTCCCCATCGTAGAATTCCAGAAGACATA
GATGTCAACCTCATCACATTCAGAGTGTAG
>VIT_02s0025g03810.t01 cds chromosome:IGGP_12x:2:3319376:3319775:-1 gene:VIT_02s0025g03810 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAAGGAGTTTTGGCTGACATAGAGAGCATGCTAGTTCAGGGAAGAATGGAATTGCCT
CTCAGCTTGTGTTTTGCAGTTTTGAGAGGAGATGACCTATTGTTGTATCAGTCGCTGAAA
CGTGGTTTGGATCTAAACGAATTGAAAAGCAACGGATGA
>VIT_11s0016g02420.t01 cds chromosome:IGGP_12x:11:1954285:1959529:-1 gene:VIT_11s0016g02420 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTTGAGAATCGGCGGAATTCTGAGGCCACTCTCAGCAGTCACCCTGCGATGTTTCTCT
AGAACCTTCTCTTCTTCCTATGTTTCGGAAAAGAGCAGTGTTGATGCGCTATACCCTAGC
TTCTTTCATCCCACAGCGGTTGTTCATCCTGATGCAGTAATCGGACAGGGGGTTTCGATT
GGTCCTTTTTGTACAGTTGGGCCTTCTGCAAAGCTTGGGGATGGTTGTCAGCTATATCCA
GGAAGCCATATTTTTGGAGATACAGAATTGGGGAAGCAATGCGTTTTGATGACTGGTGCG
GTGGTAGGTGATGATCTTCCAGGGCGTACAGTTATTGGATGCAACAACATCATAGGATAT
CATGCTGTGGTTGGTGTCAAATGCCAAGACATGAAATACAAGCCGGTTGATGAATGTTTC
CTTGATGTTGGTGACAATAATGAGATCAGAGAACACACATCTATCCATCGATCTTCAATG
TCTAGTGAAAGAACAGTCATTGGTGATAACAATCTTATTATGGGATCTTGTCATATTGCC
CATGACTGCAAATTGGGTAACAACAATATTTTTGCAAATAATACCCTTCTAGCAGGTCAT
GTTGTGGTGGAAGATTATGCGCACACTGCAGGGGCTGTTGTTGTTCACCAATTTTGCCGT
ATTGGCTCATTTTCTTTCATAGGTGGTGGTTCTGTGCTTTCAAAAGATGTCCCAAAATAC
ATGATGGTGTCTGGAGAAAGAGCTGAGCTCCGTGGTTTGAATTTTGAGGGTCTTCGACGT
CGTGGATTCTCAGACACAGAGATCAAGAGCCTGAGAACAGCATACCGAAAATTATTCATG
TCCATTGATGCAAAATCTGGGAGTTTTGAGGAACGTCTTGCTGAAGTGGAGCAGCATGAA
GAACTGGCTCATGTTCCTATTGTATCTTCCATGAAAATGGTCGTGGAATTTGCACGTTCA
GGCATTGGACTGGCTCTTGAAGAAATGCTGGAACTGCCTAAAAACAACCGAATTTTCAAG
CTGGTCCTGATGACCGAAACCCTAATTCTTCAATCTTTGTTGCCTTCTTAA
>VIT_00s2643g00020.t01 cds chromosome:IGGP_12x:Un:42582279:42582537:1 gene:VIT_00s2643g00020 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCAAGCTGAATTTGTCACTTATGCTGACCTAATTGTGAAGCCAAGGTTACTGCAGTGG
AAGGTCAGTATCAGATTGGAATCTACACTGTACGTCAAATTCAATATGGCAAGGAGATCA
CCTTTGATTATAATCCAGTCACAAGAGAATAAGGAAGAATACGAGGTTTCTGTTGGTTTG
TGTGGCAGCCAAGTTTGTCTAATAAGTTATTTGAATCTAACAA
>VIT_04s0008g02610.t01 cds chromosome:IGGP_12x:4:2148061:2148387:1 gene:VIT_04s0008g02610 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTCCGGGGTTTGGGTGTTCAAGAACGGTGTGTTTCACCTGGAGAATCCTCAGGCGGAG
TCGAATGGGCAAGGGGGCACCGGCCAGCGCAAGGTGCTGGTGTACCTGCCCACCGGCGAG
GTTGTATCGTCCTACAACTCGCTAGAGAGGATTCTGAGGGGGTTGGGTTGGGAGAGGTAT
TATGGAGGTGACCCAGACCTCTTCCAATTCCATAAAAGCTCTTCCATTGACCTCATCTCT
CTCCCTAGAGAATTCTCCAAGTTCACCTCCATTTACATGTATGATCTGGTTATCAAAAAC
CCCAACATCTTCCACGTTAGAGACTAA
>VIT_17s0000g00810.t01 cds chromosome:IGGP_12x:17_random:525725:526345:1 gene:VIT_17s0000g00810 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAGGGCGAGCTCTACAGAGAATGCCTGCGAAACCATGCCGCAAGCCTAGGCAGCTAC
GCCACCGACGGCTGCGGAGAGTTCACACTCGACGCCACCTCCCCCGGCGGCCTCCTCTGC
GCTGCTTGTGGCTGCCACCGCAACTTCCACCGCAAGCTCATCTCCAGTACCCCCTTCGCC
GAGGGACGGCAGCAGCAGAGCGCTGCGGCGGTGGAGTCCCCGGAGTCGGAGAGGAGCGAG
GGCCATAAGAAAAGGCTAAGGACGAAGTTCACGGCAGATCAGAAGGAGAAGATGCTAGCT
TTTGCTGAGAAGATAAGGTGGAAGATGCAGAGGAAGGAGGAAGAGGACGAGATCGAGAGG
TTCTGCAGAGGAGTTGGAGTGAGTAGGCAGGTTTTCAAGGTTTGGATGCACAACCACAAG
AACTCTTCCTCTTCTTCGTCTTCTGCTTCTACCACTCTCACTCAATAG
>VIT_13s0073g00560.t01 cds chromosome:IGGP_12x:13:14441307:14444078:1 gene:VIT_13s0073g00560 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTTTGGTAGGGCTCCCAAGAAAAGCGATAACACTAAGTACTATGATGTTCTTGGAGTT
TCCAAGAACGCTTCGCAGGAAGATCTGAAGAAGGCGTATAGGAAGGCGGCGATCAAGAAC
CACCCTGACAAGGGTGGTGACCCGGAGAAGTTTAAAGAGTTGGCACAAGCTTATGAGGTA
TTGAGCGACCCGGAGAAGCGGGAGATATATGATCAATACGGAGAAGATGCTCTGAAAGAA
GGAATGGGTGGTGGCGGTGGCGGCCATGACCCCTTTGACATATTCCAATCCTTCTTTGGT
GGCAACCCATTTGGTGGTGGTGGAAGCAGCAGAGGCCGGAGGCAAAGAAGGGGGGAGGAC
GTCATCCACCCCCTTAAGGTTTCTCTGGAAGATCTCTACAATGGGACATCCAAGAAACTG
TCCCTTTCTCGTAATGTAATCTGCTCAAAGTGCAAGGGGAAAGGGTCCAAGTCAGGCGCA
TCAATGAAGTGTTCTGGCTGTCAAGGATCTGGGATGAAAGTTTCTATTAGACACCTTGGC
CCCTCTATGATCCAGCAAATGCAACATCCTTGCAATGAGTGTAAAGGTACAGGTGAGACC
ATTAATGACAAGGATCGATGCCCACAGTGTAAGGGTGAGAAGGTTGTACAAGAGAAGAAA
GTGTTGGAAGTCATTGTAGAGAAGGGGATGCAAAATGGACAGAGGATAACATTCCCTGGA
GAAGCTGATGAAGCGCCTGACACAGTCACAGGCGACATAGTTTTCGTCCTACAACAGAAA
GAGCATCCTAAGTTCAAGCGTAAGGGTGATGACTTGTTTGTTGAGCACACCTTATCCCTG
ACCGAGGCACTCTGTGGATTTCAATTTATACTGACTCATTTGGATGGTAGACAGCTTCTC
ATTAAATCCCATCCAGGAGAAGTGGTCAAGCCTGACCAATTCAAGGCTATAAATGATGAA
GGAATGCCCATTTACCAGAAGCCATTCATGAAGGGGAAATTGTACATTCACTTTGCAGTG
GATTTCCCTGACTCCCTGAACACGGATCAGTGCAAAGCTCTTGAAGCAGTGCTGCCTCCG
AGGACTTCAACACAGTTGACTGATATGGAGATTGATGAGTGTGAGGAGACTACCTTGCAT
GATGTCAACATTGAGGAGGAGATGCGGAGGAAGCAGGCCGCCCAGGAGGCATATGAAGAG
GATGAGGATATTCATGGTGGTGCTCAGAGGGTGCAGTGTGCCCAGCAATAA
>VIT_07s0141g00280.t01 cds chromosome:IGGP_12x:7_random:179123:182403:1 gene:VIT_07s0141g00280 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTGCAGCGCCTCTAGGGCTTCTCAATCTCGAGGAATCGCCGTTATGGGGGTCTCGG
ACCGTGGATTGCTTTCAGCAATTAGAGCACATTGGCGAAGGAACGTACGGTCAAGTATAC
ATGGCCAGAGAAATCAAAACAGGAGAAATTGTTGCCTTAAAAAGGATACGCATGGAAAAT
GAAAGAGAAGGGTTTCCTATAACTGCTATCCGGGAAATTAAAATTCTAAAGAAGCTACAT
CACGAAAATGTTCTAAAACTGAAAGAGATTGTAACGTCTCCAGGTCGTGAGAAGGATGAG
CAGGGGCATCCTGATGGTAATAAATACAGAGGTGGCATCTACATGGTTTTTGATTACATG
GACCATGATTTAGCAGGCCTGTCTGATCGTCCTGGACTGAGATTTTCAATTCCTCAGGTC
AAGTGTTATATGAAGCAGTTACTGACTGGGCTTCACTACTGTCACGTCAATCAAGTACTT
CACAGGGACATCAAAGGTGCCAATCTTCTTATAAATAATGAGGGAATTTTAAAGCTTGCT
GATTTTGGACTTGCACGGTCATTTTCCAGTGACCATAATGGAAATCTTACAAATCGTGTT
ATTACTTTGTGGTATAGGCCACCAGAATTGCTGCTAGGAGCCACAAAGTATGGCCCTGCT
GTTGACATGTGGTCCGTCGGTTGTATCTTTGCTGAGCTTTTGTATGGAAAACCAATTTTG
AATGGGAATAATGAGGTTAGATAT
>VIT_10s0003g05590.t01 cds chromosome:IGGP_12x:10:10377113:10389364:-1 gene:VIT_10s0003g05590 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCCCTTTTCGCTGCTCTTTCTCAAACTCCGAGTCTCAGACCCTCAAATGCTTCTTCTT
CAACAACAGAGGCTAGTCATCTCCTCTTCACGCACCATCCTCATGGCCTCCAAACACCTC
CTCAAACCCACTCCTTCCACGCTGCCTCTCAAGTTAAACCTTTCCTCGCCCGGCATCATC
TCCGCCTTTCCTTTAAAACCCAACTCCAGAATCCTCCCAATCTCCCTCAAAACCTTCGCC
TTACCTTATACTTCCCATTCCAAAGTCCCCGGACCAGTTTATTCGGAGAACCCAGAAGAC
ACCAGTAATTCCTCCGCCCGACTCAACGTTTTGAAGAAGAAACTGGAGGTGATAGGCTTT
GACACACAAATGCTTAAAATTGGGCACTACAGTCACTTGACGTGTCCCACGTGTAAGGGT
GGTGATTCAATGGAGAAAAGCTTATCTCTTTTCATCACTTTAGATGGGGATTATGCTGTA
TGGGTGTGTCATCAAGGAAAATGTGGGTGGAGAGGTAACATACGGGCCTTTGTAAATGAC
AGCTCATCATATGGAAGGTTGAACCAAATTACCAAAATTAAGCCCAAAAGAGAAATCACA
GAAAAAAGTTTGGGTTTAAAACCACTTTGTAGTGAGCTAGTTGCATATTTTGGAGAGCGA
ATGATATCAGAAAAAACATTGGCAAGAAATTCTGTCATGCAAAAAACATATGGTGATCAG
TTTATTATTGCATTTACTTATCGAAGAAATGGGGTGCTTGTGAGTTGCAAATATCGGGAT
GTTAACAAGAATTTTTGGCAGGAAAAGGACACAGAGAAAATATTCTATGGTGTGGATGAT
ATAAAGGAAGCAAGTGATATAATCATTGTTGAGGGTGAAATAGACAAACTTTCAATGGAA
GAAGCTGGATTCTACAATTGTGTGAGTGTCCCTGATGGAGCGCCTCCGTCAGTTTCTACA
AAAGTGTTCGAATCTGAGGAAAAGGACATAAAATATCAGTATCTATGGAACTGCAAGGAG
TACCTGGAGAAGGCATCTCGCATTATACTTGCAACTGATGGGGATGCACCTGGTCTTGCC
TTAGCTGAAGAACTTGCTCGCCGCCTTGGAAGAGAAAGATGTTGGCAAGTAAAATGGCCT
AAGAAAAATGAAGTTGAACATTTCAAAGATGCGAATGAGGTGCTTATGTATTTAGGACCT
GATGTTCTGAAAAAAGTAATTGAGAATGCTGAGGTATATCCTATTCAAGGATTGTTCAAC
TTTAGCCATTACTTTAATGAGATTGATGCATATTATCATCACACTCTTGGTTTTGAGCTT
GGTGTTTCAACTGGATGGAGGGGTCTGAATGGATTATACAATGCACCCAAGGTGAAGCAG
TAA
>VIT_17s0000g01680.t01 cds chromosome:IGGP_12x:17:1243356:1245753:-1 gene:VIT_17s0000g01680 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCGGGACTCTGCCGCCTGAAATTGGCGGCGCCACTGCTGCTCCACCTTCGGAGACTC
ACTCTCAGCCGATCTTTCGGTGCAGCCGCAGCAGCTCAACCACAATTCAACGTCGATTAC
CATCCCGAGAGCGAGTACGAGCCCCTCCGTGGATCGGCTGCGGCGCCGATGGTAGATTCT
GAAGGTTCGGCGCCGAGCAGAGGAGTGCAGTGGGTGTTCATAGGAAACCCCGGCGCAAAG
AAGCACGTGTACGCAGGGAAACTCTCAAAGCTTCTACAGGTTCCTCACATTTCAATCGCG
AGCCTCGTTCGGCAAGATCTTCATCCTCGTTCTTCACTTTACGAACAGATTGCAAATGCA
GTGAACAATGGTAAACTTGTTCCGGAGAATGTCATATTTGGATTGTTGTCGGAGAGGCTG
GAAGCTGGATATTACAGAGGTGAGTGCGGGTTCATTCTTGATGGAATTCCTCGATCTGTG
AGCCAAGCGGAGATCCTCGACCAACTTGCTGTCATTGATCTGGTTGTGAATTTTAAATGC
GCTGATGATTTCTTTGTTGAAGACCGAGAAAGTGGCATTTCTTCCCATTTCACTACTAGC
AAGGAAGGTGCTTGGAAGGGAACAGTTCGGGTCTATTTGGAGCAGATCAAGCCACTAGAA
GATTACTACAGAAAACAGAAGAAGCTTCTCAACTTTCAAGTAGGCAATGCACCTGGGGAA
ACCTGGAAAGGGCTATTGGCCGCATTACATCTCAAGCATGTAGATGCTAAGCATTCTTCA
CAGAAATTGACTGCCGGATTCACCAGTCATTGA
>VIT_05s0094g01590.t01 cds chromosome:IGGP_12x:5:24864593:24868257:1 gene:VIT_05s0094g01590 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCTCAACTTGCATTTCACCCAATTTCCCCCACAAACTAAAACCCAACCTTTTGAGGGT
TGCCAATATAATCATCCCTCTGCGCCTCCCTATCAATATGGGCTCAGCATATTCAATGCC
ACCTATCAGACATGGCACCAAATGATGCCCAGTTCCATTCCGATGTTCTGCCACTGCGTC
GCGCTTCCTTCATCAGGGAAGCTGCTCCTCCTGGGAGGTTGGGATCCCACCACCCTCGAC
CCGGTTCCCGATGTCTATGTGCTCAATTTAATTGGCGAAGACGGGGCGAGGTGGAGACGC
GCAGCCCCAATGTCGGTGGCGCGATCTTTCTTTGCTTGTGCCGTGGTGGGACGCTCCACC
GTGTATGTGGCCGGGGGGCACGACAGCCACAAAAACGCTCTGAGATCGGCGGAGGTTTAC
GACGCGGAGGCAGATGAGTGGAGGACGCTGCCATCCATGTGGGAGGAGAGGGACGAATCC
CAGGGGCTGTCATGGGAGGGAGATTCCAGGTTTTGGGTGGTGAGTGGCTACAGCACAGAG
AACCAAGGTCGGTTCCGCTCCGACGCAGAGTGCTACGACCCGGAAACTGGTTGTTGGTCC
AAGGTGGAAGGGCTTTGGCCATTTCCAAGCAGCAGCCCCAGAGGTTGTGTGAGTGTCAAC
AGCGCCAGCGGCAGAGGACAATCTAAACACCAGTGGTGGCGGATCGCGGGAGAGGAGCAA
CAGCAGCAACAAACTGGGATAGGGGAAATAAGGGAGTACGAGAGGGAGGCGGAAAGGTGG
AGAGTGCTTAGTTCGATTCCACTTCCACATCCAGAATTTGGGTTAGGCAGATCATCCAAG
TGTCTCGTCAGTCTTGATGGAGGTGGGGATGGCAATAGTAGAAGAATGTTGGTGATGAGC
AGTGGTGGGGAAGGGAAAGCAGGGGCCTTCATTTTGGAGAGGAATGATAAAGGGAAAACC
AAGTGGAACCACATCCATGTTCCTCCCCAATTCACGGGGTTCCCATATGGTGATTACTTC
AGCATCACTGTTGCTGGTTATCCAGAGGCCCACCCCAATGTGATAGAAAGAGATGGCGTG
GCTAATTTGGAAGGATAA
>VIT_05s0020g03420.t01 cds chromosome:IGGP_12x:5:5188839:5200746:1 gene:VIT_05s0020g03420 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAAGAGGGAATGAGAAGTGGTGATCGTTCGGGCGGTTTGGTGAAGAGTAGGAACGCC
TCAGGATGTTTAATTATTAAAAAGAAAGGCGATGGGGTGAGTGGGGCTGGTTCTTCGGGT
TCGCAGGGGTTATTAGAATCCAAGAAGGAGAAGAAGAGACCGCGATTGGTTCTTAGCGAT
TCGGGTTCGAGTGATGAACTGTTAGAATCTCGTCGGCCAAGGGTTCTATCTGGGAGTAGC
CAAGCTGGTAATGGTGTAACTGTTTTTAAACAGGGCGTTGAAGAGAGAAATTTTGGTTGC
AATGGTGTAGTCGAGAGAAAGAGAAGTAGGTTAGATGTCTTTGAGTTTGACGAGTATGAC
AGAATTGAGGGGAAAAAGCAGAGGAAGAAGGAACAGATGGATAATGGGGAAGTTGGAGGA
AGAGGCTTTTTGGGTTCAAAGCAGGTGCTGCAAAGTAGCAGTCGAAGGGAATTTGAGACA
GGTTCAAGCAGACAAGATATTGTGTATAGGAGAAAACATTCTTATTTTGGAAATACAAGT
GGCTCATTAGGAGAAAGGAACAGGGGAACTGATTATTCTGAGACTAGCAGGTTTGAGATG
AAAAGGGATGGAACTCGGGTACCAGTTTCGTTGTTGAGGGGTCACTCTGATGAACCCATC
CGACTGCAGGGAAAAAATGGTGTTTTGAAGGTGATGCCAAAGAAGAAGAATGTGGGAGGG
TCTCTCAGAAGTTATGATCCCCAGGAAGCTGAAGGCATTAGACAGGTGTCTAGGCCTGTG
GATAGCATGAAGAGGAACATATTGATTCGCCCTTCATCTTATTCAGAAACAAAACTTCAT
GAGAAACCAGGTTCATTTGTTGGAGCAGAGAAAAAACACCCGAACTTGAGAAAATCATTA
CCCACTAAGAAGAGTAAAGCCAGCTACTCAGGATCAGAGGACAGTGACACATCATTGAAG
GTGGGTTCAAAGAGTGTGGAAGCCCATAGCTCTGGGAAAAGGGGAAAGAGTGAAGGAGAG
AGGACTCCACCGTCCGAAAAGCTCCCACCAACTAAAGGAAAGGAAGGAAAAGTTAAGCGT
GGTAGTGGCACCGAGAAGCAATTATTACGTGAACGAATAAGGGGAATGCTTGTTAATGCA
GGTTGGACAATCGATTATAGACCTAGAAGGAATAGAGACTACCTAGACGCTGTTTACATT
AACCCCACAGGAACAGCGTACTGGTCCATCATCAAGGCTTATGATGCTCTCCAAAAGCAA
ATTGATGATGAGGAGAGTAAATCAAAACCTAGTGGTGACCTCTCTCCCTTTTCTCCCATA
GCAGATGAGGTACTCAGCAAACTGACAAGGCAAACTCGTAAGAAGATTGAGAAAGAAATG
AAAAGGAAACAAAAGGATCATGCTGGTACTAAGAATACAGATGCATATACCAAGGATGAC
TCAGAGGATGCAGATGACATTAAGCATGAAGAGAAACTAAGCTCATTCATAAAGCAGAAT
GGCAAGTCGATTAAACGAACATTAAGGCACGATCGGGGTGAAAAACTATCTTTTGCTTCC
AATTCTTTGGTACATGGAAGGAAAAGTAGAAAAATTGGCAGATGTACTTTGTTGGTTCGC
AATTCTGGCAAGGGACTGAATTTGGAAACTGATGGCTTTGTTCCATATACTGGGAAACGA
ACTCTTCTGTCTTGGCTTATTGACTCTGGAACTGTGCAGTTAAGTGAGAAAGTGCAGTAT
ATGAATCGCAGACGCACAAAAGTAATGCTGGAGGGATGGATCACAAGAGATGGAATTCAT
TGTAGATGCTGTAGTAAAATCCTCACAGTTTCAAAGTTTGAAATTCATGCAGGGAGCAAA
CTTCGTCAGCCATTCCAGAACATAGTTTTGGACTCTGGGGTTTCCCTTTTGCAGTGCCAG
GTAGATGCATGGAATAGACAAGAGGAGTCTGAACGTAGTGGTTTCCACCCTATAGATGTT
GATGGTGATGATCCTAATGATGACACTTGTGGTATCTGTGGAGATGGTGGGGATTTGATC
TGTTGTGATGGGTGTCCCTCAACATTCCATCAGAGCTGCTTAAATATTCAGATGCTTCCA
TCTGGTGACTGGCACTGCCCTAATTGCACATGCAAATTTTGCGGAATGGCTGATGGGAGT
AATGCTGAAGATGATACAACCGTCAGTGAGCTAGTTACTTGCAGTCTATGTGAGAAAAAA
TATCACACATCGTGCATTCAAGGGGTGGATGCTGTCCTTTCCGATACCAATAATCCATCC
ACTTCTTTCTGTGGACAGGGGTGCCGGGAGCTCTTTGAACATTTACAGAAGTTTATTGGG
GTCAAACAAGAACTGGAGGCAGGGTTTTCATGGTCTCTCATTCATCGCACAGACCCAGGC
TCAGATACATCTGTCCGAGGATTTCCACAAAGGGTGGAAAGCAATTCTAAGCTTGCTATT
GCACTGACTGTTATGGATGAGTGCTTTTTGTCCATTGTTGACAGGAGGAGCGAGATTAAT
TTAATCCATAATGTTCTCTATAATCGTGGATCAAACTTTAATCGGCTGAACTACAGTGGT
TTCTACACTGCAATTTTGGAGAGAGGTGATGAAATAATCTGTGCTGCATCAATCAGGATC
CATGGAACCCAGTTAGCAGAGATGCCGTTCATTGGAACTCGCCATATATATAGGCGCCAA
GGGATGTGCCGTCGGCTTTTTTGTGCTATTGAATCGGCTCTTTGCTCTCTCAAAGTTGAG
ATGCTAATTATTCCAGCTATATCCGAACTCATGCATACATGGACTGTAGGTTTTGGTTTC
AATCCTCTTGAAGAATCCCATAAGCAAGAATTGAGGTCCTTGAATATGTTGGTGTTCCCG
GGTACAGACATGTTACAGAAGCTGCTTCTGGAGCAAGAAACTGCTGATGGAAACATGACT
GCTAGTCCAGGTACAAAGTCAGTTGAATCCAAAGGCAACAATTGTAATACACCTGATTTG
GAAAATAAATCTGATATAGATTCATCCAATGGGCATGATTTATCCATCCATAATCATTCC
ATTTCGCAACATTCAAATGACAGAAATGACAATGTCTGTGCTTCTGACTCTATTTCCCTG
ACCCCAGCTGTTCCATTGACTAATCCTTCTATCATGAGTGGTGCTTCAGATGCTCTTCAT
GAACCTGAAATCCAAGGCTCTGGTGAGGAGACGAGATGTTCTAATTCTGAGTCCGGGGAC
AAGTTGAATGAAGCTACTGAAGCCAAGTGTCCTTCTCCCTCTTATGCAAGTTGCAATGTT
CTTGAGATAGAAAAACATGTATTTGATTCTCCTGGCGAGGGTGATATGCATTCTCCTTCT
GAGGACAAAGTCGGTGATGCTCGTGACCCAAATGTCCAAGTCCCTGGTGAGGGGACTATA
TGTTCTAGTTCTCAGTCAAGGAACAAACTAGGCAAACCTGGTAGTGACTTCAACTGTCTA
TCTGCTTCTGAAGCAAGTCATAATGGAAAAGCCATGGTGGATTCTCCTGTTGAAAGTAAC
AGTCGGCCCTCTGATGAGTGTGAAGATGGTAATGGTCTAGAAGTAAATGCTGAAGCCCCT
GGTGAGGGGACCATTTGTTCTAACTCTCAGCCAAGTTACAAATTACCTGTATCTACTACA
GGTATGGACTTTCTCCCTGCTTCTGAAGTGAGTCATGGCATCCTTGAGGTGGAAAAGCTA
GTATCAGATTCTCTAGTTGAAGGAAATGTTCTGTCTTGTGCAGAGGGTGAAGCAGGTGAT
GCTCATGAAGTAAATACCCAGGTCTCTGGTAATGGGATTACAGGTTCTAATTCTTGCTTC
AAGGACAAAGTAGCTGAACCTCCTAGTGATGTGAAGCCCCTCTCTCCCTCTGATGAGAGT
TTCAATATCGAGTTCAAAAAACCTGTATTGGCTTCTCCTGTAGAGGTCAATATTCAGTCT
TCCACCAAGGGTGAAGTAGATGATGCTCATGAAGTAGGTGATTCAGTTGCTTCTGTTGAA
CCTGTTTCAAGTGAAATTTCTGCTCAGAAAATAACTGAGGAAGTTGATAAAAATCAAAAA
CCTCTTCCTGTTTCTACTTTTGATGGTACTGATGAGAGTACTATACAGTCCAACTCCAAT
TTTAATAATCAGAGTGCATTTGAGATGGAAGGTAAATCACATGTGGCTTTGGAAGTTGCC
TCTAATGCAAATGATTATGAAGAAAACCGGCTAAAGGTATCTGCTGAAAATTCAGGAACT
GATGAGTGTGAAGGGAAAGCTGGATCTATTAGTGTTTAA
>VIT_04s0023g03070.t01 cds chromosome:IGGP_12x:4:19652846:19656248:1 gene:VIT_04s0023g03070 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTGTGACACTAACTCCTCTTTTCTTCCTCATGCTTAGCTTCACCCCCTTCTTATCT
TGCGCTCAACGGAGTGCTGAAACTCTGGCTGAGATTGAAGCGCTCACGGCTTTCAAACTC
AATCTTCATGATCCGCTTGGAGTGTTGAACGGCTGGGATTCGTCAACGCCGTCTGCTCCA
TGCGACTGGCGTGGTGTGGGCTGCAGCAGTGGCCGAGTAAGCGACCTCCGCCTCCCTCGT
CTACAACTAGGCGGTCGACTCACTGATCACCTTGGTGACCTGACCCAGCTGCGCAAGCTC
AGTCTCCGTTCCAACGCCTTCAATGGTACAATCCCTTCTTCCCTCTCCAAATGCACTCTC
CTTCGTGCCGTCTTCTTACAGTACAACTCATTCTCCGGCAATCTTCCGCCGGAGATCGGC
AACCTCACCAATCTTCAAGTCTTCAATGTTGCCCAGAACCTTCTCTCCGGTGAAGTTCCT
GGCGATCTTCCTCTGACTCTGCGATACCTGGATCTTTCATCCAACTTATTCTCTGGTCAA
ATTCCAGCGAGTTTTTCTGCCGCATCCGATCTTCAGCTCATCAACCTCTCGTACAACGAC
TTCTCCGGAGAGATTCCAGTGACCTTCGGCGCGCTTCAACAGCTTCAGTACCTCTGGCTT
GATTACAATTTTTTGGACGGAACTCTACCTTCGGCGATCGCCAACTGCTCAGCCCTAATA
CATTTGAGTGTGGAGGGCAACGCGCTTCGGGGCGTAGTCCCGGTAGCGATTGCGTCTCTG
CCGAAGCTTCAAGTGATTTCGCTTTCGCACAATAATCTCTCTGGTGCGGTCCCATCTTCT
ATGTTCTGCAACGTTTCTTCGCTTCGGATCGTTCAGCTAGGGTTTAATGCCTTCACGGAC
ATTGTCGCGCCCGGGACAGCGACGTGTTCTAGTGTTCTGCAGGTTCTGGATGTTCAACAG
AATCTGATGCACGGCGTGTTTCCTTTGTGGTTAACATTTGTCACTTCCTTAACAATGCTG
GATGTTTCAGGTAACTCCTTCGCCGGCGCGCTTCCTGTTCAGATCGGAAACCTCTTGAGG
TTGCAGGAACTAAAGATGGCTAATAATTCGTTAGACGGTGAGATTCCGGAGGAGTTGAGG
AAGTGTAGTTATTTGCGTGTTCTTGATCTTGAAGGAAATCAATTTTCAGGGGCGGTTCCT
GCGTTTTTGGGTGATCTGACAAGCTTGAAGACTTTGTCCCTTGGGGAGAATCTCTTCTCC
GGTCTTATTCCACCGATTTTTGGTAAGCTCTCACAGCTAGAAACCTTGAACTTGAGGCAC
AACAATTTGTCCGGAACGATACCGGAGGAGCTATTGAGATTGAGTAACTTGACTACATTG
GACCTAAGCTGGAACAAGCTTTCGGGTGAAATTCCAGCAAATATTGGGAATCTGAGTAAG
CTACTTGTTCTGAATATTAGTGGTAACGCATATTCAGGGAAGATTCCTGCAACGGTGGGA
AATTTATTCAAGCTAACGACCCTTGATTTGAGCAAGCAGAAACTTTCTGGTGAGGTGCCG
GATGAGCTTTCAGGCTTGCCCAATTTGCAACTTATTGCTCTCCAGGAGAACATGTTATCT
GGGGATGTTCCTGAAGGTTTCAGTAGCTTAGTGAGTCTGCGTTATTTGAACCTCAGTTCC
AATTCCTTTTCCGGTCATATTCCAGCCACCTTTGGCTTTCTTCAGTCAGTGGTTGTTCTT
TCATTGTCTGAAAATCTTATAGGTGGGTTGATTCCATCAGAGATAGGCAACTGCTCCGAG
CTCAGAGTCCTTGAACTGGGATCAAATTCTTTGTCGGGTGACATTCCAGCTGATCTTTCT
CGTCTCTCGCATCTGAATGAGCTTAATTTGGGTAGGAACAATTTAACAGGTGAAATCCCT
GAAGAAATCTCAAAATGCTCGGCACTAACTTCTCTGTTGCTGGATACTAATCATCTTTCT
GGTCACATTCCAAACTCATTGTCTAATTTGTCAAACCTAACAACACTGGATCTCTCTACA
AACAACTTGACTGGGGAGATTCCGGCAAATCTTACACTGATCTCTGGCTTGGTAAACTTC
AATGTCTCGCGAAATGATCTAGAAGGAGAGATTCCAGGACTACTGGGTTCTCGATTCAAC
AATCCATCTGTCTTTGCCATGAACGAAAACTTATGTGGGAAGCCCCTGGATAGGAAATGC
AAAGAAATAAACACGGGTGGTAGGAGGAAGAGGCTGATTCTGTTATTTGCTGTGGCCGCA
AGTGGAGCTTGCCTCATGGCATTATGCTGCTGCTTCTATATTTTCAGCCTCTTGAGGTGG
CGCAAGAGGCTCAAAGAGGGGGCTGCGGGGGAGAAGAAAAGGAGCCCTGCGAGGGCAAGT
TCAGGAGCCAGTGGGGGCCGTGGCAGTACTGATAATGGTGGACCAAAGCTTGTTATGTTC
AATAACAACATCACACTTGCAGAAACAAGTGAAGCAACAAGGCAATTTGATGAGGAAAAT
GTGCTGAGCAGAACGCGATATGGTCTAGTTTTCAAGGCTTGCTACAATGATGGAATGGTT
CTCTCAATTCGCCGACTCCCTGATGGACTGCTAGATGAAAACACATTCCGCAAAGAGGCT
GAAGCACTAGGGAAAGTGAAACACCGTAACCTAACTGTCCTCCGCGGCTATTATGCTGGA
GCATCTGATGTCAGACTCCTGGTTTACGATTACATGCCCAATGGAAACCTCGCAACCCTC
CTACAAGAAGCATCCCACCAAGATGGTCATGTCCTCAATTGGCCAATGCGCCACCTTATT
GCACTTGGAATCGCTCGGGGCTTAGCATTTTTACACACAGCTTCCATGGTTCATGGCGAT
GTCAAGCCACAAAACGTCCTATTTGACGCGGATTTTGAAGCCCATTTATCAGATTTCGGT
CTCGACCGGCTGACAATTGCTGCCCCAGCGGAAGCTTCCACTTCCTCCACATCTGTTGGC
ACGCTAGGGTATGTCTCCCCGGAAGCAGTCCTAACAGGGGAAACCACAAAGGAATCAGAT
GTTTACAGCTTCGGCATTGTCTTGCTGGAACTTTTGACCGGAAAAAGACCTGTGATGTTT
ACACAAGACGAAGACATAGTGAAGTGGGTCAAGAGACAATTGCAAAGGGGTCAAGTCTCA
GAACTGCTTGAGCCAGGACTCCTAGAACTCGATCCCGAATCATCAGAATGGGAAGAGTTC
TTGCTGGGAGTGAAAGTGGGTTTGCTTTGCACCGCACCAGACCCTCTCGACCGACCCACC
ATGGCGGACACAGTGTTCATGCTAGAAGGTTGCCGTGTCGGACCCGATATTCCGTCGTCG
GCCGATCCCACATCCCAACCCTCGCCGGCATGA
>VIT_10s0092g00490.t01 cds chromosome:IGGP_12x:10:12053469:12059111:1 gene:VIT_10s0092g00490 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAAAAGCTACTTTCTCTTTTTGCTCATGGACGTCCTCTTCTCTTTCTATACATGCTG
TACAAGATAGGAAAGAGATCCAAAGGCAACATCTCTGCACAAAAGCTGCCCCTAGAGCCA
TGGAAACTACCTCTAATTGGAAACATGCATCAGCTGATTGATGGCTCACTTCCTCACCGC
TCCCTAAGTCGCCTAACCAAGCAATACGAGTCTCTCATGAGCCTACAACTTGGTGAAGTT
TCCACACTCATTATTTCATCACCAGAGATGGCCAAACAAGTCATGAAAACTCATGACATC
AATTTTGCTCAACGACCTCCTCTTTTTGTGGACATGAGTTGTATAATCCGTTACAGGTAT
AACTAA
>VIT_02s0087g00640.t01 cds chromosome:IGGP_12x:2:18145688:18147327:1 gene:VIT_02s0087g00640 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAGAAACACAGATTCGCTTCCCTTCTAATCCCCTCCATCATTGCCTTCCTTGGCCTC
ATGGCTTTTGGGTTGTGTGTCGCTGCCGAGTTCAAGAGATCGAAGAAGAAGGATGTCAAG
CTGAACGGGAAGTTGTGTTATTTGGCTGAGAGCGGTGCATTTCAACTGGGAGTTGCAGCT
TTGATCTGTCTCTTCATCGCTCATATCCTTGGGAACATGGTGATTTGCAGAAGAATTTGC
TCAGGGGAGAAGAGCAGCAGTGGCAAGGCTAAGACACCATGGATTACAAGCACTCTTCTG
GTTGTGTCATGGATCAGCTTCGGGGTTGCACTTATTTTAATGGGTACAGCCACAAGTATG
AACAGACGGCAGCCCTACAGACGAGGATGGTTGGATGGGAAATGCTACATAGTCAAAGAC
GGGGTGTACGTTGGCTCAGCAGTGCTAGTCATGCTTACAATAGGCTCCACGCTTGGCTCA
GTCATCATGACAGGAAGGAAGAGTCAGGTTGAACAAGGCCGGAGGATACACGCACAGCAG
CACAAGTAG
>VIT_11s0016g00800.t01 cds chromosome:IGGP_12x:11:726084:734938:1 gene:VIT_11s0016g00800 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTCACCACACAAGTGGATCCCTGCAAGTGGCTCTGTACTCTCAAGGTTACGAAGGCGA
ACCACGCGTCAAGATGACAACATGTTGATGACTCCCCATCCATCACTATCCGACCAACAC
TGGAAGATGGGTGAAGAATGGCATCAATTTTACTCCTCAGCCTATCAAGGAACATACAGA
AATCTTCACCAGCCAGCTGTCATAATTGGAGGATGCTTTGTAGTAGTAGCATTGATCCTT
TCCATCCTCCTCATTTTTCAACATCTCAGATCATACACCAAACCAGCAGAACAAAAATGG
ATTGTTGCAGTTCTTTTCATGGTTCCAGTGTATGCTTGCCAGTCTATTATATCTTTGTGG
AACTCAAGATTGTCTCTTGCTTGTGATATTTTAAGGAGCTGCTATGAAGCATTTGCATTG
TATTCTTTTGGTAGCTATTTGGTTGCCTGTCTAGGTGGAGAAGAAGTAGTCATAGAACTG
CTTGAAAATGAATCAAGAAAGCAGCTCAGCAAGCCATTGCTAGAAGGAGAGGATGAGAAA
CAATGGTTACAAGAAAAATCGCTAAGGAACTTCTTCATGAGACCATGTGTGCTTGGGAAA
GACTTGCTCAGAATAGAAAAATCCGGTCTTGTACAATACATGATTTTGAAGACAGTTTGT
GCGTTCTTAGCATTTGTGTTGGAGCTCTTTGGCGTTTATGGTGATGGGGAATTCAAGTGG
CGCTATGGGTATCCTTACATGGCTGTGGTGTTGAACTTTAGCCAAATGTGGGCATTGTTT
TGCCTCGTGCAATTTTACAATGTAACTCATGGAAGACTTCAATCAATAAAACCACTTGCA
AAGTTCATCAGTTTCAAGGCTATTGTGTTTGCTACATGGTGGCAAGGTGTGGGTATTGCA
TTGTTGTGTTCACTTGGAGTTTGGCCCAAGCAGGGGAAGTTTCAAACTGGTTTGCAGGAC
TTCTTAATATGCATAGAAATGGCCATTGCAGCAGTAGCTCACGTTTTTGTCTTCTCGGCA
GAACCGTATCGTTTCCTCCCTGCTTCTGAGTATGAAGAAGTGACCACAGAAACAACTATA
GCAGAGGTGAAGTTAGAGGAGGGTGACGAGGAGAAACCCTCTGTTCTTGAAACAACAGAA
ACTCAAATAAAGGCTCCGGGAACAAGTATCACTGAGAGTGTTCAGGACATTGTTCGAGAG
GGTGGTCAACATGTTGTCAAGGATGTTGTACTGACCATAAATCAAGCAATAGAACCTGTG
GAGAGGGGTGTGACTAAGATCCAGGAGACCTTCCACCAGATCTCGGTTGGTTCAGGCAAG
GAAGAAGACACAGAATTGGTACTAGAGAAACAGGAACATGACCACAAAAATCTTACAGAA
AGCGAAGAAAATCTTCCAGGAAGCCTAGATCTGAAGAAAATGTAG
>VIT_07s0191g00260.t01 cds chromosome:IGGP_12x:7:15058884:15060033:-1 gene:VIT_07s0191g00260 gene_biotype:protein_coding transcript_biotype:protein_coding
GATGAGGCTATTGAATCTGAGATGATTTTCCTTGGCCTTATAACCTTCTTTGACCCACCC
AAGGACTCAGCAAAGCAAGCTCTATGGCGACTGGCCGAGAAGGGAGTAAAAGCGAAAGTG
TTAACAGGTGACTCACTGTCCCTAGCAGTAAAGGTTTGTCAGGAAGTTGGTATCAGAACC
ACCCATGTGATTACTGGACCCGATCTTGAGCTTCTTGATCAGGATTTGTTCCATGAGACC
GTTCAAGGGGCAACAGTACTGGCTCGTCTCACCCCCACTCAGAAACTCAGGGTAGTACAG
TCCTTGCAGATGGTTGGAAACCATGTTGTTGGGTTCCTGGGTGATGGAATAAATGACTCA
CTTGCATTGGACGCTGCCAATGTTGGTATATCAGTTGATTCTGGAGTCTCAGTTGCAAAA
GACTTTGCTGATATTATATTACTTGAAAAGGACCTGAATGTACTTGTTGCTGGAGTTGAG
CGGGGTCGGCTCACCTTTGCAAACACTATGAAGTACATAAAAATGTCAGTTATTGCCAAT
GTGGGAAGTGTTCTTTCGATCCTTATTGCAACCCTGTTCCTTCGATATGAGCCATTGACT
CCTAGGCAGCTCATCACTCAGAACTTCTTGTATAATTTTGGCCAGATCGTTATTCCTTGG
GACAAGGTGGAAGAAGATTATGTGAAGACCCCACAGAGCTTTTCCAGGAAAGGCTTACCC
ATGTTCATTTTGTGGAATGCACCAGTGTGCACCCTCTGTGACTTAGTCACGCTTCTGTTT
GTTTACTTCTATTATAGAGCCTACACTGCAAATGATGCTAGATTCTTCCATTCAGCTTGG
TTCACTGAAGGGCTTCTCATGCAAACCCTAATTATACATTTGATTCGGACTGAGAAAATT
CCCTTCATTCAAGAGGTTGCCTCCTGGCCTGTGATCTGTTCTACTGTCATTGTTTCTGCC
ATTGGAATCGCAATTCCCTTCACGCCAATTGGGAAAGTCATGGACTTTGTCCGGCTGCCA
TTTTCATATTATGGGTTTTTGGTTGTACTTTTCATTGGGTATTTTTCTGTTGGCCAGGTG
GTTAAGAGAATCTACATTTTGATCTACCACAAATGGCTGTAA
>VIT_04s0008g07050.t01 cds chromosome:IGGP_12x:4:7150219:7155563:1 gene:VIT_04s0008g07050 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAGGCCATTGCACTCACTCAGTCAATCTTCTTTCACCGCTTTATACAGGGCTTCAGTC
AACCATTGTTTGGCGATCAAATCAGGAACAACTGCAAGCATATACACTGCCAACAATATC
ATAAGTGGATACGCAAAATGTGGAGAGATACGTATTGCTAGCAAGATGTTCGGTGAAACG
TCGCAACGGGATGCTGTGTCTTGGAATACAATGATTGCAGGGTTTGTGAATTTGGGGAAC
TTTGAGACTGCACTGGAGTTTCTAAAATCCATGAAAAGATATGGGTTTGCGGTTGATGGG
TATAGTTTTGGAAGTATACTTAAGGGTGTTGCTTGTGTTGGATATGTTGAGGTTGGGCAG
CAAGTGCATTCCATGATGGTTAAGATGGGTTACGAGGGGAATGTGTTTGCAGGTAGCGCA
CTCTTAGACATGTATGCGAAATGTGAGAGAGTTGAGGATGCATTTGAGGTGTTTAAGTCT
ATAAATATTCGTAATTCTGTTACCTGGAATGCTTTGATTAGTGGGTATGCTCAAGTGGGT
GATCGGGGGACTGCATTTTGGCTATTGGATTGTATGGAGCTGGAGGGTGTGGAGATTGAC
GATGGGACATTTGCTCCACTTTTGACATTGCTTGATGACCCAGATTTGCACAAATTGACA
ACGCAGGTTCATGCTAAAATTGTGAAGCATGGGTTGGCATCTGATACTACTGTGTGCAAT
GCCATAATCACAGCGTACTCAGAGTGTGGGTCCATTGAAGATGCTGAAAGAGTGTTTGAT
GGTGCTATTGAGACACGAGATCTAGTGACATGGAATTCTATGCTGGCTGCTTACCTAGTA
AATAATCAGGAAGAGGAGGCATTTCAGCTCTTCCTTGAAATGCAAGTGCTTGGGTTTGAA
CCAGACATCTATACATACACTAGTGTCATAAGTGCTGCTTTTGAAGGTTCACATCAAGGC
CAAGGAAAGTCCTTACATGGATTGGTAATCAAAAGGGGATTGGAATTTTTGGTACCGATC
TCTAATTCATTGATTGCCATGTATCTCAAATCACATAGCAAATCCATGGATGAAGCATTA
AATATATTTGAATCCTTGGAAAACAAGGACCATGTCTCTTGGAATTCCATTTTGACAGGA
TTCTCACAAAGTGGGTTAAGTGAAGATGCATTGAAGTTCTTTGAGAATATGCGATCTCAG
TACGTAGTGATCGATCACTATGCCTTTTCTGCTGTCCTTAGGTCTTGCTCGGATTTAGCA
ACTCTCCAGTTGGGTCAACAAGTTCATGTCCTAGTACTTAAATCAGGCTTCGAGCCAAAT
GGATTCGTTGCCAGTTCATTGATATTTATGTATTCGAAGTGTGGTGTCATTGAAGATGCT
AGAAAATCATTTGATGCAACACCAAAAGATAGCTCAATCGCATGGAACTCACTCATATTT
GGTTATGCGCAACACGGGCGAGGCAAAATTGCACTTGATCTCTTCTTCTTAATGAAAGAT
AGAAGAGTGAAGCTGGATCATATAACTTTTGTTGCAGTTCTAACTGCATGCAGCCACATT
GGATTGGTAGAAGAGGGTTGGTCTTTCCTAAAATCTATGGAATCTGACTATGGGATTCCA
CCTCGGATGGAGCATTATGCTTGTATGATTGATCTGCTTGGGCGGGCTGGGCGTCTAGAT
GAGGCAAAAGCATTAATTGAGGCAATGCCATTTGAGCCAGATGCAATGGTGTGGAAAACA
CTACTTGGTGCATGTAGGACTTGTGGTGACATAGAATTGGCGAGTCAGGTGGCAAGCCAT
CTATTAGAACTAGAGCCTGAAGAGCATTGCACTTATGTTCTACTCTCCAGCATGTTTGGG
CATCTCAGGAGGTGGAACGAAAAGGCTAGCATAAAGAGGTTGATGAAGGAGAGAGGGGTA
AAAAAGGTTCCTGGCTGGAGTTGGATAGAGGTTAAAAATGAGGTGCGTTCCTTCAATGCT
GAGGATCGATCCCACCCTAATTGTGAAGAGATATACCTGAGATTAGGAGAATTAATGGAG
GAAATCAGGAGGTTGGATTATGTTGCTAATTCAGAGTTTTTACAGAACAACCTTCTATCT
GATACACTGTCAGGAGCTATTCCAGGTATAGTACAGCTTGTAGGTCTCTCTTCATTCCAG
AGTCCCCTATATGGCTGGCAAAGATTGGCCGAGAGAATGACTGTGAACCTTAGACGAGAA
AAAGGCGATATTTCTCAGGAAGCAGCTGATATATTTTGGGCATTTTGA
>VIT_01s0011g01830.t01 cds chromosome:IGGP_12x:1:1589441:1597780:-1 gene:VIT_01s0011g01830 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCGGTGTTGTTGGAGGAGATAGCGCAGTCGGTAGAGATATGGTTGAAGCTGATTAAG
AAACCTCAGCCGTACGTTGACCCCAATCTTGACCCGGTTCTGTTGGTGCCCGGCATCGCC
GGTTCGATCCTGAAAGCCGTCGACGACAATGGTCGCGGCGAGCGGGTTTGGGTCCGGATA
ATCGGTGCCGATTACAAGTTCCGGACTAAGCTTTGGTCGCGATTTGACCCCTCTACTGGT
CAAACAGTGTCTTTAGATCCAAAAACCCATATTGTGGTCCCTGAAGAGAGATATGGATTG
CATGCAATTGATGTCTTGGATCCTGAAATGATTATTGGGCGTGATTGTGTTTATTATTTC
CATGACATGATAGTTGAAATGATGAAATGGGGTTTTCAAGAGGGAAAAACACTATTTGGT
TTTGGTTATGATTTCCGCCAAAGTAACAGGTTTCAGGAAACACTAGAGCGCTTTGCTGCG
AAACTGGAGGCTGTGTACACCGCCTCAGGAGGAAAAAAAATAAACATAATAAGTCATTCT
ATGGGGGGTCTACTTGTGAAATGTTTCATGAGTTTACACACTGATATCTTTGAGAAGTAT
GTGCAGAACTGGATAGCAATTGCTGCACCATTCCAGGGTGCACCTGGATATATCTCATCG
ACATTTCTGAATGGAATGTCATTTGTGGAAGGTTGGGAACAGAATTTTTTTATATCAAAA
TGGAGCATGCACCAGCTGCTTATTGAATGTCCATCAATATATGAATTGATGGCTTGTCCG
GATTTTCAATGGGAACACAATCCACTTTTGGAAATTTGGAGAGAGAAGCATGATAAGGAT
GGTAACTCTAACATTGTTCTGGAGTCTTATTCCCCAGAAGAAAGTGTTCCAATTTTTAAG
GAAGCTCTTTCCAGTAATACGGTTAATTATGATGGATTGGACATTCCTCTACCTTTCAAT
TTAGAGATCTTGCAATGGGCTTGTGAAACACGCAAGATCTTATCTTGTGCTAAGGTTCCT
TCTCAAGTTAAATTTTACAATATATATGGGATGAACCTCAAGACGCCTCATAGTGTTTGT
TATGGAAGTGTGGAAGAACCTGTTACAGATCTAGAGCAATTAAAATTTGTCCAGGCTCAA
TATGTATGCGTTGATGGTGATGGGACTGTTCCAGTGGAATCAGCAATGGCGGATGGGCTT
ACTGCAGAAGCAAGGATTGGAGTCCCTGGTGAGCACCGGGGAATCCTTGCTGAACCGCAT
GTATTTCGGATTCTAAAACACTGGCTGAAGGCAGGGGATCCAGATCCTTACTACAATCCT
CTAAACGATTACGTGATCCTGCCCACTGCATTTGAAATGGAGAGGCACAAAGAGAGAGGC
CTGCAGGTGACTTCCCTCAAAGAAGAATGGGAAATCATCTCTAGAGACTTAAACGATGAG
GACAATATCATCGTCAACAACGGGAAGCCTCTGGTAAGCTCAATAGCTGTTTGTGATCAG
TCATCTCTGACAGAGGCTCGAGCCACCGTCACTCTTCACCCCCAGAGTGAGGGCAAGCGA
CACATTGAACTAAATGCCATAAGCGTTTCTGCAACTGTTTAA
>VIT_10s0003g05420.t01 cds chromosome:IGGP_12x:10:10008871:10010615:-1 gene:VIT_10s0003g05420 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGTGTATTCAAATTTTGCCATGTTTCCATTACTTTTCATTCTGCTATCAGCTTCAGTG
ACAGCTTCAGATCCTATTCTAGAAAAGTTTTCCCAATGTGTCTCTCTCAATTCCGAGATT
CTTATCCCAGTATCCACTGCCTTTTACACCCCAAACACCACTTCTTTCAGTGCTTTTCTG
CAATCTTCTGCACAAAACCTCAGGTATTTGGTGCCATCTGCACCCAAGCCTGAGTTTATC
TTTACTCCAATGCATGACACCCATGTCCAAGCAGCTGTTATTTGTTCAAAGCAGCTTTCT
ATTCACATGAGAGTACGGAGCGGTGGCCATGACTATGAGGGCCTTTCTTATGTTTCTGAA
ATGGAAAAGCCATTCATTATGGTGGACCTGGCCAGGCTTCGAGGCATCAAAGTTGATATA
GATGACAATAGTGCATGGGTTCAGGCTGGTGCCACTGTTGGTGAAGTTTACTACAGAATT
TATGAGAAAAGCAAGACTCATGGCTTCCCAGCCGGCCTCTGCACAAGCTTGGGTATTGGT
GGGCACATCACCGGAGGTGCTTATGGATCCATGATGAGAAAATATGGACTGGGTGCTGAC
AATGTGATGGATGCTCGGATTGTTGATGTTCATGGCAGAATTCTTGACCGAGAATCCATG
GGAGAAGACCTGTTTTGGGCTATTAGAGGAGGCGGAGGAGCCAGCTTTGGGATCATTCTC
TGGTGGAAAATAAGGTTGGTTCCTGTTCCATCAACCGTGACAGTTTTCACAGTGGGAAGA
GCCTTAGAGCAAGGGGCAACAAAGCTCCTCTATAGATGGCAACAAGTTGCAGATAAGCTC
CATGAAGATCTCTTCATTAGAGTCATCATATCAGTGAAGGCAAATGAAAAAGGTAATAAA
ACCGTCAGCGCTGCCTTCAACTCACTGTTTCTGGGTGGGGTGGACAGACTCCTCCAAATA
ATGGGAGAGAGCTTCCCAGAGTTGGGTTTGACAATGAAGGATTGTACTGAAATGAGCTGG
ATCAGATCAGTGCTTTACATCGGGGGCTACCCAAGTGGAACACCCCCTGAAGTTCTTCTA
CAGGGGAAATCAACATTCAAGAACTATTTCAAGGCCAAATCAGACTTTGTGAAGGAACCC
ATCCCTGAAAACGCCCTTGAAGGGCTGTGGACGAGGTTATTAGAAGAAGAGTCTCCACTG
ATGATATGGAATCCTTATGGTGGAATGATGAGTAAGATTTCAGAGTCTGAAATTCCATTC
CCTCATCGAAAGGGCAACATATTTAAAATCCAGTTATTAACAACATGGCAAGATGGGGAG
AAGAACACGAAAAACCATATGGAATGGATAAGAAGGCTTTACTGCTACATGACTCCTTAT
GTTTCCATGTTCCCTAGAGCTGCATATGTAAATTACAGGGATCTGGATTTGGGCATCAAC
AAGAACAGTAACACAAGCTTCATACAGGCAAGTGTTTGGGGTGCCAAGTACTTCAAGGGC
AACTTCAACAGATTGGTACATGTAAAGACCAAGGTTGATCCAGATAACTTCTTCAGGCAT
GAACAGAGCATCCCACCAATGCCACAGCTCATCAAGGGCTCCGTCCATGGACTTGAGTAG
>VIT_18s0117g00040.t01 cds chromosome:IGGP_12x:18:23123316:23123733:-1 gene:VIT_18s0117g00040 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTCATCAGCTGAATGGTTGGAAGCGGTTCCAAAAGACAAGCAGTGGGATGAGTTGATG
TCTGAATGTGAGTCCTTGAAAGAGAAACAGTTGCTAAAGAGACATGGGATGGTCTACTTG
TACTGA
>VIT_13s0064g00430.t01 cds chromosome:IGGP_12x:13:22053523:22055619:1 gene:VIT_13s0064g00430 gene_biotype:protein_coding transcript_biotype:protein_coding description:Sulfotransferase [Source:UniProtKB/TrEMBL;Acc:F6HBC8]
ATGGCTGGTTCTCTTGAGAATGCCATGGTGCTGTCATCAACAACCGATGAAGATGAGAAA
CAGAAGGGAAGTAGAAGCAAAAGAGAGATCATTTCCACCCTCCCAACTGAAAAAGGCTGG
AAAATTCAGGGTCTTATGTACCAGTACCAAGGCTTTTGGTACTATTCTGGGGGTGCGGTA
GAAGGAGTCATGTGGATGCAAAAATGCTTCAAGGCAAGGAATGAAGATGTTCTCTTGGTC
TCCTTTCCAAGATGTGGAACAACATGGTTGAAATCTCTCATGTTTTCTATCATGAATCGA
ACCAGGTATGATTTCTCAGCACACCCTTTGCTGACTTCTAGCCCTCATGAACTTGTTCCC
TTCTTGGAATTCTACGCAGAGCAGAACATCCCCTTCCCAGACCTGGACACACTTTCCTCT
CCTCAGCTCTACCATACTCACATTGCCCTCACTTCATTACCCCAACCTGTCATAGACTCT
CAGTGTCGAATTGTCTATATCTGTCGCAACCCCAAAGATGTGTTTGTTTCTATTTTTTGT
TTTCTCTCGAGATGGAATATAGTGGTTCCCCTTGAAGAGGCATTTGAGTTGTTCTGCAAA
GGAATTAGCGTGTATGGACCCTTCTGGGACCATGTTTTAGGGTATTGGAAGGCTAGTTTA
GCTTCACCCCAGAGAATATTGTTCTTGAAATATGAGGACGTGAAGAGGGATTCCTTGTGC
CAGGTCAAGAGGTTGGCAGAGTTCATGGGCTTTCCCTTCTCTTCCGAGGAAGAAGGACAA
GGTTTGATACATGAAATTATGGAGCTGTGTAGTTTTGAGAATCTAAGAAATTTGAAGGTA
AACAAGACCGGAGCAATATCTGTGGGCAATGTCAGCACTGGAAAGGATACTTTCTTCAGG
AAAGGTGAGGCAAAGAGCCCATCCCTTTCCATTGAAGAGGAATTTGAGCAGTTCTGTAAA
GGGGTACGTGTCTATGGACCCTTCTGGGATCATATTTTAGGTTATTGGAAGGCAAGTTTG
GATTCGCCCAAGAGAGTGTTGTTCATGAAATATGAAGATCTGAAGAGGGATTCCTCATTT
CATGTCAAAGAGTTGGCAGAGTTCATAGGCTGCCCCTTCTCCCCGGAGGAAGAAACCCAA
GGTTTGGTACATGAAATTATAAAGCTGTGTAGCTTTGAGAATCTAAGCAATTTGAAGGCA
AACAAGATAGGAGCATTATCTGTGAGGGATATTAGCATTAGAAATGATACTTTCTTCAGG
AAAGGTGAGTTTGGAGATTGGAAGAATCATTTGACAGCTGAGATGGCTGACAGTCTTGAC
AGGATCATTGAGGAAAAGTTTACAGGGTCTGGTTTGACATTCAGTGATTCCTGA
>VIT_07s0151g00360.t01 cds chromosome:IGGP_12x:7:890708:893206:1 gene:VIT_07s0151g00360 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTCCTCCCAAGAAATCCAAAAAAGCCAAACGAGAATCGAAGAAATCGAAGAAATGC
AAAAGCATGAGCGTAGTTCCAATAGAGCCCAGAGCCACTGAATCTGACTGGTGGGACAGT
TTCTGGCAAAAGAACTCTCCAATCCCAGTTTTCTCAGCAACAAAGTGGAGGGATGAATGC
AATCCGTTCAAGAATGCTAGTGTGATGAAGATTTTTTATACAGTCAGTGATTGTTCAGCC
ATACCCACCGACGAGGCAGAAGGATTCAAATTCTTCTTCAGGGTGTCAAAGAAGACATTT
GACTACATCTGTTCACTTGTAAGACAGGATCTTGTGTCAAGGCCGCCATCGGGTCTCATC
AACATTGAGGGAAGGCTTCTTAGTGTGGAGAAACAAGTTGCAATTGCCCTGAGAAGGTTG
GCATCCGGTGAGTCCCAAGTCTCTGTTGGAGCTGCCTTTGGCGTTGGCCAGTCCACTGTT
TCTCAGGTGACTTGGAGGTTCATTGAAGCAGTGGAAGAACGAGCTAAGCACCATCTCAGG
TGGCCTGATTTCAATAGAATGGAGGAAATCAAGTCCAAGTTTGAAACATCATATGGATTG
TCCAATTGTTGTGGAGCCATTGATGCAACTCACATCATTATGACCCTTCCCGCCGTTCAA
ACTTCAGATGATTGGTGCGACCAAGAGAATAATTACAGCATGTTCTTGCAGGGAGTTGTT
GACGATGAGATGAGATTTCTAGATATTGTGACGGGTTGGCCTGGAGGCATGACTGTGTCT
AGACTCTTGAAGTGTACAGGATTTTATAGAAACTGCGAGGCTGGTGAGCGCTTGAATGGG
AACGTCAGAATTTTATCTGAAGGGGCGGAGATCAGAGAATATGTTGTAGGTGGGGTTGGC
TATCCTCTCCTTCCATGGCTCATAACTCCTTGTGAGTATAATGACATCCCATCCTCCATG
TCGGGTTTCAAGACAAACCATGAGGCTGCACGGTCGCTTGCAGTGAGGGCATTCTCACAG
TTGAAGGGCACTTGGAGGATCCTTAGTAAAGTTATGTGGAGACCTGATAAACGGAAACTC
CCAAGTATTATCTTGGTCTGTTGTCTGCTTCACAATATTATCATTGACAGTAAAGATAAA
TTGCAACCAGATGTTGCTTTGTCTAGCCATCATGACCCAGGTTATGGACAACAATGCTGT
AAGCAAGTTGATCCATTGGGAAAAGCCATGAGAGAAAACATAGCCAAACACTTGCAGCAT
GGCAAAGAGAAGGCTCCATCAAATTGA
>VIT_07s0104g00640.t01 cds chromosome:IGGP_12x:7:1831451:1832423:1 gene:VIT_07s0104g00640 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCCCACTGGCCCTTGTGAGAGAATTTTCCAGGCACTCAATATTACCCCTGCTTTCAGA
TCAATGCATCGTCTCTCATACCGGCCTCAATCTCCCATGCCTGAGAGGGCTCCAGCAAGA
ACACCTCCTGCAGCTGATCCTGCAGCTCCAAAAGTTCATCCAAAAACCAAACCGATTGCT
CTGCAGCCACCCAATTCGGTAGTCCCCATCATCTTTGAGTCTACAGTTCATCCCACTCCA
AATGAGAAAGAGAAGCTGGTGGTGAATGTCACAGCCAAGCCCAAGGGAGAGATGGCTGAA
CAGGAAAAGAAAGTTGCTGGGCAGGCAGTGAAAGCTACACAAAATAGTGAAGTGACACCA
TCCCAGGAGAAACCCAAGGCTGGAGCAGAGATGCCAACACCAAGTAAGGTAATTGCCGAG
CAGAGCAATAGACAAGGAGCCAAGGCTACACCAAAAGTTGAAACCAAAGGACCCCATATT
TCAAATCAAGTGAAACCTGTGCCCAAGGTGGAGACAGTTTCACGAGCAAAGCCGCTTCTA
GAGCAGGGACAACAGAAAGTTGTCACAAGAGACAATTCAATGGAACAAGGTAACAAAACT
GTACCAAACAGTGGTGATCGGTTTGCTGAATTTATTAAAAATACCAAGATCAAAATGAGA
GCTACATCAGATGTTGGAAAGAACAGTTCAGGGCCAGATAGTGCTAAGATTAAGATAAAG
ACTTCATCAAATGTTGGTGGTGGAAAGAGCTTCTCCTTTAAAAAATGA
>VIT_06s0004g04870.t01 cds chromosome:IGGP_12x:6:5838727:5844007:-1 gene:VIT_06s0004g04870 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTATGGGATTTATAAAGCTACAGGACCCGGGGGTTATAATATTGAGCCCAAAGCTTTC
AAATCTTCGTTCCCGTCTCAGGTCCGGTTCTCTGTTTTGGAAGATTGCTTGCCGTTGGCT
GAAGAAAAGTTCAAGAAGGTCATCAAAGATAACTACTATAAGAAGAACAAGTTCAACTGT
GAATTGAATTCAGATCAGGTGAAGAATTTGTGCAAGCTTTTCCAAGCTGCTAGCAAGGGC
CCCAAGTCCAAGGATTCGGGAAGAAGTCTCAGAGGAGAAGGCTGTACAGCTTCAGACCGG
CAGAGAAGAACCCAGCTAGGTCGAGAAGAAGAAAGGCACCCTGTATTGCATGAGGACCGT
CTTTATAAGGAGCCTCCTGCTCTATATGAGAGGGAGGTTCTACAGAAGAGAACCACTCCT
TGGTGGTTATGA
>VIT_01s0026g00310.t01 cds chromosome:IGGP_12x:1:8992848:9017917:-1 gene:VIT_01s0026g00310 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAATCCCTTCTCGTCCGGAACGCGCCTGAGGGACATGATTCGGGCTATCCGTGCTTGC
AAAACCGCAGCAGAGGAACGTGCTGTTGTAAGAAAGGAATGTGCTGCTATTCGTGCATCA
GTCAGTGAAAATGATCATGACTATAGGCACCGTAACCTAGCAAAGCTCATGTTCATTCAC
ATGCTTGGTTACCCCACACATTTTGGTCAAATGGAGTGCCTGAAATTGATTGCAGCGGCT
GGATTTCCGGAAAAGAGAATAGGATATCTTGGCCTCATGTTGCTTCTTGATGAAAGGCAA
GAAGTTCTTATGTTGGTTACAAACTCATTAAAACAAGATCTCAATCATAACAACCAGTAC
ATTGTGGGACTTGCTCTTTGTGCTCTGGGAAATATTTGTTCAGCAGAAATGGCTCGTGAT
CTTGCACCTGAAGTGGAGAGATTGATGCAATTTCGAGATCCAAATATTCGGAAAAAAGCA
GCATTATGCTCTATAAGGATTATAAGGAAAGTTCCAGATCTGGCAGAAAATTTTATGCAT
CCTGCTACCAACTTACTTAAAGAAAAGCACCATGGAGTTTTGATAACTGGAGTTCAGCTT
TGTACAGAGATATGCAAAGTCAGCGTGGAAGCCCTTGAACATTTTAGGAAGAAGTGCACA
GAGGTTTTGGTCAAAGTTCTAAAGGATGTTGTGAACAGTCCTTATGCACCTGAGTACGAT
ATTGCTGGGATTACAGACCCTTTCCTCCATATCAGATTGCTTAGGCTTTTACGGGTGCTG
GGCCAAGGTGATGCAGATGCTAGTGACTGTATGAATGACATTCTTGCTCAGGTGGCAACA
AAAACTGAGTCAAACAAAAATGCTGGGAATGCCATTTTGTATGAATGTGTTGAAACTATT
ATGAGCATTGAAGATACTAGTGGCTTACGTGTGCTTGCCATCAATATCTTGGGAAGATTC
TTGTCAAATCGTGACAACAATATCAGATATGTTGCATTGAATATGCTGATGAAGGCTATT
ACAGTAGATGCGCAAGCAGTGCAGAGGCATCGGGCAACAATTTTGGAATGTGTAAAGGAT
TCAGATGCTTCAATTCGGAAAAGGGCCCTTGAACTTATTTATGTTCTAGTGAATGACAGC
AATGTGAAGCCTTTGGCAAAAGAGCTAATTGATTATCTTGAAGTAAGCGATCCAGAATTC
AAGGGAGATCTGACCGCCAAAATTTGCTCAATTGTTGAAAAGTTTTCCCCTGAGAAAATA
TGGTACATTGATCAGATGCTCAAGGTTCTTTCTGAGGCTGGAAATTTTGTAAAAGATGAA
GTCTGGCATGCCCTTATTGTTGTAATAAGCAATGCTTCTGACCTCCATGGATATACAGTA
AGGTCCCTTTACAGAGCATTCCAAGCATCAGTGGAACAGGAATGCCTTGTACGAGTGGCG
GTCTGGTGCATTGGAGAATATGGTGAAATGTTAGTCAATAATGTTGGAATGCTTGATATA
GAGGAACCTATAACTGTAACAGAGTCTGATGCTGTGGATGTCATTGAGATTGCCATTAAG
CGCCATACCTCAGATCTCACAACTCGAGCTATGGCTTTGATTGCTCTCTTAAAGCTTTCA
TGTCGTTTCCCATCTTGTTCAGAGAGGATAAGGGATATAATTGTCCAGTGTAAAGGAAGC
CTTGTGCTTGAATTGCAGCAGAGATCCATTGAATTTAATTCCATTATTGGGAAGCATCAA
AATATCAGGTCTGTGCTGGTAGAAAGGATGCCAGTTCTGGATGAGGCAACTTACAATGGA
AGGAGGGCTGGTTCTATGCCAGCAACTGTTTCAATGTCAAGTGGGGCTTCACTTAATCTT
CCAAATGGAGTTGCCAAACCCCCTGCTGCTCCTCTTGTAGATTTACTTGATCTAAGTTCA
GATGATACCCCTGCACCTAGTTCTTCTGGTGGTGATTTCCTTCATGATCTTCTTGGTGTT
GACTTATCTGTGGGTTCATCATTGTCAGGTATGACTCAGGTTCCAAAAGCTGGTACAGAT
GTTCTCCTGGATCTTCTGTCAATTGGAACACCTCCTCCGGCACAAAGCAGCTTATCTACA
CCTGATATTTTATCTTCTAGTCAAGATAACAAGATGCCAGCTCCCACATTAGAAAGACTG
TCATCACCTTCTTCAATATCCATTCAAGCCTCATCTCCTGCAGGGGCTGCTCCTATGATG
GATTTGTTGGATGGCTTTGCCCCCAACCTACCATTGCCTGAGGACAATGGTCCTGTTTAT
CCATCTATAGTCGCATTTGAGAGCAGTGCCTTGAGGCTAACGTTCAACTTCTCCAAGACA
CCTGCAAATCCGCAAACAACATTGGTCCAGGCCAGTTTTACAAATTTGTCACCTAATATC
TTTACAGATTTTATTTTCCAGGCAGCAGTCCCAAAGTTTCTTCAGTTGCACTTAGATTCA
GCCAGTGGCAACACACTTCCTGCAAGTGGAAATGGGTCTATCACACAAAATTTGCGAGTT
ACTAACAGCCTACATGGGAAGAAACCTCTTGTCATGCGCATAAGGATAGCTTACAAGATG
AACAACAAGGATGTCTTGGAGGAAGGACAAATCAACAATTTCCCTCGTGACTTATGA
>VIT_05s0094g00510.t01 cds chromosome:IGGP_12x:5:23866670:23876823:1 gene:VIT_05s0094g00510 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGTCTGGTTCAACCTTTAATGGATACTGATCCGGACAGCAAGTCACCCACAAAAGTT
GTGCCTGATAAAGTTAAGTGCACGAGTAATTGGGAGGCCACCATATCTGAGATGGAAGCT
ATGTTGGATGGACAAAGTAAGGCTCCAGGGGGCACTGAGGACGTGGAGGTTGATGTAACT
GGGTGTGCAAATATTATTGACACCAAGTTGGCTGAAGCTGAAGACCCAGATGCCACTGAG
TATTCTAGTTCCTTTGGTGATACTGAATCTGGAAATGAGAAATTTTCTGGATTGAGTGAA
GCTGAAGTTGAGTCTGAGTACCGTGACCACAATAGTTTGGACTCCCCATTTGATTCATTT
GGTCTTATGTTTCAAACAAGGAAGAAGAAGTTGACAAGTCACTGGAAGAAGTATATTCAT
CCTCTAATGTGGCGATGCAAGTGGGCCGAATTGAAAATTAGAGAGTTTAAATCTCAAGCT
GCAAAATATTCCAAATTGCTTGCAGCCTATGATCAGCGAAAACAGCTTGAATCAGATCAA
TTCACATCAGAAGGTTTTGATTCAAAATCATTACCATTTTCTAATCAAAATCACCGGATG
AAGGCTATGAAAAGGAGGAAAAGAAAGAGAATTGAAGAAACAACTGATGTACCATCATAT
ATGCTGAATCATAACCTTTTCGGCTATTTTGAAAATAAAAGGTCTGATGCAGATAGTTCC
TCTATGGTTGACGATTTTGGTAATCCGGTGGTTACAGAACAGAATGCCAATGGTGACGAT
AATTTTGGCATTAGTGATGACTCATCACTTTTGAAGTTTAGAGATGATGATGATTCATTA
GAGCAGATCCTTTGTAAGATTGAAATGGCACAATCTCGGGTTCAGAAGCTGAAGGCTCAA
CTTGACATGGTAGTGCCCAAAAATGTTGTGAAGTTTTCTTCCTCCGAGAATTTGAGCCTT
CTTGCACCTTGTGATGGGCAGACCAGCTCTGCCCATAGTCCTAATTTCTCTGCTGGCAAT
GGAGATGCTATATCAGTAGGAGCTATATATCCTCCAACTGGACTGCTCTCGGAGTATGAA
ATGGGCGATCTGGTTTTGCCTGAAAGTGCACTTTCAAGTTTTGGAGAGGCTGTTTCTGTT
CCAGATATAATTGAAAGCACAACAAAACTGTTGTCTGCTGGTGATGTCACCGTGCATCCA
CTGCAGACTCATGATTCATGTGAAGATATTATGGATGATATCCCGATGCATAATCATGCT
GCAGAAGGCGAGATGCACCCCTTCAAAAGCATCAATAACCAACAAACAGGAAGACATCAG
GAACCAGATAGAGGTGAACAAGAAGAAAGCACCGATCCTCCTCTTGCTCCGGCAATGGAA
GCTGACCCTGCAGCAAAAACTGGGGAGCAATCAGCTCTGAAATCTTGTTTGGCTTCAGAC
TTTCATGTTCCTAAGAACAAGAGAAAGCGAGGGGAGCGCAAAGCTGGTTCAGCGGGTTGG
AACCGCTGA
>VIT_03s0091g00290.t01 cds chromosome:IGGP_12x:3:6571900:6589424:-1 gene:VIT_03s0091g00290 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGATGCTTCCCCTGCCCAAGAGAGTAATCGGACTAGGAAAAGTTCTAGTCCTAAACAG
AATATTTTAGAAGAGGCCAGAAAACTTTCTGAAAGTGTGTGTAGCGAATCGTCAGAGCAG
AAACGTCCCTCTGAAAATGGACAGCATGAGCCAGCAGAAATCAGCCCTGTGCTATCCAAT
TGTATTGTTACTGAACAGTCAGAACTGCCTCCAGAAGATGTGGGTGATACAATATTAGGA
TTGCCTCCAGCAGATGTGACCAAGAATTCTCTTACTGAACATTTGGGATTGCCTCCAGAA
GATGCAATCAAGAATGATGGAACTGAACAATTGGGGTTTTTTCCTGAAGTTGTGACCAAG
AGTTCTATTATTGAAAAATTAGGACAATCAGAGCCACCTCCTGAAAATGTGGCCCGGTAT
TCTGGTCTTGACCAGTCAGGGTCAGCACCCAAAGATTTGGCCAATAAAAGAACTGCAAAA
CTAGTTAAAAGAAAATATAAATTGAGATCTTCAGTAAGCGGTTCCCGGGTTTTACGCTCA
AGGTCACAAGAGAAACCTAAAGCTTCACAGCCAAGTGATAATTTTGTAAATGCCAGTGCT
AGCAGAGAAAGGAAAGGAAGAAAGAAGAAAAGGATGAATAAAACAACTGCAGATGAATTT
GCGAGAATCAGGAAACATCTTAGATATTTACTGAACAGAATGAGCTATGAGCAAAATCTG
ATTGATGCTTATTCTGCCGAAGGTTGGAAAGGACAAAGTGTGGAAAAATTAAAGCCAGAG
AAGGAACTTCAACGTGCCTCATCTGAAATTTCTCGTCGCAAACTGCAAATACGTGATCTA
TTTCAACATCTTGATTCATTATGTGCTGAAGGAAGGTTTCCAGAATCTTTATTTGATTCT
GAAGGGCAGATTGACAGTGAGGATATATTCTGTGCTAAATGTGAGTCCAAAGACATGTCT
GCTGATAATGACATAATACTCTGTGACGGTGCTTGTGATCGTGGATTTCACCAGTTTTGT
CTGGAACCGCCATTGTTAAAAGAAGAAATTCCTCCTGATGACGAGGGTTGGCTGTGCCCT
GCATGTGATTGCAAAGTTGACTGCATGGACCTGCTTAATGACTCTCAAGGAACAAAACTT
TCTGTAATTGATAGCTGGGAGAAGGTTTTTCCTGAGGCAGCTGCAGCTGGGAATAACCAG
GATAACAACTCTGGATTTTCATCAGATGATTCTGAGGATAATGATTATGACCCCGATTGT
CCAGAGGTTGATGAGAAGGGTCAGGGAGATAAGTCAAGTTCTGATAAATTTGATGAATCT
GATGAATTTGACGAATCTGATGAATCTGATTTCACTTCTGCATCTGATGATATGGTGGTC
TCACCAAATAATGAGCAGTGTTTGGGGCTTCCTTCTGATGATTCAGAGGATGATGATTTT
GATCCTGATGCTCCAGAAATTGATGAACAGGTTAATCAGGGGAGTTCAAGTTCTGATTTT
ACATCTGACTCCGAGGATTTTACTGCCACTTTAGATCGCAGAAACTTCTCTGACAACGAG
GATGGTCTTGATGAGCAAAGAAGATTTGGTAGGAAGAAGAAAGATACTTTAAAGGATGAG
CTCTTATCCGTGTTAGAGTCAAATTCTGGTCAAGATAATGCACCTCTGTCTGCAAAGAGA
CATGTAGAAAGGCTGGATTACAAAAAGCTGCATGATGAGGCATATGGAAATGTTTCTTCT
GATTCAAGTGATGATGAAGACTGGACAGAGAATGTTATACCAAGAAAGAGGAAGAATCTT
AGTGGTAATGTTGCCTCAGTGTCACCAAATGGAAACACTTCAATCACTGAGAATGGGACA
AATACCAAGGACATAAAGCACGACTTGGAAGCAGCTGGATGCACTCCCAAGCGAAGAACT
CGTCAGAAGCTGAACTTTGAAAGCACAAATAATTCACTTGCTGAGTCACATAAAGATTCT
CGAAGTCCTGGTTCTACTGGTGAAAAAAGTGGGCAATCATCATATAAAAAACTTGGAGAA
GCTGTAACTGAGAGACTCTACAAATCCTTCCAGGAAAATCAGTACCCTGATCGTGCTATG
AAAGAAAAATTGGCAGAAGAGCTGGGAATAACGAGCCGGCAGGTTAGCAAATGGTTTGAG
AATGCCCGTTGGAGCTTTCGCCATCGACCACCCAAGGAAGCCAGTGCGGGTAAAAGTGCT
GTGAAAAAGGATGCATCCACGTCTCAAACAGATCAAAAGCCTGAGCAAGAAGTGGTTCTT
AGAGAAAGTTCTCACAATGGAGTGGGAAAAAAGGAGTCGCCCAAAGCAGGTGCTTCGAAG
GTAGACCGCAGCAAGGAAGCCAATGCAGGTAAAAGTGCTGTGAAAAAGGATGCATCCACG
TCTCAAACAGATCAAAAGCCTGAGCAAGAAGTGGTTATTAAAGAAAGTTCTCACAATGGA
GTGGGAAAAAAGGAGTCGACCAAAGCAGGTGCTTCGAAGGTAGACCGCTGCAGTGGAGCT
AAGAGGAGAAGGAAATTGGCAACTGATGGAAGCCATAGACAGAAATCTTCAACTCCCAAC
TCTACAAGACAAAAGACAAAGTCAAATCATGAAGCATCTGAGGCAACCAATGGAAGCAGA
AGGCAGAATTCTTCTACTCCCAAGTCTAGAAGGCAAAAGACTAAGTTAGCTGGTGAAGCG
TCTGAGGCAACTGGTGGAAGCAGTAGACAGAATTCGTCAACCCCAAATTCTAAAAGGCGA
AAAACCAAGTCAGATCATGAAGCATCTAATCCGGTCTTAAGCGGTAAGAAGATAGCAAAG
ACGGCAAAGAGCTCATCTGGCACACCAAAAACAAAGGAAAAGCTAAGTGACAGAATCCAA
ACAAGAAGTAGGAAATCTATTGCTTGA
>VIT_17s0000g08320.t01 cds chromosome:IGGP_12x:17:9406972:9411665:1 gene:VIT_17s0000g08320 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGTAAGGTGGAAACAAGCTTCAGTGAGAAGAGTAATAGTCAATACAATCCAAAAGAG
GAAGTCTTCCGTTGCGTGTTGACACTCCATTCGCTTCTGGAAAATCCTCCTGGAGATTTT
CCTGATAATCTTAGGGAAGACGCTGTCAAGGGGTTTATTGGAATTTTCTCTTTTCTCAGG
GATGAGGGAAAGATTGCACGCAAGCTAATTGAATGCATTAATATATTCTTGTTAAAGGAT
GGTCCAAATTTAGGTTGTCAGTGCTTGGAAATCCATAATGCCGTTCAACAATTTGTGTTA
CGTAGTTGGCTCACAAGCCATGATCGGGGTCTCAAGGATGCAGTTATATCTTATGCAAGA
TTACAGCTAAATCTAACTAGAGGTGCTGCTGATGGGAGTCCTTTAGTGGAACAACTTCTG
GATGTGGTTGGAAGGGAACTAGATCAGACCAATATTTCCAGCACTAGTGTTCCTTGGAGT
GACACAACTAAGGATGATAGACTTGGAACTTTGACAAGCTCACAGTGTGGATTGGTGGAG
CTTGCTGCACTTGTCTTCTACCGGTTAAGGAAACTCTCCTGGGGTGGCATGGAGCGTTTG
TGGGGAAAATCCGTAAAAAGGCGTGGCAAATGGCCCCCTTATAATTTGTTTGACCTTAAC
AATTCTCCTTGGGAAAGATGA
>VIT_01s0127g00900.t01 cds chromosome:IGGP_12x:1:8304090:8304305:-1 gene:VIT_01s0127g00900 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAAAAAGGAACCCTCCCTCCACTCATCCAATACTAACCACCTCGCTTTCACTTTTCTT
TTCTTTTGCTCAATTGTCTCAGAAACCAAACAGACGGTAAAAGAAAATACCCTCTCACAA
TGGCAAGGTTCAATTGTTGCTGCGACCGAAGAGCGAGATCATTGGATTCATCGCAGCAAA
TTGTTCTTTGTTTTTTTTTCACTGCCTATTAGATGA
>VIT_19s0014g04520.t01 cds chromosome:IGGP_12x:19:4833693:4836694:1 gene:VIT_19s0014g04520 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGATGTACATATCCTACTCGAACATTTGTGCGAATCTGGTGAGGAACTGCCTCAAGGAG
CCATTCAAATCCGAAGCCCTCACTCGCGAGAAGGTATCCAAGAAAAAAGAAGAAGATGAT
GAAGAATTAGAGACCCTCTTACGAAGATAG
>VIT_16s0013g01470.t01 cds chromosome:IGGP_12x:16:8183260:8183939:-1 gene:VIT_16s0013g01470 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCAAACCTTAGTATACCCAAGGATCTTTCTAGTGAAGCTGTTAACAAATACATATTG
GATGTGTGGCAAAGGTTTGATGTTAAGTGTCCTCCTTCTCATACCACAACTCAGTTTGTG
CAACTTATTGGTCATTTTCTTAAAGAAACTCTCATACATCCTACTTTCATCATAAACCAT
CTTGAGGTGATGAGCCCAATGGCAAAATGA
>VIT_15s0048g02730.t01 cds chromosome:IGGP_12x:15:16867611:16876297:1 gene:VIT_15s0048g02730 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGTACACAAGAGCATCAGATCGACCTAGGTCACCTTCTGGCCTTCGACCCACTTCAC
CACTTCCCTTCTCCCCCCTCTTCCAGGGAAGAGCTAGTGAAGGAGTGTTTACAAAAGGGC
ACTGAGCTAGTCCAATCAATCGCAGACACCCTTTTCAACTTACCTTCAACCGAAGACATA
GATGGCCCCTTAGTCAAGTTGCCTCCGCCGACGACAAGATTGCCTAGAGAAAAGCATCTG
CCTAAGCCTAAACCACCTACAAAATGGGAGTTGTTTGCCAAAGCTAAAGGTATAAAGAAC
CGCAAAAAAGATAAAATCGTTTACGATGAGCAAACTGGTACTTGGAAGCGTCGCCATGGA
TATGATCGTGTAAATGATGATGAAGATATACCTATTATTGAGGCCAAAATGACTGATGAA
GCAGGAGAGGATCCTTTTGCTAAGAGACGAGCAGAAAAGAAGAAACGAGTTGAAAAACAA
GGGAAGAATCGGTTACAGAATCTCAAACAAGCTGCAAAAGTTGGTGCTTTGCCAAGCCAC
ATTCAACTTGCTGCCACAGCCTTACCTATTACTGGAACCCAAACTGCCCCAAAGAAAGTC
AGCAAAAATGAACTTGAGGATGTAGCCAGCATGGCCGCCACTGCAACAGCCAGTGGTGGG
AAATTTGACAAGAAGTTGCCTGGAGAAAAACCTGAAAAACATAAAGGAAAGTATCGCAAG
TTCCTGCCGGTAGTGGAAGGGACAGGAATTGGATCACTAGAGAAGCAGCAAACTGAAAAA
ATTTTGAACAAGCTAATCTCCAAGAATTCCCATGAGATACTCAATGTTGACAAGGCTATT
AACATGTACAATGTGAAGAAAGAGAAGAAAAGAAAGAATCGACAGGGGAAGGATTCATCA
ACTTCAAGCAAGTTGAAACCAAAGAAGCAACTTCAGAAGAAGTCATTAAAGAAAGGAACT
TCCAAGAAAGGGAAGTCAAAATGA
>VIT_13s0019g03280.t01 cds chromosome:IGGP_12x:13:4338690:4342831:-1 gene:VIT_13s0019g03280 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTCTTTCATTGGCACACAACAGAAATGCAAGGCGTGCCTGAAGACTGTTTATCCGGTT
GAGCAGTTGTCTGCTGATGGAGTGGTTTACCATAAATCGTGCTTCAAGTGCTCTCACTGC
AATGGGACACTTAAGCTGAGCAATTATTCCTCAATGGAGGGTGTTCTTTACTGTAAGCCT
CACTTTGAGCAGCTCTTTAAGGAGTCTGGAAATTTCAACAAGAATTTTCAGTCACCTGCG
AAGTCAGCTGAGAAGTTAACTCCAGAGCTGACAAGGTCACCCAGCAAAGCTGCCAGCATG
TTTTCTGGGACACAAGAGAAATGTGCAACCTGTGGTAAAACAGCTTATCCACTTGAGAAG
GTAACCGTGGAGAGCCAGGCTTATCACAAATCATGTTTCAAGTGCTCCCATGGTGGCTGC
CCAATATCCCCATCAAATTATGCAGCCCTTGAGGGCATTTTGTATTGCAAACACCATTTT
GCCCAGCTTTTCAAGGAGAAAGGAAGCTACAACCATCTAATTAAGTCCGCATCAATGAAG
CGCTCAGCAGCCTCTGTTCCTGATGCTTGA
>VIT_01s0146g00420.t01 cds chromosome:IGGP_12x:1:22279639:22280757:1 gene:VIT_01s0146g00420 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAGTTACCAGCATATTCATCATTCTCCTCAAGGGTTTGGAGGACCTTTTCCATCAGCA
GTGCCACCACCGGGGTTTCCTTATGACGCACCGCCACCTCCACCGCCACCGCCATCCCGA
CCTGGGCCTGGGTACCAGGACTACTTCACTGAAGGCTACAACCAGCCTCCACAGCCCACC
TATGAACACACCCACCACTACCGCTATGGGGATGATTTCCGGGGGCGGTGTTGGTCATTC
TGCAGAGGATGTTGTGCTGCACTTTGCTGCTGCTGTATGTTGGAAGAGTGCTGCCTTTAA
>VIT_11s0065g00240.t01 cds chromosome:IGGP_12x:11:13879697:13887340:1 gene:VIT_11s0065g00240 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCGATGATGAAGAAGAAAGGCGACCGTCTGGTCTTCGCCTACTACGTAACTGGTCAT
GGCTTCGGCCACGCTACTCGCGTTGTCGAGGTTGTTCGTCATCTCATTGTAGCCGGGCAC
GATGTTCATGTGGTTACTGCTGCCCCTGACTTTGTTTTTACATCAGAAATACAGTCACCT
AGACTTTTCATCCGCAAGGTATTGTTGGACTGTGGAGCTGTTCAAGCAGATGCTCTTACA
GTTGACCCTCTTGCCTCCTTGGAAATGTATTCCAAAACTGCTGTATTACCCCGGGCCTCT
ATTTTGGCAACAGAAGTTGAGTGGCTGAAGTCTATCGAGGCGGACTTAGTGGTCTCAGAT
GTTGTTCCTGTTGTGTGCCAAGCAGCTGCAAATGCTGGAATTAGCTCTGTTTGTGTCAGC
AACTTCAGTTGGGACTTTATTTATGCAGAGTATGTGATGGCTGCTGGATATGACCACCGT
TCAATTGTTTGGCAGATTGCTCAGGATTATTCTCATTGCAAGTTCCTAATTCGTCTCCCA
GGATACTGTCCAATGCCTGCTTTTCGTGATGTTATTGATGTACCACTTGTTGTAAGGAGG
TTGCATAAATCTAGAGCTGAGGTCAGGAAAGAGCTTGGAATTGCAGATGGTGTAAAGCTA
GTTATTTTCAACTTTGGTGGCCAGGCCAATAGGCAAATCAAGATCATTAAGGCTAAGGAA
ATCATTGCCCCTTTTTTTGTGCATTAA
>VIT_06s0004g06490.t01 cds chromosome:IGGP_12x:6:7208317:7210341:-1 gene:VIT_06s0004g06490 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTCACGTTTGTTTTTTTACTCTCTGCACCCGGCGATCCTCAACCCTCACCTCATCCCC
AAAGCGGTAATTTCTTCATTCTCCTCATCCATCGCTCTCCATCCGAGACTATACAATTGG
AAAGACGCTCCACTTTCATTCGACATCGTTGATCTGATCGAAGGCACGACCCCTGTTCAA
AGACCGGAGGAAATTCTCACAGATGGCTGA
>VIT_18s0001g03980.t01 cds chromosome:IGGP_12x:18_random:3618058:3621174:-1 gene:VIT_18s0001g03980 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCAAGGACGAGGTTTAAATTATCCAACCATCTTTGGTTTTAACTTTCATAGAGAAATT
TTCCATAAAAAAAATTTAGATAACTGTGTTCAATAA
>VIT_16s0098g01540.t01 cds chromosome:IGGP_12x:16:21708635:21712089:1 gene:VIT_16s0098g01540 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCGACCCTCTCGATTCCGCTGTCTCTTCAACACTCCTCTCCAAAACGGCACCGTTTT
TCTGTTCCAGAACTGCACTCACCATTCCGAATCAGCTGCTCTGCTAGCTGGGATAGTCCC
GAACTAAAGGCAAGCTCATCACAGTTTAAGGAACTTAAAAATGTAGCTTTTGGGATTCTT
GCTGTTTGTGCCGTGACTGCTGCCTCGCCTGTCATTGCTGCCAGTCAGAGGCTGCCTCCA
TTGTCCACAGAACCCAACCGCTGTGAGCGGGCATTTGTTGGAAACACGATCGGTCAAGCA
AATGGCGTTTATGACAAGCCAATCGACCTTCGCTTCTGTGACTACACAAACGAGAAATCC
AACCTCAAGGGGAAGTCTCTTGCAGCAGCACTCATGTCAGAAGCTAAGTTTGATGGTGCA
GACATGTCCGAGGTAGTGATGTCAAAGGCTTATGCCGTTGGAGCCAGCTTCAAAGGCGTA
GACTTCACGAATGCGGTTCTGGACCGGGTGAATTTTGGGAAGGCCAATCTCCAAGGAGCT
GTGTTCAAGAACACTGTATTATCAGGCTCCACCTTCGACCAAGCTCAGCTGGAAGATGCA
GTGTTTGAGGACACCATTATCGGCTACATCGATCTTCAGAAGATTTGTACAAACACCAGC
ATCAATGCAGACGGAAGAGCTGAGCTCGGATGCCGGTAA
>VIT_16s0050g02130.t01 cds chromosome:IGGP_12x:16:19111389:19118799:-1 gene:VIT_16s0050g02130 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAATGCATTGATTGCTACTTCCTTTTTCTTTTCTTTTCAATTTTGTTTTCTTGCCTCT
TGTTCATCTTCTCACATTCTATTTTCCTTACTTCTGGACATTTCTTTCTTGATTGTCTAT
CATTCTATACCTTTAGGCACAATAAGTCTTTTGACTGCCTTAACAAATTTGTGTAACAAT
ATGCATCTTGCAGGATATATTTATACTTTGGGTGGTACTACAGTTAATTGGATATCAAAG
TTGCAGAAGATAGTTTTACTTTCTACTACTGAGGCAGAGTATGTTGTAGTGACAGATGCT
AACAAAGAGATGATGTGGTGTAGTCTTTCTTGGAAGAATTGGGTCACAAGTATGAGTGAA
GTTCTTGGAGGCAGTCTGCCACATATGGATGACAAAAAGGCCAAACATACTACCGATGAT
CTTCATTATGGAGCTGATGATTCTTCGGGCAATGAGCAGGCAGCTGTGGTTGATGAAGTT
GATTTTAAAGTGTATTTCTTGGTTTCTGCTTTTGCTAATAACTATGTTATCCAAAATTTA
TGTTGGTTGCTTAAGTTTTATAAAAGCAATTCAACCAGGACAAATCACTACATTATATGC
ATTTTGAAGAAGATCTGTGATGATTTGGAGCTTTCTCCAATGCTATACCAGTTGTCGCTC
CTCACCATATTCTGCAATATCCTGTGTGAGCAGAAGTCCTGTCTGTGCAAGGATTATAAA
AATATTGTTTGTTTCCTGACAAATTTGGTTAGAAAAATGCTAAGGAAAATAAAAAGTCAA
CCCCTTCTTTTTGTGGAAGTTCTCTTTTGGAAAATCCGTAGAGAATGTCATTACATCACT
TCCCAATCTTTATTGCATGAACTTGGAAGTGCGAAGAAAGAAAGTGGAAAATGA
>VIT_18s0075g00690.t01 cds chromosome:IGGP_12x:18:22331744:22346849:-1 gene:VIT_18s0075g00690 gene_biotype:protein_coding transcript_biotype:protein_coding description:Flavin-containing monooxygenase [Source:UniProtKB/TrEMBL;Acc:F6GYB2]
ATGCATAGCCACAATTATCGTATTCCTGACCCCTTTCGAGATCTGGTTGTAATTTTGAGA
GGGGTTGGTTCAAGTGCTCTTGATATCTCTATGAACATTGCTCAAGTTGCCAAAGAAGTT
CACATTGCATCTAGATCAACCAAGGTTGGAGTCTTGGGAAACATGTTTGGCTATGATAAT
TTGAGGTTGCATCCTATGATAGAAAGCATCCACAGGGACGGCTTTATGATATTTAATGAT
GGGAGTGTGGTTTTTTGCCGATGTTATTCTGCATTGCACAGGATACAAGTATCATTTCCC
TTTTCTTGA
>VIT_02s0109g00130.t01 cds chromosome:IGGP_12x:2:12310840:12329135:-1 gene:VIT_02s0109g00130 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAGGAGCTACTTGGGCGAGTTAAGCAAGGATTTTGGATGTTTACAGGCTTGAATTTC
AAGTGGAAACACGAGCACAAGCAATGGGAACACAATTTCGCAAGGTCAAACAAAAGCAAG
CAAAGTTGTCCCCGAATGACGCCTCCGGCGGCGAAACGCTTCCACTCTGGCTGCGTCGTG
CCCTCAGCTATCGACTCTGACCGCCATTTCTCCAGTCGACGCGCGTCGCCGGAAGACTTG
ACGCTGATCGATTCTCTACCATCTCATCTGGCCCTCATGATGGCTTCGGTATTTGTGATA
TTGTTGCTAGTTCCATTAAGGCTGCTACCAAAGTGA
>VIT_09s0002g08760.t01 cds chromosome:IGGP_12x:9:10143081:10144030:-1 gene:VIT_09s0002g08760 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGTGGAGAAAATCCTTGAAGTTAATCCAGTTGCCATTAATGACAAGAACGAAGAAAAA
AAGAATGTAGTATTGTTAGCAGTGGAGAATAGACAGCCTGAGGTGTATGAGCTCTTAGTT
AAGAGAAAGTTTCGGAAAGATAGTGTGTTCCGAGCAGTTGACAACGACGGGAACAGCGCA
TTGCATCTGGCTGCAATGTTACGTAATTATCAACCTTGGCATATCCCTGGAGCTGCATTG
CAAATGCAATGGGAAATGAAGTGGTATAAGTATGTCAAGGATTCCATGCCACCACATTTC
TTCACTCATTACAATGACAAGAAACGCACTCCAAAGGAGATCTTCACGGAAGCCCATTCT
GAACTTCTGAAGAAAGGAGGCAAATGGCTGAACAGCACTTCCAGTTCCTGCTCCGTCATT
GCAACCCTCATTGCAGCCGTTGCTTTCGCCACAGCTGCCACTGTGCCAGGCGACTTCAAT
GAAAATAATGGGAAGCCAAATCTTGCACACCAATCAGCTTTTAATCTTTTTGCAGTTTCA
TCACTAATTGCTCTCTGCTCTTCAGTGACTTCCCTGGTCATGTTTCTGGCGATTCTCACC
TCTAGGTATCAAGAGGATGATTTTCATGAGGAATTGCCTCGGAAACTTTTATTTGGTTTA
ACTGCTCTATTCGTATCAATTGCAGCTATGTTGGTCTCTTTTTGTGCAGGACACTTCTTT
GTCCTCAAAGATGAACTCAAAAATGCTGCCCTTCCCGTATATGCAGTTACCTGCCTTCCA
ATATCATTTTTTGCTATAGCCCAGTTTTCCTTATACTTTGATCTTGCGTGGGCTACTTTT
AGGAAGGTACCACAACGAAGTTATAAGATGGCTTTCTAG
>VIT_18s0001g04880.t01 cds chromosome:IGGP_12x:18:4041678:4046983:-1 gene:VIT_18s0001g04880 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCCAGCCCTAGGATTCTCGTACCCCGGGACAGTCAAATGCTGTTCAATAAATATTCAA
GGGAACCGACGGTCTTCGTTTACTCAGCATAAGCGTTATGGTTTGGGAAAACTTTTAACT
CGGGCAAATATACCAAACGGTGTCGTTTTTCGTCTAAAGCCCAAACAAGAAGTACCGAAG
AACATCGAGGAGAAGGCGAAGATCGTATTTGGAAGGACAGAAAATATGGGGGCAGAGGAA
GAGAAAGTGCAGGAAAACGAGAAATCGAGGCCAACACAAAACCCTATGTCGCAGGCCCAG
TTCCTGTCCTGGAAACGCCAGAAGGATGCTGATGTGTCAGCTAGAAGAGACGAAGCAGCT
AGGAAACGTGTGGAGGACATAGCAGCAGGGGCAGTGCAAATGAATGGCCGAGAGCTTTTC
TTGCATGAGCCATGGGTCTTTGATAATACTCGTTATTGA
>VIT_00s0462g00010.t01 cds chromosome:IGGP_12x:Un:29689697:29690331:1 gene:VIT_00s0462g00010 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTCCATCTCATTCTCAGTCCATCAACATCTCACCTTTTCAGGCGATGAACAGTTCT
CTTCCCCCTCCACCGTCGCCGTCGTTTCCCGACGGGGACGAGGTGTGGTACGGCAACATA
CAGTATCTACTCAACATCTCGGCAATCGGTCTGTTCTGCTGCGTGTTCATTTTCTTCTTC
GTCAAGCTCCGTAGCGATCACCGGCGGATTCCGGGCCCGGCCGGGGTGGCTGCCAAGCTC
CTTGCTGTTTGGCATGCCACCGTCCGAGAAATCGCTCGCCACTGCGGCGCAGATGCCGCG
CAGTTCCTCCTCATCGAAGGCGGAAGCTGCGCCGTAATTCTGTCTATTGCTGTGTTCTCA
ACGTTTCTAATGCTTCCGCTCAATCTATACGCGGGTGCGGCGGTGAGGGAGGATCAGTTC
TCAAAGACCACGATCAATCATATCGAGAAAG
>VIT_13s0019g03810.t01 cds chromosome:IGGP_12x:13:5001203:5002266:-1 gene:VIT_13s0019g03810 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTTTTCGCCTCCTTCAACTGCCTTTCAAGGTCCTTGTGCTGCCTGCAGGTTCCTCAGA
CGTCGATGCAATGAGAGTTGTATCCTAGCTCCATATTTTCCACCAAATGAACCACTCAAA
TTCATCAATGCCCATAAAGTCTTTGGAGCTAGCAACATCGTCAAGGCCTTGCAGGAACTT
CCCCAGCCCAAGAGAGTAGATGCTGTGAGCAGCATGGTTTATGAGGCAAATGCGAGAATT
CGTGATCCAGTCTATGGTTGTGCAGGTACAATTAGCCAGCTTCACAAACAGGTTAACGAC
CTGAAAGCAGAATTGGCCATGGCTCAGGCTGAGCTCTTTATCATGCAATGCCAGCAACAG
CAACAAAATGCTAATGCAAGCTTCTTCCTGGACAGATATTTAGTCTCAGATTATTGCTAA
>VIT_00s0361g00060.t01 cds chromosome:IGGP_12x:Un:25621460:25624034:1 gene:VIT_00s0361g00060 gene_biotype:protein_coding transcript_biotype:protein_coding description:(E)-beta-ocimene/(E,E)-alpha-farnesene synthase [Source:UniProtKB/TrEMBL;Acc:D7U6G8]
ATGGATAGTGCCAACCACATACAAAACAGCCAAGAATTTTTACAGTGCCAAGCTAAGTCC
GAAGGTGTTGGAACGATATCCCAAAGGAGATCTGCCAATTACAAGCCAAACATCTGGAAA
TATGATTGCGTCCAGTCTCTTACAAGCGAATACATGGGAGAGCCATACACAAGACAGGTC
CAGCAGCTGAAAGGAGAGGTTAGGCGTGTGTTTGTTGAAGTGGTGGAACCATTGGCCAAG
TTAGAGTTCATTGACAGCATTAAAAAGCTAGGTCTGGGCAACTTCTTTGAGGAGGAGATC
AGAGAAGCCCTTGACACCATAATGTCTGATAAGAACAACAGTCCCGGTATCAAAGCAAAT
CTCTATGCTGCTGCACTATGCTTTAGGCTTCTCAGGCAACATGGTTATGGAGTTTCACAA
GATATGTTTAGCGGCTTCATGGAGGAGGTTGGTATGTTCTCTAAAAGCACATGCACAAAT
GTCAAAGGAATGATTGAGCTTTTTGAGGCCTCGCATCTCGCCTTGGAAGGTGAAAACATC
TTGGACGAGGCTAAAGCTTTCTCTTCGGGATATCTCAAAGAAATCATTTCTAACCTAGAT
AATAACCTGGCTAAACAAGTGGTTCATTCTTTGGAGCGTCCATTGCACTGGAGAGTGCAG
TGGTTTGATATCAGGTGGTACATTGATTTCTATGAGGAGGAAGGAGTGAACCTGGATTTA
CTCAAGCTTGCTAAACTTAACTTCAACATGGTTCAAGCCGTACATCAAAAGGATCTCAAA
CACATCTCCAGGTGGTGGAGGAATCTGGGCCTCATTGAAAATTTGAGCTTCACAAGAGAT
AGATTGGTGGAAAGTTTCCTGTGTGGTGTGGGATTCTCATCTGAACCTCAGCATGGATCT
TTTCGCCTATGCATTACAAAAGTCATTATTTTTATTCAAGTCCTTGATGACGTTTATGAT
ATTTATGGTTCGTTGGATGAGCTAGAGCAATTCACCAATGCTGTTGATCGGTGGGATTCC
AAGGAAATCCAACAACTTCCTGAGAGTATGAAGCTTTGTTTCCAAGTACTCCAGGACACA
ACTAATGCAGTGGCTAATGAAATTCAGAAGGAAAAGGGTTGGGACAATGTATTACCCATG
CTACAACAAGCGTGGGCAAATTTTTGCAAGTCTTTATTTGTGGAAGCCAAGTGGTACAAC
AAGGGTTATACACCAACCCTGCAGGAATATCTAAGTAATGCCTGGATTTCATCCTCAGTT
TCATTGCTGTCTGTTCATGCAATATTTTTCTGTGTACCACATGAGGCTAAAGAGGAGATG
GTAGATTTTCTGGAGAAAAATCAGGAACTTGTGTACTCTTCATCTCTGATTCTTCGTCTC
TGTAATGATCTTGGGACTTTGGAGGCAGAACTAGAGAGAGGTGATGCCGCTTCATCAGTT
CTATGCTATATGAAAGAAGTGAATGTCTCAGAGGAGATATCTCGGACGCACATTAGAGGC
ATGTTAGTTAAAACTTGGAAGAATATGAATGGACATTGCATTGCCTCATCTCCATTACTA
CAACCAATTGTCAACATCATCACAAATATAGCAAGGGTAGCACAGTGGATTTACCAATAT
GGAGATGGGCTTGGAATTCCTGACCGTGAAACAAAGGCTCAGATTCTGTCTTTACTGATT
GAACCCCTTGGAATCAACTAA
>VIT_04s0023g03250.t01 cds chromosome:IGGP_12x:4:19796274:19801162:-1 gene:VIT_04s0023g03250 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTTGTTATTACTAGTATTATGTGGAGGGTGCATAATTTTAACAACTGAGGGAATGACA
GCAGAGGAAGATATTGACCTGTCAACTTTGACGTCTCAGCTAAGCCAAACACATCTAGTG
TGGAAGAAGGAGATGGAACAGCGCCAAACCCAGGTGGATGTATTGCAAACAAAACTTGTG
GAGGTAAGGGCTTGTATACAAGGGTCTGAGGAGGATTCAAAGAAGGAGTTAGATGTTCTT
TGGCGAAGAGTCAAAACTATGGCTATATTATTGACATACTTGAAATCAAAAGCAAGAATC
ATGGCTGTTCCTCATTTGGCCCATACATCTTGTGGTATCAAACAATTAGAAGGGGTGGGG
CTTGTTGACAAAAATGGCACACCATTGTCCAGTTGGTCTAAGAATGCTGATCTTTCTTCC
TTTGATAGTTTAGATGATGAATCATGGCTTGAAATTCGTAAGCGGCATGGCTCCTTTGAT
GAACAAGATGGAGCTTATATTGGTGAAATACTCAAGTCTGTGCAGATGGTTGCTGATGTA
ATGGAAACTCTAGTAAAGAGGGTTATTATGGCAGAAGCTGAAACTGCAGTTGAGAAGGAG
AAGGTAACTTTTAGTCAGGAAGAAATTAAAAAGAAGGCACACCAAATTGAAAACATGTCT
TCAAAGTTAGAGGAGATGGAAAGGTTTGCCCTGGGTACAAATTGTATTCTAAATGAGATG
AGGCAGAGGGTTGAAGATTTGGTGGATGAAACATCCAGGCAGAGGCAACGAGCTGCAGAA
AATGAGCAGGAGCTTTCCCGTGTAAAGCAGGACTTTGAGTCTCTGAAATCCTACGTTAGT
AGTCTCATCAGTGTAAGAGAGACACTGCTGTCATCAGAGAAGCAATTTCAAACTATTGAG
AGGCTTTTTGAACGGCTAGTTGCAAAGACAACACAGCTGGAGGGTGAAAAAAAGCAGAAA
GAGACTGAAGTCCAGAAACTTATGGAAGAAAATGTGAGGTTGAGTGCTCTTCTTGACAAG
AAGGAGGCCCAACTCTTGGCCATGAATGAACAGTACAAGTTAATGGCCCTGAGCTCTTCC
AACATTTAA
>VIT_08s0007g01290.t01 cds chromosome:IGGP_12x:8:15381967:15387791:-1 gene:VIT_08s0007g01290 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCGGATGGTTTTGAACCCTACCACGTACCACAGCAGAGCAGAAGGGATAAGCTTAGA
GTTGTGGCTCAGAACCACTCGGGCTGTGTGGAGGCAGCTACTAATCTTCACGGCTGCGCC
GGTTTGCTCCCTCTCTACGATCCCTCACTGTTGCCTTCCGATTTGCTAACTTGCGCCAGC
GCCAGCGCCCATGAGTTTCAGCACCATAGCCACCCACTTTCAGGCTCTGCTGAGGCTTGT
AAGGCAAACCCAGGTTGTGTTGTTAAAGAAGAAGGCGTGAATTTGATGGGTTATGTTGGT
GGAATCATGAATGCGTCTTCTTCTTCTTCGACTTCGCACCATCCTTACTTGGATCCGCAA
TCTTCGTTGCCCATAAACCCCAGCTCGATTCAGGATATGAACCATAACCCTTTTTTTTAC
GCTCCCCAAAACCTCAGAGATTTTGATCAGTCCTTCAATGGTGGTGAGATGGTGGTGTTC
AAGCCGGAGCCCTTATCATTGACCCATCATGAGTCTAACACCACTGGGCAAGGGCTGTCT
CTATCTCTGTCCTCTCACCATACCCACCAAAACAATCTTCCACTGGAACTGAATCTTCAA
AGGTACGGGTCTGCAATTTTTAGCGATAAGGTTACTGGTGGCTATATGGTTCCGGGCATT
GTTGGTGGTAGTGGTTCCACCTCTAATGATGTATCGAGGAGTTCCGTCCCTCTCGGGCCT
TTTACAGGCTATGCTTCAATTTTGAAGGGATCGAGGTTCCTGAAACCTGCACAGCAGTTG
TTGGAGGAGTTCTGCGACGTGGGCTGCGGACTTTACGCCGAAAGAGTCTCAGCGGATTCG
TCGATGATGGATCCTCCAATGGAGAGTCTGAGTGGAACTGGAATTGTTGATGATCCGCTC
AGTTGTGGAGATGGGGGGGAGCACCGGAGAAAAAAGTCGAGGCTAATTTCGATGCTAGAC
GAGGTTTACAGGAGGTACAAGCACTACTATCAACAAATGCAGGCAGTTGTAGCATCATTT
GAATCGGTTGCTGGTCTCGGCAATGCGGCTCCCTATGCCGACTTGGCTCTGAAAGCTATG
TCTAAACACTTCAGGTGTTTGAAGAATGCCATTACCGACCAGCTTCAGTTCACAAACAAA
GCCCATGGACAAATAAGTCATGGAAAAGATGAAAGTCCAAGGTTTGGGAACACTGATAGA
GGCCTTTATGGTCAAAGACCCATGCACAGCTCAGGATTTCTTGAACATCAACCTGTTTGG
CGACCCCAAAGGGGACTTCCTGAGCGAGCTGTAACTGTACTCAGGGCATGGTTGTTTGAA
CACTTCCTTCACCCTTATCCTACTGATACAGACAAGCTAATGTTGGCTAAGCAGACTGGT
CTCTCCCGGAACCAGGTTTCCAACTGGTTCATCAATGCAAGAGTAAGACTTTGGAAGCCA
ATGGTGGAAGAGATACACACGCTGGAGACACGACAAGCTCAAAAATCTTCCCAGAGAGAG
GAGCGAAGTGCCGACAGGCAGAGTGATCATTTACCTTCAGCAAACTCACTTGTGTTTGAA
AATCCATCCACCTCTGCTCAAAGAGTTCAAGACGCCCCATCAAAACGTACCAGAAATGAG
CTTTCTGAGGTACACGTGGGTAGTGAGGAGCCAATGAATTTATCTTACAATAACTTGTCG
GCCCATCCGCATGTGGGAGTTGGTGTGAGCACTGCAGGTGGAAGCAGTAATGTTTCCCTG
ACACTGGGTCTTCACCAGAATAATGGGATTGGTTTATCAGAGTCCTTTCCTATTAATGCA
GCTCAACGTTTTGGGCTTGGCCTTGATGCAAATAGCGAGGGATATGTTATAGGTGGTTTT
GAAGCACAAAATCGGCATTTTGGAAGGGATGTTATTGGAGGGCAACTTTTACATGATTTT
GTTGGCTGA
>VIT_08s0007g06290.t01 cds chromosome:IGGP_12x:8:20070508:20072280:-1 gene:VIT_08s0007g06290 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAACCGTTTTCAGAAACTCAGAACGAAGAGTGTTTTCAAATGGGTTTCTCTAAATTTC
TCAGAAAACCTCCTCAAATCGTCAAAAGCCCCATTTTTGGGTGCTGGGTCATTTCGCATT
AGGCAAAACCCTAGATTTTATGGAAGAAAAACAAGCGCTGAATCCGAAAATTTTCAAAGT
CCGGTGGAAACCTCGACCGTTGATTTTGAAAATGTTGGCCATATTTCTCGGACAACCAGG
GCGCAAGCTCAAGCCGCATTGTTGGAATACTTGCACTGTACTAGGTCCTTACAGTTTATG
GATGCAGAGAATATGAGTAAAAATTCTCCATTTTTTCTTGAAAAGATTTTGGGAAAGGTA
AAAAATGAAGCAGAGATAGGGAAGTCCATAACCAGGTTCTTGCGGTACCACCCCATTAAT
GAGTTTGAACCATTCTTCGAAAGTTTGGGTTTAACACCTTCTGAGTTTACAAATCTTCTT
CCACGGAATTTGATGTTTTTGTGTGATGATCAGGTGTTGTTAGAGAATTATTATATTTTG
TGTAATTATGGGATAGCTCGGAATAAGATAGGAAAGATTTACAAGGAAGCACCAGAGGTT
TTCAGATATGATTCTGGGATTTTGCGGTTGAAGCTTCAAGCTTACCTAGAACTGGGGTTA
AGCCAATCTACTATGATAAAGGCTATTGCTTCAAGTCCATATCTTTTGATTGGAGATGCC
AATATGGATTTTGTTAAGGCTATGGAAAAGTTGAAGAGTGTGGGGATCGAATCCAATTGG
ATTGAGAAGCATTTATCAGAGGGAAATTATTATGATTGGAGCCAAATGGTTGGACTTCTA
TGCTTATTTAGCAAAATGGGTTTCAATGGAGAGCAGTTAGGTGAATTGATAAGACAACAC
CCTGGGATTCTGCTTGAGTGTTCAGGGAATTTGGCACATTCTTTAGTTGGGTTATTGTTG
AAGTTTGGTTTCACCACGAATGAGATATATATATTTTTTCTGCAGTTCCCACCAATTGAA
TTTGGGAAGTTCTATAGGAATTTCAGGCACTGCTATCTATTTCTGATTGAGATTGAGTTG
GAGGTTGAGGAGATTGGCAGAATTGTTCGTTCTCACACTGTGCTGCTGGGTTCATGTGCA
CTGAAGAGAGTTAACAGTTTACTTGCTAACTTGAATATTGGGAAGAAGCGACTTTGTGGA
ATTATCAAGGATAATCCACAAGAGTTGAAGAAGTGGGTTTTGGGATCGAGGGTTGGACCA
TTACCAAACTTAGGGGAAGACCTAAGATCACAGCTACAGAAGACCAAGTTCTTGTCAGAC
TTGGGATATGTTGAGAACACAAAGGAAATCGAAAAGGCACGCAAGCTATTCCGAGGCAAA
GGAATGGAGCTTCAAGAGAGATTTGATTTTCTTATGAAAGCTGGTTTGGATAGAAAGGAT
GTCTCCGAGATGATCAAAGTAGCCCCTCAAATTCTGAACCAATCAACTGATGTGATTGAA
ATGAAGATTGATTATTTAATACATGCTTTGGGTTATCCCATATCGTCTTTAGTGACATTC
CCTTCTTATCTTTCCTATACGACTGAAAGGGTTGAGCTTAGGATGTCTATGTATAATTGG
CTCAAAGATCAAGGAGTGGCAGAACCCAATTTGGCATTGAGCACTATTATTGCTTGTTCA
GATAATTATTTTATAGACCGTTATGTAAATCGTCACCCCAAAGGAGCTGAAATTTGGGAG
AAGTTGAAGCAAAAAATTTATTCAAATTAA
>VIT_09s0002g06730.t01 cds chromosome:IGGP_12x:9:6633791:6644039:-1 gene:VIT_09s0002g06730 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCTGCTGGCGGTTCTATTCGCCAACTCAGAAGGCAACATATTAGTCGAACGATTTAGT
GGAGTCCCAGCAGAAGAACGGCTGCATTGGAGATCTTTCTTGGTTAAATTGGGAGCGGAC
AATCTTAAAGGCGTAAAAAATGAGGAGCTTCTTGTTGCTTGCCACAAATCAGTGTATATC
GTTTACACGGTGCTCGGAGATGTCAGCATCTATGTTGTGGGCAAGGATGAGTATGATGAA
CTTGCTTTGGCAGAAGTGATCTTTGTTATAATCTCATCTGTGAAAGATGTCTGTGGGAAG
CCTCCAACTGAGCGCCTCTTCCTTGATAAGTACGGAAAGATATGCTTATGTCTGGACGAA
ATTGTTTGGAAGGGAATGCTGGAGAATGCTGACAAAGACAGAATCAGGAGACTGACAAGG
TTGAAACCTCCAACTGAGTTCTGA
>VIT_08s0007g07730.t01 cds chromosome:IGGP_12x:8:21184498:21188516:-1 gene:VIT_08s0007g07730 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGTTGATGTCCAAGACTATATCATTCTCTTCCTCATTTGGCTCGTATCTGTCGTCGTG
GTTCATGCCTTGTTCACCAAGTACCGGACCAGGGTGCGACGACCACCGGGCCCACTAGCC
CTACCTATCATCGGACACTTCCACCTCCTCGGCTCAAAACCTCACCAATCCCTTCACAAG
CTCTCGCTCCGCTATGGACCGCTATTTCAACTCTTCCTTGGTTCCATCCCTTGTGTGGTA
GTTTCCTCTCCGGAGATGGCAAAAGAGTTTCTCCAAACCCATGATATTTCATTCTCCAAC
CGACCCAAACTCAGCAATGCTGATTACCTAACCTACGGCTCGGTTGATCTTGCCTTTTCT
TCATATGGGCCCTATTGGAAATTCATGAAGAAACTTTGCATGACCAAACTTCTCGGCCTC
CAAACACTAGAGAAATTTGTCCCAGTTATGAGAGAAGAGAGACATCTATTTTTGCAAACA
CTATTGGGAAAAGCTGAAGCAGGTGAGACAGTTGATGTTAAAGGAGAGATTATGAGGCTA
ACAAACAACTTAGTAACAAGAATTCTTCTGAGGCACAGGTGTTCTGGGAATGAGGATGAT
GCTAGCGAAGTGAGAGAGTTTATGAAAGAGATAGTACAGCTCACAGGCAGTTTTAACTTG
GCAGATTTTATCTGGTTTTGTAAGAATTTGGATCTGCAAGGATTTAAGAAGAGAGTCAAA
GAAGCTCGTGGAAGGTTTGATACAATGATGGAAAGGATTATGAAGGCTCATGAAGAAGAA
AGGAGGAAGAAAAGGGATCCGAATAATGGAGGAGACACAGTGAATGACTTGCTTGATATT
TTACTTGATATAATCGAAGATGAGAAAGAGGAGATGAGACTGACAAGAGAGAACGTCAAG
GCCATCATCCTGAATATTTTTGGAGGGGGAACGGATACATCTGCTGCAGCAGCAGTATGG
GCAGTAGCAGAGCTAATTAACCACCCAAACATTATGGAGAAAGCAAGACAAGAGATAGAT
TCTGTAGTGGGAAAGGATAGACTTGTGGAAGAATCAGATATCGCAAACCTTCCTTATCTT
CAAGCCATTGTTAAGGAGACACTTAGGCTCCATCCTCCTGGTGCAGTGATCGCTAGAGAA
TCTATTGAAGATTGCACCATCAGAGGTTATGATATTCCTACAAAGACACAATTATTTGTT
AACTTGTGGGCTATTGGAAGGGACCCAAATTACTGGGAGAACCCACTTGAGTTCTGGCCT
GAGAGGTTCCTGAGAGAGGATGGGAGTTTAAAGAGTCAGTTGGATGTAAAGGGGCAACAT
TTTCATCTACTGCCATTTGGGAGTGGAAGGAGAATATGCCCTGGAATTTCACTAGCACTA
CAGGTTGTTCAGACAAGCTTGGCTGCTATGATTCAATGTTTTGAATGGAGGGTTGGTGGA
GGAAATGGAAATGTTGATATGGAAGAGGGACCTGATGCAGCCCTCGCACACCCTTTGGTT
TGTGTCCCAGTGGCCAGGTTGAATCCATTTCCAAATTATACAATGTAA
>VIT_04s0008g03880.t01 cds chromosome:IGGP_12x:4:3199857:3211964:-1 gene:VIT_04s0008g03880 gene_biotype:protein_coding transcript_biotype:protein_coding description:Beta-adaptin-like protein [Source:UniProtKB/TrEMBL;Acc:D7SUE8]
ATGGCTCCTCCGGCACAATCTCAACGATCTCCATCACCTTCTCAACCTTCTGGAAAAGGT
GAAGTCTCAGATCTAAAGTTGCAGCTCCGGCAGCATGCTGGCAGCCGGGCACCAGGTGCT
GATGATGCAAAGCGGGAGCTGTTCAAGAAGGTGATCTCATACATGACAATTGGCATCGAT
GTGTCGTCGCTTTTTGGTGAGATGGTGATGTGTTCAGTGACATCTGACATTGTTCTGAAG
AAGATGTGTTATCTCTATGTTGGGAACTACGCTAAGGGAAATCCTGATCTTGCACTTCTA
ACGATCAATTTCCTTCAGAAGGATTGTAAGGATGAGGATCCAATGATTCGTGGGCTTGCT
CTGAGGAGTCTTTGTTCGCTGCGAGTGGCGAATTTGGTGGAGTACTTGGTGGGTCCCTTG
GGATCAGGGCTGAAAGATAGTAATAGTTATGTAAGGACGGTGGCAGCTAGTGCAGTTCTG
AAATTATATCACATATCAGCTTCAACATGTGTTGATGCAGATTTTCCAGCAATTCTTAAG
CATTTAATGCTTAATGATCAAGATACTCAAGTAGTTGCAAATTGTTTATCATCTCTACAA
GAGATCTGGAGCTCAGAAGCAAGTACCTCTGAGGAAGCATCCAGGGAGAGAGAAGCTTTG
CTTAGCAAGCCAGTGATATATTACTTTTTGAATCGGATCAAGGAATTCAGTGAATGGGCA
CAGTGTCTCGTACTTGAGTTGGTCGCTAATTATGTACCTTCAGATAACAGTGAAATATTT
GACATTATGAATCTCCTGGAGGATAGGCTTCAGCATGCAAATGGTGCTGTTGTACTAGCA
ACGATCAAGGTGTTTCTACAATTGACCTTGTCCATGGCTGATGTTCATCAGCAGGTGTAT
GAACGGATTAAAGCCCCTTTGCTTACCTTAGTGAGCTCAGGAAGTCAAGAACAATCTTAT
GCAGTTTTAAGCCACCTTCATCTCCTGGTGATGCGGGCACCCATTCTATTTTCCTCCGAC
TACAAACACTTCTATTGCCAGTACAATGAGCCATCTTATGTTAAGAAGTTGAAACTCGAA
ATGTTGACTGCAGTGGCAAATGAGAGCAATACTTATGAAATTGTGACGGAATTATGTGAA
TATGCTGCAAATGTTGATATTCCCATTGCAAGAGAGTCAATCCGGGCTGTTGGGAAAATA
GCACTGCAGCAGTATGATGTGAATGCTATCGTTGATAGGCTTCTTCAATTTCTTGAGATG
GAGAAGGACTATGTGACTGCTGAAACTCTGGTGCTTGTAAAAGATCTGCTAAGGAAATAT
CCACAATGGAGTCATGATTGCATTGCAGTTGTTGGGAATATCAGCAGCAAAAATGTTCAG
GAGCCCAAGGCCAAGGCAGCTCTTATATGGATGTTGGGGGAATATTCTCAGGACATGCAT
GATGCTCCTTACGTTTTAGAAAGTGTAGTTGACAATTGGGATGATGAGCATTCTGCCGAG
GTTCGATTGCATCTTCTTACAGCAGTACTCAAGTGTTTCCTGAAAAGGCCTCCTGAGACT
CAGAAAGCATTGGGAGCTGCATTGGCTGCTGGTCTTGCTGATTTTCACCAGGATGTTCAT
GATAGAGCCTTATTCTACTACAGGCTTTTGCAATACAATGTATCTGTGGCAGAGCGTGTT
GTGAACCCTCCAAAGCAAGCTGTTTCAGTCTTTGCAGATACTCAAAGCAGTGAAGTCAAA
GATCGCATATTTGACGAATTTAACAGTCTATCTGTTGTATATCAAAAGCCATCTTACATG
TTTACAGATAAGGAACACCGGGGCCCATTTGAGTTCTCAGACGAACTTGGAAGTCTATCT
ATTGGGGCAGATTCTGCAGATAATGTCGTTCCAGCTCAGAGAGTTGAGGCAAATGACAAG
GATCTGCTTCTAAGTACTTCAGAGAAGGAAGAAAGTAGAGGTGCCACTAACAATGGTTCT
GCTTACAATGCTCCTATGTATGATGGTACTTCTATGCCCACAGGTGCTTCACAATTGCAA
TCTGAACTGGCAATTTCAAACACAATGGTACCATCCCACTCTCCATCATCAAGCTTGGCC
GTTGATGATCTGCTCGGTCTAGGTGTACCACTTGCACCTGCATCTCCTCCTCCTCCTCCT
CCTTTGAAGCTTAATGAAAAAGCTGTTCTAGATCCAGGCACCTTTCAGCAAAAATGGCGC
CAACTACCAATTTCTTTATCACAGGATTACAGCATGAGTCCTCAAGGAGTTGCTGCATTG
ACAAGACCTCAAGCCTTCCTCCGGCACATGCAGGGCCACTCCATCCACTGCATTGCCTCA
GGTGGTCAAGCCCCAAACTTCAAGTTCTTTTTCTTCGCGCAAAAGGCAGAAGAACCGTCA
ACCTTTCTTGTAGAGTGTATAATCAACACTTCATCAGCTAAAGGACAAATAAAAATCAAG
GCCGATGATCAAAGTATGTCACAGGCTTTCTCAACTTCATTCCAATCAGCCTTGTCTAAA
TTCGGAACAACATAG
>VIT_02s0012g02500.t01 cds chromosome:IGGP_12x:2:9560531:9563757:1 gene:VIT_02s0012g02500 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGATAACGGAGGACGCCTTGCTGACGTATCAGACGATGATCAATACGCTTGATGGGGTG
AGAGATGAGATGGGCGCGAGTGCGAGCCCTTGGGCCAAGTGGACCCGGTCATGGACGGCG
GAGGAGAATCGCCACGGGGATCTGTTGAGAACCTATCTCTATCTTTCTGGTCGGGTTGAT
ATGCGTATGATTGAGAGGACGGTGTAG
>VIT_10s0405g00010.t01 cds chromosome:IGGP_12x:10:1216991:1220185:-1 gene:VIT_10s0405g00010 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGTTTTTCTGCTCACCATAATGTTTCTATATTGTGTTTTGAACTCAGAGCAGCCTGGA
GTTGTAACTGCGAGATTTGGTGAAGATATAATTATTGGAAACCTAGACACTGGTGTTTGG
CCGGAATCAGAAAGTTTCAATGACCAAAGTGGAAAGGCTACTCACATGTTTCTTATTTTT
GGTTTGTGCGTGAAATGTCAAATGAATGTTGTAATGATTAGGAAGCTGATTGGAGCGAGG
TGCTTCAACAAAGGGGTTGAAGCAGAGTTGGGGAATTCGCTCAATTCTTCCTACCGAACT
GTACGAGATACAAGTGGGCATGGCACGCATACACTGTCCACAGCTGGTGGTAGATTTGTT
GGTGGAGCAAACCTCTCGGGTTCAGGCTATGGAACTGGAAAGGGCGGCTCTCCTAGTGCT
CGAGTTGCTTCATACAAGTCTTGCTGGCCAGAGTGCAATGACGCTGATGTAATGGCTGCC
TTTGATGCAGCCGTACATGATGGGATCTTGCGATTATTTCTTGGACAGCATCGCAATTGG
ATCCTTTCATGCTGTCCAGAATGGAATTGTTGCTGTCTGACCCACGCCTGGAAGTGTTAG
>VIT_00s0181g00220.t01 cds chromosome:IGGP_12x:Un:7906299:7916137:-1 gene:VIT_00s0181g00220 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCAAACTAGGTATATGGAGAGATCCAACAGCCTCGCGAGGGAAAAGAGGGCTTTGGAT
CCTTCTTCAACGGAAGAAGGACAGTCTGATAGGAAACGACCTGCTCTGGCTAGTGTAATA
GTTGAAGCTCTGAAGGTGGATAGTCTGCAGAAACTTTGCTCATCATTGGAACCTATTCTT
CGGAGAGTTTTTGATTTGGTTTACCGTCTTACATTTTTCTCACTGACCAAACGGGAGGGT
TGTTTGGAAGCTCACAAAATGCAAACTAGGTATATGGAGAGATCCAACAGCCTCGCGAGG
GAAAAGAGGGCTTTGGATCCTTCTTCAACGGAAGAAGGACAGTCTGATAGGAAACGACCT
GCTCTGGCTAGTGTAATAGTTGAAGCTCTGAAGGTGGATAGTCTGCAGAAACTTTGCTCA
TCATTGGAACCTATTCTTCGGAGAGTTGTCAGTGAAGAGGTGGAGCGTGCTTTGGCAAAG
TTAGGCCCAGCTAAACTTACTGGGAGGTCATCTCCAAAAAGGATAGAAGGGCCTGATGGA
AGAAACTTACAGCTGCAGTTCAGGTCCAGGTTATCTCTCCCTCTCTTTACTGGAGGGAAA
GTAGAAGGGGAGCAGGGTACAACAATCCATATTGTCCTGCTTGATGCAAGCACTGGGCAT
GTTGTAACATCAGGTCCAGAGTCCTCAGTAAAACTAGATGTTGTTGTACTTGAAGGTGAT
TTCAACAATGAAGATGATGATGGCTGGAATCAAGAAGAATTTGAGAGTCACGTGGTGAAA
GAGCGTGAAGGAAAGAGGCCACTTCTGACTGGTGATTTGCAAGTAACCCTGAAGGAAGGT
GTAGGGACGCTAGGAGAGCTGACATTTACTGACAACTCAAGCTGGATAAGGAGCAGGAAG
TTCAGGCTAGGGCTGAAGGTTGCCTCAGGCTATTGTGAGGGCATGCGTATTCGTGAAGCA
AAAACAGATGCCTTCACTGTTAAGGATCACAGAGGGGAATTATACAAGAAGCACTACCCT
CCTGCATTGAATGATGAAGTTTGGCGATTGGAGAAGATTGGCAAAGATGGGTCATTCCAC
AAGAGGTTGAATAAAGCTGGAATATTCACTGTTGAGGACTTCCTACGACTTGTAGTTAGA
GATTCACAAAGATTACGGAATATTCTTGGAAGTGGCATGTCAAATAAGATGTGGGATGTT
CTTGTGGAGCATGCAAAAACTTGTGTTCTAAGTGGGAAACTTTATGTTTACTATCCTGAT
GATGTGAGGAGCGTAGGCGTTGTGTTCAACAATATCTATGAGTTGAGCGGCTTAATAGCA
GGTGGACAATATCACTCAGCTGATTCTCTTACTGACAATCAGAAGGTCTTTGTGGATACC
TTGGTGAAGAAGGCATATGACAATTGGATTAGTGTTGTAGAGTATGATGGCAAGTCTCTT
TTAAACTTTAACCAAAGTAAGAGCTCAGGTTCTTCTCAGACTGAAGTTGCGATGGGCCCA
CAAGACTATCCTAACTCCTTTGACCATCAGCTCACTTTACCAAGCTTGCCGGTTTCAGTT
CCACCACAGCAGCCTTCTGTGGGTCCAAGCATAACGGTTGGAGGGTATAATGATAATATG
CCCACCAGATACCCAATACAGTCGCAGAACGTAAATCTCAATGCTCCTATGCAGTTTGAT
GGCACCTCATTCCCTCTCCAGAATCAGTTGATTGGCAATCCACACCAAGTGCAACTTCCA
AGTAATGAAAGCATGCTTGCCCTTGGTCCCCCGCCAGCAACCACACCAGGCTTCCAATCT
GTTGGGACTTCAAATCTTAATTATAGAGTTGATGACTTCTTCCCAGAGGATGAGATTCGC
ATGAGAAGTCATGAGATGCTTGAAAATGATGATATGCAGCACCTGCTTCGTATCTTCAAC
ATGGGCAATCATGGTCATGCCTCTGCAAATGTTACTGATGATGGGTATCCTTATTCATCA
GCATACATGCCCACTTCATCTACAGGTTATGGCTTTGATGAAGATCGAAGCCGTTCGTCA
GGCAAAGCTGTTGTAGGGTGGCTGAAGCTCAAGGCAGCACTGAGATGGGGCATCTTCGTT
AGGAAGAAGGCTGCTGAAAGACGGGCTCAACTTGTTGAGTTGGATGAACCATAA
>VIT_02s0025g01350.t01 cds chromosome:IGGP_12x:2:1267450:1273671:1 gene:VIT_02s0025g01350 gene_biotype:protein_coding transcript_biotype:protein_coding description:DNA primase [Source:UniProtKB/TrEMBL;Acc:D7TVE8]
ATGGAGATCGATGGCTGTGAACCCGAAGGCCAAGAAAAGATGAGAGAAAATGCCGTTCCC
GATGGATTCAACGCTAATTATCTCAAAGTCTACTATGGAAAGCTTTTTCCACACTCGGAT
TTGTTTAAGTGGATGTCTTATGGAAATGATGGGAAGCATCCTGCCTGCGATCAGTCCTAC
ATTGGCCGAAGAGAATTTTCTTTCACATTGGCTGATGACATTTACTTGCGGTTCCAGTCT
TTCAACAGCGTCCACGAAATGGAAAATTCCATCAAAGAAAAATGCCCATTCAAAATAGAT
ATTGGGCCCGTGTATAGTGTGGATCCTACTAAGAGGCATGCATATGCACAATCCGGTGAC
AATGTTTTTACTCCAGTTGAGAGGGAGCTAGTTTTTGATATTGATATAACAGATTATGAT
GATGTTAGATATTGCTGCTCCGGTGCTGATGTTTGCTTGGACTGCTGGCCTCTAATGACA
GTAGCTATTAAAGTGATTGATACTGCCCTCAGAGATGATTTTGGGTTTAATCACATTCTT
TGGGTGTATAGTGGTCGACGTGGTGTCCATTGCTGGGTTTGTGATGGAAGAGCAAGAAGG
TTGTCCAATGAACAGAGGGCTGCTATTGCTGATTATTTCCGGGTCTACAAGGGCAATGAA
AATAGTCAGAAAAAGGTTTCTTTAGTAGGTCCTGCTCTCCACCCTTTCCTTGCGCGTTCA
TATACTGAAGTTTTGAAGGATTTCTTTGAGGAGAAGTTACTCCCTGGTCAAAAGTTATTT
TCAACTGAAGAGAGATATGAGAAGATCCTAAAAATAATTCCTGATGAATCTATTACTTCT
GAGCTTCGGGGAAAGTGGCAGGAGAACAGGCGGTCCTCCATTTCAAAAGAAGATATTAAT
GCCATTCGTTGGGAGCAACTAAAACATATGCTGCAATCTGGAAAGCAGAAGGCACAAGGT
CTTCGCAGGTGTGTTGAAGAGATTGTGTTCTCTTATACCTACCCTAGGCTTGATATGGAG
GTTTCAAAACACATGAACCATTTGCTAAAGGCACCATTTTGTGTGCACCCAAAAACAGGT
CGTGTGTGTGTTCCTATTGACCCTAAAAGTTGTGAGGAATTTGATCCTACCAGTGTACCA
ACCCTTTCCAAGCTTTTGGAAGAACTTAACATGGGAGGTTTTAGAGCAGATGCAGATGAT
GAATGGGAGAGAACCTCACTTGGAAAATCAGTCAAGTTTTTCAGATTATCATTCTTGCAG
CCTTTACTGAAGTCCTGCAAGGAGGAGATTGAAAGTGCTTACAACGCCAAGCTTCAGCTC
TCAAAGAATTCTCTGAGTTGGTAG
>VIT_18s0001g05740.t01 cds chromosome:IGGP_12x:18:4465943:4475083:-1 gene:VIT_18s0001g05740 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTCCATGGCCTCCTCCTCCTCCACAGCCTCCGGCGGTCTCCACCTGGAGGCGTTGCCA
CTCATCGATCTCCGCTTCCTTTCCCAATCAGAACTCCAGGCCCTCTCTCTCACTTCTTCA
CACTCCTCCGATCTCCGCCGCTGCGACGACGTTGTCATCCCCAAAATTGACCGCTCCATC
TTCAATGAAAGCGCCGGTAGCCGAAAACAGACATACTCTCGCCTCCGCCTCGCCCCTCGC
AAGCCCGATATCGCTGCCACCATTCCCCGCCGGCCCAGATTCTCCCCCCACCTTAACCAG
AAAGCTGCCCTTGAGCCCGTCGATGAAGAAAACACCTTAATTATCGGACTCCTTAAAGGC
TTGTTCGCTACCGAGACTCACGCCGATGACCTAATCCCGGTTCAAGTCGAATATAGGGAA
TCGTCTAATGAGATTTTGCAAAATATTCCCATTGATGTTGTTGCCGACAGTGGGAGGAAG
AGGAAGCGAGGGCGACCCAAGAGCGAGAAGACGATAGCTGTTTATCAGAATGGTGGAAGC
GGTGAAGGTGGGGGTATGGGGATTATAAATAATAATGGTGTCGTCGTAGATGTTGCGGCT
TTGGCGAATGCGGAGGACCCTTTTGGTCCGGAATTGAGGAGGAGGACAGAGGGTTTGACC
ACAGAGGAAGAGTTGTTAGGGTTCTTGACGGGTCTGAGTGGGCAATGGGGGAGTAGGAGG
AAGAAGAGGAAGATTGTGGAGGCAAGTGATTTCGGAGATGTATTGCCCCAGGGTTGGAAG
CTTTTGCTCTCTATGAAGAGGAAAGAAGGCCGCGTCTGGTTATTCTGTCGCAGATACATA
AGCCCTAATGGGCAGCAGTTTGTGTCCTGCAAGGAAGTTTCTTCATGTTTGCTTTCTTTG
TCTGGACTCCAAGATGCAAGACAGCCAAATTATGGTCACAATGATGAGAATAGTCAACTT
GCCCATCAAATTTCTCCTGGAAATGCAGCTGGTCTTACCCTCAAAGATGACAATAGTAAG
GATGGTCTTGTTTGCTCTTCACCATCAACCGTTACTACTATACCAACTCATCATGAGAAG
CAAGCCACCTTATTGAACATGGGTAATTCATGGGAGGTCAAAGTGGGGGAAATTTTAAAA
TGCCATAAATGTGCCATGACATTTGATGAGAAGGATGATTTATTGCACCACCTATCATCA
TCTCACAATGGGACTGCAAATAGCTGTAAACTCAGTTCATCCATCTGCAATGAGGTGATA
ATGAAAGAGGGAAAATATGAATGTCGGTTCTGCCATGAGATATTCCATGAAGAGAATGGT
TACAATCGCCATGTTGAGATCCACACAAAAACATCTGTTAAGAACGCTGAAACATCAGTG
CTAAATAGTGATCCCACTCCCTTGGATGGACTTGTCAGTGATTCTATTGAGAAAACTACA
AATGGCCAAGCCAATGATGGAATGAGTTTTGGTCTTACCCATAAGACACCAAAAGCAGAT
TCTATTAAAGAAACTCATATTGGCAAATCCAATAATTCTTTCTTTCATATGGGGCAGCAC
TTTGAGGTGACCCAAAATGATGGAACTTTTGCTGACGAATCTGTTGACGAGCAGGATAAA
GATTGTAATACAAGAAATGATAGACTGGGGAAGGTGCATGAGGCTCCTGATATTTTAGCT
GCTAAAACTAGTCTTGCTGAAGCTGCCTTGTCCACAAGTGAGGATAGAAGTATTCAGAAA
GCTTCCAATGAGTCAAATGTTCTCAAATGCCCCACAGATGGAATCAATGAATTATGTGGC
AGCGAGGAAAGAATTTCTGAAAGTTATTCAGTTGCTCCTTCTGAAAATCAGCAAACATGC
GAGGTTGAAGACAATGTGCATGGTGCTTCCACTAGCTTAAAGAAAGAGCTCAGGCAGGAG
ATAAGTTATGAAAGTGGTCTAGCTACTCCAAATGATAAAGGAGAGATATGTGCTGAAATT
GCCGAGGATAGGCTTTTTACTAGCACAATCAAAGAGATGAAAATTGACTGCAAGGATGAA
TTTGGGCAACATAAGCCAATATTTGATTTTGACAATTGTGCTACATATGGTAAAGATATT
GCAATTAATGTCAAGCAGCAAAGAGTTTCTGAAGACTGCCATTTGCCTGTTCCTTTCCCA
AACGAGCAAAAATGTGGTTTTGTTAATAATATGAATGGAGTTTTATCTCCTCCCATAGTG
GAGTCCAATCAGCAAAGATGTTCTAAAAGCGTCACTCTATCTGGCAATAACCAGACATAT
GATGTCAACAATAATGGCAGTTGGGTTTCTACTGGCACTGGCAGGCCTAGAGTTGAAGCG
GACAACTCTGGGAATAATGAACTAACATTTGGCTTTGGTAGCAATCACCCTCAGCCTAAT
GAGGATGCTGTGACCTGTGTTGAGTGGGGAATAAGTTCTGGAAGCTGTTCTCTTGTTTCA
TCCTGGAAGGATCAAACATGCTTTAAAAATAACACCAATTGGGTTTCTGCTTGCACAAAA
CCCCTGCAGGAAAAAGGTTCTGAAAGTGGTGCTCTCACTCCATCTTGTAAGGAACAAATA
TGGGGCGTTGAAAATAATGGGAATAAGTTTTCCATTGGCACAATGGATAAGCTCAAATTT
GATGAAATAAACAACTCTAGGAATAGTGAGCTAATCATTACTTCTGGCAACATGAGCAAC
ACTGGAGTAGGTATGGATGTTGTGACAAGTGTTCAGAAGCAAAGAGGATCTGAAGGTTAT
TTATCTATTCTTTCTAAGAATGAGCAAAAAATTGGTGCTGAAAGTCCTGTTACTGGGTTT
TGCAATAGTGCAGTGGCAGAGCTCAAACTGGGAGGACATTCTGAGAGTGGATTTTGTATT
CAATCTGATGGTGAGCAAAAATGCGGCATTGGTAATGATTTGAAGAGGGTTTATCCTGGA
AGATTCTGGGAGGTTCCAAGACTTAGGGAAGTAGAAAATCCTAGTAATACTGAGCTGATG
ATTGGTTTCGGCAGCAGTCATGCCCAACCTGGTCAGGACGTCATGGCTGAGGTTATGTGG
AGAAGTGATGAAGAAAATGTGCTGCAGAGTGCTTTAGGCAATTCTTCATCTTCAATGGTG
CTTTCATCCAGTTGCTTTCCCACATTTGATGTAATCTCAGATAAGGGGTTAAATGGACTC
TGTACTGCAAATGAGAAGTTCAACACTGATAGCATAGAAAATCTGAAATTCAGTTCTCTG
ACTGCACAAAGAAACTCTCTTTCAGAAGATTCCAAAGTATTGTCATATGATGCAGGGATG
GAACAAGGGTTCAATTCTTCTGAATGGCTTGAAAAGGAAACTTTGTTGCCAAAAGTAGCT
GGGAGGCATCTGGTTGCCGCATTATGCATCTGGTGCAGAAATGAGTTCCATCATGAGAAT
GTTGGCAATGCAACACAAACAGGTTCAACTGGTTTAATGTGTCCAACCTGCAAGGTTAAG
TTCCCAGGGGAACTCAATTTATTCTAG
>VIT_12s0034g00290.t01 cds chromosome:IGGP_12x:12:15762397:15768743:-1 gene:VIT_12s0034g00290 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAAGAGGGAGTTGCAGGCAGTGGAGAGAGATATCGCGGAGGCTGAGGTTGTGAGGAAT
GGTTGGGAGGAGAAGTCTTGGGATCTTGACACGACAATTGGGCACAAGTTTAAGGAGCTT
GAAGCTCTTTCAATTGAATGCAACCAGGCTCTCAGGAGGTTAAAGTTAGGAAATGTTTTG
CAGTATGTGTTGAATGCCAAAGGGTCTTCGCCTGCTGAGGTTTTGGGAATTTATCACAAA
TCAACGCTTAAGCCTGCACTTGACTCCTTTGCTGATGACATAAATATAAGCTCTATGTCA
AAGTTGGAAGAGTTGATTTCTCTTCAGCAACAATCAGTTGAAAATGCTGCTAAAATTGAA
GCAAAAAGAAATCATCTTGCTGCACTTCAATCCAGTATGTTTTACCCCCTTCAAGTGTGT
GCAACGGAAGTTAAGAAGTTGGTGGAGGATGTTGAGATAGAAACCCATAATGTAGATATA
GTGGAAAGAGAAGTGGCAGATGTTCTGGAGACGTCCAAATTGAAGTTGCAGGAAGCAATC
AAGCAAAATGAGGAAGAAATTCAGATATGTGCTTGGGAACTCTATGCTTTGGTTGATTCA
GTTTCGAAATACAAAGAGCACATGGCATCAAAAATTTCAGAGATGAAGAGCAACCTTTCA
GAAACAGCAGGAGTTGTATCAGATTCTTACAAAGGCTCCTTGTCAGCACAGTTTGGTATC
ACTTTGGATACCAGCCACTGA
>VIT_07s0129g00410.t01 cds chromosome:IGGP_12x:7:15656513:15669687:1 gene:VIT_07s0129g00410 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAAAGATGCGCACACCCCCCTCGTCCCACTTTTTCCTCTCTTGCTAGTGTGCGCCCTC
GTGGCTTTGCGTGCGCCGCTTGCGCTACCTCCTAACCTACGCCCACACTCATCTCCTCCT
ATCCCCGACAACAAGATCATCACACCCATCGTCGATACTTCCAAGGCCAGGCTCAAGCTC
CAACTTTCCGAGATCTCTTCATCCGACGTCGCTCCCATGTCCAAAGCTCGAGTCTACGCC
GACGTCAACGTTCTTCGCCCCAAAGATTACTGGGATTACGAATCTCTCACCGTTCAGTGG
GGTGATCAGGATGACTATGAGGTTGTTCGGAAAGTTGGAAGGGGAAAATACAGCGAGGTT
TTTGAAGGCATAAATGTTAATAGCAACGAGCGATGCATAATCAAGATCCTCAAGCCTGTT
AAGAAAAAGAAGATAAAGAGGGAGATAAAAATACTTCAGAACCTTTGTGGGGGCCCAAAT
GTCGTCAAGCTGCTTGATATTGTCAGAGACCAGCATTCAAAAACTCCTAGCTTGATATTT
GAGTATGTGAACAGTACAGATTTCAAAGTTTTGTACCCCACTCTGACCGATTATGACATA
CGCTACTACATATATGAGCTTCTCAAGGCATTAGATTACTGTCATTCACAAGGAATAATG
CACAGAGATGTCAAGCCTCACAATGTTATGATAGACCATGAGTTGCGAAAACTTAGACTG
ATTGATTGGGGTCTTGCTGAATTCTACCATCCTGGCAAAGAATATAATGTTCGTGTTGCT
TCTCGATACTTTAAGGGGCCAGAACTTCTTGTTGATTTGCAAGATTATGATTATTCTTTG
GATATGTGGAGCCTTGGTTGCATGTTTGCGGGAATGATCTTTCGCAAGGAACCATTCTTT
TATGGTCATGACAATCATGATCAGCTTGTCAAGATTGCCAAGGTACTTGGTACAGATGAG
TTAAATGCATATCTGAACAAATATCGTTTAGAGCTCGATCCTCAACTTGATGCTCTTGTT
GGGAGGCACAGCAGAAAGCCGTGGTCCAAATTTATCCATGCAGACAATCAGCATCTAGTT
TCTCCAGAGGCCATTGATTTTCTTGATAAGCTCCTTCGATATGATCATCAGGACAGGCTG
ACAGCAAGAGAGGCAATGGCACATCCATATTTCTTTCAAGTGAGGGCTGCAGAGAGTAGC
AGGATGCGAACACAGTAG
>VIT_18s0166g00220.t01 cds chromosome:IGGP_12x:18:14204751:14205007:-1 gene:VIT_18s0166g00220 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGACCGGGAGGAAGACGAAGAAAAGAAGAGAGAGAAACAGAGATGGATCTTCCGAAAAC
CCACGAACCAAGAAATCGCATCGCCACAAACCCAACGAAAGGTTGCAGCTTCCGTCAATG
CCGACAGTGGGGGTGGTGTTGCACCAGTGA
>VIT_03s0088g00840.t01 cds chromosome:IGGP_12x:3:9072903:9073766:-1 gene:VIT_03s0088g00840 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGATGCTGCATATGATGCTAATTCAATTGCCTTTCACATGCAAAGACTGTTCACAAAAG
CTTCATCTGTCATTCTTGCAAATATAA
>VIT_16s0039g00820.t01 cds chromosome:IGGP_12x:16:439597:441387:1 gene:VIT_16s0039g00820 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAGGAGATATGGTGGTTTGTTTTCGTATTTTTTGCATCTCTTTTATTTGCGAGGTCT
AAGTTCAAGTTCCGGTCTAAGTCCAATCTCCCTCCAGGGCCAAGTACATTTCCGATTATT
GGAAATTTATTATGGTTACAAAAATCCTTTTCAGAACTCGAGTATGTGGTAAAGAGCCTG
CATGAAAAGCATGGTCCGATCGTGACCCTCCCCTTCGGGTTTAACCCGGCCATCTTTGTG
GCTAGTAACTCCTTGGCTTACCAAGCTCTAGTCCAGAACGGAGCCGTTTTTGCCGACCGC
CCTCCCCCACCCATCACCAGCAAGATCATGGCCAGCAACCAGTGCACCATCAGCTCCGCC
CCCTACGGCCCCGCCTGGCGCCTCCTCCGCCGCAATCTCACCTCCGAGATCCTCCACCCC
TCGCGCGTGAGGCTATACTCCCGCGCCCGGAAGTGGGTCCTGGACATTCTCGTGGCCGGC
CTCCGCCAGGAGGCCGAAGGCCGGGACAACGTGGTTTTAGTGGTGAAGCACTTCCACTTC
GCCATGTTCTGCTTGCTGGTTCTCATGTGCTTCGGCGACGACCTTGGGGAAGCCAAGATC
AGAGAGATTCAAGGCATGGAGAGTCGAGTCCTTCAGAGTTATCACAACTTTAAAATCCTC
AATTTCTTCCCGGTTATCGGAAAATTCTTGTTCCACAAGCGGTGGGAGAAGTTCATGCAG
CTGAGGAAGGATCATGAGGACGTGCTCATCCCTCTGATTAGAGCTCGGCAACCCTGCGAG
AAGACGGATACGGTGAGCAAACCAAATCCATCCATAACGTGCTACGTCGACACTTTACTG
GACCTGCAACTCCCAGACGAGAAGAGGAAGCTCACAGAAGGGGAGATAGTGAGCTTGTGC
TCGGAGTTTCTCAACGCCGGCACCCACACCACAGACGCTCCGCTGCAGTGGATCATGGCG
AACCTGGTGAGGTACCCGCACATTCAGGCCAAGCTTTTCGAGGAAATTAGCGGGGTTGTG
GGGGAAGGAGAGGACGAAGTGAAGGAGGAAGATTTGCAGAAGATGCCATACTTGAAGGCG
GTGGTGTTAGAGGGTCTCCGGCGGCACACTCCGGCCCACTTTCTTGTACCGCATGCAGTG
ACCAAAGACGTGATATTAGATGGGTATGTGATCCCAAAGGACGCCAAAGTATTCTTCATG
GCAGCTGAAATGGCGTGCAACCCCAAGGTGTGGGAAGACCCAATGGAGTTCAAACCGGAG
AGGTTCTTGGACAGCAATAACAATGGTGAAACATTTGATATAACTGGTAGCAGAGAGATA
AAGATGATGCCGTTTGGTGCAGGAAGGAGGATATGTCCAGGGTATGGTTTAGGTATGCTG
CATTTGGAGTATTTTGTGGCGAATTTGGTGTGGAAATTTGAATGGAAGGCTGTGGGTGAA
GACGGAGTTGATCTTTCAGAAAGGCCTCTTGTGTCTCTGCTACCAACCACCATGAAGAAC
CCGTTGCAAGCTCGCATTTCTCCAAGGTTATCAGCCAGGACTGCAATGGAGTAA
>VIT_03s0063g01380.t01 cds chromosome:IGGP_12x:3:4819085:4820342:-1 gene:VIT_03s0063g01380 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGATAAAATCATTCGCTCTTTCATCTCCTTCTCTGATTTTTGATGTCAGAGATTCAAGA
TCCTCTACAGTTTGCTGTTCTTCAAGGAACAGCCAGCCTTACATCCCAAAGCTCGAGCCT
TTCAGCCGAAGCAAACTCGATCGAGTCCTCAAAGAGCCTCCTTTGATCCAAAAGTGCGAA
AACGAGCTCATGGATTATTGTTCGACGCTCGAAGGAGATGACTCGTATAGCTGTTGGCAG
GCATATTTCGAGCTCAAAGATTTAGAAAAAGAGTCCCCAAAGGAAGATGTAGAGAAGCTG
ATTCTTCAAGTGGGGGGCTTGAAGTCTCTGATTGGATGCCTACACCATGTTGCAACCTTC
AGTAAAGGGAAAAAGGCCGGGATTGGATCAGTAAAGGCAGTGAATACAGAGAAGGAAGAA
GGAGGGAGACCGTTTCCCGTCCCGGATGGACTGCCAAAATCACAAGAAGAGCTTGAAGAA
GAGGACAAAGGTAGAATGCCAGATTCGGCTTTCACCAGGCTTCTGAGAACAAAGGGGAGG
TTCCCTGCATGGTATTCTCCTGCCCCTGACCACGAAACCGATTGA
>VIT_13s0067g01460.t01 cds chromosome:IGGP_12x:13:821719:823785:1 gene:VIT_13s0067g01460 gene_biotype:protein_coding transcript_biotype:protein_coding description:RING-type E3 ubiquitin transferase [Source:UniProtKB/TrEMBL;Acc:F6HCB0]
ATGGATGTTGCTCTTCCTACTCTCATGGTCTCTTCGGGCTTTCTTCCAACAGGGTCATTG
CTAGAATCATTGATACACATATCTAATGAAGTTGCATCAATGGAAAGGCTTCCTGTTATA
CAGGTTAGAAATATCTCAACCATGATAAGAAGGATCAAACTTCTTTCCTCTCTCTTTGAA
GAGATCCATGAAATGAATACCCCACTTCCCCCATCATCAATCTTGTGTCTCACTGAGCTC
TTTTCTGTGATTCGGAGAGTTAAGAGTTTCATACAAGGGTGCAAGGATGCTAGCTCTCTG
TGGAGCCTTGTGCAGACAGAACTTATCTCGAGTCAATTCCATGTGGTAGTGAAGGAGATG
GGGAGGGCACTTGACATTTTACCTCTGAGCTTGCTCAATATAACTGCAGACATTAGGGAG
CAAGTGGAGCTTCTTCACAAGCAAGCGAAAAGAGTGGATTTGTTTGTTGACCCTCGGGAG
CTGCAAAGAAGAGAAGAGCTTCTCCAAGTAATGGCCACCAACAATGAGAAGAATGCCAAG
AACAAGGCCTTGGTTGATTTCAGAGAAGTGAAAGAGATCTTGAGCAGCATTGGCTTGAGA
AGTCCATTAGATTATGATGAAGAGATTTCAAAGCTAGAAGCAGAAGCACAGAAGCAGGCA
GGCACAGGGGGACTGATTGTGGTTTCCAATATCAACAACCTCATCTCTCTGGTCTTGTAC
TCCAAGTCCATGATTTTTAGTGAAGAACATAATGAGAAAACTGATGAAGCATTCAAGAAG
CGCTCTGCATCTTTCAGGATGAACAATGATCATTCCTCATCCTCCCAATCAGCAATTCTC
AACATTCCTGATGAATTCCGCTGCCCCATTTCACTTGACTTGATGAGAGATCCTGTGATT
GTTGCTTCAGGGCACACTTATGATCGAAATTCAATTGCCCAGTGGATCAATACAGGACAT
AATACCTGCCCCAAGAGTGGGATGAAGCTAATTCATATGGCCCTCATTCCAAACTATGCA
CTGAAGAGTCTAGTTCATCAATGGTGCCGTGAAAACAACATCCAATTAATTGAATCTACA
TCATCATCTTCCTCAGACTTGGGCAGAAGCAATAGCATGAGGAAGTCATGTGAGAAAGCT
GTTGATCACATATCTGCCACAAAAACTGCTATGGATGCTGTCAAAATGACTGCAGAATTT
TTAGTGGGTAAATTAGCAACAGGGTCACCTGAAATTCAGAGACAGGCAGCATATGAGCTC
CGCTTATTAGCCAAAACCGGAATGGATAATCGTAGGATAATTGCTGAGGCAGGAGCTATT
CCATTTCTGGTGACATTACTAAGTTCCCATGACCCAAGAATTCAGGAGAATGCTGTGACT
GCCTTACTCAACCTTTCCATCTTCGATAACAATAAGATTTTAATAATGGCAGCTGGAGCA
ATTGACAACATAGTAGATGTTTTGCAATCAGGGAAAACCATGGAGGCAAGAGAAAATGCA
GCTGCAGCAATCTTCAGCTTGTCAATGATAGATGACTGCAAGGTGACCATTGGCGCCCAT
CCTAGAGCCATGCCTGCATTGGTGGCACTCCTAAGAGAAGGTACTTCAGCTGGGAAAAGG
GATGCTGCAACAGCACTTTTTAATCTTGTGGTTTATAGTGCCAACAAAGGAAGCGCTGTG
GTTGCTGGGGCAGTTCCTTTGCTTATTGAGCTGTTGATGGATGACAAAGCGGGAATTACA
GATGACGCCTTGGCAGTGCTTGCTCTGCTTTTGGGGTGTCCCGATGGGCTGGAGGAAATA
AGGAAGAGTAGGATCCTAGTTCCACTTCTTATTGATCTCTTGAGATTTGGATCGCCCAAA
GGGAAGGAGAATTCTATAACTCTTCTTCTGGGTCTGTGCAAAGATGGAGGAGAAGAAGTT
GCAAGAAGACTCTTGCTAAATCCACGAAGTATTCCTTCTCTTCAAAGCTTGGTTGCAGAT
GGGTCTTTGAAAGCTCGAAGAAAGGCCGATGCCCTGCTTAGATTACTCAATAGATGCTGC
TCTCAGTCTCACAGCACTGTTGGATAA
>VIT_14s0006g00740.t01 cds chromosome:IGGP_12x:14:15400559:15401694:1 gene:VIT_14s0006g00740 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGTGGTTGTCAAGGGAAAATTGAATGCAGCTTCAAGTCGAGTTACAGATCAAAAAAAT
CTAAAGAGTGTTGGCTTAAGTTTCAAGGTTTATTCTAAGAATGAGAGGGTTAATGTTGGT
TCCCGTGATTCTGTTGGTACTGGTTTGATGAGGAAATCTGTGTAG
>VIT_08s0007g06130.t01 cds chromosome:IGGP_12x:8:19942405:19948621:-1 gene:VIT_08s0007g06130 gene_biotype:protein_coding transcript_biotype:protein_coding description:Putative uncharacterized protein [Source:UniProtKB/TrEMBL;Acc:F6HLL5]
ATGTTTTGCATGCGGGCTATACGCCTATATGGGCATGACTAA
>VIT_09s0002g02710.t01 cds chromosome:IGGP_12x:9:2460725:2462005:-1 gene:VIT_09s0002g02710 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGGCTCATATATGAGTACATGGTTAATGGAGACTTAAAAAGGCATCTATCGGATAAT
TACTTTATGATGCCAAGTGTCTTGAGTTGGGAAGAGAGACTACGAATAGCAACAGATGCA
GCACAAGGACTGGACTATCTGCATGATGGTTGTAAGCCATCCATCATCCATAGAGATATA
AAGTCTACCAACATCTTATTGAATGAAAGATTCCAGGCCAAACTAGCTGATTTTGGGCTG
TCCAGAGCTTTTCCAATTGAAGGTAGCAGTCACGTGTCAACAGCCGTTGTTGGCACCCCT
GGCTACCTTGATCCTGAGTTGACGGAGAAGAGTGATGTTTTTAGCTTTGGAGTTGTTCTC
TTGGAGATTATCACAAGCCAACCTGCAATTTCAAAGGACCGTGAGAAGACTCACATAATT
GAATGGGTTAGTTGCATGCTTGCAAATGGGGATATTAAGAATACTGTTGATCCAAGGTTA
CAGGGAGAATTTGACATCAATTCTGCCTGGAAAGCTGTGGAAGTGGCCATGTGTTGCGTG
TCTCCCACTTCAACAGAAAGGCCAGCCATGCACTATGTAGTGATGGAACTAAAGCAGTGT
TTGGAAATGGAGGCATCTCAGAAGGAGGGTCATGAGCCTGAATCAAAAGATTCAATTGGA
ATAACCACTGAGGATCAGAGCACTGAAATTATCCCCCTAGCACGGTAG
>VIT_00s2215g00010.t01 cds chromosome:IGGP_12x:Un:41344529:41345201:-1 gene:VIT_00s2215g00010 gene_biotype:protein_coding transcript_biotype:protein_coding
CTCAATCCCAATAGTGAATCGGTTGTGCCTTGGGCATATGATCAGTTTGATACCTGGTTG
AAAGAAGCTCTCCTTGATGGAAGATATGAAGACATAAATCACTATGAAGAGAAGGCACCG
CATGCTAGAGAGGCCCACCCATGGCTGGAACACTTCTATCCATTGCATGTAGCCATGGGT
TCCAAACTCATCCACCATAGCTGGAGTCTCGGTACTCTCTCTTATGCCTCTTACCAGTTC
ACAACAACAGCCACCTGA
>VIT_10s0042g00210.t01 cds chromosome:IGGP_12x:10:13049537:13050269:1 gene:VIT_10s0042g00210 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAAACATCTATACCATAAACCTGTAAATTTTGGGTGGAGTGACGCAAAATTGCAGATC
ATCATCCACGCAAAATTGTTGATTGTTGATTTAGAACTCCAAACCCACTCACAAATCCTC
CCCCACCAGCCCCCGCCTCCCCCGCCGCGCCCGCGCAGCCCCAATTCCCCCTCTCCGCCG
CCGATCTCCTCCTCCTACTACCCCTCCGCGCCGCACATGCTGCTCGCCCTCTCCGCAGGC
ATCTCCGGCCCCCCTGAGAACGCCCCTCCCATTTCCTCTTCCCCCGCCTCGGGCGCCAAC
GGGCGGAAACGGTTCCGTACCAAATTCAGCCAAGGGCAGAAGAAGAAGATGTTCGAATTC
GCGGAGAGAGTTGGGTGGAAGATGCAGAAGCGAGACGAAGAGCTAGTGGCGGAGTTCTGC
AATGAAGTTGGGGTCGACAAAGGAGTTCTAAAGGTGTGGATGCATAACAACAAGAACACC
TTCGGCAAACGAGACGTCAATGGCAGCAGAACCAGTCTCGACGAGAACAACGAGAACAAC
GAGAACACCCCTCACACCATGGAAACCATCCACCATACCCCAACTCACAACCACACCAAC
CCCTAA
>VIT_19s0014g01070.t01 cds chromosome:IGGP_12x:19:1126915:1130051:-1 gene:VIT_19s0014g01070 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTCTGTCTCACTTCCCGTCACTCCTATTCCAACCACGCCAGGGGTAGATCATCAGGGG
GTGGCTCGCTCCACAGCGAATTTTCCTCCTAACATTTGGGGTGATCGTTTCCTCATCTAC
ACTCCTGATGATGCTATAACCCATGAATGTAAAGAACAGCAAATTGAAGAACTGAAAGAA
GAAGTGAGAAAGGAGCTAAAAGCCAGTGCCAGTAAATCTCCGGAACTGCTGAAGTTGATA
GATTCCATCCAACTCTTGGGATTGGCACACCACTTTGAAAGGGAGATCGAAGAAGCATTA
AAAGACATGTATGGAACATATAGTCTGGTTGATGATAACGACGACTTCACAAATGCTTCG
CTTCGGTTCCGACTACTAAGACAAGAAGGTTACCCCATTCCATCTGATGTATTTAATAAG
TTCAAAGACAAGGAAGGCAACTTCAAGGAATATTTGATTGGTGACTCACTTGGCATGCTA
GCTTTATATGAAGCTACACATTTGATGGTGCATGGAGAAGACATACTAGAGGAAGCCCTG
GCTTTCACCACTACTCATCTTCAGTCCATGGCAACTGATCCAAATAATCCTCTTGCAAAA
CAAGTGATTCGTGCACTAAAGCGGCCCATTCGCAAGGGCTTGACAAGGGTGGAGGCAACG
CATTACATTTCCATCTACCAACAAGATGGTTCACATAATAAATCTTTACTCAAGCTTGCA
AAGTTGGACTTCAACCTGTTGCAGTCACTCCATAGGAAAGAGCTAAGTGAGATCAGTAGG
TGGTGGAAAGGTTTAGACGTTGCGACAAAGCTACCTTTTGCACGGGATAGACTAGTGGAG
AGCTACTTTTGGACATTGGGAGTGTACTTTGAGCCCCAGTACTTCCCTGCTCGAAGGTTC
TTAACGAAAATGACCGCTATGTTAACCATTATGGATGATATATATGATGCATATGGTACA
ATCGAAGAACTTGAACTCCTTACAGAAGCAGTCGAAAGATGGGATGCCAGCTGCATAGAT
CAACTGCCTGCAGATTATATGAAGTGGTTTTATCGGGCACTCTTGGATGTTTATGAAGAA
ATGGAAGAAGAGATGGCCAAGGAAGGGAAATTGTACCGTGTCCACTATGCAAAAGAAGCG
ATGAAAAGGCAAATCCAAGCCTACTTTATTGAAGCCAAATGGTTGAACCAACGATATGTA
CCAACATTCGATGAGTACATAAGTAATACACTAGTAAGTTGTGGTTACACTTTGCTCATT
GCCACATCTTTCGTTGGCATGGGAGATGTAGTGACAGAGGAGGCCTTCCAATGGGTGCTC
AGCCACGCCAAGATGATTAGAGCTTCAGAAACCATCAGCAGGCTCATGGATGACTTAGTT
TCCCACGAGTTCGAACAAACAAGAATGCATGCCCCCTCAAGCATTGAGTGTTACATGAAG
CAATATGAGGTTACAAAGCAGGAGGCTTGTGATGAGTTGAATAAGCAAATAGTCAGGGCA
TGGAAGGATATCAACCAGGAGTGCCTCAGACCTACACAAGTGCCAATGCCACTCGTCACA
CGTGTTCTAAATTTTAGCCGTGTGATAGATATCTTGTACAAGGATGAAGATGAGTACACC
CACAATGGAAAATTGATAAAAGATCTCATTACATGGATGCTCATAGACCCTGTGCCAATG
TAA
>VIT_12s0057g01290.t01 cds chromosome:IGGP_12x:12:10034693:10046747:1 gene:VIT_12s0057g01290 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAGCGGAGGTGGGTTTAGGGTTTCAATCTCAAGCAGTATGAGGGAGGTGATCCAAAAC
ATTAAGGAGGTCACTGGAGACCACACTGAAGAGGAGATTTATGCAATGCTCAAGGATTGT
GCCATGGATCCCAATGAAACCGTTCAGAAGCTTCTCATGCAGGATCCCTTCCATGAGGTT
AGAAGGAAACGTGACAAGAGAAAAGAGCATTTAAGCAACAGAGATTCTGCTGAACCACGG
TGGAGACCTGGCATGCAGGGGCAAGGAAGTAGGGGTGGTCGAGTGAATTATTCATCTCGT
CATACATCTCATGATACAGGTGGTGGCAGGAATTCTGCTCCTGCAAAGGAAAATGGAATC
AGTCAAATTTCAGAGAAAGGTATTGCTCAACCAACCTCTCAGGAGATGAAAAATAAAGAA
ACAACTGCTATAGCAAGCTCTATAACTGTCATGGCCGATGGTCCAGCTGTTACCACCACT
GGGAATACTAGTGTTGTACACACTTCTCATTCTACTGTAGCGAGTGATGTCATCCATGCT
GATTTGAGTGCATCCACTGATGCTAATAAATTGGGGAATTCACCTTCGCCTTCTATTGAT
GCAAACAAAAACCCTAGCATTGCATTTGGAACTGGGGATACATGTGGGCAGCCCACACCA
GGCTCCAGTAACTGCTCAGCTTCTGTAACTCCAGCATCTTCTTCAGGAGGCTATTTTTCT
GCTTCAGATCCTGTGCTTGTGCCTTCTCATGATTCACGGATCTCTCATGCTGTTGGTACG
ATTAAGCGTGAAGTAGGGAGCCAACGAACTCCTGTTGAAAATAATGAAATTACCCATGCT
GAAAGTAGATCAGCTGCAGTGGCAGCTTCTGAGACTGGGAGCTCCTTCTTGCAAGGAAAG
ATGCCTGGCAAATCCCCAGGAGTTGGGAAGAATCACCTTGTTGAGTCATCACAACCTTCA
CCCTCATTGACACATGCTGGCTCCTCAGTTAATAGGCCTTCATCGAATTACAATACCAGG
CTGCAACAAGTAATTGGCCCTCAAAAAGTGGGTCCTGGTATGGAATGGAAACCAAAGTCA
ACAAACCCTAATCTTGTTCAAAGCTCTGGAGCAGCTGTTACTTCTGAGATTCCCTCTGTT
TCAGCTGAATCTGTCACCCAGACACAGCCTGTATCAGGTGACCTTGATTCAGAAGAAGCA
AATCCAAAACCGCAGAAAAAGCTAGAGGGGTTACATTCTCGAGCTCGTCGTCATGTTATC
ATTCCAAACCATATCCATGTTCCTGAAGCTGAAAGAACCGGGTTGAATTTTGGAAGCTTT
ACTACTGGTTTTGGAGTATCCCTAATTGATGCCTATGATCCTGAGAGTGACAAAACCTCT
ACCCCTCAGTCTGAAACTTCTCAGGGGATAGAAGAAACTGTGGAGGAACATTCTTCAAGC
AATCAAAATGTATTGGCAACGGCTGAGGAAGGGGATTATCCAGATCATCCAGAGTCACCT
CCACATGTGTCAGAAAATATATCTTCTGGAGAGGGTGATATCTCATCCAGTTCAGCCCCA
GAATATGATTCCAAGCAGGAAATAGCATTGCCACCTGGAGGTCATCAATACTCTACGGTT
CATACTTCTCCAAACTACAGTTTTGGTTTTGTGCCGCCAATTTTAGGGAGCCAACTTGCA
CCGTTTGAAAGTTCTGAGTCTCAAGCACGTGATGTTACTCGCCTTCCAAGCTTTGTAGTT
CAGCCACAATTTGATCCTGCAAGCTACTATGCCCAATTTTACCGCTCTGGTTCTGATAGT
GATGGTCGCATTTCTCCCTTTCAGTCACCTGGAGTTGTACCCAAGTACAATGGGAATGTT
GCAGTGTTATCTCCACAGACTTCACAGTCTCCTCAAGAGGGTGGGAACTCTCTGGTTCTG
TCTACGGCTGGTGCAACTCCACTAGTAACTCAGTCTGCTGGTGTCATGCAGAGCTCTATT
GCTGTGACTCAACAACCAGTCCCTGTGTTCCGACAGCCTGGCGTGCATATACCCCATTAT
CCTCCAAATTACATTCCATATGGCCATTACTTTTCTCCATTTTATGTTCCTCCTCCGGCC
ATCCACCAATTTTTAGCCAATGGTGCATTTCCTCATCAACCTCAGGCTGGTGGTGTATAT
CCAGCTCCACCCAATGCAGCTGCTGCAGGAGTCAAATATTCACTTCCACAATACAAGCCA
GGGACTAATACTGGAAACTCAGCCCACATGGGAATGCCAGGTGGCTATGGACCATATGGT
TCCTCTCCAGCTGGCTATAATCCTAGCTCAGCTGCAGCAGCTGGGAACTCAACTGCTAAT
GAGGAAATTGCTGCATCCCAGTTCAAGGAAAATAGTGTTTACATCACTGGCCAGCAGAGT
GAAGGTTCAGCAGTCTGGATTGCTGCACCAGGTCGAGACATTTCTGGCTTGCCGGCAAGT
TCTTTCTACAACCTCCCCCCTCAGAGCCAGCATGTAGCTTTCACCCCAACACAGGGTGGT
CATGGCCCAATTGCCGGTATCTATCACCCTGCACAAGCAGTGACAGCAACTGTTCATCCA
CTTCTGCAACAATCTCAGACAATGGCCGGTGCTGTTGATATGGTGGGACCTACAGGCAGT
GTCTATCAGCAGCCCCAGCATGCACAAATCAACTGGCCCAATAACTACTGA
>VIT_09s0054g01490.t01 cds chromosome:IGGP_12x:9:22390924:22395615:-1 gene:VIT_09s0054g01490 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGCCATCAAGGAACTATTGTGGAGCACTGGAGCTATGAAACTCTGTGTCTCAAAATG
TTAGCAGGTAGGGTTACCAAGGGGAAATTGATCAGAACTGGAAAGCTTCTCAAACCTGAA
GCCCAACCATTACCAGATAATTCAAACTCTACAAGTTGA
>VIT_10s0092g00130.t01 cds chromosome:IGGP_12x:10:11294218:11296152:1 gene:VIT_10s0092g00130 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCCAAAACTCGCCACCTTGCGCCACTCCATTCTTTGCTGTTTCCACAAGTGTGGTACC
TTTGACCATCTCAACCAAACCACCTCCATCCTCATCACTTCTGGCCTCGCTCACCACACC
TTCTTCCTTTCCGACCTTCTTCGTTCTGCCACCAAAGACCTCGGTTATACTTTGCTCCTC
TTTGATCGTCTCGCCACACCTTATATCTTCCTATGGAACACCATCGTCAGAAGCTTCTCT
GCAAGCTCACAACCCCAAATGGTTCTCGTTGCATATTCAAGATTGCGAAACCACGGCGTC
ATTCCGGACAGGCACACTTTTCCCTTACTCCTCAAGGCCTTCTCTAAGTTGAGAAACGAA
AACCCATTTCAGTTTTATGCTCATATCGTGAAATTCGGGCTGGATTTTGATGCTTTTGTG
CAGAACTCGTTGGTTTCTGCTTTTGCTCATTGTGGTTATGTGGACTGCTCCCGTAGGTTG
TTTATTGAGACTGCGAAGAAGGATGTGGTCTCTTGGACTGCTTTGATTAATGGATGCCTT
AGAAATGGTCGTGCGGTGGAAGCATTGGAGTGTTTCGTGGAGATGAGGTCCAGTGGTGTC
GAGGTTGATGAGGTGACCGTTGTTAGTGTTCTCTGTGCGGCTGCAATGCTGAGAGATGTT
TGGTTCGGTAGGTGGGTTCATGGGTTTTATGTTGAATCAGGGAGAGTCATTTGGGATGTC
TATGTTGGTAGTGCCCTGGTTGACATGTATTCAAAGTGTGGCTATTGCGATGATGCTGTT
AAAGTGTTCAATGAAATGCCTACTAGGAATTTGGTTTCTTGGGGTGCATTGATAGCCGGT
TATGTGCAATGTAATAGATATAAGGAAGCACTGAAAGTTTTTCAAGAAATGATTATTGAG
GGTATCGAGCCTAATCAATCCACCGTGACAAGTGCTCTGACTGCTTGTGCACAACTAGGG
TCATTAGATCAAGGTAGGTGGCTCCATGAATATGTAGATAGGAGTAAATTAGGACTGAAT
TCGAAACTTGGGACAGCATTAGTAGATATGTATTCGAAATGTGGGTGTGTTGATGAAGCA
CTATTGGTCTTCGAGAAGTTGCCTGCCAAGGATGTCTATCCTTGGACTGCTATGATTAAT
GGGTTGGCAATGCGTGGAGATGCCTTAAGCTCCTTGAATCTTTTCTCACAAATGATTAGG
AGCCGGGTTCAACCTAATGGAGTTACCTTTCTTGGTGTTCTTAGTGCTTGTGCTCATGGA
GGCCTTGTGGATGAGGGACTGGAGTTATTTAGACTGATGATCTGTGATTATCGTTTAGAG
CCTAATGTAGATCACTATGGTTGCATGGTTGATCTTCTAGGTCGGGCAGGGCGCTTGGAA
GAAGCAATTAAATTTATTGAAAGCATGCCAATGGAGCCAACCCCTGGTGTATGGGGAGCA
CTGTTCAGTGGCTGTATGATTCACAAGGCTTTTGAGCTTGGGGAACATATAGGAAACCAT
CTGATCAAGCTACAACCTCATCATAGTGGTAGATATATTCTTTTAGCAAACTTGTACTCA
AGATGTCAAAAATGGGAAGCAGCTGCTAATGTCAGGAGACTCATGAAAGGGAAAGGGGTG
GATAAGTCCCCAGCATGTAGCTGGATTGAAGTGAATGGTGTAATTCATGAGTTCATCGCA
TTTGATAAATCACATATTGAATCAATTAATGTGTATATGATGTTGGGAAGTGTCACAGCC
CAATTAAAACTTGCTACTTATGCTCTTGACAGTAACCTATTGACATTTACCATTGATGGG
GGATGA
>VIT_12s0034g02260.t01 cds chromosome:IGGP_12x:12:18684602:18688125:1 gene:VIT_12s0034g02260 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGATTGTAGAGGATCTTGGAATTGAAGCCAAGGAAGCGGCGGTTCGTGAGGTTGCCAAA
CTTTTGCCACTACCTGAACTTTTGCAGTCAATTTCGTCAATCAAGGCTGATTACATTACG
CGCCAACAGGCAAATGATGCACAACTTAGTATGATGGTTGCAGAGCAGGTTGAACAGGTA
CAGGCTGGGTTGGAATCAATTTCCTCATCTCAAAAGACAATAAACCAGCTTCGTGAGAAC
TTTCTCTCTATTGAGAGGCTATGTCAAGAGTGCCAAAACTTAATTGAAAATCATGACCAA
ATAAAGCTCCTTAGCAATGTGAGAAATAACTTAAATACCACACTGAAGGTGAATGCAATG
TCTGACCTTTGTTTTCATCAACTTTTTCTTTATCATGATATGTTTCTTGCATACACACAC
ACAAACATACATAAGTTCTTCCTTCCTTCCCATCCTTACAAAACATTTGAGTGGATGGAC
AATTGGAAGAAATGGTTGTGTTGTGGATGCAGACGTGGAGAATTCCCTCGTCTCCAGGAG
CTTTATATGCGGCACTGCCAGATAGTGGCTTCATTGCTCTTCAAACCTCACTCGTTAAAA
TTTCAAACATCTCTCAGTGGAAGCAGCTACCAGTGGGAGTGCATAGCCTCTCAATTACAG
AATGTGATTCTGTGGAGACTCTAA
>VIT_10s0003g03520.t01 cds chromosome:IGGP_12x:10:5939779:5946651:-1 gene:VIT_10s0003g03520 gene_biotype:protein_coding transcript_biotype:protein_coding description:Terpene cyclase/mutase family member [Source:UniProtKB/TrEMBL;Acc:D7TK68]
ATGTGGATGCTCAAAGTTGCAGAAGGGCATGGTCCATGGCTGTACAGCCTCAACAACTAT
CTTGGCAGGCAGATCTGGGAGTTCGATCCTGAAGCTGGGACCCCAGAAGAGCGAGAAGAG
GTCAGGAAAGTCCAGGAGAATTTCACAAAGAATCGGTTTCGCTACAAACCTAATGGGGAT
CTCCTAATGAGGATGCAGCTTATCAAGGAAAACCAAATAGATTTGAGCATACCACCAGTG
AGGCTGGGAGAAAAGGAAAAAGTAACATATGAAGCAGTGACAACTGCAGTGAAGAAAGCT
GTGAGGCTGAATAGAGCCATCCAGGCCAAGGATGGTCACTGGCCTGCTGAGAATGCTGGT
CCTTTGTTTTTCACGCCTCCTTTGATCATGGTGCTATACTTTACTGGGACCCTGAATATA
GCCCTAACACCGGAACACAAAGTGGAGCTTCTTCGCTACATTACTAACCATCAAAATGAA
GATGGTGGGTGGGGATTCCATATCGAGGGGCACAGCACAATGCTTGGAACAACCCTCAGC
TACATCTCCATGCGTATACTAGGAGTAGGACCTGATGACAAGGTTGTGGCAGCAGGAAGG
AAATGGATTCTCGATCGTGGCGGTGCAACTTATTCACCATCTTGGGGGAAGTGTTATCTC
TCGGTGTTTGGACTGTATGAATGGTCTGGCTGCAACCCTTTGCCACCAGAGTTCTGGCTT
TTCCCTTCATATTTGCCCATGCATCCAGATAAAATGTGGTGCTACAGTCGAACAGTTTAC
ATGCCTATGTCGTATTTATACGGCACAAGATTTCAGGCACCCATTACCGATCTAGTTCTA
CAATTGAGGGAAGAAATGCACACTGAACCATACCATGAAATCGATTGGGCTAAAGCGCGA
CTTTTATGCACAAAGGAGGATTACTACTACCCCCATTCCCTAATACAAGACATGATTTGG
GGTGGGCTTTATCACTTTGGTGAGCCGATTCTGAAACGTTGGCCCGTCTCCAAAATTAGA
GAGACGGCTGTAAAGAAAGCAATTGAAATCATTCACTGGGAAGATGAGAATAGTAGATAT
CTGACTCCTGGGTGTGTGCACAAGGCTTTCCACATGATGGCTGTTTGGGCAGAGAATCCA
GACTCAAATTTAAACGCTTTCAAGCATCACCTTGCCCGAATTCCCGACTACTTATGGTTG
GCAGAGGATGGAATGAAAGTGCAGAGTTTTGGGAGTCAGCTATGGGACGCTTCTTTTTGC
ATTCAAGCCATCCTGGAAAGTGGTATGGTTGAAGAATACGGGACTGCTCTCAAGAAAGGT
CATGACTTCATTAAATTATCACAGTGTCAAGAAAATCCATCTGGTGATTACCGGAGTAGG
TATCGTCACTTTTCAAAAGGAGCCTGGACTTTCTCTGATCGCGATCATGGTTGGCAAGTC
TCTGACTGCACATCCGAAGCATTGAGGGTCTTGCTGTTACTATCACAATTTCCAGAAGAA
CTTGTCGGGGAAAAGGCCGAACCTCAGTGCTTATTTGATGCCATCAATTTCCTCTTCTCC
TTTCAAGGCAAAAGTGGTGGTTTAGCTCTTTGGGAGCCAGCAGGAGCTGAAGAATGGTTG
GAGAAGTTGAATCCTTCAGAACTTTTTGCCAACATAGTCACCGAGCATGAGTATGTGGAA
TGCACATCATCAGCTATCCAGACTCTCCTGTTGTTCAAGAAATTGTATCCTAATCATAGA
AGGAAAGAAGTAGACAACTTCATTGAAAAGGCAACCGGTTATGTTGAGAATGTACAGAGG
CCCGATGGATCTTGGTATGGTGGCTGGGGAATTTGCTTCACCTATGCTGCATGGTTTGCA
TTATCAGGGTTAGCTGCTGTTGGGAAAACATACTCAAACAGCAAAACCGTTCGTAAAGGT
GTCGATTTTTTGCTTTCAAAGCAGAAGGCAAATGGTGGTTGGGGAGGGAGCTATCTTTCA
TGCCCAGACATGTTGTATGTACACCTAGAGGGTGATCACACAAATTTGGTACAAACCGCA
TGGTGTTTGATGGGTCTAATTGAAGCCGGACAGGTTGAGAGAGATCCAACCCCTCTACAC
AATGCAGCTAAGCTACTGATTAATTCACAGTTGGACAATGGGGATTTCCCTCAACAGGAA
ATTCTGACTATGATCTTGGTTGGTTATTTCCTTCTTTGTATTTGGATGCATCTTAACCTT
GAAATAATGATCACAGGAAATCACTGGAGTCTTCATGAATAA
>VIT_09s0002g08860.t01 cds chromosome:IGGP_12x:9:10322798:10323844:1 gene:VIT_09s0002g08860 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAGCAGTTGATTCCAGGTCTCCCAGACGACATCGCCCTTGAATGTCTGATTCGTCTC
CCATACAACCACCTCTCCACCGCTTCATTGGTCTGCCCTCCCTGGAAGCTCCATCTTCGA
CACCCCGATTTTCTCCGCCACCGCAAAGCTGCTGGTTTCACTACCAACATCATCGTAATG
GCCCAATCCCCACCGCAAACCAACACCGGAAAGGCCATTCCTCCGGCGGATTCTTACGGG
CTCACGCTTTATGAACCAGATTCTGGGAGTTGGTCCGAGTTGCCGCCGCTTCCCGGGATG
AACCGTGGGTTGCCCATGCATTGCGGGCTGGTCGGAGTAGGGTTGGATCTGGTGGTGATT
GGCGGTTACGATCCTGAGACATGGGAGTCGTCCAATGCGGTGTTTGTTTACAATGTTGTT
TCGGCCACGTGGAGGCGTGGCGCCGATATCCCAGGTGTACGACGATCGTTCTTTGGCTGT
TCTTCGGATTCGGATCGGATGGTTCTGGTTGCAGGTGGGCACGATGATGACAAGAATGCA
CTGAGGTCTGCGCTGGCATATGACGTGGCAGAAGACGACTGGCTCCCAGTACCTGACATG
TCAATGGAGCGTGACGAGTGCAAAGTGGTGTTCCAGCGTGGAAAGTTCCACGTCATCGGG
GGATACCAGACAGAGACACAGGGTCGATTCCAGAGAAGCGCTGAAGCCTTTGATGTTGCC
AGCTGGCAGTGGGACCCTGTAAACGAGGATCTTTTGGAGACGACCACGCATCCAAGGACA
TGCGTGGTTGGAGACGATGGGAAGATGTACATGTGCCGAGGACGTGACTTGGTGGAGAAA
CAGGGCGCCACGTGGCAACCAATAGCCAAGCTTCCAGCTGAGCTGTGCAGCGGATTTTAC
TTGACAATATGGCGTGGCAAGTTGTTGCTAAGTGGTACACCCCAGAAAGCATATACATTG
GATATAGGATCACGCACATGGACAGAGCTGGTGGTGCCCGCAAAATATTGCGGCCTTGTT
CAATCTAGTTGTTGCTTAGAGATATAG
>VIT_14s0036g01220.t01 cds chromosome:IGGP_12x:14:12098820:12099323:-1 gene:VIT_14s0036g01220 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGTATCGGTTTAGTCGTCGATGACAAAAGCAAAAAGACGAAGTGCACCGCTCCCAAA
TCTGATGATATCTACCTCAAGCTCACAGTCAAGTTGTATCATTTTTTGGTACGAAAAACC
GGAAGCAAGTTCAATGTTGTGACATTGAAGCGGTTCTTCATGAGCAAGGTTAATAAGTTG
CCTTTGTTACTTTCCCGTTTGGTTCGTTTCATGGACGGAAAGAAAGGTAAGATTGTTGTG
GTTATTGGTTCTGTTACCGATGATCTCCGAGTATACGAAGTCCTTTATTTGAAAGTGACT
ATCCTGAGGTTCACAAAGAGAGTAAGGGAAGGGATTGAGAGGTTGATGGTGAATGCTTGA
>VIT_10s0003g05120.t01 cds chromosome:IGGP_12x:10:9190056:9191212:1 gene:VIT_10s0003g05120 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGATAGGTGTAACCAGTAGAGCAAGATTGTACTTGAAATATCTGCGCAACATGGCTGAG
AGAACTGATATTGGAAGGTTGGTTGGCCCTTCACTCTTGAGGCTTGTCAATGAGGCCATG
AGTTTAAGCACCAGGGGATCCAATCTCAATGGGAAAATGAGTTCCGAAATATGGGACATA
CTAGAGCGTGCTCTTGAGAGAGGATCTTCTGCTTTTGGAGAACCACGTGAGTTTGGCTAC
TACCTTGTGGTGGACCCAAACAATCCAACATCAGTGATCTCTGCATTATGA
>VIT_02s0025g04810.t01 cds chromosome:IGGP_12x:2:4341153:4343387:-1 gene:VIT_02s0025g04810 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAATTTTTCTTCCTTTTCGCTCTCTTTTTCATGTGTGAGATCTCCGGTAGCGTCGCT
TTTCAACAGATAGCGGCAGAAAAGAGCATGTTAAAGACTTATATTGTCCACGTAAATGAC
CCCGTGGGTAAATTTTCTGCACAATCGGAGGCTTTGGAGAGCTGGTACCAGTCCTTTTTG
CCGGCCAGCACTGAATCCGAAAATCAACAGCAGCGTTTGCTTTATTCATATCGGCATGTG
ATTAGTGGGTTTGCAGCGAGATTGACGGAGGAGGAGGTTAAAGCAATGGAAAAGAAGGAT
GGGTTTGTTTCGGCCACGCCAGAAAAAATTTACCATTTGCATACAACTCGCACCCCTGGT
TTCTTGGGATTGCACAATAGGTCGGGGTTCTGGAAAGGATCCAACTTCGGTGAAGGGGTC
ATTATTGGAATATTGGACACAGGAGTATATCCACAACACCCTTCATTTAGTGACGAAGGA
ATGCCGCTCCCACCTGCTAAATGGACGGGAACCTGTGAATTCAACGGGACGGCCTGCAAC
AACAAGCTCATCGGTGCCAGGAATTTTGACAGTCTGACCCCGAAACAGCTACCTATTGAT
GAAGAGGGCCATGGCACCCACACGGCAAGCACTGCCGCGGGAAATTATGTGAAGCACGCC
AATATGTATGGGAATGCCAAAGGCACTGCTGCTGGTATTGCACCTCGTGCTCATGTGGCA
GTATATAAAGTATGTGGTTTATTGGGCTGCGGCGGAAGTGATATTTTAGCCGCATATGAC
GCTGCCATTGAAGACGGTGTTGATGTGCTTTCTCTCTCCCTCGGTGGAGAGTCTTCTCCT
TTCTACGATGACCCGGTTGCTCTGGGTGCCTTTGCTGCAATTAGGAAGGGAATTTTTGTT
AGCTGTTCTGCTGGGAATAGTGGGCCAGCCCATTTTACACTCTCAAATGAGGCACCATGG
ATTCTCACCGTAGCTGCAAGCACCCTGGATAGAAGCATAACCGCGACAGCAAAGCTTGGA
AACACGGAGGAATTTGATGGGGAATCGCTTTACCAGCCAAGAAATTTTTCTTCCAAACTA
TTGCCTCTTGTATATGCCGGGGCGAATGGTAACCAAACATCTGCTTATTGTGCGCCGGGA
TCCTTGAAAAACCTTGATGTCAAAGGAAAGGTAGTTGTTTGTGATAGAGGTGGAGATATA
GGCAGAACTGAAAAAGGGGTGGAAGTGAAGAATGCTGGTGGTGCTGCCATGATCCTGGCC
AATAGCATTAATGATAGCTTCAGTACATTTGCCGACCCTCACGTTCTTCCTGCAACACAT
GTGAGTTACGCAGCGGGTTTGAAGATCAAAGCTTACACGAAATCAACATCAAACCCTTCA
GCTACAATCCTATTCAAGGGTACAAATGTCGGAGTCACATCTGCTCCTCAAATCACGTCC
TTTTCCTCAAGAGGACCCAGCATTGCATCCCCGGGCATTTTGAAACCCGACATTACCGGA
CCTGGTGTGAGCATTCTAGCAGCATGGCCGGCCCCTCTCTTGAACGTCACTGGCTCAAAA
AGCACATTCAACATGATTTCTGGCACATCAATGTCGTGCCCTCATCTTAGCGGTGTCGCA
GCTTTGCTCAAAAGCGCCCATCCTAACTGGTCACCTGCTGCCATTAAGTCTGCAATCTTG
ACTACTGCTGATACACTAAATTTGAAAGACGAGCCCATTTTAGATGATAAACATATGCCT
GCCGACCTATTTGCAATCGGTGCTGGTCATGTCAATCCATCAAAAGCAAATGATCCCGGA
CTCATTTACGACATCGAACCTTATGATTACATACCCTACTTGTGCGGTTTGGGTTACACT
AATGCTCAGGTAGAAGCTATTGTATTGCGCAAGGTGAACTGCTCTAAGGAATCAAGTATA
CCTGAGGCAGAGCTAAATTATCCTTCATTTTCAATTGCTTTGGGCTCCAAGGATTTGAAA
TTTAAGAGGGTTGTCACGAATGTAGGCAAGCCTCACTCGTCTTACGCTGTGAGTATCAAT
GCACCAGAAGGAGTCGATGTGGTGGTTAAGCCTACTAAGATCCATTTCAACAAAGTGTAC
CAGAAGAAATCGTACACAGTCATCTTTAGGAGTATAGGCGGGGTTGATTCTAGGAACCGA
TATGCGCAAGGATTTCTCAAATGGGTCTCTGCCACACACTCTGCCAAAAGTCCAATATCT
GTTACGTTTGAATGA
>VIT_09s0002g06260.t01 cds chromosome:IGGP_12x:9:6189802:6192901:1 gene:VIT_09s0002g06260 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGAAACGTTTGCTCAGTCTCCATTTCCACCGAGGACATCGCTGGCCGCTGCTGTGAT
TGCACTGCTGCTCGAGCAAATTACATATGCAAGCTTCAAGAAAATCGGGTTACTTTGAGA
ACAGAGCTTCAAAAGTTAAGGGAGTTGAGGAACGATGTGAAGAGGAAGGTGGATGTGGCT
GAGAGGCAACAAATGAAGCGTCTGGATCAAGTGCAAGGCTGGCTTTCCAGGGTGGAAGAT
ATGGAAACTGAAGTCACTCAACTGATTGGAGATGGTGCAGAGAACATTGAGGAGAAACGA
TTTTGTGGTAGCTGCTATCCCAAGCATTGCATCTCCAGCTACACGTTGGGAAAGAAAGTG
GTCAGGAAGCTACAACAAGTGGCTGCCCTAATGAGCGACGGTCGTTTTGAGGTGGTGGCT
GATATTGTACCTCCAGCTGCTGTGGAGGAAATCCCCAGCGGAACCACTGTGGGATTGGAA
TCAACATTTGACAGAGTTTGGAGGTGTCTCGGAGAAGAACATGTGGGGATGATCGGCTTA
TATGGGTTGGGGGGCGTTGGGAAGACCACCCTCTTGACCCAAATCAACAATCATTTCCTT
AAAACATCCCACAATTTTGATGTCGTAATTTGGGTAGTGGTTTCCAAAACTCCGAATCTA
GACGAGGTTCAGAACGAGATTTGGGAGAAGGTGGGATTCTGTGATGATAAATGGAAAAGC
AAAAGCCGCCATTTGAAAGCCAAAGACATCTGGAAAGCCTTGAACGAAAAGAGGTTTGTG
ATGTTGTTGGATGACCTGTGGGAACAAATGAATCTGTTAGAAGTGGGAATTCCACCTCCC
CACCAACAAAATAAGTCCAAGTTAATATTCACCACTCGATCTCTGGACTTGTGCGGCCAA
ATGGGAGCTCAAAAGAAAATCGAAGTAAAATCTTTAGCATGGAAGGATTCGTGGGATTTG
TTTCAAAAATATGTGGGAGAGGACACCCTTAATTCTGATCCAGAAATCCCTGAGCAAGCT
GAAATTGTTGCACGAGAGTGTTGCGGTTTGCCACTGGTGATAATTACCATAGGGCGAGCT
ATGGCTTCTAAAGTGACACCCCAAGATTGGAAGCATGCAATTAGAGTACTACAAACATCT
GCATCAAAATTTCCAGGTATGGGGGACCCAGTGTACCCACGTTTGAAATACAGCTATGAT
AGTTTGCCCACCAAAATAGTTCAATCTTGCTTCTTATATTGTTCTTTATTCCCAGAAGAT
TTTTCCATAGATAAAGAAGCTTTGATATGGAAATGGATTTGTGAAGGATTTTTAGATGAA
TATGATGACATGGATGGAGCCAAAAATCAGGGATTCAACATTATCAGTACCCTCATTCAT
GCATGTCTACTTGAGGAACCTTTAGATACTAATTCTGTAAAATTGCATGATGTGATACGT
GATATGGCCTTGTGGATAACTGGTGAAATGGGGGAGATGAAGGGCAAGTTTTTGGTACAA
ACAAGGGCCGATTTAACCCAAGCCCCTGAGTTTGTCAAATGGACGACGGCGGAAAGGATT
TCACTGATGCACAACCGAATTGAGAAGTTAGCAGGATCGCCCACATGCCCCAATCTCTCG
ACACTTCTTCTGGATTTGAATAGGGATTTGCGGATGATAAGCAATGGTTTTTTTCAATTT
ATGCCCAATCTAAGAGTGTTGAGCTTAAATGGCACCAATATAACTGACTTACCACCAGAT
ATTTCTAATTTGGTTTCATTGCAATATCTTGATTTATCCTCGACAAGGATATTGAGGTTT
CCAGTTGGGATGAAGAATCTCGTAAAATTGAAGAGATTGGGGTTGGCCTGTACATTTGAA
CTGTCTTCAATTCCACGAGGACTAATATCAAGTCTTTCAATGCTGCAAACAATCAACTTG
TACCGTTGTGGATTTGAACCAGATGGTAATGAGTCATTGGTAGAGGAATTGGAGAGTTTA
AAATACTTGATCAATTTACGTATCACCATAGTAAGTGCCTGTGTGTTCGAGAGATTTTTA
AGTTCCAGAAAGTTACGGAGTTGCACTCATGGAATCTGCCTCACGAGTTTCAAAGGTTCA
ATCTCACTTAATGTATCATCTCTTGAAAATATAAAGCATCTCAATTCGTTTTGGATGGAA
TTTTGTGATACTTTGATCAAGTTTGATTGGGCAGAGAAAGGAAAGGAAACAGTGGAGTAT
AGCAATCTTAACCCAAAGGTCAAATGCTTCGATGGCCTTGAGACTGTGACCATCTTAAGA
TGCCGGATGTTGAAGAATCTGACATGGCTTATTTTTGCCCCAAACCTCAAATATCTTGAT
ATACTATATTGTGAACAAATGGAAGAAGTGATAGGAAAAGGTGAAGAGGATGGAGGAAAT
CTGAGCCCATTCACAAATCTCATACAAGTACAATTACTTTATCTACCACAACTGAAGAGT
ATGTACTGGAATCCCCCGCCCTTTCTTCACCTGGAGAGAATTTTAGTAGTTGGCTGTCCG
AAGCTGAAGAAGCTGCCACTCAACTCCAACAGTGCCAGGGAACGTAGAGTTATGATTGAA
GGAGAGGAAGAGTGGTGGAATGAGTTAGAATGGGAGGATGAAGCTACTCTAAATACTTTC
CTTCCCAATTTCCAAGCATTAGATAAGAACAAGGGGGTAAGGATTTGA
>VIT_14s0066g01160.t01 cds chromosome:IGGP_12x:14:27639105:27640918:1 gene:VIT_14s0066g01160 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAAAGCTTCCCTGTCTCCGTCAAGAAGCTCTGTTTTGATATTAAGGGGAACAAAACA
AATGTAGTCATTTGCAGCTACGATGACTGTTTTCTTGTTATTGCAACTCAAATAGGAGGT
ATGGGAACAATACTGCATGCCAGGAAGGAAGAAGGGGTGTCGATCCATCCAACCTTCAAT
GTATCTGTATTATTTGGTAAACGAGATGAGCCAATGCTAGTGGCAAGTGCTCGTCAACTG
ATCGAACACATAAGGAGACAGTGCGAGGAATCATGTCTGCTGTGA
>VIT_06s0004g00540.t01 cds chromosome:IGGP_12x:6:732503:733217:-1 gene:VIT_06s0004g00540 gene_biotype:protein_coding transcript_biotype:protein_coding description:Protein yippee-like [Source:UniProtKB/TrEMBL;Acc:D7SLK0]
ATGTCTACATCCACATTAGACGCATGGTTCTGTTGTTTGCATTGCAAAACTCGCTTTGCT
CCTTTCAATGGTTTGATTAAGGAACTTGCTTCACATCGGAGTGGGGAGAAGTGTTGGTTC
CTCTTTCGTGATAACGCTGGCTTGATGAATGTGAACTTTGAAGGAAGAAAGGCAATTGAT
CAAGCTCCAACTAGTGTTAAATCTGTTGAGGTTAGAGATGGAGGTCATACAACTCAAACA
GATATGGCCAGCATGTACTGTTCTAAGTGCAGTGCTCATGTTGGATGGAAAATAGTTAAG
GAGAGCAACAATCACCCAATAGTCCATCAAGGCCAATACATAGTGCAAAATCATATAAAG
ATGTGA
>VIT_08s0058g00150.t01 cds chromosome:IGGP_12x:8:8786927:8789593:-1 gene:VIT_08s0058g00150 gene_biotype:protein_coding transcript_biotype:protein_coding description:ammonium transporter 2 [Source:TAIR;Acc:AT2G38290](projected from arabidopsis_thaliana,AT2G38290)
ATGGGAACAACAGGCGCCTACGACGCCCTCCTCCCAGCAGTCCCTGAATGGCTAAACAAG
GGCGACAACGCATGGCAAATGACTGCATCCACCCTTGTGAGCATCCAAAGCGTTCCGGGC
CTTGTCATCCTTTACGGAAGCATTGTGAAGAAGAAATGGGCTGTGAATTCAGCTTTCATG
GCCCTCTACGCCTTCGCGGCCGTCCTCATTTGCTGGGTTCTTGTGTGCTACCGCATGGCC
TTTGGTGACCAGCTCCTGCCTTTTTGGGGGAAGGGTGCCCCAGCTTTGGGCCAGAAGTAC
CTCATCCGCCAAGCGGCTGTGCCCGAGACCGGCAGCGAGCCTTTCTATCCCATGGCCACG
CTTGTCTACTTTCAGTTCACTTTTGCGGCCATTACGCTTATCCTGCTTGCTGGGTCCGTT
CTTGGTCGGATGAACATTAAGGCATGGATGGCCTTTGTGCCTCTTTGGCTCATCTTCTCC
TACACTGTTGGCGCCTTCAGTCTTTGGGGTGGTGGCTTCCTCTACCAGTGGGGCGTCATC
GATTACTCCGGAGGTTATGTCATCCACCTCTCTTCAGGAATTGCTGGTCTCACTGCAGCT
TATTGGGTCGGACCCAGATTGAAGAGTGATAGGGNNNNNNNNNNNNNNNNNNNNNNNNNN
NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
NNNNNNNNNNNNNNAGCAGTTCTCAACACAAACATATGTGCAGCAACCAGCCTCCTTGTA
TGGACTTCTTTGGATGTCATCTTCTTCAAGAAACCATCCGTGATCGGAGCTGTTCAGGGA
ATGATGACAGGCCTTGTTTGCATTACTCCAGGAGCAGGCGTAGTGCAATCTTGGGCGGCA
ATAGTGATGGGAATACTTTCCGGCAGCATTCCATGGGTGTCCATGATGATCCTTCATAAA
AAGTCCAAATTACTACAAAAGGTTGACGACACACTAGGTGTATTTCACACGCATGCAGTG
GCGGGACTGTTGGGTGGCCTCCTGACTGGACTCTTAGCAGAACCAGCGCTTTGCAGGCTC
TTAAAACCAGAAAGCAATACGAGGGGTGCATTTTATGGTGGGAATGGTGGCAAGCAATTC
ATGAAGCAAATCGTTGCAGCCCTTTTTGTGATCGGTTGGAACATAGTAATCACCACACTG
ATTCTCCTAGCTATAAAGCTATTCCTACCTTTGAGGATGCCAGACGAGGAGCTGGTTATA
GGAGATGATGCTGTCCATGGAGAGGAAGCGTATGCCCTTTGGGGTGACGGAGAGAGGTAT
GACCCAACAAAGCATGACCCAACAAAGCAAGATTGGCACGTGTCATCGTATTCTGGGGAA
ATAGCCCAATCCCCTTATGGCAGTGGTGCAAGAGGAGTAACTGTGGAGTTGTAA
>VIT_04s0044g00560.t01 cds chromosome:IGGP_12x:4:21396345:21396768:-1 gene:VIT_04s0044g00560 gene_biotype:protein_coding transcript_biotype:protein_coding description:Histone H3 [Source:UniProtKB/TrEMBL;Acc:A5AEY1]
ATGGCGCGAACCAAGCAAACAGCCAGAAAGTCCACCGGCGGAAAGGCTCCACGCAAGCAA
CTGGCGACAAAGGCTGCCAGGAAGTCGGCTCCGGCGACCGGAGGAGTAAAGAAGCCTCAC
AGGTTCAGGCCAGGGACGGTGGCTCTGAGGGAGATAAGGAAGTACCAGAAGAGCACGGAG
CTACTGATTCGGAAGCTGCCGTTCCAGCGACTGGTTCGTGAGATTGCTCAGGACTTCAAG
ACGGATCTGAGGTTCCAGAGCAGCGCTGTGGCGGCTCTGCAGGAGGCCGCAGAGGCCTAC
TTGGTGGGGCTCTTCGAGGACACCAACTTGTGTGCGATTCACGCCAAAAGAGTCACTATT
ATGCCCAAAGATATTCAGCTGGCCAGGAGGATTAGAGGCGAGAGGGCTTGA
>VIT_19s0014g01450.t01 cds chromosome:IGGP_12x:19:1520508:1521347:-1 gene:VIT_19s0014g01450 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTCTTTCCACAGATTCTACGCCTCATGGTTCGACCACCTGAACCACTTGGTGCACCAA
CTCACCCTCGCGCCCAAGCCCACCACCCCACAAGACAACCCAGCCCTGCTCCAACTGGTC
CAGAAGGTCATTTCTCACTACTCCCAGTACTACAGAGCCAAGTCCGTCGCCGCCCAGAAC
GACGCCGTTTCACTCTTCGCGGCCCCATGGTCCTCCTCCCTCGAACGCTCCCTCCACTGG
GTCGCCGGGTGGCGTCCCACCATCGTTTTTCACCTCATATACACCGAGACCAGCGCCCGC
TTCGAGTCCCACATCGCCGACATCCTCCACGGCGTACGCACCGGCGACCTGGGCGACCTC
TCCACCGCTCAGCTCCATCGGGTGAGCGAGTTGCAGTGCGAGACGGTGAGGGAGGAGAAC
GAGATCACGAGGGAGCTGGCCAAGTGGCAGGAGGGAGCAGTGGAGCTGGTGGAGGCAGGT
GGGGATGGGAATGTGGAGGAGAAGATCGGAGGACTGATGAGTGTGTTGGTGAAGGCGGAT
GAGCTGCGGATGAGGACGATTTGGAGAGTGGCGGAGATGTTGACGCCGCAGCAGGCGGTG
GAGTTCTTGATCGCGGCTGCCGAGTTGCAGTTTGGGGTTAGGGTTTTGGGGTTGAACCAT
GATAACCAACGTGAGAATGTATGA
>VIT_11s0078g00490.t01 cds chromosome:IGGP_12x:11:12865608:12866147:-1 gene:VIT_11s0078g00490 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCTTGCCATTTACGGAGTCGCCACTGATAGTAGAGCGATAAACGAGCTCTCTGGAGTT
ACAGTAGGAGCCACGGTACTAGTAAATGTCCTCCTTGCAGGGCCAATAACAGGAGCTTCC
ATGAACCCTGCTAGGAGCATAGGCCCGGCACTTGTCTCAATGGAGTTTGACTGCCTTTGG
ATCTACATTGTGGCTCCCATTCTAGGAACCACTACAGCAACTGTAATCTACAGTCTTGTT
AGGCTTCCCTTGCCTGAGAATCGGCTTTAA
>VIT_09s0002g05030.t01 cds chromosome:IGGP_12x:9:4664213:4664792:-1 gene:VIT_09s0002g05030 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGACTTTCCAAAAGATACATCATCTATACACAGTATATATATTATTTTTAATTGAGGTT
GGTTTATGGTGA
>VIT_08s0007g01720.t01 cds chromosome:IGGP_12x:8:15791748:15794584:-1 gene:VIT_08s0007g01720 gene_biotype:protein_coding transcript_biotype:protein_coding description:Reticulon-like protein [Source:UniProtKB/TrEMBL;Acc:D7THC2]
ATGGGTTCATCGGATCGATTGTTTAATAGGCAGAGAACTGTTCATCAGATCCTCGGAGGA
GGTCTTGTTGCAGATGTGATGTTATGGAGGCAAAAAAATCTGACAGTGGGGATACTGTTA
GTAACTCTAGCTGCCTGGGTGGTGTTTGAGTTATCTGGTTACACTCTATTGTCCCTTGTT
TCAAGTGTTTTCCTGCTACTAGTCTCCATTCTTTTTCTTTGGGCTAAATCCGCAGCAATT
CTTAACCGACCTGCACCACCCCTGCCAAATTTGTATCTGTCTGAAGAAATTGTAAATGAA
GTTGCAGCTTTCATCCGGACACGCACAAACACCTTGCTTCAAGTGTCCCAAGATATTGCC
CTGGGTAAGGACTCAAGGATGTTCTTCAAAGTAGCTGCATACCTATGGCTGATTTCTGTT
GTTGGAGGCTTGACTGATTTCCTAACTTTGGGTTACATCAGTCTTGTTATTGTCCTTACA
GTTCCAGCCCTCTATGAGCGGTATGAAGATTATATTGATAGATATGTGATGATGGGCTAC
AGAAAATTGCAGCTATTGTATATGAAATTAGATGAGGAGTGTATCAGCAAGGTTCAAAAA
TGGATTTTGGAGAAGAGGAAACTGAGCTGA
>VIT_16s0039g01760.t01 cds chromosome:IGGP_12x:16:1601585:1601779:1 gene:VIT_16s0039g01760 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAATTTAATCTTTCATGACCTCCTCAACACACTCTTGATACGAAATAAGCCTCCCGCC
ATAGATAAGAGATCGAGAGATGAACCCGCACCACATTTTAGAACCTTGGAACCAAGACCC
CCAACTAGAGATGGAATTTCAGAACCTAAACAACTCACTTTAACCAACCCAAAAATGAAC
CATTATTTTATATAG
>VIT_07s0031g03080.t01 cds chromosome:IGGP_12x:7:19853167:19855359:1 gene:VIT_07s0031g03080 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGCTATGAAAAGAGCAAGATTCTTGTGTTGGGAGGAACGGGGTATCTGGGTAAATAC
ATGGTGAAGACAAGCGTTTCCATGGACCATCCGTATGCCTATGTTTGCCCTGTTAAGCCG
AATACCGATGCTTCCAAGCTAGACTTGCACCATCAATTTGAATCCATGGGAGCATCTTTT
GTGTTTGTAAACTGTGTTCAAGTTATATTAGCAAATCACATCAAGTTTGAATTTGTGAAA
GAATCAAGTAAGAGAGAACAAACAATGTTGTTTTATGCAGCTCAGTTGAATTTTGAGGAA
GATGTAGCAGCATACACCGTAAAAGCAGTAGTAGATCCAAGGACAAGTAATAAAGTAATA
ATCAACAGGCCACCAGGAAAATATAGGACCTGTTTGGCAATTGTGTGTTGA
>VIT_04s0044g00140.t01 cds chromosome:IGGP_12x:4:20833867:20841245:1 gene:VIT_04s0044g00140 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGAGGCCTATTTCATCTTTTTGATTTCAATCAAAGCAGCATGGCCAGAAAAGTTCTT
GCACATAAGAGGCATGTGGGCGGCTTGGAAGCTCCTCGAAACAGCTTGGAGTTGCCAATA
GAAACTTCTCAGGGCTATTATGCTGTAGGAGACAGTGTGCCGAACTCTTACCAAGTGCAA
CAGGACTGGGCAGGAAAGAACTGTCATCCAACTGAGGCTTCAATGAAGAAGTTGATCAAT
CAGGAGATGTCCAAACGATCAAACACCAGACACAACACACCAAGTATTGTGGCCCGGCTG
ATGGGAATGGACATGTTACCACTGGATACAAAATCGGTAGTTCAGCCAATTGAAAAAAGG
AATGTAGCTGAAATCAATTTTTCAAAGAAGGGACGGGAACGGACTGAAAATGGCTCCATT
GGCCATGCCCCTCTTAACCCAAATTCTTCCAGGCAGATGGAGTGCAACTCATTTCACCGC
AATAAAGACAGAGATCCTGATCGATCAAGCAGGAACCAGAAGTTGGGAAAACCAAGGCCT
CGTGAACATCCACAGGAGGAGGAACTACAGAAGTTCAAGAAAGAGTTTGAAGCATGGCAA
GCAGCCAGGTTTAGGGAATGTGCAAGTGTTGTGGAGCTTGACAGCATTCCTAGGAAGCTG
CTTGCTCAAGAGAACCTCAACAAGGAAAAGAGGGCTATTTATTCTAATTCTGGAATAATA
GCAAATGAGAAGCCTGTAGAACTTAAGGGTAATGACATTAAAGCAAGGTATCATGGAAGA
AGTGGTCTGCAACATAATGGACATAAACTGGAACTATACCCAGATGAGCAGAAGGAATAT
TTTTCTTTAAGTAGATCCACAAGCAGAGACTTTGATCAGTCCCCCATGATGAATTGTGAT
AAGAAACTGGAAAAATCTTCTGCCCCCACAAGGATAGTGATCCTAAAGCCTGGTCCTGAT
AGGATTGGCAACACTGATGAGTCTTGGGCCAGTTCCTCAGGTACTTTAGAGGAGAGAGAT
AGCATAGAAGATTTTCTTGAGGAGGTGAAGGAAAGGTTGAAACATGAACTCCAAGGGAAA
ACTCGTAAGAGGGTTACATTGGTCAGAGGAGGTGGAATTGAGACCCCTTTTAGTGAAAGG
CCATCAGAACCAAAACAAATAGCTCAGCATATAGCAAAACAGGTTCGAGAAAGTGTTACC
AGGGACCTTGGAATGAATTTGCTTCGATCGGAATCAACTAGATCATATAGAAGTGAAATT
CAGTTAAATGGATCAGGTTCCCCAGAGTTCATCAACAGAGATACTAGGAAATTCTTGTCA
GAGAGGTTGAGGAATGTTCTAAAGAGAGAAACACATCAGGATATCCCCATAGTTGTCAAC
GGCAGCTCAAGGCCGTCAATGTTAGATTATGAAAGGAACAGACTAGAACAGACAGGGGAT
AACTTGAAGGCTGGAAACAGGATGAACCACTGGGAGAATGTCAACAATGAAGCAGAAATG
CAAACTAGATCTTTCAGACATGGGCCAGATGATGATGCAGTTATCCACAGAGAATCGTCT
CCTAGGAACCTCATTAGATCTTTATCAGCCCCAGTATCTGGAACATCATTTGGGAAGCTC
CTTCTAGAGGACCGCCGCATTTTAACTGGTGCTCATATAAGGAGGAAGCATGAAGTCACT
GAAAACTTGTCAGTGGATGTGAAGAAAGGGAGCAAAGAAAAATTTAATCTAAAAGAAAAG
GTTTCGAATTTCAAATATAGTTTCACATTTAGAGGGAGGTTATTTGGCAGAAAGATTCAG
TCAGCAGTGGAATCATGTGGAATCGAACATGATCCCATGAAAGACATCATGAGCGGACCA
ACGGTTATTATGAATTTGGGTGACCGGCATGAGAACTCCACTGAGGTGCCTCCAAGCCCT
GCATCAGTGTGCAGCAGTGCTCATGAAGAATTCTTCAGACCTGGTGATTATGTCAGTCCA
GTATCAACACCGGATTTACCTTTGGTAGAAGATTACCCAGTACCACATCTTTTTAGGGAG
ATCAGCTCTAACCTTAATGAGCTTCGGAGGCAACTAGACCAACTTGGATCCAATGGGTCT
GAGGACACAACAATTGACGAGGAACCACCAGAGGTTGAAATAATTGAATTGGAGGACCAG
GCAGAGGCTTACATAAGAGATCTGCTTGTTGCTTCTGGTTTCTATGGTGGATCATCTGAT
ACAGTTTTATCAAGATGGGACCCACTTGCAAGGCCTATCAGCAACCGGGTCTTTGACAAG
GTGGAAGAGTCCTACAAAAAATTGGCTAAGGATAGCGAAGGGTCCCCAGAGGCTGACGGT
GAGAAGAAGGTAGATCACAAAGTGTTACTTGATTTATTGAATGAAGCACTTTCGACTGTT
CTTGGACCGCCCGTGGGCATGTCCAGATTCAGAAGAAAATTTATGGGTTCTACTATGTTG
TCTGCTCCACATGGAAAGAAATTACTGGATTGTGTATGGGAGATTATCCGTGTGCATGTG
TACCCTCCAGCTGACAAATCTTGTTACTCGCTTGATAGTATGGTGGCTAGGGATCTGGGT
TCAATTCCCTGGTCCGGACTGATTGATGATGAGATGAATGCTCTGGGAAGAGATATGGAA
TCTATGATTATTGGAGGTCTGGTTGATGAAATTGTGAAGGATATGCTTCTGGGCTGGTGG
ACATCATAA
>VIT_09s0018g01600.t01 cds chromosome:IGGP_12x:9:18744638:18788415:1 gene:VIT_09s0018g01600 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCGGAGCCTCTGCTTCATGAGGAGCACTTTGACGTTCTCACCAAAACTGGTCAAAGG
ACTGGCCTTTCCAAGCCCAGGGGAGATGTTCATAGAGACGGTGATTACCATGCTGCTGTT
CATGTGTGGATTTTTTCTGAGAGTACACAAGAACTGCTTCTTCAACGACGTGCTGACTGC
AAGGATTCATGGCCAGGGTTGTGGGATATCTCCAGCGCTGGCCATATATCTGCCGGTGAT
TCATCCCTTATAACTGCAAGGAGGGAGCTTCATGAAGAGCTTGGTGTAATCCTTCCAAAA
GATGCCTTTGAATTTTTATTCGTTTTCCTTCAAGAATGTGTCATAAATGATGGAAAATTC
ATTAATAATGAATTCAATGATGTGTATTTGGTAACAACTCTTGCTCCTATACCTCTGGAA
GCCTTTACTCTACAGGAATCAGAAGTTTCTGCTGTTAAATACATTTCTTGTGAGGAATAT
AAGAGGTTACTTGCTAAAGAAGATCCAGAGTATGTTCCCTATGATGTAAATGGGAAATAT
GGTCAGCTCTTTGATATAATTGCACAAAGGTACAAAGAGAACATGGAGGAACGCAGTCTA
ACTCTGCAGAAACAACTTCGTCGTTATGTTCCTATTTCTCTTGAGGCAGAGATGACTGGG
GTCACTGATGCAGACAAGAAAGCTCTGGTTTTACTTGTTCAAGCTGCGACAATTATTGAT
GACATCTTTAATCTGCAGGTTTGGTACAGCAACCCAATTTTAAAAGATTGGTTGAAGGAA
CATGCTGATACATCTCATTTGGACAAGTTAAAATGGATGTACTATTTGATCAATAAGAGT
CCATGGTCCTGCCTTGATGAAAATAAGGCATTTTTAACAACTGCAGATTCAGCTGTTAAG
TTGCTCCCTGAAGCCACAAAGTCTATAACTGGATGGAAGGGTCTTGAGTATAGAGCTGCA
TTTCCTTTGATGAAACCACCTGGGGCAAATTTCTATCCACCGGATATGGACAAAATGGAA
TTTGAATTATGGAAGGGCAGTCTAGCGAAGGATAAACAAGAAGATGCAACGGGATTTTTC
AGTGTTATTAGAAGGCACGGTGAATTCATGTTAGATGCTTCTCTGTCCAATAACACAGTT
GAGGGTACTGATGATTTGGTGGGGTCCACTCATGATCTATATAGCATTCCTTTCTCTCAG
GAGTATAAGCCTTTCCTCAAAAAAGCTGCCGAGCTACTACATAAAGCAGGGGACTTGACC
GACTCACCTAGTCTGAAGAGGTTGCTACACAGCAAGGCTGATGCCTTCCTTTCAAATGAA
TATATTGACTCAGATATAGCCTGGATGGAGTTGGACTCTAAGTTGGATGTTACTATTGGC
CCATATGAGACATATGAAGATACACTTTTTGGTTATAAGGCTACATTTGAAGCATTCATT
GGAGTTCGTGATGACCATGCAACTGCTCAACTTAAACTCTTTGGTGATAATTTGCAGGTT
TTGGAACAAAATCTTCCAATGGATGATGTGTACAAATCAAAAGAAGTAATTGCTGCTCCT
ATTCGTGTCATCCAACTTGTTTATAATGCAGGGGATGTGAAGGGTCCCCAAACTGTTGCA
TTCAATTTACCAAATGATGAGCGTATAGTAAAAGACCGAGGAACATCAATGGTCATGCTT
AAAAATGTTTCGGAGGCAAAGTTCAAGAATATTCTTCGGCCTATAGCTGAGGCATGCATT
ACAAAGGAGCAACAGAAATATGTTGATTTTGAATCTTTCTTCACTCACACAATTTGTCAT
GAATGCTGCCATGGGATCGGGCCTCATACCATAATACTCCCAAATGGTCAAAAGTCTACA
GTGAGATTGGAGCTGCAAGAACTCCACTCATCTCTGGAAGAGGCAAAAGCTGATATAGTT
GGGCTTTGGGCACTAAGATTTCTGATCGGCCAGGATTTGCTTTCAAAGAGTTTATTGAAG
TCCATGTATGTCTCTTTCCTAGCGGGATGCTTCCGCTCAGTGCGTTTTGGGTTGGAGGAG
GCTCATGGAAAAGGGCAAGCACTACAGTTTAACTGGGTATTTGAGAAAGGAGGCTTCATT
TTGCATCCTGATGAAACATTTTCTGTTGATTTTGCTAAGATTGAAGGTGCAGTTGAGAGC
CTGAGTAGAGAGATACTTACCATACAAGCAAAAGGCGACAAACCTGCTGCATATGCGCTT
CTTGAAAAATATGCTAAAATGACGCAACCATTGCGAGTTGCATTGGAAAAATTAGAAAAT
ATTCAGGTCCCTGTGGATATAGCTCCTAGGTTTCCCATTGCAGACAAAATATTGGGAAAA
ATTGGGTGA
>VIT_05s0020g01440.t01 cds chromosome:IGGP_12x:5:3151852:3155498:1 gene:VIT_05s0020g01440 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCCAACTCCGATTCCACTCCTCCTCTTCCCGTCGTCGCTCCACTATCATCCAGGAAG
GAAAATGTGACACCGATCGGCTCAAAAATCGCGGAATTAAATGAATCAAGGACAGAGCTG
CTTAGTAGAATTCAAGGGCTGAAACAGGACTTGCAAAGTTGGAGGTCAAAGTTGGACACT
CAAGTTAAGGTCTACCGTGATGAGCTTTCTGAACTCAAAAAATCACTCAATGGTGAAGTG
GAGCAACTTCGATCAGAATTTCAAGACCTAAGGACCACTCTTCAGCAGCAACAAGAGGAT
GTTACTGCAAGCCTAAGAAACTTGGGGCTGCAGGATGTCTCAGGGGATGCTAAAGAGGTT
CAAGATACTAAAGAGGCCGAAGATACCAAAGTTGATGCAAATGATAAGGAAGTTCAAGCT
GCAGCCAAGGAAAACGGTAAGGAAACTGAAAATTAG
>VIT_10s0116g01470.t01 cds chromosome:IGGP_12x:10_random:750081:750194:-1 gene:VIT_10s0116g01470 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCATTCTAGCTGCCTAGCAGCAGCAGTCATCTTTAATATATTGTATGGTTCTCTAATT
TGTTGTTTTAGACAACTGAACTCTAGAATCTCACAGGAAATATCAGCCTCTTAA
>VIT_03s0088g00490.t01 cds chromosome:IGGP_12x:3:8653859:8658460:-1 gene:VIT_03s0088g00490 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTGTTTCTTCAAACGGGTCTCCCTCACCTTCGCCGGTCACAAGCAGATCAAACCCC
AATTCAAGAAACTCAGAAATCAACAATACTCTCCGAAGGAGTTTCAGTGGAAATCCATTC
ACCAAGCCTTCAATCGTCGCTAACCCGAGAGGCTTTAATCCTGTTACACCTGCTAACAGT
CCTTCAGATTTTCCACGAAGATACTCCATTGCAAAAGAAGGTGGTGTTCCTCCACACCAA
TATGAGAAAGAGAATGAGAAAGATCAGAATGCAAAACCAGTGAGAATCAGATCACCAGCT
GTTTCAAAGGGTACAAAGAACTTCATGTCCCCAACTATCTCTGCTGCTTCCAAGATTGCT
GCCTCTCCCAAAAAGAAAGTGTTGCTTGAGAGGAACGAACTGATTCGAACTTCATTGTCA
TCATTTTCAGATGGGAAAAGTCCTCTTAGTCCATTGAATCTCCAGGAAGTGGTTGAAGAT
TCTGATTCAAAGTCAGCTTCCTCTGATTCAACTATGGTAGATCCCGGAAAAAGGAAGGAA
TGTCCTGTGGCTCCTTCTCCTTCCAAAGCTTCCAAAGGCGATGAAGTCCTTGATTTTCCG
GTGCCTTTGAAATCCAAGAATGACTCTGAATCCTTATCAGAGACCATAACCATGGGATCA
GACTGTGTTGGTATTGATGATTGTTCAAAGACCAGGCCTAGTCCTTCTCCTTCATCAACT
TCTATTCTGGCACCACTTGATGCTGATCCATCACTTCCTCCCTGTGATCCCTCACTTCCT
TCCTATGTTCCCAAAACAAACTATGCTAATCCATCACCTCCTCCCTATGATCCCAAAACA
AACTATCTTTCACCCAGGCCTCAGTTCCTTCTCTACAAGCCTAACCCAAGAATTCAAAAG
TTACTCAACAAAAAACAAGAGGTCGGCTTGAGGGGATGTAAGCGACTTGAGGATAGCTTT
ATCTTTGAAAGCCTGTCTGATACTGAAACCCCTGAAGATACCCAATCTGAAGATTCTTCT
TCCGTTGAACTGGAAGGACAAAATGAAGAGGTAGAAGAAAGTGAAGCAGCTTTGACAGAA
ACAGCCCAAGAAGAACCCAATGTGTCTGAACCAAATCCCATTGACATCCGCACTTCTAAT
GGGAGGGCCCTTGAGGCAAAAGGGGTGTCCAAGTCATATTCCTCTTTCAGATTGAAGCCC
ATTTTTGTTCTGTTGCTCCTGTTAGTTGGGTGTTTGTGTATACCAATTACTGACTCTCCA
TTCATTATCTCAGTCATTGATTCCTCTGTCGGCGAAGAGTCAAGCTTCACTAAATTGTAT
GAACCAGCTGAGCTCGCTGAATTTGCAAGAACAAATTTTGATGGGCTGACTAGAAACTTC
AGGCTGTGGTCAGCTAACACAGTGTCTTATTTCTCCAAGATGATTCCCATTGTAAAAGAA
ACAAATGAATTGGGTTTCTTGCGGTTTGGTAACTTCACAGATTCACAAGTAGATATTGTG
GGCGGTGCATACCTTGTGAAGGAAAATCAACAAAATTTGCAGTGGCCTATGAAGGAGCTA
GAGGTTGGAATTGTTCAAATGAAAGAGCAGGGTAATATGGTCACTGAAGCATATGAAAAA
GTTGAAGAGGCTTCACAAGTTAACCCAGAATTTGAAGAGGCTAAGCTGACTTTGCAAGCT
GAAGTAATTGAACCCGATAATTCAGAATTGGAACAGATTCAAGAGGAATATCACGTTGCT
TCTCATACTGAGCTTGAGCAGGCCTCACAGGGTAAAACAGAATTAGAAGAAGCAAATCTC
CCTCTACAAGCTGAAGTCGCGGAACCCCATAATTCGGAAGTGCAACAGACTGAAGAGGAA
AGTAGTGTTGCTTTTCATATTGACCATGAGGCACAACCCCATAATTCGGAAGGGCAACAG
ACTGAAGAGGAAAGTAGTGTTGCTTTTCATATTGACCATGAGGCACAACCCCATAATTCG
GAAGTGCAACAGACTGAAGAAGAAAGTAGTGTTGCTTTTCATATTGACCATGAGGCACAG
AGTATCATAGCTGAAAAGGAGCAGGAAGTTCAAGTCTCACAGGTTTCTAAAATTGAGCCT
GAAAAAGTGCCTGAAGCTGAGAAACTCCAGGGCGAAAATAAACTGGTTTCCCGTGCTGAA
GTTGAAGTGCAGCAGATTGAAGAGGAAAGTAGTGTTGCTTCTCATGTTGGCCCTGAGGCA
CAGAGTATCATAGCTGAAAACGAACAGGAAGTTCAAGTTCCACAGGTTTCTGAAATCAAG
ACTGAAGTGCCTCAAGCTGAGAAACTCCACGGAGAAAATAAACTAATTTCCCATACTGAA
GTTGAGTCCAGTGGAGCAGTTTTCGAACCTGAAAGCTCAGAATCAGAAGCTTGGACAGCA
AATTCACAAAGCTTCAAGGAACTATATCTGTCACTCAAAGAAAAATCCTCTGCTGTTAAC
GTTTTGGGGATTTCTTTGCTCATTCTAATTCTAACAGTAGCTGCAGCTTTCATATTTCTA
AAGCAACAAAAACCTCCTACCCCGAGTCCTGCTGCAATTCCCATGGATCAGTTGCTGGCC
AAGAAACTGGCTCCTATCCCTACAGCAAGTGTGGAGAACACTCACCAAGGGCTGTCTTCT
AGGAATTGGCCAACCGAAGTTGATATGGTTGGCGAGTCATGTCCATCTGAGATGAGCAGC
TTCCAAAGGAGCACATCCTATGGCAAAAGAGGATCAAAGGGGGCAAGTTTTACATCAGAA
TACTCAATGGGTTCACCATCCTATAACCAAAAAGGATCTAAGGGGGCAAGTGAAGCTCAA
AGCCAAGAAAGGGGGCTGAGGAAGAGCAACAAAAGAGAGTCCCTTGCTTCGTCATCAGAA
TACTCAACGGGTTCACCATCTTATGGGAGTTTTACATCATATGAGAAAATTCACATTAAG
CATGGATGTGGAGATGAAGAGGTGGTGACTCCAGTTAGGAGATCAAGCAGAATCAGAAAC
CAGGACAACAAGAAGAGGTTTAGAGACATGGAACCAGAATACTACACTAGACCACAATTT
TTTAATATGGTAGGTGAAGTGATTTTAAGAGAAAAATCAAGCACCACTGCTCTAGTCAAT
GCTATATAA
>VIT_12s0059g02280.t01 cds chromosome:IGGP_12x:12:7074268:7076161:1 gene:VIT_12s0059g02280 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGATTAAACTTTCCCGGAAAGTTTTTTACGTCAAACTCAGACGTAGACTCCTATGTCGC
GTTTCCCTCCTCGGCCGATGCCTCATGCGCCTCTGGGATCGATTTCTCCTCATTTCTAGG
CCCAAATCCATTAAGTATAAACAGTTGCTGAGAGCAACTACCTTTGCTGCTAAGCCTGTT
CCTTCTGCTACCACTCCTGCTTTTCCTCCTCCTCCTCCTCCTCCTCCTCCTCTTCCTCCT
CCAGCTCTGCAGTCTTCAGGGGAGGCTGGTTTTGCAAGGTGTCGTGAGCGTGATAAGGAC
TCGGATTTGGTTGCTTTGAAGATCAGTCTTCTGGGTGATTGCCAGATTGGAAAAACAAGT
TTTGTGATTAAGTATGTAGGAAACGAGAAAGAACAAGGAGACATTCAGACGTCAGGGATA
AATTTGATGGACAAAACTCTTTATGTTGGAGGTGCAAGGATTTCTTATAGTATCTGGGAA
GTAGGAGGTGATGAAAAAGCTCATAATCACATTCCAATGGCTTGTAAAGACTCAGTAGCA
ATCCTGTACATGTTTGATCTTACTAGCAGGTGTACCTTGAATAGTGTCATCAGTTGGTAT
CACCAAGCAAGGAAATGGAATCAGAATGCCATTCCAGTGCTGATTGGAACCAAGTTTGAC
GATTTCATCCAACTTCCCATTGACCTGCAATGGACAGTTGCAAGTCAGGCAAGAGCGTAC
GCTAAGGCCCTAAATGCAACGCTCTTCTTCTCGAGCGCAACCTACAACATAAACGTGAAC
AAGATCTTCAAATTCATCACAGCAAAACTCTTCAACTTGCCATGGACTGTGGAGAGAAAT
CTGACAGTTGGAGAGCCCATGATCGATTTCTAG
>VIT_09s0018g00660.t01 cds chromosome:IGGP_12x:9:17140839:17147044:1 gene:VIT_09s0018g00660 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAGCCCTATCAGGGCAATTAAAAATGTCAAAGCCAATGCTGCTGGACTAACTCGGGCT
AACAATGCAAAACCTGAGGCCCCTAAACCTGAGTCCTCAACTGTATTGTCTAATGCTACA
TCTGAACCCTCTATGAATTTGCAGAAGGCTCAGCTATCATCTGGGTTTCCTGCAGATTTT
TTTGATAATCATGTGACAAAGAAGCAAAAATCTGGAAATGATGATGTCAAGTTCCTAGAT
CCAGATTCATACAACAAGACTGGGGGTTCTGCTTCTGCTCAAACTCAGTCAATGGAGCCT
CTTGAGTCGAAAAACAATTTAAACGGATTGTCCAGTTCTCACTCTGAAAAGATGGGAAAA
AGTGGAATTCGTCATGCCAGGGACCTTACCCAGACATCAGGAAAGATTGTTGGTTCAGAA
ACCAAGGAAGTAAAGGGTGCTCTTCCTGAAGGCTTCTTTGACAACAAGGATGCTGACCTT
CGTGCACGTGGTATTGTGCCTGTTAAGCCGGATGTCAAGGACGAGTACAAAGAATTTGAA
AAGTTGATTCAGGAGGATTTGAAGGAGGTGGACAACCGTTTGGAAGAAGAAGAGTTTGAT
GCAGCTGAGATGATTGAAGAGGCCGAGCCTGTGGAGCAAAAGGACGAGTACAAAGAATTT
GAAAAGTTGATACAGGAGGATTTGAAGGAGGTGGACAACCGTTTGGAAGAAGAAGAGTTT
GATGCAGCTGAGATGATTGAAGAGGCCGAGTCTGTGGAGCAAAAGGTGTATTGGGAGAAA
GTGGAAATGCTGAAGAAGAAGAAATTGGAGCTGAAGGCGGCTAGATCCGGCAGACAGAGT
AAAGAGCCTGAGGTCAGAGGCAAGGGGCATAGCTCTAAAGAGGATTCATCCAGTGATGAT
GATAGTGATGGGAATTTCATGGTTGATTGGAGAGCACAACACCTGTGA
>VIT_00s0282g00040.t01 cds chromosome:IGGP_12x:Un:21073186:21091606:-1 gene:VIT_00s0282g00040 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAATTCTTATGTATGTTTGAAATTTTGCAGTGTCAACCCATTTAGGCTAATTGGAGTT
GGATTGTCAGTTTGGACTGTTGCTGCAGTTGGCTGTGGTTTTTCATTTAATTTCTGGTCC
ATTACAATCTGTCGCATGTTTGTTGGTGTTGGTGAGGCTTCATTTATAAGTCTTGCTGCT
CCATTCATTGATGACAATGCCCCAGTTGCTCAGAAAACAGCCTGGCTGGCAATATTCTAC
ATGTGTATACCATCTGGAATTGCAGTCGGCTATGTTTATGGTGGATTGGTTGGAGATCAT
TTTAGTTGGCGTTATGCATTCTGGGGGGAAGCAATTTTGATGCTTCCATTTGCTATACTA
GGTTTTATTATGAAACCTTTGCAGTTAAAAGGTTTTGCTCCTGCTAAATCAAAGAAAACA
CAGACAGCTGTAGAGACAATTGCCCAAGAAGGTCAAGATACAGAGGCTTTGAATGGTAAA
GATGGTGCCTTGTCCATGAAGGCAGATTCCAAATATCAAAGCTCAAATACACCTTCCGGG
TCAACAATTTCTTCCAATAATGTAAACCAGTTCTCAAGATTTTTTAAAGATATGAAAGTT
CTTTTGTGTGATAAGGTGTATGTTGTAAATGTTCTAGGATATATATCTTATAACTTTGTC
ATAGGCGCATACTCTTACTGGGGGCCAAAAGCTGGTTATAATATTTATAATATGAGCAAG
GCAGATCTGATATTCGGAGGGATTACAATTGTGTGTGGAATATTGGGAACAATAGCAGGA
GGTTGTATTCTGGATTTAATGACTTCTACAATCTCCAATGCTTTTAAGCTTCTTTCAACA
GCAACATTTTTCGGGGCAATATGTTGCTTTAGTGCCTTTTGTTTTAAGAGCCTTTATGGT
TTCCTAGCTCTTTTCTCAATTGGTGAATTACTCGTTTTTGCTACTCAGGGACCTGTCAAT
TATGTATGCCTCCATTGTGTGAAACCAAGTTTGCGTCCGCTATCAATGGCTATGTCTACT
GTTGCAATTCACATTTTTGGTGATGTTCCTTCCTCACCACTTGTTGGGGTTCTCCAGGAT
AGTGTTAACAACTGGAGAGAGACTGCTCTTATTCTAACATCTATACTATTTCTAGCAGCT
GGAATATGGTTCATAGGGATCTTTTTGCATGGCGTGGACAGATTTAACGAAGAGAGTGAG
CATCATGCCACCAGAATTGACAAGTCAAACACAACTCCCTTGCTAGAAGATAAAACAGCA
GATACTGCAGAAGCTTCTGCCTAA
>VIT_04s0044g01120.t01 cds chromosome:IGGP_12x:4:22463343:22470471:1 gene:VIT_04s0044g01120 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTCAGGCACAGCTGGTCAAGTTATACGTTGCAAAGCCGCGGTGGCATGGGAAGCGGGA
AAGCCATTGGTGATCGAAGAAGTGGAAGTGGCGCCTCCGCAGGCCATGGAGGTTCGTCTG
AAGATTCTCTTCACCTCCCTCTGCCACACTGATGTTTACTTCTGGGAAGCCAAGGGACAG
ACCCCTTTATTTCCTCGTATATTTGGTCATGAGGCTGGCGGGATTGTGGAGAGCGTGGGT
GAAGGTGTGACAGATCTCCAACCTGGAGACCATGTTCTTCCTGTATTCACTGGCGAATGC
AAGGACTGCCGGCATTGCAAATCGGAGGAGAGTAACATGTGTGACCTCCTCAGGATAAAC
ACCGACAGGGGCGTGATGCTCAATGATAACAAGTCAAGATTCTCTATTAATGGAAAACCC
ATTTACCATTTTGTGGGGACTTCCACATTTAGCGAATACACTGTGGTTCATGTTGGTTGC
GTCGCTAAGATCAACCCTGCTGCCCCACTCGACAAAGTTTGCGTTCTCAGTTGTGGAATC
TCAACAGGTCTCGGTGCTACATTGAATGTTGCAAGACCATGGAAGGGTTCATCAGTCGCC
ATTTTTGGTTTAGGAGCTGTGGGGCTTGCTATGTCAAGCACAGCTGGTCAAGTTATACGT
TGCAAAGCCGCGGTAGCATGGGAAGCAGGAAAGCCATTGGTGATAGAAGAAGTGGAAGTG
GCGCCTCCACAGGTCATGGAGGTTCGTCTGAAGATTCTCTTCACCTCCCTCTGCCATACT
GATGTTTACTTCTGGGAAGCCAAGGGACAAACCCCTTTATTTCCTCGTATATTTGGTCAT
GAGGCTGGCGGGATTGTGGAGAGCGTGGGTGAGGGTGTCACAGATCTCCAACCTGGAGAC
CATGTTCTTCCTGTATTCACTGGCGAATGCAAGGAGTGCCGGCACTGCAAGTCAGAGGAG
AGTAATATGTGTGACCTCCTCAGGATAAACACCGACAGAGGCGTGATGCTCAGTGATAAC
AAATCAAGATTCTCTATTAACGGAAAACCCATTTACCATTTTGTGGGGACTTCCACATTT
AGCGAATACACTGTGGTTCATGTTGGTTGCGTCGCTAAGATCAACCCTGCTGCCCCACTC
GACAAAGTTTGTGTTCTCAGTTGTGGAATCTCTACAGGTCTGGGTGCTACATTGAATGTT
GCAAAACCATGGAAGGGTTCATCAGTCGCCATTTTCGGTTTAGGAGCTGTGGGGCTTGCT
GCTGCTGAGGGGGCTAGAATTGCAGGCGCTTCCAGAATCATTGGGATTGATCTAAACCCT
AAGAGATTTAATGACGCAAAGAAATTTGGCGTCACTGAGTTTGTGAACCCAAAGGATCAT
GACAAGCCTGTTCAAGAGGTGATTGCTGAGATGACCGATGGGGGAGTGGACAGAAGTGTT
GAGTGTACCGGAAATGTCAATGCTATGATATCTGCATTTGAGTGTGTTCATGATGGGTGG
GGTGTTGCTGTGCTGGTTGGTGTGCCAAACAAAGATGACTCGTTCAAAACGCACCCCGTG
AATCTATTGAACGAGAGGACTCTGAAGGGCACTTTCTTTGGCAACTACAAACCCCGTTCC
GACCTTCCTTCAGTGGTGGAAAAATACATGAACAAGGAGCTTGAACTGGAGAAATTCATC
ACACACGAAGTCCCTTTTGCAGAGATCAACAAGGCCTTCGAATATATGCTTAGCGGGGAT
GGGCTTCGATGCATCATTCGCATGAATGCATAA
>VIT_12s0059g00020.t01 cds chromosome:IGGP_12x:12:4941455:4941937:-1 gene:VIT_12s0059g00020 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAGAGTCACTTCCACCAAATCTTTGTGTATGCCAATAAGCACCTCAACATATCTCAAA
TATTTACAGTGTTGTGGTACACCAATATCATTTCTGGAAGGCATCATTCCTCCACATGCA
TGA
>VIT_05s0020g03030.t01 cds chromosome:IGGP_12x:5:4768687:4774303:1 gene:VIT_05s0020g03030 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTCGTTTTTGTCTCTCATCTTCCTTTTTTCTCTCCTCAACCTCGCTCAATCTCAGAGT
CAATCCCCCAGAGGTGTTTTCATTGATTGTGGCGCTACGGTTGCTTCCCTGATTGACGGC
CGGCAATGGTTGCCTGACGCCACTTATGTATCCTCCGGGACCGCCAAAAACCTAACTGAT
CCCAACGTTGCCCCTATCCTATCCACCGTCCGATCTTTCCCTCTTCAAGGCAATACTAAT
AAGAAATTCTGCTATGTTGTTCCGGTGTTTCGTACTGGGAAGTACATGGTGCGGACGACG
TACTACTATGGGGGAGTCAACGGCCGGGATTCGCCTCCGGTATTTGATCAGATTGTGGAT
GGGACGTTGTGGGGTATTGTAAATACCACGGATGATTATGCGAGAGGGTTGGTATCGTAC
TATGAGGGAGTTTTCGTTGCTGCAGGAAAGACAATGAGCTTGTGTATTGCTGCAAACACG
AATACGGACTCTGATCCATTTATATCGGCATTGGAGTTTGTTCTGTTGGGAGATTCACTT
TACAATTCGACGGATTTTGGGCAATATGGTCTGAGCTTGGTTGCAAGACATAGCTTCGGG
CACAATGGATCAATTATCCGATATCCAGATGATCAATTTGATCGCTACTGGGAGCCATTT
GTGTTAAGTAATCCTACCATGGCAATCTTGAGAAATGTACCTGTTTCTGATTTCTGGAAT
CTCCCCCCTGTGAAGGTTTTTGAAACAGAGCTGACAAGCAGCGGAATGGAACCCATAGAG
TTTCAGTGGCCTCCAGCTTCCCTTCCAAACTCAACATATTACATTGCTCTATATTTTGCA
GATGGTCGTAATTCATCGTCTAGGGTGTTTAACATAAGCATAAATGGTATAACATATTAC
CATAATCTGAGTGTAACTTCAGATGGTGTTGCTGTCTTTGCAACCCAGTGGCTTCTTGGT
GGTCTAACAAATATAATATTGACCCCTGCTGCTGGTTCAGACATTGGTCCATTGATCAAT
GCTGGAGAGGTTTTCAATCTACTGCGTCTTGGTGGAAGAACTCTTACACGAGATGTAATT
GCTCTAGAAAGTGTGAAGAAAAGTCTAGAAAACCCTCCACATGATTGGAATGGTGATCCT
TGTTTTCCTAGTCAGTACTCATGGACTGGAGTTACATGTTCTGAAGGACCTCGGATTCGT
GTGGTTTCTTTAAACCTGTCAAATATGGGTCTTTCAGGATCACTGTCACCTAGTGTTGCC
AATTTGACTGCGTTGACCAACATCTGGCTTGGAAACAATAGTTTGTCTGGATCTATTCCT
GATCTCAGTTCATTAAAGAGACTGGAGATACTGCATTTGGAGGACAATCAATTTAGTGGA
GAGATACCATCATCTCTGGGGAACATAGACAGTTTACAAGAACTTTTCTTACAAAATAAT
AATCTGACTGGTCAAGTTCCAAATAGCCTTACAGGAAAACCTGGACTGAACCTTAAGATT
TTTCCTGGGAATAATTTTTCATCATCACCACCTTCAGGAGCTTAA
>VIT_18s0164g00030.t01 cds chromosome:IGGP_12x:18:18213114:18214038:-1 gene:VIT_18s0164g00030 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCAGCTATGCAACACTCTCCGGTCACGTTCCAGTCCAGATCCCCACCATCGGCGGCC
AAAAGCCTATCGAACAAGCCGCTGAACCTCTCATTCTCTGGCAACTTCCCCTCCTTCAGG
CTGACCAACAAAGTTGCTGGGAAATCTCGATCCGGCGCCTCCTCCGCTAGAATGTCCGCC
ACCGCTGCCGGAAGCTACGCAACCGCCCTCGCCGACGTCGCGAAGTCCAACGGAACCCTA
GACACCACCGCGGAAGACGTTGAGAAAATTGAAAAAGTCTTGTCCGATGAACAGGTACTG
GGTTTCTTCTGCAACCCTACGATTGATATCGAGAAGAAACGCAACGTTTTGGACGAGATA
GCGAAGACATCGGGCATCCAACCACACACCATGAACTTCCTGAACATCCTGGTGGACATG
AAGCGAATCGATTTGATAAAAGAGATAGCGAAGGAGTTCGAATTGGTGTACAACCGGCTG
ACGGATACGGAGTTGGCAGTGGTGAGCTCGGTGGTGAAACTGGAGTCGGAGCACTTGGCG
CAGATAGCGAAGCAAGTGCAGAAGCTGACTGGCGCCAAGAATGTGAGAATCAAGACGGCG
ATCGATCCGAGCTTGGTGGCTGGCTTCACAATCAGGTATGGAAGTGGCGGTTCCAAATTG
ATTGATATGAGCGTGAAGAAACAGCTTGAGGAAATTGCTGCTGAGCTGGAGTTGGGGAAT
ATTCAACTGGTTTGA
>VIT_09s0002g04410.t01 cds chromosome:IGGP_12x:9:4021016:4021502:1 gene:VIT_09s0002g04410 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGACATGTTTATGCCCCAAATATTTCGGTCAATTTATATTCAAAACTGTGAATCAATGG
AAGAAGTTAAGTAATGAGTCTGGGGTCCTAGGAATCAAAGAAGGCTGGGATGTGGAGGAG
TGGCGGTGCTTCTCTTCAACCCCACTGATCTCCTTCCCCAATCTTCTCTCAGCATCCTTG
GCCTTTACTTTCCATCTCAGGACCATTAGAAGTGGCAATTTTTGGAATGGTAGAAATCCA
AAGCCCACCAAGTTTCTCCATCTTCAACTTCTAGCTTGTTTTAATTTTAAGAAAATTTTG
ATGTCTTTTGTAAGTTATAATATCAATTGGGTTGATAACTTGTTTGTTCTTTGA
>VIT_00s0319g00010.t01 cds chromosome:IGGP_12x:Un:23095849:23097293:1 gene:VIT_00s0319g00010 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCCGCTTTGTTCATGGTAG
>VIT_08s0007g04620.t01 cds chromosome:IGGP_12x:8:18509389:18510573:-1 gene:VIT_08s0007g04620 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGTGCGTTATCTCATACAAGGAAATCAACGCAACCACCCGCCAATTTCAGCCACGACC
TTCGCCAAAATATCATCCTCGCATACTCATTCGTTGCTCATCTATCATTTTTTGTATTGG
AGACTTGGACTGTGGTGTAACCGTGTAAGTTCATCAATCAGGCCAAAGGTACTGTTCTGT
TTTGAACTCTTAAGGTTTCCTTTCAGCAGTTGTTCGAGAACTGATGATCATCATTGTTAT
TTTAATTCCCTGTAA
>VIT_00s0194g00270.t01 cds chromosome:IGGP_12x:Un:10731146:10733471:-1 gene:VIT_00s0194g00270 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTTACCATCTCTGCTCTTCGCCCTCCTCTCTCTGCCATGACCACCATTATCTCCAC
AACTCTCTTTCTTTCTCACGGAAATCAAGGCTGAGAAGCTTCAATAGCTTCTCTTTCAAA
CCCAATTCTCTCTCACTTCACTCAAGAACCTTTCTCCAAATCACCCATGTCTCTTTAGAG
GACCCAATTCCACAAGAAACCCAGAAGGCAGATGCCTCAAATCCACCAAATTCTCAAGAC
CCAGATAGGAAAACCAAAAGTTACATCTGGGTCAACCCCAGAAGCCCCAGAGCTTCGAAG
CTTCGTCAGCACTCGTATGATGCCAGGTATGCTTCTCTAGTGAAAATAGCCGAGTCTTTG
GACTCGTGTGAGGCCACTGAGGAAGATGTTTCTCAGGTTTTGAGGTGTTTAGGTGATAAG
ATATTAGAGCAGGACGCTGTGATTGTCCTCAACAACATGACGAACCCGGAAACGGCACTT
CTTGCTTTTGGTTTCTTTCGGAAGAGATTGAAACCGAGCAGAGAGGTGATTCTGTATAAT
GTGACCTTGAAGGTTTTTAGGAAGTGTAGGAACTTGGATAGAGCAGAGAAGCTGTTTGAT
GAAATGCTTGAGAGAGGAGTTAAGCCTGATAATATTACGTTTTCGACAATAATTAGCTGT
GCTAGGGTTAGTTCTCTGCCCAATAAGGCTGTGGAGTGGTTTGAGAAGATGCCTGAATTC
GGGTGTCATCCTGATGATGTTACCTACTCGGCCATGATCGATGCGTATGGACGAGCTGGC
AATGTTGATATGGCATTGAAATTGTATGATCGTGCACGAACAGAAAAATGGAGGATTGAT
CCGGTGACATTCTCGACATTGATTAGAATTTATGGGATGTCAGGAAATTTTGATGGGTGC
TTGAATGTGTATGAAGAGATGAAGGCTCTTGGAGTTAAGCCCAACTTGGTTATATATAAT
ACTTTGTTGGATGCTATGGGTAGAGCCAAGAGACCTTGGCAGGCGAAGAATATTTACAAA
GAGATGACCAACAATGGCCTCCAACCGAGTTGGGGAACTTATGCTGCCTTGTTACGGGCC
TATGGCAGAGCACGCTATGCTGAAGACGCTCTTATTGTGTACAAAGAGATGAAGGAGAAG
GGGTTGGAGTTGAGTGTGGTTCTTTATAATACTCTCTTAGCTATGTGTGCTGATGTTGGC
TACACTGAAGAAGCTGCTGCAATTTTTGAAGATATGAAGAGTTCTGGGAATTGCATGCCA
GACAGTTGGACATTTTCATCATTGATTACCATATATTCCTGTAGTGGGAAGGTCTCAGAG
GCAGAAGCCATGTTGAATGCAATGTTGGAAGCAGGTTTTGAGCCTAATATCTTTGTTTTG
ACATCACTTATTCAATGCTATGGGAAAGCCAATCGTACAGATGAGGTTGTTAGGACATTT
GACCGGCTTTTGGAATTAGACATAACTCCAGATGATCGTTTCTGTGGTTGTATGTTGAAT
GTGATGACCCAAAGTCCTAAGGAAGAACTTGGTAAGCTCATTGACTGCATTGACAAGGCT
AACCCAAAGCTTGGTAATGTGGTGAAACTTTTGCTGGAGGAGCAAAATGGGGAAGGGACT
TTTAGAAAAGAAGCATCTGAACTCTTTGATTCCATTAGCGCTGATGTAAAGAAGGCTTAC
TGCAATTGCTTAATTGATCTGTGTGTCAACCTCAATCTGTTGGAGAAAGCTTGTGAGCTG
TTTGACCTGGGGCTTACACTTGAGATATACATAGATATACAGTCTAAATCACCAACCCAA
TGGTCTTTACATTTGAAGAGCCTCTCCCTTGGGGCAGCTTTGACTGCGTTGCACATTTGG
ATGAATGACTTGTCCAAAGCAGTGGAGGTTGGGGAGGAGCTTCCGGCAGTGCTTGGAATC
AACACTGGACATGGAAAACACAAATACTCAGACAAAGGTTTAGCGAGTGTCTTTGAGTCC
CATTTGAAGGAACTAAATGCACCATTTCATGAGGCCCCAGATAAGGTTGGCTGGTTTCTA
ACAACAAAGGTTGCAGCCACATCATGGTTGGAGTCTAGAAGTGCACCTGAACTAGTTGCT
GTTTAG
>VIT_00s0477g00040.t01 cds chromosome:IGGP_12x:Un:30043240:30044569:-1 gene:VIT_00s0477g00040 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGGCGAAGCACAAAACTGAGGGACCTGATAGGAGCCATCAAGGACAAGGCTTCGCTG
AGCAAAGCAGCTCTTCTCTCCAAGCCCAACACGCTCTCTCTCCACCTATCCCTCCTCCGG
GCCACCACTCACGAGCCCTCTATTCCTCCCCATGACAAGCATATCGCCGCCCTCCTCTCC
TTCGGAAACAGCTCACGCGCCACGGCCTCCGCCGTCATCGAAGCCCTCATGGACCGCCTC
CAGAACACCCACGACGCCTCCGTCGCCATCAAGTGCCTCATCGCCGTCCACCACATCATC
AGACGCGGCAGCTTTATCCTCCAAGACCAGCTCTCCATCTACCCCTCCACCGGCGGCCGA
AACTACCTCAAACTCTCCGGCTTCCGCGACTCCTCTGATCCGATCACGTGGGAGCTCTCT
TCTTGGGTCAGATGGTACTCTTGCTATCTCGAACACGTCCTCTCAACTTCTCGAGTCTTG
GGTTTCTTCCTCTGCTCTTCCTTGTCCACCGTGAACAAAGACGAAGAAGTAGATCAAGTT
TCAGCTCTCACGAACCAACAGCTGATCCGAGAGATAGCGTCTTTGGTGGATGTCATCGAG
GAGACTTACAAAGCACCCGATTCTCTACACGTCCACGGCGACAGATTACTCAGCGAGGTC
ATGAACTTGGTCGGCGACGATTATCTATCTGCAATAAATGAGGTCTCCCTCAGAATCAAT
GAGTTCGGAGAGAGGCTGAGGGTTCTGAGTTTCGGAGAATCAGTTGAGTTGATGTGTGCT
TTGAAAAGATTAGAGAATTGTAAAGAGAGGTCCTCGATCCAGCCCCATCGGAAGAAAGCT
TCAATGGAGACGTTCTGGGGATTGGTGAGTGAGATGAAAGATAGGGTTGGAAAGGAGTAC
AGAGAAGACGCTAGAATGGTGATGATAGGGAGGAGAGAGAGGGCATGTGAGTCGGCTCGG
TGGGGAGAGCGAGTTCTGAAGTCGAGTGACTCAGTCCGCTTCGGTTCAGGAAGACTGGTC
TCGAACCGGTTTGCCTTTTCAATTCTCGAGTCGGTCGAGTCGTGA
>VIT_05s0136g00280.t01 cds chromosome:IGGP_12x:5:13655537:13656294:-1 gene:VIT_05s0136g00280 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGTAGTTGGACTGGAGGTTCCAACATCAAAACTGAAAATATGGAGATGCATATCTCGC
ATATCATAA
>VIT_00s0568g00020.t01 cds chromosome:IGGP_12x:Un:32034405:32035708:1 gene:VIT_00s0568g00020 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGACTTTGACTAGAGCTTTTGAGAAGCTCAGAGACGCTGGAGTGATTGTTTCTTTGGCG
CCGAGGCCTTTGCCCCATCCTATTCCTCCTCATTTCCGTTCACATGAGCACTGCTTGTAT
CATCAGACCCCAGGGCACGATACTGAGCGTTGTTCAGCACTCCATCATGCGATACAGGAT
TTGATCGATTCAGGGGTGGTTGACTTGGCTAGGCCAAGTGTGACCACCAATCCCCTGCCT
GCACATTCTACACATGCAGTTCCTCCTCCTCCTGGTCTTCAGTAG
>VIT_03s0088g00500.t01 cds chromosome:IGGP_12x:3:8660759:8679489:1 gene:VIT_03s0088g00500 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTCCTTGTTTCTCAGAGCCTTTCCTCTCATAGCTCTTCGCTCCAAACCCTTCCCTCTC
TGCCGCACCATTTTCAAACTCAATCCAAAACTACTCCCGAACAGAACCATTTCCTATGCT
TCTGCTTCTTTTTCAACAGAAACCCAAATTTCCGATCCCAAACCCTCCATAATCCTCAAG
GACACTCTTCAATGGGTCAGCCGAACCGGATTTTGCGGCGAATTATCTGTTGACGATGTG
GGCAAACGGGTCCGCATCTGTGGGTGGGTTGCGCTTCACCGTGTCCATGGAGGTCTCACT
TTCCTCAATCTACGCGACCATACCGGTATCGTTCAGGTTACAACCCTTCCCGATGAGTTC
CCCAAAGCACATTCTACCGTGAATGAGTTGAGACTTGAGTATGTGATTGCTGTAGAAGGC
ATTGTTCGATCTCGGCCAAGTGAGTCAATCAATAAGAAAATGAGAACTGGCTTAATTGAG
GTTGCTGTGGAGCATGTCCAAGTGTTGAATGCTGTGACATCTAAGTTGCCCTTCTTGGTT
ACCACTGCAGATGATGCGAAAGATACTGTTAAGGAGGAGATCCGTTTGAGATACCGATGC
CTTGACCTACGCCGGCAGCAAATGAATTCCAACATTATGCTAAGACATAGAGTGGTGAAA
CTCATTCGAAGATACCTAGAAGATATACATGGTTTTGTGGAGATTGAGACTCCAATACTC
TCTAGATCTACTCCAGAGGGTGCTCGGGATTATTTGGTGCCCTCAAGAGTTCAGCCAGGG
ACATTCTATGCTTTGCCCCAAAGTCCACAACTGTTTAAGCAAATGCTAATGGTCTCCGGC
TTTGATAAATATTATCAAATAGCAAGATGTTTTCGAGATGAAGATCTTAGAGCAGATAGA
CAGCCTGAGTTCACACAGTTGGATATGGAATTGGCTTTCACTCCTTTGGAGGATATGCTG
AGGCTCAATGAAGATTTGATAAGACAGGTTTTTCTAGAGATTAAGGGCATCCAACTACCC
AACCCTTTCCCAAGGCTCACATATGCTGAAGCAATGAGTCGATATGGTTCTGATAGGCCA
GATCTTCGTTTCGATCTTGAGTTGAGAGAGGTGTCTGATGTTTTCTCAGAGACTACCTTC
AAGGTGTTTGCAGATACTTTGGCAAGTGGGGGAATTATCAAAGTCTTATGTGTGCCTTCG
GGCGCAAAACATTATTCAAACACGGCTCTTAAAAAGGGTGATATTTACAGTGAAGCAATC
AAATCTGGAGCAAAGGGTTTGCCCTTCCTGAAGGTCTTGGATGATGGGGAAGTAGAAGGA
ATTCCTGCACTGGTATCAAGTTTGGATCCAACAAATAAAAAGCGGTTACTAAAACAATGC
TCTGCAGGATCAGGTGATCTCATATTATTTGCAGTGGGTGACCATGCTTCAGTTAATAAA
ACTCTAGACAGACTTAGGGTATTTATAGCCCACGAACTGGGTTTGGTTGATCATTCCAGG
CATTCAATTCTGTGGGTGACCGATTTTCCAATGTTTGAGTGGAACAGTGCAGAGCAGAGG
CTTGAGGCCTTGCATCACCCTTTCACTGCCCCAAATCCTGAAGATATGGAAGATCTTTCC
TCAGCCCGTGCCTTAGCTTATGACATGGTTTACAATGGTGTTGAGATTGGTGGAGGAAGT
TTGAGAATTTTTAAGCGCGAAGTCCAAGAAAAGGTTTTGGAAATTGTTGGAATCTCACCT
GAACAGGCTGAGGCAAAGTTTGGCTACCTTCTAGAGGCTCTGGACATGGGTGCTCCTCCA
CATGGGGGGATAGCTTATGGACTGGATAGGTTGGTGATGCTATTGGCAGGTGCTAATTCC
ATCAGGGATGTTATAGCCTTCCCAAAAACCACAACTGCTCAGTGTGCCCTGACTAGGACA
CCCTCAGAGGTGGATCCTCAGCAACTAAAAGATCTTTCATATCAGACCCAATAG
>VIT_14s0030g01310.t01 cds chromosome:IGGP_12x:14:5837017:5837292:-1 gene:VIT_14s0030g01310 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTGTAGGGCCGCATCAGGCTCACTGGCATGCATTAACAAGGATGTCGCCCGAAAGGAC
CCCGGTCTTTTGGATGCTATAAAAGCAGGCTCCCAAATTAAAGAACCCGTTGAGGTCTTT
CATGATGCAAAAGCTTCATTCCATGATTCAGTGACAGGACTCCAAACGTCTTTTTTTATC
TGTCATGCAATTGCACACTTCCTTCTGCACAGGTCCAAGGAGCGCACCTCACACTGTGAA
TCAAACTCACATTGTGCACCTCTTTCCTTGAATTAA
>VIT_10s0116g00320.t01 cds chromosome:IGGP_12x:10_random:139966:140982:1 gene:VIT_10s0116g00320 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGACGGTCCAATCCAACCCAACCGAGGCTCAGGCACCGGCGACAAGCGTCTAAAGTAC
GCCTTTGACGCCGGCTTCTTATCCGGCGCCCACCCTCCCGACACGCCCGTCACCGTCGAC
AGTGACAACAGAGACTCCACAATTCCCCTCGGTTCCACTTCGGAGAGCTGCGACTCCGCC
GACGAATCGAAGCGGCTGGCGGATCTAGCCGCGAGCTTCCGAGTTTTCTCGGAGTCGCTG
GCGAGGATGGAGCTGGCGGAGATGGAGATGCTCAAGGCGAGGGAGGCGTTCCGGCTCGAA
GCGGAAAAGCGGCGGCTGGAATCCGAGGCGGAGATGACTCAGATGCTGTTGCAGACTCAG
CTGCAGATCGCATCGCTCGTCTCGCGGAGTCCGAGCCGGAAACGAAAGCGTGGAGAAGAA
GATGATCCATCGATCTCCGAAAGGGAAGGAGGTCTGCTCCTGAGTTACTGCAGTGCAACT
TGCTCCTCTGATCTCTTGAGGTTCGAAACATTTAAGTTCAAACTATGA
>VIT_17s0000g07930.t01 cds chromosome:IGGP_12x:17:8903187:8905249:-1 gene:VIT_17s0000g07930 gene_biotype:protein_coding transcript_biotype:protein_coding description:WAT1-related protein [Source:UniProtKB/TrEMBL;Acc:D7SHV7]
ATGGGGATGAAGGCATGGTTGTCAGGAATAGTGCCAATTGCAGCTATGGTGATGATGGAG
TGTCTTGATGTGGGGTTGGTCACTCTCAGCAAAGCAGCCATGTCCAGAGGAATGAATCAC
TTTGTCTTTGTTGTCTACTACAACGCTCTTGCCTCCCTCATCTTCTTTCTTCTTTCCTTC
ATCTTCCACAGAACAAAGAGGCCCCCTCTCACTTTCTCTCACTTCTGTAAATTCTTCCTT
CTCGGACTTCCTGGGATTACAGTGATGCAGAACTGGGTATTCACAGGCGTAAGTTACAGT
TCACCCACACTTTGTTATGCTATGAGCAACTTGATCCCTGCTTTCACTTTCTTGCTTGCT
GTTGCTATCAGACTTGAAGATTTGGATTTGAGAAGCTCAAGAAGCCAGATAAAACTCCTA
GACAATTGGGTCATTGGAGGCCTTTTTTTTGCAGCTGCTTGTCTTTCACTTTCAGCATGG
AACACTTGCCAGGCACCAATTCTGTCAAGCTGCTACCCATCAAATATCACCGTAATTTCC
TTTATCACATTGTTTGGGGCGATTCAGAGTACAGCAGTTTCTCTGATTGCCGTGAGAGAC
TCAAATGCTTGGAAACTAAGGCCTGATATTGAACTCATCTCTATAATCTACTCAGCTATT
ATTGGTGTGGTAGCATTTTTTGTACAAAATTGGTGCATAAGGAGGAAAGGGCCTGTTTTT
GCGTCAATGTTCAAACCCTTGGGCATGGGAATTGCTGCCATAATAGGTGTCATCTTCCTT
GGCGAAACACTCCACATTGGAAGTGTTATAGGAGCAATTATAATTGCCACAGGCTGTTAT
GTAGTGGCATGGCTACAATACAGAGAAGAGGAAGAGAGTAAAGTCTGTGAAGTTGTCATG
CTGCCTTCAACCTTTGAGAAGGCCCCAATGTTGGATGAGCCAGAGGGAAGCATGAGCCAA
TTTGATGGGTTTCACTGTGGATACAAGGAATATAATCCTGTTTATTCTGTAACATAA
>VIT_14s0030g01920.t01 cds chromosome:IGGP_12x:14:6811951:6812094:-1 gene:VIT_14s0030g01920 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTTCCAAACCTTTTGTGCCTGTGCAACACGTGATTGTCAACCCATATTCTTCATTTGG
GCAGCAATATTTTCAAGTCTATTTTATGTTCATGTATGCCCAGGACTTGTTATAGATTCA
TCTGAGTCACAAATCAGGTTCTAG
>VIT_19s0085g01120.t01 cds chromosome:IGGP_12x:19:23817862:23823379:1 gene:VIT_19s0085g01120 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAACAAAGGCGGAGGCGCCGGTGGAGGGCCAACAGCAGCGGCGGCAGCGGCGGCGGCT
CAGAAACAGAAAACTTTGTTGCAGAGAGTTGAAACTGACATCGCTAATGTGGTTGATCAC
TTCACTTTCTTAGTTAACGTTGCTCGGGTGAATGACCCGCCAGTCAGAAATTCACAGGAG
GCTTTCATGATGGAGATGCGTGCAGCCAGAATGGTTCAAGCAGCTGACTCACTACTGAAG
TTGGTGTCAGAGCTGAAGCAGACTGCAATCTTTTCAGGATTTGCATCTCTTAATGACCAT
GTAGATCAAAGAGAGGCTGAGTTTAACCAACAGGCAGAAAAAACTGACCACTTGTTAGCT
AGAATTGGAGAGGAGGCAGCTGCTAGCCTCAAGGAGCTTGAATCTCATTATTATTCTTCT
GCACAGAGGACAAGCGAACCCCCACAGCCATGA
>VIT_12s0178g00200.t01 cds chromosome:IGGP_12x:12:8678865:8680701:1 gene:VIT_12s0178g00200 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCCGATGCCGAGGATATCCAGCCTCTTGTGTGTGACAATGGAACTGGAATGGTCAAG
GCTGGATTTGCTGGTGATGATGCTCCGAGGGCTGTGTTCCCCAGTATTGTTGGCCGACCT
CGACACACAGGTGTCATGGTTGGGATGGGCCAAAAGGATGCTTATGTAGGTGATGAAGCC
CAGTCAAAAAGAGGTATCCTCACCTTGAAATACCCAATTGAGCATGGCATTGTCAGCAAT
TGGGATGACATGGAGAAGATCTGGCATCACACTTTCTATAATGAGCTTCGTGTTGCTCCT
GAGGAGCACCCAGTACTTCTTACAGAAGCTCCTCTCAACCCCAAGGCTAATAGGGAGAAA
ATGACCCAGATTATGTTTGAGACCTTCAACGTACCTGCCATGTATGTTGCTATCCAAGCT
GTGCTGTCTCTGTATGCCAGTGGTCGTACAACAGGTATTGTCTTGGATTCTGGTGATGGT
GTCAGCCATACAGTGCCAATCTATGAAGGATATGCTCTTCCACATGCAATCCTTCGATTA
GACCTTGCTGGTCGTGACCTTACAGATGCCTTGATGAAGATCCTTACCGAGAGAGGATAC
TCTTTCACCACAACGGCGGAACGGGAAATCGTCCGTGACATGAAAGAGAAGCTTGCTTAT
GTTGCACTTGACTATGAGCAGGAGTTGGAGACCGCCAAGAGCAGTTCTGCAGTTGAGAAA
AGCTATGAGCTTCCTGATGGGCAAGTGATAACTATTGGTGCTGAGAGGTTCCGCTGCCCT
GAAGTCCTTTTCCAGCCATCTCTAATTGGAATGGAAGCAGCCGGAATCCACGAAACTACC
TACAATTCCATCATGAAGTGTGATGTTGATATCAGGAAGGACCTGTACGGAAACATTGTG
CTCAGTGGAGGCTCAACCATGTTCCCAGGAATTGCTGACAGGATGAGCAAGGAAATTACT
GCCCTCGCTCCCAGCAGCATGAAGATCAAGGTGGTGGCACCTCCCGAGAGAAAGTACAGT
GTCTGGATTGGAGGATCAATATTAGCATCTCTCAGCACATTCCAACAGATGTGGATATCC
AAGGGTGAATACGATGAATCCGGTCCTGCCATTGTTCACAGGAAGTGCTTCTAA
>VIT_18s0001g10050.t01 cds chromosome:IGGP_12x:18:8411528:8412438:1 gene:VIT_18s0001g10050 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAGCGGCCTTTTCTCCATCAGTACTAAATTTTCAACCTTGTGCATATGCCTCATATTT
CTTGCCATCAATACTGAAGGAGAGAGTAGCAACAGAGAAATTTTGGAGCTCACTATTGGT
GGCGGCAGTGGCGACAGAGGCGGTGGTGGAGGTGGAAACAGAACACAAAAGGTGAAACTT
TGGAATCCATTTTGTTCACTTCCTCCCCACTTTGCATTGCAATTTCCACCACTACCATAC
GGTATACCACCACCACCACCTCCCGTCGGACCAGAAGTTTTGGTCTTTGACGACCAAAGG
CGCGCTGTGGTTTACCCTGTCATCCAAAAATTCAAGGCCATAATCACCTCAGTCCCTCTA
GGCATCGCCAAATCCTGGCAAGGTTTGGACATATGCAGCTGCAAAGGATTCTACTGTGAC
AATCCACCAGACAACAAAACCGCCATTGCTCTCGCCTCCATTGACTTCAACGGATTCCAG
CTTGGCGCCCCCACCCTCGATGGCTTCATCAACCAACTTACAGACATTGCTCTCTTTCAT
GCAAATTCCAACAACTTTGCCGGCACCAACCCTCCGGATATTGCCAAGCTACCTTGTCTC
TACGAGCTAGACATAAGTAACAATAAATTGTCAGGCTCATTTCCAAGGGCAATTTTGGGA
ATTAAAAGCCTAACCTTCTTGGATATTCGGTTCAATCTCTTTACTGGGTCCGTACCATCT
CAATTATTTTCACAGAATCTTGATGTCCTCTTCATCAAAGATAACAATTTCAGGCAGACG
CTGCCTGATAACCTGGGCAACACTCACGTTCTTTGTCTTATATTTTAG
>VIT_14s0066g00540.t01 cds chromosome:IGGP_12x:14:27046667:27049716:-1 gene:VIT_14s0066g00540 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGCCTCAATATGTTTCGCTGGGATTTCCTCTTCGTTTTTCTTGTCATTCAGATGCCT
GTGATCAGTACGACGCCGCATTTGGGGTCTGGTCCTCACATAGCTGATGTCAATATTCTG
TTGCCTCCCAAAATGACTTATCCCGTTGAGTATCTTCTTCAAGGAAGTGGCGGTTGCTTC
AAATGGTCATGGGATCATCATGATATTTTATCTGTTCTACCTGAATATAATGTAAGCAGT
CAATGTTCAACAAGTGCCAGGCTGAAATCCATTGCTACTTATAACGGTCGAAAAGAGACT
GCTGTTTATGCTGCCGACATACACACTGGGATTGTAGTTCGTTGCAAAGTTTTTATTGAT
AATATATCCAGGATCCAGATATTTCATAACTCTATTAAACTTGACTTAGATGGGCTTGCT
ACTCTCCGTGTTCGTGCCTTTGATAGTGAAGAAAATGTGTTCTCATCATTAGTGGGCTTA
CAGTTCATGTGGCAGCTGAGGCCTGAAACTGATGGATTGCCTCCTCACCTTGTCCACGTT
CCTTTAAAGGATTCTCCCTTGAGTGACTGTGGTGGATTATGTGGGGACCTAAGTGTTCAA
ATAAAACTTGAAGATGGTGGTGCGTTTTCTGATTTGTATGTGGTAAAAGGAATTGGAATT
GGCCACGAGGTTGTTTCTGTGCATTTGCTGGAGCCACAATTTGAGCACATGGCTGATAAG
ATTGTTTTAACCGTAGCAGAAGCCATGTCACTTGATCCTCCCTCACCTGTTTTCATTCTC
ATTGGTGCTGCTGTTCGCTATACTTTGAAAGTCATTCGGGGGAATATTCCTCAAGGTAAA
TAA
>VIT_12s0028g01120.t01 cds chromosome:IGGP_12x:12:1682201:1691707:1 gene:VIT_12s0028g01120 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAGTCGTCCGAGAGAAGTAATCGCCAGTTACGCAGAGCTCTTTGTTATGCAAATATT
GAAAGGCAGCAAGCGACATCACCATCTGTTATCGTCATAGGTGCTGGTATGGCAGGCATT
GCAGCTGCTCGTGCCCTTCATGATGCCTCATTTCGGGTTGTTCTGTTGGAATCGCGTGAT
AGAATTGGTGGACGGGTTCATACTGATTACTCATTTGGTTTTCCTGTTGACCTGGGAGCA
TCATGGCTTCATGGGGTCTGCAAAGAGAATCCCTTGGCACCTTTGATCAGCAGACTGGGG
CTACCACTCTACCGTACTAGTGGCGACAACTCTGTGCTGTATGACCATGATTTAGAAAGC
TATGCCCTCTTTGATATGGATGGGAATCAAGTTCCTCAAGAATTAGTCCGAGAGATTGGT
GTAGCATTTGAGAAAATTTTGGAAGAGACTGATAAAGTGCGACAGGAACATAGTGAAGAC
ATGCCCATCCTAGATGCATTCAAAATTGTTTTTGAAAGGAGGCCAGATTTAAGGCTGGAG
GGGCTGGCTCATAAGGTACTGCAATGGTACTTGTGCAGAATGGAAGGCTGGTTTGCTGCA
GATGCTGATAACATATCACTTAAAAGTTGGGATCAGGAAGAACTCCTTCCTGGTGGTCAT
GGGCTAATGGTCCGAGGTTACATCCCTGTTATAAACACCCTCGCAAAAGGTCTCGACATC
CACTTGAACCACAGGGTTACAAAAATAGTAAGGCGTTATAATGGAGTCAAGGTAACAGTA
GAAGATGGGAGATCATTTGTTGCAGATGCTGCCATTGTTGCTGTCCCCATTGGTGTTCTG
AAATCGAGTCGCATAAAGTTTGAGCCAAGGCTCCCAGAGTGGAAGGAAGAAGCAATTGCT
GACATTGGAGTGGGAATCGAAAACAAGATAGCCTTGCACTTTGATAAGGTGTTTTGGCCA
AATGTGGAGTTCTTGGGAGTAGTTGCAGATACGTCTTATGGCTGCAGTTACTTTCTAAAT
CTCCATAAAGCTACAAGTCATTCTGTTCTTGTTTATATGCCTGCTGGGCAGCTGGCCAAA
GACATTGAGAAAATGTCTGATGAAGCTGCTGCTAATTTTGCTTTTATGCAACTCAAGAAG
ATCCTTCCTGAAGCTTCTGACCCGATTCAGTATCTTGTTTCTCGGTGGGGCACAGATGAG
AATTCACTTGGATCCTACACCTATGATGCAGTAGGGAAACCCCATGATCTGTATGAGAGG
CTAAGGGTCCCTGTAGACAATCTATTTTTTGCAGGGGAGGCGACCAGTGTGAACTACCCG
GGGTCTGTGCATGGTGCATTCTCAACTGGAACATTAGCTGCAGAGGAATGCAGGATGCGT
GTCCTAGAGCGATATGGGGAGCTCGATTTGTTCCAGCCAGCCATGGGTGAAGAAACATCA
TTCTCTATCCCGCTTCAGATTTCCCGGATGTGA
>VIT_04s0008g04980.t01 cds chromosome:IGGP_12x:4:4471170:4475207:1 gene:VIT_04s0008g04980 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGAAACATTAGAGTTCCTTTTAAAGGGATCATTAACGATTATAAAGGAAGAGCACCA
TGCTATAAACAAGATTGGACTGGTGCGCATGGCTCCGGTGTTAGGATATTGGCTCCAACT
TTCTATATATTCTTTGCTTCTGCCCTTCCCGTCATTGCCTTTGGGGAGCAATTGAGTAGG
GAAACAGATGGGCACTTGAGCTCAGTTCAAACTCTAGCTTCTACTGCTATATGTGGAATC
ATCCACTCAATTTTCGGTGGGCAGCCTTTGTTGATTTTAGGAGTTGCAGAGCCCACAGTT
ATAATGTACACTTACTTGTACAATTTCGCCAAAGGAAAGTCAGACTTGGGGAAGGATCTA
TATCTAGCTTGGGCTGGGTGGGTTTGCGTCTGGACAGCTTTAATGCTATTTCTTCTTGCA
ATATTCAATGCTTGCACCATCATCTCTAGGTTTACAAGGGTTGCAGGGGAACTCTTTGGC
ATGTTGATTGCAGTTCTTTTTGTTCAAGAGGCTATTAAGGGAGTAGTGAGCGAATTTAAT
ATTCCCAAAGATGAAGATCCTAAATCAGTTAAGTATGAATTCCAGTGGCTTTATACAAAT
GGACTGCTTGGGATCATTTTCTCTTTTGGTGTACTTTTTACTTCCCTAAAGAGCAGAAGA
GCAAGGTCATGGCGATATAGCACTGGATGGGTCCGAGAGTTCATTGCAGATTATGGGGTT
CCTCTTATGGTCCTGTTGTGGACAGCATTATCTTACAGTATACCTAAGAAAGTTCCTTCT
GGAGTTCCCAGGAGGCTCTTTTGTCGTGCTCCCTGGGATTCTGATTCAAATTACCAATGG
GCTGTAGTACAGGATATGGGAAAGGTCCCATTGGGGTACATCTTTGCTGCCTTGATACCA
GCTGTGATGATAGCGGGCTTATACTTTTTCGACCACAGTGTAGCTTCACAGATGGCACAG
CAGAAGGAGTTCAATCTCAAAAACCCTTCTGCTTACCATTATGACCTGTTCTTGCTCGGA
GTTATGACTCTGCTTTGTGGGTTGCTTGGATTTCCTCCTTCAAATGGAGTCCTCCCACAA
TCCCCCATGCACACTAAGAGTCTTGCAGTCCTCAAGAAGCTGTTGATTCGAAAAAAGATG
GTTAAAAGCGCCAAGGAATGTATAAAAGAGCAAGCAAGCAACTCAGAAATGTATGGAAGG
ATGCAAGCTGTGTTCATAGAAATGGACACAGCTCCTAATGATGTTTCAGTAGACAAAGAG
TTGAAGGACTTGAAGGAGGCTGTAATGAATAGCGAAGATGGAGGAGACACAAAAGGCAAA
TTCGATCCTGAGAAGCACATCGATCCTTACTTGCCTGTTCGAGTTAATGAGCAAAGAGTG
ACCAACCTGTTGCAGTCCCTCCTTGTAGGCATATCTGTATGTGCTATCCCTGTCATCAAG
GCTATACCTACCTCAGTTCTTTGGGGATACTTTGCCTACATGGCCGTTGATAGCCTCCCT
GGGAATCAGTTCTGGGAAAGGATCTTGCTGCTCTTTATCACCCCTGGCCGCCGTTACAAA
GTCCTGGAAGGGGTTCATGCTTCATTTGTGGAAACAGTACCATTCAAGTACATTGCGACA
TTCACGCTCTTCCAACTCGTATATCTTATGATTTGCTTTGGAATAACATGGATACCTATA
GCTGGAATACTGTTCCCAGTGCCATTCTTTCTTCTCATAAGCATAAGACAGTACATTCTG
CCCAAGCTGTTCCAAACTCAGCATCTTCGAGAACTGGATGCCGCTGAGTACGAGGAAATT
GCTGGAGCCCCACAGCGCAGCCGCAGCATCTCAATCAGGGAGAGAGAAGAAGCTGTTCCT
GGAAGTCAAGGGACTGACGAAGATTTTTTTGATGCGGAGATATTGGATGAAATGACTACC
AATAGAGGGGAGTTGAAGCTTAGAACTGTAAGCTTCAATGAAGATAGATTCTTTCAGGTG
CACCCAGAAGACACCAGTCGGACGCAGTGA
>VIT_01s0011g05110.t01 cds chromosome:IGGP_12x:1:4747830:4748946:1 gene:VIT_01s0011g05110 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTCTAACTGGTAAGTTGGAGACTGAAACAGAGATCAAAGCACCTGCTGATAAGTTC
TTTAAAATCTTCAGGAGCCAAGCACACCACCTTCCTAATATCTGCTCCGATAAAATACAC
AAAATCGAGGTACATGAAGGTGACTGGGAGACTCAGGGCTCCGTCAAGCATTGGAGTTTG
ACCGTTGGAGAGAATTCTGAGAGTATTAAAGAGACTGTGGATCAAATAGATGAAGAAAAC
AGGTCCATCACATTCAAGGTTTTGGATGGGGAGGTGCTGAAAGACTACAAGAGCTACAAG
TTCACCACACAAGCGATACCAAAGGGGGAGGGCTGCTTGGTGATATGGACCATCGAATAT
GAGAAGGCAAGTGAGGGTGGCCCAGATCCCCATAACTGCCTAGAGTTTTCAGTTAATATC
ACCAAAGATATCGAAAGTCACCTTCTCAATGCGTAA
>VIT_05s0029g01200.t01 cds chromosome:IGGP_12x:5:17060036:17088913:1 gene:VIT_05s0029g01200 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGACGGATCCCTCAAACGACGCCGCACATGGTCGGACGGCGCCAAAACTTCCGATCCAA
GGGAAGCGCAACATCCTCATTACCAGCGCGTTGCCTTACGTCAACAACGTCCCTCATCTC
GGGAACATCATCGGCTGTGTATTGAGTGCAGATGTCTTTGCTCGATATTGTCGTCTTCGT
GGTTATAATGCAATATACATATGTGGAACTGATGAGTATGGGACAGCAACAGAAACCAAA
GCCATGGAGGAGAAATGCACCCCTCAGCAGATCTGTGACAAATATCATGCAATTCATAAG
GAAGTTTATAAATGGTTCAATATAAGTTTTGATGAATTTGGGCGTACATCAAGCCCACAG
CAGACCGAAGTTTGCCAAGCAATTTTCAAGAAATTGATGGAGAACAATTGGCTTTCTGAA
AACGTTATGCAGCAGCTTTATTGTGATAAATGCCAAAAGTTCTTAGCTGACCGGCTTGTG
GAAGGCATTTGCCCTACTCAAGATTGTAATTATGATTCTGCACGAGGAGATCAGTGTGAA
AAGTGTGGAAAGCTTTTGAATCCAATTGAACTAAAAGATCCTAGATGCAAGTTCTGTCAT
TCAACTCCACACATCCGTGATACAAACCACTTGTTTCTTGAGCTCCCTTTGCTGAAGGAC
AAACTGGAAGAATATATAAATTTAATGTCTGTGGCTGGATCTTGGAGCCAGAATGCTATT
CAAGCTACACATGCTTGGCTTAAAGAAGGACTGAAACCACGATGTATTACAAGAGATCTA
AAATGGGGGGTTCCTGTTCCACATGAGAAATTCAAGGATAAGGTTTTCTATGTCTGGTTT
GATGCGCCGATTGGATATGTCTCAATTACTTCATGCTATACACCCGATTGGGAGAAGTGG
TGGAAGAATCCTGAAAATGTTGAGCTGTATCAGTTTATGGGCAAGGATAATGTGCCATTC
CATACTGTGATGTTTCCGTCCACACTACTTGGAACTAGTGAAAACTGGACTTTGATGAAG
ACTATCAGTGTCACTGAATACTTGAACTATGAAGCAGGGAAATTCTCAAAGAGTAAGGGA
GTGGGTGTTTTTGGAAATGATGCAAAAGATACAAATATTCCAGTAGAAGTGTGGAGATAT
TACTTGCTAACTAATAGGCCAGAGGTATCTGACACGCTATTTACATGGGTGGACTTGCAA
GCAAAACTCAACAGTGAATTGCTGAATAATTTAGGCAATTTTATAAACCGAGTCTTGAGC
TTCATTGCTAAACCTGCAGGTCTAGGATATGGTTCTGTTATTCCTGATGCTCCGGGTGCA
GAATTGCATCAATTAACAAAAACATTAGCGGAAAAAGTTGGTAGATTCGTGGAACAATAT
GTGGAAGCCATGGAGAAGGTTAAACTAAAGCAAGGACTTAAAACTGCAATGAGCATTTCT
AGCGAGGGAAATGCATATCTGCAAGAGAGTCAATTCTGGAAGCTTTACAAGGAAGACCAG
CCTTCTTGTTCAATTGTTGTGAAAACCTCATTGGGTCTTGTGCATCTTCTTGCATGTTTG
TTAGAACCTTTTATGCCTTCCTTCTCTCTTGAGGTACTCAAGCAGCTTAATATGCCTCCT
GAAACATCATTTTTGCTCTGTGATGAAAAAGGAGACATTGAAAGGGCAAAGAGACCTTGG
GAGATTGTACCTGCTGGCCACAGAATTGGGACTCCAGAGCCATTGTTCAAGGAATTGAAA
GATGAAGATGTGGAGTTCTTCAGGGAGAAGTTTGCTGGAAGTCAAGCTGATAGGATTGTG
AAGGCAGAAGCTGAAGCAAAGAAAATTGCCGAGCAACTGAAAAAAACAAAAGTTTCAGAT
GGGAATGGAAAGAAACAACGACCAACAAAATCTGCCGAAGCTAAACCTAAGGCTGCAGCA
GAGGCAGAAATTTCTATTAGTAGACTTGATATCCGTGTTGGTCTTATAACGAAAGTTCAG
AAGCATCCTGATGCTGATTCCCTATATGTTGAAGAGATTGATGTGGGTGAAGGGTCGACT
CGGACTGTGGTTAGTGGCCTTGTCAAGTTTATACCACTTGAAGAGATGCAGAACCGCAAG
GTATGTGTTCTTTGCAACCTGAAGCCAGCCACAATGCGGGGTATTAAATCTCAAGCAATG
GTCCTTGCTGCTTCCAACAGTGAGCATACCAAGGTTGAATTGGTTGAACCACCCCAGTCT
GCCGCTGTTGGAGAACGAGTGACATTTCCTGGGTTTGAGGGTGAACCTGATGATGTTCTC
AACCCTAAGAAGAAGGTCTGGGAGACACTGCAAGTGGATCTTCGCACTGACTCGGAACTG
GTGGCTCTCTACAAAGATGTGCCCTTCACTACAACAGCTGGTATTTGCAAGGTTTCCTCA
ATTTGTGATGGATCAATACGGTAG
>VIT_02s0087g00680.t01 cds chromosome:IGGP_12x:2:18163348:18168033:-1 gene:VIT_02s0087g00680 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTACTGAACCTTCCGCCGATTCCTACGTAGGCAGCTTCATCACTTTGATATCCAAG
TGCGAGATTCGCTACGAGGGCGTCCTCTATTTCCTCAACGCCCAAGACTCCACCATCGGC
TTGAAAAACGTAAGGTCTTATGGGACAGAGGGACGAAAGAAAGATGGCACACAAATTCCT
CCAAGTGATAAAGTGTATGAATTCATTCTTTTCCGGGGAAGTGACATTAAGCAGTTGAAG
GGGTATGGAAGGTAG
>VIT_10s0092g00710.t01 cds chromosome:IGGP_12x:10:12545885:12562424:1 gene:VIT_10s0092g00710 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAAGTTGTGTTCCATCTCCTTCTTCCTGCTCCTCTTGTTTCAGAAATCCCTGGCTAAA
AATGCTACTCTCGACTCATCTGAAGTGGAAGCATTGAATTTTCTGTTCAACAAATGGAAC
ATGACGTCAACAGAATTTTGGAACATGAGTGGGGATCCATGCAGTGGACCTCCTATTAAT
CAGAGTCAATACGATGATATTTATTATAGACAAGCTATCAAATGTAATTGCACTTACAAT
GACAACACCACCTGCCATATCACACATCTGAAAGTACTAAATTTGAACAAAACAGGATTA
ATTCCAGAGGAGCTCACAGCACTAACTTTTCTTAGTGATTTGAGGCTTAATAAAAATTAC
TTCACTGGGCCTTTGCCTTTATTTATTGCAAATTTATCTCAAATGCAGTTCATTGATGTT
GGCCACAATGCATTATCTGGGACCATTCCTAAGGAGCTTGGAAATCTTAAAGAACTACAA
ATGTTGGCTATTGGTTCAAATAACTTCTCTGGAACTCTCCCTCCAGAACTTGGAAATCTA
CCCAAACTTGAGCTGATTTTCATAGACAGCAGTGGAGTGGGTGGTGAGATCCCCTCAACG
TTTGTTAAACTTAAAAACATGCGAGAAATGTTTTTATCAGACACTCCACTCACAGGAAAG
ATACCAGACTTCATAGGGAACTGGACAAAGCTCAAACGACTGAGAATTCAAGGGAACTCT
TTTGAAGGTCCAATACCATCCACTTTCTCTCAATTGATCTCAATGGAATCTCTGAGAATA
AGTGATCTTGCCAATGTGAGCTCATCTCTTGATTTCATCAAGGATATGAAGAATTTAACA
GACTTAGTTCTAAGGAATGCATTGCTCTCTGGTGGTATTCCATCTGATATTGAAGAATAC
CGCAGTTTAGAAACACTGGATTTGAGTTTCAACAACTTAACAGGAGGAATTCCAAATGCT
TTGTTCAACATGAACAATCTCACTGCCTTGTTTCTTGGAAACAATAGCTTCTATGGTTCT
CTTCCTGACAAAAAAAGTGATAAGCTTCAAACCATAGATTTGTCATACAATGAGATATCA
GGAGGTTTTCCTACATGGATTGATCCAACTTTACAATTGAATTTAGTGGCTAATAACTTT
GTATTTGACAACACAAACAACAGTATTTTTGAAGGACTGAACTGTCTTCAGAGGAACTTT
CCATGCAACACTCCACGCTATACCAATGTCTCAATCAAGTGTGGTGGACAAGAGGTGACA
ACGCCTGATGGCATGGTATATGAGTCTGATAATTCAATTCTTGGCACTGCATCAACATCA
TATTATGTAAGCAGATCAGAGAAATGGGCTGTTAGCAATGTGGGTCTGTATGTTGACAGA
ATTGCAAATACCTCATCACTAGTTAATGGCACTGACACCCCAGAGCTTTTCAAAACTTCA
AGGATATCACCGGGTTCACTTAGATACTATGGCCTGGGTCTCAAGAATGGACCTTATGTT
GTAAGTTTGCAATTCGCAGAAATGTTACTTAAGGATCCGAGCACACGAACTTGGGAGAGT
ACAGGAAGGCGTGTTTTTGATATATATATTCAGGGAGCACTTAAAGAGAAGGACTTTGAC
ATATCAAAAGAGGCAGGTGGGGTCCAGAGAGCAATTGTGAAAAAATTCAATACTACTGTG
TCGAAGAACTATCTTGAAATTCATCTGCTTTGGGCTGGTAAGGGTACTTGCTGCATCCCA
TTTGAAGGTTATTATGGACCATCCATTTCGGCTCTCAGTGTTGTTTCAGCTTTGGAAAGA
ATGCCACCTCCTCCATCAGAGACAAGCAACACTGGGTTAATTGCTGGCATTGCAGTCACT
GCTGGTATTCTATGCTTTATACTCGTATGTGCAGTTTTTTACATCAAAAGGAGAGGGTCT
AATTCCAATGAAGAGATAGAGCTTCTTGAAATAGGCCCCATATCGAACACCTTTAGTTAT
GCGGAGTTGCGAACTGCAACAGAAAACTTCAATCCTACAAATAAGCTAGGGGAGGGTGGA
TTTGGAGCTGTTTTCAAGGGCACTCTTCTTGATGGGAGGGTAGTAGCTGTGAAGGATCTT
ATGGTAGCATCTCAACAAGGGAAGAGTCAATTTATAGCAGAGATTGCTACCATATCTGCA
GTGCAGCATCGCAACCTCGTGAAGTTGCATGGATTCTGCATCAAAGAAAATAAACGGCTC
CTAGTTTATGAGTATCTTGAAAACAAGAGCCTCGATCGTGCTCTCTTTGGGAAAAGTGAT
TTACATCTTGATTGGCCAACCCGCTTTAATATATGTTTGGGAACAGCGAGAGGGTTAGCT
TATCTTCATGAGGAATCAAGGGCAAGAATTGTACACCGGGATGTCAAGGCCAGCAATATT
TTGCTTGATGCAGAACTCTGCCCCAAGATATCAGATTTTGGATTGGCAAAGCTGTATGAT
GACAAGAAAACCCACATCAGTACCCGGGTTGCAGGCACCATTGGCTATCTGGCACCAGAG
TATGCAATGCGCGGGCATCTGACAGAGAAGGCTGATGTTTTTGGATTTGGTGTAGTGGCT
CTAGAGATCCTCAGCGGGAGACCAAACTCCGACAACAGCTTGGATGCAAGAAAGATGTAT
CTTCTTGAATGGGCATGGACTTTACACGAAAACAACCAAAGTATGGATTTAGTTGATCCA
ACATTAACAGAATTTGATGAAAATGAAGTCAGTCGAGTCGTAAGAGTGGCTCTCTTGTGC
ACCCAGGGATCACCAATGTTGCGGCCAGCCATGTCACGGGTCGTGGCAATGCTTGCTGGA
GGCGTTGAAATAAGTGCAGTTACATCAAAACCCAGTTATTTAACAGATTGGGATTTCAAT
GATATTACAAGCAGCTTTTTGAGCGAAAATACTCGAACATCTACTGCTTCAACAAGTATG
ACTGACCAACTGCCTTCCCCTATATATCACACTGAACCGATGCTCCTTGGAGTCATTGGA
GAAGGGAGGTAA
>VIT_14s0066g00990.t01 cds chromosome:IGGP_12x:14:27434348:27436713:1 gene:VIT_14s0066g00990 gene_biotype:protein_coding transcript_biotype:protein_coding description:tRNA (adenine(58)-N(1))-methyltransferase [Source:UniProtKB/TrEMBL;Acc:F6HUY1]
ATGTGTTACAAATTTTGCATTTGGCAGAGAATTGCTCATATTGGCCGAGTATTCAACAAA
TACAAGCTTTTAAGGATGTTGCCTATTGATGCTGAAAAAAGGATCTCTTTCAAGCGTTGC
ATTAGTGATGGAGATTTGGTTATAGTGTATGAGAGGCATGACAATATGAAGGCTGTTAAA
GTGTGTGAGGGTTCTACACTACAGAACCGCTTTGGTGTATTCAAACATTCGGACTGGATT
GGGAAGCCCTTTGGGTCCAAGGTGTTGAGCAACAAGGGTGGATTTGTTTACTTGTTAGCT
CCAACTCCTGAGTTATGGACTCTTGTTTTAAGCCACAGGACCCAGATTCTCTATATTGCG
GACATTAGCCTTGTGATTATGTACTTGGAAATAATTCCTGGTTGTTTGGTTCTTGAGTCG
GGCACTGGAAGTGGATCTTTGACTACTTCACTTGCAAGGGCTGTAGCTCCTAATGGGCAT
GTCTATACATTTGATTTTCATGAACAAAGGGCTGCTTCAGCTAGGGAGGATTTTGAGAAA
ATAGGATTGAGTAGCTTCGTCACTGTGGGAGTGAGGGACATTCAGGGTGAGGGATTTCCT
GATGAATTTTCTGGGCTGGCGGATTCCGTCTTCCTAGACCTACCACAACCTTGGTTGGCC
ATTCCTTCCGCTGGAAAAATGTTGAAAGAAGATGGGGTATTGTGCTCTTTTTCACCCTGC
ATTGAGCAAGTACAACGCTCATCAGAAACTCTTACTTCAAATTTTACAGACATAAGGACA
TTTGAAGTGCTTCTTCGCACATATGAAGTGCGAGAAGGAAAAATGGATTGCAGCCAGGGT
AATGAAGGCGGTTTTCTTGGTCCTCGCCCAGGAAAGAGGAGGCAGCGCTCAGGTGAAGCA
AGCAATGAGGGTGAGATCCCCACATCCACCACAGTCATGGCTAGGCCAGCAGCTGAGGCC
AGAGGACACACAGGCTTTTTGACATTTGCAAGGCTAAAGTGTCTCTCATTAAGAGGTGGC
ACCTCTCCTCTCCCCCCCCTCCATTTATGA
>VIT_18s0122g00800.t01 cds chromosome:IGGP_12x:18:589627:592083:1 gene:VIT_18s0122g00800 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTTGGCTATGGAGGAAGTTCTGTGTGAGCTGAGCAGAGAGGACATAAATGAGCAAGGT
TTGCCTCCTGGGTTTAGGTTCCACCCCACTGATGAAGAACTGATAACCTTTTATCTGGCT
TCGAAGGTGTTTAATGGGAGTTTCTGTGGTGTGGAGATTGCTGAGGTTGACCTCAACAGA
TGCGAGCCTTGGGAGCTTCCAGATGTAGCAAAGATGGGAGAAAGAGAGTGGTATTTCTTC
AGTTTAAGGGACAGAAAGTACCCAACAGGGTTGAGAACAAACAGGGCAACTGGAGCTGGG
TATTGGAAAGCAACAGGAAAAGATAGAGAAGTGCACAGCGCCTCAAGCGGAGCCTTACTT
GGGATGAAGAAAACCCTAGTTTTCTACAAGGGAAGAGCACCCAGAGGCGAGAAAACCAAG
TGGGTTATGCACGAGTACCGCCTCGACGGTGACTTCTCCTACCGCCACACGTGCAAGGAG
GAATGGGTGATTTGCAGAATATTTCACAAAACTGGGGAGAAGAAGAACCCGATGTTCCAA
GGGCAGGCGTATCTGCTGGGGAGTTCAGCAGCAGCAGCAGTAGCCACTAGTTCGTTGCCT
GCGTTGCTGGAAAGCCAAACAACACTGTTGGAGAGTCAATCTCACCCCACAATGCAAGGT
GGTATCTCAAGCTCTTTTCTGGTTCATCACCACCATGACCAAGAAAGCAATGAGCTGAAG
GCCCTGATAAACCCAGTTTTGTCCCAGTCTCCTTTGGCGTTTCCAATAAATAGTGGGTTC
CAGAGCTGCTCCTTTTCAACAACTCCCACCACCAACATCCCAAACACGAACAACATTAAT
AGCACCACCGGCAACAACAACCCATCAACATCCATCCTCTTCAAGTCCCTCCTCTCACAT
CAGGAATGCAGTTTGAAGGAACAGACCACTATTCCGAAACAGTGCAAGACAGAGGCCAAC
TTTTCCCATTTCCAACTACCTGATGCTAACATGCACTGGGTGGACAGGATGAACTCGAAC
CTGCATCAAAATCCCTTGTTTTTTGAGATGGATTATTGTAGCGGTGGTGTATTGGGGTTC
ACAGCAGCAACTGCTACTGGTGGTGGTGGTGGTGGTGGTGGTGCTTCTGCTGCTGCTACT
TCCGCTGCTGTTGCTTCTGCTGCAGAAACTGTTCATGAGATGTCCACTTCAATTGCTTTC
AACAGGGCCGGCTTTCAGATGATGGTAGATTTTCCCATCAGAGTCCCCGGAGGAGAATCT
TGGCCATTGGATCCTTGA
>VIT_03s0097g00330.t01 cds chromosome:IGGP_12x:3:10318929:10319612:1 gene:VIT_03s0097g00330 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAAAACCTTCTCCAAGCTTGATGATATAAGGAAAGATGTGTTCCAGTTCTCCATTAAT
TGGCCATCTTTGGTTTCCACCCAAGATAATGGGTGGGATTTTGGAGTCCATGTGATTAAA
CATATGCAGACATTCAAAAATGGTGATCCCATCGAGGCTTTTAGCATATCAAGTTTCATT
CAAATATGTTGGCAAATAGCAATTAATTTAGTGCTACACGAGGGAAACAAAGAAAAACAA
ACGATTTAG
>VIT_12s0028g03190.t01 cds chromosome:IGGP_12x:12:3955215:3957441:-1 gene:VIT_12s0028g03190 gene_biotype:protein_coding transcript_biotype:protein_coding description:Reticulon-like protein [Source:UniProtKB/TrEMBL;Acc:F6H5G3]
ATGGACTCTCCACCTCTCTCTCACCAATCTGAGCCTCGATCTGGGACTAAATCAGCCTCC
CGCCCCGCTCGGATTGGGGAAATCGATCAAGGAGGCCAAGAAAGGCCTAAAATCTCTCTC
GATCTCAGCACACTGTCACCAAGTAAAACTCTGTCTCCTTCTAATCCTCTTCCTCTCCAC
GAACTCTTACTTCTTTCGCCTTCGCCGCTTCGAAGATCGAGAACCCGGCTCACTGAAAGG
ATAGACATGGGGGAAGAGCCTCTAGAGGCCACTGGATCTCGAAGGCGGTGCAAGAGCAGA
ATTAGCCAGATGGGGGTATTGGGGTGTGCTTCTCCGAGGAATACCCGAAGGCCTCGGAGG
AGGGTGGAGCAAGATGTGAGAGAAGACAAGGATTTTGGTATGGCGGAGGAGATGGGAAAG
TTGAGGAAAAGGCGGCATAGCGGGCGGTCGAGGAAGGAGAAGTTGAGTTTGGTTCCCTCT
GTTCCTTCTTCAAGTTCATCTCCAAAAGCCAATGAAGATGACCTCAGTAACCTACACAGA
ATCGGGCAGCTAGTCACTGATTTGATAATGTGGAAAGATGCTTCCAAATCAAGCTTTTGG
TTCGGTTTTGGTTCTGTTTGCTTCCTCTCCTCCTGTTTTACCAGAGGAATAAGCTTTAGT
ATTTTCTCGGCAATCTCCCAGCTGGGACTTTTATTTCTCGGTTTGTCGTTCTTCTCAAAC
TCACTGTACCAAAGGGATAATGTTGAAAAGAGACGCGAGTTTAAGCTCAAGGAAGACGAC
ATTTTGCGAGTGGCCAGAGCTATACTTCCAGCTACAAATCTTGCCATTTCAAAGACAATA
CAACTTTTTTCAGGGGAACCATCCATGACCCTCAAGGTTGCCCCATTCTTCCTTGTGGGA
GCTGAGTATGGCCATCTTCTAACAGTAAGGAGACTCTGTGCACTCGGGTTTTTCATCAGC
TTCACCATCCCAAAGCTTTACTCTTGCTACTCTGCTCAGATAAACACGCGAGTTGAGTAC
TTGAAAGGGTGGGTGGTGGAAGCATGGGGAGCCTGCTCTCACAAGAAGATAGTTGCAGCA
TCAGCAGTCACAGTATTTTGGAATCTATCTGCTATAAAAACACGGATTTTTGCAGCATTT
ATAGCTCTGGTAATACTCCGATATCATCGGCAGCAATCAGAAGCAAACATGGAAGAAAGG
GAAGCAGAAGGAGAGGAAAAAGAGCAGCAGCAGCAGCCACAACTCACAATGGTTGTGGGA
GGAGGAGGAGGAGGAGGAGGAGGAGGAGGATCCCAGAAGTAG
>VIT_06s0004g05560.t01 cds chromosome:IGGP_12x:6:6383337:6387974:1 gene:VIT_06s0004g05560 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAGGAAGGAAGACACTGTGAAGCTGATCAGCGCAGAGGGCTTCGAATTCGTGATCGAC
AAGAGGGCTGCCATGGTTTCTCAGACCATCCGGAACATGCTCACTTCTCCCGGGAGCTTT
GCGGAAAGGGAACATGGAGAAGTCACTTTCCCGGAGATAAGCACCACCATTCTTGAGAAG
ATCTGCCAGTATTTCTACTGGTCTCTTCAATTTGCGAGTGGGAAGGATACTGAGTTTCCG
ATTGAACCTGAGCTTACTCTGGAGCTGATGATGGCTGCTAACTATCTTCATACTTGA
>VIT_12s0121g00410.t01 cds chromosome:IGGP_12x:12:12539336:12539871:-1 gene:VIT_12s0121g00410 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCACTTAGATGTAGCTGATTCAACAACCTTGCCGTATGGATGGAATAGATATGCTCAG
TTTGGCTTGGCCGTGATCAATCAAATTCATGACAAGTTCACAATTAGGAAAGATGCACAA
CACCAGCTCAATGCACGTGAAAGTGATTGGGGACTCACTTCATTCATACCTCTTGGTGAA
CTGTATGACCTTGCAAGGGGTTATTTTGTGAATGATACATGCATAGTTGAAGCTGATGTT
ACTGTCTGTAGGGTCATTGATTACTAG
>VIT_03s0038g02080.t01 cds chromosome:IGGP_12x:3:1436852:1438855:1 gene:VIT_03s0038g02080 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCCCTCTCTCTCCTCTCCAAATCTCAATTTCTCACCGTTCCGTACAAATCCCAGGAAG
CCCAGACGCCGTCCCTGTCTCGTAGAAGCCATCGTCAAGCTCTGCAAGAAAAACAAGCTA
AACGAAGCCGTTTCGTCTCTGGAAAACCTCGCACGGCGAGGCCTGCGCCTCGATTCTCGA
ACACTTGCGTCCCTCTTGCAACACTGCGCGGATTCCAGGGCTCTCAGAGAAGGCAAAAGG
GTCCACCTCCATTTGAAGCTTACGGGTCTGAAGAGGCCCGGTACATTTTTATCTAATCAT
TTAATTAATATGTATGCGAAATGTGGCAAAGAGGTTGAAGCTCGTAAAGTGTTTGATAAA
ATGTCTGCTAGAAATCTGTATTCTTGGAACAATATGCTTTCTGGGTATGCTAAATTGGGA
ATGATAAAGCCAGCTAGGAAGTTGTTTGACAAAATGCCTGAGAAGGATGTTGTGTCATGG
AATACTATGGTAATCGCCCATGCTCAGTGTGGTTATTGGGATGAAGCATTGAGGTTTTAC
AGTGAGTTTCGGCAGTTGGGTATTCAGTGTAACGGGTTTAGTTTCGCTGGCGTCTTGACT
GTTTGTGTAAAGTTGAAGGAAGTAGGGCTTACTAGGCAGGTTCATGGGCAGATTCTGGTA
GCTGGGTTTTTGTCTAATGTTGTGCTTTCAAGCTCAGTTCTCGATGCTTATGTGAAATGC
GGGTTGATGGGTGATGCGAGGAAGTTGTTTGATGAGATGTCTGCTAGAGACGTTCTTGCA
TGGACTACCATGGTTTCAGGATATGCCAAATGGGGTGATATGAAATCAGCTAATGAATTA
TTTGTTGAGATGCCTGAGAAGAATCCAGTCTCATGGACTGCTTTGATTTCTGGGTATGCC
AGAAATGGTATGGGGCACAAGGCCCTTGAATTGTTCACAAAGATGATGCTGTTTCATGTT
AGACCTGATCAATTCACGTTCAGTAGTTGCCTTTGTGCTTGTGCTAGTATAGCTTCACTT
AAGCATGGTAAACAAATTCATGCCTATTTGTTACGAATTAATTTCCAACCTAATACCATA
GTTGTTAGCGCACTCATCGACATGTACTCAAAATGTGGAAGCTTGGGAATTGGAAGGAAG
GTTTTTGATCTTATGGGTAATAAGCTAGATGTTGTATTGTGGAACACGATTATATCTGCT
TTGGCACAGCATGGTTGTGGAGAAGAGGCAATACAGATGCTTGATGACATGGTAAGATCA
GGAGCAAAGCCAGATAAAATTACCTTTGTCGTCATTCTTAATGCATGTAGTCATTCAGGC
CTTGTGCAGCAAGGGCTTAATTTCTTTGAGTCCATGTCTTGTGATTATGGCATTGTTCCC
AGTCAGGAACATTATGCATGCTTAATTGATCTGTTGGGTCGAGCTGGATGTTTTGAGGAG
GTAATGGACCAGCTTGAGAAGATGCCTTATAAGCCTGATGATCGTGTTTGGAATGCCTTA
CTAGGTGTTTGTAGGATTCATGGACATATAGAGTTGGGAAGAAAAGCAGCTGAACGCCTT
ATTGAGTTGGAACCTCAATCCTCCACAGCCTATGTATTACTTTCAAGTATATATGCTGTA
CTTGGGAGGTGGGAGTCAGTACAGAAGGTTAGACAGCTTATGAATGAGAGACAGGTCAAG
AAAGAGCGAGCCATTAGTTGGCTTGAAATTGAAAATAAGGTGCATAGTTTTAGTGTATCA
GATAGTTCACACCCTCTGAAAGAACAAATATACTCGGTTTTGGAACAGTTAGCTGGCCAG
ATGGAAGAAGATGCTTCATTATTTATCGCTCAAAGGTAA
>VIT_11s0016g00890.t01 cds chromosome:IGGP_12x:11:785772:786464:1 gene:VIT_11s0016g00890 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCGATTTCAGGGTCGGAGTCTCAACTGCCTCCTCTGAAAGTGGTGGTTCCGTCGACG
GAAGCGGAGTTCGTGAAATGCGACTCGTGTGGATTCACGGAGGAATGCACGCCGGAGTAC
ATATCCCGTGTTCGTGAGAAGTACCACGGGCTGTGGATATGCGGACTCTGCGTGGAGGCG
GTGAAGGACGAAGTCATGAGATCAGAGAGGGTCATCACCACCGAGGAGGCGCTGAACCGC
CACATCAGTTTCTGCAAAGACTTCAGATCTTTCAGTCCACCAAATGCAACGGAGCATCCT
ATCTCCGCCATAGGCCGCCTTTTCCGCCGGAGCTTGGACTCGCCGAGATCTCTCCCGTCC
ACTCCCTCTGGCGAAGTAGATGTACCGCCGGAAAGCTGTTTCATTGAGTGA
>VIT_12s0059g01600.t01 cds chromosome:IGGP_12x:12:6519198:6524165:1 gene:VIT_12s0059g01600 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTGCTAAAGATAGTGAACTAAGGGTCTTCATAGTTTCAGGAGAGGTTTCTGGAGAC
ACAATAGGTTCTCGTCTCATGGCTTCTTTAAAAGGGATTTCCCCCTTTCCTATTCGTTTT
GCTGGTGTTGGAGGGCCCATGATGTCCAAGCAAGGATTGAAACCTCTTTTCCCTATGGAA
GATATTGCAGTAATGGGGATCTGGGAGTTGTTGCCTCATCTGAATAAGTTCAGAATGAGA
TTGAAGGAAACAATAGAAGCTGCTTTCCTATTTCAGCCACATGTTGTACTGACAATTGAC
TCCAAGGGGTTCTCCTTCCGTTTCCTGAAGCAGCTAAGGGCTAGATATAGTCAGCAAGGA
TTGGTTAGTCCTGTACACCACCATTTTGTAGCACCATCATTCTGGGCATGGAAAGGCGGT
GAAGCAAGACTAAAAGGGCTGACTGAGTTTGTCGATCATGTCTTTTGTATACTTCCTTAT
GAAGAAGAAGTTTGCAGATCAAATGGGCTGGCTGCTACTTTTGTGGGCCACCCTATACTG
GAAGATGTCTTGGAGTTGAATTTGGAAAAGAATACCCCACAAAGTGAATGGAAGGTGAAA
GGAAATTCTGAAGACTTCCGAAGTAAAAATGGAATAGCTCCAGGAGCCACGGTCATCAGC
TTGCTTCCTGGAAGCAGATTACAAGAAGTAACCCGCATGCTTTCCATCTTCTCCAACACT
GTGGAACTATTAAAACATTCCTTTTCTGAGTTGACAACAATCATTCATGTGGCTCCCAAT
CAGCATGTGAAGGACTACATTAGTAGGACCACTTATAACTGGCCTGTTTCTGTCAAATTG
ATTCCAGGAGGATCTCCACACCTGAAATATGATGCACTCAGTGCAAGCAGGGTTGCATTA
TGCACTTCTGGAACAGTTGCTGTTGAGATGCAGCTGGCACGGCTGCCATGTGTTGTTGCT
TATCGAGCTCATTTCCTAACTGAATGGTTTATTTGTTGGAAAGCAAAGATACCATTCATC
TCAATCCCCAATATTCTATTGGATTCTGCCATTATTCCTGAAGCTCTTCTTCAAGCGTGC
ACACCAGCAAAGCTTGCTTCATTGCTCATGAAATTAACTCTGGATGAAGGCCTTCGAGAA
AAACAAATTGTTGCTGCTGAAAAGGTTTTGTCTCTTTTATCTCCTCCGCAAAAAATCATA
GAGAATCGAATGCCACAAGATTTGAGATGGAAGTCTCCTGACTATACCCCAAGTATGATT
GGAGCATCTACCATACTATACTATGCAAAACCAAGATGA
>VIT_00s0199g00300.t01 cds chromosome:IGGP_12x:Un:11315847:11322463:1 gene:VIT_00s0199g00300 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCCAATCTCTACAGATCCAGAGAAGGTCTAAGCGCGAGACCAGTAGCTAATTCCGAT
GAAATTCAGTTGAGGATCGACCCAGTGCACGCCGACTTGGACGAAGAGATCACGGGTCTC
CACAAGAAAGTTACAATGCTCAAAACAGTAGCTCAAGAGATCGAGTCAGAAGCAAAATTT
CAGAATGACTATATTTCTCAACTGCAAATGGCACTGAGCAAAACCCAAGCGGGATTGAAG
AACAACATGAAGAGGCTGAACAGGGCCATGGCGCAGAAGGGTTCAAATCATGTTTTGCAT
GTGATACTCTTTGGACTAGCTTGTTTCTCTGTGGTGTACCTATGGTCGAAGCACTTACGG
AGGTGA
>VIT_13s0067g03310.t01 cds chromosome:IGGP_12x:13:1823486:1824128:1 gene:VIT_13s0067g03310 gene_biotype:protein_coding transcript_biotype:protein_coding description:Putative uncharacterized protein [Source:UniProtKB/TrEMBL;Acc:F6HC65]
ATGGGTGATGGTTTGATGATACAAGATGGAAGTTCTGTAAAAGCAACATGA
>VIT_12s0028g01960.t01 cds chromosome:IGGP_12x:12:2614557:2619559:1 gene:VIT_12s0028g01960 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAAAAGAAGGTTTTCCTCTTACCTTTTGCTTCAGTGATCCTTTTGTTGCACTATTGG
GTCACTTGCCTTACACTAGCTGTGTCCTTAACCAACTTATCTGATGAGTATGCTCTTCTT
GCCTTGAAAGCCCATATAACTTATGATTCTCAAGGCATTTTAGCAACAAACTGGTCGAGC
ACAACCTCCTACTGTAATTGGTTTGGTGTCTCTTGCAATGCCCACCATGGAAGATTGACA
GCATTGAATCTTTCTAACATGGGTCTTGAAGGAACCATCCCACCACAAGTCAGCAACCTG
TCTTTCCTTGCTTCCCTTGATCTCAGTGATAACTATTTCCATGCCTCTCTTCCCAATGAA
ATAGGTAACTGCAGGCAGCTTCGACAGTTATATTTTTTCAACAATGAACTTACTGGAAGC
ATTCCACAATCCTTGGGTAACTTATCGAAGCTTGAAGAGTCGTATCTTGATAGTAACCAC
TTGACAGGTGATATTCCAGAGGAGATGAGTAATCTTCTCAGCTTGAAGATATTATCATTG
TTCGTCAACAACTTAACAGGTTCCATACCATCTGGCATTTTCAATATATCCCTATCCAAA
CTCGAAGAATTGTATCTTGGGGTTAACAACTTGGCAGGTGGAATTCCAAGAGGGATGGGC
AATCTTCTTAATTTGAAAATGTTGAGCTTGGTTTCAAATAGGCTACAAGGTCCTATCCCG
GAGGAAATCTTCAATATCTCTTCCTTGCAAATGATTGATTTTACAAATAACAGCCTTTCT
GGCAATCTTCCAATAGCTATTTGCAACCACCTTCCAAAACTCCAACAGCTAATTCTTTCC
AGCAATCAGCTCAGTGCCCAACTCCCTCCAAATCTCTCCTTATGTGGGCAGCTTCAAGTG
CTGTCATCACTATCAAAAAATAAATTCACTGGAAGCATACCGATAGAAATTGGGAACTTG
CCCATGCTTGAGGAGATCTATCTTGGAAGGAACAGCTTGACAGGAACCATTCCACCTTCA
TTTGGTAATTTATCAGCATTAAAGGTGCTTGACTTGCAAGAAAACAACATTCAGGGAAAT
ATTCCCAAAGAGTTGGGGTGTCTTCTCAGCTTACAAAACCTGAGTTTGATATCAAATGAC
CTAAGAGGCATTGTACCAGAGGCAATCTTTAACATCTCAAAACTACAGTCAATTTCACTT
GCAGATAATCACCTTTCAGGAAATCTTCCATCAAGTATTGGTGCTTGGCTTCCTAATCTT
CTACAACTTCATATAGGAGGCAATGAATTCAGTGGAGTAATTCCTAGATCTATTTCAAAC
ATTTCAAAACTCATCAGTCTAGATTTATCATATAACTTCTTCACCAGCTATGTGCCAAAA
GATCTAGGCAACTTGAGATCCCTCCAGCATCTGGGCTTTGGGAGTAACTATTTGACTTAT
GAACACTCCACCTCAGAGCTAAGTTTTCTTACTTCTTTGACAAAGTGCAAATCCTTGAGG
AGATTGTGGATACAAGATAATCCCCTAAAAGGTCATTTTCCAAATTCATTTGGGAATCTC
TCTGTGTCTCTTGAAAGTATTGATGCATCCTCTTGCCAAATCAAAGGTGTGATTCCTACA
GAAATTGGTAATTTGTCTAACTTGATGGCACTGAACCTCGGAGATAATGAACTGACAGGA
ATGATCCCAACAACATTGGGACAGCTCCAAAAGCTCCAGCAGTTGATTATTTCTGGAAAT
AGAATACATGGATCCATTCCTAATGATCTATGCCATTCAGAAAACTTGGGTTCCTTGCTT
TTGAGTTCCAATGAACTTTCTGGACCGGTGCCAAGTTGCTTTGGGAATCTTACTGCACTA
CAACAACTCTTTCTTGACTCCAATGCATTAGCTTCCCAAATAACTTCATCACTGTGGAGT
CTCGGAGGTATCTTGTACCTTAACTTGTCTTCAAATTTCCTGAATGGTAATCTACCTCTA
GAAATAGGAAACATGAAGACCATAATAAAGTTGGATCTGTCAAAGAACCAATTTTCAGGT
TATATTCCAAGCAGCGTAGGACAACTCCAGAACTTGGTTGAACTCTCCTTATCGAAAAAT
AACCTGCAAGGCCCAATACCCCTGAAGTTTGGCGATGTTGTAAGCTTGGAGTCCTTGGAT
CTATCTTGGAACAATCTGTCCGGTACCATTCCACAGTCACTAGAAGCCCTCATATATTTG
AAACATCTCAATGTTTCTTTCAACAAACGACAAGGAGAAATTCGTAATGGAGGACCATTT
GTGAACTTCACCGCCAAGTCTTTCATCTCCAATGAAGCACTATGTGGAGCACCACGATTT
CAAGTCATGGCATGCAAGAAAGTCACCACTAGAAAATCAACGAAGGCAAAATCCCTCCTC
TTGAAATGTGTTCTACCGACAATTGCATCGACAATAATTATATTGGCTCTCATTATTTTG
TTGATAAGAAGACAAAAAAGGTTAGATATACCAATTCAAGTTGACTCATCACTCCCCACA
ACATATAGAAAGATTTCACACCAGGAGCTTCTTCATGCAACAAACTACTTTAGTGAAGGC
AATTTGATCGGAAAAGGAAGCATGGGCACAGTATACAAAGGGGTATTATTTGATGGGCTG
ACTGCTGCAATAAAGGTCTTCAATTTAGAATTCCTAGGATCTTTCAAGGGTTTCGAAGCA
GAATGTGAAGTAATGAGAAATATTCGTCATCGGAATCTTATCAAGATAATTAGTAGTTGC
TCAAACCTTGGTTTCAAGGCCTTGGTGCTTGAGTTTATGCCTAATAGGAGCCTTGAGAGG
TGGTTGTACTCTCACAACTATTGTTTAGATCTTATTCAAAGATTAAACATTATGATTGAT
GTAGCCTCTGCATTAGAGTATCTCCATCATGATTATTCAAACCCAGTGGTGCATTGTGAC
TTGAAGCCCAACAATGTTTTGCTAGATGAAGACAGGGTTGCACATGTAGGTGATTTTGGC
ATTGCGAAACTACTGCCAGGAAGTGAATCAAGACAACAAACTAAGACCTTAGGCCCAATT
GGCTATATGGCACCAGAGTATGGTTCAGAAGGAATAGTATCTACGAGTGATGTTTATAGT
AACGGGATTATGCTGTTGGAAGTCTTTGCAAGGAAAAAGCCTACGGATGAAATGTTCGTT
GGGGATCCAACATTGAAGAGTTGGGTGGAGTCATTAGCTAGTACAGTGATGGAGTTCGTG
GACACCAATCTACTGGACAAAGAGGACGAACATTTTGCCATAAAAGAGAACTGTGTCTTA
TGCATCATGGCATTAGCTTTGGAATGCACGGCTGAGTCTCCTGAGGATAGGATCAACATG
AGAGATGTCGTTGCTCGACTCAAGAAGATTAGAATCAAATTGTTGATGTAA
>VIT_07s0197g00250.t01 cds chromosome:IGGP_12x:7:14751604:14755100:-1 gene:VIT_07s0197g00250 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTTTGGAACTTATTGGAGAGACAGTCGTGGAAACACTGATCGGAGAATTGATAAAA
GCGATTTTAGATGAGGGGAAAAAGGCAGCTGAGTTCCAGGCCATCTTCGATCGCCTCCAA
TCCACGCTCATCTCCATAGGTCCAACGATCCAAGAGATTGAAAGGTTAAACAAAGAGTCG
GATCGTTCAAAGGAAACAGAGCAGTTGGTCCAAATGTTGAAAGATGGGAAGGAGCTTATT
CAAAAGTGTTCCAAGGTCACATGGTGGCACTATCATAAGAAGTGGAAGTACAGCAATAAA
CTTCTGGACCTGGATGAGTCTCTTCTTCGTTTCTTTCAGGTGGATATGGCAGTGCAGGGA
TTCAGGGACATCAAGGAGATTAAGTTGGGTCAGAGAGATCCATACCATTTGAAATTGGGT
CCATGCCAGGCTCCTGATCCCCCTCCTCTTACAGTTGGACTGGATATACCCCTGCAAGAG
TTGAAGATGCGGCTGTTTAGGGATGATTCATCGGTGATTGTGGTTTCAGCTCCCGGAGGA
TGTGGGAAGACCACCTTGGCTAAAATGCTTTGTCATGATCATCAAGTTAAAGAAAAATTC
AAGAACAACATCTTCTATGTTACCGTATCAAAAGCGTTCAACCTGAATGCCATTGTACAG
AGTCTATTTCAACATAATGGTCATGGGGTTCGAGTTTTTCAAAATGATGAAGATGCAGTC
AACCAATTGGAACGACTACTGAACCAAATAGCACCAGCTCCTATACTTCTGGTTCTAGAT
GATGTTTGGGGTGGATCAGAATCCCTTCTTGACAATTTTGTGTTTAAAATACCAAATTAC
AAGATTCTGGTTACATCAAGATTTGAATTTCCAAGATTTGGTTCTACCTATAAGTTGCCA
TTGTTGAAGGATGAAGATGCCATGACTCTTTTTCGTAGCTCAGCATTCCAGCAAGATGGG
AGGTCTTATATGCCTGATGAAGACCTTGTGGAAAAGATTGTGAAAGGCTGCAAGGGATTT
CCTCTGGCCCTCAGAGTCGTTGGTAGATCACTATGTGGCCAGCCTGCAGAGGCATGGGAA
AGTAGACTGCTGACATGGTCAGAGGGCCAATCCATTTTCAGTTCAGATAGTGATCTACTT
CTTTGCCTCCAAAGTAGCTTAGATGCCTTGGCTGACAAGGGTATACTGAAGGAGTGTTTT
ATGGACTTGGGCTCATTTCCTGAAGACCAAAAAATTCCTGCCACTGCTCTTATAGATATG
TGGGCAGAACTGTACAAACTCCATACAGGTGGTGTCTTTGCCATTAATAACCTCCAAGAA
CTCTCCTTCAGGAATCTGCTTAGTCTTGTGGATGCAAGGAAAGATGAAAGTGATGTTGAT
GGCTGCTACAATGACACCTATGTCATGCTGCATGATCTTCTCAGAGAGCTAGCTATTTAT
CAAAGCAGCCAGGAACCCATAGAACAGAGGAAAAGACTAATTGTGGACTTATCTGGAGAC
AAAGTTCCTAACTGGTGGACACAAGACAACCAACAACCCTTTGGGGCTCGCCTTTTGTCT
ATCTCCACAGATGAACTGTTCTCCTCAAGCTGGTGCAACATACAAACACCTGAACTGGAG
GTCCTAATACTGAACTTCCAGTCAAAGGAAAACTACACATTACCAGAGTTCATCAAGCAA
ATGGAGAAACTGAAGGTTCTAGTACTAACAAATAATGGCCCCAGCCCTGCCCAACTGATT
AATTTTTCAGTGCTGGGTTCTTTACCCAGTCTAAAGCGAATCAGGTTCGAGCAGGTTCGA
ATTCCTCCCCTTTGCAACACCACAGCAGAATTCAAGAACTTGGAGAAAATATCCTTGGTT
ATGTGTAAAATCAGTGAGGCTCTCAGCAACCGTAGCATTCAGATTTCAAACATGTTTCCA
AATCTTGTGGAGCTCAATATTGATTACTGCAATGACTTGGTGGAATTACTTGAGGGGCTT
TGTGATTTAGTGGAACTAAAGAAGCTTAGCATCAGCAACTGTCCAAAGCTATCTGCTCTA
CCCAAAGGAATAGGGAAGCTGGGAAATTTGGAAGTGCTAAGGCTCCGAGACTGCGTGAAA
CTGTCAGGATTGCCGGACTCAATTGGAAGGCTCCATAAGTTGAGCGTACTTGATATTAGC
GGTTGTCTGCAAATAAAGGAAATACCAAAACAAATGGGAGAGTTATGTAATTTGAGAAAG
ATCCACATGAGAGAGTGCTGGAGCTTGTGCAGGAGCGAGTTGCCAGCATCAGTGATGAAT
CTGGTGGGTTTGAAGAAGGTAATCTGCGACACAGAAACAGCCAAGCTGTGGGAACCTTTT
GAGTACCATCTCAAGAACTTGAGGATATCAGTGCCAGAAGAGAATATCAACTTGAACTGG
CTTTGA
>VIT_17s0000g02120.t01 cds chromosome:IGGP_12x:17:1717228:1718086:-1 gene:VIT_17s0000g02120 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGTTGGATCCAGCGAATGATTTGATTCCTCCTTCTTCTCCCACCATCTCCTCTGTCTCC
TCCTCTGATCTCGACACCGAGTCCACAGGCTCGTTTTTCCATGACAGAAGTACGAGTTTG
GGGACTCTGATGGGCGTGAGCTTCCCGGCCATTACATTTAGGGCTCAGTCGCAGCACCGG
GAGGCTCAGCCGGTGCCCGCCGCGAGTGGCGTGGCCGTGGCTGGCCGCGGCGGTGGAGGG
AGGAAGAGCAGGAAGGTCAAGAAAGCGCTGGGGCTAGTGGCGGAGCGCCGGCGTCGGTGG
TGGAGGCTGTGCCGGGACGACGCAGCGAAGCCGGCCTCGCTGGGTGAGTTTCTGGAGGTC
GAGCGGCGGTTCGGAGATGTGGCGTTTTTCGGCGCGGCGGCGGAGCTCGAAGGCGTGGTG
GCTCAGCCGGAGAACGGTCGGGTGTTGTTTGCCGACGGAAGAGTACTGCCACCGCCGCAG
GCGGAGGAGAGCCCGTCGACGGTAAGTTCTCTTTGTAGATTTCCGGTGTCACTCACTGGC
ATATTTAGTAGCAGCACAGGATAG
>VIT_06s0004g03210.t01 cds chromosome:IGGP_12x:6:3981768:3982524:1 gene:VIT_06s0004g03210 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCAATCCTTAAACCTCCATGGAAGCTATGGTCTTCCCCTCTGTGTTTCAGGGATCACT
CATCGTCACACCGTCTCTGATGAGATGGCAGATCATGACAGAAGAAGGGAGGCCATGAAA
AGGAAAATATCTCAAGCTAGAGAGAGCGTGCACACAAATCAAGAAATGGGTATTGGGAGA
AACTATGGAAGAGAGGTTGAACAGATCAAAGAAGGTGAGGTTGATGAAGATCATGATCAT
TACCGCCCTTGTTTGGCTTGCACAGCTAAAGCTGCATAG
>VIT_16s0100g00610.t01 cds chromosome:IGGP_12x:16:16095996:16099561:1 gene:VIT_16s0100g00610 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAATATTTGGGGTATGTGTTTGTAGGAATAGTGACTCTTTTGCTTGTATGCATTCCA
CATTGGCTTCGCAGTTGGAGGAAGCCCCAGTGCAATGGAAAGCTCCCACCAGGTTCAATG
GGATGGCCAATTCTTGGAGAGACCCTTCAGTTTTCGACTCCTTATACTAACCGCGGTGTC
TCGCCTTTCATCAGAAAGAGAATGGACAGGTATGGGCCATTGTTCCGGACAAAACTGCTG
GGGTGGCCATTTGTTATTTCAGCTGATCCAGACGTGAGCCGCTTCGTCCTCCAACAAGAA
GGGAAATTGTTTCACTGCTGGTACATGGAAAGCTTTGACAATCTCTTCGGCCCACAGAAT
GTGCTTTCATCACAAGGGGCTCTGCACAAGTGCTTAAGAAGCCTGATTTTGAGTCAATTT
GGGTCCGAAAGCCTAAGAACTAGGGTTCTTTCTCAAGTTGAAGAGTTGGTGCTGAAAAAA
CTGCAGTTGTGGTCCAACCATACCTCTGTGGATCTGAAAGAGGGCATTACTTCGATGATG
TTTGATTTTACCGCTAAAATGATTTGCAATTACGATGAGTCGAAGACACCAGAGAAGCTG
AGAGAGAACTATTCTGCTTTTCTCAGTGGTTTGATCTCCTTCCCTCTGAACATTCCTGGA
ACTTCTTACTGGAAATGCCTAAAGGGTCGTGAAAGGGCAAGGAAAACACTAAGGAATAGG
TTGCTTGAGAGGCTAGCATCCCCGGAAAGGGAGCACAAGGATATCATGGATTTTATTATA
CAGGAAATGAAGAAGGATGACACTATCCTAACTGAGGAAATCGCTGTGGATTTACTCTTT
GGGCTTCCTTTTGGTGCTAATGAAACCACTTCCTCTACTCTTATATTAGCCGTTCAATAT
CTTGGTAGTCATCCTTCGGCATTAGCAGAGATAACAAGAGAGCATGAGTCGATTCTAAGG
AACCGAAAACAAAAGGACTCTGGAATCACATGGGAAGAGTATAAATCCATGAGCTTTACC
ATGATGGTTGTCAATGAAACTGTTAGGATGGGAAGTATTCTCCCTTCAATTTTCAGGAAA
GTGGACAAAGATATTGAAATAAAGGGGTACACGATTCCAGCTGGGTGGATGGTTCTGGTC
TCTCCTCCAGCAGCCCATTTCAACCCCAATGTACACAAGGATCCCCATGTCTTCAACCCA
TGGCGATGGCAGGGTCAAGAACCGACTTCAGGTTCGAATGCTTTGATGGGTTTTGGTGGA
GGAATCAAACTTTGTGCGGGAGTTGACTTTGCCAAACTTGAAATCGCCATTTTCCTACAC
CATCTGGTCACAAAATACAGGTGGGAGGTGATCAAGGGAGGAGAAGTTGTTTGGCGGCAG
TCAACTGGACCCATTTTTCCAAACGGTTTTCACGTTCGAATATCTGAGAAAACTAAGTGA
>VIT_14s0068g00250.t01 cds chromosome:IGGP_12x:14:23967557:23970244:-1 gene:VIT_14s0068g00250 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGGGGATTGTAAATCTGTAGCTCCGGGGTTGGAAGGGGAGGAAAACTTGATTGCTGCA
GCACAGCACATAGTGAAGGCGTTGGGGTCTAATAAGAACCTTACTGATGATGTGAGGAAG
ATTTTGGTGGATCTTGGTACCCAGTTGTCGACCATAACCATAGCCGATGAAAACAAGAGT
GAGGGGGTAAATGAAATTGAAGACCGGCTTGTTGCTGCACAGGACAAGGTGATGAGTTGG
GAAGCTGATCAGTGTATGGTATGGGATTCAGGCCCTGAGGAAGCTGCTGAGTATCTGAAG
GCTGTTGAGGAAGTGAGAAAATTGACGGAAGTCTTGGAAAGCTTGTGTTTGAACAAAGAT
AGTGAAGGGGATGAGCTCCTACGGAGAGCTTATGATGTTTTACAGACAGCAATGGCAAGG
CTTGAGGAAGAGTTCAGATACTTGCTTTTTCAGAATCGGCAACCCTTTGAGCCTGAACAC
ATGTCTTTTCGTTCTAATGATGAGGATGTGGTGGACGAGGGCTCAATCATATCTTTTGAG
GATGACCCAGTTGAGGACTCCCTTCAGACTGATAGTATTAGCAGAAGTTCTGAGGACTAC
ATCATTCACTTGGTCCATCCAGAAGTGATTCCTGACCTCAAATCCATAGCAAATTTAATG
TTAAGTTCAAATTATGATCAGGAATGCTCTCAGGCCTATATAAGTGTCCGCAAGGATGCC
TTGGATGAGTGCCTCTCCATTCTTGAAATGGAGAAGTTGAGCATTGAGGATGTCCTTAAG
ATGGAGTGGGCAGGCTTGAATTCCAAGATTAGGAGATGGGTTCGGGCTATGAAGATATTT
GTGCGCGTCTATCTTGCTAGCGAGAAATGGCTAAGTGACCAAGTTTTTGGGGAGGTTGGA
TCAGTTAGTTCAGCTTGTTTTGTGGAGGCATCACGGGCTTCAATTTTTCAGCTGCTGAAT
TTTGGTGAGGCCATAGTTATTGGTCCCCACAAACCAGAAAAATTGATGCGCATACTCGAC
ATGTATGAGGTGCTAGCAGATCTTCTTCCAGATATTGATGGTATATACCAGGAGGATATA
GGTTCTTCTGTTAGAACCGAGTGTCGTGAGGTTCTAGGGGGATTGGGTGACTGTGTGAGG
GCAACCTTTCTTGAATTTGAGAATGCCATTGCATCAAACACATCAACAAATCCTTTTGCA
GGGGGTGGAATCCACCCACTGACTAGGTATGTCATGAACTACATCAAGATTCTTACCGAT
TACAGTAATACCATTAATTTGCTATTCGAGGACCATGACAGAGCAGATCCTGGTTCATTG
TCATCCAACACAAGTCCAGTTACAGAAGAGGAGAACAAAAGTGGAAGCTCTTCTTGCAGT
ACTCCAACGGGTCTCCACTTCCGGGCACTGATTTCAGTTCTTGAATGCAACCTTGAGGAT
AAGTCCAAGTTGTACAGGGATGTTGCTTTACAACACCTGTTCTTGATGAACAACATTCAC
TACATGACTGAAAAGGTTAAGAATTCTGAACTCAGGGATGTTTTTGGGGATGAATGGATT
CGCAAGCATAACTGGAAATTCCAACAGCATGCAATGAACTATGAGAGAGCTTCTTGGAGT
TCAATCTTGCTTTTACTCAAGGAGGAAGGGATTCAGAACTCCAATTCGAATTCTCCATCG
AAAACTGTTTTGAAGGATAGGCTCCGGAGCTTTAATGTTGCTTTTGAGGAGCTCTACAAA
TCCCAGACAGCATGGCTGATCCCAGACAGTCAGCTTCGAGACGAGTTACAAATCTCAACG
TCCCTCAAAGTAGTCCAGGCTTATCGGACATTTGTGGGAAGACATAACCCTCATATCAGT
GACAAGCACATAAAGTACAGTCCTGATGATCTACAGAACTTCCTCTTGGATCTCTTTGAG
GGATCTCCAAAATCACTGCCAAATACCCACAGGAGGTGA
>VIT_00s0222g00080.t01 cds chromosome:IGGP_12x:Un:14415786:14417252:1 gene:VIT_00s0222g00080 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGACTCGTCATTTGTCATTCATATGTAGCGAGTATGATGTATTCAAAAAATTTGAAGTC
CTTAATAAATCGGAGCAATTACGAACATTTGTTGCATTACCCGTCCCTGTAAATAATAAG
ATGAAATGTTACTTAAGTACTGAGGTGCTTCATGGCTTGTTGCCAAAGTTGATACAATTA
AGGGTGCTCTCTTTGAGTGGTTATGAAATAAATGAGTTGCCAAATTCGATTGGTGATTTG
AAACATTTACGGTATCTTAATTTGTCTCATACTAGACTCAAATGGTTACCTGAAGCAGTG
AGTAGTCTCTACAATTTACAATCATTGATATTATGCAATTGTATGGAACTCATTAAGTTG
TCTATTTGCATTATGAATTTAACCAATCTTCGACATCTTGATATTAGTGGTTCAACTATG
TTGGAAGAGATGCCTCCACAAGTTGGAAGCTTGGTAAATTTGCAAACATTGTCTAAGTTT
TTTCTAAGCAAAGATAATGGGTCACGAATAAAAGAATTGAAGAACTTGTTGAATCTCCGA
GGAGAGCTTGCCATTTTAGGGTTGGAAAATGTTTCGGATCCAAGAGATGCAATGTATGTC
AATTTGAAGGAGATACCAAATATTGAAGACTTAATTATGGTATGGAGTGAAGATTCTGGT
AATTCAAGGAATCAAAGTACTGAGATAGAGGTCCTTAAGTGGTTGCAACCTCATCAAAGT
TTGAAAAAACTGGAAATTGCATTTTATGGTGGCTCAAAATTCCCGCATTGGATAGGAGAT
CCATCCTTCTCCAAAATGGTTTGTTTGGAACTTACAAATTGTAAAAATTGCACATCATTG
CCAGCACTTGGGGGTTTACCTTTCCTCAAAGAGTTGGTGATTAAAGGAATGAATCAAGTT
AAAAGCATAGGTGATGGGTTCTATGGGGATACCGCAAACCCTTTTCAGTCTTTGGAATCT
CTAAGATTTGAGAATATGGCAGAATGGAACAATTGGTTAATTCCCAAATTGGGACATGAG
GAAACTGAAGCATTGTTTCCTTGCCTCCATGAGCTTATGATAATAAAATGTCCAAAACTG
ATCAACTTACCTCATGAGTTACCGTCCCTTGTGGTTTTTTTTGTTAAAGAATGCCAAGAA
CTGGAAATGTCAATTCCACGACTTCCACTTCTTACTGAATTAATAGTAGTTGGGTCGTTA
AAAAGTTGGGATGGTGATGTCCCCTCACTTACCCAATTATACATTTGGGGAATTTCGAGG
CTGAGTTGTTTATGGGAAAGGCTTGCACAACGCTTAATGGTCCTTGAAGATCTGGGAATA
AATGAATGTGATGAGTTGGCATGTTTGAGGAAGCCTGGATTTGGACTGGAAAACCTTGGT
GGTCTGCGACGTTTATGGAATAATCAGGGGCTGCCGTGGTCGACAATAAGTTGTGGAGTT
TTGTGCTCAAAACCTCGACTCTCATGA
>VIT_07s0005g00810.t01 cds chromosome:IGGP_12x:7:3439221:3439951:-1 gene:VIT_07s0005g00810 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGCTCTTCCTCACTTCTTCACAATCTCAATGGTTCTCTTCTCACTTGTGGCTATTACC
TCTGCTAGCAGTGGTGGCTACGGCCCCGAACCGGAAGTTGAGAAAGCTGATGAGCCAGAA
TATAACGAAAAACTACTCCCCACCATCATGGGCGTTCAAGGTCTTATTTACTGTAAATCA
GGCCACAAGCCCATGCCCCTTCCAGGAGCTGTGGCAAGGATAACATGCCTGAAAGTTGAT
AAGCACGGATATGAGATGGGTTCATACTCCTTCCTGAGTGGGGCAAGTGACGAGAAGGGT
TACTTCTTTGCAACACTCTACCCATCAGAGGTTGAAGACGACTGCAAGCTCAAAGAGTGC
AAGGCATTCCTCGAAAGCTCTCCACTGGAGACCTGCGATGTTCCAACTGATGATAACAAT
GGGATCAGTGGCTACCCTCTTGATTTTTATCGCGACCTCAGTGCCAAGAAGATGATGTTG
TATTCTGTGAAGCCTTTCTTCTACACCCCTAAGCCTGAACCAATCTCTAATGGTTATTAA
>VIT_14s0171g00130.t01 cds chromosome:IGGP_12x:14:26002602:26007066:1 gene:VIT_14s0171g00130 gene_biotype:protein_coding transcript_biotype:protein_coding description:Ribulose-phosphate 3-epimerase [Source:UniProtKB/TrEMBL;Acc:F6I5K0]
ATGGCGCCGGCGAAGATCGCACCCTCTATGCTCTCCTCCGACTTCGCCAACTTGGCTTCC
GAAGCCCAACGTATGCTCAGTTTTGGCGCCGACTGGCTCCACATGGACATCATGGATGGG
CACTTTGTTCCGAACCTTACTATTGGTGCCCCAGTCATTGAGAGTCTGAGAAAGCACACA
AATGCATATCTGGATTGCCACCTGATGGTCACAAATCCTCTTGATTATGTGGAGCCTCTA
GGAAAAGCTGGTGCTTCAGGTTTCACATTTCATGTTGAGGTATCCAAAGAGAATTGGCAA
GAGCTTGTTGAAAGAATTAGGTCAAAAGGTATGAGGCCAGGTGTGGCCTTGAAGCCTGGA
ACACCCATTGAAGAAGTTTATCCATTGGTTGAAGGTGAAAATCCAGTGGAAATGGTCCTT
GTCATGACTGTGGAACCTGGATTTGGTGGACAAAAATTCATGCCAGAAATGATGGATAAG
GTACGTGCATTGAGAAAGAAGTACCCTTCACTTGATATTGAGGTAGACGGTGGTTTAGGG
CCTTCTACCATTGACATGGCTGCTTCAGCAGGAGCCAATTGCATCGTTGCAGGGAGCTCA
GTATTTGGAGCCCCCAAGCCAGAGCAAGTTATATCTCTTCTGAGAAAAAGCGTGGAGGAA
GCCCAGTGA
>VIT_02s0025g04040.t01 cds chromosome:IGGP_12x:2:3548144:3555599:-1 gene:VIT_02s0025g04040 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGAGATTTGGTTTGAGTTCAGGAGGTCAAAAGCTTAGAAAAGCGAATTTGAAATTTGAA
TACTCATCCTTTTAA
>VIT_08s0007g03100.t01 cds chromosome:IGGP_12x:8:17128377:17132263:1 gene:VIT_08s0007g03100 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGCCTCAAAACTCTGTTCATGGAAGCCCCCCTGGCAGAGCCGTCGGCGGCACCGAGAAC
AGTTGGTGCCGAGCGGTGCTCGGCGGCACTGGCGTAGTTACGGTGGCTCTTCTTCTCTCA
AAACCTCCGGAAGCCTCGCTTCTCCAGAGTGCACTCCACACACTCCAAAATAGGCACGCT
CTTCTTGGCTCGAAGCTTCATTACGGCACCACTACAAACACATTCTCCTTCATCACATCT
CCAATCCCTCCCCTCCAAGTCAAATCATTCAACCTCTCTTCAACCTGTCACCTCCTCCAA
AGCCTGGTCTCCAGCCCAAACACCCACTCTGTCTCTCCATTTCATCTGATACTCGAACAC
GAGCTGAACCAAAACCCTTGGTGCAATCTTAAATCTCCCTCTTACGATGACGGGACGGAC
GTGTTCTTTGCCAGCATCTACACTCTACCCGATGCAAAGTGGGTGGTGGTGCTGCGGCTT
CACACGGCAGTATGTGACCGCACCACGGCTGTGTCTCTGTTGAGGGAACTGATCGGAGTG
GTACGAGAGAAAGAAGGCGGAGGGAGAGAGGAGAAGATGAGGGATGATGGGGAAGTTAGT
TTGGGAATCGAGGATTTCATTCCTAGTGGGAAAGCGAAGAAGGCTCTCTGGGTTCGTGGA
GTGGACATGCTGAGTTACTCGGTGAATTCATTGCAACTCACAAATTTGAAATTCAAAGAC
GCGAAGTCTCCTAGATCTTCGGAGGTGGTGAGGCTGCAGTTGAACCAAGATGATACTGAA
AGCCTTCTTGCTGGTTGCAGTGCGAAAGGGATTAAACTGTGTGGCGCCCTCGTGGCTGCT
GCACTTATTGCTGGTCATTCCTCTAAACGCCCCGCTGATCATCACAAGGAGAAGTATGCA
GTTGTGACCCTCACTGACTGTCGTCCCATTCTTGACCCACCTCTTTCCACTCACCATTTT
GGATTTTACCATTCCGCCGTCCTAAATACACTTTCAATGAAAGGAGGAGAAAAGCTGTGG
GAACTGGCAAGGAGAAGCTATATGGCCTTTGCAAACTCTAAGAACTGCAACAAGCACTTC
TCAGACATGGCTGACCTCAACTTCCTCATGCGTAAGGCCATTGAGAACCCAGGCTTGACC
TCGGCATCGTCCTTGAGAACCTCTTTCTTGACGGTGTTCGAGGACCCCGTGTTTGAAACC
AATGATGAAATATATAGAGAGATTGTGGGGCTTGAAGACTACATAGGATGCGCTTCAGTT
CATGGTATCGGCCCTTCAATAGCCATATTCGACACCATAAGAGGTGGAATGCTGGACTGC
GCATGCGTGTATCCATCGCCCCTGCACTCGAGGGAGCAAATGGAAGAGCTGCTTCATAAC
ATGAAGCGTCTTCTCGTGGACGCTGCTGCCCACAACCGTGTGCCCAATGAGTGA
>VIT_02s0025g03500.t01 cds chromosome:IGGP_12x:2:2997436:3000351:-1 gene:VIT_02s0025g03500 gene_biotype:protein_coding transcript_biotype:protein_coding
ATGGAGTTGGATTTTGAAAAATACTGTAGTTTGGGTCTGAGTCCTAGAACTGTTCTTCCA
TCTAATCAGCGTTACTTGGGAATTGGAAAGAGAAATACAAAGGAAAAGCCCGCACGTAGA
AGTAACCTTTTGAGCATAGAGGAGGACTTTGCAGAGATAAGCTTTGGTGATTTTCACAGT
TTTTCTTGTAAGAGCATTCGATATAGACCTGTTGGTGTGGAAGGTAATGTAGAGCTGAAA
CGGGGTTCCATATATCAGAGCTCTGAAGAAGTAAGGAAGAAGAAGAAAATGGGGGCTGTT
GAGGGGAGGAGAAAGATTGAATTGTCCCGTAGTAGTGATTCATCTTTCCCCTTTAGGATA
GTCGACTCCTTGTGTAGTTCAGATGAGGAAGACCCGGTTCTGGAAGAGAAGAGATCCCCA
GTGAAGTCTTTGAATTCTGACTTGAATGCATCATCTGTTAGGAAGCCCTGCTCTCAGGTT
TTCAGTCTTCCCTCCTCCCCGGGTCATTTTCTCACCAGAGGTGGCTCATCAGATGGATTT
TCTGAAATCGGTTTGAATTTGGATAACAGAGAAAATCACTCTGCTGAAAGTGCAGAAAGA
GACTCAATCAGAGATTCAAAGTTCAAATGTGATGATGTTGTTGGTCCTCAAAATGATAGC
AATGACCTCTTGGAAAGAGAGACGGTTCTGACTTTGTACAAGTCATTATCTGCTAAGGTA
GCATTGCCCCATTCGCCTTCTCAGTCAGAAAGTGATTACTCGCGGACCAGTCCAAAAGCC
CGATTTAACCCTATTAGAAAGATGTTTGATCCATTCACAAAGTCTAAATCTCAGCGAAGT
CCTTTGCATTCTGTAGTAAAGCCTGGTGGAGTCACAAAAGGCCCGGCAAGTGGCAGAAAT
AATAAAACGTTTCGGAAATCTTTGTTGCATG
        </thead> <small></small>
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