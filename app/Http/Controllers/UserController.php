<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index_connection(){
        return view('connection');
    }
    public function index_inscription(){
        return view('inscription');
    }
    public function index_accueil(){
        if(Auth::user()->matricule){
            return view('accueil');
        }else{
            return redirect()->route('login');
        }
    }
    public function connection(Request $request){
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('accueil');
        }
        else{
            return back()->with([
                'password'=>'identifiants invalide',
            ]);
        }
    }
    public function inscription(Request $request){
        $data =[
            "email"=>$request->input('email'),
            "name"=>$request->input('name'),
            "matricule"=>$request->input('matricule'),
            "password"=>Hash::make($request->input('password'))
        ];
        $user = User::create($data);
        return redirect()->route('accueil');
    }

}
