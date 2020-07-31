<!DOCTYPE html>
<html>
<head>
    <title>iSafeWalk - Employees</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/stylesheet.css')}}" type="text/css"> 

</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
            <ul class="list-unsinteractionsyled components">
                <li>
                    <a href="/">
                        <i class="fa fa-home" ></i>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('/people') }}">
                        <i class="fa fa-users" ></i>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/beacon') }}">
                        <i class="fa fa-tablet"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/zone') }}">
                        <i class="fa fa-map-o"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/sector') }}">
                        <i class="fa fa-puzzle-piece"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/gateway') }}">
                        <i class="fa fa-wifi"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="col-sm-3 i-list">
            <div class="row">
                <div class="col-10">
                    <h2>Employees&nbsp;<span style="font-size: 1.25rem;color: #cccccc">({{ count($people) }})</span></h2>
                </div>
                <div class="col">
                    <a href="#" id="create-person" class="btn btn-success"><i class="fa fa-plus" style="font-size: inherit"></i></a>
                </div>
            </div>
            <hr/>
            @foreach($people as $person)
                <div class="row list" data-id="{{ $person->id }}">
                    <div class="col d-none d-sm-block">
                        <i class="fa fa-user-circle"></i>
                    </div>
                    <div class="col-5 text-truncate" style="font-size: 8pt;">
                        <b>{{ $person->name }}</b><br>
                        <span style="color: #999999">{{ $person->job_title }}</span>
                    </div>
                    <div class="col text-truncate">
                        <span style="font-size: 8pt; float: left"><?= \App\People::STATUS_SELECT[$person->status]; ?></span>
                    </div>
                    <div class="col">
                        <a  href="#" class="btn btn-danger btn-sm delete" data-id="{{ $person->id }}">
                            <i class="fa fa-trash" style="font-size: inherit"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div id="content" class="col-sm-8 container-fluid bg-light">
            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ URL::asset('jquery_ui/jquery-ui.js')}}"></script>
    <link rel="stylesheet" href="{{ URL::asset('jquery_ui/jquery-ui.js')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Resources -->
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/plugins/forceDirected.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment-with-locales.min.js" integrity="sha256-4HOrwHz9ACPZBxAav7mYYlbeMiAL0h6+lZ36cLNpR+E=" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/common.js')}}"></script>
    <script type="text/javascript" async>
        $(document).on('click', '.list', function () {
            $('.list').removeClass('active');
            $(this).addClass('active');

            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/people/') }}/${id}`,
                beforeSend: function() {
                    openLoad();
                },
                success: function (data) {
                    $('#content').html(data);
                    getHeader(id);
                    closeLoad();
                },
                error: function (error) {
                    closeLoad();
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        const getHeader = function (id) {
            $.ajax({
                url: `{{ url('/people/') }}/${id}/header`,
                success: function (data) {
                    $('#content-header').html(data);
                },
                error: function (error) {
                    closeLoad();
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        }

        $(document).on('click', '.delete', function (e) {
            e.stopPropagation();
            if (confirm("Do you really want to delete this record?")) {
                let id = $(this).data('id');

                $.ajax({
                    url: `{{ url('/people/') }}/${id}`,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        openLoad();
                    },
                    success: function () {
                        closeLoad();
                        window.location.reload();
                    },
                    error: function (error) {
                        closeLoad();
                        alert('An error has occurred');
                        console.log(error);
                    }
                });
            }
        });

        $(document).on('click', '#create-person', function () {
            $.ajax({
                url: `{{ url('/people/create') }}`,
                beforeSend: function() {
                    openLoad();
                },
                success: function (data) {
                    closeLoad();
                    $('#content').html(data);
                },
                error: function (error) {
                    closeLoad();
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.edit', function () {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/people/') }}/${id}/edit`,
                beforeSend: function() {
                    openLoad();
                },
                success: function (data) {
                    closeLoad();
                    $('#content').html(data);
                },
                error: function (error) {
                    closeLoad();
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.location-map', function () {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/people/') }}/${id}/location-map`,
                beforeSend: function() {
                    openLoad();
                },
                success: function (data) {
                    closeLoad();
                    $('#content').html(data);
                },
                error: function (error) {
                    closeLoad();
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.interactions-filter', function () {
            let id = $(this).data('id');
            $('#show-person').remove();

            $.ajax({
                url: `{{ url('/people/') }}/${id}/interactions`,
                beforeSend: function() {
                    openLoad();
                },
                success: function (data) {
                    $('#content-header').html(data);
                    closeLoad();
                },
                error: function (error) {
                    closeLoad();
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.interactions', function () {
            let id = $('#person-id').val();
            let startDate = $('#start-date').val();
            let endDate = $('#end-date').val();
            let duration = $('#duration').val();
            let distanceMin = $("#slider-range").slider("values", 0);
            let distanceMax = $("#slider-range").slider("values", 1);
            let list = 0;

            const getInteractions = () => {
                $.ajax({
                    url: `{{ url('/people/') }}/${id}/interactionsJson`,
                    type: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        id,
                        startDate,
                        endDate,
                        duration,
                        distanceMin,
                        distanceMax,
                        list
                    },
                    success: function (data) {
                        closeLoad();
                        $(document).trigger('integrationsLoaded', data);
                    },
                    error: function (error) {
                        closeLoad();
                        alert('An error has occurred');
                        console.log(error);
                    }
                });
            }

            $.ajax({
                url: `{{ url('/people/') }}/${id}/interactions`,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id,
                    startDate,
                    endDate,
                    duration,
                    distanceMin,
                    distanceMax,
                    list
                },
                beforeSend: function() {
                    openLoad();
                },
                success: function (data) {
                    $('#interactions').html(data);
                    getInteractions(id);
                },
                error: function (error) {
                    closeLoad();
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.interactions-list', function () {
            let id = $('#person-id').val();
            let startDate = $('#start-date').val();
            let endDate = $('#end-date').val();
            let duration = $('#duration').val();
            let distanceMin = $("#slider-range").slider("values", 0);
            let distanceMax = $("#slider-range").slider("values", 1);
            let list = 1;

            $.ajax({
                url: `{{ url('/people/') }}/${id}/interactions`,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id,
                    startDate,
                    endDate,
                    duration,
                    distanceMin,
                    distanceMax,
                    list
                },
                beforeSend: function() {
                    openLoad();
                },
                success: function (data) {
                    closeLoad();
                    $('#interactions').html(data);
                },
                error: function (error) {
                    closeLoad();
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.back', function () {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/people/') }}/${id}`,
                beforeSend: function() {
                    openLoad();
                },
                success: function (data) {
                    $('#content').html(data);
                    getHeader(id);
                    closeLoad();
                },
                error: function (error) {
                    closeLoad();
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.back-filter', function () {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/people/') }}/${id}/interactions`,
                beforeSend: function() {
                    openLoad();
                },
                success: function (data) {
                    closeLoad();
                    $('#content').html(data);
                },
                error: function (error) {
                    closeLoad();
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });
    </script>
</body>
</html>
