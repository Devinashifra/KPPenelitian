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

    public function indexpro(){
        return view ('projecttersedia.project');
    }

    public function indexdes(){
        return view ('projecttersedia.desain');
    }

    public function indexvid(){
        return view ('projecttersedia.video');
    }

    public function indexjss(){
        return view ('projecttersedia.jss');
    }
}
