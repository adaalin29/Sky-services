<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Team;
use App\Fleet;
use App\Flight;
use App\Tour;
use App\Review;
use App\Gallery;

use App\Departure;
use App\Service;

class IndexController extends Controller
{
    public function index(){

        $tours = Tour::get();
        $gallery = Gallery::first();
        $gallery->images = json_decode($gallery->images);
        $departures = Departure::get();
        $services = Service::get();
        $flights = Flight::get();
        foreach($tours as $item){
            $item->images = json_decode($item->images);
        }

        return view('index',[
            'tours'=>$tours,
            'gallery'=>$gallery,
            'departures'=>$departures,
            'services'=>$services,
            'flights'=>$flights,
        ]);
    }

    public function tours(){
        $tours = Tour::get();
        foreach($tours as $item){
            $item->images = json_decode($item->images);
        }

        return view('tours',[
            'tours'=>$tours,
        ]);
    }
    public function about(){

        $team = Team::get();
        $reviews = Review::get();
        return view('about',[
            'team'=>$team,
            'reviews'=>$reviews,
        ]);
    }

    public function gallery(){

        $gallery = Gallery::first();
        $gallery->images = json_decode($gallery->images);
        return view('gallery',[
            'gallery'=>$gallery,
        ]);
    }

    public function flights(){


        $tours = Tour::get();
        $flights = Flight::get();
        foreach($flights as $item){
            $item->images = json_decode($item->images);
            $item->icon = json_decode($item->icon,true);
            
        }
        foreach($tours as $item){
            $item->images = json_decode($item->images);
            
        }
        // dd($flights);
        return view('flights',[

            'flights'=>$flights,
            'tours'=>$tours,
        ]);
    }
    public function tour_detail($url_slug)
    {
      $tour = Tour::where('slug',$url_slug)->withTranslations()->first();
      $tour->images = json_decode($tour->images);
      $reviews = Review::where('category',$tour->id)->get();
    //   dd($reviews);
      return view('tour-detail',[
          'tour'=>$tour,
          'reviews'=>$reviews,
      ]);
    }
    public function flight_detail($url_slug)
    {
      $flight = Flight::where('slug',$url_slug)->withTranslations()->first();
      return view('detaliu-zbor',[
          'flight'=>$flight,
      ]);
    }

    public function fleet(){

        $team = Team::get();
        $fleet = Fleet::get();
        foreach($fleet as $item){
            $item->images = json_decode($item->images);
        }

        return view('fleet',[
            'team'=>$team,
            'fleet'=>$fleet,
        ]);
    }

    public function terms(){

        return view('terms');
    }

    public function policy(){

        return view('policy');
    }

    public function cookies(){

        return view('cookies');
    }

}