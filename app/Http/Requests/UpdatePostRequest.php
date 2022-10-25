<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            "title" => ["required"],
            "body" => ["required"],
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Поле Тема записи обязательно для заполнения",
            "body.required" => "Поле Текст сообщения обязательно для заполнения",
        ];
    }
}
