<?php

namespace app\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class ChangeMailController extends Controller
{
    public function __invoke()
    {
        return view('main.settings.changeMail');
    }
}
