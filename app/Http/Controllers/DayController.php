<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDayRequest;
use App\Http\Requests\UpdateDayRequest;
use App\Models\Day;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $days = Day::all();

        return view('days.index', compact('days'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('days.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDayRequest $request)
    {

        // Validate
        $val_data = $request->validated();
        // dd($val_data);

        //Create
        Day::create($val_data);

        //Redirect
        return to_route('days.index')->with('message', 'Day created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Day $day)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Day $day)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDayRequest $request, Day $day)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Day $day)
    {
        //
    }
}
