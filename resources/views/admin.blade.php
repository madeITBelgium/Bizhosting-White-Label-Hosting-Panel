<x-admin-layout>
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
                            <x-application-logo style="width: 317px;" /> Hosting Admin
                        </div>
    
                        <div class="text-muted">
                            
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-6 pr-0">
                        <div class="card-body border-right border-bottom p-3 h-100">
                            <div class="bd-highlight mb-3">
                                <div class="pl-3">
                                    <div class="mb-2">
                                        <a href="{{ route('hosting.admin.domainname.index') }}" class="h5 font-weight-bolder text-decoration-none text-dark">{{ __('Domainnames') }}</a>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <td>{{ __('New last 7days') }}</td>
                                            <td>{{ \MadeITBelgium\Hosting\Models\Domainname::where('start_at', '>=', now()->subDays(7))->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('New last 30days') }}</td>
                                            <td>{{ \MadeITBelgium\Hosting\Models\Domainname::where('start_at', '>=', now()->subDays(30))->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('Ending next 30 days') }}</td>
                                            <td>{{ \MadeITBelgium\Hosting\Models\Domainname::where('real_end_at', '<=', now()->addDays(30))->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('Renewed last 30 days') }}</td>
                                            <td>{{ \MadeITBelgium\Hosting\Models\Domainname::where('real_end_at', '>=', now()->addMonths(11))->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('No Team') }}</td>
                                            <td>{{ \MadeITBelgium\Hosting\Models\Domainname::whereNull('team_id')->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('Total') }}</td>
                                            <td>{{ \MadeITBelgium\Hosting\Models\Domainname::count() }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 pl-0">
                        <div class="card-body border-bottom p-3 h-100">
                            <div class="bd-highlight mb-3">
                                <div class="pl-3">
                                    <div class="mb-2">
                                        <a href="{{ route('hosting.admin.hosting.index') }}" class="h5 font-weight-bolder text-decoration-none text-dark">{{ __('Hostings') }}</a>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <td>{{ __('New last 7days') }}</td>
                                            <td>{{ \MadeITBelgium\Hosting\Models\Hosting::where('start_at', '>=', now()->subDays(7))->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('New last 30days') }}</td>
                                            <td>{{ \MadeITBelgium\Hosting\Models\Hosting::where('start_at', '>=', now()->subDays(30))->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('Ending next 30 days') }}</td>
                                            <td>{{ \MadeITBelgium\Hosting\Models\Hosting::where('real_end_at', '<=', now()->addDays(30))->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('Renewed last 30 days') }}</td>
                                            <td>{{ \MadeITBelgium\Hosting\Models\Hosting::where('real_end_at', '>=', now()->addMonths(11))->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('No Team') }}</td>
                                            <td>{{ \MadeITBelgium\Hosting\Models\Hosting::whereNull('team_id')->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('Total') }}</td>
                                            <td>{{ \MadeITBelgium\Hosting\Models\Hosting::count() }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 pr-0">
                        <div class="card-body border-right p-3 h-100">
                            <div class="bd-highlight mb-3">
                                <div class="pl-3">
                                    <div class="mb-2">
                                        <a href="{{ route('hosting.admin.domainname.index') }}" class="h5 font-weight-bolder text-decoration-none text-dark">{{ __('Billing') }}</a>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <td>{{ __('New last 7days') }}</td>
                                            <td>€{{ number_format(\MadeITBelgium\Hosting\Models\Invoice::where('invoice_date', '>=', now()->subDays(7))->sum('excl_amount'), 2, ",", ".") }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('New last 30days') }}</td>
                                            <td>€{{ number_format(\MadeITBelgium\Hosting\Models\Invoice::where('invoice_date', '>=', now()->subDays(30))->sum('excl_amount'), 2, ",", ".") }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('Yearly cost') }}</td>
                                            <td>€{{ number_format(\MadeITBelgium\Hosting\Models\Hosting::sum('buy_price') * 12 + \MadeITBelgium\Hosting\Models\Domainname::sum('buy_price'), 2, ",", ".") }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('Yearly revenue') }}</td>
                                            <td>€{{ number_format(\MadeITBelgium\Hosting\Models\Hosting::sum('sell_price') * 12 + \MadeITBelgium\Hosting\Models\Domainname::whereNull('hosting_id')->sum('sell_price'), 2, ",", ".") }}</td>
                                        </tr>
                                    </table>
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
            </div>
        </div>
    </div>    
</x-admin-layout>