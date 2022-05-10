<?php

namespace App\Http\Controllers;

use App\Models\Consession;
use Illuminate\Http\Request;

class ConsessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conssesions = Consession::all();
        return view('welcome', compact('conssesions'));
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
        $consession = Consession::create([
            'name' => $request->get('name')
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consession  $consession
     * @return \Illuminate\Http\Response
     */
    public function show(Consession $consession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consession  $consession
     * @return \Illuminate\Http\Response
     */
    public function edit(Consession $consession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consession  $consession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consession $consession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consession  $consession
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consession $consession)
    {
        
    }

    public function search(Request $request)
    {
        $conssesions = Consession::where('name', 'like', '%'.$request->get('buscar').'%')->get();
        return view('welcome', compact('conssesions'));
    }
}
