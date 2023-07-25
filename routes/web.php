<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ToDoListController;
use App\Models\Post;
use App\Models\ListItem;


Route::get('/', [ToDoListController::class, 'index']);
Route::post('/saveItem', [ToDoListController::class, 'saveItem'])->name('saveItem');
Route::post('/editItem', [ToDoListController::class, 'editItem'])->name('editItem');
Route::post('/viewItem/{id}', [ToDoListController::class, 'viewItem'])->name('viewItem');
Route::post('/markComplete/{id}', [ToDoListController::class, 'markComplete'])->name('markComplete');
Route::post('/deleteItem/{id}', [ToDoListController::class, 'deleteItem'])->name('deleteItem');










// Route::get('post/{slug}', function ($slug) {

//     $postPath = __DIR__ . "/../resources/posts/$slug";

//     if(file_exists($postPath)){
//         return view('post', [
//             'post' => file_get_contents($postPath)
//         ]);
//     }else{
//         return redirect('/');
//     }
   
// })->whereAlphaNumeric('slug');