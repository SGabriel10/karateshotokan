<?php

Auth::routes();
Route::get('working', function () {
    return view('modules/working');
})->name('working');

Route::get('nosotros', function () {
    return view('modules/nosotros');
})->name('nosotros');

Route::get('contactenos', function () {
    return view('modules/contactenos');
})->name('contactenos');

Route::post('/post_upload', 'UploadController@store')->name('publice.post_imagen');
Route::get('/upload_imagen', 'UploadController@form_upload');
Route::get('/imagenes', 'UploadController@views_uploads')->name('imagenes');
//call controller
Route::get('/Home','HomeController@index');
Route::get('/','PageController@index');
Route::get('/noticias','NoticesController@list')->name('noticias');
Route::get('noticias/crear','NoticesController@new');
Route::post('/','NoticesController@post_notice')->name('noticias.post_notice');
Route::get('/noticias/editar/{id}','NoticesController@edit_notice')->name('noticias.edit');
Route::put('/noticias/editar/{id}','NoticesController@update')->name('noticias.update');
Route::delete('/noticias/eliminar/{id}','NoticesController@eliminar')->name('noticias.eliminar');
Route::get('/{id}','NoticesController@show')->name('noticias.show');
Route::get('/home', 'HomeController@index')->name('home');


