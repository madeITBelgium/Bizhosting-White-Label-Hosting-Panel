<x-guest-layout>
    <!-- Page Header-->
    <div class="container-fluid">
        <div class="row bg-primary text-white">
            <div class="col-12 pt-5 mt-5 mb-5 text-center">
                <h1>
                    Webhosting {{ config('app.name') }}
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-sm-4">
                        <div>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="disc-drive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-disc-drive fa-w-20 fa-4x d-block mx-auto"><path fill="currentColor" d="M496 416h-16V96a64 64 0 0 0-64-64H96a64 64 0 0 0-64 64v320H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h480a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm-240 0a160 160 0 1 1 160-160 160 160 0 0 1-160 160zm0-192a32 32 0 1 0 32 32 32 32 0 0 0-32-32z" class=""></path></svg>
                            <div class="mt-2">
                                <h3 class="text-center">Super snelle SSD hosting</h3>
                                <p>Heb jij het verschil al gemerkt als er een SSD in je laptop zit in plaats van een gewone hardeschijf? Je laptop gaat weer vliegensvlug. Onze servers zijn uitgerust met de snelste SSD schijven om je website nog sneller te laden!</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <i class="fab fa-wordpress fa-4x d-block mx-auto"></i>
                            <div class="mt-2">
                                <h3 class="text-center">Geoptimaliseerd voor jouw website</h3>
                                <p>Is jouw webiste gebouwd in WordPress, Laravel of Drupal? Onze servers zijn dan speciaal opgezet voor jouw. Met de juiste en geoptimaliseerde instellingen maken we jouw website nog beter.</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="browser" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-browser fa-w-20 fa-4x d-block mx-auto"><path fill="currentColor" d="M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM48 92c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v24c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V92zm416 334c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V168h416v258zm0-310c0 6.6-5.4 12-12 12H172c-6.6 0-12-5.4-12-12V92c0-6.6 5.4-12 12-12h280c6.6 0 12 5.4 12 12v24z" class=""></path></svg>
                            <div class="mt-2">
                                <h3 class="text-center">Eenvoudig beheer paneel</h3>
                                <p>Door ons eenvoudig beheer paneel kan je alles voor je domeinnaam en webhosting vanop 2 locaties wijzigen, via onze website of onze app. Alles op 1 plaats, simpel en snel.</p> 
                            </div>
                        </div>
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
