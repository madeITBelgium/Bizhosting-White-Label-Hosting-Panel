<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use MadeITBelgium\Vat\Facade\Vat;
use Illuminate\Support\Facades\Http;
use Exception;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'company_name' => ['nullable', 'string', 'max:255'],
            'vatnr' => ['nullable', 'string', 'vat'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]), function (User $user) use ($input) {
                $this->createTeam($user, $input);
                
                
                if(config('app.emailservice')) {
                    try {
                        Http::post('https://www.email-service.be/api/1.0/subscribe/' . config('app.emailservice'), ['email' => $user->email, 'first_name' => $user->name]);
                    } catch(Exception) {}
                }
                \App\Actions\Slack::send("New user: " . $user->email);
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user, $input)
    {
        if (!empty($input['vatnr'])) {
            $vat = Vat::setVat($input['vatnr']);
            $vatData = $vat->parse();

            $user->ownedTeams()->save(Team::forceCreate([
                'user_id' => $user->id,
                'name' => empty($input['company_name']) ? explode(' ', $user->name, 2)[0]."'s Team" : $input['company_name'],
                'vatnr' => $vat->format(),
                'street' => $vatData->street,
                'postcode' => $vatData->zipcode,
                'city' => $vatData->city,
                'country' => $vatData->countryCode,
                'personal_team' => true,
            ]));
        } else {
            $user->ownedTeams()->save(Team::forceCreate([
                'user_id' => $user->id,
                'name' => empty($input['company_name']) ? explode(' ', $user->name, 2)[0]."'s Team" : $input['company_name'],
                'personal_team' => true,
            ]));
        }
    }
}
