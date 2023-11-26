@extends('TraderViews\traderlayout')

@section('content')

<div class="welcomeclass">
  <br><br>
  <h2 style="text-align:center; color:white"><b><u>Trade Requests</u></b></h2><br>

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Address</th>
        <th scope="col">Tomato_Quantity</th>
        <th scope="col">Expected_Price_Per_KG</th>
        <th scope="col">Tomato_Size</th>
        <th scope="col">Has_Vehicle?</th>
        <th scope="col">Buy</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $item)
      <tr class="table-danger">
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->FarmerAddress}}</td>
        <td>{{$item->Quantity}} Kg</td>
        <td>Rs {{$item->ExpPrice}} Per Kg</td>
        <td>{{$item->Tsize}}</td>
        <td>{{$item->Vehicle}}</td>
        <td><a href="buytomato/{{$item->id}}">Buy</td>
      </tr>
      @endforeach
    </tbody>
  </table><br>
</div>


@stop