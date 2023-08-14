<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporakhController extends Controller
{
    public function index(){
        return view ('mahasiswa.laporakh');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('pesanan', [
    //         'daftarharga' => Daftarharga::all()

    //     ]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
     
         $validatedData = $request->validate([
             'jenperm' => 'required',
             'jenis' => 'required',
             'ttddpl' => 'required',
             'linkdrive' => 'required',
             'presentasi' => 'required',
             'nilai' => 'required'
         ]);
 
         Laporan::create($request->all());
 
         return redirect("/capaian")->with('success', 'Data anda telah terkirim!');
     }
 
     /**
      * Display the specified resource.
      *
      * @param  \App\Models\Laporan  $laporan
      * @return \Illuminate\Http\Response
      */
     public function show(Laporan  $laporan)
     {
         //
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\Laporan  $laporan
      * @return \Illuminate\Http\Response
      */
     public function edit(Laporan  $laporan)
     {
         //
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\Laporan  $laporan
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, Laporan  $laporan)
     {
         //
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\Laporan  $laporan
      * @return \Illuminate\Http\Response
      */
     public function destroy(Laporan  $laporan)
     {
         //
     }
}
