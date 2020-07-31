<?php

namespace App\Http\Controllers;

use App\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zones = Zone::get();
        return view('zone.index',compact('zones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones = Zone::get();
        return view('zone.create',compact('zones'));
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
            'x_length'=>'required',
            'y_width'=>'required',
            'z_height'=>'required',
        ]);

        $zone = new Zone([
            'name' => $request->get('name'),
            'x_length' => $request->get('x_length'),
            'y_width' => $request->get('y_width'),
            'z_height' => $request->get('z_height'),
        ]);

        $zone->save();

        return redirect()->route('zone.index')
            ->with('success','Zone created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $zone = Zone::find($id);
        return view('zone.show',compact('zone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zone = Zone::find($id);
        return view('zone.edit',compact('zone'));
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
        $request->validate([
            'name'=>'required',
            'x_length'=>'required',
            'y_width'=>'required',
            'z_height'=>'required',
        ]);

        $zone = Zone::find($id);

        $zone->name = $request->get('name');
        $zone->x_length = $request->get('x_length');
        $zone->y_width = $request->get('y_width');
        $zone->z_height = $request->get('z_height');

        $zone->save();

        return redirect()->route('zone.index')
            ->with('success','Zone updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $zone = Zone::find($id);

        $zone->delete();
    }
}
