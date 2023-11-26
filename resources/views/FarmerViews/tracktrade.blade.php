@extends('FarmerViews\farmerlayout')

@section('content')
<div style="text-align:center">
  <h2><u><b>Tracking all trades</b></u></h2>


  
  <form class="get" action="{{url ('\search')}}" method="GET" >
        <input type="search" name="query" placeholder="Search...">
        <button type="submit">Search</button>
    </form> 
 

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Address</th>
        <th scope="col">Tomato Quantity</th>
        <th scope="col">Expected Price PerKG</th>
        <th scope="col">Tomato Size</th>
        <th scope="col">Has Vehicle?</th>
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
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@stop