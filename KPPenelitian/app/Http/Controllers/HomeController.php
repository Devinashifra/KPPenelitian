<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexap(){
        return view('alurdanpanduan');
    }

    public function indexmag(){
        return view ('magang');
    }

    public function indexpend(){
        return view('pendaftaran.pendaftaran');
    }
}
