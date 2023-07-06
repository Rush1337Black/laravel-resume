<?php

namespace app\Http\Controllers\Main\User;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function __invoke()
    {
        return view('main.profile');
    }
}
