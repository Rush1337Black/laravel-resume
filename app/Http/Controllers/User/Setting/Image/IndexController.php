<?php

namespace app\Http\Controllers\User\Setting\Image;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke(User $user)
    {
        return view('user.setting.changeImage',compact('user'));
    }
}
