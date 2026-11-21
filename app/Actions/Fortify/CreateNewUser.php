<?php

namespace App\Actions\Fortify;

use App\Concerns\PasswordValidationRules;
use App\Concerns\ProfileValidationRules;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules, ProfileValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
        ...$this->profileRules(),
        'login' => ['required', 'string', 'alpha_dash:ascii', 'max:255', Rule::unique(User::class)],
        'password' => $this->passwordRules(),
        ])->validate();
    
        return User::create(Arr::only($input, [
            'lastname', 'firstname', 'middlename', 'tel', 'email', 'login', 'password',
        ]));
    }
}
