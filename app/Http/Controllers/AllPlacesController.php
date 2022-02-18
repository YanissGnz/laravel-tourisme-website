<?php

namespace App\Http\Controllers;
use App\Models\Place;
use DB;

use Illuminate\Http\Request;

class AllPlacesController extends Controller
{
   public function index()
    {   
        $places = DB::table('places')
        ->inRandomOrder()
        ->get();

        return view('places', compact( 'places'));
    }
}
