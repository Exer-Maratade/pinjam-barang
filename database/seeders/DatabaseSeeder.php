<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //    Barang::factory(14)->create();
    
        User::create([
            'name' => 'admin',
            'nrp' => '99080817',
            'pangkat' => 'Ipda',
            'jabatan' => 'Kaur Min',
            'password' =>Hash::make('admin123'),
            'email' => 'test@example.com',
            'level' => 'admin'
        ]);
        User::create([
            'name' => 'jovan',
            'nrp' => '99080818',
            'pangkat' => 'Bripda',
            'jabatan' => 'Ba Urtu',
            'password' =>Hash::make('admin123'),
            'email' => 'jovan@example.com',
            'level' => 'personil'
        ]);


        // Kategori::create([
        //     'kat' => 'ELEKTRONIK',
        // ]);
        // Kategori::create([
        //     'kat' => 'YANMA',
        // ]);
        // Kategori::create([
        //     'kat' => 'RANMOR',
        // ]);
        // Barang::create([
        //     'jenis_barang' => 'komputer',
        //     'nama_barang' => 'komputer 05',
        //     'deskripsi' => 'komputer milik ruang smartclass',
        //     'kategori_id' => '3',
        //     'kondisi_barang' => 'layak',
        // ]);
        // Barang::create([
        //     'jenis_barang' => 'motor',
        //     'nama_barang' => 'yamaha binmas',
        //     'deskripsi' => 'nomot polisi XV 24',
        //     'kategori' => 'Ranmor',
        //     'kondisi_barang' => 'layak',
        // ]);
    }
}
