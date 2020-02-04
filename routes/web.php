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

use App\City;
use App\Country;
use App\Http\Controllers\DataImportController;
use App\Role;
use App\State;
use App\Tag;
use App\User;
use App\Product;
use App\Image;


//Route::get('role-test',function(){
  // $user = User::find(51);
  // return $user->roles;
//});

//Route::get('unit-test','DataImportController@importunit');

//Route::get('unit-testa', function () {
  //  return State::with(['cities','country'])->paginate(5);

//});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('test-email',function (){

//  return 'hello';
//})->middleware(['auth','user_is_admin','user_is_support']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::middleware(['auth','user_is_admin'])->group(function(){

    Route::get('units','UnitController@index')->name('units');
    Route::get('add-unit','UnitController@showAdd')->name('new-unit');
    Route::get('categories','CategoryController@index')->name('categories');
    Route::get('products','ProductController@index')->name('products');
    Route::get('tags','TagController@index')->name('tags');
    Route::get('countries','CountryController@index')->name('countries');
    Route::get('states','StateController@index')->name('states');
    Route::get('cities','CityController@index')->name('cities');
    Route::get('reviews','ReviewController@index')->name('reviews');
    Route::get('tickets','TicketController@index')->name('tickets');
    Route::get('roles','RoleController@index')->name('roles');



});


