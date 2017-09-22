<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::group([ 'prefix' => 'blog' ], function () {
    Route::get('/', function () {
        return view('blog');
    });

    Route::get('/{any?}', function () {
        return view('post');
    });
});

Route::group([ 'prefix' => 'portfolio' ], function () {
    Route::get('/', function () {
        return view('portfolio');
    });

    Route::get('/{any?}', function () {
        return view('project');
    });
});
