<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('user.profile');
    }
}
