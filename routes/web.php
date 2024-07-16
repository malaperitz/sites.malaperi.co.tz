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
    return view('welcome');
});

Auth::routes();

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return view('errors/cache');
  });

  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/edit_site/{id}', 'App\Http\Controllers\SiteController@edit')->name('edit.site');
Route::post('/update_site', 'App\Http\Controllers\SiteController@update')->name('update.site');
Route::get('/create_site', 'App\Http\Controllers\SiteController@create')->name('create.site');
Route::post('/store_site', 'App\Http\Controllers\SiteController@store')->name('store.site');
Route::get('/view_site', 'App\Http\Controllers\SiteController@view')->name('view.site');
Route::get('/delete_site/{id}', 'App\Http\Controllers\SiteController@destroy')->name('delete.site');

// sites By Categories
Route::get('/view_site_softwares', 'App\Http\Controllers\SiteController@view_softwares')->name('view.site.softwares');
Route::get('/view_site_movies', 'App\Http\Controllers\SiteController@view_movies')->name('view.site.movies');
Route::get('/view_site_musics', 'App\Http\Controllers\SiteController@view_musics')->name('view.site.musics');
Route::get('/view_site/{categoryName}', 'App\Http\Controllers\SiteController@view_siteByCategory')->name('view.site.site_category');
// site_category
Route::get('/create_site_category', 'App\Http\Controllers\SiteCategoryController@create')->name('create.sitecategory');
Route::post('/store_site_category', 'App\Http\Controllers\SiteCategoryController@store')->name('store.sitecategory');
Route::get('/view_site_category', 'App\Http\Controllers\SiteCategoryController@view')->name('view.sitecategory');
Route::get('/edit_site_category/{id}', 'App\Http\Controllers\SiteCategoryController@edit')->name('edit.sitecategory');
Route::post('/update_site_category', 'App\Http\Controllers\SiteCategoryController@update')->name('update.sitecategory');
Route::get('/delete_site_category/{id}', 'App\Http\Controllers\SiteCategoryController@destroy')->name('delete.sitecategory');


