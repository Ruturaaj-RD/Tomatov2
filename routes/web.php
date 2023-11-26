<?php

use App\Http\Controllers\farmercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use function Ramsey\Uuid\v1;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Logout
Route::get('/welcome','App\Http\Controllers\commoncontroller@logoutfun');


//commoncontroller
Route::get('farmerlogin','App\Http\Controllers\commoncontroller@viewFarmerLogin');
Route::get('registerfarmer','App\Http\Controllers\commoncontroller@viewRegisterFarmer');
Route::get('traderlogin','App\Http\Controllers\commoncontroller@viewTraderLogin');
Route::get('registertrader','App\Http\Controllers\commoncontroller@viewRegisterTrader');

Route::post('traderloginfun','App\Http\Controllers\commoncontroller@traderLoginFun');
Route::post('farmerloginfun','App\Http\Controllers\commoncontroller@farmerLoginFun');
Route::post('registertraderfun','App\Http\Controllers\commoncontroller@registerTraderFun');
Route::post('registerfarmerfun','App\Http\Controllers\commoncontroller@registerFarmerFun');

//farmer navbar
Route::view('/farmerhome','FarmerViews\home');
Route::view('/farmerraisetomtra','FarmerViews\raisetrade');
Route::post('farmerraisetrade','App\Http\Controllers\farmercontroller@raisetrade');
Route::get('farmertracktrade','App\Http\Controllers\farmercontroller@farmertradeviews');

//trader navbar
Route::get('tradeviews','App\Http\Controllers\tradercontroller@tradeViews');
Route::view('/traderhome','TraderViews\home');
Route::get('/googlemap','App\Http\Controllers\tradercontroller@googlemapfun');

//traderbuy
Route::get('buytomato/{id}','App\Http\Controllers\tradercontroller@buytomatofun');
Route::post('/traderbuys','App\Http\Controllers\tradercontroller@soldfun');

//trader and farmer sold deals
Route::get('ontrack','App\Http\Controllers\tradercontroller@soldViews');
Route::get('ontrackf','App\Http\Controllers\farmercontroller@soldViews');