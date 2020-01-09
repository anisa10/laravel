<?php


Route::get('/', function () {
    return view('welcome');
});

//Route Basic
Route::get('/about', function () {
	return '<h1>Halo</h1>'.
	'Selamat datang di webapp saya<br>'.
	'Laravel, emang keren.';
});

Route::get('profil', function()
{
	return view('biodata');
});

// Route Parameter
Route::get('pesan/{makan}/{minum}/{harga}',function($mkn, $mnm, $hrg){
	return 'Makanan Yang Saya Pesan Adalah '.$mkn.'<br>'.
	'Minuman Yang Saya Pesan Adalah '.$mnm.'<br>'.
	'Total Harga '.$hrg;
});

// Route::get('profil2', function()
// {
// 	return view('nama');
// });

// Route::get('profil3', function()
// {
// 	return view('alamat');
// });

// Route::get('profil4', function()
// {
// 	return view('skl');
// });

// Route::get('profil5', function()
// {
// 	return view('umur');
// });

// Route::get('profil6', function()
// {
// 	return view('jrs');
// });

