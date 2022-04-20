<x-guest-layout>
    <!-- Page Header-->
    <div class="container-fluid" style="background-image: url('/assets/hostingexpert-cover@2x.jpg'); background-repeat: no-repeat; background-size: 100%;">
        <div class="container">
            <div class="row text-white my-5 py-5">
                <div class="col-12 col-md-6 my-5 py-5">
                    <h1>Hosting Expert</h1>
                    <h2 class="my-4 h6">Hosting Expert is de perfecte keuze wanneer je opzoek bent naar moderne hosting met uitstekende kwaliteit.</h2>
                    <a href="" class="btn btn-warning">Bekijk onze diensten</a>
                    <a href="" class="btn btn-success ml-3">Start nu!</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container my-5 py-5">
        <div class="row justify-content-between">
            <div class="col col-md-4 col-lg-3">
                <div class="card bg-primary text-white h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h3 class="mb-0">Webhosting</h3>
                        <p class="mb-0">
                            Uitgebreid aanbod aan domeinnamen en webhosting.
                        </p>
                        <a href="{{ route('home.webhosting') }}" class="btn text-white ml-auto stretched-link"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 col-lg-3">
                <div class="card bg-primary text-white h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h3 class="mb-0">Enterprise</h3>
                        <p class="mb-0">
                            Van basis e-mail service tot uigebreide Office 365 integraties. Wij ontzorgen jouw IT enterprise omgeving.
                        </p>
                        <a href="" class="btn text-white ml-auto stretched-link"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 col-lg-3">
                <div class="card bg-primary text-white h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h3 class="mb-0">Managed Services</h3>
                        <p class="mb-0">
                            Wij zorgen voor het technische onderhoud van je WordPress websites of servers.
                        </p>
                        <a href="" class="btn text-white ml-auto stretched-link"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid bg-primary">
        <div class="containr my-5 py-5">
            <div class="row">
                <div class="col text-center text-white">
                    <h3>Hosting Expert</h3>
                    <p>Betrouwbaar en flexibel hosting voor iedereen.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row my-5 py-5 justify-content-between">
            <div class="col col-md-3 order-md-last">
                <img src="/assets/hostingexpert-webhosting@2x.jpg" class="w-100" alt="Webhosting">
            </div>
            <div class="col col-md-8 d-flex flex-column justify-content-between">
                <h2>Webhosting</h2>
                <p>Hosting Expert is de betrouwbaar en flexibel. Door onze eigen servers en software zijn we een betrouwbare hostingpartner. Door onze eenvoudige pakketten kan je snel starten met het online plaatsen van je website. Indien gewenst helpen we je bij een verhuis.</p>
                <a href="{{ route('home.webhosting') }}" class="btn btn-success mx-auto">Bekijk onze webhosting</a>
            </div>
        </div>
        
        <div class="row my-5 py-5 justify-content-between">
            <div class="col col-md-3">
                <img src="/assets/hostingexpert-domeinnamen@2x.jpg" class="w-100" alt="Domeinnamen">
            </div>
            <div class="col col-md-8 d-flex flex-column justify-content-between">
                <h2>Domeinnamen</h2>
                <p>Met meer dan 1.500 domeinnaam extenties zijn we een van de grootste domeinnaam leveranciers. Je kan bij ons terecht voor bijna elke domeinnaam exentie. Ook voor enkel domeinnaam registratie kan je bij ons terecht, DNS services krijg je er dan gratis bij.</p>
                <a href="{{ route('home.domainname') }}" class="btn btn-success mx-auto">Bekijk onze domeinnamen</a>
            </div>
        </div>
        
        <div class="row my-5 py-5 justify-content-between">
            <div class="col col-md-3 order-md-last">
                <img src="/assets/hostingexpert-wordpress@2x.jpg" class="w-100" alt="Managed WordPress">
            </div>
            <div class="col col-md-8 d-flex flex-column justify-content-between">
                <h2>Managed WordPress</h2>
                <p>Wil jij enkel bezig zijn met waar jij goed in bent zoals websites maken? Dan zorgen wij dat jij je geen zorgen moeten maken over het onderhoud, updates en snelheid van je website. Wij nemen de belangrijke technische taken van je over.</p>
                <a href="{{ route('home.webhosting') }}" class="btn btn-success mx-auto">Bekijk onze managed services</a>
            </div>
        </div>
    </div>
    
    <div class="container-fluid bg-primary">
        <div class="containr my-5 py-5">
            <div class="row">
                <div class="col text-center text-white">
                    <p class="h2">Start nu!</p>
                    <p>Maak kennis met ons unieke features, diensten en controle paneel.</p>
                    <a href="/dashboard" class="btn btn-warning">Ga naar het controle paneel</a>
                    <a href="/login" class="ml-3 btn btn-success">Contacteer ons</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row my-5 py-5">
            <div class="col">
                <h3 class="text-center">Domeinnamen</h3>
                <p>Bij Hosting Expert heb je keuze uit meer dan 1.500 domeinnaam extensies. Hiermee zijn we bij één grootste domeinnaam aanbieders. Naast onze zeer voordelige prijzen bieden we ook gratis DNS services aan.</p>
                @livewire('public-domainname-check')
                <div class="d-flex justify-content-around text-primary">
                    @foreach(\MadeITBelgium\Hosting\Models\Topleveldomain::whereIn('name', ['.be', '.nl', '.com', '.fr', '.eu', '.net', '.vlaanderen'])->get() as $tld)
                        <div>{{ $tld->name }} • €{{ number_format($tld->sell_price, 2, ",", ".") }} <small>Excl. BTW</small> <small class="d-block">€{{ number_format($tld->sell_price * 1.21, 2, ",", ".") }} Incl. BTW</small></div>
                    @endforeach
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
