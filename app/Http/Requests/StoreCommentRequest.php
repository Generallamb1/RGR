<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
            "from_user" => ["required"],
            "on_post" => ["required"],
            "body" => ["required"],
        ];
    }

    public function messages()
    {
        return [
            "body.required" => "Комментарий не заполнен",
        ];
    }
}
