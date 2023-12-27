{{-- 

    <!-- Font Icon -->
    <link rel="stylesheet" href="log/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="log/css/style.css">
    <script src="log/vendor/jquery/jquery.min.js"></script>
    <script src="log/js/main.js"></script>
    <style>
    .wizara{
        width: 400px;
        margin-left: 500px;

}
    </style>
<x-laravel-ui-adminlte::adminlte-layout>
   

    <div class="main">
       
        <!-- Sign up form -->
        <section class="signup">
            <div>
                <img class="wizara" src="wizara.webp" alt="">
            </div>
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">{{__('private.signUp')}}</h2>
                        <form  method="post" action="{{ route('register') }}" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name"
                                class=" @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                placeholder="{{__('private.fullName')}}"/>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input  type="email" name="email" value="{{ old('email') }}"
                                class=" @error('email') is-invalid @enderror" placeholder="{{__('private.email')}}"/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password"
                                class=" @error('password') is-invalid @enderror" placeholder="{{__('private.password')}}"/>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation"
                                placeholder="{{__('private.retypePassword')}}"/>

                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="terms" id="agreeTerms"  value="agree"/>
                                <label for="agreeTerms" class="label-agree-term">{{__('private.iAgreeToTheTerms')}}</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="{{__('private.submit')}}"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="log/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="{{ route('login') }}" class="signup-image-link">{{__('private.ialreadyHaveAnAccount')}}</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-laravel-ui-adminlte::adminlte-layout>
 --}}

<?php
$lang = app()->getLocale() == 'ar' ? '' : 'order-md-2';
$rtl = app()->getLocale() == 'ar' ? 'css3' : 'css2';
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
    <link rel="stylesheet" href="{{ $rtl }}/style.css">
</head>

<body>
    <x-laravel-ui-adminlte::adminlte-layout>
        <div class="d-lg-flex half">
            <div class="bg order-1 {{ $lang }}" style="background-image: url('education.jpeg');"
                id="background-image">
                <h3 class="bien">{{ __('private.bienvenue') }}</h3>
            </div>
            <div class="contents order-2 order-md-1" id="content">
                <div class="container">
                    <img class="wizara" src="wizara.webp" alt=""><br><br><br>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7">
                            <h3 class="h3-ar">{{ __('private.signUp') }}</h3>
                            <br><br>
                            <form method="post" action="{{ route('register') }}" class="register-form"
                                id="register-form">
                                @csrf
                                <div class="form-group first">
                                    <label class="label-ar" for="username">{{ __('private.fullName') }}</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" placeholder="{{ __('private.fullName') }}">
                                    @error('name')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
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
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="{{ __('private.password') }}" id="password">
                                    @error('password')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group last mb-3">
                                    <label class="label-ar" for="re-pass">{{ __('private.retypePassword') }}</label>
                                    <input type="password" name="password_confirmation"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="{{ __('private.retypePassword') }}" id="re-pass">

                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="terms" id="agreeTerms" value="agree" />
                                    <label for="agreeTerms"
                                        class=" label-agree-term">{{ __('private.iAgreeToTheTerms') }}</label>
                                </div>


                                <a href="{{ route('login') }}"
                                    class="signup-image-link">{{ __('private.ialreadyHaveAnAccount') }}</a>

                                <br><br>
                                <input type="submit" name="signin" id="signin" value="{{ __('private.signin2') }}"
                                    class="form-submit btn btn-block btn-primary">

                            </form><br><br>
                            <div class="language language-ar">
                                <a class="lang lang-fr"
                                    href="{{ route('languageConverter', 'fr') }}">{{ __('private.frensh') }}</a>
                                <div class="line"></div>
                                <a class="lang lang-ar"
                                    href="{{ route('languageConverter', 'ar') }}">{{ __('private.arabe') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-laravel-ui-adminlte::adminlte-layout>
</body>

</html>
