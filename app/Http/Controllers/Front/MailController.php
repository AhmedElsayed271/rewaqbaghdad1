<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Mail\RequestTraining;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function requestTraining(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|string|max:50',
            'name' => 'required|string|max:100',
            'subject' => 'required|string|max:100',
        ]);
    
      
        Mail::to("alsayedahmed370@gmail.com")->send(new RequestTraining($validatedData));
    
        return response()->json(['message' => 'Email sent successfully'], 200);
    }
}
