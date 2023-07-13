<?php

namespace app\Http\Controllers\User\Setting\Image;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Setting\ImageRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(ImageRequest $request)
    {
        $id = auth()->user()->id;
        $user = User::where('id', $id)->first();

        $data = $request->only(['path_image_avatar','path_image_background']);

        if(isset($data['path_image_avatar']))
            $data['path_image_avatar'] = Storage::disk('public')->put('/images',$data['path_image_avatar']);

        if(isset($data['path_image_background']))
            $data['path_image_background'] = Storage::disk('public')->put('/images',$data['path_image_background']);

        $user->update($data);

        return redirect()->route('user.profile');

    }
}
