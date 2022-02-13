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

Auth::routes();

Route::get('/', 'AlbumController@home');

Route::get('albums/home', 'AlbumController@home')->name('albums.home');
Route::get('albums/{id}/push_photo', 'AlbumController@pushPhoto')->name('albums.push_photo');
Route::patch('albums/{id}/push_photo', 'AlbumController@selectPushPhoto')->name('albums.select_push_photo');
Route::get('albums/{id}/delete_photo', 'AlbumController@deletePhoto')->name('albums.delete_photo');
Route::patch('albums/{id}/delete_photo', 'AlbumController@selectDeletePhoto')->name('albums.select_delete_photo');
Route::patch('albums/release/{id}', 'AlbumController@toggleRelease')->name('albums.toggle_release');
Route::resource('albums', 'AlbumController');

Route::get('likes/index', 'LikeController@index')->name('likes.index');
Route::patch('likes/{id}', 'LikeController@toggleLike')->name('likes.toggle_like');

Route::resource('users', 'UserController')->only([
    'show', 'edit', 'update']);

Route::get('follows/{id}/index', 'FollowController@index')->name('follows.index');
Route::get('follows/{id}/follower', 'FollowController@follower')->name('follows.follower');
Route::patch('follows/{id}', 'FollowController@togglefollow')->name('follows.toggle_follow');