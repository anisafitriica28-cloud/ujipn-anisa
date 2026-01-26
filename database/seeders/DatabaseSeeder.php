<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Siswa;
use App\Models\Aspirasi;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $dataUser = [
            [
                'nama' => 'Slamet Kuatno, S.pd',
                'username' => 'slametkuatno',
                'email' => 'slametkuatno@gmail.com',
                'jabatan' => 'Waka Sarpras',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ],
            [
                'nama' => 'Annisa Nur Fitri',
                'username' => 'user-12345678',
                'email' => 'annisaica@gmail.com',
                'jabatan' => '',
                'password' => bcrypt('123456'),
                'role' => 'siswa'
            ]

        ];
        foreach ($dataUser as $user) {
            User::create($user);
        }

        $dataSiswa = [
            [
                'user_id' => 2,
                'nis' => '12345678',
                'kelas' => '12 RPL',
                'jurusan' => 'PPLG',
            ]
        ];
        
        foreach ($dataSiswa as $siswa) {
            Siswa::create($siswa);
        }

        $dataKategori = [
            [
                'nama_kategori' => 'Ruang Kelas',
                'deskripsi' => 'Sarana dan prasarana Ruang kelas siswa'
            ],
            [
                'nama_kategori' => 'Toilet',
                'deskripsi' => 'Sarana adan prasarana kamar mandi/toilet siswa'
            ],
            [
                'nama_kategori' => 'Sekolah',
                'deskripsi' => 'Sarana dan prasarana sekolah'
            ],
            [
                'nama_kategori' => 'Laboratorium Komputer',
                'deskripsi' => 'Sarana dan prasarana laboratorium komputer sekolah'
            ],
        ];

         foreach ($dataKategori as $kategori) {
            Kategori::create($kategori);
        }

        $dataAspirasi = [
            [
                'siswa_id' => 1,
                'kategori_id' => 1,
                'judul' => 'AC Kurang Dingin',
                'isi' => 'Mohon di cek, AC di ruang kelas 12 RPL kurang dingin',
                'status' => 'menunggu',
            ],
            [
                'siswa_id' => 1,
                'kategori_id' => 1,
                'judul' => 'Lampu mati',
                'isi' => 'Mohon di cek, lampu di ruang kelas 12 RPL mati',
                'status' => 'diproses',
            ],
            [
                'siswa_id' => 1,
                'kategori_id' => 1,
                'judul' => 'Bangku kurang',
                'isi' => 'Mohon di cek, jumlah bangku tidak sesuai dengan jumlah total siswadi ruang kelas 12 RPL',
                'status' => 'diproses',
            ],
            [
                'siswa_id' => 1,
                'kategori_id' => 2,
                'judul' => 'Toilet Mampet',
                'isi' => 'Mohon di cek, toilet perempuan di kamar mandi/toilet 2, saluran pembuangannya mampet',
                'status' => 'selesai',
            ],
        ];

        foreach ($dataAspirasi as $aspirasi) {
            Aspirasi::create($aspirasi);

        }
    }

}
