<?php

namespace App\Http\Controllers;
use App\Models\Place;
use App\Models\users;

use DB;

use Illuminate\Http\Request;

class AllPlacesController extends Controller
{
   public function index()
    {   
        $places = DB::table('places')
        ->inRandomOrder()
        ->get();
        $data = ['LoggedUserInfo'=>users::where('id','=', session('LoggedUser'))->first()];

        return view('places', compact( 'places', 'data'));
    }
}
