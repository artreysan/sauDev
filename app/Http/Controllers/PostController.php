<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use view;

class PostController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){
        if(auth()->user()->admin == 1){
            $solicitud = Solicitud::all();
            return view('dashboard', compact('solicitud'));
        }else{
            $solicitud = Solicitud::where('userID',auth()->user()->id)->get();
            return view('dashboard', compact('solicitud'));
        }
    }

}
