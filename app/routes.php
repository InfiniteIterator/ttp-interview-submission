<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/widgets',[
	'uses' => 'WidgetController@index'
]);

Route::post('/widgets', [
	'as' => 'widgets.add',
	'uses' => 'WidgetController@add'
]);

Route::get('/widgets/{id}/edit', [
    'as' => 'widgets.edit',
    'uses' => 'WidgetController@edit'
]);

Route::put('/widgets/{id}', [
    'as' => 'widgets.put',
    'uses' => 'WidgetController@update'
]);

Route::get('/api/widgets', function() {
    return Response::json(Widget::all());
});

Route::get('/api/widget/delete/{id}', [
	'as' => 'widget.destory',
	'uses' => 'WidgetController@destroy'
]);

