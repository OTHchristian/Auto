<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Files;


class MessageController extends Controller
{
    public function index(){
        $matricule = Auth::user()->matricule;
        $data1 = Files::all();
        $data2=[];
        foreach($data1 as $data){
            if($data["matricule"]==$matricule){
                array_push($data2, $data["emplacement"]);
            }
        }
        return view("message",['data'=>$data2]);
    }
}
