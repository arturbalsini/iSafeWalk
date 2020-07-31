<?php

namespace App\Http\Controllers;

use App\Sector;
use App\Zone;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectors = Sector::get();
        return view('sector.index',compact('sectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectors = Sector::get();
        $zones = Zone::all()->pluck('name', 'id');
        return view('sector.create', compact('sectors', 'zones'));
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
            'zone_id'=>'required',
            'initial_x'=>'required',
            'initial_y'=>'required',
        ]);

        $sector = new Sector([
            'name' => $request->get('name'),
            'x_length' => $request->get('x_length'),
            'y_width' => $request->get('y_width'),
            'z_height' => $request->get('z_height'),
            'zone_id' => $request->get('zone_id'),
            'initial_x' => $request->get('initial_x'),
            'initial_y' => $request->get('initial_y'),
        ]);
        $sector->save();
        return redirect()->route('sector.index')
            ->with('success','Sector created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sector = Sector::find($id);
        return view('sector.show',compact('sector'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sector = Sector::find($id);
        $zones = Zone::all()->pluck('name', 'id');
        return view('sector.edit',compact('sector', 'zones'));
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
            'zone_id'=>'required',
            'initial_x'=>'required',
            'initial_y'=>'required',
        ]);

        $sector = Sector::find($id);

        $sector->name = $request->get('name');
        $sector->x_length = $request->get('x_length');
        $sector->y_width = $request->get('y_width');
        $sector->z_height = $request->get('z_height');
        $sector->zone_id = $request->get('zone_id');
        $sector->initial_x = $request->get('initial_x');
        $sector->initial_y = $request->get('initial_y');

        $sector->save();

        return redirect()->route('sector.index')
            ->with('success','Sector updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sector = Sector::find($id);

        $sector->delete();
    }
}
