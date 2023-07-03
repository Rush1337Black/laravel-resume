<?php

namespace app\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function __invoke()
    {
        return view('main.setting');
    }
}
