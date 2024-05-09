<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|min:5|max:50',
            'name' => 'required|min:15|max:500'
        ];
    }
}

