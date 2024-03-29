<?php

namespace App\Http\Controllers;

use App\Models\Bateau;
use App\Http\Requests\StoreBateauRequest;
use App\Http\Requests\UpdateBateauRequest;

class BateauController extends Controller
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
     * @param  \App\Http\Requests\StoreBateauRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBateauRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bateau  $bateau
     * @return \Illuminate\Http\Response
     */
    public function show(Bateau $bateau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bateau  $bateau
     * @return \Illuminate\Http\Response
     */
    public function edit(Bateau $bateau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBateauRequest  $request
     * @param  \App\Models\Bateau  $bateau
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBateauRequest $request, Bateau $bateau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bateau  $bateau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bateau $bateau)
    {
        //
    }
}
