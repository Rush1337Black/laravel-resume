<?php

namespace app\Http\Requests\User\Setting;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'password' => 'required',
            'password_new' => 'required|required_with:password_confirm_new|same:password_new',
            'password_confirm_new' => 'required|required_with:password_new|same:password_confirm_new',
        ];
    }


}
