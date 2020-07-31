<?php

namespace App\Http\Controllers;

use App\Beacon;
use App\People;
use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = People::get();
        return view('people.index',compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $people = People::get();
        $beacons = Beacon::all()->pluck('name', 'id');
        return view('people.create', compact('people', 'beacons'));
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
            'email'=>'required',
            'status'=>'required',
            'birth_date'=>'required',
        ]);

        $person = new People([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'status' => $request->get('status'),
            'birth_date' => $request->get('birth_date'),
            'job_title' => $request->get('job_title'),
            'beacon_id' => $request->get('beacon_id'),
        ]);

        $person->save();
        return redirect()->route('people.index')
            ->with('success','Person created successfully.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $person = People::find($id);
        $status = People::STATUS_SELECT[$person->status];

        return view('people.show',compact('person', 'status'));
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function showHeader(int $id)
    {
        $person = People::find($id);
        $status = People::STATUS_SELECT[$person->status];

        return view('people.showHeader',compact('person', 'status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $person = People::find($id);
        $beacons = Beacon::all()->pluck('name', 'id');
        return view('people.edit',compact('person', 'beacons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int  $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'status'=>'required',
            'birth_date'=>'required',
        ]);

        $person = People::find($id);

        $person->name = $request->get('name');
        $person->email = $request->get('email');
        $person->status = $request->get('status');
        $person->birth_date = $request->get('birth_date');
        $person->job_title = $request->get('job_title');
        $person->beacon_id = $request->get('beacon_id');

        $person->save();

        return redirect()->route('people.index')
            ->with('success','Person updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $person = People::find($id);
        $person->delete();
    }

    public function locationMap(int $id)
    {
        $person = People::find($id);
        $status = People::STATUS_SELECT[$person->status];
        if (is_null($person->beacon)) {
            return view('people.show',compact('person', 'status'));
        }

        // Get sectors and their positions to draw the map
        $zones = $this->getZones();

        // Colocar a quantidade de vezes em uma determinada coordenada
        $gateways = $this->showGatewayLocations($person->beacon->id);

        return view('people.locationMap',compact('person', 'zones', 'gateways'));
    }

    private function showGatewayLocations(int $id, $startTime = null, $endTime = null)
    {
        $locations = [];
        $beaconLocations = DB::table('location_history AS lh')
            ->join('gateways AS g', 'lh.gateway_id', '=', 'g.id')
            ->select(
                'lh.beacon_id',
                'lh.gateway_id',
                'g.zone_id',
                'g.zone_x',
                'g.zone_y',
                DB::raw('SUM(lh.duration) AS total_duration')
            )
            ->where('lh.beacon_id', '=', $id)
            ->whereNull('lh.deleted_at')
            ->when($startTime, function ($query, $startTime) {
                return $query->where('location_time', '>=', $startTime);
            })
            ->when($endTime, function ($query, $endTime) {
                return $query->where('location_time', '<=', $endTime);
            })
            ->groupByRaw('lh.beacon_id, lh.gateway_id, g.zone_id, g.zone_x, g.zone_y')
            ->orderBy('lh.beacon_id')
            ->orderBy('lh.gateway_id')
            ->get();

        if ($beaconLocations->count() > 0) {
            foreach ($beaconLocations as $beaconLocation) {
                $locations[] = $beaconLocation;
            }
        }

        return $locations;
    }

    private function getZones()
    {
        $zonesAndSectors = [];
        $zones = Zone::get();

        foreach ($zones as $zone) {
            $zonesAndSectors[] = $this->decorateZone($zone);

            $sectors = $zone->sectors;
            foreach ($sectors as $sector) {
                $zonesAndSectors['sectors'][] = $this->decorateSector($sector);
            }
        }

        return $zonesAndSectors;
    }

    private function decorateZone($zone)
    {
        return [
            'zone_id' => $zone->id,
            'zone_name' => $zone->name,
            'zone_x_length' => $zone->x_length,
            'zone_y_width' => $zone->y_width,
            'zone_z_height' => $zone->z_height,
        ];
    }

    private function decorateSector($sector)
    {
        return [
            'name' => $sector->name,
            'x_length' => $sector->x_length,
            'y_width' => $sector->y_width,
            'z_height' => $sector->z_height,
            'zone_id' => $sector->zone_id,
            'initial_x' => $sector->initial_x,
            'initial_y' => $sector->initial_y,
        ];
    }

    public function interactionsFilter(int $id)
    {
        $person = People::find($id);
        $status = People::STATUS_SELECT[$person->status];
        if (is_null($person->beacon)) {
            return view('people.show',compact('person', 'status'))
                ->with('warning','No beacon.');
        }

        return view('people.interactionsFilter',compact('person'));
    }

    public function interactions()
    {
        $input = request();

        $person = People::find($input['id']);

        if (is_null($input['duration'])) {
            $input['duration'] = '00:00:00';
        }

        sscanf($input['duration'], "%d:%d:%d", $hours, $minutes, $seconds);

        $duration = isset($hours) ? $hours * 3600 : 0;
        $duration += isset($minutes) ? $minutes * 60 : 0;
        $duration += isset($seconds) ? $seconds : 0;

        $interactions = $this->getInteractions(
            $person->beacon->id,
            $input['startDate'],
            $input['endDate'],
            $duration,
            $input['distanceMin'],
            $input['distanceMax'],
            $person->beacon->id
        );

        if (empty($interactions)) {
            return view('people.interactionsList',compact('person', 'interactions'))
                ->with('warning','No interactions.');
        }

        if ($input['list']) {
            return view('people.interactionsList',compact('person', 'interactions'));
        }

        foreach ($interactions as $key => $value) {
            $interactions[$key]['secondary_interactions'] = $this->getInteractions(
                $value['secondary_beacon_id'],
                $input['startDate'],
                $input['endDate'],
                $duration,
                $input['distanceMin'],
                $input['distanceMax'],
                $person->beacon->id,
                false
            );
        }

        return view('people.interactions',compact('person', 'interactions'));
    }

    public function interactionsJson()
    {
        $input = request();

        $person = People::find($input['id']);

        if (is_null($input['duration'])) {
            $input['duration'] = '00:00:00';
        }

        sscanf($input['duration'], "%d:%d:%d", $hours, $minutes, $seconds);

        $duration = isset($hours) ? $hours * 3600 : 0;
        $duration += isset($minutes) ? $minutes * 60 : 0;
        $duration += isset($seconds) ? $seconds : 0;

        $interactions = $this->getInteractionsForMap(
            $person->beacon->id,
            $input['startDate'],
            $input['endDate'],
            $duration,
            $input['distanceMin'],
            $input['distanceMax'],
            $person->beacon->id
        );

        if (empty($interactions)) {
            return view('people.interactionsList',compact('person', 'interactions'))
                ->with('warning','No interactions.');
        }

        if ($input['list']) {
            return view('people.interactionsList',compact('person', 'interactions'));
        }

        foreach ($interactions as $key => $value) {
            $interactions[$key]['secondary_interactions'] = $this->getInteractionsForMap(
                $value['secondary_beacon_id'],
                $input['startDate'],
                $input['endDate'],
                $duration,
                $input['distanceMin'],
                $input['distanceMax'],
                $person->beacon->id,
                false
            );
        }

        return \Response::json(array('interactions' => $interactions, 'person' => $person));
    }

    private function getInteractions(
        int $beaconId,
        $startDate = null,
        $endDate = null,
        $duration = 0,
        $distanceMin = 0,
        $distanceMax = 2,
        int $previousBeacon = null,
        $list = true
    )
    {
        if (is_null($startDate)) {
            $startDate = date('Y-m-d');
        }

        $startDate = date('Y-m-d 00:00:00', strtotime($startDate));

        if (is_null($endDate)) {
            $endDate = date('Y-m-d');
        }
        $endDate = date('Y-m-d 23:59:59', strtotime($endDate));

        $interactions = [];

        $previousInteractions = DB::table('beacons_interactions AS bi')
            ->leftJoin('people AS p', 'bi.secondary_beacon_id', '=', 'p.beacon_id')
            ->join('beacons AS b', 'bi.secondary_beacon_id', '=', 'b.id')
            ->select(
                'bi.primary_beacon_id',
                'bi.secondary_beacon_id',
                'bi.distance',
                'p.id AS person_id',
                'p.name AS person_name',
                'b.name AS beacon_name'
            )
            ->selectRaw('SUM(bi.duration) AS duration')
            ->where('bi.primary_beacon_id', '=', $beaconId)
            ->where('bi.interaction_time', '>=', $startDate)
            ->where('bi.interaction_time', '<=', $endDate)
            ->where('bi.distance', '>=', $distanceMin)
            ->where('bi.distance', '<=', $distanceMax)
            ->where('duration', '>=', $duration)
            ->when($previousBeacon, function ($query, $previousBeacon) {
                return $query->where('bi.secondary_beacon_id', '!=', $previousBeacon);
            })
            ->whereNull('bi.deleted_at')
            ->whereNull('p.deleted_at')
            ->groupByRaw('bi.primary_beacon_id, bi.secondary_beacon_id, person_id, person_name, beacon_name, distance')
            ->when($list, function ($query) {
                return $query->orderBy('duration', 'desc');
            })
            ->orderBy('bi.secondary_beacon_id')
            ->get();

        if ($previousInteractions->count() == 0) {
            return $interactions;
        }

        foreach ($previousInteractions as $previousInteraction) {
            $interactions[] = $this->decorateInteraction($previousInteraction);
        }

        return $interactions;
    }

    private function getInteractionsForMap(
        int $beaconId,
        $startDate = null,
        $endDate = null,
        $duration = 0,
        $distanceMin = 0,
        $distanceMax = 2,
        int $previousBeacon = null,
        $list = true
    )
    {
        if (is_null($startDate)) {
            $startDate = date('Y-m-d');
        }

        $startDate = date('Y-m-d 00:00:00', strtotime($startDate));

        if (is_null($endDate)) {
            $endDate = date('Y-m-d');
        }
        $endDate = date('Y-m-d 23:59:59', strtotime($endDate));

        $interactions = [];

        $previousInteractions = DB::table('beacons_interactions AS bi')
            ->leftJoin('people AS p', 'bi.secondary_beacon_id', '=', 'p.beacon_id')
            ->join('beacons AS b', 'bi.secondary_beacon_id', '=', 'b.id')
            ->select(
                'bi.primary_beacon_id',
                'bi.secondary_beacon_id',
                'p.id AS person_id',
                'p.name AS person_name',
                'b.name AS beacon_name'
            )
            ->selectRaw('SUM(bi.duration) AS duration')
            ->where('bi.primary_beacon_id', '=', $beaconId)
            ->where('bi.interaction_time', '>=', $startDate)
            ->where('bi.interaction_time', '<=', $endDate)
            ->where('bi.distance', '>=', $distanceMin)
            ->where('bi.distance', '<=', $distanceMax)
            ->where('duration', '>=', $duration)
            ->when($previousBeacon, function ($query, $previousBeacon) {
                return $query->where('bi.secondary_beacon_id', '!=', $previousBeacon);
            })
            ->whereNull('bi.deleted_at')
            ->whereNull('p.deleted_at')
            ->groupByRaw('bi.primary_beacon_id, bi.secondary_beacon_id, person_id, person_name, beacon_name')
            ->when($list, function ($query) {
                return $query->orderBy('duration', 'desc');
            })
            ->orderBy('bi.secondary_beacon_id')
            ->get();

        if ($previousInteractions->count() == 0) {
            return $interactions;
        }

        foreach ($previousInteractions as $previousInteraction) {
            $interactions[] = $this->decorateInteraction($previousInteraction);
        }

        return $interactions;
    }

    private function decorateInteraction($interaction)
    {
        return [
            'primary_beacon_id' => $interaction->primary_beacon_id,
            'secondary_beacon_id' => $interaction->secondary_beacon_id,
            'duration' => $interaction->duration,
            'distance' => $interaction->distance ?? null,
            'person_id' => $interaction->person_id,
            'person_name' => $interaction->person_name,
            'beacon_name' => $interaction->beacon_name,
        ];
    }
}
