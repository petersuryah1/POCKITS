<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\joboffer;
use App\Models\perusahaan;

class InputJobController extends Controller
{



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
        
        $validated = $request->validate([
            'namajoboffer' => 'required',
            'kategori' => 'required',
            'tanggalPenerimaan' => 'required',
            'tanggalPenutupan' => 'required',
            'deskripsi' => 'required',
            'jumlahLowongan' => 'required',

        ]);


        $joboffer = new Joboffer();

        $joboffer->fill([
            'namajoboffer' => $validated['namajoboffer'],
            'kategori' => $validated['kategori'],
            'tanggalPenerimaan' => $validated['tanggalPenerimaan'],
            'tanggalPenutupan' => $validated['tanggalPenutupan'],
            'deskripsi' => $validated['deskripsi'],
            'jumlahLowongan' => $validated['jumlahLowongan'],
            'idPerusahaan' => 1,
        ]);

        $joboffer->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $joboffer = joboffer::findorfail($id);
        return view('jobofferpage', ['joboffer' => $joboffer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}