<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class,'login']);

Route::get('/', function () {
    // $responde = new \Illuminate\Http\Response(json_encode('Bem vindo a API da COOPERFRETUR'));
    // $responde = new \Illuminate\Http\Response(json_encode(['msg' => 'Bem vindo a API da COOPERFRETUR'],200));
    $responde = new \Illuminate\Http\Response(json_encode('Bem vindo a API da COOPERFRETUR',200));
    $responde->header('Content-Type', 'application/json');
    return $responde;
});

//Route::get('/test',function(){
//	$responde = new \Illuminate\Http\Response(json_encode(['msg' => 'Resposta da API']));
//	$responde->header('Content-Type','application/json');
//	return $responde;
//});