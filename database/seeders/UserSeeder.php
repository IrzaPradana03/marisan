<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama_lengkap'  => 'M. Bagas Setia',
                'nik'           => '123456789',
                'no_telepon'    => '085723853284',
                'jenis_kelamin' => 'l',
                'tempat'        => 'Subang',
                'tanggal_lahir' => '1998-11-11',
                'alamat'        => 'Subang',
                'username'      => 'bagassetia',
                'password'      => Hash::make('123456789'),
                'role'          => 'panitia'
            ], [
                'nama_lengkap'  => 'M. Bagas Setia',
                'nik'           => '123456789',
                'no_telepon'    => '085723853284',
                'jenis_kelamin' => 'l',
                'tempat'        => 'Subang',
                'tanggal_lahir' => '1998-11-11',
                'alamat'        => 'Subang',
                'username'      => 'bagaspermana',
                'password'      => Hash::make('123456789'),
                'role'          => 'anggota'
            ]
        ]);
    }
}
