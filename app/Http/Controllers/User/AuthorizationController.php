<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\User\AuthorizationRequest;
use Illuminate\Support\Facades\Auth;

class AuthorizationController extends Controller
{
    public function __invoke(AuthorizationRequest $request)
    {
        $data = $request->only(['login','password']);

        if (Auth::attempt($data)) {

            return redirect()->route('user.profile');
        }

        return back()->withErrors([
            'login' => 'неизвестная ошибка',
        ]);
    }
}

