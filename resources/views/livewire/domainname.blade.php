<div>
    <!-- Page Header-->
    <div class="container-fluid">
        <div class="row bg-primary text-white">
            <div class="col-12 pt-5 mt-5 mb-5 text-center">
                <h1>
                    Domeinnamen {{ config('app.name') }}
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
                            <i class="fas fa-euro-sign fa-4x d-block mx-auto"></i>
                            <div class="mt-2">
                                <h3 class="text-center">Zeer voordelig, vanaf €{{ number_format(\MadeITBelgium\Hosting\Models\Topleveldomain::min('sell_price') * 1.21, 2, ",", ".") }}</h3>
                                <p>Domeinnamen zijn maar 1 jaar geldig, je moet het dus elk jaar opnieuw verlengen. Door onze voordelige prijzen doe je dat met plezier, een kleine investering die zeer veel kan opbrengen. Dat vanaf €{{ number_format(\MadeITBelgium\Hosting\Models\Topleveldomain::min('sell_price') * 1.21, 2, ",", ".") }} incl. BTW per jaar.</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <i class="fas fa-list-ol fa-4x d-block mx-auto"></i>
                            <div class="mt-2">
                                <h3 class="text-center">{{ \MadeITBelgium\Hosting\Models\Topleveldomain::count() }} aantal mogelijkheden</h3>
                                <p>Door de komst van nieuwe TLDs bieden we u bijna het grootste aantal verschillende extensies aan. Bij ons kan je de zelfde naam registeren met 543 extenties!</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <i class="fas fa-server fa-4x d-block mx-auto"></i>
                            <div class="mt-2">
                                <h3 class="text-center">Gratis DNS service</h3>
                                <p>Met een domeinnaam alleen ben je niets, een domeinnaam kan je gebruiken voor je website of doorsturen naar een bestaande website. Bij {{ config('app.name') }} hosting geniet je van een gratis DNS service voor het opzetten van je domeinnaam.</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <h2 class="text-center mb-2">Controleer of je domeinnaam nog vrij is.</h2>
                <div class="input-group mb-3">
                    <x-jet-input type="text" class="{{ $errors->has('domainname') ? 'is-invalid' : '' }}" placeholder="{{ __('Domainname ex.: example.com') }}" wire:model.defer="domainname" />
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="button" wire:click="checkDomainname()">Controleer</button>
                    </div>
                </div>

                @if($domainnameCheck !== null)
                    <div class="d-flex justify-content-between p-3 bg-info text-white h5">
                        <div>{{ $domainname }}</div>
                        <div>
                            @if($tld !== null)
                                €{{ number_format($tld->sell_price * 1.21, 2, ",", ".") }}
                            @endif
                        </div>
                        <div>{{ $domainnameCheck == 'available' ? __('Available') : __('Taken') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            @foreach(\MadeITBelgium\Hosting\Models\Topleveldomain::orderBy('name', 'ASC')->get()->chunk(ceil(\MadeITBelgium\Hosting\Models\Topleveldomain::count() / 3)) as $tlds)
                <div class="col col-md-4">
                    <div class="card">
                        <table class="card-table table">
                            @foreach($tlds as $tld)
                            <tr>
                                <th>{{ $tld->name }}</th>
                                <th class="text-right">€ {{ number_format($tld->sell_price * 1.21, 2, ',', '') }}</th>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
