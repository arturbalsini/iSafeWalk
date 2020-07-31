<div class="row">
    <div class="col-lg-6">
        {{ $person->name }}
    </div>

    <div class="col-lg-6 margin-tb">
        <div class="pull-right">
            <span class="btn btn-primary btn-sm back" data-id="{{ $person->id }}"> <i class="fa fa-undo"></i> Back</span>
        </div>
    </div>
</div>

<hr/>

<div class="tab-content" id="nav-tabContent">
    <canvas id="canvas" width="720" height="480"></canvas>
</div>

<script type="text/javascript" async>
    $(function() {
        const canvas = $('#canvas')[0];
        const ctx = canvas.getContext('2d');
        let gradient = '';
        let radius1 = 0;
        let radius2 = 0;

        ctx.strokeStyle = '#000000';
        ctx.lineWidth = 1;
        let img = new Image();

        img.onload = function() {
            ctx.drawImage(img, 0, 0, 720, 480);

            // Draw zone
            let x = 0;
            let y = 0;
            let w = {{ $zones[0]['zone_x_length'] }} * 5;
            let h = {{ $zones[0]['zone_y_width'] }} * 5;
            ctx.beginPath();
            ctx.rect(0, 0, w, h);
            ctx.stroke();
            ctx.closePath();

            {{--// Draw gateway locations--}}
            {{--@foreach($gateways as $gateway)--}}
            {{--    x = {{ $gateway->zone_x * 5 }};--}}
            {{--    y = {{ $gateway->zone_y * 5 }};--}}

            {{--    radius1 = {{ $gateway->total_duration / 6 }};--}}
            {{--    radius2 = {{ $gateway->total_duration / 2 }};--}}

            {{--    gradient = ctx.createRadialGradient(x, y, radius1, x, y, radius2);--}}
            {{--    gradient.addColorStop(0, 'rgba(255, 15, 0, 0.7)');--}}
            {{--    gradient.addColorStop(1, 'rgba(255, 255, 0, 0.7)');--}}
            {{--    ctx.fillStyle = gradient;--}}
            {{--    ctx.strokeStyle = '#FFFF00';--}}
            {{--    x = x + 2.5;--}}
            {{--    y = y + 2.5;--}}
            {{--    ctx.beginPath();--}}
            {{--    ctx.arc(x, y, {{ $gateway->total_duration / 2 }}, 0, Math.PI*2);--}}
            {{--    ctx.fill();--}}
            {{--    ctx.closePath();--}}
            {{--@endforeach--}}


            {{--ctx.strokeStyle = '#000000';--}}
            {{--ctx.lineWidth = 1;--}}
            {{--// Draw sectors--}}
            {{--@foreach($zones['sectors'] as $sector)--}}
            {{--    x = {{ $sector['initial_x'] }} * 5--}}
            {{--    y = {{ $sector['initial_y'] }} * 5--}}
            {{--    w = {{ $sector['x_length'] }} * 5;--}}
            {{--    h = {{ $sector['y_width'] }} * 5;--}}
            {{--    ctx.beginPath();--}}
            {{--    ctx.rect(x, y, w, h);--}}
            {{--    ctx.stroke();--}}
            {{--    ctx.closePath();--}}
            {{--@endforeach--}}
        }

        if (doesFileExist("{{ asset('public') }}/img/embalagem-{{ $person->id }}.png")) {
            img.src = "{{ asset('public') }}/img/embalagem-{{ $person->id }}.png";
        } else {
            img.src = "{{ asset('public') }}/img/embalagem.png";
        }
    });

    function doesFileExist(urlToFile) {
        let xhr = new XMLHttpRequest();
        xhr.open('HEAD', urlToFile, false);
        xhr.send();

        if (xhr.status == "404") {
            return false;
        } else {
            return true;
        }
    }
</script>
