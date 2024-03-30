<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

use App\Http\Controllers\PhotoController;
 
Route::resource('photos', PhotoController::class);
Route::resources([
    'photos' => PhotoController::class,
    'posts' => PostController::class,
]);