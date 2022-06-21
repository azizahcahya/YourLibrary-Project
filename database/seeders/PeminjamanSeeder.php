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
            'DateBorrowed' => 2022-11-11,
            'DueDate' => 2022-06-24,
            'title' => 'Judul Pertama'



            
        ]);

        
    }
}
