<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SiqWare - Responsive Web Application Kit by siqware</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/material/main_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/material/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/material/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/material/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/material/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/material/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('dashboard/material/main_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/material/main_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard/material/main_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <script src="{{asset('dashboard/material/main_assets/js/plugins/ui/ripple.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('dashboard/material/main_assets/js/plugins/internationalization/i18next.min.js')}}"></script>
    <script src="{{asset('dashboard/material/main_assets/js/plugins/internationalization/jquery-i18next.min.js')}}"></script>
    <script src="{{asset('dashboard/material/main_assets/js/plugins/internationalization/i18nextXHRBackend.min.js')}}"></script>
    <script src="{{asset('dashboard/material/main_assets/js/plugins/internationalization/i18nextBrowserLanguageDetector.min.js')}}"></script>

    <script src="{{asset('dashboard/material/assets/js/app.js')}}"></script>
    <script src="{{asset('dashboard/material/main_assets/js/demo_pages/internationalization_switch_direct.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
    <div class="navbar-brand">
        <a href="index.html" class="d-inline-block">
            <img src="{{asset('dashboard/material/main_assets/images/logo_light.png')}}" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>

        <span class="navbar-text ml-md-3">
				<span class="badge badge-mark border-orange-300 mr-2"></span>
				Morning, Victoria!
			</span>

        <ul class="navbar-nav ml-md-auto">
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-make-group mr-2"></i>
                    Connect
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-body p-2">
                        <div class="row no-gutters">
                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-github4 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Github</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-dropbox text-blue-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dropbox</div>
                                </a>
                            </div>

                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-dribbble3 text-pink-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dribbble</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-google-drive text-success-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Drive</div>
                                </a>
                            </div>

                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-twitter text-info-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Twitter</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-youtube text-danger icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Youtube</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-pulse2 mr-2"></i>
                    Activity
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Latest activity</span>
                        <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-success-400 rounded-round btn-icon"><i class="icon-mention"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
                                    <div class="font-size-sm text-muted mt-1">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-pink-400 rounded-round btn-icon"><i class="icon-paperplane"></i></a>
                                </div>

                                <div class="media-body">
                                    Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
                                    <div class="font-size-sm text-muted mt-1">36 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-blue rounded-round btn-icon"><i class="icon-plus3"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch in <span class="font-weight-semibold">Limitless</span> repository
                                    <div class="font-size-sm text-muted mt-1">2 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-purple-300 rounded-round btn-icon"><i class="icon-truck"></i></a>
                                </div>

                                <div class="media-body">
                                    Shipping cost to the Netherlands has been reduced, database updated
                                    <div class="font-size-sm text-muted mt-1">Feb 8, 11:30</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-warning-400 rounded-round btn-icon"><i class="icon-comment"></i></a>
                                </div>

                                <div class="media-body">
                                    New review received on <a href="#">Server side integration</a> services
                                    <div class="font-size-sm text-muted mt-1">Feb 2, 10:20</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-teal-400 rounded-round btn-icon"><i class="icon-spinner11"></i></a>
                                </div>

                                <div class="media-body">
                                    <strong>January, 2018</strong> - 1320 new users, 3284 orders, $49,390 revenue
                                    <div class="font-size-sm text-muted mt-1">Feb 1, 05:46</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="font-size-sm line-height-sm text-uppercase font-weight-semibold text-grey mr-auto">All activity</a>
                        <div>
                            <a href="#" class="text-grey" data-popup="tooltip" title="Clear list"><i class="icon-checkmark3"></i></a>
                            <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-gear"></i></a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-switch2"></i>
                    <span class="d-md-none ml-2">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-left8"></i>
            </a>
            Navigation
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- User menu -->
            <div class="sidebar-user-material">
                <div class="sidebar-user-material-body">
                    <div class="card-body text-center">
                        <a href="#">
                            <img src="{{asset('dashboard/material/main_assets/images/placeholders/placeholder.jpg')}}" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
                        </a>
                        <h6 class="mb-0 text-white text-shadow-dark">Victoria Baker</h6>
                        <span class="font-size-sm text-white text-shadow-dark">Santa Ana, CA</span>
                    </div>

                    <div class="sidebar-user-material-footer">
                        <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>My account</span></a>
                    </div>
                </div>

                <div class="collapse" id="user-nav">
                    <ul class="nav nav-sidebar">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-user-plus"></i>
                                <span>My profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-coins"></i>
                                <span>My balance</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-comment-discussion"></i>
                                <span>Messages</span>
                                <span class="badge bg-teal-400 badge-pill align-self-center ml-auto">58</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-cog5"></i>
                                <span>Account settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-switch2"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="card card-sidebar-mobile">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">
                            <i class="icon-home4"></i>
                            <span>
									Dashboard
									<span class="d-block font-weight-normal opacity-50">No active orders</span>
								</span>
                        </a>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Layouts</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"><a href="index.html" class="nav-link active">Default layout</a></li>
                            <li class="nav-item"><a href="../../../../layout_2/LTR/material/full/index.html" class="nav-link">Layout 2</a></li>
                            <li class="nav-item"><a href="../../../../layout_3/LTR/material/full/index.html" class="nav-link">Layout 3</a></li>
                            <li class="nav-item"><a href="../../../../layout_4/LTR/material/full/index.html" class="nav-link">Layout 4</a></li>
                            <li class="nav-item"><a href="../../../../layout_5/LTR/material/full/index.html" class="nav-link">Layout 5</a></li>
                            <li class="nav-item"><a href="../../../../layout_6/LTR/material/full/index.html" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Themes</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Themes">
                            <li class="nav-item"><a href="../../../LTR/default/full/index.html" class="nav-link">Default</a></li>
                            <li class="nav-item"><a href="index.html" class="nav-link active">Material</a></li>
                            <li class="nav-item"><a href="../../../dark/full/index.html" class="nav-link disabled">Dark <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                            <li class="nav-item"><a href="../../../clean/full/index.html" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                            <li class="nav-item"><a href="layout_nav_horizontal.html" class="nav-link">Horizontal navigation</a></li>
                            <li class="nav-item"><a href="sidebar_none.html" class="nav-link">No sidebar</a></li>
                            <li class="nav-item"><a href="sidebar_main.html" class="nav-link">1 sidebar</a></li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">2 sidebars</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="sidebar_secondary.html" class="nav-link">Secondary sidebar</a></li>
                                    <li class="nav-item"><a href="sidebar_right.html" class="nav-link">Right sidebar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">3 sidebars</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="sidebar_right_hidden.html" class="nav-link">Right sidebar hidden</a></li>
                                    <li class="nav-item"><a href="layout_1/LTR/material/seed/sidebar_right_visible.html" class="nav-link">Right sidebar visible</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Content sidebars</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="layout_1/LTR/material/seed/sidebar_content_left.html" class="nav-link">Left sidebar</a></li>
                                    <li class="nav-item"><a href="layout_1/LTR/material/seed/sidebar_content_right.html" class="nav-link">Right sidebar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="layout_boxed.html" class="nav-link">Boxed layout</a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="navbar_fixed_main.html" class="nav-link">Fixed main navbar</a></li>
                            <li class="nav-item"><a href="navbar_fixed_secondary.html" class="nav-link">Fixed secondary navbar</a></li>
                            <li class="nav-item"><a href="navbar_fixed_both.html" class="nav-link">Both navbars fixed</a></li>
                            <li class="nav-item"><a href="layout_fixed.html" class="nav-link">Fixed layout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="changelog.html" class="nav-link">
                            <i class="icon-list-unordered"></i>
                            <span>Changelog</span>
                            <span class="badge bg-blue-400 align-self-center ml-auto">2.0</span>
                        </a>
                    </li>
                    <li class="nav-item"><a href="../../../RTL/material/full/index.html" class="nav-link"><i class="icon-width"></i> <span>RTL version</span></a></li>
                    <!-- /main -->

                    <!-- Forms -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Forms</div> <i class="icon-menu" title="Forms"></i></li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Form components</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Form components">
                            <li class="nav-item"><a href="form_inputs.html" class="nav-link">Basic inputs</a></li>
                            <li class="nav-item"><a href="form_checkboxes_radios.html" class="nav-link">Checkboxes &amp; radios</a></li>
                            <li class="nav-item"><a href="form_select2.html" class="nav-link">Select2 selects</a></li>
                            <li class="nav-item"><a href="form_multiselect.html" class="nav-link">Bootstrap multiselect</a></li>
                            <li class="nav-item"><a href="form_input_groups.html" class="nav-link">Input groups</a></li>
                            <li class="nav-item"><a href="form_controls_extended.html" class="nav-link">Extended controls</a></li>
                            <li class="nav-item"><a href="form_floating_labels.html" class="nav-link">Floating labels</a></li>
                            <li class="nav-item"><a href="form_tag_inputs.html" class="nav-link">Tag inputs</a></li>
                            <li class="nav-item"><a href="form_dual_listboxes.html" class="nav-link">Dual Listboxes</a></li>
                            <li class="nav-item"><a href="form_validation.html" class="nav-link">Validation</a></li>
                            <li class="nav-item"><a href="form_wizard.html" class="nav-link">Form wizard</a></li>
                            <li class="nav-item"><a href="form_actions.html" class="nav-link">Form actions</a></li>
                            <li class="nav-item"><a href="form_inputs_grid.html" class="nav-link">Inputs grid</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-file-css"></i> <span>JSON forms</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="JSON forms">
                            <li class="nav-item"><a href="alpaca_basic.html" class="nav-link">Basic inputs</a></li>
                            <li class="nav-item"><a href="alpaca_advanced.html" class="nav-link">Advanced inputs</a></li>
                            <li class="nav-item"><a href="alpaca_controls.html" class="nav-link">Controls</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-spell-check"></i> <span>Text editors</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Text editors">
                            <li class="nav-item"><a href="editor_summernote.html" class="nav-link">Summernote editor</a></li>
                            <li class="nav-item"><a href="editor_ckeditor.html" class="nav-link">CKEditor</a></li>
                            <li class="nav-item"><a href="editor_trumbowyg.html" class="nav-link">Trumbowyg editor</a></li>
                            <li class="nav-item"><a href="editor_code.html" class="nav-link">Code editor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-select2"></i> <span>Pickers</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Pickers">
                            <li class="nav-item"><a href="picker_date.html" class="nav-link">Date &amp; time pickers</a></li>
                            <li class="nav-item"><a href="picker_color.html" class="nav-link">Color pickers</a></li>
                            <li class="nav-item"><a href="picker_location.html" class="nav-link">Location pickers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Form layouts">
                            <li class="nav-item"><a href="form_layout_vertical.html" class="nav-link">Vertical form</a></li>
                            <li class="nav-item"><a href="form_layout_vertical_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="form_layout_horizontal.html" class="nav-link">Horizontal form</a></li>
                            <li class="nav-item"><a href="form_layout_horizontal_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                        </ul>
                    </li>
                    <!-- /forms -->

                    <!-- Components -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Components</div> <i class="icon-menu" title="Components"></i></li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-grid"></i> <span>Basic components</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                            <li class="nav-item"><a href="components_modals.html" class="nav-link">Modals</a></li>
                            <li class="nav-item"><a href="components_dropdowns.html" class="nav-link">Dropdown menus</a></li>
                            <li class="nav-item"><a href="components_tabs.html" class="nav-link">Tabs component</a></li>
                            <li class="nav-item"><a href="components_pills.html" class="nav-link">Pills component</a></li>
                            <li class="nav-item"><a href="components_collapsible.html" class="nav-link">Collapsible</a></li>
                            <li class="nav-item"><a href="components_navs.html" class="nav-link">Navs</a></li>
                            <li class="nav-item"><a href="components_buttons.html" class="nav-link">Buttons</a></li>
                            <li class="nav-item"><a href="components_popups.html" class="nav-link">Tooltips and popovers</a></li>
                            <li class="nav-item"><a href="components_alerts.html" class="nav-link">Alerts</a></li>
                            <li class="nav-item"><a href="components_pagination.html" class="nav-link">Pagination</a></li>
                            <li class="nav-item"><a href="components_badges.html" class="nav-link">Badges</a></li>
                            <li class="nav-item"><a href="components_progress.html" class="nav-link">Progress</a></li>
                            <li class="nav-item"><a href="components_breadcrumbs.html" class="nav-link">Breadcrumbs</a></li>
                            <li class="nav-item"><a href="components_media.html" class="nav-link">Media objects</a></li>
                            <li class="nav-item"><a href="components_scrollspy.html" class="nav-link">Scrollspy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-puzzle2"></i> <span>Content styling</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Content styling">
                            <li class="nav-item"><a href="content_page_header.html" class="nav-link">Page header</a></li>
                            <li class="nav-item"><a href="content_page_footer.html" class="nav-link disabled">Page footer <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="content_cards.html" class="nav-link">Cards</a></li>
                            <li class="nav-item"><a href="content_cards_content.html" class="nav-link">Card content</a></li>
                            <li class="nav-item"><a href="content_cards_layouts.html" class="nav-link">Card layouts</a></li>
                            <li class="nav-item"><a href="content_cards_header.html" class="nav-link">Card header elements</a></li>
                            <li class="nav-item"><a href="content_cards_footer.html" class="nav-link">Card footer elements</a></li>
                            <li class="nav-item"><a href="content_cards_draggable.html" class="nav-link">Draggable cards</a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="content_text_styling.html" class="nav-link">Text styling</a></li>
                            <li class="nav-item"><a href="content_typography.html" class="nav-link">Typography</a></li>
                            <li class="nav-item"><a href="content_helpers.html" class="nav-link">Helper classes</a></li>
                            <li class="nav-item"><a href="content_helpers_flex.html" class="nav-link">Flex utilities</a></li>
                            <li class="nav-item"><a href="content_syntax_highlighter.html" class="nav-link">Syntax highlighter</a></li>
                            <li class="nav-item"><a href="content_grid.html" class="nav-link">Grid system</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-gift"></i> <span>Extra components</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Extra components">
                            <li class="nav-item"><a href="extra_pnotify.html" class="nav-link">PNotify notifications</a></li>
                            <li class="nav-item"><a href="extra_jgrowl_noty.html" class="nav-link">jGrowl and Noty notifications</a></li>
                            <li class="nav-item"><a href="extra_sweetalert.html" class="nav-link">SweetAlert notifications</a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="extra_sliders_noui.html" class="nav-link">NoUI sliders</a></li>
                            <li class="nav-item"><a href="extra_sliders_ion.html" class="nav-link">Ion range sliders</a></li>
                            <li class="nav-item"><a href="extra_trees.html" class="nav-link">Dynamic tree views</a></li>
                            <li class="nav-item"><a href="extra_context_menu.html" class="nav-link">Context menu</a></li>
                            <li class="nav-item"><a href="extra_fab.html" class="nav-link">Floating action buttons</a></li>
                            <li class="nav-item"><a href="extra_session_timeout.html" class="nav-link">Session timeout</a></li>
                            <li class="nav-item"><a href="extra_idle_timeout.html" class="nav-link">Idle timeout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-droplet2"></i> <span>Color system</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Color system">
                            <li class="nav-item"><a href="colors_primary.html" class="nav-link">Primary palette</a></li>
                            <li class="nav-item"><a href="colors_danger.html" class="nav-link">Danger palette</a></li>
                            <li class="nav-item"><a href="colors_success.html" class="nav-link">Success palette</a></li>
                            <li class="nav-item"><a href="colors_warning.html" class="nav-link">Warning palette</a></li>
                            <li class="nav-item"><a href="colors_info.html" class="nav-link">Info palette</a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="colors_pink.html" class="nav-link">Pink palette</a></li>
                            <li class="nav-item"><a href="colors_violet.html" class="nav-link">Violet palette</a></li>
                            <li class="nav-item"><a href="colors_purple.html" class="nav-link">Purple palette</a></li>
                            <li class="nav-item"><a href="colors_indigo.html" class="nav-link">Indigo palette</a></li>
                            <li class="nav-item"><a href="colors_blue.html" class="nav-link">Blue palette</a></li>
                            <li class="nav-item"><a href="colors_teal.html" class="nav-link">Teal palette</a></li>
                            <li class="nav-item"><a href="colors_green.html" class="nav-link">Green palette</a></li>
                            <li class="nav-item"><a href="colors_orange.html" class="nav-link">Orange palette</a></li>
                            <li class="nav-item"><a href="colors_brown.html" class="nav-link">Brown palette</a></li>
                            <li class="nav-item"><a href="colors_grey.html" class="nav-link">Grey palette</a></li>
                            <li class="nav-item"><a href="colors_slate.html" class="nav-link">Slate palette</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-spinner2 spinner"></i> <span>Animations</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Animations">
                            <li class="nav-item"><a href="animations_css3.html" class="nav-link">CSS3 animations</a></li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Velocity animations</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="animations_velocity_basic.html" class="nav-link">Basic usage</a></li>
                                    <li class="nav-item"><a href="animations_velocity_ui.html" class="nav-link">UI pack effects</a></li>
                                    <li class="nav-item"><a href="animations_velocity_examples.html" class="nav-link">Advanced examples</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Icons">
                            <li class="nav-item"><a href="icons_icomoon.html" class="nav-link">Icomoon</a></li>
                            <li class="nav-item"><a href="icons_material.html" class="nav-link">Material</a></li>
                            <li class="nav-item"><a href="icons_fontawesome.html" class="nav-link">Font awesome</a></li>
                        </ul>
                    </li>
                    <!-- /components -->

                    <!-- Layout -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Layout</div> <i class="icon-menu" title="Layout options"></i></li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Page layouts</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Page layouts">
                            <li class="nav-item"><a href="layout_fixed_navbar.html" class="nav-link">Fixed navbar</a></li>
                            <li class="nav-item"><a href="layout_fixed_sidebar_custom.html" class="nav-link">Fixed sidebar - custom scroll</a></li>
                            <li class="nav-item"><a href="layout_fixed_sidebar_native.html" class="nav-link">Fixed sidebar - native scroll</a></li>
                            <li class="nav-item"><a href="layout_fixed_hideable_navbar.html" class="nav-link">Hideable navbar</a></li>
                            <li class="nav-item"><a href="layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="layout_boxed_default.html" class="nav-link">Boxed with default sidebar</a></li>
                            <li class="nav-item"><a href="layout_boxed_mini.html" class="nav-link">Boxed with mini sidebar</a></li>
                            <li class="nav-item"><a href="layout_boxed_full.html" class="nav-link">Boxed full width</a></li>
                            <li class="nav-item"><a href="layout_boxed_content.html" class="nav-link">Boxed content</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Sidebars">
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Main sidebar</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="sidebar_default_collapse.html" class="nav-link">Default collapsible</a></li>
                                    <li class="nav-item"><a href="sidebar_default_hide.html" class="nav-link">Default hideable</a></li>
                                    <li class="nav-item"><a href="sidebar_default_hidden.html" class="nav-link">Default hidden</a></li>
                                    <li class="nav-item"><a href="sidebar_mini_collapse.html" class="nav-link">Mini collapsible</a></li>
                                    <li class="nav-item"><a href="sidebar_mini_hide.html" class="nav-link">Mini hideable</a></li>
                                    <li class="nav-item"><a href="sidebar_mini_hidden.html" class="nav-link">Mini hidden</a></li>
                                    <li class="nav-item-divider"></li>
                                    <li class="nav-item"><a href="sidebar_default_color_dark.html" class="nav-link">Dark color</a></li>
                                    <li class="nav-item"><a href="sidebar_default_color_custom.html" class="nav-link">Custom color</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Secondary sidebar</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="sidebar_secondary_after.html" class="nav-link">After default</a></li>
                                    <li class="nav-item"><a href="sidebar_secondary_before.html" class="nav-link">Before default</a></li>
                                    <li class="nav-item"><a href="sidebar_secondary_hidden.html" class="nav-link">Hidden by default</a></li>
                                    <li class="nav-item-divider"></li>
                                    <li class="nav-item"><a href="sidebar_secondary_color_dark.html" class="nav-link">Dark color</a></li>
                                    <li class="nav-item"><a href="sidebar_secondary_color_custom.html" class="nav-link">Custom color</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Right sidebar</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="sidebar_right_default_collapse.html" class="nav-link">Show - collapse main</a></li>
                                    <li class="nav-item"><a href="sidebar_right_default_hide.html" class="nav-link">Show - hide main</a></li>
                                    <li class="nav-item"><a href="sidebar_right_default_toggle.html" class="nav-link">Show - fix default width</a></li>
                                    <li class="nav-item"><a href="sidebar_right_mini_toggle.html" class="nav-link">Show - fix mini width</a></li>
                                    <li class="nav-item"><a href="sidebar_right_secondary_hide.html" class="nav-link">Show - hide secondary</a></li>
                                    <li class="nav-item"><a href="sidebar_right_visible.html" class="nav-link">Visible by default</a></li>
                                    <li class="nav-item-divider"></li>
                                    <li class="nav-item"><a href="sidebar_right_color_dark.html" class="nav-link">Dark color</a></li>
                                    <li class="nav-item"><a href="sidebar_right_color_custom.html" class="nav-link">Custom color</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Content sidebar</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="sidebar_content_left.html" class="nav-link">Left position</a></li>
                                    <li class="nav-item"><a href="sidebar_content_left_stretch.html" class="nav-link">Left stretched</a></li>
                                    <li class="nav-item"><a href="sidebar_content_left_hidden.html" class="nav-link">Left hidden</a></li>
                                    <li class="nav-item"><a href="sidebar_content_right.html" class="nav-link">Right position</a></li>
                                    <li class="nav-item"><a href="sidebar_content_right_stretch.html" class="nav-link">Right stretched</a></li>
                                    <li class="nav-item"><a href="sidebar_content_right_hidden.html" class="nav-link">Right hidden</a></li>
                                    <li class="nav-item"><a href="sidebar_content_sections.html" class="nav-link">Sectioned sidebar</a></li>
                                    <li class="nav-item-divider"></li>
                                    <li class="nav-item"><a href="sidebar_content_color_dark.html" class="nav-link">Dark color</a></li>
                                    <li class="nav-item"><a href="sidebar_content_color_custom.html" class="nav-link">Custom color</a></li>
                                    <li class="nav-item"><a href="sidebar_content_color_sections_custom.html" class="nav-link">Custom sections color</a></li>
                                </ul>
                            </li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="sidebar_components.html" class="nav-link">Sidebar components</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-menu3"></i> <span>Navbars</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Navbars">
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Single navbar</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="navbar_single_top_static.html" class="nav-link">Single top static</a></li>
                                    <li class="nav-item"><a href="navbar_single_top_fixed.html" class="nav-link">Single top fixed</a></li>
                                    <li class="nav-item"><a href="navbar_single_bottom_static.html" class="nav-link">Single bottom static</a></li>
                                    <li class="nav-item"><a href="navbar_single_bottom_fixed.html" class="nav-link">Single bottom fixed</a></li>
                                    <li class="nav-item"><a href="navbar_single_header_before.html" class="nav-link">Before page header</a></li>
                                    <li class="nav-item"><a href="navbar_single_header_after.html" class="nav-link">After page header</a></li>
                                    <li class="nav-item"><a href="navbar_single_content_after.html" class="nav-link">After page content</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Multiple navbars</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="navbar_multiple_top_static.html" class="nav-link">Multiple top static</a></li>
                                    <li class="nav-item"><a href="navbar_multiple_top_fixed.html" class="nav-link">Multiple top fixed</a></li>
                                    <li class="nav-item"><a href="navbar_multiple_bottom_static.html" class="nav-link">Multiple bottom static</a></li>
                                    <li class="nav-item"><a href="navbar_multiple_bottom_fixed.html" class="nav-link">Multiple bottom fixed</a></li>
                                    <li class="nav-item"><a href="navbar_multiple_top_bottom.html" class="nav-link">Multiple - top and bottom</a></li>
                                    <li class="nav-item"><a href="navbar_multiple_secondary_sticky.html" class="nav-link">Multiple - secondary sticky</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Content navbar</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="navbar_component_single.html" class="nav-link">Single navbar</a></li>
                                    <li class="nav-item"><a href="navbar_component_multiple.html" class="nav-link">Multiple navbars</a></li>
                                </ul>
                            </li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="navbar_colors.html" class="nav-link">Color options</a></li>
                            <li class="nav-item"><a href="navbar_sizes.html" class="nav-link">Sizing options</a></li>
                            <li class="nav-item"><a href="navbar_hideable.html" class="nav-link">Hide on scroll</a></li>
                            <li class="nav-item"><a href="navbar_components.html" class="nav-link">Navbar components</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Vertical navigation">
                            <li class="nav-item"><a href="navigation_vertical_collapsible.html" class="nav-link">Collapsible menu</a></li>
                            <li class="nav-item"><a href="navigation_vertical_accordion.html" class="nav-link">Accordion menu</a></li>
                            <li class="nav-item"><a href="navigation_vertical_bordered.html" class="nav-link">Bordered navigation</a></li>
                            <li class="nav-item"><a href="navigation_vertical_right_icons.html" class="nav-link">Right icons</a></li>
                            <li class="nav-item"><a href="navigation_vertical_badges.html" class="nav-link">Badges</a></li>
                            <li class="nav-item"><a href="navigation_vertical_disabled.html" class="nav-link">Disabled items</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Horizontal navigation">
                            <li class="nav-item"><a href="navigation_horizontal_click.html" class="nav-link">Submenu on click</a></li>
                            <li class="nav-item"><a href="navigation_horizontal_hover.html" class="nav-link">Submenu on hover</a></li>
                            <li class="nav-item"><a href="navigation_horizontal_elements.html" class="nav-link">With custom elements</a></li>
                            <li class="nav-item"><a href="navigation_horizontal_tabs.html" class="nav-link">Tabbed navigation</a></li>
                            <li class="nav-item"><a href="navigation_horizontal_disabled.html" class="nav-link">Disabled navigation links</a></li>
                            <li class="nav-item"><a href="navigation_horizontal_mega.html" class="nav-link">Horizontal mega menu</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Menu levels</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Menu levels">
                            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> Second level</a></li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
                                        <ul class="nav nav-group-sub">
                                            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-html5"></i> Fourth level</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
                        </ul>
                    </li>
                    <!-- /layout -->

                    <!-- Data visualization -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Data visualization</div> <i class="icon-menu" title="Data visualization"></i></li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-graph"></i> <span>Echarts library</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="ECharts library">
                            <li class="nav-item"><a href="echarts_lines.html" class="nav-link">Line charts</a></li>
                            <li class="nav-item"><a href="echarts_areas.html" class="nav-link">Area charts</a></li>
                            <li class="nav-item"><a href="echarts_columns_waterfalls.html" class="nav-link">Columns and waterfalls</a></li>
                            <li class="nav-item"><a href="echarts_bars_tornados.html" class="nav-link">Bars and tornados</a></li>
                            <li class="nav-item"><a href="echarts_scatter.html" class="nav-link">Scatter charts</a></li>
                            <li class="nav-item"><a href="echarts_pies_donuts.html" class="nav-link">Pies and donuts</a></li>
                            <li class="nav-item"><a href="echarts_funnels_calendars.html" class="nav-link">Funnels and calendars</a></li>
                            <li class="nav-item"><a href="echarts_candlesticks_others.html" class="nav-link">Candlesticks and others</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-statistics"></i> <span>D3 library</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="D3 library">
                            <li class="nav-item"><a href="d3_lines_basic.html" class="nav-link">Simple lines</a></li>
                            <li class="nav-item"><a href="d3_lines_advanced.html" class="nav-link">Advanced lines</a></li>
                            <li class="nav-item"><a href="d3_bars_basic.html" class="nav-link">Simple bars</a></li>
                            <li class="nav-item"><a href="d3_bars_advanced.html" class="nav-link">Advanced bars</a></li>
                            <li class="nav-item"><a href="d3_pies.html" class="nav-link">Pie charts</a></li>
                            <li class="nav-item"><a href="d3_circle_diagrams.html" class="nav-link">Circle diagrams</a></li>
                            <li class="nav-item"><a href="d3_tree.html" class="nav-link">Tree layout</a></li>
                            <li class="nav-item"><a href="d3_other.html" class="nav-link">Other charts</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-stats-dots"></i> <span>Dimple library</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Dimple library">
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Line charts</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="dimple_lines_horizontal.html" class="nav-link">Horizontal orientation</a></li>
                                    <li class="nav-item"><a href="dimple_lines_vertical.html" class="nav-link">Vertical orientation</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Bar charts</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="dimple_bars_horizontal.html" class="nav-link">Horizontal orientation</a></li>
                                    <li class="nav-item"><a href="dimple_bars_vertical.html" class="nav-link">Vertical orientation</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Area charts</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="dimple_area_horizontal.html" class="nav-link">Horizontal orientation</a></li>
                                    <li class="nav-item"><a href="dimple_area_vertical.html" class="nav-link">Vertical orientation</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Step charts</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="dimple_step_horizontal.html" class="nav-link">Horizontal orientation</a></li>
                                    <li class="nav-item"><a href="dimple_step_vertical.html" class="nav-link">Vertical orientation</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="dimple_pies.html" class="nav-link">Pie charts</a></li>
                            <li class="nav-item"><a href="dimple_rings.html" class="nav-link">Ring charts</a></li>
                            <li class="nav-item"><a href="dimple_scatter.html" class="nav-link">Scatter charts</a></li>
                            <li class="nav-item"><a href="dimple_bubble.html" class="nav-link">Bubble charts</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-stats-bars"></i> <span>C3 library</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="C3 library">
                            <li class="nav-item"><a href="c3_lines_areas.html" class="nav-link">Lines and areas</a></li>
                            <li class="nav-item"><a href="c3_bars_pies.html" class="nav-link">Bars and pies</a></li>
                            <li class="nav-item"><a href="c3_advanced.html" class="nav-link">Advanced examples</a></li>
                            <li class="nav-item"><a href="c3_axis.html" class="nav-link">Chart axis</a></li>
                            <li class="nav-item"><a href="c3_grid.html" class="nav-link">Grid options</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-google"></i> <span>Google charts</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Google charts">
                            <li class="nav-item"><a href="google_lines.html" class="nav-link">Line charts</a></li>
                            <li class="nav-item"><a href="google_bars.html" class="nav-link">Bar charts</a></li>
                            <li class="nav-item"><a href="google_pies.html" class="nav-link">Pie charts</a></li>
                            <li class="nav-item"><a href="google_scatter_bubble.html" class="nav-link">Bubble &amp; scatter charts</a></li>
                            <li class="nav-item"><a href="google_other.html" class="nav-link">Other charts</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-map5"></i> <span>Maps integration</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Maps integration">
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Google maps</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="maps_google_basic.html" class="nav-link">Basics</a></li>
                                    <li class="nav-item"><a href="maps_google_controls.html" class="nav-link">Controls</a></li>
                                    <li class="nav-item"><a href="maps_google_markers.html" class="nav-link">Markers</a></li>
                                    <li class="nav-item"><a href="maps_google_drawings.html" class="nav-link">Map drawings</a></li>
                                    <li class="nav-item"><a href="maps_google_layers.html" class="nav-link ">Layers</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="maps_vector.html" class="nav-link">Vector maps</a></li>
                            <li class="nav-item"><a href="maps_echarts.html" class="nav-link disabled">ECharts maps <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                        </ul>
                    </li>
                    <!-- /data visualization -->

                    <!-- Extensions -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Extensions</div> <i class="icon-menu" title="Extensions"></i></li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-puzzle4"></i> <span>Extensions</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Extensions">
                            <li class="nav-item"><a href="extension_image_cropper.html" class="nav-link">Image cropper</a></li>
                            <li class="nav-item"><a href="extension_blockui.html" class="nav-link">Block UI</a></li>
                            <li class="nav-item"><a href="extension_dnd.html" class="nav-link">Drag and drop</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-popout"></i> <span>JQuery UI</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="jQuery UI">
                            <li class="nav-item"><a href="jqueryui_interactions.html" class="nav-link">Interactions</a></li>
                            <li class="nav-item"><a href="jqueryui_forms.html" class="nav-link">Forms</a></li>
                            <li class="nav-item"><a href="jqueryui_components.html" class="nav-link">Components</a></li>
                            <li class="nav-item"><a href="jqueryui_sliders.html" class="nav-link">Sliders</a></li>
                            <li class="nav-item"><a href="jqueryui_navigation.html" class="nav-link">Navigation</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-upload"></i> <span>File uploaders</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="File uploaders">
                            <li class="nav-item"><a href="uploader_plupload.html" class="nav-link">Plupload</a></li>
                            <li class="nav-item"><a href="uploader_bootstrap.html" class="nav-link">Bootstrap file uploader</a></li>
                            <li class="nav-item"><a href="uploader_dropzone.html" class="nav-link">Dropzone</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-calendar3"></i> <span>Event calendars</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Event calendars">
                            <li class="nav-item"><a href="fullcalendar_views.html" class="nav-link">Basic views</a></li>
                            <li class="nav-item"><a href="fullcalendar_styling.html" class="nav-link">Event styling</a></li>
                            <li class="nav-item"><a href="fullcalendar_formats.html" class="nav-link">Language and time</a></li>
                            <li class="nav-item"><a href="fullcalendar_advanced.html" class="nav-link">Advanced usage</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
                        <a href="#" class="nav-link"><i class="icon-sphere"></i> <span>Internationalization</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Internationalization">
                            <li class="nav-item"><a href="internationalization_switch_direct.html" class="nav-link active">Direct translation</a></li>
                            <li class="nav-item"><a href="internationalization_switch_query.html" class="nav-link">Querystring parameter</a></li>
                            <li class="nav-item"><a href="internationalization_fallback.html" class="nav-link">Language fallback</a></li>
                            <li class="nav-item"><a href="internationalization_callbacks.html" class="nav-link">Callbacks</a></li>
                        </ul>
                    </li>
                    <!-- /extensions -->

                    <!-- Tables -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Tables</div> <i class="icon-menu" title="Tables"></i></li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-table2"></i> <span>Basic tables</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Basic tables">
                            <li class="nav-item"><a href="table_basic.html" class="nav-link">Basic examples</a></li>
                            <li class="nav-item"><a href="table_sizing.html" class="nav-link">Table sizing</a></li>
                            <li class="nav-item"><a href="table_borders.html" class="nav-link">Table borders</a></li>
                            <li class="nav-item"><a href="table_styling.html" class="nav-link">Table styling</a></li>
                            <li class="nav-item"><a href="table_elements.html" class="nav-link">Table elements</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-grid7"></i> <span>Data tables</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Data tables">
                            <li class="nav-item"><a href="datatable_basic.html" class="nav-link">Basic initialization</a></li>
                            <li class="nav-item"><a href="datatable_styling.html" class="nav-link">Basic styling</a></li>
                            <li class="nav-item"><a href="datatable_advanced.html" class="nav-link">Advanced examples</a></li>
                            <li class="nav-item"><a href="datatable_sorting.html" class="nav-link">Sorting options</a></li>
                            <li class="nav-item"><a href="datatable_api.html" class="nav-link">Using API</a></li>
                            <li class="nav-item"><a href="datatable_data_sources.html" class="nav-link">Data sources</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-alignment-unalign"></i> <span>Data tables extensions</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Data tables extensions">
                            <li class="nav-item"><a href="datatable_extension_reorder.html" class="nav-link">Columns reorder</a></li>
                            <li class="nav-item"><a href="datatable_extension_row_reorder.html" class="nav-link">Row reorder</a></li>
                            <li class="nav-item"><a href="datatable_extension_fixed_columns.html" class="nav-link">Fixed columns</a></li>
                            <li class="nav-item"><a href="datatable_extension_fixed_header.html" class="nav-link">Fixed header</a></li>
                            <li class="nav-item"><a href="datatable_extension_autofill.html" class="nav-link">Auto fill</a></li>
                            <li class="nav-item"><a href="datatable_extension_key_table.html" class="nav-link">Key table</a></li>
                            <li class="nav-item"><a href="datatable_extension_scroller.html" class="nav-link">Scroller</a></li>
                            <li class="nav-item"><a href="datatable_extension_select.html" class="nav-link">Select</a></li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Buttons</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="datatable_extension_buttons_init.html" class="nav-link">Initialization</a></li>
                                    <li class="nav-item"><a href="datatable_extension_buttons_flash.html" class="nav-link">Flash buttons</a></li>
                                    <li class="nav-item"><a href="datatable_extension_buttons_print.html" class="nav-link">Print buttons</a></li>
                                    <li class="nav-item"><a href="datatable_extension_buttons_html5.html" class="nav-link">HTML5 buttons</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="datatable_extension_colvis.html" class="nav-link">Columns visibility</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-file-spreadsheet"></i> <span>Handsontable</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Handsontable">
                            <li class="nav-item"><a href="handsontable_basic.html" class="nav-link">Basic configuration</a></li>
                            <li class="nav-item"><a href="handsontable_advanced.html" class="nav-link">Advanced setup</a></li>
                            <li class="nav-item"><a href="handsontable_cols.html" class="nav-link">Column features</a></li>
                            <li class="nav-item"><a href="handsontable_cells.html" class="nav-link">Cell features</a></li>
                            <li class="nav-item"><a href="handsontable_types.html" class="nav-link">Basic cell types</a></li>
                            <li class="nav-item"><a href="handsontable_custom_checks.html" class="nav-link">Custom &amp; checkboxes</a></li>
                            <li class="nav-item"><a href="handsontable_ac_password.html" class="nav-link">Autocomplete &amp; password</a></li>
                            <li class="nav-item"><a href="handsontable_search.html" class="nav-link">Search</a></li>
                            <li class="nav-item"><a href="handsontable_context.html" class="nav-link">Context menu</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-versions"></i> <span>Responsive tables</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Responsive tables">
                            <li class="nav-item"><a href="table_responsive.html" class="nav-link">Responsive basic tables</a></li>
                            <li class="nav-item"><a href="datatable_responsive.html" class="nav-link">Responsive data tables</a></li>
                        </ul>
                    </li>
                    <!-- /tables -->

                    <!-- Page kits -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Page kits</div> <i class="icon-menu" title="Page kits"></i></li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-grid6"></i> <span>General pages</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="General pages">
                            <li class="nav-item"><a href="general_feed.html" class="nav-link">Feed</a></li>
                            <li class="nav-item"><a href="general_embeds.html" class="nav-link">Embeds</a></li>
                            <li class="nav-item"><a href="general_faq.html" class="nav-link">FAQ page</a></li>
                            <li class="nav-item"><a href="general_knowledgebase.html" class="nav-link">Knowledgebase</a></li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Blog</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="blog_classic_v.html" class="nav-link">Classic vertical</a></li>
                                    <li class="nav-item"><a href="blog_classic_h.html" class="nav-link">Classic horizontal</a></li>
                                    <li class="nav-item"><a href="blog_grid.html" class="nav-link">Grid</a></li>
                                    <li class="nav-item"><a href="blog_single.html" class="nav-link">Single post</a></li>
                                    <li class="nav-item-divider"></li>
                                    <li class="nav-item"><a href="blog_sidebar_left.html" class="nav-link">Left sidebar</a></li>
                                    <li class="nav-item"><a href="blog_sidebar_right.html" class="nav-link">Right sidebar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Timelines</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="timelines_left.html" class="nav-link">Left timeline</a></li>
                                    <li class="nav-item"><a href="timelines_right.html" class="nav-link">Right timeline</a></li>
                                    <li class="nav-item"><a href="timelines_center.html" class="nav-link">Centered timeline</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Gallery</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="gallery_grid.html" class="nav-link">Media grid</a></li>
                                    <li class="nav-item"><a href="gallery_titles.html" class="nav-link">Media with titles</a></li>
                                    <li class="nav-item"><a href="gallery_description.html" class="nav-link">Media with description</a></li>
                                    <li class="nav-item"><a href="gallery_library.html" class="nav-link">Media library</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-wrench3"></i> <span>Service pages</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Service pages">
                            <li class="nav-item"><a href="service_sitemap.html" class="nav-link">Sitemap</a></li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Invoicing</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="invoice_template.html" class="nav-link">Invoice template</a></li>
                                    <li class="nav-item"><a href="invoice_grid.html" class="nav-link">Invoice grid</a></li>
                                    <li class="nav-item"><a href="invoice_archive.html" class="nav-link">Invoice archive</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Authentication</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="login_simple.html" class="nav-link">Simple login</a></li>
                                    <li class="nav-item"><a href="login_advanced.html" class="nav-link">More login info</a></li>
                                    <li class="nav-item"><a href="login_registration.html" class="nav-link">Simple registration</a></li>
                                    <li class="nav-item"><a href="login_registration_advanced.html" class="nav-link">More registration info</a></li>
                                    <li class="nav-item"><a href="login_unlock.html" class="nav-link">Unlock user</a></li>
                                    <li class="nav-item"><a href="login_password_recover.html" class="nav-link">Reset password</a></li>
                                    <li class="nav-item"><a href="login_hide_navbar.html" class="nav-link">Hide navbar</a></li>
                                    <li class="nav-item"><a href="login_transparent.html" class="nav-link">Transparent box</a></li>
                                    <li class="nav-item"><a href="login_background.html" class="nav-link">Background option</a></li>
                                    <li class="nav-item"><a href="login_validation.html" class="nav-link">With validation</a></li>
                                    <li class="nav-item"><a href="login_tabbed.html" class="nav-link">Tabbed form</a></li>
                                    <li class="nav-item"><a href="login_modals.html" class="nav-link">Inside modals</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Error pages</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="error_403.html" class="nav-link">Error 403</a></li>
                                    <li class="nav-item"><a href="error_404.html" class="nav-link">Error 404</a></li>
                                    <li class="nav-item"><a href="error_405.html" class="nav-link">Error 405</a></li>
                                    <li class="nav-item"><a href="error_500.html" class="nav-link">Error 500</a></li>
                                    <li class="nav-item"><a href="error_503.html" class="nav-link">Error 503</a></li>
                                    <li class="nav-item"><a href="error_offline.html" class="nav-link">Offline page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-people"></i> <span>User pages</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="User pages">
                            <li class="nav-item"><a href="user_pages_list.html" class="nav-link">User list</a></li>
                            <li class="nav-item"><a href="user_pages_cards.html" class="nav-link">User cards</a></li>
                            <li class="nav-item"><a href="user_pages_profile.html" class="nav-link">Simple profile</a></li>
                            <li class="nav-item"><a href="user_pages_profile_tabbed.html" class="nav-link">Tabbed profile</a></li>
                            <li class="nav-item"><a href="user_pages_profile_cover.html" class="nav-link">Profile with cover</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-cube3"></i> <span>Application pages</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Application pages">
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Task manager</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="task_manager_grid.html" class="nav-link">Task grid</a></li>
                                    <li class="nav-item"><a href="task_manager_list.html" class="nav-link">Task list</a></li>
                                    <li class="nav-item"><a href="task_manager_detailed.html" class="nav-link">Task detailed</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Inbox</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="mail_list.html" class="nav-link">Mail list</a></li>
                                    <li class="nav-item"><a href="mail_list_detached.html" class="nav-link">Mail list (detached)</a></li>
                                    <li class="nav-item"><a href="mail_read.html" class="nav-link">Read mail</a></li>
                                    <li class="nav-item"><a href="mail_write.html" class="nav-link">Write mail</a></li>
                                    <li class="nav-item-divider"></li>
                                    <li class="nav-item"><a href="chat_layouts.html" class="nav-link">Chat layouts</a></li>
                                    <li class="nav-item"><a href="chat_options.html" class="nav-link">Chat options</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Search</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="search_basic.html" class="nav-link">Basic search results</a></li>
                                    <li class="nav-item"><a href="search_users.html" class="nav-link">User search results</a></li>
                                    <li class="nav-item"><a href="search_images.html" class="nav-link">Image search results</a></li>
                                    <li class="nav-item"><a href="search_videos.html" class="nav-link">Video search results</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Job search</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="job_list_cards.html" class="nav-link">Cards view</a></li>
                                    <li class="nav-item"><a href="job_list_list.html" class="nav-link">List view</a></li>
                                    <li class="nav-item"><a href="job_detailed.html" class="nav-link">Job detailed</a></li>
                                    <li class="nav-item"><a href="job_apply.html" class="nav-link">Apply</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Learning</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="learning_list.html" class="nav-link">List view</a></li>
                                    <li class="nav-item"><a href="learning_grid.html" class="nav-link">Grid view</a></li>
                                    <li class="nav-item"><a href="learning_detailed.html" class="nav-link">Detailed course</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Ecommerce set</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="ecommerce_product_list.html" class="nav-link">Product list</a></li>
                                    <li class="nav-item"><a href="ecommerce_product_grid.html" class="nav-link">Product grid</a></li>
                                    <li class="nav-item"><a href="ecommerce_orders_history.html" class="nav-link">Orders history</a></li>
                                    <li class="nav-item"><a href="ecommerce_customers.html" class="nav-link">Customers</a></li>
                                    <li class="nav-item"><a href="ecommerce_pricing.html" class="nav-link">Pricing tables</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-atom2"></i> <span>Widgets</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                            <li class="nav-item"><a href="widgets_content.html" class="nav-link">Content widgets</a></li>
                            <li class="nav-item"><a href="widgets_stats.html" class="nav-link">Statistics widgets</a></li>
                            <li class="nav-item"><a href="widgets_menu.html" class="nav-link disabled">Menu widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                            <li class="nav-item"><a href="widgets_form.html" class="nav-link disabled">Form widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                        </ul>
                    </li>
                    <!-- /page kits -->

                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Translation</span> - Direct Switch</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                            <i class="icon-bars-alt text-pink-300"></i>
                            <span>Statistics</span>
                        </a>
                        <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                            <i class="icon-calculator text-pink-300"></i>
                            <span>Invoices</span>
                        </a>
                        <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                            <i class="icon-calendar5 text-pink-300"></i>
                            <span>Schedule</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="internationalization_switch_direct.html" class="breadcrumb-item">Translation</a>
                        <span class="breadcrumb-item active">Direct switch</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="#" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Direct language switch -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Direct switching</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <p class="mb-3">This example demonstrates <code>direct</code> language switching on button or link click. Every time the link is clicked, i18next loads <code>json</code> file with selected language and initialize translation again, so new language appears <span class="font-weight-semibold">without page reload</span>. By default, i18next automatically <span class="font-weight-semibold">detects</span> user navigator language and sets it on init, but if this language is missed in locales, user will see the language specified in <code>&lt;html lang="..."></code> or specified as a <code>fallback</code> language. Since i18next uses <code>cookies</code> and <code>localStorage</code> by default, after page reload you'll see the language that you've selected before reload.</p>

                    <p class="font-weight-semibold">Change language directly:</p>
                    <div class="navbar navbar-dark navbar-expand-md rounded mb-4">
                        <div class="navbar-brand">
                            <a href="index.html" class="d-inline-block">
                                <img src="{{asset('dashboard/material/main_assets/images/logo_light.png')}}" alt="">
                            </a>
                        </div>

                        <div class="d-md-none">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-i18-demo">
                                <i class="icon-tree5"></i>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="navbar-i18-demo">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown language-switch">
                                    <a class="navbar-nav-link dropdown-toggle" data-toggle="dropdown"></a>
                                    <div class="dropdown-menu">
                                        <a href="javascript:void(0);" class="dropdown-item english">
                                            <img src="{{asset('dashboard/material/main_assets/images/lang/gb.png')}}" class="img-flag" alt="">
                                            English
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item russian">
                                            <img src="{{asset('dashboard/material/main_assets/images/lang/ru.png')}}" class="img-flag" alt="">
                                            Русский
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item ukrainian">
                                            <img src="{{asset('dashboard/material/main_assets/images/lang/ua.png')}}" class="img-flag" alt="">
                                            Українська
                                        </a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="navbar-nav ml-md-auto language-switch">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="navbar-nav-link english">
                                        <img src="{{asset('dashboard/material/main_assets/images/lang/gb.png')}}" class="img-flag mr-2" alt="">
                                        English
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="navbar-nav-link russian">
                                        <img src="{{asset('dashboard/material/main_assets/images/lang/ru.png')}}" class="img-flag mr-2" alt="">
                                        Russian
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="navbar-nav-link ukrainian">
                                        <img src="{{asset('dashboard/material/main_assets/images/lang/ua.png')}}" class="img-flag mr-2" alt="">
                                        Ukrainian
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <p class="font-weight-semibold">Simple inline text:</p>
                            <div class="sidebar sidebar-light sidebar-component position-static w-100 d-block mb-4">
                                <div class="sidebar-content position-static">

                                    <!-- User menu -->
                                    <div class="card sidebar-user">
                                        <div class="card-body">
                                            <div class="media">
                                                <a href="#" class="mr-3">
                                                    <img src="{{asset('dashboard/material/main_assets/images/placeholders/placeholder.jpg')}}" width="38" height="38" class="rounded-circle" alt="">
                                                </a>

                                                <div class="media-body">
                                                    <div class="media-title font-weight-semibold" data-i18n="nav_inline.user.name" data-fouc>Victoria Baker</div>
                                                    <div class="font-size-xs opacity-50">
                                                        <i class="icon-pin font-size-sm"></i> &nbsp;<span data-i18n="nav_inline.user.location" data-fouc>Santa Ana, CA</span>
                                                    </div>
                                                </div>

                                                <div class="ml-3 align-self-center">
                                                    <a href="#" class="text-default"><i class="icon-cog3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /user menu -->


                                    <!-- Navigation -->
                                    <div class="card">
                                        <ul class="nav nav-sidebar" data-nav-type="accordion">
                                            <li class="nav-item-header">
                                                <div class="text-uppercase font-size-sm line-height-sm" data-i18n="nav_inline.nav.header" data-fouc>
                                                    Sidebar header
                                                </div>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="icon-strategy"></i>
                                                    <span data-i18n="nav_inline.nav.top_level" data-fouc>Top level link</span>
                                                </a>
                                            </li>

                                            <li class="nav-item nav-item-submenu">
                                                <a href="#" class="nav-link">
                                                    <i class="icon-stack2"></i>
                                                    <span data-i18n="nav_inline.nav.with_children.main" data-fouc>With children</span>
                                                </a>

                                                <ul class="nav nav-group-sub">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-i18n="nav_inline.nav.with_children.second_one" data-fouc>Second level link 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-i18n="nav_inline.nav.with_children.second_two" data-fouc>Second level link 2</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="nav-item nav-item-submenu">
                                                <a href="#" class="nav-link">
                                                    <i class="icon-cube3"></i>
                                                    <span data-i18n="nav_inline.nav.multiple_levels.main" data-fouc>Multiple levels</span>
                                                </a>

                                                <ul class="nav nav-group-sub">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_one" data-fouc>Second level link 1</a>
                                                    </li>

                                                    <li class="nav-item nav-item-submenu">
                                                        <a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_child.main" data-fouc>Second level with child</a>

                                                        <ul class="nav nav-group-sub">
                                                            <li class="nav-item">
                                                                <a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_child.third_one" data-fouc>Third level link 1</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_child.third_two" data-fouc>Third level link 2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_three" data-fouc>Second level link 3</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#" class="nav-link disabled">
                                                    <i class="icon-make-group"></i>
                                                    <span data-i18n="nav_inline.nav.multiple_levels.disabled" data-fouc>Disabled link</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /navigation -->

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <p class="font-weight-semibold">Including attributes, tooltips, badges etc:</p>
                            <div class="sidebar sidebar-light sidebar-component position-static w-100 d-block mb-4">
                                <div class="sidebar-content position-static">

                                    <!-- User menu -->
                                    <div class="card sidebar-user">
                                        <div class="card-body">
                                            <div class="media">
                                                <a href="#" class="mr-3">
                                                    <img src="{{asset('dashboard/material/main_assets/images/placeholders/placeholder.jpg')}}" width="38" height="38" class="rounded-circle" alt="">
                                                </a>

                                                <div class="media-body">
                                                    <div class="media-title font-weight-semibold" data-i18n="nav_inline.user.name" data-fouc>Victoria Baker</div>
                                                    <div class="font-size-xs opacity-50">
                                                        <i class="icon-pin font-size-sm"></i> &nbsp;<span data-i18n="nav_inline.user.location" data-fouc>Santa Ana, CA</span>
                                                    </div>
                                                </div>

                                                <div class="ml-3 align-self-center">
                                                    <a href="#" class="text-default">
                                                        <i class="icon-cog3"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /user menu -->


                                    <!-- Navigation -->
                                    <div class="card">
                                        <ul class="nav nav-sidebar" data-nav-type="accordion">
                                            <li class="nav-item-header d-flex">
                                                <div class="text-uppercase font-size-sm line-height-sm" data-i18n="nav_advanced.nav.header" data-fouc>

                                                </div>
                                                <a href="#" class="align-self-start ml-auto" data-popup="tooltip" title="Tooltip" data-i18n="[title]nav_advanced.nav.tooltip_text;[data-original-title]nav_advanced.nav.tooltip_text;nav_advanced.nav.tooltip" data-placement="left" data-container="body" data-fouc>Tooltip text</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="icon-strategy"></i>
                                                    <span data-i18n="nav_advanced.nav.inline_element" data-fouc>Inline element</span>
                                                    <span class="badge bg-pink-400 ml-auto" data-i18n="nav_advanced.nav.badges.new" data-fouc>New</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="icon-stack2"></i>
                                                    <span data-i18n="nav_advanced.nav.insert" data-fouc>Insert HTML from JSON</span>
                                                    <span class="ml-auto" data-i18n="[html]nav_advanced.nav.badges.done" data-fouc></span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="icon-cube3"></i>
                                                    <span data-i18n="nav_advanced.nav.inline_text" data-fouc>Plain text</span>
                                                    <span class="text-muted font-weight-normal ml-auto" data-i18n="nav_advanced.nav.badges.text" data-fouc>Inline text</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#" class="nav-link disabled">
                                                    <i class="icon-make-group"></i>
                                                    <span data-i18n="nav_advanced.nav.multiple_levels.disabled" data-fouc>Disabled link</span>
                                                    <span class="badge bg-primary ml-auto" data-i18n="nav_advanced.nav.badges.fixed" data-fouc>Fixed</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /navigation -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /direct language switch -->


            <!-- i18next overview -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">i18next library</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /i18next overview -->


            <!-- i18next options -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Library options</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    The default export of the i18next module is an i18next instance ready to be initialized by calling <code>init</code>. You can create additional instances using the <code>createInstance</code> function. The library supports 30+ default options applicable for the default usage only, as well as various options for all integrations and plugins/extensions. Table below demonstrates the list of default i18Next options with default values and descriptions.
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Option</th>
                            <th>Default</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th colspan="3" class="table-active">Logging</th>
                        </tr>
                        <tr>
                            <td>debug</td>
                            <td><code>false</code></td>
                            <td>logs info level to console output. Helps finding issues with loading not working.</td>
                        </tr>
                        <tr>
                            <th colspan="3" class="table-active">Languages, namespaces, resources</th>
                        </tr>
                        <tr>
                            <td>resources</td>
                            <td><code>undefined</code></td>
                            <td>resources to initialize with (if not using loading or not appending using addResourceBundle)</td>
                        </tr>
                        <tr>
                            <td>lng</td>
                            <td><code>undefined</code></td>
                            <td>language to use (overrides language detection)</td>
                        </tr>
                        <tr>
                            <td>fallbackLng</td>
                            <td><code>'dev'</code></td>
                            <td>language to use if translations in user language are not available</td>
                        </tr>
                        <tr>
                            <td>whitelist</td>
                            <td><code>false</code></td>
                            <td>array of allowed languages</td>
                        </tr>
                        <tr>
                            <td>nonExplicitWhitelist</td>
                            <td><code>false</code></td>
                            <td>if true will pass eg. <code>en-US</code> if finding <code>en</code> in whitelist</td>
                        </tr>
                        <tr>
                            <td>load</td>
                            <td><code>'all'</code></td>
                            <td>language codes to lookup, given set language is 'en-US': <code>'all' --&gt; ['en-US', 'en', 'dev']</code>, <code>'currentOnly' --&gt; 'en-US'</code>, <code>'languageOnly' --&gt; 'en'</code></td>
                        </tr>
                        <tr>
                            <td>preload</td>
                            <td><code>false</code></td>
                            <td>array of languages to preload. Important on serverside to assert translations are loaded before rendering views.</td>
                        </tr>
                        <tr>
                            <td>lowerCaseLng</td>
                            <td><code>false</code></td>
                            <td>language will be lowercased eg. <code>en-US</code> --&gt; <code>en-us</code></td>
                        </tr>
                        <tr>
                            <td>ns</td>
                            <td><code>'translation'</code></td>
                            <td>string or array of namespaces to load</td>
                        </tr>
                        <tr>
                            <td>defaultNS</td>
                            <td><code>'translation'</code></td>
                            <td>default namespace used if not passed to translation function</td>
                        </tr>
                        <tr>
                            <td>fallbackNS</td>
                            <td><code>false</code></td>
                            <td>string or array of namespaces to lookup key if not found in given namespace</td>
                        </tr>

                        <tr>
                            <th colspan="3" class="table-active">Missing keys</th>
                        </tr>
                        <tr>
                            <td>saveMissing</td>
                            <td><code>false</code></td>
                            <td>calls save missing key function on backend if key not found</td>
                        </tr>
                        <tr>
                            <td>updateMissing</td>
                            <td><code>false</code></td>
                            <td>experimental: enable to update default values using the saveMissing (Works only if defaultValue different from translated value. Only useful on initial development or when keeping code as source of truth not changing values outside of code. Only supported if backend supports it already)</td>
                        </tr>
                        <tr>
                            <td>saveMissingTo</td>
                            <td><code>'fallback'</code></td>
                            <td>'current' or 'all'</td>
                        </tr>
                        <tr>
                            <td>saveMissingPlurals</td>
                            <td><code>true</code></td>
                            <td>will save all plural forms instead of only singular if t was called for plurals</td>
                        </tr>
                        <tr>
                            <td>missingKeyHandler</td>
                            <td><code>false</code></td>
                            <td><code>function(lng, ns, key, fallbackValue) { }</code> used for custom  missing key handling (needs saveMissing set to true!)</td>
                        </tr>
                        <tr>
                            <td>parseMissingKeyHandler</td>
                            <td><code>noop</code></td>
                            <td>function(key) { // return value to display }</td>
                        </tr>
                        <tr>
                            <td>appendNamespaceToMissingKey</td>
                            <td><code>false</code></td>
                            <td>appends namespace to missing key</td>
                        </tr>
                        <tr>
                            <th colspan="3" class="table-active">Translation defaults</th>
                        </tr>
                        <tr>
                            <td>simplifyPluralSuffix</td>
                            <td><code>true</code></td>
                            <td>will use 'plural' as suffix for languages only having 1 plural form, setting it to false will suffix all with numbers</td>
                        </tr>
                        <tr>
                            <td>postProcess</td>
                            <td><code>false</code></td>
                            <td>string or array of postProcessors to apply per default</td>
                        </tr>
                        <tr>
                            <td>returnNull</td>
                            <td><code>true</code></td>
                            <td>allows null values as valid translation</td>
                        </tr>
                        <tr>
                            <td>returnEmptyString</td>
                            <td><code>true</code></td>
                            <td>allows empty string as valid translation</td>
                        </tr>
                        <tr>
                            <td>returnObjects</td>
                            <td><code>false</code></td>
                            <td>allows objects as valid translation result</td>
                        </tr>
                        <tr>
                            <td>returnedObjectHandler</td>
                            <td><code>noop</code></td>
                            <td><code>function(key, value, options) {}</code> gets called if object was passed in as key but returnObjects was set to false</td>
                        </tr>
                        <tr>
                            <td>joinArrays</td>
                            <td><code>false</code></td>
                            <td>char, eg. '\n' that arrays will be joined by</td>
                        </tr>
                        <tr>
                            <td>overloadTranslationOptionHandler</td>
                            <td><code>function(args) { return { defaultValue: args[1] }; };</code></td>
                            <td>default: sets defaultValue</td>
                        </tr>
                        <tr>
                            <td>interpolation</td>
                            <td><code>{...}</code></td>
                            <td>see interpolation </td>
                        </tr>
                        <tr>
                            <th colspan="3" class="table-active">Plugin options</th>
                        </tr>
                        <tr>
                            <td>detection</td>
                            <td><code>undefined</code></td>
                            <td>options for language detection - check documentation of plugin</td>
                        </tr>
                        <tr>
                            <td>backend</td>
                            <td><code>undefined</code></td>
                            <td>options for backend - check documentation of plugin</td>
                        </tr>
                        <tr>
                            <td>cache</td>
                            <td><code>undefined</code></td>
                            <td>options for cache layer - check documentation of plugin</td>
                        </tr>
                        <tr>
                            <th colspan="3" class="table-active">Misc</th>
                        </tr>
                        <tr>
                            <td>initImmediate</td>
                            <td><code>true</code></td>
                            <td>triggers resource loading in init function inside a setTimeout (default async behaviour). Set it to false if your backend loads resources sync - that way calling i18next.t after init is possible without relaying on the init callback.</td>
                        </tr>
                        <tr>
                            <td>keySeparator</td>
                            <td><code>'.'</code></td>
                            <td>char to separate keys</td>
                        </tr>
                        <tr>
                            <td>nsSeparator</td>
                            <td><code>':'</code></td>
                            <td>char to split namespace from key</td>
                        </tr>
                        <tr>
                            <td>pluralSeparator</td>
                            <td><code>'_'</code></td>
                            <td>char to split plural from key</td>
                        </tr>
                        <tr>
                            <td>contextSeparator</td>
                            <td><code>'_'</code></td>
                            <td>char to split context from key</td>
                        </tr>
                        <tr>
                            <td>appendNamespaceToCIMode</td>
                            <td><code>false</code></td>
                            <td>prefixes the namespace to the returned key when using <code>cimode</code></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /i18next options -->

        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                    <li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                    <li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
