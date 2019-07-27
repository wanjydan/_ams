<?php

namespace App\Http\Controllers;

use App\UnitType;
use Illuminate\Http\Request;

class UnitTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unitTypes = UnitType::all();

        return view('unit_types.index', compact('unitTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unit_types.create');
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
            'name'=>'required'
        ]);
        $unitType = new UnitType([
            'name' => $request->get('name'),
            'description'=> $request->get('description')
        ]);
        $unitType->save();
        return redirect('/unit-types')->with('success', 'Unit Type has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UnitType  $unitType
     * @return \Illuminate\Http\Response
     */
    public function show(UnitType $unitType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UnitType  $unitType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unitType = UnitType::find($id);

        return view('unit_types.edit', compact('unitType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnitType  $unitType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required'
        ]);

        $unitType = UnitType::find($id);
        $unitType->name = $request->get('name');
        $unitType->description = $request->get('description');
        $unitType->save();

        return redirect('/unit-types')->with('success', 'Unit Type has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UnitType  $unitType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unitType = UnitType::find($id);
        $unitType->delete();

        return redirect('/unit-types')->with('success', 'Unit Type has been deleted Successfully');
    }
}
