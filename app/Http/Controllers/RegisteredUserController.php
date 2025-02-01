<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        // validate
        $validatedAttribures = request()->validate([
            'first_name' => ['required','string','min:3'],
            'last_name' => ['required','string','min:3'],
            'email' => ['required','email','max:254'],
            // 'email_verified' => ['nullable','date'],
            'password' => ['required', Password::min(6)->letters()->numbers()->max(6), 'confirmed'], // input: password_confirmation
        ]);

        // create user
        $user = User::create($validatedAttribures);
        // User::create([
        //     'first_name'=> request('first_name'),
        //     'last_name'=> request('last_name'),
        //     'email'=> request('email'),
        //     'password'=> bcrypt(request('password')),
        // ]);

        // log in
        Auth::login($user);
        // redirect
        return redirect('/jobs');
    }
}
