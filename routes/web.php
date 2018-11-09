<?php

Route::get('/', ['as' => 'regions', 'uses' => 'RegionController@index']);

Route::get('/get-regions', ['as' => 'get-data-regions', 'uses' => 'RegionController@getDataRegion']);
