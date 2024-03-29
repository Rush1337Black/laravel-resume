<?php

namespace app\Http\Controllers\User\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRequest;
use App\Models\User;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        User::firstOrCreate($data);

        return redirect()->route('admin.user.index');
    }
}
