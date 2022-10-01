<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB; //calling DB
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    $username = DB::select("call getUser('".$request->input('username')."')"); //get the user with the getUser procedure.
                
    if ($username == []){//User doesnt exist -> 401
        return response(['message'=>'Wrong username or password.','status'=>'401'],401);
    }

    else{
        if ($username[0]->{'password'} == $request->input('password')){ // without hashing for simplicity.
           
            return response(['message'=>'Logged in','status'=>'200'],200); //login Success -> 200
        }
        else  //password doesn't match -> 401
            return response(['message'=>'Wrong username or password.','status'=>'401'],401);
    }
});

Route::get('/messages', function () {
    $messages = DB::select('call getMessages()'); //get messages with getMessages procedure
    return $messages;
});

Route::get('/dashboard', function () {
    $messages = DB::select('call getMessages()'); 
    return view('dashboard',['messages' => $messages]);
});

