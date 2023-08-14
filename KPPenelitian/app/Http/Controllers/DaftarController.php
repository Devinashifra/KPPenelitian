<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function indexform(){
        return view ('pendaftaran.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         // $daftar = new Daftar;
         // $daftar->email = 
         $validatedData = $request->validate([
             'email' => 'required',
             'jenisperm' => 'required',
             'filesp' => 'required',
             'jenis' => 'required',
             'namanim' => 'required',
             'idjss' => 'required',
             'nowa' => 'required',
             'emailindi' => 'required',
             'kampus' => 'required',
             'tglmul' => 'required',
             'tglsel' => 'required',
             'judul' => 'required',
             'nugas' => 'required',
         ]);
 
        //  Daftar::create($validatedData);
 
        //  return redirect('/magang/form')->with('success', 'Data anda telah tersimpan!');

        return redirect()->back();
     }
 
     /**
      * Display the specified resource.
      *
      * @param  \App\Models\Pesanan  $pesanan
      * @return \Illuminate\Http\Response
      */
     public function show(Daftar $daftar)
     {
         //
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\Pesanan  $pesanan
      * @return \Illuminate\Http\Response
      */
     public function edit(Daftar $daftar)
     {
         //
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\Pesanan  $pesanan
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, Daftar $daftar)
     {
         //
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\Pesanan  $pesanan
      * @return \Illuminate\Http\Response
      */
     public function destroy(Daftar $daftar)
     {
         //
     }
}
