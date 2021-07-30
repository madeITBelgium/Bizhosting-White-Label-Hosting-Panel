<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row justify-content-center my-5">
        <div class="col-md-12">
            <div class="card shadow bg-light">
                <div class="card-body bg-white px-5 py-3 border-bottom rounded-top">
                    <div class="mx-3 my-3">
                        <div class="mb-4">
                            <x-jet-application-logo style="width: 317px;" />
                        </div>
    
                        <div class="text-muted">
                            
                        </div>
                    </div>
                </div>
                @if(count($domainnames) === 0 && count($hostings) === 0 && count($invoices) === 0)
                    <div class="row g-0">
                        <div class="col-12">
                            <div class="card-body border-right border-bottom p-3 h-100">
                                <div class="bd-highlight mb-3">
                                    <div class="text-center">
                                        {{ __('This is your hosting dashboard where you can find all the details of your domain names, web hostings or servers.') }}
                                        <div class="text-center mt-5">
                                            <a href="{{ route('hosting.create') }}" class="btn btn-success btn-lg">{{ __('Add your first domainname or webhosting') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row g-0">
                        <div class="col-md-6 pr-0">
                            <div class="card-body border-right border-bottom p-3 h-100">
                                <div class="bd-highlight mb-3">
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <a href="{{ route('hosting.domainname.index') }}" class="h5 font-weight-bolder text-decoration-none text-dark">{{ __('Domainnames') }}</a>
                                        </div>
                                        @if(count($domainnames) === 0)
                                            <div class="alert alert-info">{{ __('No domainname found.') }}</div>
                                        @else
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>{{ __('Name') }}</th>
                                                        <th>{{ __('End At') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($domainnames as $item)
                                                    <tr>
                                                        <td><a href="{{ route('hosting.domainname.show', $item) }}">{{ $item->domainname }}</a></td>
                                                        <td>{{ optional($item->end_at)->format('d-m-Y H:i') }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-6 pl-0">
                            <div class="card-body border-bottom p-3 h-100">
                                <div class="bd-highlight mb-3">
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <a href="{{ route('hosting.hosting.index') }}" class="h5 font-weight-bolder text-decoration-none text-dark">{{ __('Hostings') }}</a>
                                        </div>
                                        @if(count($hostings) === 0)
                                            <div class="alert alert-info">{{ __('No hosting found.') }}</div>
                                        @else
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>{{ __('Name') }}</th>
                                                        <th>{{ __('Package') }}</th>
                                                        <th>{{ __('End At') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($hostings as $item)
                                                    <tr>
                                                        <td><a href="{{ route('hosting.hosting.show', $item) }}">{{ $item->domainname }}</a></td>
                                                        <td>{{ config('hosting.hosting_packages.' . $item->package . '.name') }}</td>
                                                        <td>{{ optional($item->end_at)->format('d-m-Y H:i') }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-6 pr-0">
                            <div class="card-body border-right p-3 h-100">
                                <div class="bd-highlight mb-3">
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <a href="{{ route('hosting.billing') }}" class="h5 font-weight-bolder text-decoration-none text-dark">{{ __('Billing') }}</a>
                                        </div>
                                        @if(count($invoices) > 0)
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('Number') }}</th>
                                                    <th>{{ __('Date') }}</th>
                                                    <th>{{ __('Amount') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($invoices as $item)
                                                <tr>
                                                    <td><a href="{{ route('hosting.billing') }}">{{ $item->invoice_number }}</a></td>
                                                    <td>{{ optional($item->invoice_date)->format('d-m-Y') }}</td>
                                                    <td>{{ $item->excl_amount }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        @else
                                            <div class="alert alert-info">{{ __('No invoices found.') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-6 pl-0">
                            <div class="card-body p-3 h-100">
                                <div class="bd-highlight mb-3">
                                    <div class="pl-3">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>    
</x-app-layout>