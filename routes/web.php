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

use Corcel\Model\Post;

Route::get('/', function () {
    return view('index');
});

Route::group([ 'prefix' => 'blog' ], function () {
    Route::get('/', function () {
        $posts = Post::type('post')
            ->published()
            ->get();

        return view('blog', [
            'posts' => $posts
        ]);
    });

    Route::get('/{any?}', function ($slug) {
        $post = Post::type('post')
            ->slug($slug)
            ->with('attachment')
            ->first();

        return view('post', [
            'post' => $post
        ]);
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
