<div id="content-header" class="col-sm-12 container-fluid">
    @yield('content-header')
</div>

<div id="show-person">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $person->id }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $person->name }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                {{ $person->email }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $status }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Birth Date:</strong>
                {{ date('d/m/Y', strtotime($person->birth_date)) }}
            </div>
        </div>
    </div>
    @if (!is_null($person->job_title))
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Job Title:</strong>
                    {{ $person->job_title }}
                </div>
            </div>
        </div>
    @endif

    @if (!is_null($person->beacon))
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Beacon:</strong>
                    {{ $person->beacon->name ?? null }}
                </div>
            </div>
        </div>
    @endif
</div>

<div id="interactions"></div>

@if(!empty($warning))
    <script type="text/javascript" async>
        alert('{{ $warning }}');
    </script>
@endif
