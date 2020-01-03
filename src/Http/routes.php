<?php
Route::get('drejunit', 'Dresong\DreJunit\Http\Controllers\DreJunitController@index');
Route::post('drejunit', 'Dresong\DreJunit\Http\Controllers\DreJunitController@store')->name('drejunit.store');
