<?php

namespace app\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class AuthorizationRequest extends FormRequest
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
            'login' => 'required|exists:users',
            'password' => 'required|exists:users',
        ];
    }

    public function messages()
    {
        return [
            'login.exists' => 'Такого пользователя не существует',
            'login.required' => 'Укажите Логин',
            'login.string' => 'Вы ввели что то нето',
            'password.exists' => 'Неверный пароль',
            'password.string' => 'Вы ввели что то нето',
            'password.required' => 'Укажите Пароль',
        ];
    }
}
