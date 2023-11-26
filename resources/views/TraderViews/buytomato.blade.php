@extends('TraderViews\traderlayout')

@section('content')

<head>
  <style>
    .Regisclass {

      background-color: salmon;
      width: 600px;
      margin: 60px auto;
      display: -webkit-box;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      flex-direction: column;
      border-radius: 4px;
      box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);

    }

    form {
      justify-content: center;
    }

    h1 {
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    label {
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
  </style>
</head>

<body>




  
  <div style="text-align:center">
    <h2>Buy Selected Tomato Trade</h2>


    <br>
    <br>

    <ul class="list-group">

      <li class="list-group-item list-group-item-light">FARMER CONTACT</li>
      <h2>Trade ID :- {{$user->id}}</h2>
      <li class="list-group-item list-group-item-primary">
        <h2>Farmer Name :- {{$user->FarmerName}}</h2>
      </li>
      <li class="list-group-item list-group-item-secondary">
        <h2>Farmer Contact :- {{$user->FarmerContact}}</h2>
      </li>
      <li class="list-group-item list-group-item-success">
        <h2>Farmer Address :- {{$user->FarmerAddress}}</h2>
      </li>
      <li class="list-group-item list-group-item-light">TRADE DETAILS</li>
      <li class="list-group-item list-group-item-danger">
        <h2>Tomato Quantity :- {{$user->Quantity}}</h2>
      </li>
      <li class="list-group-item list-group-item-warning">
        <h2>Expected Price :- Rs {{$user->ExpPrice}} Per KG </h2>
      </li>
      <li class="list-group-item list-group-item-info">
        <h2>Size of Tomatoes:- {{$user->Tsize}}</h2>
      </li>
      <li class="list-group-item list-group-item-dark">
        <h2>Farmer has a delivery vehicle:- {{$user->Vehicle}}</h2>
      </li>
    </ul>


    <br>
    <div class="Regisclass" style="text-align:center" justify-content="center">
      <h2>Buy the offer ?</h2>
      <form action='/traderbuys' method='post' id='108'>
        @csrf
        <div class="form-group">
          <input type="hidden" value="{{$user->id}}" name="id">
          <input type="hidden" name="dname" value='{{$user->FarmerName}}'>
          <input type="hidden" name="dcontact" value='{{$user->FarmerContact}}'>
          <input type="hidden" name="daddress" value='{{$user->FarmerAddress}}'>
          <input type="hidden" name="dquantity" value='{{$user->Quantity}}'>
        </div>

        <label for="offer">Your Offer: </label>
        <input type="text" name="offer" placeholder="Enter Your Offer"><br>(in Rs. per KG)
        <span style="color:red">@error('offer'){{$message}}@enderror</span>
        <br><br>

        <label for="buyname">Buyers Name: </label>
        <input type="text" name="buyername" placeholder="Enter Name"><br>
        <span style="color:red">@error('dname'){{$message}}@enderror</span>
        <br>

        <label for="buycontact">Contact : </label>
        <input type="number" name="buyercontact" placeholder="Enter Number"><br>
        <span style="color:red">@error('dcontact'){{$message}}@enderror</span>
        <br>
        <!--Hiddenfields-->




        <button type="submit">submit</button>
      </form>
    </div>
  </div>

  @stop