<?php

namespace app\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class AuthorizationController extends Controller
{
    public function __invoke()
    {
        return view('main.authorization');
    }
}
