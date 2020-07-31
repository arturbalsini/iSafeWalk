<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <span class="btn btn-primary btn-sm back" data-id="{{ $sector->id }}"><i class="fa fa-undo"></i></span>
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

<form action="{{ route('sector.update',$sector->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input
                    type="text"
                    name="name"
                    value="{{ $sector->name }}"
                    class="form-control"
                    placeholder="Name"
                    required>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Length (X):</strong>
                <input
                    type="number"
                    name="x_length"
                    class="form-control"
                    placeholder="Length (X)"
                    value="{{ $sector->x_length }}"
                    required>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Width (Y):</strong>
                <input
                    type="number"
                    name="y_width"
                    class="form-control"
                    placeholder="Width (Y)"
                    value="{{ $sector->y_width }}"
                    required>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Height (Z):</strong>
                <input
                    type="number"
                    name="z_height"
                    class="form-control"
                    placeholder="Height (Z)"
                    value="{{ $sector->z_height }}"
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
                <strong>Zone Initial X:</strong>
                <input
                    type="number"
                    name="initial_x"
                    class="form-control"
                    placeholder="Zone Initial X"
                    value="{{ $sector->initial_x }}"
                    required>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6  ">
            <div class="form-group">
                <strong>Zone Initial Y:</strong>
                <input
                    type="number"
                    name="initial_y"
                    class="form-control"
                    placeholder="Zone Initial Y"
                    value="{{ $sector->initial_y }}"
                    required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
