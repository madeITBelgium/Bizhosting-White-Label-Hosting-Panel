<?php

namespace App\Http\Livewire;

use Livewire\Component;
use MadeITBelgium\Bizhosting\Facade\Bizhosting;
use MadeITBelgium\Hosting\Models\Topleveldomain;

class PublicDomainnameCheck extends Component
{
    public ?string $domainname = null;
    
    public array $results = [];
    
    public array $populairTlds = [
        '.be', '.vlaanderen', '.nl', '.com', '.eu', '.fr',
    ];

    public function rules()
    {
        return [
            'domainname' => ['required', 'string', 'max:255', 'unique:domainnames,domainname', 'regex:/^((?!-))(xn--)?([a-z0-9][a-z0-9\-]{0,60}[a-z0-9](\.[a-z]{0,25})?\.[a-z]{2,})$/'],
        ];
    }
    
    public function render()
    {
        return view('livewire.public-domainname-check');
    }
    
    public function checkDomainname()
    {
        $this->domainnameCheck = null;
        
        $this->validate();
        
        $tld = substr($this->domainname, strpos($this->domainname, '.'));
        $name = str_replace($tld, "", $this->domainname);
        
        $result = Bizhosting::domainname()->check($this->domainname);
        $topleveldomain = Topleveldomain::where('name', $tld)->first();
        
        $data = [
            $tld => [
                'check' => $result->available,
                'name' => $this->domainname,
                'tld' => $topleveldomain,
            ]
        ];
        
        foreach($this->populairTlds as $tlds) {
            if($tld != $tlds) {
                 $result = Bizhosting::domainname()->check($name . $tlds);
                 $topleveldomain = Topleveldomain::where('name', $tlds)->first();
        
                $data[$tlds] = [
                    'check' => $result->available,
                    'name' => $name . $tlds,
                    'tld' => $topleveldomain
                ];
            }
        }
        
        $this->results = $data;
    }
}
