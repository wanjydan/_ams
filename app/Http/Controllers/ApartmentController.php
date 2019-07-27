<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::with('region')->where('owner_id', Auth::user()->id)->get();

        return view('apartments.index', compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();

        return view('apartments.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'region' => 'required'
        ]);

        $region = Region::find($request->get('region'));

        $apartment = new Apartment([
            'owner_id' => Auth::user()->id,
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'region_id' => $region->id
        ]);
        $apartment->save();
        return redirect('/apartments')->with('success', 'Apartment has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apartment $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apartment $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apartment = Apartment::with('region')->find($id);
        $regions = Region::all();

//        if ($apartment->owner()->id==Auth::user()->id)
        return view('apartments.edit', compact(['apartment', 'regions']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Apartment $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'region' => 'required'
        ]);

        $apartment = Apartment::find($id);
        $region = Region::find($request->get('region'));

        $apartment->name = $request->get('name');
        $apartment->phone = $request->get('phone');
        $apartment->region_id = $region->id;
        $apartment->save();

        return redirect('/apartments')->with('success', 'Apartment has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apartment $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apartment = Apartment::find($id);
        $apartment->delete();

        return redirect('/apartments')->with('success', 'Apartment has been deleted Successfully');
    }
}
