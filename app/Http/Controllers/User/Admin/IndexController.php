<?php

namespace app\Http\Controllers\User\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('admin.index');
    }
}
