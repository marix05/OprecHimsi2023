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
        'username' => 'inti',
        'password' => bcrypt('inti123'),
        'divisi' => 'Inti',
      ]);
      Admin::create([
        'username' => 'bistra',
        'password' => bcrypt('bistra123'),
        'divisi' => 'Bistra',
      ]);
      Admin::create([
        'username' => 'medinfo',
        'password' => bcrypt('medinfo123'),
        'divisi' => 'Medinfo',
      ]);
      Admin::create([
        'username' => 'kastrad',
        'password' => bcrypt('kastrad123'),
        'divisi' => 'Kastrad',
      ]);
      Admin::create([
        'username' => 'kestari',
        'password' => bcrypt('kestari123'),
        'divisi' => 'Kestari',
      ]);
      Admin::create([
        'username' => 'ristek',
        'password' => bcrypt('ristek123'),
        'divisi' => 'Ristek',
      ]);
      Admin::create([
        'username' => 'pmb',
        'password' => bcrypt('pmb123'),
        'divisi' => 'PMB',
      ]);
      Admin::create([
        'username' => 'psdm',
        'password' => bcrypt('psdm123'),
        'divisi' => 'PSDM',
      ]);
      Admin::create([
        'username' => 'admin',
        'password' => bcrypt('ptiaja'),
        'divisi' => 'Admin',
      ]);
    }
}
