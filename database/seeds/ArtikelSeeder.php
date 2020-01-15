<?php

use Illuminate\Support\Str;
use App\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$no = 10;
        for ($i=0; $i < $no; $i++) { 
       	$artikel = new Artikel();
        $artikel->judul = 'Belajar Pemrograman ke - '.$i;
        $artikel->slug = Str::slug($artikel->judul, '-');
        $artikel->deskripsi = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
        $artikel->sinopsis = Str::limit($artikel->deskripsi, 50);
        $artikel->save();
       }
    }
}
 