<x-guest-layout>
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6 bg-primary text-white py-4 d-flex flex-column align-items-center justify-content-center" style="min-height: 100vh">
                <h1>Start je HostingExpert.be avontuur!</h1>
                <p>Registreer je nu en krijg toegang tot de beste hosting oplossingen.</p>
                <ol class="list-unstyled">
                    <li>Stap 1: Registreer je account <span class="d-none d-md-inline">hiernaast</span><span class="d-inline d-md-none">hieronder</span></li>
                    <li>Stap 2: Kies je domeinnaam en hosting pakket</li>
                    <li>Stap 3: Geniet van je hosting pakket</li>
                </ol>
            </div>
            <div class="col-12 col-md-6">
                <div class="card m-0 m-lg-5">
                    <div class="card-body">

                        <x-validation-errors class="mb-3" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <x-label value="{{ __('VAT Number') }}" />

                                <x-input class="{{ $errors->has('vatnr') ? 'is-invalid' : '' }}" type="text" name="vatnr" :value="old('vatnr')" autofocus />
                                <x-input-error for="vatnr"></x-input-error>
                            </div>

                            <div class="form-group">
                                <x-label value="{{ __('Company Name') }}" />

                                <x-input class="{{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" :value="old('company_name')" />
                                <x-input-error for="company_name"></x-input-error>
                            </div>

                            <div class="form-group">
                                <x-label value="{{ __('Name') }} *" />

                                <x-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" :value="old('name')" required autocomplete="name" />
                                <x-input-error for="name"></x-input-error>
                            </div>

                            <div class="form-group">
                                <x-label value="{{ __('Email') }} *" />

                                <x-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                                            :value="old('email')" required />
                                <x-input-error for="email"></x-input-error>
                            </div>

                            <div class="form-group">
                                <x-label value="{{ __('Password') }} *" />

                                <x-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                            name="password" required autocomplete="new-password" />
                                <x-input-error for="password"></x-input-error>
                            </div>

                            <div class="form-group">
                                <x-label value="{{ __('Confirm Password') }} *" />

                                <x-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <x-checkbox id="terms" name="terms" />
                                        <label class="custom-control-label" for="terms">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                        </label>
                                    </div>
                                </div>
                            @endif

                            <div class="mb-0 mt-3">
                                <div class="d-flex justify-content-end align-items-baseline">
                                    <a class="text-muted me-3 text-decoration-none" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <x-button>
                                        {{ __('Register') }}
                                    </x-button>
                                </div>
                            </div>

                            <small>Velden met een * zijn verplicht</small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>