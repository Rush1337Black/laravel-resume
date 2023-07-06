<?php

namespace app\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthorizationController extends Controller
{
    public function __invoke()
    {
        if (Auth::check()) {
            return redirect()->route('user.profile');
        }

        return view('main.authorization');
    }
}
