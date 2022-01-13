<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     //return view('welcome');
//     return('Hello world');
// });


// Route::get('/hello', function () {
//     return ('<h1>Hellow Madusha</h1>');
// });

// Route::get('/about', function () {
//     return view('pages.about');
   
// });

// Route::get('/users/{id}', function ($id) {
//     return 'This is user '.$id;
// });


// Route::get('/users/{id}/{name}', function ($id,$name) {
//     return 'This is user '.$id .'This is user Name'.$name;
// });

use App\Http\Controllers\PagesController;

//Route::get('/', 'PagesController@index');
//[UserController::class, 'index']
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);



// Route::get('/about', function () {
//     return view('pages.about');
   
// });
