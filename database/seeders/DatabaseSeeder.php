<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\mapel;
use App\Models\kelas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'nama_lengkap' => 'Daniandra Prayudisty Ilham',
            'kelas' => 'XII RPL',
            'username' => '544201253',
            'password' => bcrypt('544201253'),
            'role' => 'siswa',
        ]);
        User::create([
            'nama_lengkap' => 'Muhammad Kayzan',
            'kelas' => 'X RPL 4',
            'username' => '544221372',
            'password' => bcrypt('544221372'),
            'role' => 'siswa',
        ]);
        User::create([
            'nama_lengkap' => 'Rezky Hidayat J',
            'kelas' => 'X RPL 4',
            'username' => '544221380',
            'password' => bcrypt('544221380'),
            'role' => 'siswa',
        ]);
        User::create([
            'nama_lengkap' => 'Jevinson Imanuel Peuru',
            'kelas' => 'X RPL 2',
            'username' => '544221325',
            'password' => bcrypt('544221325'),
            'role' => 'siswa',
        ]);
        User::create([
            'nama_lengkap' => 'Suharyuni',
            'kelas' => '',
            'username' => 'pbo',
            'password' => bcrypt('pbo'),
        'role' => 'guru',
        ]);

        kelas::create([
            'nama_kelas' => 'X RPL 1',
            'grade' => '10'
        ]);
        kelas::create([
            'nama_kelas' => 'X RPL 2',
            'grade' => '10'
        ]);
        kelas::create([
            'nama_kelas' => 'X RPL 3',
            'grade' => '10'
        ]);
        kelas::create([
            'nama_kelas' => 'X RPL 4',
            'grade' => '10'
        ]);
        kelas::create([
            'nama_kelas' => 'X TKJ 1',
            'grade' => '10'
        ]);
        kelas::create([
            'nama_kelas' => 'X TKJ 2',
            'grade' => '10'
        ]);
        kelas::create([
            'nama_kelas' => 'X TKJ 3',
            'grade' => '10'
        ]);
        kelas::create([
            'nama_kelas' => 'X TKJ 4',
            'grade' => '10'
        ]);
        kelas::create([
            'nama_kelas' => 'X TKJ 5',
            'grade' => '10'
        ]);
        kelas::create([
            'nama_kelas' => 'X TJA',
            'grade' => '10'
        ]);
        kelas::create([
            'nama_kelas' => 'X TEL',
            'grade' => '10'
        ]);
        kelas::create([
            'nama_kelas' => 'X ULW',
            'grade' => '10'
        ]);

        //kelas 11
        kelas::create([
            'nama_kelas' => 'XI RPL 1',
            'grade' => '11'
        ]);
        kelas::create([
            'nama_kelas' => 'XI RPL 2',
            'grade' => '11'
        ]);
        kelas::create([
            'nama_kelas' => 'XI RPL 3',
            'grade' => '11'
        ]);
        kelas::create([
            'nama_kelas' => 'XI TKJ 1',
            'grade' => '11'
        ]);
        kelas::create([
            'nama_kelas' => 'XI TKJ 2',
            'grade' => '11'
        ]);
        kelas::create([
            'nama_kelas' => 'XI TKJ 3',
            'grade' => '11'
        ]);
        kelas::create([
            'nama_kelas' => 'XI TKJ 4',
            'grade' => '11'
        ]);
        kelas::create([
            'nama_kelas' => 'XI TKJ 5',
            'grade' => '11'
        ]);
        kelas::create([
            'nama_kelas' => 'XI TJA',
            'grade' => '11'
        ]);
        kelas::create([
            'nama_kelas' => 'XI TEL',
            'grade' => '11'
        ]);
        kelas::create([
            'nama_kelas' => 'XI PAR',
            'grade' => '11'
        ]);

        //kelas 12
        kelas::create([
            'nama_kelas' => 'XII RPL',
            'grade' => '12'
        ]);
        kelas::create([
            'nama_kelas' => 'XII TKJ 1',
            'grade' => '12'
        ]);
        kelas::create([
            'nama_kelas' => 'XII TKJ 2',
            'grade' => '12'
        ]);
        kelas::create([
            'nama_kelas' => 'XII TKJ 3',
            'grade' => '12'
        ]);
        kelas::create([
            'nama_kelas' => 'XII TKJ 4',
            'grade' => '12'
        ]);
        kelas::create([
            'nama_kelas' => 'XII TKJ 5',
            'grade' => '12'
        ]);
        kelas::create([
            'nama_kelas' => 'XII TJA 1',
            'grade' => '12'
        ]);
        kelas::create([
            'nama_kelas' => 'XII TJA 2',
            'grade' => '12'
        ]);
        kelas::create([
            'nama_kelas' => 'XII TEL 1',
            'grade' => '12'
        ]);
        kelas::create([
            'nama_kelas' => 'XII TEL 2',
            'grade' => '12'
        ]);
        kelas::create([
            'nama_kelas' => 'XII TEL 3',
            'grade' => '12'
        ]);
        kelas::create([
            'nama_kelas' => 'XII PAR',
            'grade' => '12'
        ]);

        mapel::create([
            'nama_mapel' => 'PKWU',
            'nama_guru' => 'elwinda',
        ]);
        mapel::create([
            'nama_mapel' => 'b jepang',
            'nama_guru' => 'syafaruddin',
        ]);
        mapel::create([
            'nama_mapel' => 'PBO',
            'nama_guru' => 'suharyuni',
        ]);

}
}
