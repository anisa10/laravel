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

// Route Optional Parameter
Route::get('halo/{nama?}',function($nama='Nurhadi Aldo'){
	return 'Haloo Nama Saya Adalah '.$nama;
});

Route::get('beli/{makan?}/{minum?}/{harga?}',function($mkn=null, $mnm=null, $hrg=null){
	if (isset($mkn)) {
		echo 'Anda Memesan ' .$mkn;
	}
	if (isset($mnm)) {
		echo ' Dan ' .$mnm;
	}
	if (isset($hrg)) {
		echo ' Dengan Harga ' .$hrg;
	}
	if ($mkn == null && $mnm == null && $hrg == null) {
		echo 'Anda Belum Memesan.';
	}

});

Route::get('/testmodel', function() { 
	$query = App\Post::all();
	return $query; 
});
Route::get('/testmodel2', function() { 
	$query = App\Post::find(3);
	return $query; 
});
Route::get('/testmodel3', function() { 
	$query = App\Post::where('title','like','%7 Amalan Pembuka Jodoh%')->get();
	return $query; 
});
Route::get('/testmodel4', function() { 
	$query = App\Post::find(3); 
	$query->title = "Amalan Pembuka Jodoh"; 
	$query->save(); 
	return $query;
});
Route::get('/testmodel5', function() { 
	$post = App\Post::find(3); 
	$post->delete(); 
});
Route::get('/testmodel6', function() { 
	$query = new App\Post; 
	$query->title = "Membangun Visi Misi Keluarga"; 
	$query->content = "Saling Mencintai"; 
	$query->save(); 
	return $query;
});

Route::get('/testgaji', function() { 
	$query = App\Penggajian::all();
	return $query; 
});