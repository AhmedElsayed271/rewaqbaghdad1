<?php

namespace App\Http\Controllers\Front;

use App\Models\Rewaq;
use App\Models\EtmamInfo;
use App\Models\MedadInfo;
use App\Models\KunInfoEdit;
use Illuminate\Http\Request;
use App\Mail\RequestTraining;
use App\Mail\SendContactMail;
use App\Models\BodcastInfoEdit;
use App\Models\IraqmeterInfoEdit;
use App\Mail\RequestQuestionnaire;
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

    public function contactUsBodcast(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|string|max:50',
            'name' => 'required|string|max:100',
            'subject' => 'required|string|max:100',
        ]);


        $bodcast = BodcastInfoEdit::first();
   
        $subject = $request->subject;
        
        Mail::to($bodcast->contact_email)->send(new SendContactMail($request->except('_token'), $subject));
        return back()->with('success', __('front.alert_send_contact_main'));
    }
    public function rewaqContactUs(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|string|max:50',
            'name' => 'required|string|max:100',
            'how_help' => 'required|string|max:100',
        ]);


        $rewaq = Rewaq::first();
   
        $subject = $request->subject;
        
        Mail::to($rewaq->contact_email)->send(new SendContactMail($request->except('_token'), $subject));
        return back()->with('success', __('front.alert_send_contact_main'));
    }
    public function requestPublish(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|string|max:50',
            'name' => 'required|string|max:100',
            'subject_research' => 'required|string|max:100',
            'request_publish' => 'required',
        ]);


        $medad = MedadInfo::first();
        
        $subject = $request->subject;
        $files = [];
        foreach ($request->file('request_publish') as $imagefile) {
  
            $path = $imagefile->store('/files/shares/forms', ['disk' => 'uploads']);
            $files[] = '/uploads/'.$path;
        }
       

        
        Mail::to($medad->contact_email)->send(new SendContactMail($request->except('_token','request_publish'), $subject, $files));
        return back()->with('success', __('front.alert_send_contact_main'));
    }
    public function requestEvent(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|string|max:50',
            'name' => 'required|string|max:100',
            'subject' => 'required|string|max:100',
        ]);


        $etmam = EtmamInfo::first();
        
        $subject = $request->subject;
    

        
        Mail::to($etmam->contact_email)->send(new SendContactMail($request->except('_token'), $subject));
        return back()->with('success', __('front.alert_send_contact_main'));
    }
}
