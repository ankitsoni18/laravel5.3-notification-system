<?php
Route::group(['middleware' => ['web']], function () {
    Route::get('/notifications', ['as' => 'notifications.index', 'uses' => 'ankit\notification\Http\NotificationController@index']);
    Route::get('/notifications/create', ['as' => 'notifications.create', 'uses' => 'ankit\notification\Http\NotificationController@create']);
    Route::post('/notifications/store', ['as' => 'notifications.store', 'uses' => 'ankit\notification\Http\NotificationController@store']);
});
