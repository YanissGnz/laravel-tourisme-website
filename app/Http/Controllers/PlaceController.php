<?php

namespace App\Http\Controllers;
use App\Models\Place;
use App\Models\Placeimg;
use DB;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
   public function index(Request $request,$id)
    {   
        $place = DB::table('places')->where("id",$id)->first();


        $placeimg = DB::table('placeimg')->where('placeimg.place_id',$id)->get();

        $places = DB::table('places')
                ->where("id","!=","$id")
                ->take(4)
                ->inRandomOrder()
                ->get();
        

        return view('place', compact( 'place','placeimg','places'));
    }
}
