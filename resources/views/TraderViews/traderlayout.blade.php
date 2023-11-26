<html>

<head>
    <title>
        Transportation Management
    </title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <header>
        <h1 style="text-align:center; font-family:Arial"><b>RAS Logistics</b></h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <a class="navbar-brand" href="/welcome"><b style="color:white">Log out</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/traderhome"><b style="color:white">Home</b> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/tradeviews"><b style="color:white">Trade_Views</b></a>
                </li>
               <li class="nav-item active">
                    <a class="nav-link" href="/googlemap"><b style="color:white">Google_Map</b></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/ontrack"><b style="color:white">Deals_on_track</b></a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#"><b>Get Fare</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><b>Booking</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="google-autocomplete"><b>Google Map</b></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <b>Dropdown link</b> 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="\contactus"><b>Contact us</b></a>
                </li> -->
            </ul>
        </div>
    </nav>
    </header>
    <style>
        body{
            background-image: url(tomato.jpg);
        }
        </style>
</head>

<body>
    <div class="container">
        @yield('content');
    </div>
    <footer>
        <h4 style="text-align:center">@copyright RAS_Logistics</h3>
    </footer>
</body>

</html>




