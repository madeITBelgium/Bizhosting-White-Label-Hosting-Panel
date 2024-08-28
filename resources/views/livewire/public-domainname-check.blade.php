<div>
    <form wire:submit="checkDomainname()" class="mb-3">
        <div class="input-group w-md-50 mx-auto {{ $errors->has('domainname') ? 'is-invalid' : '' }}">
            <input type="text" class="form-control" placeholder="Domeinnaam, bv.: mijndomeinnaam.be" aria-label="Domeinnaam" aria-describedby="button-check" wire:model="domainname">
            <button class="btn btn-primary" wire:loading.attr="disabled" type="submit">
                <span wire:loading wire:target="checkDomainname" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Controleer domeinnaam
            </button>
        </div>
        <x-input-error for="domainname" />
        
        @if(count($results) > 0)
            <table class="table">
                @foreach($results as $tld => $data)
                    <tr class="{{ $data['check'] ? 'bg-success' : 'bg-warning' }}">
                        <td>{{ $data['name'] }}</td>
                        <td>{{ $data['check'] ? 'Beschikbaar' : 'Niet beschikbaar' }}</td>
                        <td>€{{ number_format($data['tld']->sell_price * 1.21, 2, ",", ".") }}/jaar</td>
                        <td>
                            @if($data['check'])
                                <a href="/register?domainname={{ $data['name'] }}" class="btn btn-primary">Domeinnaam registeren</a>
                            @else
                                <a href="/register?domainname={{ $data['name'] }}">Domeinnaam verhuizen</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    </form>
</div>
