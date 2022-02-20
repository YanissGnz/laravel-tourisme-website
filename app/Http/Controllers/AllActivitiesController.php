<?php

namespace App\Http\Controllers;
use App\Models\Activities;
use App\Models\users;

use DB;

use Illuminate\Http\Request;

class AllActivitiesController extends Controller
{
   public function index()
    {   
        $activities = DB::table('activities')
        ->inRandomOrder()
        ->get();
        $data = ['LoggedUserInfo'=>users::where('id','=', session('LoggedUser'))->first()];

        return view('activities', compact( 'activities','data'));
    }
}
