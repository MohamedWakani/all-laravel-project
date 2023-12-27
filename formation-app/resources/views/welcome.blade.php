<?php
$lang = app()->getLocale() == "ar" ? '' : 'order-md-2';
$rtl = app()->getLocale() == "ar" ? 'css3' : 'css2';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation</title>
    <link rel="stylesheet" href="bootstrapCdn.min.css">



    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">



    <!-- Style RTL and LTR -->
    <link rel="stylesheet" href="{{$rtl}}/style.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <style>
                .bgbg{
            margin: 0;
            padding: 0;
            background-image: url('img/bgbg.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .bg-title{
            text-align: center;
            font-size: 36px;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
             }
    </style>
</head>

<body class="rtl">
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/home" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>F-ormation</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/home" class="nav-item nav-link active">{{ __('private.accueil') }}</a>
                <a href="/" class="nav-item nav-link">{{ __('private.formation') }}</a>
                <a href="beneficiaire" class="nav-item nav-link">{{ __('private.beneficiaire') }}</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown">{{ __('private.langue') }}</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a class="dropdown-item" href="{{ route('languageConverter', 'fr') }}">{{__('private.frensh')}}</a>
                        <a class="dropdown-item" href="{{ route('languageConverter', 'ar') }}"
                            onclick="rtl()">{{__('private.arabe')}}</a>
                        {{-- <a class="dropdown-item" href="{{ route('languageConverter', 'en') }}">English</a> --}}
                    </div>
                </div>

            </div>
            @if (Route::has('login'))
                <div class="login sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 d-none">{{ __('private.login') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">{{ __('private.signUp') }}<i
                                    class="fa fa-arrow-right ms-3"></i></a>
                        @endif
                    @endauth

                </div>
            @endif

            @auth
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="#" class="dropdown-item btn-default btn-flat float-right"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Log out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>



</html>








