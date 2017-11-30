<?php

/* 
|
|-------------------
| ROUTES DASHBOARD
|-------------------
| 
*/
Route::get('/adm_56ds68/index', 'dashboard\AdminController@indexDash')->name('indexD');

Route::get('/adm_56ds68/mailbox', function () {
    return view('dashboard.mailbox');
});
Route::get('/adm_56ds68/annonces', function () {
    return view('dashboard.annonces');
});
Route::get('/adm_56ds68/commentaires', function () {
    return view('dashboard.commentaires');
});
Route::get('/adm_56ds68/statistique', function () {
    return view('dashboard.statistique');
});
Route::get('/adm_56ds68/list-users', 'dashboard\AdminController@ListUsers')->name('list-users');
Route::get('/adm_56ds68/user/{id}', 'dashboard\AdminController@UserDetail')->name('UserDetail');
Route::post('/adm_56ds68/user/{id}/info-perso', 'dashboard\AdminController@Up_user')->name('UpUser');
Route::post('/adm_56ds68/user/{id}/mot-de-passe', 'dashboard\AdminController@change_password')->name('Uppassword');
Route::get('/adm_56ds68/user/{id}/mot-de-passe', 'dashboard\AdminController@change_password')->name('Uppassword');
Route::post('/adm_56ds68/user/{id}/preference', 'dashboard\AdminController@preference')->name('preference');
Route::get('/adm_56ds68/user/{id}/preference', 'dashboard\AdminController@preference')->name('preference');
/*-----------------*/

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

Auth::routes();

Route::get('/halfmap','front\HalfMapController@halfmap')->name('half_map');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/listing', 'front\ListingController@listing')->name('listing');
Route::get('/listing_search', 'front\ListingSearchController@listing')->name('listing-saerch');
Route::get('/add_colocation', 'front\ColocationController@add_coll')->name('add_colocation');
Route::get('/trouver_colocation', 'front\ColocataireController@trouver_coll')->name('trouver_colocation');
Route::get('/colocataire/search/{id}','front\DetailController@detail_search')->name('detail_search');
Route::get('/colocation/pub/{id}','front\DetailController@detail_colocation')->name('detail_colocation');
Route::get('/wishlist_{userID}', 'front\ProfileController@wishlist')->name('wishlist');
Route::get('/profile_{userID}', 'front\ProfileController@showProfile')->name('myProfile');
Route::get('/mes_recherches_{userID}', 'front\ProfileController@mes_recherches')->name('mes_recherches');
Route::get('/password_{userID}', 'front\ProfileController@update_password')->name('password');
Route::get('/colocations_{userID}', 'front\ProfileController@mes_colocations')->name('mes_colocations');
Route::get('/avatar', 'front\ProfileController@update_avatar')->name('avatar');
Route::post('/avatar', 'front\ProfileController@update_avatar');
Route::post('/password_{userID}', 'front\ProfileController@update_password');
Route::post('/profile_{userID}', 'front\ProfileController@update_profile');
Route::post('/add_colocation', 'front\ColocationController@add_col');
Route::post('/trouver_colocation', 'front\ColocataireController@trouver_col');
Route::post('/colocations_{userID}', 'front\ProfileController@delete_col');