<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Files;

class FileController extends Controller
{
    public function receive(Request $request, Storage $Storage){
        $file = $request->file('file');
        $matricule = $request->input('matricule');
        if($file && $matricule){
            $filename = $file->getClientOriginalName();
            $filepath = $file->storeAs('files',$filename);
            Files::create([
                "matricule"=>$matricule,
                "emplacement"=>$filepath,
            ]);
        }
    }
}
