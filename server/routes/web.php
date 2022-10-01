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
    $username = DB::select('select * from users where username = "'.
                $request->input('username').'"');
    
    if ($username == []){//User doesnt exist -> 401
        return response(['message'=>'Wrong username or password.','status'=>'401'],401);
    } 
        
    else{
        if ($username[0]->{'password'} == $request->input('password')){
            return redirect('/dashboard'); //login Success
        }
            
        else  //password doesn't match -> 401
            return response(['message'=>'Wrong username or password.','status'=>'401'],401);
    }
});

Route::get('/messages', function () {
    $messages = DB::select('select * from messages');
    return $messages;
});

Route::get('/dashboard', function () {
    $messages = DB::select('select * from messages');
    return view('dashboard',['messages' => $messages]);
});

