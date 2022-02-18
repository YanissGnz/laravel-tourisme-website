<?php

namespace App\Http\Controllers;
use App\Models\Place;
use App\Models\Placeimg;
use DB;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
   public function index(Request $request)
    {   

        $id = $request->input('id');

        $sql = "SELECT * FROM places WHERE id = $id";

         $place = collect(\DB::table('places')->select($sql))->first();
        

        return view('place', compact( 'place'));
    }
}
