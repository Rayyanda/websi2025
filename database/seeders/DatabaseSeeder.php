<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\User;
use App\Models\Visit;
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
        $now = Carbon::now();
        // User::factory(10)->create();
        for ($i = 0; $i < 10; $i++) {
    Visit::create([
        'ip_address' => '192.168.0.' . rand(1, 255),
                'visited_at' => $now->copy()->subDays(rand(0, 30))->subMinutes(rand(0, 1440)),
                'duration' => rand(10, 600), // antara 10 detik sampai 10 menit
    ]);
}

        // User::create([
        //     'name'=> 'Eka Yuni Astuty, S.Kom., M.MSI.',
        //     'email'=>'ekayuniastuty@yahoo.com',
        //     'password'=>Hash::make('adminwebsi123'),
        //     'role'=>'admin'
        // ]);
        // Page::create([
        //     [
        //         'title'=>'Sejarah Program Studi',
        //         'slug'=> Str::slug('Sejarah Program Studi'),
        //         'published_at' => Carbon::now()
        //     ],
        //     [
        //         'title'=>'Visi, Misi, Tujuan, & Strategi',
        //         'slug'=> Str::slug('Visi, Misi, Tujuan, & Strategi'),
        //         'published_at' => Carbon::now()
        //     ],
        //     [
        //         'title'=>'Keunggulan',
        //         'slug'=> Str::slug('Keunggulan'),
        //         'published_at' => Carbon::now()
        //     ],
        //     [
        //         'title'=>'Akreditasi',
        //         'slug'=> Str::slug('Akreditasi'),
        //         'published_at' => Carbon::now()
        //     ],
        //     [
        //         'title'=>'Kegiatan Mahasiswa',
        //         'slug'=> Str::slug('Kegiatan Mahasiswa'),
        //         'published_at' => Carbon::now()
        //     ],
        //     [
        //         'title'=>'Beasiswa',
        //         'slug'=> Str::slug('Beasiswa'),
        //         'published_at' => Carbon::now()
        //     ],
        //     [
        //         'title'=>'Belajar di Jepang',
        //         'slug'=> Str::slug('Belajar di Jepang'),
        //         'published_at' => Carbon::now()
        //     ],
        //     [
        //         'title'=>'Prospek Karir',
        //         'slug'=> Str::slug('Sejarah Program Studi'),
        //         'published_at' => Carbon::now()
        //     ],
        // ]);
    }
}
