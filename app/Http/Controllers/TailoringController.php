<?php

namespace App\Http\Controllers;

use App\model\Tailoring;
use Illuminate\Http\Request;

class TailoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tailoring.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tailoring.create');
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
     * @param  \App\model\Tailoring  $tailoring
     * @return \Illuminate\Http\Response
     */
    public function show(Tailoring $tailoring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\Tailoring  $tailoring
     * @return \Illuminate\Http\Response
     */
    public function edit(Tailoring $tailoring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Tailoring  $tailoring
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tailoring $tailoring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Tailoring  $tailoring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tailoring $tailoring)
    {
        //
    }
}
