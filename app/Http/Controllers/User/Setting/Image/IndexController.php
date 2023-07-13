<?php

namespace app\Http\Controllers\User\Setting\Image;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('user.setting.changeImage');
    }
}
