<?php

namespace app\Http\Controllers\User\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();

        $user->update($data);

        return redirect()->route('admin.user.index');

    }
}
