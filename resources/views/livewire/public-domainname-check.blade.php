<div>
    <form wire:submit.prevent="checkDomainname()">
        <div class="input-group mb-3 w-md-50 mx-auto">
            <input type="text" class="form-control" placeholder="Domeinnaam" aria-label="Domeinnaam" aria-describedby="button-check" wire:model.defer="domainname">
            <div class="input-group-append">
                <button class="btn btn-primary" id="button-check">Controleer domeinnaam</button>
            </div>
        </div>
        
        @if(count($results) > 0)
            <table class="table">
                @foreach($results as $tld => $data)
                    <tr class="{{ $data['check'] ? 'bg-success' : 'bg-warning' }}">
                        <td>{{ $data['name'] }}</td>
                        <td>{{ $data['check'] ? 'Beschikbaar' : 'Niet beschikbaar' }}</td>
                        <td>€{{ number_format($data['tld']->sell_price * 1.21, 2, ",", ".") }}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </form>
</div>
