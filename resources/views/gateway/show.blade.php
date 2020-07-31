<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <span class="btn btn-primary btn-sm edit" data-id="{{ $gateway->id }}"><i class="fa fa-pencil"></i></span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ID:</strong>
            {{ $gateway->id }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $gateway->name }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Serial:</strong>
            {{ $gateway->serial }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Zone:</strong>
            {{ $gateway->zone->name }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Zone X:</strong>
            {{ $gateway->zone_x }}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Zone Y:</strong>
            {{ $gateway->zone_y }}
        </div>
    </div>
</div>
