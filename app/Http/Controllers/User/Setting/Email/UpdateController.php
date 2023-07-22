<?php

namespace app\Http\Controllers\User\Setting\Email;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Setting\EmailRequest;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    public function __invoke(EmailRequest $request)
    {
        $id = auth()->user()->id;
        $user = User::where('id', $id)->first();

        $data = $request->validated();

        DB::table('history_emails')->insert([
            'user_id' => $user->id,
            'email' => $user->email,
            'description' => 'change',
            'created_at' => Carbon::now()->toDate(),
        ]);

        $email['email'] = $data['email_new'];

        $user->update($email);
        return redirect()->route('user.profile');

    }
}
