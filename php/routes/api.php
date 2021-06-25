<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('member')->middleware([])->namespace('Member')->group(function ($router) {
    $router->get('/checkAuth','MemberController@checkAuth');
    $router->post('/login','MemberController@login');
    $router->post('/register','MemberController@register');
    $router->post('/login','MemberController@adminLogin');
    $router->get('/get_info','MemberController@getInfo');

});
