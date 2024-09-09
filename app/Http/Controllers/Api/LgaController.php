<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreLgaRequest;
use App\Http\Requests\UpdateLgaRequest;
use App\Http\Resources\LgaCollection;
use App\Http\Resources\LgaResource;
use App\Models\Lga;
use Illuminate\Http\Request;

class LgaController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\LgaCollection
     */
    public function index(Request $request)
    {
        $lgas = Lga::oldest('name')->get();

        return new LgaCollection($lgas);
    }

    /**
     * @param \App\Http\Requests\StoreLgaRequest $request
     * @return \App\Http\Resources\LgaResource
     */
    public function store(StoreLgaRequest $request)
    {
        $lga = Lga::create($request->validated());

        return new LgaResource($lga);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Lga $lga
     * @return \App\Http\Resources\LgaResource
     */
    public function show(Request $request, Lga $lga)
    {
        return new LgaResource($lga);
    }

    /**
     * @param \App\Http\Requests\UpdateLgaRequest $request
     * @param \App\Models\Lga $lga
     * @return \App\Http\Resources\LgaResource
     */
    public function update(UpdateLgaRequest $request, Lga $lga)
    {
        $lga->update($request->validated());

        return new LgaResource($lga);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Lga $lga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Lga $lga)
    {
        $lga->delete();

        return response()->noContent();
    }
}