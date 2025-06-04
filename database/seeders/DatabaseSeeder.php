<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name'=> 'Eka Yuni Astuty, S.Kom., M.MSI.',
            'email'=>'ekayuniastuty@yahoo.com',
            'password'=>Hash::make('adminwebsi123'),
            'role'=>'admin'
        ]);
        Page::create([
            [
                'title'=>'Sejarah Program Studi',
                'slug'=> Str::slug('Sejarah Program Studi'),
                'published_at' => Carbon::now()
            ],
            [
                'title'=>'Visi, Misi, Tujuan, & Strategi',
                'slug'=> Str::slug('Visi, Misi, Tujuan, & Strategi'),
                'published_at' => Carbon::now()
            ],
            [
                'title'=>'Keunggulan',
                'slug'=> Str::slug('Keunggulan'),
                'published_at' => Carbon::now()
            ],
            [
                'title'=>'Akreditasi',
                'slug'=> Str::slug('Akreditasi'),
                'published_at' => Carbon::now()
            ],
            [
                'title'=>'Kegiatan Mahasiswa',
                'slug'=> Str::slug('Kegiatan Mahasiswa'),
                'published_at' => Carbon::now()
            ],
            [
                'title'=>'Beasiswa',
                'slug'=> Str::slug('Beasiswa'),
                'published_at' => Carbon::now()
            ],
            [
                'title'=>'Belajar di Jepang',
                'slug'=> Str::slug('Belajar di Jepang'),
                'published_at' => Carbon::now()
            ],
            [
                'title'=>'Prospek Karir',
                'slug'=> Str::slug('Sejarah Program Studi'),
                'published_at' => Carbon::now()
            ],
        ]);
    }
}
