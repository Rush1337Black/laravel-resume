<?php

namespace app\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function __invoke()
    {
        return view('main.registration');
    }
}
