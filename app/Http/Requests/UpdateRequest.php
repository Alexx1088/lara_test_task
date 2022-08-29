<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
          /*     'surname' => 'required|string|max:20',
               'name' => 'required|string|max:20',
               'patronymic' => 'required|string|max:20',
               'itn' => 'required|digits:12',
               'date_of_birth' => 'required|date',
               'images' => 'required|url',
               'email' => 'required|email',
               'status' => 'required',*/

                   'surname' => 'required',
                   'name' => 'required',
                   'patronymic' => 'required',
                   'itn' => 'required',
                   'date_of_birth' => 'required',
                   'images' => 'required',
                   'email' => 'required',
                   'password' => 'required',
           ];
          }
    public function messages()
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
            'images.required' => 'введите правильный URL',
        ];
    }

}
