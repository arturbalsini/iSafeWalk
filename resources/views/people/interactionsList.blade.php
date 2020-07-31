<div id="interactions">
    @if (!is_null($interactions))
        <h3 class="mt-4 mb-4">Employees exposed <span class="badge badge-secondary">{{count($interactions)}}</span></h3>
        @foreach($interactions as $interaction)
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 primary-interaction card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                <i class="fa fa-user-circle-o"></i>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <strong>Name:</strong>
                                {{ $interaction['person_name'] ?? null }}
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <strong>Beacon:</strong>
                                {{ $interaction['beacon_name'] }}
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <strong>Distance:</strong>
                                {{ $interaction['distance'] }}
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 text-center">
                                @php
                                    $width = ($interaction['duration'] * 100)/$interactions[0]['duration'];
                                    if($interaction['duration'] >= 900) {
                                        $color = "#D72129";
                                    } else if($interaction['duration'] < 900 && $interaction['duration'] >= 600) {
                                        $color = "#FCDE1E";
                                    } else {
                                        $color = "#86BD42";
                                    }
                                @endphp
                                <div class="progress">
                                    <div class="progress-bar" style="width: {{$width}}%; background-color:{{$color}}" role="progressbar" aria-valuenow="{{$width}}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                {{ date('H:i:s', $interaction['duration']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>

@if(!empty($warning))
    <script type="text/javascript" async>
        alert('{{ $warning }}');
    </script>
@endif
