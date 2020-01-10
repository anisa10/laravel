<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = [
['nama'=>'Anisa', 'jabatan'=>'Manager','jk'=>'Perempuan', 'alamat'=>'Holis','agama'=>'Islam', 'total_gaji'=>'20000'],
['nama'=>'Renasya', 'jabatan'=>'Sekretaris','jk'=>'Perempuan', 'alamat'=>'Rancamanyar','agama'=>'Islam', 'total_gaji'=>'190000'],
['nama'=>'Anya', 'jabatan'=>'Bendahara','jk'=>'Perempuan', 'alamat'=>'BMI','agama'=>'Islam', 'total_gaji'=>'180000'],
['nama'=>'Dinda', 'jabatan'=>'Sekretaris','jk'=>'Perempuan', 'alamat'=>'Rancamanyar','agama'=>'Islam', 'total_gaji'=>'170000'],
['nama'=>'Mantan', 'jabatan'=>'OB', 'jk'=>'Laki-Laki', 'alamat'=>'Hati','agama'=>'Islam', 'total_gaji'=>'2000']
        ];
        DB::table('penggajians')->insert($data);

    }
}
