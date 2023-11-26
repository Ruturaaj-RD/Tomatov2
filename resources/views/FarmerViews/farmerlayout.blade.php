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
        <h1 style="text-align:center; font-family:Arial"><b>Tomato Marketplace</b></h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <a class="navbar-brand" href="/welcome"><b style="color:white">Log out</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/farmerhome"><b style="color:white">Home</b> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/farmerraisetomtra"><b style="color:white">Raise_Tomato_Trade</b></a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="/farmertracktrade"><b style="color:white">Track_Trades</b></a>
                </li>
               <li class="nav-item">
                    <a class="nav-link" href="/ontrackf"><b style="color:white">Deals_on_track</b></a>
                </li>
                </li>
               <li class="nav-item">
                    <a class="nav-link" href="/calculatorf"><b style="color:white">Calculator</b></a>
                </li>
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




