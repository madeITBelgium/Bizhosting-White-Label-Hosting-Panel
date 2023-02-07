<x-guest-layout>
    <!-- Page Header-->
    <div class="container-fluid home-gradient">
        <div class="container">
            <div class="row my-5 pt-5">
                <div class="col-12 col-md-7 align-self-center">
                    <h1 style="font-size: 3rem">De hosting die je zoekt vind je bij <strong>Hosting Expert</strong></h1>
                    <h2 class="my-4 h4">Hosting Expert is de perfecte keuze wanneer je opzoek bent naar <strong>moderne webhosting</strong> met uitstekende kwaliteit.</h2>
                </div>
                <div class="col-12 col-md-5 mt-5 pt-5">
                    <img src="/assets/hosting-expert.png" alt="Hosting Expert" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5 py-5">
            <div class="col">
                <h3 class="text-center">Alles start met een goede domeinnaam, is jou domeinnaam nog vrij?</h3>
                <div class="card shadow">
                    <div class="card-body">
                        @livewire('public-domainname-check')
                        <div class="d-flex justify-content-around text-primary">
                            @foreach(\MadeITBelgium\Hosting\Models\Topleveldomain::whereIn('name', ['.be', '.nl', '.com', '.fr', '.eu', '.net', '.vlaanderen'])->get() as $tld)
                                <div>{{ $tld->name }} • €{{ number_format($tld->sell_price * 1.21, 2, ",", ".") }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-5 py-5">
        <div class="row justify-content-between">
            <div class="col col-md-4 mb-5 col-lg-3">
                <div class="card h-100 border-top-gradient">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <img src="/assets/webhosting.svg" class="w-50 mx-auto" alt="Webhosting">
                        <h3 class="my-4 text-center">Webhosting</h3>
                        <p class="text-center">
                            Hosting Expert is jou betrouwbare en flexibele hosting partner. Door onze eenvoudige pakketten kan je snel starten met het online plaatsen van je website. Indien gewenst helpen we je bij een verhuis.
                        </p>
                        <a href="{{ route('home.webhosting') }}" class="btn btn-success stretched-link">Bekijk onze webhosting</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 mb-5 col-lg-3">
                <div class="card h-100 border-top-gradient">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <img src="/assets/enterprise.svg" class="w-50 mx-auto" alt="Enterprise">
                        <h3 class="my-4 text-center">Enterprise</h3>
                        <p class="text-center">
                            Van basis e-mail service tot uigebreide Office 365 integraties. Wij ontzorgen jouw IT enterprise omgeving.
                        </p>
                        <a href="{{ route('home.webhosting') }}" class="btn btn-success stretched-link">Bekijk onze oplossingen</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 mb-5 col-lg-3">
                <div class="card h-100 border-top-gradient">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <img src="/assets/managed-service.svg" class="w-50 mx-auto" alt="Managed Services">
                        <h3 class="my-4 text-center">Managed Services</h3>
                        <p class="text-center">
                        Wij zorgen voor het technische onderhoud van je WordPress websites of servers.
                        </p>
                        <a href="{{ route('home.webhosting') }}" class="btn btn-success stretched-link">Bekijk onze oplossingen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid gradient-cone py-5 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img src="/assets/img.png" alt="" class="w-75">
                </div>
                <div class="col-12 col-md-5  my-5 py-5 text-white">
                    <h3>Start nu je hosting!</h3>
                    <p>Maak kennis met ons uniek controle paneel en features door een gratis account aan te maken!</p>
                    <a href="/register" class="btn btn-success">Gratis account aanmaken</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>Alles start met een goede domeinnaam</h3>
                <p>Bij Hosting Expert heb je keuze uit meer dan 1.500 domeinnaam extensies. Hiermee zijn we bij één grootste domeinnaam aanbieders en ben je zeker van jouw bijpassende naam!</p>
                <a href="" class="text-success">Jouw domeinnaam kopen? Controlleer de beschikbaarheid! <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="row my-3 py-3">
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        @livewire('public-domainname-check')
                        <div class="d-flex justify-content-around text-primary">
                            @foreach(\MadeITBelgium\Hosting\Models\Topleveldomain::whereIn('name', ['.be', '.nl', '.com', '.fr', '.eu', '.net', '.vlaanderen'])->get() as $tld)
                                <div>{{ $tld->name }} • €{{ number_format($tld->sell_price * 1.21, 2, ",", ".") }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container">
        <div class="row my-5 py-5">
            <div class="pricing-tables attached">
                <h2 class="text-center">Webhosting</h2>
                <p>
                    Onze shared webhosting pakketten zijn zeer uitgebreid en flexibel. Op deze manier bieden we de beste kwaliteit webhosting voor een zeer scherpe prijs.
                </p>
                <div class="row mt-3 mb-4">
                    <div class="col-sm-3 d-none d-md-block">
                        <div class="plan first">
                            <div class="head">
                                <h2>&nbsp;</h2>
                            </div>
                            <ul class="item-list">
                                <li>Opslag</li>
                                <li>Sub domeinen</li>
                                <li>E-mail accounts</li>
                                <li>Databases</li>
                                <li>Inclusief domeinnaam</li>
                                <li>SSH toegang</li>
                            </ul>
                            <div class="price">
                                <br><br><br>
                            </div>
                        </div>
                    </div>
                    @foreach(collect(config('hosting.hosting_packages'))->where('public', true)->where('managed', false)->all() as $hostingPackage)
                        <div class="col-sm-3">
                            <div class="plan">
                                <div class="head">
                                    <h2>{{ $hostingPackage['name'] }}</h2>
                                </div>
                                <ul class="item-list">
                                    <li><span class="d-md-none">{{ $hostingPackage['diskspace'] }} MB opslag ruimte</span><span class="d-none d-md-block">{{ $hostingPackage['diskspace'] }} MB</span></li>
                                    <li><span class="d-md-none">{{ $hostingPackage['subdomains'] }} subdomeinen</span><span class="d-none d-md-block">{{ $hostingPackage['subdomains'] }} <i data-placement="bottom" data-toggle="tooltip" title="Je kan {{ $hostingPackage['subdomains'] }} subdomeinen aanmaken in dit pakket." class="far fa-question-circle"></i></span></li>
                                    <li><span class="d-md-none">{{ $hostingPackage['mailaccounts'] }} e-mail accounts</span><span class="d-none d-md-block">{{ $hostingPackage['mailaccounts'] }} <i data-placement="bottom" data-toggle="tooltip" title="Aantal te koppelen domeinnamen in dit pakket." class="far fa-question-circle"></i></span></li>
                                    <li><span class="d-md-none">{{ $hostingPackage['databases'] }} databases</span><span class="d-none d-md-block">{{ $hostingPackage['databases'] }} <i data-placement="bottom" data-toggle="tooltip" title="Je kan {{ $hostingPackage['databases'] }} databases aanmaken." class="far fa-question-circle"></i></span></li>
                                    @if($hostingPackage['include_domainname'])
                                        <li class="d-md-none"><i class="fas fa-check text-success"></i></li>
                                        <li class="d-none d-md-block"><i class="fas fa-check text-success"></i></li>
                                    @else
                                        <li class="d-md-none"><i class="fas fa-times text-danger"></i></li>
                                        <li class="d-none d-md-block"><i class="fas fa-times text-danger"></i></li>
                                    @endif
                                    <li class="d-md-none"><i class="fas fa-check text-success"></i></li>
                                    <li class="d-none d-md-block"><i class="fas fa-check text-success"></i><i data-placement="bottom" data-toggle="tooltip" title="Via SSH kan je commando's uitvoeren en dus gebruik maken van composer, git, npm, ..." class="far fa-question-circle"></i></li>
                                </ul>
                                <div class="price">
                                    <p class="h3">
                                        <span class="symbol">€</span>
                                        <span class="price-manage">{{ number_format($hostingPackage['price'], 2, ",", "") }}</span>
                                    </p>
                                    <p class="h4">Per maand</p>
                                    <p data-toggle="tooltip" data-placement="bottom" class="h5" title="Natuurlijke personen en belgische bedrijven dienen 21% BTW te betalen. De prijs inclusief BTW is €{{ number_format($hostingPackage['price'] * 1.21, 2, ",", "") }}">Excl. BTW - €{{ number_format($hostingPackage['price'] * 1.21, 2, ",", "") }} Incl. BTW</p>
                                </div>
                                <a href="/register" class="btn btn-primary madeit-offerte-button">Neem hosting</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row my-5 py-5">
            <div class="pricing-tables attached">
                <h2 class="text-center">Managed WordPress Hosting</h2>
                <div class="row mt-3 mb-4">
                    <div class="col-sm-3 d-none d-md-block">
                        <div class="plan first">
                            <div class="head">
                                <h2>&nbsp;</h2>
                            </div>
                            <ul class="item-list">
                                <li>Opslag</li>
                                <li>Sub domeinen</li>
                                <li>E-mail accounts</li>
                                <li>Databases</li>
                                <li>Inclusief domeinnaam</li>
                                <li>SSH toegang</li>
                            </ul>
                            <div class="price">
                                <br><br><br>
                            </div>
                        </div>
                    </div>
                    @foreach(collect(config('hosting.hosting_packages'))->where('public', true)->where('managed', true)->all() as $hostingPackage)
                        <div class="col-sm-3">
                            <div class="plan">
                                <div class="head">
                                    <h2>{{ $hostingPackage['name'] }}</h2>
                                </div>
                                <ul class="item-list">
                                    <li><span class="d-md-none">{{ $hostingPackage['diskspace'] }} MB opslag ruimte</span><span class="d-none d-md-block">{{ $hostingPackage['diskspace'] }} MB</span></li>
                                    <li><span class="d-md-none">{{ $hostingPackage['subdomains'] }} subdomeinen</span><span class="d-none d-md-block">{{ $hostingPackage['subdomains'] }} <i data-placement="bottom" data-toggle="tooltip" title="Je kan {{ $hostingPackage['subdomains'] }} subdomeinen aanmaken in dit pakket." class="far fa-question-circle"></i></span></li>
                                    <li><span class="d-md-none">{{ $hostingPackage['mailaccounts'] }} e-mail accounts</span><span class="d-none d-md-block">{{ $hostingPackage['mailaccounts'] }} <i data-placement="bottom" data-toggle="tooltip" title="Aantal te koppelen domeinnamen in dit pakket." class="far fa-question-circle"></i></span></li>
                                    <li><span class="d-md-none">{{ $hostingPackage['databases'] }} databases</span><span class="d-none d-md-block">{{ $hostingPackage['databases'] }} <i data-placement="bottom" data-toggle="tooltip" title="Je kan {{ $hostingPackage['databases'] }} databases aanmaken." class="far fa-question-circle"></i></span></li>
                                    @if($hostingPackage['include_domainname'])
                                        <li class="d-md-none"><i class="fas fa-check text-success"></i></li>
                                        <li class="d-none d-md-block"><i class="fas fa-check text-success"></i></li>
                                    @else
                                        <li class="d-md-none"><i class="fas fa-times text-danger"></i></li>
                                        <li class="d-none d-md-block"><i class="fas fa-times text-danger"></i></li>
                                    @endif

                                    <li class="d-md-none"><i class="fas fa-check text-success"></i></li>
                                    <li class="d-none d-md-block"><i class="fas fa-check text-success"></i><i data-placement="bottom" data-toggle="tooltip" title="Via SSH kan je commando's uitvoeren en dus gebruik maken van composer, git, npm, ..." class="far fa-question-circle"></i></li>
                                </ul>
                                <div class="price">
                                    <p class="h3">
                                        <span class="symbol">€</span>
                                        <span class="price-manage">{{ number_format($hostingPackage['price'], 2, ",", "") }}</span>
                                    </p>
                                    <p class="h4">Per maand</p>
                                    <p data-toggle="tooltip" data-placement="bottom" class="h5" title="Natuurlijke personen en belgische bedrijven dienen 21% BTW te betalen. De prijs inclusief BTW is €{{ number_format($hostingPackage['price'] * 1.21, 2, ",", "") }}">Excl. BTW - €{{ number_format($hostingPackage['price'] * 1.21, 2, ",", "") }} Incl. BTW</p>
                                </div>
                                <a href="/register" class="btn btn-primary madeit-offerte-button">Neem hosting</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
 </x-guest-layout>
