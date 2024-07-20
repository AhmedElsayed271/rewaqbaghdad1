<?php

namespace App\Http\Controllers\Front;

use App\Models\KunInfoEdit;
use Illuminate\Http\Request;
use App\Mail\RequestTraining;
use App\Mail\RequestQuestionnaire;
use App\Http\Controllers\Controller;
use App\Models\IraqmeterInfoEdit;
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
        

        $konContactEmail = KunInfoEdit::first();
      
        Mail::to($konContactEmail->contact_email)->send(new RequestTraining($validatedData));
        
        return back()->with('success', __('front.alert_send_contact_main'));
    }
    public function requestQuestionnaire(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|string|max:50',
            'name' => 'required|string|max:100',
            'subject' => 'required|string|max:100',
        ]);
        

        $contactEmail = IraqmeterInfoEdit::first();
      
        Mail::to($contactEmail->contact_email)->send(new RequestQuestionnaire($validatedData));
    
        return back()->with('success', __('front.alert_send_contact_main'));
    }
}
