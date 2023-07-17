<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Admin::truncate();
      
      Admin::create([
        'username' => 'exm',
        'password' => bcrypt('exm'),
        'divisi' => 'Inti',
      ]);
    }
}
