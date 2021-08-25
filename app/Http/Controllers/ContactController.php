<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\SendAppointment;
use App\Mail\SendJob;
use App\Mail\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\ServicesCategory;
use App\Salon;
use Illuminate\Support\Facades\Input;
use DB;
use App\Location;
// use App\Http\Controllers\Newsletter;

class ContactController extends Controller
{
    
    
    public function contact()
    {
        $locations = Location::get();
        
      return view('contact',[
          'locations'=>json_encode($locations),
      ]);
      
    }

    public function send_contact(Request $request){
        $contact_email = settings('contact.email');
        $form_data = $request->only(['name','email','phone','message','terms']);
        $validationRules = [
            'name'    => ['required','min:3'],
            'email'   => ['required','email'],         
            'phone'    => ['required','min:3'],
            'message'    => ['required','min:3'],
            'terms'   => ['required'],
            
        ];
  
        $validationMessages = [
            'name.required'=>__('site.required-name'),
            'name.min'=>__('site.name-form'),
            'email.required'=>__('site.required-email'),
            'email.email'=>__('site.email-form'),
            'phone.required'=>__('site.required-phone'),
            'phone.min'=>__('site.form-phone'),
            'message.required'=>__('site.required-message'),
            'message.min'=>__('site.message-form'),
            'terms.required'=>__('site.required-terms'),
  
        ];
  
        $validator = Validator::make($form_data, $validationRules,$validationMessages);
        if ($validator->fails())
            return ['success' => false, 'error' => $validator->errors()->all()];  
        else{ 
            Mail::to(strip_tags($contact_email))->send(new SendMessage($request->all()));
  
            return ['success' => true,'successMessage'=> __('site.form-message')];
        }      
    }

}