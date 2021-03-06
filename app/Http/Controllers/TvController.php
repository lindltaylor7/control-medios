<?php

namespace App\Http\Controllers;

use App\Models\Consession;
use App\Models\Tv;
use App\Models\vr;
use Illuminate\Http\Request;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tvs = Consession::where('type', 1)->get();
        return view('tvs.home', compact('tvs'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vr  $vr
     * @return \Illuminate\Http\Response
     */
    public function show(vr $vr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vr  $vr
     * @return \Illuminate\Http\Response
     */
    public function edit(vr $vr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vr  $vr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vr $vr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vr  $vr
     * @return \Illuminate\Http\Response
     */
    public function destroy(vr $vr)
    {
        //
    }
}
