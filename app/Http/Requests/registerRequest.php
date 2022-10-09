<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'password' => 'required|min:8',
            'email' => 'required|email'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Поле "Ваше имя пользователя" является обязательным для заполнения',
            'password.required' => 'Поле "Ваш пароль" является обязательным для заполнения',
            'email.required' => 'Поле "Ваша почта" является обязательным для заполнения',
            'password.min' => 'Пароль должен содержать минимум 8 символов',
        ];
    }
}
