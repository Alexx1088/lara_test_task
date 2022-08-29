<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
           // 'email' => 'required|email',
            'email' => 'nullable',
        //    'password' => 'required|string',
            'password' => 'nullable',
        ];
    }

    /* public function messages()
     {
         return [
             'surname.required' => 'Поле "Фамилия" должно быть заполнено',
             'name.required' => 'Поле "Имя" должно быть заполнено',
             'patronymic.required' => 'Поле "Отчество" должно быть заполнено',
             'itn.required' => 'Поле "ИИН" должно быть заполнено',
             'itn.digits' => 'Поле "ИИН" должно быть 12',
             'date_of_birth.required' => 'Поле "Дата рождения" должно быть заполнено',
             'email.required' => 'ваш email должен соответствовать формату user@mail.com ',
             'email.unique' => 'пользователь с таким e-mail уже существует ',
             'password.required' => 'Поле "пароль" должно быть заполнено ',
             'images.required' => 'введите правильный URL',

         ];
     }*/
}
