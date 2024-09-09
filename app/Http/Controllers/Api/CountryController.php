<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Http\Resources\CountryCollection;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\CountryCollection
     */
    public function index(Request $request)
    {
        $countries = Country::latest()->get();

        return new CountryCollection($countries);
    }

    /**
     * @param \App\Http\Requests\StoreCountryRequest $request
     * @return \App\Http\Resources\CountryResource
     */
    public function store(StoreCountryRequest $request)
    {
        $country = Country::create($request->validated());

        return new CountryResource($country);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Country $country
     * @return \App\Http\Resources\CountryResource
     */
    public function show(Request $request, Country $country)
    {
        return new CountryResource($country);
    }

    /**
     * @param \App\Http\Requests\UpdateCountryRequest $request
     * @param \App\Models\Country $country
     * @return \App\Http\Resources\CountryResource
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        $country->update($request->validated());

        return new CountryResource($country);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Country $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Country $country)
    {
        $country->delete();

        return response()->noContent();
    }
}
