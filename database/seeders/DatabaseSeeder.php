<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Eskul;
use App\Models\Posts;
use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );

        Eskul::updateOrCreate(
            ['slug' => 'paskibra'],
            [
                'title' => 'Paskibra',
                'body' => 'Ekstrakurikuler baris-berbaris untuk melatih kedisiplinan dan tanggung jawab.',
            ]
        );
        Eskul::updateOrCreate(
            ['slug' => 'pramuka'],
            [
                'title' => 'Pramuka',
                'body' => 'Kegiatan kepramukaan yang menumbuhkan kemandirian, kepemimpinan, dan gotong royong.',
            ]
        );
        Eskul::updateOrCreate(
            ['slug' => 'futsal'],
            [
                'title' => 'Futsal',
                'body' => 'Pengembangan bakat olahraga melalui latihan rutin dan kejuaraan antarsekolah.',
            ]
        );

        Posts::updateOrCreate(
            ['slug' => 'pengumuman-osis'],
            [
                'name' => 'Pengumuman OSIS',
                'author' => 'Tim OSIS',
                'body' => 'Informasi terbaru kegiatan OSIS semester ini.',
                'status' => 'published',
                'published_at' => now()->subDays(2),
            ]
        );
        Posts::updateOrCreate(
            ['slug' => 'jadwal-kegiatan'],
            [
                'name' => 'Jadwal Kegiatan',
                'author' => 'Humas',
                'body' => 'Jadwal kegiatan sekolah dan ekstrakurikuler bulan ini.',
                'status' => 'published',
                'published_at' => now()->subDay(),
            ]
        );

        // Sample Events (ID)
        Event::updateOrCreate(
            ['slug' => 'pameran-sains'],
            [
                'title' => 'Pameran Sains',
                'starts_at' => now()->addDays(7)->setTime(9,0),
                'ends_at' => now()->addDays(7)->setTime(15,0),
                'location' => 'Aula Utama',
                'description' => 'Ajang unjuk karya sains siswa dari berbagai jurusan.',
                'status' => 'published',
                'featured' => true,
            ]
        );
        Event::updateOrCreate(
            ['slug' => 'hari-olahraga-tahunan'],
            [
                'title' => 'Hari Olahraga Tahunan',
                'starts_at' => now()->addDays(20)->setTime(8,30),
                'ends_at' => now()->addDays(20)->setTime(17,0),
                'location' => 'Lapangan Sekolah',
                'description' => 'Kompetisi dan permainan olahraga antar kelas.',
                'status' => 'published',
                'featured' => false,
            ]
        );
        Event::updateOrCreate(
            ['slug' => 'konser-musik-musim-semi'],
            [
                'title' => 'Konser Musik Musim Semi',
                'starts_at' => now()->addDays(35)->setTime(18,30),
                'ends_at' => now()->addDays(35)->setTime(20,30),
                'location' => 'Gedung Seni Pertunjukan',
                'description' => 'Penampilan musik siswa dan kolaborasi ekstrakurikuler.',
                'status' => 'published',
                'featured' => false,
            ]
        );
    }
}
