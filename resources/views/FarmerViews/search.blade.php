@extends('FarmerViews\farmerlayout')

@section('content')

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

@stop