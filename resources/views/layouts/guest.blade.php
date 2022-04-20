<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        @livewireStyles
    </head>
    <body>
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
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
        <footer class="footer pt-5 pb-5 mt-auto bg-primary footer-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-brand h3">{{ config('app.name') }}</div>
                        
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
                    <div class="col-lg-7 ml-auto">
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
                                    <li class="mb-2"><a href="{{ route('home.features') }}">{{ __('Features') }}</a></li>
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
                                        Sales: <a href="mailto:info@hostingexpert.be">info@hostingexpert.be</a><br>
                                        Support: <a href="mailto:support@hostingexpert.be">support@hostingexpert.be</a><br>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="small">
                        {{ __('Copyright') }} &#xA9; {{ date('Y') }} • {{ config('app.name') }} • Made with <i class="fas fa-heart text-danger"></i> in Geel, Belgium • <a href="/privacy-policy">{{ __('Privacy Policy') }}</a>&nbsp;•&nbsp;<a href="/terms-of-service">{{ __('Terms & Conditions') }}</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

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