<?php

namespace app\Http\Controllers\User\Admin\User;

use App\Http\Controllers\Controller;

class DestroyController extends Controller
{
    public function __invoke()
    {
        return view('admin.user.index');
    }
}
