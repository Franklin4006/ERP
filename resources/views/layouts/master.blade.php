<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>@yield('title')</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('theme/vendors/styles/core.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('theme/vendors/styles/icon-font.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ url('theme/src/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('theme/vendors/styles/style.css') }}" />


    <link rel="stylesheet" type="text/css"
        href="{{ url('theme/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ url('theme/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>

    <style>
        .form-group .form-control {
            height: 35px;
            font-size: 13px;
        }

        .form-group .col-sm-1,
        .form-group .col-sm-10,
        .form-group .col-sm-11,
        .form-group .col-sm-12,
        .form-group .col-sm-2,
        .form-group .col-sm-3,
        .form-group .col-sm-4,
        .form-group .col-sm-5,
        .form-group .col-sm-6,
        .form-group .col-sm-7,
        .form-group .col-sm-8,
        .form-group .col-sm-9 {

            padding-right: 7px;
            padding-left: 7px;
        }

        .col-form-label {
            font-size: 13px;
        }

        .card-header {
            font-size: 14px;
        }
    </style>
</head>

<body>
    {{-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src="{{ url('images/logo-white.png') }}" alt="" />
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Loading...</div>
        </div>
    </div> --}}

    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
            <div class="header-search">
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here" />
                        {{-- <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="ion-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" target="_blank" href="{{ url('/') }}"
                        data-toggle="right-sidebar">
                        <i class="bi bi-globe"></i>
                    </a>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            @if (auth()->user()->profile)
                                <img src="{{ url('uploads/profile_photo') }}/{{ auth()->user()->profile }}"
                                    alt="" />
                            @else
                                <img src="{{ url('images/user-icon.jpeg') }}" alt="" />
                            @endif
                        </span>
                        <span class="user-name">{{ auth()->user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="{{ route('profile') }}"><i class="dw dw-user1"></i>
                            Profile</a>

                        <a class="dropdown-item" href="#"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i
                                class="dw dw-logout"></i> Log Out</a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.sidebar')

    <div class="mobile-menu-overlay"></div>


    @yield('content')

    <div class="modal fade" id="delete-confirm-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center font-18">
                    <h4 class="padding-top-30 mb-30 weight-500" id="delete-confirm-text">
                        Are you sure you want to continue?
                    </h4>
                    <div class="padding-bottom-30 text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            <i class="fa fa-times"></i> NO
                        </button>
                        <button type="button" id="confirm-yes-btn" class="btn btn-primary" data-dismiss="modal">
                            <i class="fa fa-check"></i> YES
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="footer-wrap pd-20 mb-20 card-box">
                Copyright 2023 -
                <a href="https://{{ env("APP_NAME") }}.in" target="_blank">{{ env("APP_NAME") }}</a>
            </div>
        </div>
    </div> --}}

    <!-- js -->
    <script src="{{ url('theme/vendors/scripts/core.js') }}"></script>
    <script src="{{ url('theme/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ url('theme/vendors/scripts/process.js') }}"></script>
    <script src="{{ url('theme/vendors/scripts/layout-settings.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    <script src="{{ url('theme/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('theme/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('theme/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('theme/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>

    {{-- toastr --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".select2").select2();
        });
    </script>
    @yield('addscript')
</body>

</html>
