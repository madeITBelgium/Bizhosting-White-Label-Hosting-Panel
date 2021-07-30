<?php

namespace App\Http\Livewire;

use Livewire\Component;
use MadeITBelgium\Bizhosting\Facade\Bizhosting;
use MadeITBelgium\Hosting\Models\Topleveldomain;

class Domainname extends Component
{
    public ?string $domainname = null;
    public ?string $domainnameCheck = null;
    public ?Topleveldomain $tld = null;

    public function rules()
    {
        return [
            'domainname' => ['required', 'string', 'max:255', 'unique:domainnames,domainname', 'regex:/^((?!-))(xn--)?([a-z0-9][a-z0-9\-]{0,60}[a-z0-9](\.[a-z]{0,25})?\.[a-z]{2,})$/'],
        ];
    }

    public function render()
    {
        return view('livewire.domainname')->layout('layouts.guest');
    }

    public function checkDomainname()
    {
        $this->domainnameCheck = null;
        
        $this->validate();

        $result = Bizhosting::domainname()->check($this->domainname);

        $tld = substr($this->domainname, strpos($this->domainname, '.'));
        $this->tld = Topleveldomain::where('name', '.'.ltrim($tld, '.'))->first();

        $this->domainnameCheck = $result->available ? 'available' : 'notavailable';
    }
}
