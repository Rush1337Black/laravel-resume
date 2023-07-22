<?php

namespace app\Http\Controllers\User\Setting\Name;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Setting\NameRequest;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(NameRequest $request)
    {
        $id = auth()->user()->id;
        $user = User::where('id', $id)->first();

        $data = $request->only(['name']);

        $user->update($data);

        return redirect()->route('user.profile');
    }
}
