<!DOCTYPE html>
<html>
<head>
    <title>iSafeWalk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/stylesheet.css')}}" type="text/css"> 
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="/">
                        <i class="fa fa-home" ></i>
                    </a>
                </li>
                <li>
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
        <div class="col-sm-12 container-fluid bg-light">
            <div class="col-sm-12 i-list text-center">
                <hr/>
                <h1>iSafeWalk</h1>
                <hr/>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
