<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Models\Post;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts');
});

Route::get('post/{slug}', function ($slug) {

    $postPath = __DIR__ . "/../resources/posts/$slug";

    if(file_exists($postPath)){
        return view('post', [
            'post' => file_get_contents($postPath)
        ]);
    }else{
        return redirect('/');
    }
   
});

