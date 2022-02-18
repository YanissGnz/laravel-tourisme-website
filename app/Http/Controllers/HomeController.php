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
        $activities = activities::join('activityimg', function ($join) {
            $join->on('activities.id', '=', 'activityimg.activity_id');
        })
        ->select(DB::raw('distinct activity_id ,name, description'))
        ->take(4)
        ->get();
                                                                                  ;
        $places = DB::table('places')
        ->take(4)
        ->inRandomOrder()
        ->get()
        ;
        return view('home', compact('places' , 'activities'));
    }
}

