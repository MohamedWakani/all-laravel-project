<?php
$lang = app()->getLocale() == "ar" ? '' : 'order-md-2';
$rtl = app()->getLocale() == "ar" ? 'css3' : 'css2';
?>
    

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css2/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{$rtl}}/style.css">
</head>
<body>
    <x-laravel-ui-adminlte::adminlte-layout>
        <div class="d-lg-flex half">
            <div class="bg order-1 {{$lang}}" style="background-image: url('education.jpeg');" id="background-image">
                <h3 class="bien">{{ __('private.bienvenue') }}</h3>
            </div>
            <div class="contents order-2 order-md-1" id="content">
                <div class="container">
                    <img class="wizara" src="wizara.webp" alt="">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7">
                            <h3 class="h3-ar">{{ __('private.signin') }}</h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur
                                adipisicing.</p>
                            <form method="post" action="{{ url('/login') }}">
                                @csrf
                                <div class="form-group first">
                                    <label class="label-ar" for="username">{{ __('private.email') }}</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        placeholder="{{ __('private.email') }}"
                                        class="form-control @error('email') is-invalid @enderror" id="username">
                                    @error('email')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group last mb-3">
                                    <label class="label-ar" for="password">{{ __('private.password') }}</label>
                                    <input type="password" name="password" placeholder="{{ __('private.password') }}"
                                        class="form-control @error('password') is-invalid @enderror" id="password">
                                    @error('password')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span
                                            class="caption">{{ __('private.remember') }}</span>
                                        <input type="checkbox" id="remember" class="agree-term" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="{{ route('password.request') }}"
                                            class="forgot-pass">{{ __('private.forgot') }}</a></span>

                                </div>
                                <a href="{{ route('register') }}"
                                    class="signup-image-link">{{ __('private.dontHave') }}</a>
                                <br><br>
                                <input type="submit" name="signin" id="signin" value="{{ __('private.signin2') }}"
                                    class="form-submit btn btn-block btn-primary">

                            </form><br><br>
                            <div class="language language-ar">
                                <a class="lang lang-fr" href="{{ route('languageConverter', 'fr') }}">{{__('private.frensh')}}</a>
                                <div class="line"></div>
                                <a class="lang lang-ar" href="{{ route('languageConverter', 'ar') }}">{{__('private.arabe')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-laravel-ui-adminlte::adminlte-layout>
</body>
</html>