<?php
use Furbook\Cat;
use Furbook\Breed;
use Illuminate\Support\Facades\Input;

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
    return redirect('/cats');
});
Route::get('/about', function(){
  $number = 100;
  return view('about')->with('number', $number);
});
//get overview
Route::get('/cats','CatController@index');
//get cats by breed
Route::get('cats/breeds/{name}', 'CatController@showByBeed');
//create data
Route::get('cats/create', 'CatController@create')->middleware('auth');
Route::post('cats', 'CatController@store');
//update data
Route::get('cats/{cat}/edit', 'CatController@edit')->middleware(['auth', 'admin']);
Route::put('cats/{cat}', 'CatController@update');
// delete data
Route::get('cats/{cat}/delete', 'CatController@destroy');
//show data
Route::get('/cats/{cat}', 'CatController@show')->where('id', '[0-9]+');

Route::resource('photos', 'PhotoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
