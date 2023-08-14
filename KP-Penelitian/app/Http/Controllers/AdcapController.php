<?php

namespace App\Http\Controllers;

use App\Models\Capaian;
use Illuminate\Http\Request;

class AdcapController extends Controller
{
    public function index(){
        return view('admin.laporan.capaian', [
            "capai" => Capaian::all()
        ]);
    }
}
