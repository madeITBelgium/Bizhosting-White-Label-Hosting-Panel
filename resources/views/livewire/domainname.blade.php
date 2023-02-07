<div>
    <!-- Page Header-->
    <div class="container my-5">
        <div class="row mt-5 pt-5">
            <div class="col-12 col-md-7 my-5 py-5">
                <h1>
                    Domeinnamen bij {{ config('app.name') }}
                </h1>
                <p>Domeinnamen zijn maar 1 jaar geldig, je moet het dus elk jaar opnieuw verlengen. Door onze voordelige prijzen doe je dat met plezier, een kleine investering die zeer veel kan opbrengen. Dat vanaf €10,89 incl. BTW per jaar.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center mb-2">Controleer of je domeinnaam nog vrij is.</h2>
                        <div class="input-group mb-3">
                            <x-jet-input type="text" class="{{ $errors->has('domainname') ? 'is-invalid' : '' }}" placeholder="{{ __('Domainname ex.: example.com') }}" wire:model.defer="domainname" />
                            <button class="btn btn-primary" wire:loading.attr="disabled" type="button" wire:click="checkDomainname()">Controleer</button>
                        </div>

                        <div wire:loading class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
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
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-6 my-5">
                <div>
                    <div class="mt-2">
                        <h3 class="text-center">{{ \MadeITBelgium\Hosting\Models\Topleveldomain::count() }} aantal mogelijkheden</h3>
                        <p>Door de komst van nieuwe TLDs bieden we u bijna het grootste aantal verschillende extensies aan. Bij ons kan je de zelfde naam registeren met 543 extenties!</p> 
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-5">
                <div>
                    <div class="mt-2">
                        <h3 class="text-center">Gratis DNS service</h3>
                        <p>Met een domeinnaam alleen ben je niets, een domeinnaam kan je gebruiken voor je website of doorsturen naar een bestaande website. Bij {{ config('app.name') }} hosting geniet je van een gratis DNS service voor het opzetten van je domeinnaam.</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col col-md-12 my-5">
                <div class="card" style="max-height: 500px; overflow: scroll;">
                    <table class="card-table table">
                        <tr>
                            <th>Domeinnaam extensie (TLD)</th>
                            <th>Prijs per jaar</th>
                        </tr>
                    @foreach(\MadeITBelgium\Hosting\Models\Topleveldomain::orderBy('name', 'ASC')->get() as $tld)
                        <tr>
                            <td>{{ $tld->name }}</td>
                            <td class="text-right">€ {{ number_format($tld->sell_price * 1.21, 2, ',', '') }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
