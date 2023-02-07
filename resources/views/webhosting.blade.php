<x-guest-layout>
    <!-- Page Header-->
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-5 my-5 py-5">
                <h1>
                    Hosting pakketten
                </h1>
                <p>
                    Hosting Expert biedt verschillende hosting pakketten aan. Zo is er voor ieder wat wils.
                </p>
                <a href="/contact" class="text-success">Niet gevonden wat je zocht? Contacteer ons en we helpen je verder! <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="col-12 col-md-6 my-5 py-5 ms-auto">
                <div class="row mb-3">
                    <div class="col-3">
                        <img src="/assets/webhosting.svg" class="img-fluid" alt="Snelle webhosting">
                    </div>
                    <div class="col-8 ms-auto">
                        <h3>Super snelle SSD Hosting</h3>
                        <p>Heb jij het verschil al gemerkt als er een SSD in je laptop zit in plaats van een gewone hardeschijf? Je laptop gaat weer vliegensvlug. Onze servers zijn uitgerust met de snelste SSD schijven om je website nog sneller te laden!</p>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-3">
                        <img src="/assets/enterprise.svg" class="img-fluid" alt="Geoptimaliseerde servers">
                    </div>
                    <div class="col-8 ms-auto">
                        <h3>Geoptimaliseerd voor jouw website</h3>
                        <p>Is jouw webiste gebouwd in WordPress, Laravel of Drupal? Onze servers zijn dan speciaal opgezet voor jouw. Met de juiste en geoptimaliseerde instellingen maken we jouw website nog beter.</p>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-3">
                        <img src="/assets/managed-service.svg" class="img-fluid" alt="Geoptimaliseerde servers">
                    </div>
                    <div class="col-8 ms-auto">
                        <h3>Eenvoudig beheer paneel</h3>
                        <p>Door ons eenvoudig beheer paneel kan je alles voor je domeinnaam en webhosting vanop 2 locaties wijzigen, via onze website of onze app. Alles op 1 plaats, simpel en snel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row mb-5">
            <div class="pricing-tables attached">
                <h2 class="text-center">Hosting pakketten</h2>
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
                                    <li><span class="d-md-none">{{ $hostingPackage['subdomains'] }} subdomeinen</span><span class="d-none d-md-block">{{ $hostingPackage['subdomains'] }}</span></li>
                                    <li><span class="d-md-none">{{ $hostingPackage['mailaccounts'] }} e-mail accounts</span><span class="d-none d-md-block">{{ $hostingPackage['mailaccounts'] }}</span></li>
                                    <li><span class="d-md-none">{{ $hostingPackage['databases'] }} databases</span><span class="d-none d-md-block">{{ $hostingPackage['databases'] }}</span></li>
                                    @if($hostingPackage['include_domainname'])
                                        <li class="d-md-none"><i class="fas fa-check text-success"></i></li>
                                        <li class="d-none d-md-block"><i class="fas fa-check text-success"></i></li>
                                    @else
                                        <li class="d-md-none"><i class="fas fa-times text-danger"></i></li>
                                        <li class="d-none d-md-block"><i class="fas fa-times text-danger"></i></li>
                                    @endif

                                    <li class="d-md-none"><i class="fas fa-check text-success"></i></li>
                                    <li class="d-none d-md-block"><i class="fas fa-check text-success"></i></li>

                                </ul>
                                <div class="price">
                                    <p class="h3">
                                        <span class="symbol">€</span>
                                        <span class="price-manage">{{ number_format($hostingPackage['price'], 2, ",", "") }}</span>
                                    </p>
                                    <p class="h4">Per maand</p>
                                    <p>Excl. BTW - €{{ number_format($hostingPackage['price'] * 1.21, 2, ",", "") }} Incl. BTW</p>
                                </div>
                                <a href="/register" class="btn btn-primary madeit-offerte-button">Neem hosting</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        * Managed webhosting is een technische ondersteuning waar wij zorgen voor updates, de snelheid van je website, ...<br>
                        - Elk hosting pakket wordt dagelijks gebackupt <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="pricing-tables attached">
                <h2 class="text-center">Hosting pakketten</h2>
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
                                <li>Managed</li>
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

                                    @if($hostingPackage['managed'])
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
                <div class="row">
                    <div class="col-12 text-center">
                        * Managed webhosting is een technische ondersteuning waar wij zorgen voor updates, de snelheid van je website, ...<br>
                        - Elk hosting pakket wordt dagelijks gebackupt <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
 </x-guest-layout>
