<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BookStore</title>
    <link rel="icon" href="https://icep.com.my/clients/asset_172EE6EE-CA98-4240-A1D9-F5479A8B786F/contentMS/img/favicon.ico">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('qbadminui/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('qbadminui/css/vendor/bootstrap-4.3.1/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('qbadminui/css/main.css') }}">

    <link rel="stylesheet" href="{{ asset('qbadminui/css/vendor/DataTable-1.10.20/datatables.min.css') }}">
    </link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <meta name="theme-color" content="#fafafa">
    @livewireStyles
</head>

<body class="position-relative">
    @livewireScripts
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <div class="px-0 container-fluid">
        <!-- The side bar -->
        <div class="side-bar side-bar-lg-active" data-theme="purple">
            <!-- Brand details -->
            <div class="mt-3 side-menu-brand d-flex flex-column justify-content-center align-items-center clear">
                <img src="{{asset('icon/book.png')}}" style="width:50%" alt="bran_name" class="brand-img">
                <a href="" class="mt-2 ml-2 brand-name font-weight-bold" style="text-align: center; font-size: 20px !important;padding-top: 10%;">Book Store Application</a>
            </div>
            @if(Auth::user())
            <!-- Side bar menu -->
            <div class="mt-5 the_menu">
                <!-- Heading -->
                <div class="side-menu-heading d-flex">
                    <h6 class="pb-2 mx-3 font-weight-bold"> {{ucwords(strtolower((Auth::user()->name)))}} </h6>
                    <a class="px-3 ml-auto font-weight-bold" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt" data-toggle="tooltip" data-placement="top" title="Log Out"></i>
                    </a>
                </div>

                <!-- Menu item -->
                <div id="accordion">
                    <ul class="p-0 m-0 mt-3 side-menu">
                        <li class="px-3 side-menu-item"><a href="{{ route('dashboard')}}" class="py-3 pl-4 w-100">Dashboard</a></li>

                        <li class="px-3 side-menu-item"><a href="{{ route('shop')}}" class="py-3 pl-4 w-100">Shop</a></li>

                        <li class="px-3 side-menu-item"><a href="{{ route('book')}}" class="py-3 pl-4 w-100">Book</a></li>


                    </ul>
                </div>
            </div>
            @endif

        </div>

        <!-- Main section -->
        <main class="bg-light main-full-body" style="background-color: #fff!important;">


            @if ($message = Session::get('success'))
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#modal').modal();
                });
            </script>
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content alert alert-card alert-success">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Successful!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>{{$message}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @elseif ($message = Session::get('error'))
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#error_modal').modal();
                });
            </script>
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content alert alert-card warning-danger">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Failed!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>{{$message}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- The navbar -->
            <nav class="py-3 navbar navbar-expand navbar-light bg-light" style="background-color: #fff!important;">
                <p class="pb-0 mb-0 navbar-brand">
                    <span></span>
                    <span></span>
                    <span></span>
                </p>



                <a href="{{ url()->previous() }}" class="m-2 btn btn-outline-primary" style="font-size:150%;color:#fff;"><i class="fa fa-chevron-circle-left" aria-hidden="true" style="color: #000;"></i> Back</a>

                <!-- Navbar right menu section -->
                <div class="flex-row ml-auto navb-menu d-flex">
                    <!-- Profile action dropdown -->
                    <div class="mx-2 text-center dropdown dropdown-arow-none d-contents">
                        <!-- Icon -->
                        <a href="#" class="w-100 dropdown-toggle text-muted" data-toggle="dropdown">
                            <img src="{{ asset('icon/user.png') }}" alt="profile" style="height:40px; width:40px;" data-toggle="tooltip" data-placement="left" title="Profile">
                        </a>
                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-max-height">
                            <!-- Menu items -->

                            <a href="#" class="dropdown-item disabled small"><i class="mr-1 far fa-user"></i>{{explode(' ',trim(ucwords(strtolower((Auth::user()->name)))))[0]}} </a>

                            <a class="dropdown-item text-secondary-light" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

            @yield('content')

    </div>


    <script src="{{ asset('qbadminui/js/vendor/bootstrap-4.3.1/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('qbadminui/js/vendor/jquery-3.3.1/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('qbadminui/js/vendor/popper-js/popper1.14.7.js') }}"></script>
    <script src="{{ asset('qbadminui/js/vendor/bootstrap-4.3.1/bootstrap.min.js') }}"></script>
    <!-- eChart -->
    <script src="{{ asset('qbadminui/js/vendor/eChart/echarts.min.js') }}"></script>
    <script src="{{ asset('qbadminui/js/vendor/eChart/echarts.option.min.js') }}"></script>
    <!-- eChart script -->
    <script src="{{ asset('qbadminui/js/plugins/echart_drw.js') }}"></script>
    <script src="{{ asset('qbadminui/js/plugins.js') }}"></script>
    <script src="{{ asset('qbadminui/js/main.js') }}"></script>
    <!-- Data Table -->
    <script src="{{ asset('qbadminui/js/vendor/DataTable-1.10.20/datatables.min.js') }}"></script>
    <!-- Data Table script -->
    <script src="{{ asset('qbadminui/js/plugins/dataTable_script.js') }}"></script>

</body>

</html>
<script type="text/javascript">
    $("document").ready(function() {
        setTimeout(function() {
            $("div.alert").remove();
        }, 5000); // 5 secs

    });
</script>