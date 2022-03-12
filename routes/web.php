<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
    /* * When not using clockwork, activate this snippet
    DB::listen(function($query)  {
        logger($query->sql);
    });
    /* */

    return view(
        'posts',
        [
            'posts' =>  Post::with('category', 'author')->get()
        ]
    );

});

/*   *
With route model binging the wildcard ({post}) name must match parameter's. Furthermore
the function parameter must be typed.
/* */

Route::get('posts/{post}', function (Post $post) { 

    return view('post',[
        'post' => $post
    ]);

});

Route::get('categories/{category}', function (Category $category) { 

    return view(
        'posts',
        [
            'posts' =>  $category->posts->load('category', 'author')
        ]
    );
});

Route::get('bloggers/{author}', function (User $author) { 

    return view(
        'posts',
        [
            'posts' =>  $author ->posts->load('category', 'author')
        ]
    );
});