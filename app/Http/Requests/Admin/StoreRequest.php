<?php

namespace app\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'login' => 'required|string|unique:users',
            'email' => 'required|string|email',
            'password' => 'required',
            'role' => 'required',
            'name' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'login.required' => 'Укажите Логин',
            'login.unique' => 'Придумайте другой Логин',
            'login.string' => 'Вы ввели что то нето',
            'email.unique' => 'Укажите другую электронную Почту',
            'email.required' => 'Укажите электронную Почту',
            'email.string' => 'Вы ввели что то нето',
            'email.email' => 'Укажите корректную электронную Почту',
            'remember_me.required' => 'прочтите пожалуйста',

            'password_main.required' => 'Укажите Пароль',
            'password_confirm.required' => 'Подтвердите Пароль',

            'password_main.same' => 'Пароли не совподают',
            'password_confirm.same' => 'Пароли не совподают',
        ];
    }
}
