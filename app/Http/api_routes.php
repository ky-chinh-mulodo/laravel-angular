<?php
	
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	$api->post('auth/login', 'App\Api\V1\Controllers\AuthController@login');
	$api->post('auth/signup', 'App\Api\V1\Controllers\AuthController@signup');
	$api->post('auth/recovery', 'App\Api\V1\Controllers\AuthController@recovery');
	$api->post('auth/reset', 'App\Api\V1\Controllers\AuthController@reset');
	$api->get('auth/demo', 'App\Api\V1\Controllers\AuthController@demo');

	// example of protected route
	$api->get('protected', ['middleware' => ['api.auth'], function () {		
		return \App\User::all();
    }]);

	// example of free route
	$api->get('free', function() {
		return \App\User::all();
	});

	// $api->group(['middleware' => 'api.auth'], function ($api) {
	$api->get('post', 'App\Api\V1\Controllers\PostController@index');
	$api->delete('post/{id}', 'App\Api\V1\Controllers\PostController@delete');
	$api->post('post/add', 'App\Api\V1\Controllers\PostController@add');
	$api->get('post/show/{id}', 'App\Api\V1\Controllers\PostController@show');
	$api->put('post/edit/{id}', 'App\Api\V1\Controllers\PostController@edit');
	// });

});
