<?php

use Illuminate\Http\Request;
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


Route::get('asrobandung','AsrobandungController@index');

Route::get('/menu', function()
{
 return view('layout/menu');
});
Route::get('/sejarah', function()
{
    return view('user/sejarah');
});

Route::get('/formuser', function()
{
    return view('usermaster/formuser');
});


Route::get('/user', function()
{
    return view('usermaster/user');
});

// asro bandung controller & master data

Route::get('user','UserController@index');
Route::get('user','UserController@show');

Route::get('datamhs','RegisterController@index');
Route::get('datamhs','RegisterController@insert');
Route::get('datamhs','RegisterController@show');

Route::get('admin', 'AdminController@index');
Route::get('admin', 'AdminController@show');


//coba halaman edit data
// Route::get('datamhs/{$id}/galery','RegisterController@edit');

Route::get('login', function()
{
    return view('layout/login');
});

Route::get('dasboard', function()
{
    return view ('layout/dasboard');
});






// login User

Route::get('/galery', function()
{
    return view('usermaster/galery');
});

Route::get('/formdaftar', function()
{
    return view('fomulir/formdaftar');
});

// BPA kepengurusan

Route::get('/pengurus2016', function()
{
    return view('pengurus/pengurus2016');
});

Route::get('pengurus2017',function()
{
    return view('pengurus/pengurus2017');
});

Route::get('pengurus2018',function()
{
    return view('pengurus/pengurus2018');
});

Route::get('pengurus2019',function()
{
    return view('pengurus/pengurus2019');
});