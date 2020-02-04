<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
    	$a = "Aku Cinta Kamu";
    	return view('latihan', compact('a'));
    }

    public function pass1()
    {
    	$data = [
    		['nama' => 'Anisa', 'kelas' => 'RPL 2'],
    		['nama' => 'Anya', 'kelas' => 'RPL 1'],
    		['nama' => 'Rena', 'kelas' => 'RPL 3']
    	];

    	return view('latihan1', ['siswa' => $data]);
    }

    public function pass2()
    {
    	$gaji = [
    	['nama' =>'Anisa', 'nip' => '123456', 'agama' => 'Islam', 'Jabatan' => 'Manager', 'jam_kerja'=> '250' ],
    	['nama' =>'Rena', 'nip' => '165432', 'agama' => 'Islam', 'Jabatan' => 'Sekretaris', 'jam_kerja' => '180'],
    	['nama' =>'Dinda', 'nip' => '156432', 'agama' => 'Islam','Jabatan' => 'Staff', 'jam_kerja' => '150' ]
    	];
    	return view('latihan2', ['gajih' => $gaji]);
    }
}
