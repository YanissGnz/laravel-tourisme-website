<?php

namespace App\Http\Controllers;
use App\Models\Place;
use App\Models\users;

use App\Models\Placeimg;
use DB;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
   public function index(Request $request,$id)
    {   

        $activity = DB::table('activities')->where("id",$id)->first();

        $activityimg = DB::table('activityimg')->where('activity_id',$id)->get();

        $activities = DB::table('activities')
                    ->take(4)
                    ->inRandomOrder()
                    ->get();
        
        $data = ['LoggedUserInfo'=>users::where('id','=', session('LoggedUser'))->first()];

        return view('activity', compact( 'activity','activityimg','activities','data'));
    }
}
