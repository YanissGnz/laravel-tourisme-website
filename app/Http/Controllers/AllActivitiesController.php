<?php

namespace App\Http\Controllers;
use App\Models\Activities;
use DB;

use Illuminate\Http\Request;

class AllActivitiesController extends Controller
{
   public function index()
    {   
        $activities = DB::table('activities')
        ->inRandomOrder()
        ->get();

        return view('activities', compact( 'activities'));
    }
}
