<?php
use Furbook\Cat;
use Furbook\Breed;

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
    return 'All cats';
});

Route::get('/cats/{id}', function($id){
    return 'cat: ' . $id;
})->where('id', '[0-9]+');

Route::get('/about', function(){
  $number = 100;
  return view('about')->with('number', $number);
});

Route::get('/cats', function(){
  $cats = Cat::all();
  return view('cats.index')->with('cats', $cats);
});

Route::get('cats/breeds/{name}', function($name){
  $breed = Breed::where('name', $name)->first();
  $cats = $breed->cats;
  return view('cats.index')->with(['breed' => $breed, 'cats' => $cats]);
});
