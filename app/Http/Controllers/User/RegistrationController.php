<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\User\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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

        $lastUser = User::orderby('id', 'desc')->first();

        $userName = 'User'.$lastUser['id'];

        DB::table('users')
            ->where('id', '=', $lastUser['id'])
            ->update(['name' => $userName]);

        if ($user) {
            Auth::login($user);
            return redirect()->route('user.profile');
        }

        return redirect()->route('main.registration')->withErrors([
            'formError' => 'неизвестная ошибка'
        ]);
    }
}

