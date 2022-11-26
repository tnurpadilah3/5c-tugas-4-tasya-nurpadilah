<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MataKuliah>
 */
class MataKuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create('id_ID');
        $matkul = [
            "PPKN", "Algoritma dan Pemrograman", "Bahasa Inggris",
            "Kalkulus", "Pengantar Teknologi dan Informasi", "Matematika Diskrit",
            "PAI", "Pemrograman Berbasis Objek", "Basis Data",
            "Teori Bahasa dan Automata", "Keamanan Sistem", "Analisis dan Desain Berorientasi Objek",
            "Jaringan Komputer", "Metode Numerik", "Pengantar Kecerdasan Buatan",
            "multimedia", "Sistem Operasi", "Pengolahan Basis Data",
            "Statistika", "Pemrograman Berbasis Mobile", "Framework Pemrograman Web",
            "Pengelola Basis Data", "Cloud Computing", "Data Mining",
        ];
        return [
            'kode_mk' => $faker->unique()->numerify('IF###'),
            'nama_mk' => $faker->randomElement($matkul),
            'sks' => $faker->numberBetween(1, 4),
            'nama_dosen' => $faker->firstName . " " . $faker->lastName
        ];
    }
}

