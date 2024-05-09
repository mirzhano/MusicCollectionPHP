<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseRequest extends FormRequest
{
    /**
     * 
     *
     * @return bool
     */
    public function authorize()
    {
        return true; 
    }

    /**
     * 
     *
     * @return array
     */
    public function rules()
{
    return [
        
        'card_number' => 'required|string|regex:/^\d{4}\s\d{4}\s\d{4}\s\d{4}$/', 
        // 'expiration_date' => 'required|string|regex:/^(0[1-9]|1[0-2])\/?([0-9]{2})$/', 
        'cvv' => 'required|string|regex:/^\d{3}$/', 
        'name' => 'required|string|regex:/^[a-zA-Z ]+$/', 
    ];
}

}
