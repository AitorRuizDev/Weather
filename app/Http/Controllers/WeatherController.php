<?php

namespace App\Http\Controllers;

use App\Models\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weathers = Weather::all();
        return view('weather.list', compact('weathers', 'weathers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('weather.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:weather'],
            'temp' => 'required',
        ]);

        $weather = new Weather([
            'name' => $request->get('name'),
            'temp' => $request->get('temp'),
        ]);

        $weather->save();
        return redirect('weather.index')->with('success', 'Weather has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('weather.show', [
            'weather' => Weather::findOrFail($id)
        ]);
    }
    /**
     * Show the form for show the top.
     *
     * @param  \App\Models\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function top()
    {
        $weathers = DB::select('select * from weather order by temp asc LIMIT 5');
        return view('weather.top', compact('weathers', 'weathers'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function edit(Weather $weather)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weather $weather)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weather $weather)
    {
        //
    }
}
