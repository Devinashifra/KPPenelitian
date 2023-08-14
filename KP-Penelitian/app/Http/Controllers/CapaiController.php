<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capaian;

class CapaiController extends Controller
{
    public function index(){
        return view ('mahasiswa.capaian');
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
             'project' => 'required',
             'tglbim' => 'required',
             'kemajuan' => 'required',
             'filepres' => 'required',
         ]);
 
         Capaian::create($request->all());
 
         return redirect("/capaian")->with('success', 'Data anda telah terkirim!');
     }
 
     /**
      * Display the specified resource.
      *
      * @param  \App\Models\Capaian  $capai
      * @return \Illuminate\Http\Response
      */
     public function show(Capaian  $capai)
     {
         //
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\Capaian  $capai
      * @return \Illuminate\Http\Response
      */
     public function edit(Capaian  $capai)
     {
         //
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\Capaian  $capai
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, Capaian  $capai)
     {
         //
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\Capaian  $capai
      * @return \Illuminate\Http\Response
      */
     public function destroy(Capaian  $capai)
     {
         //
     }
}

    
 
 