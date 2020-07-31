<input type="hidden" id="person-id" value="{{ $person->id }}">

<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 text-center">
        <div class="form-group">
            <strong>Start Date:</strong>
            <input
                id="start-date"
                type="date"
                name="startDate"
                class="form-control"
                placeholder="Start Date">
        </div>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 text-center">
        <div class="form-group">
            <strong>End Date:</strong>
            <input
                id="end-date"
                type="date"
                name="endDate"
                class="form-control"
                placeholder="End Date">
        </div>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 text-center">
        <div class="form-group">
            <strong>Minimum duration:</strong>
            <input
                id="duration"
                type="time"
                name="duration"
                class="form-control"
                step="1"
                placeholder="Minimum duration">
        </div>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 text-center">
        <strong>Distance:</strong>
        <input
            class="col-xs-6 col-sm-6 col-md-6"
            type="text"
            id="amount"
            readonly
            style="border:0;">
        <div id="slider-range"></div>
    </div>
</div>

<div class="row">
    <div class="col-xs-5 col-sm-5 col-md-5 text-right">
        <button class="btn btn-primary interactions-list"><i class="fa fa-th-list"></i> Direct contact</button>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">
        <button class="btn btn-primary interactions"><i class="fa fa-share-alt"></i> Interaction tree</button>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2">
        <span class="btn btn-primary back" data-id="{{ $person->id }}"><i class="fa fa-undo"></i> Back</span>
    </div>
</div>

@if(!empty($warning))
    <script type="text/javascript" async>
        alert('{{ $warning }}');
    </script>
@endif

<script type="text/javascript">
    startDate = document.getElementById('start-date');
    endDate = document.getElementById('end-date');
    btnInteractions = document.querySelector('button.btn.interactions-list');
    btnInteractionsTree = document.querySelector('button.btn.interactions');

    if ((savedStart = localStorage.getItem('interaction-filter-start-date')) != '') {
        startDate.value = savedStart;
    }

    if ((savedEnd = localStorage.getItem('interaction-filter-end-date')) != '') {
        endDate.value = savedEnd;
    }

    startDate.onchange = function() {
        localStorage.setItem('interaction-filter-start-date', startDate.value);
        checkDatesFilled();
    };
    endDate.onchange = function() {
        localStorage.setItem('interaction-filter-end-date', endDate.value);
        checkDatesFilled();
    };

    function checkDatesFilled() {
        btnInteractions.removeAttribute('disabled');
        btnInteractionsTree.removeAttribute('disabled');

        if (!startDate.value || !endDate.value) {
            btnInteractions.setAttribute('disabled', 'true');
            btnInteractionsTree.setAttribute('disabled', 'true');
        }
    }
    checkDatesFilled();

    $(function() {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 20,
            values: [0, 2],
            slide: function(event, ui) {
                $("#amount").val(ui.values[0] + " - " + ui.values[1]);
            }
        });
        $("#amount").val($("#slider-range").slider("values", 0) +
            " - " + $("#slider-range").slider("values", 1));
    });
</script>
