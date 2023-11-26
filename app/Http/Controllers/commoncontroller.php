<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\traders;
use App\Models\farmers;

class commoncontroller extends Controller
{

    function logoutfun(){
        return view('welcome');
    }

    function viewFarmerLogin(Request $req){
        return view('CommonViews\farmerlogin');
    }

    function viewRegisterFarmer(Request $req){
        return view('CommonViews\registerfarmer');
    }

    function viewTraderLogin(Request $req){
        return view('CommonViews\traderlogin');
    }

    function viewRegisterTrader(Request $req){
        return view('CommonViews\registertrader');
    }

    function traderLoginFun(Request $req){
        
        $req->validate([
            'email'=>'required| min:13',
            'pass'=>'required | min:4 | max:15'
        ]);
        
        $user= traders::where("Email",$req->input('email'))->get();
        if(($user[0]->Password)==$req->input('pass')){
            return view('TraderViews\home');
        }
        else{
            return view('CommonViews\unsuccesslogin');
        }
    }

    function farmerLoginFun(Request $req){
        
        $req->validate([
            'email'=>'required| min:13',
            'pass'=>'required | min:4 | max:15'
        ]);
        
        $user= farmers::where("Email",$req->input('email'))->get();
        if(($user[0]->Password)==$req->input('pass')){
            return view('FarmerViews\home');
        }
        else{
            return view('CommonViews\unsuccesslogin');
        }
    }

    function registerTraderFun(Request $req){
        $user = new traders;
        $user->Fname=$req->input('fname');
        $user->Lname=$req->input('lname');
        $user->Email=$req->input('email');
        $user->Password=$req->input('pass');
        $user->City=$req->input('city');
        $user->Bname=$req->input('bname');
        $user->Baddress=$req->input('baddress');
        $user->Contact=$req->input('contact');
        $req->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required| min:13',
            'pass'=>'required | min:4 | max:15',
            'city'=>'required',
            'bname'=>'required',
            'baddress'=>'required',
            'contact'=>'required | min:10 | max:10',
        ]);
        $user->save();
        return view('CommonViews\successregis');
    }

    function registerFarmerFun(Request $req){
            $user = new farmers;
            $user->Fname=$req->input('fname');
            $user->Lname=$req->input('lname');
            $user->Email=$req->input('email');
            $user->Password=$req->input('pass');
            $user->City=$req->input('city');
            $user->Fsize=$req->input('size');
            $user->Faddress=$req->input('address');
            $user->Contact=$req->input('contact');
            $req->validate([
                'fname'=>'required',
                'lname'=>'required',
                'email'=>'required| min:13',
                'pass'=>'required | min:4 | max:15',
                'city'=>'required',
                'size'=>'required',
                'address'=>'required',
                'contact'=>'required | min:10 | max:10',
            ]);
            $user->save();
            return view('CommonViews\successregis');
            
        }
    

}
