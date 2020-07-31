<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <span class="btn btn-primary btn-sm back" data-id="{{ $person->id }}"><i class="fa fa-undo"></i> Back</span>
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

<form action="{{ route('people.update',$person->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input
                    type="text"
                    name="name"
                    value="{{ $person->name }}"
                    class="form-control"
                    placeholder="Name"
                    required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                <input
                    type="text"
                    name="email"
                    value="{{ $person->email }}"
                    class="form-control"
                    placeholder="E-mail"
                    required>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <label class="required">Status</label>
                <select
                    class="form-control"
                    name="status"
                    id="status"
                    required>
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>Please select</option>
                    @foreach(App\People::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $person->status) === (string) $key ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Birth Date:</strong>
                <input
                    id="birth_date"
                    type="date"
                    name="birth_date"
                    value="{{ date('d/m/Y', strtotime($person->birth_date)) }}"
                    class="form-control"
                    placeholder="Birth Date"
                    required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Job Title:</strong>
                <input
                    type="text"
                    name="job_title"
                    value="{{ $person->job_title }}"
                    class="form-control"
                    placeholder="Job Title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Beacon:</strong>
                <select
                    class="form-control"
                    name="beacon_id"
                    id="beacon_id">
                    <option value {{ old('beacon_id', null) === null ? 'selected' : '' }}>Please select</option>
                    @foreach($beacons as $key => $label)
                        <option value="{{ $key }}" {{ old('beacon_id', $person->beacon_id) === (string) $key ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
