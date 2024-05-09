<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function submit(Request $request)
    {
     
        return "Ваш отзыв успешно отправлен!";
    }
}
