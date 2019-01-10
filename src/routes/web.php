<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    #return $app->version();
    return 'Hello';
});

$app->get('hello[/{name}]', function ($name = null) {
    return 'Hello ' . $name;
});


$app->post('/', function (Illuminate\Http\Request $request) {
	$slug = $request->input('slug');
	return $slug;
});
