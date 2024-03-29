<?php

namespace app\Http\Controllers\User\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        return view('admin.user.edit',compact('user'));
    }
}
