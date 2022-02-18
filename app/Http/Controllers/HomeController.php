<?php

namespace App\Http\Controllers;
use App\Models\Place;
use App\Models\Placeimg;
use App\Models\activities;
use DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        $activities = DB::table('activities')
        ->take(4)
        ->inRandomOrder()
        ->get()
        ;
                                                                                  ;
        $places = DB::table('places')
        ->take(4)
        ->inRandomOrder()
        ->get()
        ;
        return view('home', compact('places' , 'activities'));
    }
}

