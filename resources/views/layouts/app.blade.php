
<!DOCTYPE html>
<!-- 
Template Name: Pangong - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/
License: You must have a valid license purchased only from themeforest to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Pangong I Alerts</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="{{asset('assets/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

    <!-- Toastr CSS -->
    <link href="{{asset('assets/vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{asset('assets/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="loader-pendulums"></div>
</div>
<!-- /Preloader -->

<!-- HK Wrapper -->
<div class="hk-wrapper hk-vertical-nav">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
        <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
        <a class="navbar-brand" href="dashboard1.html">
            <img class="brand-img d-inline-block" src="dist/img/logo-light.png" alt="Logo" />
        </a>
        <ul class="navbar-nav hk-navbar-content">
            <li class="nav-item">
                <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="search"></i></span></a>
            </li>
            <li class="nav-item">
                <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="settings"></i></span></a>
            </li>
            <li class="nav-item dropdown dropdown-notifications">
                <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge-wrap"><span class="badge badge-primary badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
                <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">View all</a></h6>
                    <div class="notifications-nicescroll-bar">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                        <img src="dist/img/avatar1.jpg" alt="user" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text"><span class="text-dark text-capitalize">Evie Ono</span> accepted your invitation to join the team</div>
                                        <div class="notifications-time">12m</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                        <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text">New message received from <span class="text-dark text-capitalize">Misuko Heid</span></div>
                                        <div class="notifications-time">1h</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-primary rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-account font-18"></i></span></span>
                                            </span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text">You have a follow up with<span class="text-dark text-capitalize"> Pangong head</span> on <span class="text-dark text-capitalize">friday, dec 19</span> at <span class="text-dark">10.00 am</span></div>
                                        <div class="notifications-time">2d</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-success rounded-circle">
													<span class="initial-wrap"><span>A</span></span>
                                            </span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text">Application of <span class="text-dark text-capitalize">Sarah Williams</span> is waiting for your approval</div>
                                        <div class="notifications-time">1w</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-warning rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-notifications font-18"></i></span></span>
                                            </span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text">Last 2 days left for the project</div>
                                        <div class="notifications-time">15d</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-authentication">
                <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <div class="media-img-wrap">
                            <div class="avatar">
                                <img src="dist/img/avatar12.jpg" alt="user" class="avatar-img rounded-circle">
                            </div>
                            <span class="badge badge-success badge-indicator"></span>
                        </div>
                        <div class="media-body">
                            <span>Madelyn Shane<i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                    <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                    <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
                    <a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                    <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                    <div class="dropdown-divider"></div>
                    <div class="sub-dropdown-menu show-on-hover">
                        <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                        <div class="dropdown-menu open-left-side">
                            <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                            <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                            <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                </div>
            </li>
        </ul>
    </nav>
    <form role="search" class="navbar-search">
        <div class="position-relative">
            <a href="javascript:void(0);" class="navbar-search-icon"><span class="feather-icon"><i data-feather="search"></i></span></a>
            <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
            <a id="navbar_search_close" class="navbar-search-close" href="#"><span class="feather-icon"><i data-feather="x"></i></span></a>
        </div>
    </form>
    <!-- /Top Navbar -->

    <!-- Vertical Nav -->
    <nav class="hk-nav hk-nav-dark">
        <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
        <div class="nicescroll-bar">
            <div class="navbar-nav-wrap">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
                            <span class="feather-icon"><i data-feather="activity"></i></span>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                        <ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard1.html">CRM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard2.html">Project</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard3.html">Statistics</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-with-badge" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
                            <span class="feather-icon"><i data-feather="package"></i></span>
                            <span class="nav-link-text">Application</span>
                            <span class="badge badge-primary badge-pill">4</span>
                        </a>
                        <ul id="app_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="chats.html">Chat</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="calendar.html">Calendar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="email.html">Email</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="file-manager.html">File Manager</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#auth_drp">
                            <span class="feather-icon"><i data-feather="zap"></i></span>
                            <span class="nav-link-text">Authentication</span>
                        </a>
                        <ul id="auth_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#signup_drp">
                                            Sign Up
                                        </a>
                                        <ul id="signup_drp" class="nav flex-column collapse collapse-level-2">
                                            <li class="nav-item">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="signup.html">Cover</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="signup-simple.html">Simple</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#signin_drp">
                                            Login
                                        </a>
                                        <ul id="signin_drp" class="nav flex-column collapse collapse-level-2">
                                            <li class="nav-item">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="login.html">Cover</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="login-simple.html">Simple</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#recover_drp">
                                            Recover Password
                                        </a>
                                        <ul id="recover_drp" class="nav flex-column collapse collapse-level-2">
                                            <li class="nav-item">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="forgot-password.html">Forgot Password</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="reset-password.html">Reset Password</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="lock-screen.html">Lock Screen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="404.html">Error 404</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="maintenance.html">Maintenance</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#pages_drp">
                            <span class="feather-icon"><i data-feather="file-text"></i></span>
                            <span class="nav-link-text">Pages</span>
                        </a>
                        <ul id="pages_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="profile.html">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="invoice.html">Invoice</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="gallery.html">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="activity.html">Activity</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="faq.html">Faq</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <hr class="nav-separator">
                <div class="nav-header">
                    <span>User Interface</span>
                    <span>UI</span>
                </div>
                <ul class="navbar-nav flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#Components_drp">
                            <span class="feather-icon"><i data-feather="layout"></i></span>
                            <span class="nav-link-text">Components</span>
                        </a>
                        <ul id="Components_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="alerts.html">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="avatar.html">Avatar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="badge.html">Badge</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="buttons.html">Buttons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="cards.html">Cards</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="carousel.html">Carousel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="collapse.html">Collapse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dropdowns.html">Dropdown</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="list-group.html">List Group</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="modal.html">Modal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="nav.html">Nav</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="navbar.html">Navbar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="nestable.html">Nestable</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pagination.html">Pagination</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="popovers.html">Popovers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="progress.html">Progress</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="tooltip.html">Tooltip</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#content_drp">
                            <span class="feather-icon"><i data-feather="type"></i></span>
                            <span class="nav-link-text">Content</span>
                        </a>
                        <ul id="content_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="typography.html">Typography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="images.html">Images</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="media-object.html">Media Object</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#utilities_drp">
                            <span class="feather-icon"><i data-feather="anchor"></i></span>
                            <span class="nav-link-text">Utilities</span>
                        </a>
                        <ul id="utilities_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="background.html">Background</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="border.html">Border</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="colors.html">Colors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="embeds.html">Embeds</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="icons.html">Icons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="shadow.html">Shadow</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="sizing.html">Sizing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="spacing.html">Spacing</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#forms_drp">
                            <span class="feather-icon"><i data-feather="server"></i></span>
                            <span class="nav-link-text">Forms</span>
                        </a>
                        <ul id="forms_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="form-element.html">Form Elements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="input-groups.html">Input Groups</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="form-layout.html">Form Layout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="form-mask.html">Form Mask</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="form-validation.html">Form Validation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="form-wizard.html">Form Wizard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="file-upload.html">File Upload</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="editor.html">Editor</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#tables_drp">
                            <span class="feather-icon"><i data-feather="list"></i></span>
                            <span class="nav-link-text">Tables</span>
                        </a>
                        <ul id="tables_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="basic-table.html">Basic Table</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="data-table.html">Data Table</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="responsive-table.html">Responsive Table</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="editable-table.html">Editable Table</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#charts_drp">
                            <span class="feather-icon"><i data-feather="pie-chart"></i></span>
                            <span class="nav-link-text">Charts</span>
                        </a>
                        <ul id="charts_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="line-charts.html">Line Chart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="area-charts.html">Area Chart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="bar-charts.html">Bar Chart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pie-charts.html">Pie Chart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="realtime-charts.html">Realtime Chart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="mini-charts.html">Mini Chart</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#maps_drp">
                            <span class="feather-icon"><i data-feather="map"></i></span>
                            <span class="nav-link-text">Maps</span>
                        </a>
                        <ul id="maps_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="google-map.html">Google Map</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="vector-map.html">Vector Map</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <hr class="nav-separator">
                <div class="nav-header">
                    <span>Getting Started</span>
                    <span>GS</span>
                </div>
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="https://hencework.gitbook.io/pangong/" target="_blank">
                            <span class="feather-icon"><i data-feather="book"></i></span>
                            <span class="nav-link-text">Documentation</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-with-badge" href="https://hencework.gitbook.io/pangong/changelog" target="_blank">
                            <span class="feather-icon"><i data-feather="eye"></i></span>
                            <span class="nav-link-text">Changelog</span>
                            <span class="badge badge-sm badge-success badge-pill">v 1.0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://hencework.ticksy.com/" target="_blank">
                            <span class="feather-icon"><i data-feather="headphones"></i></span>
                            <span class="nav-link-text">Support</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
    <!-- /Vertical Nav -->

    <!-- Setting Panel -->
    <div class="hk-settings-panel">
        <div class="nicescroll-bar position-relative">
            <div class="settings-panel-wrap">
                <div class="settings-panel-head">
                    <img class="brand-img d-inline-block align-top" src="dist/img/logo-light.png" alt="brand" />
                    <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                </div>
                <hr>
                <h6 class="mb-5">Layout</h6>
                <p class="font-14">Choose your preferred layout</p>
                <div class="layout-img-wrap">
                    <div class="row">
                        <a href="javascript:void(0);" class="col-6 mb-30 active">
                            <img class="rounded opacity-70" src="dist/img/layout1.png" alt="layout">
                            <i class="zmdi zmdi-check"></i>
                        </a>
                        <a href="dashboard2.html" class="col-6 mb-30">
                            <img class="rounded opacity-70" src="dist/img/layout2.png" alt="layout">
                            <i class="zmdi zmdi-check"></i>
                        </a>
                        <a href="dashboard3.html" class="col-6">
                            <img class="rounded opacity-70" src="dist/img/layout3.png" alt="layout">
                            <i class="zmdi zmdi-check"></i>
                        </a>
                    </div>
                </div>
                <hr>
                <h6 class="mb-5">Navigation</h6>
                <p class="font-14">Menu comes in two modes: dark & light</p>
                <div class="button-list hk-nav-select mb-10">
                    <button type="button" id="nav_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                    <button type="button" id="nav_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                </div>
                <hr>
                <h6 class="mb-5">Top Nav</h6>
                <p class="font-14">Choose your liked color mode</p>
                <div class="button-list hk-navbar-select mb-10">
                    <button type="button" id="navtop_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                    <button type="button" id="navtop_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <h6>Scrollable Header</h6>
                    <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                </div>
                <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
            </div>
        </div>
        <img class="d-none" src="dist/img/logo-light.png" alt="brand" />
        <img class="d-none" src="dist/img/logo-dark.png" alt="brand" />
    </div>
    <!-- /Setting Panel -->

    <!-- Main Content -->
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#">Components</a></li>
                <li class="breadcrumb-item active" aria-current="page">Alerts</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->

        <!-- Container -->
        <div class="container">

            <!-- Title -->
            <div class="hk-pg-header">
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="alert-triangle"></i></span></span>Alerts</h4>
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Default alerts</h5>
                        <p class="mb-40">Alerts are available for any length of text, as well as an optional dismiss button. Use contextual classes for proper styling.</p>
                        <div class="row">
                            <div class="col-sm">
                                <div class="alert alert-primary" role="alert">
                                    This is a primary alert—check it out!
                                </div>
                                <div class="alert alert-secondary" role="alert">
                                    This is a secondary alert—check it out!
                                </div>
                                <div class="alert alert-success" role="alert">
                                    This is a success alert—check it out!
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    This is a danger alert—check it out!
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    This is a warning alert—check it out!
                                </div>
                                <div class="alert alert-info" role="alert">
                                    This is a info alert—check it out!
                                </div>
                                <div class="alert alert-light" role="alert">
                                    This is a light alert—check it out!
                                </div>
                                <div class="alert alert-dark" role="alert">
                                    This is a dark alert—check it out!
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Inverse alerts</h5>
                        <p class="mb-40">Add <code>.alert-inv .alert-inv-*</code> modifier class to change the appearance of an alert.</p>
                        <div class="row">
                            <div class="col-sm">
                                <div class="alert alert-inv alert-inv-primary" role="alert">
                                    This is a primary alert—check it out!
                                </div>
                                <div class="alert alert-inv alert-inv-secondary" role="alert">
                                    This is a secondary alert—check it out!
                                </div>
                                <div class="alert alert-inv alert-inv-success" role="alert">
                                    This is a success alert—check it out!
                                </div>
                                <div class="alert alert-inv alert-inv-danger" role="alert">
                                    This is a danger alert—check it out!
                                </div>
                                <div class="alert alert-inv alert-inv-warning" role="alert">
                                    This is a warning alert—check it out!
                                </div>
                                <div class="alert alert-inv alert-inv-info" role="alert">
                                    This is a info alert—check it out!
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Link color</h5>
                        <p class="mb-40">Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
                        <div class="row">
                            <div class="col-sm">
                                <div class="alert alert-primary" role="alert">
                                    This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Additional content</h5>
                        <p class="mb-40">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
                        <div class="row">
                            <div class="col-sm">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success" role="alert">
                                            <h4 class="alert-heading mb-10">Well done!</h4>
                                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                            <hr class="hr-soft-success">
                                            <p>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="alert alert-primary" role="alert">
                                            <h4 class="alert-heading mb-5">Well done!</h4>
                                            <p>You have successfully completed level 1.</p>
                                            <button class="btn btn-sm btn-block btn-primary mt-10">Play Again</button>
                                        </div>
                                        <div class="alert alert-warning alert-wth-icon alert-dismissible fade show" role="alert">
                                            <span class="alert-icon-wrap"><i class="zmdi zmdi-alert-circle-o"></i></span>
                                            <h5 class="alert-heading">Are you sure you want to delete this file?</h5>
                                            <button class="btn btn-secondary mt-20 mr-5">Cancel</button>
                                            <button class="btn btn-primary mt-20">Yes</button>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <h4 class="alert-heading mb-5">Oh snap!</h4> Change a few things and try submitting again.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="alert alert-primary alert-wth-icon alert-dismissible fade show" role="alert">
                                            <span class="alert-icon-wrap"><i class="zmdi zmdi-pin"></i></span> John Doe started following your board.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="alert alert-info alert-wth-icon alert-dismissible fade show" role="alert">
                                            <span class="alert-icon-wrap"><i class="zmdi zmdi-twitter"></i></span>
                                            <p>John! Recently joined twitter.</p>
                                            <a href="#" class="alert-link mt-5">Follow</a>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Dismissing</h5>
                        <p class="mb-40">Using the alert JavaScript plugin, it’s possible to dismiss any alert inline. Just add <code>.alert-dismissible</code> class.</p>
                        <div class="row">
                            <div class="col-sm">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Alerts with icon</h5>
                        <p class="mb-40">Add <code>.alert-wth-icon</code> class to quickly create fancy alerts with icons.</p>
                        <div class="row">
                            <div class="col-sm">
                                <div class="alert alert-primary alert-wth-icon alert-dismissible fade show" role="alert">
                                    <span class="alert-icon-wrap"><i class="zmdi zmdi-mood"></i></span> Welcome to Pangong Dashboard.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-secondary alert-wth-icon alert-dismissible fade show" role="alert">
                                    <span class="alert-icon-wrap"><i class="zmdi zmdi-notifications-active"></i></span> You have 32 notifications pending in your inbox.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="alert alert-success alert-wth-icon alert-dismissible fade show" role="alert">
                                    <span class="alert-icon-wrap"><i class="zmdi zmdi-check-circle"></i></span> Your message has been sent successfully.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-danger alert-wth-icon alert-dismissible fade show" role="alert">
                                    <span class="alert-icon-wrap"><i class="zmdi zmdi-bug"></i></span> The application failed to initialize properly.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-warning alert-wth-icon alert-dismissible fade show" role="alert">
                                    <span class="alert-icon-wrap"><i class="zmdi zmdi-help"></i></span> You must provide value for account name.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-info alert-wth-icon alert-dismissible fade show" role="alert">
                                    <span class="alert-icon-wrap"><i class="zmdi zmdi-settings"></i></span> Prevent this page from creating additional dialogue.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-light alert-wth-icon alert-dismissible fade show" role="alert">
                                    <span class="alert-icon-wrap"><i class="zmdi zmdi-block"></i></span> You have 1 open <strong>refund request</strong> to action. <a href="#" class="alert-link">Take action</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-dark alert-wth-icon alert-dismissible fade show" role="alert">
                                    <span class="alert-icon-wrap"><i class="zmdi zmdi-pin-off"></i></span> Restaurant is currently unavailable.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-inv alert-inv-primary alert-wth-icon alert-dismissible fade show" role="alert">
                                    <span class="alert-icon-wrap"><i class="zmdi zmdi-mood"></i></span> Welcome to Pangong Dashboard.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-inv alert-inv-secondary alert-wth-icon alert-dismissible fade show" role="alert">
                                    <span class="alert-icon-wrap"><i class="zmdi zmdi-notifications-active"></i></span> You have 32 notifications pending in your inbox.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="alert alert-inv alert-inv-success alert-wth-icon alert-dismissible fade show" role="alert">
                                    <span class="alert-icon-wrap"><i class="zmdi zmdi-check-circle"></i></span> Your message has been sent successfully.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-inv alert-inv-danger alert-wth-icon alert-dismissible fade show" role="alert">
                                    <span class="alert-icon-wrap"><i class="zmdi zmdi-bug"></i></span> The application failed to initialize properly.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-inv alert-inv-warning alert-wth-icon alert-dismissible fade show" role="alert">
                                    <span class="alert-icon-wrap"><i class="zmdi zmdi-help"></i></span> You must provide value for account name.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-inv alert-inv-info alert-wth-icon alert-dismissible fade show" role="alert">
                                    <span class="alert-icon-wrap"><i class="zmdi zmdi-settings"></i></span> Prevent this page from creating additional dialogue.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Toastr alerts</h5>
                        <p class="mb-40">Toastr is a Javascript library for non-blocking notifications. View full documentation <a href="https://codeseven.github.io/toastr/demo.html" target="_blank">here</a>.</p>
                        <div class="row">
                            <div class="col-sm">
                                <div class="button-list">
                                    <button class="tst1 btn btn-info">Info Message</button>
                                    <button class="tst2 btn btn-warning">Warning Message</button>
                                    <button class="tst3 btn btn-success">Success Message</button>
                                    <button class="tst4 btn btn-danger">Error Message</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Toastr Alerts positions</h5>
                        <p class="mb-40">You can set position option like <code>(position: 'top-right')</code> in toast-data.js file.</p>
                        <div class="row">
                            <div class="col-sm">
                                <div class="button-list">
                                    <button class="tst5 btn btn-secondary">Top left</button>
                                    <button class="tst6 btn btn-secondary">Top right</button>
                                    <button class="tst7 btn btn-secondary">Bottom left</button>
                                    <button class="tst8 btn btn-secondary">Bottom right</button>
                                    <button class="tst9 btn btn-secondary">Top center full width</button>
                                    <button class="tst10 btn btn-secondary">Bottom center full width</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->

        <!-- Footer -->
        <div class="hk-footer-wrap container">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="d-inline-block">Follow us</p>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /Footer -->

    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->

<!-- jQuery -->
<script src="{{asset('/assets/vendors/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('/assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('/assets/')}}dist/js/jquery.slimscroll.js"></script>

<!-- FeatherIcons JavaScript -->
<script src="{{asset('/assets/dist/js/feather.min.js')}}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{asset('/assets/dist/js/dropdown-bootstrap-extended.js')}}"></script>

<!-- Toastr JS -->
<script src="{{asset('/assets/vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
<script src="{{asset('/assets/dist/js/toast-data.js')}}"></script>

<!-- Toggles JavaScript -->
<script src="{{asset('/assets/vendors/jquery-toggles/toggles.min.js')}}"></script>
<script src="{{asset('/assets/dist/js/toggle-data.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{asset('/assets/dist/js/init.js')}}"></script>
</body>

</html>