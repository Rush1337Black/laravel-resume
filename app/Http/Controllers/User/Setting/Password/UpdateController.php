<?php

namespace app\Http\Controllers\User\Setting\Password;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Setting\PasswordRequest;
use App\Models\HistoryPassword;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    public function __invoke(PasswordRequest $request)
    {
        $id = auth()->user()->id;
        $user = User::where('id', $id)->first();

        $data = $request->validated();

        if (Hash::check($data['password'], $user->password)) {

            DB::table('history_passwords')->insert([
                'user_id' => $user->id,
                'password' => $user->password,
                'description' => 'change',
                'created_at' => Carbon::now()->toDate(),
            ]);

            $password['password'] = $data['password_new'];

            $user->update($password);
            return redirect()->route('user.profile');
        }

        return back()->withErrors([
            'password' => 'неизвестная ошибка',
        ]);
    }
}
