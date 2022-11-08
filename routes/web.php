<?php

Route::redirect('/', '/register');
Route::get('/home', function () {
    $routeName = 'admin.home'; 
    if (session('status')) {
        return redirect()->route($routeName)->with('status', session('status'));
    }

    return redirect()->route($routeName);
});

Auth::routes(['register' => true]);
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Jadwal Kuliah
    Route::delete('jadwal-kuliah/destroy', 'JadwalKuliahController@massDestroy')->name('jadwal-kuliah.massDestroy');
    Route::resource('jadwal-kuliah', 'JadwalKuliahController');

    // Mata Kuliah
    Route::delete('mata-kuliah/destroy', 'MataKuliahController@massDestroy')->name('mata-kuliah.massDestroy');
    Route::resource('mata-kuliah', 'MataKuliahController');

    // Time Interval
    Route::delete('time-interval/destroy', 'TimeIntervalControllerr@massDestroy')->name('time-interval.massDestroy');
    Route::resource('time-interval', 'TimeIntervalController');
    
    Route::get('calendar', 'CalendarController@index')->name('calendar.index');
});
