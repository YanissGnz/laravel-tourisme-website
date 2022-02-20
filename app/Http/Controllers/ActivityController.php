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

    public function booking(Request $request,$id)
    {
        $nbr_pr = $request->input('number');
        $from_date = $request->input('from_date');
        $to_date= $request->input('to_date');
        DB::table('bookings')->insert([
            'activity_id' => $id,
            'user_id'=> session('LoggedUser'),
            'nbr_pr' => $nbr_pr,
            'from_date'=> $from_date,
            'to_date'=>  $to_date,
        ]);

        return \Redirect::route('activity-to-form',$id)->with('success','Résertvation ajoutée');
    }
}
