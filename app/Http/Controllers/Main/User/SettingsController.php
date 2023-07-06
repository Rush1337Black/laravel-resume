<?php

namespace app\Http\Controllers\Main\User;

use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function __invoke()
    {
        return view('layouts.settings');
    }
}
