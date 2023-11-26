<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TradeReq;
use App\Models\soldtable;

class tradercontroller extends Controller
{
    function tradeViews(Request $req){
        $data=TradeReq::all();
        return view('TraderViews\tradeopportunities',["data"=>$data]);
    }

    function buytomatofun($id){
        $user =TradeReq::find($id);
        return view('TraderViews\buytomato',['user'=>$user]);
    }

    

    function buyerdisplay(Request $req){
        $req= TradeReq::find($req->input('id'));
    }

    function googlemapfun(){
        return view('TraderViews\googlemaps');
    }

    function soldfun(Request $req){
        $sold = new soldtable;
        $sold->buyername=$req->input('buyername');
        $sold->buyercontact=$req->input('buyercontact');
        $sold->farmername=$req->input('dname');
        $sold->farmercontact=$req->input('dcontact');
        $sold->farmeraddress=$req->input('daddress');
        $sold->quantity=$req->input('dquantity');
        $sold->offer=$req->input('offer');
        $sold->save();

        return view('TraderViews\successbuy');
    }


    function soldViews(Request $req){
    $data=soldtable::all();
    return view('TraderViews\ontrackbuys',["data"=>$data]);
    }
}
