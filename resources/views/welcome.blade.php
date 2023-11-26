@extends('CommonViews\commonlayout')

@section('content')

<head>
  <style>
    body {
      width: 100vw;
      height: 100vh;
      margin: 0;
      padding: 0;
    }

    .bg-image {
      width: 100%;
      min-height: 100%;
      background-image: url("../Images/19144.jpg");
      background-position: center;
      background-size: cover;
    }

    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body>
  <div class="bg-image">

    <h1 style="text-align:center">Welcome to the Tomato Marketplace</h1>
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="tomato3.jpg" alt="Los Angeles" width="1100" height="100">
          <div class="carousel-caption">

            <h3>A Platform for Tomato Trading</h3>
          </div>
        </div>
      </div>
    </div>
    <br>
<div style="text-align:center">
    <a href="farmerlogin" class="btn btn-info" role="button">Farmer Login</a>
    <a href="traderlogin" class="btn btn-info" role="button">Trader Login</a><br><br>
    <a href="registerfarmer" class="btn btn-info" role="button">Register New Farmer Account</a>
    <a href="registertrader" class="btn btn-info" role="button">Register New Trader Account</a>
</div>
  </div>
</body>
</head>

@stop