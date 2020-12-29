<?php
Route::group(['namespace' => 'PriyaXYZ1\Contact\Http\Controllers'], function () {
	Route::get('contact','ContactController@index')->name('contact');
	Route::post('contact','ContactController@send');
});