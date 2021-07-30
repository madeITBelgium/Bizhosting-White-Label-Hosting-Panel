<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    public ?string $name = null;
    public ?string $email = null;
    public ?string $phone = null;
    public ?string $message = null;

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string'],
        ];
    }

    public function render()
    {
        return view('livewire.contact')->layout('layouts.guest');
    }

    public function submitContact()
    {
        $this->validate();

        Mail::raw("Name: " . $this->name . "\nEmail:" . $this->email . "\nPhone: " . $this->phone . "\nMessage: " . $this->message, function ($message) {
            $message->to(config('app.contact_email'))
                ->subject('Contact ' . config('app.name'));
        });

        $this->emit('saved');
    }
}
