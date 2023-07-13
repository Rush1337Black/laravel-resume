<?php

namespace app\Http\Controllers\User\Setting\Password;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('user.setting.changePassword');
    }
}
