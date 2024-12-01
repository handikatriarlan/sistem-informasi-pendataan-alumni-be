<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('events')->truncate();

        Event::create([
            'nama_event' => 'Reuni Alumni 2024',
            'tempat_event' => 'Hotel Mulia Jakarta',
            'waktu_event' => '06:00',
            'tgl_event' => '2024-12-10',
            'status' => true,
            'keterangan' => 'Acara reuni alumni SMA 1 Jakarta tahun 2024, dengan berbagai kegiatan seru dan berbagi pengalaman.',
            'gambar' => 'events.png',
        ]);

        Event::create([
            'nama_event' => 'Seminar Karir Alumni',
            'tempat_event' => 'Auditorium Sekolah',
            'waktu_event' => '09:00',
            'tgl_event' => '2024-12-15',
            'status' => true,
            'keterangan' => 'Seminar tentang pengembangan karir dan peluang kerja untuk alumni dari berbagai jurusan.',
            'gambar' => 'events.png',
        ]);

        Event::create([
            'nama_event' => 'Networking Alumni Teknologi',
            'tempat_event' => 'Kampus Universitas Teknologi',
            'waktu_event' => '03:00',
            'tgl_event' => '2024-07-25',
            'status' => false,
            'keterangan' => 'Sesi networking khusus alumni yang bekerja di bidang teknologi, untuk berbagi peluang dan pengalaman.',
            'gambar' => 'events.png',
        ]);

        Event::create([
            'nama_event' => 'Pelatihan Kepemimpinan Alumni',
            'tempat_event' => 'Ruang Serbaguna Sekolah',
            'waktu_event' => '10:00',
            'tgl_event' => '2024-12-05',
            'status' => true,
            'keterangan' => 'Pelatihan untuk alumni yang ingin mengembangkan keterampilan kepemimpinan dan manajerial.',
            'gambar' => 'events.png',
        ]);

        Event::create([
            'nama_event' => 'Workshop Kewirausahaan Alumni',
            'tempat_event' => 'Gedung Serbaguna',
            'waktu_event' => '01:00',
            'tgl_event' => '2024-09-12',
            'status' => false,
            'keterangan' => 'Workshop untuk alumni yang tertarik dalam bidang kewirausahaan dan startup.',
            'gambar' => 'events.png',
        ]);
    }
}
