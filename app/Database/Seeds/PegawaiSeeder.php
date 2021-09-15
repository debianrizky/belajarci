<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PegawaiSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama'          =>  'Andi',
				'jenis_kelamin' =>  'pria',
				'no_telp'       =>  '081234555678',
				'email'         =>  'andi@gmail.com',
				'alamat'	=>  'Jl. Bunga No. 190, Sukun Malang',
				'created_at' => Time::now()
			],
			[
				'nama'          =>  'Budi',
				'jenis_kelamin' =>  'pria',
				'no_telp'       =>  '08571234567',
				'email'         =>  'budi@gmail.com',
				'alamat'	=>  'Jl. Melati Putih No. 77, Klojen Malang',
				'created_at' => Time::now()
			],
			[
				'nama'          =>  'Siti',
				'jenis_kelamin' =>  'wanita',
				'no_telp'       =>  '08122334455',
				'email'         =>  'siti@gmail.com',
				'alamat'	=>  'Jl. Rembulan No. 90, Blimbing Malang',
				'created_at' => Time::now()
			]
		];
		$this->db->table('pegawai')->insertBatch($data);
	}
}
