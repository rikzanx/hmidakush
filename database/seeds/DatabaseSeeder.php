<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'nama' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'),
            'gambar' => 'foto/user/default.png',
            'role' => 0
        ]);
        DB::table('users')->insert([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'gambar' => 'foto/user/default.png',
            'role' => 1
        ]);
        // make example seed kategori
        DB::table('kategori_galeri')->insert([
            'nama_kategori' => 'kategori',
        ]);
        DB::table('kategori_berita')->insert([
            'nama_kategori' => 'kategori',
        ]);
        DB::table('kategori_publikasi')->insert([
            'nama_kategori' => 'kategori',
        ]);
        // make example data for table publikasi
        DB::table('publikasi')->insert([
            'user_id' => 1,
            'kategori_publikasi_id' => 1,
            'judul' => 'judul',
            'tanggal_rilis' => '2023-04-23',
            'deskripsi' => 'deskripsi',
            'gambar' => 'foto/publikasi/default.png',
            'slug' => 'judul',
        ]);
        // make example data for table berita
        DB::table('berita')->insert([
            'user_id' => 1,
            'kategori_berita_id' => 1,
            'judul' => 'judul',
            'tanggal_rilis' => '2023-04-23',
            'deskripsi' => 'deskripsi',
            'gambar' => 'foto/berita/default.png',
            'slug' => 'judul',
        ]);
        // make example data for table galeri
        DB::table('galeri')->insert([
            'user_id' => 1,
            'kategori_galeri_id' => 1,
            'judul' => 'judul',
            'gambar' => 'foto/user/default.png',
        ]);
    }
}
