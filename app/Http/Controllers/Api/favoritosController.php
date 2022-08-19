<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\favoritos;
use Illuminate\Http\Request;

class favoritosController extends Controller
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
     * @param  \App\Models\favoritos  $favoritos
     * @return \Illuminate\Http\Response
     */
    public function show(favoritos $favoritos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\favoritos  $favoritos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, favoritos $favoritos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\favoritos  $favoritos
     * @return \Illuminate\Http\Response
     */
    public function destroy(favoritos $favoritos)
    {
        //
    }
}
