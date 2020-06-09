<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'comment' => 'required',
            'user_id' => 'required|exists:App\User,id',
            'film_id' => 'required|exists:App\Film,id',
        ];
    }
    public function messages()
    {
        return [
            'comment.required' => 'Comment can not be null'
        ];
    }
}
