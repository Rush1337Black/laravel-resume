<?php

namespace app\Http\Controllers\User\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class DestroyController extends Controller
{
    public function __invoke(User $user)
    {
        $user->delete();

        return redirect()->route('admin.user.index');
    }
}
