<?php

namespace App\Http\Controllers;

use App\Gateway;
use App\Zone;
use Illuminate\Http\Request;

class GatewayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gateways = Gateway::get();
        return view('gateway.index',compact('gateways'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gateways = Gateway::get();
        $zones = Zone::all()->pluck('name', 'id');
        return view('gateway.create', compact('gateways', 'zones'));
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
            'zone_id'=>'required',
            'zone_x'=>'required',
            'zone_y'=>'required',
        ]);

        $gateway = new Gateway([
            'name' => $request->get('name'),
            'serial' => $request->get('serial'),
            'zone_id' => $request->get('zone_id'),
            'zone_x' => $request->get('zone_x'),
            'zone_y' => $request->get('zone_y'),
        ]);

        $gateway->save();
        return redirect()->route('gateway.index')
            ->with('success','Gateway created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gateway = Gateway::find($id);
        return view('gateway.show',compact('gateway'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gateway = Gateway::find($id);
        $zones = Zone::all()->pluck('name', 'id');
        return view('gateway.edit',compact('gateway', 'zones'));
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
            'serial'=>'required',
            'zone_id'=>'required',
            'zone_x'=>'required',
            'zone_y'=>'required',
        ]);

        $gateway = Gateway::find($id);

        $gateway->name = $request->get('name');
        $gateway->serial = $request->get('serial');
        $gateway->zone_id = $request->get('zone_id');
        $gateway->zone_x = $request->get('zone_x');
        $gateway->zone_y = $request->get('zone_y');

        $gateway->save();

        return redirect()->route('gateway.index')
            ->with('success','Gateway updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gateway = Gateway::find($id);
        $gateway->delete();
    }
}
