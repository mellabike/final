<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

use App\Providers\RouteServiceProvider;

Route::get('/producto', 'PagesController@producto')->name('producto');

Auth::routes();

Route::resource('/miprods', 'MiprodController')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('registro', function () {
    return view('registro');
})->name('registro');

Route::get('quienes', function () {
return view('quienes');
})->name('quienes');


Route::get('politicas', function () {
    return view('politicas');
    })->name('politicas');

Route::get('producto', function () {
    return view('producto');
    })->name('producto');

Route::get('ejemplo', function () {
    return view('ejemplo');
    })->name('ejemplo');

Route::get('ejemplo2', function () {
    return view('ejemplo2');
    })->name('ejemplo2');

Route::get('mimenu', function () {
    return view('mimenu');
    })->name('mimenu');

Route::get('contenido', function () {
    return view('contenido.contenido');
    })->name('contenido');



// ------------------------------------------------------------------------

Route::get('/producto/crear', 'MiprodController@create')->name('producto.create');
Route::post('/producto/save', 'MiprodController@save')->name('producto.save');
Route::get('/image/file/{filename}', 'MiprodController@getImage')->name('image.file');
Route::get('/producto/todos/{search?}', 'MiprodController@showProductos')->name('producto.show');
Route::get('/producto/detalle/{id}', 'MiprodController@detalle')->name('producto.detalle');

//eliminar producto
Route::get('/producto/delete/{id}', 'MiprodController@delete')->name('producto.delete');

//editar producto
Route::get('/producto/edit/{id}', 'MiprodController@edit')->name('producto.edit');
Route::post('/producto/update/{id}', 'MiprodController@update')->name('producto.update');

Route::post('/quienes/email', 'HomeController@sendEmail')->name('home.email');

Route::get('/shopping-cart', 'CartController@index')->name('cart.index');
Route::post('/shopping-cart/{id}', 'CartController@add')->name('cart.agregar');
Route::delete('/shopping-cart/delete/{id}', 'CartController@delete')->name('cart.delete');

Route::get('/admin/usuarios', 'UserController@show')->name('usuarios.show');
Route::get('/admin/usuarios/edit/{id}', 'UserController@edit')->name('usuarios.edit');
Route::post('/admin/usuarios/{id}', 'UserController@update')->name('usuarios.update');

Route::get('/logout', 'UserController@logout')->name('logout');

Route::get('/quienes','HomeController@quienes')->name('quienes');

// ------------------------------------------------------------------------
