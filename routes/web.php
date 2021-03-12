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
Route::get('*', "Controller@noFindPage");

Route::group(["namespace" => "Home"], function () {

    Route::get("/", "IndexController@index");
    Route::post("contact", "IndexController@contact");
    Route::get("detail/{id}", "IndexController@detailHtml");
    Route::get("photo", "IndexController@photo");
    Route::get("notes", "IndexController@notes");
});


Route::group(["namespace" => "Back", "prefix" => "admin"], function () {
    Route::get('login', 'LoginController@index');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout');

    Route::group(['middleware' => 'loginVerify'], function () {
        /*主页*/
        Route::get("/", "BackController@index");

        Route::get("user", "UserController@show");
        Route::post("useradd", "UserController@useradd");
        Route::post("useredit", "UserController@useredit");
        Route::post("userchange", "UserController@userchange");
        Route::get("userdel/{id}", "UserController@userdel");


        Route::get("config", "SettingController@show");
        Route::post("editconfig", "SettingController@editconfig");

        Route::get("desc", "DescriptionController@show");
        Route::post("desc", "DescriptionController@editdesc");

        Route::get("photo", "PhotoController@show");
        Route::get("photoadd", "PhotoController@addHtml");
        Route::post("photoadd", "PhotoController@photoadd");
        Route::get("photodel/{id}", "PhotoController@photodel");
        Route::post("delselect", "PhotoController@photodelselect");
        Route::get("photoedit/{id}", "PhotoController@editHtml");
        Route::post("photoedit", "PhotoController@photoedit");

        Route::get("note", "NoteController@show");
        Route::get("noteadd", "NoteController@addHtml");
        Route::post("noteadd", "NoteController@noteadd");
        Route::get("notedel/{id}", "NoteController@notedel");
        Route::get("noteedit/{id}", "NoteController@editHtml");
        Route::post("noteedit", "NoteController@noteedit");

        Route::get("us", "UsController@show");
        Route::post("us", "UsController@usedit");
    });
});
