<?php

use App\Http\Controllers\IngredientController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get(
    '/users',
    [UserController::class, "index"]
);



Route::get('/users/create',    [UserController::class, 'create']);
Route::post('/users/store', [UserController::class, 'store']);

Route::get('/recipes',
    [RecipeController::class, 'index']
);





Route::get('/recipes/create',[RecipeController::class, 'create']);

Route::get('/recipes/edit/{recipe}', [RecipeController::class, 'edit']);
Route::get('/recipes/show/{recipe}', [RecipeController::class, 'show']);

Route::post('/recipes/store', [RecipeController::class, 'store']);

Route::post('recipes/update/{recipe}', [RecipeController::class, 'update']);

//ingredients
Route::get('/ingredients',
    [IngredientController::class, 'index']
);

Route::get('ingredients/create',[IngredientController::class, 'create']);
Route::post('ingredients/store',[IngredientController::class, 'store']);

