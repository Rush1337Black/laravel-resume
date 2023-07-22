<?php

namespace app\Http\Requests\User\Setting;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
            'email_new' => 'string|email|required_with:email_confirm_new|same:email_new',
            'email_confirm_new' => 'string|email|required_with:email_new|same:email_confirm_new',
        ];
    }


}
