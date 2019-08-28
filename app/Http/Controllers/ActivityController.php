<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Http\Resources\ActivityResource;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Activity $activity)
    {
        //
        return ActivityResource::collection(Activity::paginate(25));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Activity $activity)
    {
        //
        $data = $request->validate([
            'activity_name' => 'required|string',
            'activity_cordinator' => 'required|string',
            'activity_cost' => 'required',
            'activity_member_type' => 'required',
            'activity_status' => 'required'
        ]);

        $newactivity = Activity::create($data);

        return new ActivityResource($newactivity);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        //
        return new ActivityResource($activity);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        //
        $activity->update($request->all());

        return new ActivityResource($activity);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        //
        $activity->delete();

        return response()->json(null, 204);
    }
}
