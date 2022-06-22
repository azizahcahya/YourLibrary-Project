<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peminjaman::create([
            'title' => 'I Want to Die But I Want to Eat Tteokbokki',
            'DateBorrowed' => '2022-06-12',
            'DueDate' => '2022-06-22'
        ]);

        Peminjaman::create([
            'title' => 'I want to Eat Tteokbokki',
            'DateBorrowed' => '2022-06-11',
            'DueDate' => '2022-06-21'
        ]);

        Peminjaman::create([
            'title' => 'I want to Sleep',
            'DateBorrowed' => '2022-06-09',
            'DueDate' => '2022-06-27'
        ]);
    }
}
