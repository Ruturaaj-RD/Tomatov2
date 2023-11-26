<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tradereq;
use App\Models\soldtable;


class farmercontroller extends Controller
{
    function raisetrade(Request $req)
    {
        $trade = new tradereq;
        $trade->FarmerName = $req->input('dname');
        $trade->FarmerContact = $req->input('dcontact');
        $trade->FarmerAddress = $req->input('daddress');
        $trade->Quantity = $req->input('dquantity');
        $trade->ExpPrice = $req->input('expprice');
        $trade->Vehicle = $req->input('vehicle');
        $trade->Tsize = $req->input('tsize');
        $req->validate([
            'dname' => 'required',
            'expprice' => 'required | min:1 | max:3',
            'daddress' => 'required',
            'dcontact' => 'required | min:10 | max:10',
            'dquantity' => 'required | min:1 | max:4',
            'tsize' => 'required',
            'vehicle' => 'required'

        ]);
        $trade->save();
        return view('FarmerViews\successraisetrade');
    }

    function farmertradeviews(Request $req)
    {
        
        $data = TradeReq::all();
        return view('FarmerViews\tracktrade', ["data" => $data]);
    }

    function soldViews(Request $req)
    {
        $data = soldtable::all();
        return view('FarmerViews\ontrackbuysf', ["data" => $data]);
    }
    
}
