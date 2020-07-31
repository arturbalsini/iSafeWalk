<div class="row">
    <div class="col-lg-12 margin-tb" style="position: absolute">
        <div class="pull-right">
            <span class="btn btn-primary btn-sm edit" data-id="{{ $person->id }}"><i class="fa fa-pencil"></i></span>
        </div>
        @if (!is_null($person->beacon))
            <div class="pull-right" style="padding: 0px 20px 0px 0px">
                <span class="btn btn-primary btn-sm location-map" data-id="{{ $person->id }}"> <i class="fa fa-street-view"></i></span>
            </div>
            <div class="pull-right" style="padding: 0px 20px 0px 0px">
                <span class="btn btn-primary btn-sm interactions-filter" data-id="{{ $person->id }}"> <i class="fa fa-handshake-o"></i></span>
            </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-lg-9 margin-tb">
        <h3>
            <i class="fa fa-user-circle"></i>
            {{ $person->name }}
        </h3>
        @if (!is_null($person->job_title))

                {{ $person->job_title }}

        @endif

    </div>
</div>
