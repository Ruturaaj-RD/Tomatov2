@extends('TraderViews\traderlayout')

@section('content')
<div style="text-align:center">
  <h2>Offers to Goods</h2>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Buyer_Name</th>
        <th scope="col">Offered</th>
        <th scope="col">Buyer_Contact</th>
        <th scope="col">Quantity</th>
        <th scope="col">Farmer_Name</th>
        <th scope="col">Farmer_Contact</th>
        <th scope="col">Farmer_Address</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $item)
      <tr class="table-danger">
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->buyername}}</td>
        <td><b>Rs. {{$item->offer}}</b></td>
        <td>{{$item->buyercontact}}</td>
        <td>{{$item->quantity}}KG</td>
        <td>{{$item->farmername}}</td>
        <td>{{$item->farmercontact}}</td>
        <td>{{$item->farmeraddress}}</td>
      </tr>
      @endforeach
    </tbody>
  </table><br>
@stop