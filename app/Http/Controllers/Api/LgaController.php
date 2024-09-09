<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lga;
use App\Http\Requests\StoreLgaRequest;
use App\Http\Requests\UpdateLgaRequest;

class LgaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLgaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lga $lga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLgaRequest $request, Lga $lga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lga $lga)
    {
        //
    }
}
