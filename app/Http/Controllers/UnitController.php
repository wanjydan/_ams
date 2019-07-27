<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\Unit;
use App\UnitType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units=Unit::with('type')->get();

        return view('units.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartments=Apartment::where('owner_id', Auth::user()->id)->get();
        $unitTypes=UnitType::all();

        return view('units.create', compact('apartments', 'unitTypes'));
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
            'apartment' => 'required',
            'type' => 'required',
            'floor' => 'required',
            'number' => 'required',
            'rent' => 'required'
        ]);

        $apartment = Apartment::find($request->get('apartment'));
        $unitType = UnitType::find($request->get('type'));

        $unit = new Unit([
            'apartment_id' => $apartment->id,
            'type_id' => $unitType->id,
            'floor' => $request->get('floor'),
            'number' => $request->get('number'),
            'rent' => $request->get('rent'),
            'details' => $request->get('details'),
            'isVacant' => true
        ]);
        $unit->save();
        return redirect('/units')->with('success', 'Unit has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit=Unit::find($id);
        $apartments=Apartment::where('owner_id', Auth::user()->id)->get();
        $unitTypes=UnitType::all();

        return view('units.edit', compact(['unit', 'apartments', 'unitTypes']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'apartment' => 'required',
            'type' => 'required',
            'floor' => 'required',
            'number' => 'required',
            'rent' => 'required'
        ]);

        $unit=Unit::find($id);
        $apartment = Apartment::find($request->get('apartment'));
        $unitType = UnitType::find($request->get('type'));

        $unit->apartment_id=$apartment->id;
        $unit->type_id=$unitType->id;
        $unit->floor = $request->get('floor');
        $unit->number = $request->get('number');
        $unit->rent = $request->get('rent');
        $unit->details = $request->get('details');
        $unit->isVacant=true;
        $apartment->save();

        return redirect('/units')->with('success', 'Unit has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = Unit::find($id);
        $unit->delete();

        return redirect('/units')->with('success', 'Unit has been deleted Successfully');
    }
}
