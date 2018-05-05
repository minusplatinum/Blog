<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>

    <title>{{ config('app.name', 'RDS Web Design') }}</title>
    
    <!-- Fonts -->
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/aos/dist/aos.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-5">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">RDS Web Design</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item {{ Request::is('packages*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('packages') }}">Packages</a></li>
                    <li class="nav-item {{ Request::is('templates*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('templates') }}">Templates</a></li>
                    <li class="nav-item {{ Request::is('contact*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                    @guest<li class="d-lg-none d-xl-none nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>@endguest
                </ul>
                @guest
                
                <form class="d-none d-lg-block" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div id="loginNav" class="form-group row my-0">
                        <div class="form-group mb-0">
                            <label for="email" class="text-white">Email</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group my-0 ml-1">
                            <label for="password" class="text-white">Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>                    
                            <a class="btn btn-link text-white" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group mt-2 ml-1 d-flex align-items-center">
                            <button type="submit" class="px-3 btn btn-success">
                                {{ __('Login') }}
                            </button>
                        </div>  
                    </div>
                </form>
            
                <!-- Right Side Of Navbar -->
                @else
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ url('/home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> {{ Auth::user()->fName }} <span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main>
    @include('alerts.messages')
    @yield('content')
    </main>

    <div class="container-fluid py-4 navbar-dark bg-primary">
        <hr class="mx-5">
        <div class="d-flex flex-column justify-content-around flex-md-row">
            <div class="text-center">
                <h4 class="text-white">Services</h4>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="packages#webApp">Website Applications</a></li>
                    <li class="nav-item"><a class="nav-link" href="packages#multiPage">Ecommerce Websites</a></li>
                    <li class="nav-item"><a class="nav-link" href="packages#singlePage">Responsive Design</a></li>
                    <li class="nav-item"><a class="nav-link" href="packages#multiPage">Website Redesign</a></li>
                    <li class="nav-item"><a class="nav-link" href="packages#multiPage">CMS Websites</a></li>
                </ul>
            </div>
            <div class="text-center">
                <h4 class="text-white">Resources</h4>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="https://getbootstrap.com/" target="_blank">Bootstrap Framework</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://laravel.com/" target="_blank">Laravel Framework</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://wordpress.com/" target="_blank">WordPress CMS</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://stripe.com/ca" target="_blank">Stripe Payments</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://jquery.com/" target="_blank">jQuery Libraries</a></li>
                </ul>
            </div>
            <div class="text-center">
                <h4 class="text-white">Company</h4>
                <ul class="navbar-nav">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item {{ Request::is('packages*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/packages') }}">Packages</a></li>
                    <li class="nav-item {{ Request::is('templates*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/templates') }}">Templates</a></li>
                    <li class="nav-item {{ Request::is('contact*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
                    @guest<li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @else
                <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">{{ Auth::user()->fName }} {{ Auth::user()->lName }}</a></li>
                    @endguest
                </ul>
            </div>
        </div>

        <hr class="mx-5">
        <div class="row d-flex justify-content-center">
            <div class="">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a class="text-white" href="https://www.facebook.com"><i class="fab fa-facebook fa-3x"></i></a></li>
                    <li class="list-inline-item"><a class="text-white" href="https://www.twitter.com"><i class="fab fa-twitter fa-3x"></i></a></li>
                    <li class="list-inline-item"><a class="text-white" href="https://www.instagram.com"><i class="fab fa-instagram fa-3x"></i></a></li>
                    <li class="list-inline-item"><a class="text-white" href="https://plus.google.com/"><i class="fab fa-google-plus fa-3x"></i></a></li>
                    <li class="list-inline-item"><a class="text-white" href="contact" target="_blank"><i class="fa fa-envelope fa-3x"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="">
                <p class="h6">&copy; 2018 All right Reversed.<a class="ml-2 text-dark" href="{{ url('/') }}" target="_blank">RDS Web Design</a></p>
            </div>
        </div>

    </div>
   
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/scrolling-nav.js') }}"></script>
<script src="{{ asset('vendor/aos/dist/aos.js') }}"></script>
<script>
    AOS.init();
    $(function() {
        $('#package_id').change(function(){
            $('.packages').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>
</body>
</html>
