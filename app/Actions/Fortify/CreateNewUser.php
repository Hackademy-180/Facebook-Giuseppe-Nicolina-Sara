<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'surname'=>['nullable', 'string', 'max:255'], // piccole accortezze per l'aggiunta del surname 
            'birthday'=>['nullable', 'date'], //e birthday
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

         $user= User::create([
            'name' => $input['name'],
            'surname'=>$input['surname'] ?? null,  //anche nel create aggiungere surname 
            'birthday' => $input['birthday'] ?? null, //e birthday
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
         Profile::create([
            'name'=> $input['name'],
            'surname'=> $input['surname'] ?? null,
            'birthday'=> $input['birthday'] ?? null,
            'bio'=> null,
            'img'=>null,
            'user_id'=> $user->id
            
        ]);
        return $user;
    }
}
