<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{

    function login(){
        return view('auth.login');
    }
    

    function register(){
        return view('auth.register');
    }
    function save(Request $request){
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5'
        ]);
         $users = new users;
         $users->firstname = $request->firstname;
         $users->lastname = $request->lastname;
         $users->email = $request->email;
         $users->password = Hash::make($request->password);
         $save = $users->save();
         if($save){
            return back()->with('success','Le comptre a été crée');
         }else{
             return back()->with('fail','Quelque chose s"est mal passé, réessayez plus tard');
         }
    }

    function check(Request $request){
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:5|max:12'
        ]);

        $userInfo = users::where('email','=', $request->email)->first();
        if(!$userInfo){
            return back()->with('fail','L adresse email n existe pas');
        }else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('/');

            }else{
                return back()->with('fail',' Password est Incorrect');
            }
        }
    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
    function profil(){
        $data = ['LoggedUserInfo'=>users::where('id','=', session('LoggedUser'))->first()];
        return view('profil', $data);
    }

}
