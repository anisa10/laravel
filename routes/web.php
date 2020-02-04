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

Route::get('gaji-1', function() { 
	$query = App\Penggajian::where('nama','=','anisa')->get();
	return $query; 
});
Route::get('gaji-2', function() { 
	$query = App\Penggajian::select('id','nama','agama')
	->where('agama', '=' , 'islam')
	->get();
	return $query; 
});
Route::get('gaji/{id}', function($id) { 
	$query = App\Penggajian::find($id);
	return $query; 
});
Route::get('tambah-data-gaji', function()
{
	$gaji = New App\Penggajian();
	$gaji->nama = 'Indah Mambo';
	$gaji->jabatan = 'Sekretaris';
	$gaji->jk = 'Perempuan';
	$gaji->alamat = 'Bojong Honey';
	$gaji->agama = 'Islam';
	$gaji->total_gaji = '500000';
	$gaji->save();
	return $gaji;
});

Route::get('haloo', 'LaravelController@hallo');
Route::get('world', 'LaravelController@dunia');
Route::get('school', 'LaravelController@sekolah');
Route::get('class', 'LaravelController@kelas');
Route::get('adress', 'LaravelController@alamat');
Route::get('name', 'LaravelController@nama');
Route::get('umur', 'LaravelController@umr');
Route::get('word', 'LaravelController@dunia');
Route::get('word', 'LaravelController@dunia');
Route::get('word', 'LaravelController@dunia');

Route::get('kucing/{warna?}', 'LaravelController@jeniskucing');
Route::get('belii/{makan?}/{harga?}','LaravelController@beli');

// CRUD BOOK
Route::get('book' , 'BookController@index');
Route::get('create-book' , 'BookController@create');
Route::get('book/{id}' , 'BookController@show');
Route::get('book-edit/{id}/{jdl}' , 'BookController@edit');
Route::get('book-delete/{id}' , 'BookController@delete');
Route::get('latihan/{id}','BookController@latihan');
Route::get('latihan2/{id}','BookController@latihan2');

// Artikel
// Route::get('artikel', 'ArtikelController@index');
// Route::get('artikel/create', 'ArtikelController@create');
// Route::get('artikel/{id}', 'ArtikelController@show');
// Route::get('artikel/{id}/edit', 'ArtikelController@edit');
// Route::PUT('artikel/{id}', 'ArtikelController@update');
// Route::DELETE('artikel/{id}', 'ArtikelController@destroy');

Route::resource('artikel', 'ArtikelController');

// Passing Data
Route::get('passing', 'PracticeController@pass');
Route::get('passing1', 'PracticeController@pass1');
Route::get('passing2', 'PracticeController@pass2');
Route::get('passing3', 'BarangController@index');
