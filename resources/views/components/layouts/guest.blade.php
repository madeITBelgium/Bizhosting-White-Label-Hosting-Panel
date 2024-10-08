<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" type="image/x-icon" href="/assets/logo-square.png">

        <!-- Styles -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="/assets/logo-white.svg" style="width: 200px; height: 50px" alt="Hosting Expert"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-lg-5">
                        <li class="nav-item"><a class="nav-link" href="/">{{ __('Home') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home.webhosting') }}">{{ __('Webhosting') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home.domainname') }}">{{ __('Domainname') }}</a></li>
                    </ul>
                    <a class="btn btn-outline-success" href="/login">{{ __('Login') }}</a>
                    <a class="btn btn-success ms-lg-4" href="/register">{{ __('Create account') }} <i class="ms-2 mt-1" data-feather="arrow-right"></i></a>
                </div>
            </div>
        </nav>
        
        <div class="flex-grow">

            {{ $slot }}
        
        </div>
        <footer class="footer mt-auto footer-dark text-white container-fluid">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="/assets/logo-white.svg" style="width: 300px; height: 100px" alt="Hosting Expert">
                        
                        <p class="my-3">De expert als het gaat om webhosting.</p>
                        {{--
                        <div class="icon-list-social mb-5">
                            <a class="icon-list-social-link" href="#!"><i class="fab fa-instagram"></i></a>
                            <a class="icon-list-social-link" href="#!"><i class="fab fa-facebook"></i></a>
                            <a class="icon-list-social-link" href="#!"><i class="fab fa-github"></i></a>
                            <a class="icon-list-social-link" href="#!"><i class="fab fa-twitter"></i></a>
                        </div>
                        --}}
                    </div>
                    <div class="col-lg-7 ms-auto">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="{{ route('home.webhosting') }}">{{ __('Webhosting') }}</a></li>
                                    <li class="mb-2"><a href="{{ route('home.domainname') }}">{{ __('Domainname') }}</a></li>
                                </ul>
                            </div>
                            <div class="col-lg">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="{{ route('home.faq') }}">{{ __('F.A.Q.') }}</a></li>
                                    <li class="mb-2"><a href="{{ route('home.contact') }}">{{ __('Contact') }}</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-5">
                                <div class="text-uppercase-expanded text-xs h5 mb-4">Hosting Expert</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2">
                                        Schransdijk 7A<br>
                                        2440 Geel<br>
                                        België<br>
                                        <br>
                                        <a href="mailto:info@hostingexpert.be">info@hostingexpert.be</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-white text-dark text-center align-items-center">
                <div class="col-12 small">
                    {{ __('Copyright') }} &#xA9; {{ date('Y') }} • {{ config('app.name') }} • Made with <i class="fas fa-heart text-danger"></i> in Geel, Belgium • <a href="/privacy-policy" class="text-dark">{{ __('Privacy Policy') }}</a>&nbsp;•&nbsp;<a href="/terms-of-service" class="text-dark">{{ __('Terms & Conditions') }}</a>
                </div>
            </div>
        </footer>

        @stack('modals')
        @livewireScripts
        @stack('scripts')
        
        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '296396744186752');
          fbq('track', 'PageView');
        </script>
        <noscript>
          <img height="1" width="1" style="display:none" 
               src="https://www.facebook.com/tr?id=296396744186752&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
    </body>
</html>