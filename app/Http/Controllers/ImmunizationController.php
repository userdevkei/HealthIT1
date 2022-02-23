<?php

namespace App\Http\Controllers;

use App\Immunazation;
use App\Immune;
use Illuminate\Http\Request;

class ImmunizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $immune = Immunazation::all();
        return view('immunized')->with('immunes', $immune);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $immune = Immune::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('name', 'name');
        return view('create')->with('immune', $immune);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'location' => 'required',
            'type' => 'required'
        ]);

        $immune = new Immunazation;
        $immune->name = $request->input('name');
        $immune->age = $request->input('age');
        $immune->gender = $request->input('gender');
        $immune->location = $request->input('location');
        $immune->type = $request->input('type');
        $immune->save();

        return redirect('/Immunization')->with('success', 'Vaccination data added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $immune = Immunazation::find($id);
        $immunes = Immune::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('name', 'name');

        return view('edit')->with(['immune' => $immune, 'immunes' => $immunes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'location' => 'required',
            'type' => 'required'
        ]);

        $immune = Immunazation::find($id);
        $immune->name = $request->input('name');
        $immune->age = $request->input('age');
        $immune->gender = $request->input('gender');
        $immune->location = $request->input('location');
        $immune->type = $request->input('type');
        $immune->save();

        return redirect('/Immunization')->with('success', 'Vaccination data added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $im = Immunazation::find($id)->delete();

        return redirect('Immunization')->with('success', '1 record was successfully removed');
    }
}
