<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;

class AdpenController extends Controller
{
    public function index(){
        // return view('admin.pendaftaran.index');
        // $data['daftars'] = AdpenController::all();
        // return view('admin.pendaftaran.index')->with('daftars', $data['daftars']);
        return view('admin.pendaftaran.index', [
            "daftars" => Daftar::all()
        ]);
    }

    
    
}
