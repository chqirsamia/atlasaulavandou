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

Route::get('/', function () {
    return view('welcome');})->name('welcome');


Route::get('/menu', 'PlatController@index')->name('plats.index');
Route::get('/menu/{slug}', 'PlatController@show')->name('plats.show');

Route::get('/contact', 'ContactController@getContact')->name('contact');
Route::post('contact', 'ContactController@saveContact');

Route::group(['middleware' => ['auth']], function () {
Route::get('/commande', 'CartController@index')->name('cart.index');
Route::post('/commande/ajouter', 'CartController@store')->name('cart.store');
Route::patch('/commande/{rowId}', 'CartController@update')->name('cart.update');
Route::delete('/commande/{rowId}', 'CartController@destroy')->name('cart.destroy');

});


Route::get('/reservation', 'ReservationController@getreservation')->name('reservation');
Route::post('/reservation', 'ReservationController@savereservation');

/*Route::get('reservations', ['as' => 'reservations.create', 'uses' => 'ReservationController@create']);
Route::post('reservations_mass_destroy', ['uses' => 'ReservationController@massDestroy', 'as' => 'reservation.mass_destroy']);
Route::post('reservations_restore/{id}', ['uses' => 'ReservationController@restore', 'as' => 'reservation.restore']);
Route::delete('reservations_perma_del/{id}', ['uses' => 'ReservationController@perma_del', 'as' => 'reservation.perma_del']);*/



Route::group(['middleware' => ['auth']], function () {
Route::get('/paiement', 'CheckoutController@index')->name('checkout.index');
Route::post('/paiement', 'CheckoutController@store')->name('checkout.store');
Route::get('/merci', 'CheckoutController@thankYou')->name('checkout.thankYou');


Route::get('/confirmation', 'confirmation@confirmer')->name('confirmation');

Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/search', 'PlatController@search')->name('plats.search');

Auth::routes();


