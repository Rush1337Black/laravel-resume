<?php

namespace app\Http\Controllers\Main\User;

use App\Http\Controllers\Controller;

class ChangePasswordController extends Controller
{
    public function __invoke()
    {
        return view('main.settings.changePassword');
    }
}