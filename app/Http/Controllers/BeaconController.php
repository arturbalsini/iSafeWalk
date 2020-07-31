<?php

namespace App\Http\Controllers;

use App\Beacon;
use App\BeaconsInteractions;
use Illuminate\Http\Request;

class BeaconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beacons = Beacon::get();
        return view('beacon.index',compact('beacons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $beacons = Beacon::get();
        return view('beacon.create', compact('beacons'));
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
            'name'=>'required',
            'serial'=>'required',
        ]);

        $beacon = new Beacon([
            'name' => $request->get('name'),
            'serial' => $request->get('serial'),
        ]);

        $beacon->save();

        return redirect()->route('beacon.index')
            ->with('success','Beacon created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $beacon = Beacon::find($id);

        return view('beacon.show',compact('beacon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $beacon = Beacon::find($id);
        return view('beacon.edit',compact('beacon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name'=>'required',
            'serial'=>'required',
        ]);

        $beacon = Beacon::find($id);

        $beacon->name = $request->get('name');
        $beacon->serial = $request->get('serial');

        $beacon->save();

        return redirect()->route('beacon.index')
            ->with('success','Beacon updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     */
    public function destroy(int $id)
    {
        $beacon = Beacon::find($id);

        $beacon->delete();
    }

    public function apiInsertInteractions(Request $request)
    {
        return BeaconsInteractions::create($request->all());
    }
}
