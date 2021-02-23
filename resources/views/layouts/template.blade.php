<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')
    </title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="Sistem pengarsipan modern">
    <meta property=" og:url" content="http://demo.madebytilde.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Sistem Pengarsipan Responsive ">
    <meta property="og:description" content="Sistem pengarsipan modern">
    <meta property=" og:image" content="../../elephant.html">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@madebytilde">
    <meta name="twitter:creator" content="@madebytilde">
    <meta name="twitter:title" content="Sistem Pengarsipan Responsive ">
    <meta name="twitter:description" content="Sistem pengarsipan modern">
    <meta name=" twitter:image" content="../../elephant.html">
    <meta http-equiv="x-pjax-version" content="{{ mix('/css/app.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/') }}/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets/') }}/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('assets/') }}/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="{{ asset('assets/') }}/manifest.json">
    <link rel="mask-icon" href="{{ asset('assets/') }}/safari-pinned-tab.svg" color="#1c90fb">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="{{ asset('assets/') }}/css/vendor.min.css">
    <link rel="stylesheet" href="{{ asset('assets/') }}/css/elephant.min.css">
    <link rel="stylesheet" href="{{ asset('assets/') }}/css/application.min.css">
    <link rel="stylesheet" href="{{ asset('assets/') }}/plugins/fancybox-master/dist/jquery.fancybox.css">
    <link rel="stylesheet" href="{{ asset('assets/') }}/plugins/fancybox-master/dist/jquery.fancybox.min.css">


</head>

