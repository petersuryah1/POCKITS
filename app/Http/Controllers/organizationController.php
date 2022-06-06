<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\perusahaan;
use Illuminate\Support\Facades\Hash;

class organizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validated = $request->validate([
            'namePerusahaan' => 'required',
            'lokasiPerusahaan' => 'required',
            'emailPerusahaan' => 'required',
            'password' => 'required',
            'socialMedia' => 'required',
            'about' => 'required'
        ]);


        $perusahaan = new Perusahaan();

        $perusahaan->fill([
            'namePerusahaan' => $validated['namePerusahaan'],
            'lokasiPerusahaan' => $validated['lokasiPerusahaan'],
            'emailPerusahaan' => $validated['emailPerusahaan'],
            'password' => Hash::make($validated['password']),
            'socialMedia' => $validated['socialMedia'],
            'about' => $validated['about'],
        ]);

        $perusahaan->save();

       return dd($perusahaan);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
