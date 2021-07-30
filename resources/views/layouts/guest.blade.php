<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @livewireStyles
    </head>
    <body>
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-lg-5">
                        <li class="nav-item"><a class="nav-link" href="/">{{ __('Home') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home.webhosting') }}">{{ __('Webhosting') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home.domainname') }}">{{ __('Domainname') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home.features') }}">{{ __('Features') }}</a></li>
                    </ul>
                    <a class="btn btn-outline-success" href="/login">{{ __('Login') }}</a>
                    <a class="btn btn-success ml-lg-4" href="/register">{{ __('Create account') }} <i class="ml-2 mt-1" data-feather="arrow-right"></i></a>
                </div>
            </div>
        </nav>
        
        <div class="flex-grow">

            {{ $slot }}
        
        </div>
        <hr class="m-0" />
        <footer class="footer pt-5 pb-5 mt-auto bg-white footer-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer-brand h3">{{ config('app.name') }}</div>
                        
                        <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        
                        <div class="icon-list-social mb-5">
                            <a class="icon-list-social-link" href="#!"><i class="fab fa-instagram"></i></a>
                            <a class="icon-list-social-link" href="#!"><i class="fab fa-facebook"></i></a>
                            <a class="icon-list-social-link" href="#!"><i class="fab fa-github"></i></a>
                            <a class="icon-list-social-link" href="#!"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="ml-auto col-lg-5 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs h5 mb-4">{{ __('General') }}</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="{{ route('home.webhosting') }}">{{ __('Webhosting') }}</a></li>
                                    <li class="mb-2"><a href="{{ route('home.domainname') }}">{{ __('Domainname') }}</a></li>
                                    <li class="mb-2"><a href="{{ route('home.faq') }}">{{ __('F.A.Q.') }}</a></li>
                                    <li class="mb-2"><a href="{{ route('home.features') }}">{{ __('Features') }}</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs h5 mb-4">{{ __('About us') }}</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="https://www.bizhosting.be">{{ __('Website') }}</a></li>
                                    <li class="mb-2"><a href="{{ route('home.contact') }}">{{ __('Contact') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-5" />
                <div class="row align-items-center">
                    <div class="col-md-6 small">{{ __('Copyright') }} &#xA9; {{ date('Y') }} • {{ config('app.name') }}</div>
                    <div class="col-md-6 text-md-right small">
                        <a href="/privacy-policy">{{ __('Privacy Policy') }}</a>
                        &#xB7;
                        <a href="/terms-of-service">{{ __('Terms & Conditions') }}</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>