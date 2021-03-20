<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserCtrl;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Condition;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [Controller::class, 'createTable']);
Route::get('/player', function () {
    return view('login');
});
Route::get('/staff', function () {
    return view('loginStaff');});
Route::post('/check', [UserCtrl::class, 'loginPlayer']);
Route::post('/checkStaff', [UserCtrl::class, 'loginStaff']);
Route::get('/register', function () {
    return view('register');
});
Route::get('/registerStaff', function () {
    return view('registerStaff');
});
Route::post('/userinfocheck', [UserCtrl::class, 'registerPlayer']);
Route::post('/staffinfocheck', [UserCtrl::class, 'registerStaff']);
Route::get('/regular',function (){
    return view("regularDay");
});
Route::get('/everyday', function (){
    return view('everyDay');
});
Route::post('/inputEveryday', [Condition::class, 'everydayInput']);
Route::post('/inputRegular', [Condition::class, 'regularInput']);

Route::get('/history',[Condition::class,'setResult']);
Route::get('/toscreen', function(){
    return view('subItemPage');
});
Route::post('/dietData', [Condition::class,'insertDiet']);
Route::get('/finishInputing' , function(){
    // [Condition::class,'setResult']
    return view('finishInputing1');
});
Route::get('/getGraphData', [Condition::class, 'getGraphData']);
Route::get('/getDiet', [Condition::class,'getDiet']);
Route::get('/viewGraph', [Condition::class,'setGraph']);

Route::get('/finishInputing/{userid}',function($userid){
    $userid=$userid;
    return view('result',compact('userid'));
});


Route::get('/viewGraph/{userid}',  function($userid){
    $userid=$userid;
    return view('graphPage',compact('userid'));
});

Route::get('/nextMeal', function(){
    return view("nextMeal");
});
Route::post('/savenextMeal', [Condition::class,'nextMeal']);

Route::get('/indiv1', [UserCtrl::class, 'getplayerList']);
Route::get('/indiv2', [UserCtrl::class, 'getplayerList']);
Route::get('/playerlist', [UserCtrl::class, 'getplayerList']);

Route::get('/outputCSV' ,[UserCtrl::class,'csvOut']);
Route::post('/saveCSV', [Condition::class,'csvSave']);






 