<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class FormdafController extends Controller
{
    public function indexform(Request $request){
        // return view ('pendaftaran.form');
        return view('pendaftaran.form', [
            'title' => 'Daftar',
            "active" => 'Daftar',
            'daft' => Daftar::all(),
    
        ]);
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
            'despro' => 'required',
            'nugas' => 'required',
        ]);

        Daftar::create($request->all());

        return redirect("/magang/form")->with('success', 'Data anda telah terkirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function show(Daftar $daftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Daftar  $daftar
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
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftar $daftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftar $daftar)
    {
        //
    }
}

