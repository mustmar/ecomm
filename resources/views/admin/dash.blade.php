<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Mustore')</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="Frontend/admin/css/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="Frontend/admin/css/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="Frontend/admin/css/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="Frontend/admin/css/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="Frontend/admin/css/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="Frontend/admin/css/css/style.css">
    <!-- End layout styles -->



</head>
<body>
    <div class="container-scroller">

        <div class="container-fluid page-body-wrapper">

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                <li class="nav-item nav-profile">
                    <a  class="nav-link">
                    <div class="profile-image">
                        <img class="img-xs rounded-circle" src="Frontend/admin/css/images/faces/face8.jpg" alt="profile image">
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{Auth::user()->name}}</p>

                            @if (Auth::user()->role==1)
                            <p class="designation">Administrator</p>
                            @else
                            <p class="designation">Normaluser</p>
                            @endif



                    </div>
                    <div class="icon-container">
                        <i class="icon-bubbles"></i>
                        <div class="dot-indicator bg-danger"></div>
                    </div>
                    </a>
                </li>
                @if (Auth::user()->role==0)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('userpage')}}">
                        <span class="menu-title">MyProfile</span>
                        <i class="icon-screen-desktop menu-icon"></i>
                        </a>
                    </li>
                    @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/dashboard')}}">
                        <span class="menu-title">MyProfile</span>
                        <i class="icon-screen-desktop menu-icon"></i>
                        </a>
                    </li>


                @endif

                <li class="nav-item nav-category">
                    <span class="nav-link">Categories</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('category.all')}}">
                    <span class="menu-title">AllCategory</span>
                    <i class="icon-screen-desktop menu-icon"></i>
                    </a>
                </li>
                @if (Auth::user()->role==1)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('category.create')}}">
                        <span class="menu-title">Create New</span>
                        <i class="icon-screen-desktop menu-icon"></i>
                        </a>
                    </li>


                @endif
                @if (Auth::user()->role==1)
                    <li class="nav-item nav-category"><span class="nav-link">Users</span></li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="{{route('user.all')}}" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-title">AllUsers</span>
                        <i class="icon-layers menu-icon"></i>
                        </a>

                    </li>
                @endif
                <li class="nav-item nav-category"><span class="nav-link">Paysection</span></li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="{{route('cart.all')}}" aria-expanded="false" aria-controls="auth">
                    <span class="menu-title">Mycart</span>
                    <i class="icon-doc menu-icon"></i>
                    </a>

                </li>
                <li class="nav-item nav-category"><span class="nav-link">Products</span></li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="{{route('product.all')}}" aria-expanded="false" aria-controls="auth">
                    <span class="menu-title">AllProducts</span>
                    <i class="icon-doc menu-icon"></i>
                    </a>

                </li>
                @if (Auth::user()->role==1)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('product.create')}}">
                        <span class="menu-title">Create New</span>
                        <i class="icon-grid menu-icon"></i>
                        </a>
                    </li>
                @endif
               
                <li class="nav-item nav-category"><span class="nav-link">Setting</span></li>
                <li class="nav-item">


                    <a   class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">

                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>


                </li>
                </ul>


            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">


                     @yield('content')

                    </div>

                </div>
            </div>
        </div>



    </div>
</body>



