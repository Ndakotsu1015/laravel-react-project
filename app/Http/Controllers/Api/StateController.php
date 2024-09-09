<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Resources\StateResource;
use App\Http\Resources\StateCollection;
use App\Http\Controllers\Controller;
use App\Models\State;
use App\Http\Requests\StoreStateRequest;
use App\Http\Requests\UpdateStateRequest;

class StateController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\StateCollection
     */
    public function index(Request $request)
    {
        $states = State::oldest('name')->get();

        return new StateCollection($states);
    }

    /**
     * @param \App\Http\Requests\StoreStateRequest $request
     * @return \App\Http\Resources\StateResource
     */
    public function store(StoreStateRequest $request)
    {
        $state = State::create($request->validated());

        return new StateResource($state);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\State $state
     * @return \App\Http\Resources\StateResource
     */
    public function show(Request $request, State $state)
    {
        return new StateResource($state);
    }

    /**
     * @param \App\Http\Requests\UpdateStateRequest $request
     * @param \App\Models\State $state
     * @return \App\Http\Resources\StateResource
     */
    public function update(UpdateStateRequest $request, State $state)
    {
        $state->update($request->validated());

        return new StateResource($state);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\State $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, State $state)
    {
        $state->delete();

        return response()->noContent();
    }
}
