<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class AdlapController extends Controller
{
    public function index(){
        return view('admin.laporan.akhir', [
            "akhir" => Laporan::all()
        ]);
    }
}
