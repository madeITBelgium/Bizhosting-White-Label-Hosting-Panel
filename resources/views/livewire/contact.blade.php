<div>
    <!-- Page Header-->
    <div class="container-fluid">
        <div class="row bg-primary text-white">
            <div class="col-12 pt-5 mt-5 mb-5 text-center">
                <h1>
                    Contact {{ config('app.name') }}
                </h1>
            </div>
        </div>
    </div>
    
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">

            </div>
            <div class="col-12 col-lg-6">   
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-2">{{ __('Contact us') }}</h2>
                        <form wire:submit="submitContact">
                            <!-- Name -->
                            <div class="form-group">
                                <x-label for="name" value="{{ __('Name') }}" />
                                <x-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" wire:model="name" />
                                <x-input-error for="name" />
                            </div>
                    
                            <!-- E-mailadres -->
                            <div class="form-group">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" wire:model="email" />
                                <x-input-error for="email" />
                            </div>
                    
                            <!-- Phone -->
                            <div class="form-group">
                                <x-label for="phone" value="{{ __('Phone') }}" />
                                <x-input id="phone" type="text" class="{{ $errors->has('phone') ? 'is-invalid' : '' }}" wire:model="phone" />
                                <x-input-error for="phone" />
                            </div>
                    
                            <!-- Message -->
                            <div class="form-group">
                                <x-label for="message" value="{{ __('Message') }}" />
                                <textarea id="message" class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" wire:model="message"></textarea>
                                <x-input-error for="message" />
                            </div>
                            
                            <div class="d-flex align-items-baseline">
                                <x-action-message class="mr-3" on="saved">
                                    {{ __('Sent.') }}
                                </x-action-message>
                
                                <x-button>
                                    {{ __('Send') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
