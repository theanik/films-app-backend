<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'release_date' => 'required',
            'ticket_price' => 'required',
            'country' => 'required',
            'genre' => 'required',
            'photo' => 'required|mimes:jpeg,jpg,png',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please Enter the Film name',
            'description.required' => 'Please Enter the Film description',
            'release_date.required' => 'Please Enter the Film release date',
            'ticket_price.required' => 'Please Enter the Film ticket price',
            'country.required' => 'Please Enter country',
            'genre.required'  => 'Please Enter film type',
            'photo.required'  => 'Please Provide a banner',
            'photo.photo'  => 'Banner type must be jpeg or png or jpg',
        ];
    }

}
