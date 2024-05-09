<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    $pay = new 
    public function submit(ContactRequest $request)
    {
        // $pay = new Pay();
        // $pay ->card_number = $req->input('card_number');
        // $pay ->expiration_date = $req->input('expiration_date');
        // $pay ->cvv = $req->input('cvv');
        // $pay ->name = $req->input('name');
        // $pay -> save();
        // // Валидация данных формы
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'phone' => 'required|string|max:20',
        //     'course' => 'required|string|max:255',
        // ]);
        // Обработка данных формы
        
        // Возвращаем сообщение об успешной отправке
        return redirect()-> route('home-page');
    }
}

