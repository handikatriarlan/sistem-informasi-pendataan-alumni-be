<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Arlan Tri Handika',
                'email' => 'arlan.handika@example.com',
                'password' => Hash::make('123123123'),
                'role' => 'alumni',
                'foto' => null,
                'tanggal_lahir' => '2002-05-12',
                'tempat_lahir' => 'Medan',
                'jenis_kelamin' => 'L',
                'nis' => '123456',
                'tahun_lulus' => '2020',
                'alamat' => 'Jl. Mawar No. 45, Medan',
                'no_phone' => '081234567890',
                'pendidikan_lanjut' => 'Universitas Sumatera Utara',
                'pekerjaan' => 'Software Engineer',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aditya Widodo',
                'email' => 'aditya.widodo@example.com',
                'password' => Hash::make('123123123'),
                'role' => 'alumni',
                'foto' => null,
                'tanggal_lahir' => '2003-08-23',
                'tempat_lahir' => 'Jakarta',
                'jenis_kelamin' => 'L',
                'nis' => '123457',
                'tahun_lulus' => '2021',
                'alamat' => 'Jl. Melati No. 12, Jakarta',
                'no_phone' => '082345678901',
                'pendidikan_lanjut' => 'Universitas Indonesia',
                'pekerjaan' => 'Data Analyst',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Muhammad Alfarido',
                'email' => 'muhammad.alfarido@example.com',
                'password' => Hash::make('123123123'),
                'role' => 'alumni',
                'foto' => null,
                'tanggal_lahir' => '2004-12-15',
                'tempat_lahir' => 'Bandung',
                'jenis_kelamin' => 'L',
                'nis' => '123458',
                'tahun_lulus' => '2022',
                'alamat' => 'Jl. Kenanga No. 10, Bandung',
                'no_phone' => '083456789012',
                'pendidikan_lanjut' => 'Institut Teknologi Bandung',
                'pekerjaan' => 'Web Developer',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hazlah Aqillah',
                'email' => 'hazlah.aqillah@example.com',
                'password' => Hash::make('123123123'),
                'role' => 'alumni',
                'foto' => null,
                'tanggal_lahir' => '2005-03-30',
                'tempat_lahir' => 'Surabaya',
                'jenis_kelamin' => 'P',
                'nis' => '123459',
                'tahun_lulus' => '2023',
                'alamat' => 'Jl. Anggrek No. 21, Surabaya',
                'no_phone' => '084567890123',
                'pendidikan_lanjut' => 'Universitas Airlangga',
                'pekerjaan' => 'Digital Marketer',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nazwa Chairunnisa Hamid Siagian',
                'email' => 'nazwa.hamid@example.com',
                'password' => Hash::make('123123123'),
                'role' => 'alumni',
                'foto' => null,
                'tanggal_lahir' => '2006-07-18',
                'tempat_lahir' => 'Medan',
                'jenis_kelamin' => 'P',
                'nis' => '123460',
                'tahun_lulus' => '2024',
                'alamat' => 'Jl. Flamboyan No. 7, Medan',
                'no_phone' => '085678901234',
                'pendidikan_lanjut' => 'Universitas Negeri Medan',
                'pekerjaan' => 'UI/UX Designer',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('users')->insert($users);
    }
}
