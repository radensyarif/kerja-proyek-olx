<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>OLX</title>
    {{-- <link rel="shortcut icon" href="img/favicon.png"> --}}


    <link rel="stylesheet" href="{{ asset('fonts/open-sans/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/universe-admin/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/mdi/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/iconfont/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tagify.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tippy.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}" id="stylesheet">



    <script src="{{ asset ('js/ie.assign.fix.min.js') }}"></script>
</head>

<body class="js-loading">
    <!-- add for rounded corners: form-controls-rounded -->



    <div class="page-preloader js-page-preloader">
        <div class="page-preloader__logo">
            {{-- <img src="img/logo-black-lg.png" alt="" class="page-preloader__logo-image"> --}}
        </div>
        <div class="page-preloader__desc">oLx</div>
        <div class="page-preloader__loader">
            <div class="page-preloader__loader-heading">Loading...</div>
            <div class="page-preloader__loader-desc"></div>
            <div class="progress progress-rounded page-preloader__loader-progress">
                <div id="page-loader-progress-bar" class="progress-bar bg-info" role="progressbar" style="width: 10%"
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="page-preloader__copyright">RPL, 2020</div>
    </div>



    <div class="navbar navbar-light navbar-expand-lg">
        <button class="sidebar-toggler" type="button">
            <span class="ua-icon-sidebar-open sidebar-toggler__open"></span>
            <span class="ua-icon-alert-close sidebar-toggler__close"></span>
        </button>

        <span class="navbar-brand">
            {{-- <a href="/"><img src="img/logo.png" alt="" class="navbar-brand__logo"></a> --}}
            <div>OLX</div>
        </span>

        <span class="navbar-brand-sm">
            {{-- <a href="/"><img src="img/logo-sm.png" alt="" class="navbar-brand__logo"></a> --}}
        </span>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="ua-icon-navbar-open navbar-toggler__open"></span>
            <span class="ua-icon-alert-close navbar-toggler__close"></span>
        </button>

        {{-- <div class="collapse navbar-collapse" id="navbar-collapse">
		<div class="navbar__menu justify-content-end">
            <div class="dropdown navbar-dropdown">
                <a class="dropdown-toggle navbar-dropdown-toggle navbar-dropdown-toggle__user" data-toggle="dropdown" href="#">
                    <img src="img/users/user-3.png" alt="" class="navbar-dropdown-toggle__user-avatar">
                    <span class="navbar-dropdown__user-name">John Smith</span>
                </a>
                <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu__user">
                    <div class="navbar-dropdown-user-content">
                        <div class="dropdown-user__avatar"><img src="img/users/user-3.png" alt="" /></div>
                        <div class="dropdown-info">
                            <div class="dropdown-info__name">John Smith</div>
                            <div class="dropdown-info__job">Manager</div>
                            <div class="dropdown-info-buttons"><a class="dropdown-info__viewprofile" href="#">View Profile</a><a class="dropdown-info__addaccount" href="#">Add account</a></div>
                        </div>
                    </div><a class="dropdown-item navbar-dropdown__item" href="#">Upgrade to <span>PRO</span></a><a class="dropdown-item navbar-dropdown__item" href="#">Invite team member</a><a class="dropdown-item navbar-dropdown__item" href="#">Fedback</a>
                    <a
                        class="dropdown-item navbar-dropdown__item" href="#">Help</a><a class="dropdown-item navbar-dropdown__item" href="#">Sign Out</a>
                </div>
            </div>
        </div>
		</div> --}}
    </div>




    <div class="page-wrap">

        <div class="sidebar-section">
            <div class="sidebar-section__scroll">
                <div class="sidebar-section__user has-background">
                    <img src="{{ asset('img/user-19.png') }}" alt=""
                        class="sidebar-section__user-avatar rounded-circle">

                    <div class="dropdown sidebar-section__user-dropdown">
                        <a class="dropdown-toggle sidebar-section__user-dropdown-toggle" href="#" role="button"
                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Joyce Walsh
                            <span class="badge badge-sm badge-shamrock ml-1">Admin</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Settings</a>
                            {{-- <a class="dropdown-item" href="#">Help</a> --}}
                            <a class="dropdown-item btn-danger text-white" href="#">Sign Out</a>
                        </div>
                    </div>
                </div>



                <div class="page-wrap">
                    <div class="sidebar-section__separator">Main</div>
                    <ul class="sidebar-section-nav">
                        <li class="sidebar-section-nav__item">
                            <a class="sidebar-section-nav__link" href="{{ route('admin.index') }}">
                                <span class="sidebar-section-nav__item-icon ua-icon-home"></span>
                                <span class="sidebar-section-nav__item-text">Admin</span>
                                <!-- <span class="badge sidebar-section-nav__badge">2</span> -->
                            </a>
                        </li>
                        <li class="sidebar-section-nav__item">
                            <a class="sidebar-section-nav__link" href="draggable-panels.html">
                                <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                                <span class="sidebar-section-nav__item-text">Seller</span>
                            </a>
                        </li>
                        <li class="sidebar-section-nav__item">
                            <a class="sidebar-section-nav__link" href="#">
                                <span class="sidebar-section-nav__item-icon iconfont-layout"></span>
                                <span class="sidebar-section-nav__item-text">Buyer</span>
                            </a>
                        </li>
                        <li class="sidebar-section-nav__item">
                            <a class="sidebar-section-nav__link" href="#">
                                <span class="sidebar-section-nav__item-icon iconfont-layout"></span>
                                <span class="sidebar-section-nav__item-text">Report</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- --------------------------CONTENT-------------------------- -->
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>



    <script src="{{ asset ('js/echarts.min.js') }}"></script>

    <script src="{{ asset ('js/jquery.min.js') }}"></script>
    <script src="{{ asset ('js/popper.min.js') }}"></script>
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('js/select2.full.min.js') }}"></script>
    <script src="{{ asset ('js/simplebar.js') }}"></script>
    <script src="{{ asset ('js/jquery.textavatar.js') }}"></script>
    <script src="{{ asset ('js/tippy.all.min.js') }}"></script>
    <script src="{{ asset ('js/flatpickr.min.js') }}"></script>
    <script src="{{ asset ('js/wNumb.js') }}"></script>
    <script src="{{ asset ('js/main.js') }}"></script>


    <script src="{{ asset ('js/circle-progress.min.js') }}"></script>
    <script src="{{ asset ('js/default-dashboard.min.js') }}"></script>


    <div class="sidebar-mobile-overlay"></div>




    <script src="{{ asset ('js/slide-nav.min.js') }}"></script>



</body>

</html>