<body class="layout layout-header-fixed">
    <div class="layout-header">
        <div class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand navbar-brand-center" href="index.html">
                    <img class="navbar-brand-logo" src="img/logo-inverse.svg" alt="Elephant">
                </a>
                <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse"
                    data-target="#sidenav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="bars">
                        <span class="bar-line bar-line-1 out"></span>
                        <span class="bar-line bar-line-2 out"></span>
                        <span class="bar-line bar-line-3 out"></span>
                    </span>
                    <span class="bars bars-x">
                        <span class="bar-line bar-line-4"></span>
                        <span class="bar-line bar-line-5"></span>
                    </span>
                </button>
                <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse"
                    data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="arrow-up"></span>
                    <span class="ellipsis ellipsis-vertical">
                        <img class="ellipsis-object" width="32" height="32" src="img/0180441436.jpg" alt="Teddy Wilson">
                    </span>
                </button>
            </div>
            <div class="navbar-toggleable">
                <nav id="navbar" class="navbar-collapse collapse">
                    <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true"
                        type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="bars">
                            <span class="bar-line bar-line-1 out"></span>
                            <span class="bar-line bar-line-2 out"></span>
                            <span class="bar-line bar-line-3 out"></span>
                            <span class="bar-line bar-line-4 in"></span>
                            <span class="bar-line bar-line-5 in"></span>
                            <span class="bar-line bar-line-6 in"></span>
                        </span>
                    </button>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="visible-xs-block">
                            <h4 class="navbar-text text-center">Hi, Teddy Wilson</h4>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true">
                                <span class="icon-with-child hidden-xs">
                                    <span class="icon icon-envelope-o icon-lg"></span>
                                    <span class="badge badge-primary badge-above right">8</span>
                                </span>
                                <span class="visible-xs-block">
                                    <span class="icon icon-envelope icon-lg icon-fw"></span>
                                    <span class="badge badge-primary pull-right">8</span>
                                    Messages
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                <div class="dropdown-header">
                                    <a class="dropdown-link" href="compose.html">New Message</a>
                                    <h5 class="dropdown-heading">Recent messages</h5>
                                </div>
                                <div class="dropdown-body">
                                    <div class="list-group list-group-divided custom-scrollbar">
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <img class="circle" width="40" height="40" src="img/0299419341.jpg"
                                                        alt="Harry Jones">
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">16 min</small>
                                                    <h5 class="notification-heading">Harry Jones</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">Hi Teddy, Just wanted to let you know we
                                                            got the project! We should be starting the planning next
                                                            week. Harry</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <img class="circle" width="40" height="40" src="img/0310728269.jpg"
                                                        alt="Daniel Taylor">
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">2 hr</small>
                                                    <h5 class="notification-heading">Daniel Taylor</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">Teddy Boyyyy, label text isn't
                                                            vertically aligned with value text in grid forms when using
                                                            .form-control... DT</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <img class="circle" width="40" height="40" src="img/0460697039.jpg"
                                                        alt="Charlotte Harrison">
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">Sep 20</small>
                                                    <h5 class="notification-heading">Charlotte Harrison</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">Dear Teddy, Can we discuss the benefits
                                                            of this approach during our Monday meeting? Best regards
                                                            Charlotte Harrison</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <img class="circle" width="40" height="40" src="img/0531871454.jpg"
                                                        alt="Ethan Walker">
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">Sep 19</small>
                                                    <h5 class="notification-heading">Ethan Walker</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">If you need any further assistance,
                                                            please feel free to contact us. We are always happy to
                                                            assist you. Regards, Ethan</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <img class="circle" width="40" height="40" src="img/0601274412.jpg"
                                                        alt="Sophia Evans">
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">Sep 18</small>
                                                    <h5 class="notification-heading">Sophia Evans</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">Teddy, Please call me when you finish
                                                            your work! I have many things to discuss. Don't forget call
                                                            me !! Sophia</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <img class="circle" width="40" height="40" src="img/0777931269.jpg"
                                                        alt="Harry Walker">
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">Sep 17</small>
                                                    <h5 class="notification-heading">Harry Walker</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">Thank you for your message. I am
                                                            currently out of the office, with no email access. I will be
                                                            returning on 20 Jun.</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <img class="circle" width="40" height="40" src="img/0872116906.jpg"
                                                        alt="Emma Lewis">
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">Sep 15</small>
                                                    <h5 class="notification-heading">Emma Lewis</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">Teddy, Please find the attached report.
                                                            I am truly sorry and very embarrassed about not finishing
                                                            the report by the deadline.</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <img class="circle" width="40" height="40" src="img/0980726243.jpg"
                                                        alt="Eliot Morgan">
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">Sep 15</small>
                                                    <h5 class="notification-heading">Eliot Morgan</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">Dear Teddy, Please accept this message
                                                            as notification that I was unable to work yesterday, due to
                                                            personal illness.m</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-footer">
                                    <a class="dropdown-btn" href="#">See All</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true">
                                <span class="icon-with-child hidden-xs">
                                    <span class="icon icon-bell-o icon-lg"></span>
                                    <span class="badge badge-primary badge-above right">7</span>
                                </span>
                                <span class="visible-xs-block">
                                    <span class="icon icon-bell icon-lg icon-fw"></span>
                                    <span class="badge badge-primary pull-right">7</span>
                                    Notifications
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                <div class="dropdown-header">
                                    <a class="dropdown-link" href="#">Mark all as read</a>
                                    <h5 class="dropdown-heading">Recent Notifications</h5>
                                </div>
                                <div class="dropdown-body">
                                    <div class="list-group list-group-divided custom-scrollbar">
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <span
                                                        class="icon icon-exclamation-triangle bg-warning circle sq-40"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">35 min</small>
                                                    <h5 class="notification-heading">Update Status</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">Failed to get available update data. To
                                                            ensure the proper functioning of your application, update
                                                            now.</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <span class="icon icon-flag bg-success circle sq-40"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">43 min</small>
                                                    <h5 class="notification-heading">Account Contact Change</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">A contact detail associated with your
                                                            account teddy.wilson, has recently changed.</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <span
                                                        class="icon icon-exclamation-triangle bg-warning circle sq-40"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">1 hr</small>
                                                    <h5 class="notification-heading">Failed Login Warning</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">There was a failed login attempt from
                                                            "192.98.19.164" into the account teddy.wilson.</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <img class="circle" width="40" height="40" src="img/0310728269.jpg"
                                                        alt="Daniel Taylor">
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">4 hr</small>
                                                    <h5 class="notification-heading">Daniel Taylor</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">Like your post: "Everything you know
                                                            about Bootstrap is wrong".</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <img class="circle" width="40" height="40" src="img/0872116906.jpg"
                                                        alt="Emma Lewis">
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">8 hr</small>
                                                    <h5 class="notification-heading">Emma Lewis</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">Like your post: "Everything you know
                                                            about Bootstrap is wrong".</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <img class="circle" width="40" height="40" src="img/0601274412.jpg"
                                                        alt="Sophia Evans">
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">8 hr</small>
                                                    <h5 class="notification-heading">Sophia Evans</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">Like your post: "Everything you know
                                                            about Bootstrap is wrong".</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <img class="circle" width="40" height="40" src="img/0180441436.jpg"
                                                        alt="Teddy Wilson">
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">9 hr</small>
                                                    <h5 class="notification-heading">Teddy Wilson</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">Published a new post: "Everything you
                                                            know about Bootstrap is wrong".</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-footer">
                                    <a class="dropdown-btn" href="#">See All</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown hidden-xs">
                            <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                                <img class="circle" width="36" height="36" src="img/0180441436.jpg" alt="Teddy Wilson">
                                Teddy Wilson
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="upgrade.html">
                                        <h5 class="navbar-upgrade-heading">
                                            Upgrade Now
                                            <small class="navbar-upgrade-notification">You have 15 days left in your
                                                trial.</small>
                                        </h5>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li class="navbar-upgrade-version">Version: 1.0.0</li>
                                <li class="divider"></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="login-1.html">Sign out</a></li>
                            </ul>
                        </li>
                        <li class="visible-xs-block">
                            <a href="contacts.html">
                                <span class="icon icon-users icon-lg icon-fw"></span>
                                Contacts
                            </a>
                        </li>
                        <li class="visible-xs-block">
                            <a href="profile.html">
                                <span class="icon icon-user icon-lg icon-fw"></span>
                                Profile
                            </a>
                        </li>
                        <li class="visible-xs-block">
                            <a href="login-1.html">
                                <span class="icon icon-power-off icon-lg icon-fw"></span>
                                Sign out
                            </a>
                        </li>
                    </ul>
                    <div class="title-bar">
                        <h1 class="title-bar-title">
                            <span class="d-ib">Dashboard</span>
                            <span class="d-ib">
                                <a class="title-bar-shortcut" href="#" title="Add to shortcut list"
                                    data-container="body" data-toggle-text="Remove from shortcut list"
                                    data-trigger="hover" data-placement="right" data-toggle="tooltip">
                                    <span class="sr-only">Add to shortcut list</span>
                                </a>
                            </span>
                        </h1>
                        <p class="title-bar-description">
                            <small>Modul yang diakses akses <a href="widgets.html">@yield('title') , Jam
                                    {{ now() }} </a>.</small>
                        </p>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="layout-main">
        <div class="layout-sidebar">
            <div class="layout-sidebar-backdrop"></div>
            <div class="layout-sidebar-body">
                <div class="custom-scrollbar">
                    <nav id="sidenav" class="sidenav-collapse collapse">
                        <ul class="sidenav level-1">
                            <li class="sidenav-search">
                                <form class="sidenav-form" action="">
                                    <div class="form-group form-group-sm">
                                        <div class="input-with-icon">
                                            <input class="form-control" type="text" placeholder="Search…">
                                            <span class="icon icon-search input-icon"></span>
                                        </div>
                                    </div>
                                </form>
                            </li>
                            <li class="sidenav-heading">Navigation</li>
                            @php echo Menu_app::render() @endphp
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="layout-content" id="pjax-container">
            <div class="layout-content-body">
                @yield('content')
            </div>
        </div>
        <div class="layout-footer">
            <div class="layout-footer-body">
                <small class="version">Version 1.4.0</small>
                <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by
                        Tilde</a></small>
            </div>
        </div>
    </div>
    <div class="theme">
        <div class="theme-panel theme-panel-collapsed">
            <div class="theme-panel-controls">
                <button class="theme-panel-toggler" title="Expand theme panel ( ] )" type="button">
                    <span class="icon icon-cog icon-spin" aria-hidden="true"></span>
                </button>
            </div>
            <div class="theme-panel-body">
                <div class="custom-scrollbar">
                    <div class="custom-scrollbar-inner">
                        <h5 class="theme-heading">
                            <a href="http://demo.madebytilde.com/elephant/buy" class="btn btn-primary btn-block">Buy
                                Elephant Now!</a>
                        </h5>
                        <ul class="theme-settings">
                            <li class="theme-settings-heading">
                                <div class="divider">
                                    <div class="divider-content">Theme Settings</div>
                                </div>
                            </li>
                            <li class="theme-settings-item">
                                <div class="theme-settings-label">Header fixed</div>
                                <div class="theme-settings-switch">
                                    <label class="switch switch-primary">
                                        <input class="switch-input" type="checkbox" name="layout-header-fixed"
                                            data-sync="true">
                                        <span class="switch-track"></span>
                                        <span class="switch-thumb"></span>
                                    </label>
                                </div>
                            </li>
                            <li class="theme-settings-item">
                                <div class="theme-settings-label">Sidebar fixed</div>
                                <div class="theme-settings-switch">
                                    <label class="switch switch-primary">
                                        <input class="switch-input" type="checkbox" name="layout-sidebar-fixed"
                                            data-sync="true">
                                        <span class="switch-track"></span>
                                        <span class="switch-thumb"></span>
                                    </label>
                                </div>
                            </li>
                            <li class="theme-settings-item">
                                <div class="theme-settings-label">Sidebar sticky*</div>
                                <div class="theme-settings-switch">
                                    <label class="switch switch-primary">
                                        <input class="switch-input" type="checkbox" name="layout-sidebar-sticky"
                                            data-sync="true">
                                        <span class="switch-track"></span>
                                        <span class="switch-thumb"></span>
                                    </label>
                                </div>
                            </li>
                            <li class="theme-settings-item">
                                <div class="theme-settings-label">Sidebar collapsed</div>
                                <div class="theme-settings-switch">
                                    <label class="switch switch-primary">
                                        <input class="switch-input" type="checkbox" name="layout-sidebar-collapsed"
                                            data-sync="false">
                                        <span class="switch-track"></span>
                                        <span class="switch-thumb"></span>
                                    </label>
                                </div>
                            </li>
                            <li class="theme-settings-item">
                                <div class="theme-settings-label">Footer fixed</div>
                                <div class="theme-settings-switch">
                                    <label class="switch switch-primary">
                                        <input class="switch-input" type="checkbox" name="layout-footer-fixed"
                                            data-sync="true">
                                        <span class="switch-track"></span>
                                        <span class="switch-thumb"></span>
                                    </label>
                                </div>
                            </li>
                            <li class="theme-settings-description">
                                <span>
                                    <strong>Sidebar sticky*</strong> - by scrolling up and down the page, the menu
                                    placed on the sidebar moves along with the content until the bottom of the menu is
                                    reached. <a href="page-layouts.html">Learn more</a></span>
                            </li>
                        </ul>
                        <hr class="theme-divider">
                        <ul class="theme-variants">
                            <li class="theme-variants-item">
                                <a class="theme-variants-link" href="index-2.html" title="Theme 1">
                                    <img class="img-responsive" src="img/f420a3cea0fb04862eb630f5a54b2733.jpg"
                                        alt="Theme 1">
                                </a>
                            </li>
                            <li class="theme-variants-item">
                                <a class="theme-variants-link"
                                    href="http://demo.madebytilde.com/elephant-v1.4.0/theme-2/" title="Theme 2">
                                    <img class="img-responsive" src="img/3dd124286157b729cc38d9bd7045e384.jpg"
                                        alt="Theme 2">
                                </a>
                            </li>
                            <li class="theme-variants-item">
                                <a class="theme-variants-link"
                                    href="http://demo.madebytilde.com/elephant-v1.4.0/theme-3/" title="Theme 3">
                                    <img class="img-responsive" src="img/35e0765272cd421a5352331003ae2ab1.jpg"
                                        alt="Theme 3">
                                </a>
                            </li>
                            <li class="theme-variants-item">
                                <a class="theme-variants-link"
                                    href="http://demo.madebytilde.com/elephant-v1.4.0/theme-4/" title="Theme 4">
                                    <img class="img-responsive" src="img/4fcb4322807f1fd92aa3140adb37d4d9.jpg"
                                        alt="Theme 4">
                                </a>
                            </li>
                            <li class="theme-variants-item">
                                <a class="theme-variants-link"
                                    href="http://demo.madebytilde.com/elephant-v1.4.0/theme-5/" title="Theme 5">
                                    <img class="img-responsive" src="img/b787e62313c23880e0797bfbbc3d150c.jpg"
                                        alt="Theme 5">
                                </a>
                            </li>
                            <li class="theme-variants-item">
                                <a class="theme-variants-link"
                                    href="http://demo.madebytilde.com/elephant-v1.4.0/theme-6/" title="Theme 6">
                                    <img class="img-responsive" src="img/7489e404fb5088d63e5a5d55b27d546c.jpg"
                                        alt="Theme 6">
                                </a>
                            </li>
                            <li class="theme-variants-item">
                                <a class="theme-variants-link"
                                    href="http://demo.madebytilde.com/elephant-v1.4.0/theme-7/" title="Theme 7">
                                    <img class="img-responsive" src="img/972b6c5882a45ee73d83a90a9852660c.jpg"
                                        alt="Theme 7">
                                </a>
                            </li>
                            <li class="theme-variants-item">
                                <a class="theme-variants-link"
                                    href="http://demo.madebytilde.com/elephant-v1.4.0/theme-8/" title="Theme 8">
                                    <img class="img-responsive" src="img/0100e8b81ad03f81a64a0a5f49c5be41.jpg"
                                        alt="Theme 8">
                                </a>
                            </li>
                            <li class="theme-variants-item">
                                <a class="theme-variants-link"
                                    href="http://demo.madebytilde.com/elephant-v1.4.0/theme-9/" title="Theme 9">
                                    <img class="img-responsive" src="img/69ece2eb60bdd2126e2acf27af43aa9b.jpg"
                                        alt="Theme 9">
                                </a>
                            </li>
                            <li class="theme-variants-item">
                                <a class="theme-variants-link"
                                    href="http://demo.madebytilde.com/elephant-v1.4.0/theme-10/" title="Theme 10">
                                    <img class="img-responsive" src="img/2ef1cfdcf1da5256d7b994983bd8d457.jpg"
                                        alt="Theme 10">
                                </a>
                            </li>
                            <li class="theme-variants-item">
                                <a class="theme-variants-link"
                                    href="http://demo.madebytilde.com/elephant-v1.4.0/theme-11/" title="Theme 11">
                                    <img class="img-responsive" src="img/cca2226fdaba079b321ba5cf05ba0adc.jpg"
                                        alt="Theme 11">
                                </a>
                            </li>
                            <li class="theme-variants-item">
                                <a class="theme-variants-link"
                                    href="http://demo.madebytilde.com/elephant-v1.4.0/theme-12/" title="Theme 12">
                                    <img class="img-responsive" src="img/7a4ee939781f6165006cff1b5b8096d4.jpg"
                                        alt="Theme 12">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/') }}/js/application.min.js"></script>
    <script src="{{ asset('assets/') }}/js/vendor.min.js"></script>
    <script src="{{ asset('assets/') }}/js/elephant.min.js"></script>


    <script src="{{ asset('assets/js/aplikasi.js') }}"></script>
    <script src="{{ asset('assets') }}/js/jquery.pjax.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>

    <script src="{{ asset('assets') }}/js/sweetalert2@10"></script>
    {{-- window child params --}}
    <script src="{{ asset('assets/') }}/plugins/fancybox-master/dist/jquery.fancybox.js"></script>
    <script src="{{ asset('assets/') }}/plugins/fancybox-master/dist/jquery.fancybox.min.js"></script>
    <script>
        $(document).pjax('a', '#pjax-container');

    </script>
    @yield('script')

</body>

</html>
