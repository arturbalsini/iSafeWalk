<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <span class="btn btn-primary btn-sm back" data-id="{{ $gateway->id }}"><i class="fa fa-undo"></i></span>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('gateway.update',$gateway->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input
                    type="text"
                    name="name"
                    value="{{ $gateway->name }}"
                    class="form-control"
                    placeholder="Name"
                    required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Serial:</strong>
                <input
                    type="text"
                    name="serial"
                    value="{{ $gateway->serial }}"
                    class="form-control"
                    placeholder="Serial"
                    required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zone:</strong>
                <select
                    class="form-control"
                    name="zone_id"
                    id="zone_id"
                    required>
                    <option value {{ old('zone_id', null) === null ? 'selected' : '' }}>Please select</option>
                    @foreach($zones as $key => $label)
                        <option value="{{ $key }}" {{ old('zone_id', null) === (string) $key ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Zone X:</strong>
                <input
                    type="number"
                    name="zone_x"
                    class="form-control"
                    placeholder="Zone X"
                    value="{{ $gateway->zone_x }}"
                    required>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Zone Y:</strong>
                <input
                    type="number"
                    name="zone_y"
                    class="form-control"
                    placeholder="Zone Y"
                    value="{{ $gateway->zone_y }}"
                    required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
