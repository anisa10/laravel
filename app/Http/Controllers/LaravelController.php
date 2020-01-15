<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function hallo()
    {
    	return "Hallo Dunia";
    }

    public function dunia()
    {
    	return "Dunia";
    }

    public function sekolah()
    {
    	return "SMK Assalaam";
    }

    public function kelas()
    {
    	return "XI - RPL 2";
    }

    public function alamat()
    {
    	return "Bandung";
    }

    public function nama()
	{
    	return "Anisaa";
    }

    public function umr()
    {
    	return "16 Tahun";
    }

    // public function sekolah()
    // {
    // 	return "SMK Assalaam";
    // }

    // public function sekolah()
    // {
    // 	return "SMK Assalaam";
    // }

    // public function sekolah()
    // {
    // 	return "SMK Assalaam";
    // }

    public function jeniskucing($warna = null)
    {
    	if (!$warna) {
    		return "Warna Kucing Kamu Belum Dipilih";
    	} else {
    		return "Warna Kucing Kamu : " .$warna;
    	}
    }

        public function beli($makan=null,$harga=null)
    {
        if  (isset($makan)) {
        echo "Anda Memesan : " .$makan;
        }
        if (isset($harga)) {
        echo " Dengan Ukuran";
        if ($harga >= 15000 ) {
        echo " Jumbo";
        }elseif ($harga < 15000 && $harga >=7500) {
        echo " Medium";
        }elseif ($harga < 7500) {
        echo " Small";
        }
        }
        if (!$makan) {
            echo "Silahkan Pilih item terlebih dahulu";
    }
    }
}

