<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\SendReservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Departure;
use App\Service;
use App\Flight;
use DB;
use App\Rezervation;
// use App\Http\Controllers\Newsletter;

class BookingController extends Controller
{
    
    
    public function index()
    {
      $flights = Flight::get();
      $departures = Departure::get();
      $services = Service::get();
      return view('booking',[
        'departures'=>$departures,
        'services'=>$services,
        'flights'=>$flights,
      ]);
      
    }
    public function booking_service($service)
    {
      dd($service);
      return view('booking',[
      ]);
    }

    public function validate_part1(Request $request){
      $form_data = $request->only(['service','date','hour_departure','hour_arival','duration','persons','departure']);
      $validationRules = [
          'service'    => ['required'],
          'date'    => ['required'],
          'hour_departure'    => ['required'],
          'hour_arival'    => ['required'],
          'duration'    => ['required'],
          'persons'    => ['required'],
          'departure'    => ['required'],
          
          
      ];

      $validationMessages = [
          'service.required'=>__('site.service-required'),
          'date.required'=>__('site.date-required'),
          'hour_departure.required'=>__('site.hour-departure-required'),
          'hour_arival.required'=>__('site.hour-arival-required'),
          'duration.required'=>__('site.duration-required'),
          'persons.required'=>__('site.persons-required'),
          'departure.required'=>__('site.departure-required'),
          

      ];

      $validator = Validator::make($form_data, $validationRules,$validationMessages);
      if ($validator->fails())
          return ['success' => false, 'error' => $validator->errors()->all()];  
      else{ 
          return ['success' => true];
      }      
  }

  public function validate_part2(Request $request){
    $contact_email = settings('contact.email');
    $form_data = $request->only(['name','email','phone','go-route','come-route','message','terms','service','date','hour_departure','hour_arival','duration','persons','departure','options']);
    $validationRules = [
      'service'    => ['required'],
      'date'    => ['required'],
      'hour_departure'    => ['required'],
      'hour_arival'    => ['required'],
      'duration'    => ['required'],
      'persons'    => ['required'],
      'departure'    => ['required'],
      'name'    => ['required','min:3'],
      'email'   => ['required','email'],         
      'phone'    => ['required','min:3'],
      'terms'    =>['required'],
        
        
    ];

    $validationMessages = [
      'name.required'=>__('site.required-name'),
      'name.min'=>__('site.name-form'),
      'email.required'=>__('site.required-email'),
      'email.email'=>__('site.email-form'),
      'phone.required'=>__('site.required-phone'),
      'phone.min'=>__('site.form-phone'),
      'terms.required'=>__('site.required-terms'),
        

    ];

    $validator = Validator::make($form_data, $validationRules,$validationMessages);
    if ($validator->fails())
        return ['success' => false, 'error' => $validator->errors()->all()];  
    else{
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $service = $request->input('service');
        $date = $request->input('date');
        $hour_departure = $request->input('hour_departure');
        $hour_arival = $request->input('hour_arival');
        $duration = $request->input('duration');
        $persons = $request->input('persons');
        $departure = $request->input('departure');
        $options = $request->input('options');
        $message = $request->input('message');
        DB::table('rezervations')->insertGetId(
          [
            'name'=>$name,
            'email' => $email,
            'phone'=>$phone,
            'service'=>$service,
            'date'=>$date,
            'hour_departure'=>$hour_departure,
            'hour_arival'=>$hour_arival,
            'duration'=>$duration,
            'persons'=>$persons,
            'departure'=>$departure,
            'message'=>$message,
            'services'=>$options,
          ]
        );
        Mail::to(strip_tags($contact_email))->send(new SendReservation($request->all()));

        return ['success' => true];
    }      
}

}