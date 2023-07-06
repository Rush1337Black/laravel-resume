<?php

namespace app\Http\Controllers\Main\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\User\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class RegistrationController extends Controller
{
    public function __invoke(RegistrationRequest $request)
    {

        $data = $request->validated();

        $user = User::create([
            'login' => $data['login'],
            'email' =>  $data['email'],
            'password' => $data['password_main'],
        ]);


        if ($user) {
            Auth::login($user);
            return redirect()->route('user.profile');
        }

        return redirect()->route('main.registration')->withErrors([
            'formError' => 'x'
        ]);
    }
}

