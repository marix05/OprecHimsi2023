<?php

namespace Database\Seeders;

use App\Models\Regencies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Regencies::truncate();
      
      // fopen untuk membuka data file, "r" artinya read only
      $csvFile = fopen(base_path("database/data/regencies.csv"), "r");
      
      $firstline = true;

      // perulangan mengecek data csv 1/1 tiap barisnya (ada/tidak)
      while (($data = fgetcsv($csvFile, 1000, ";")) !== false) {
        if (!$firstline) {
          Regencies::create([
            "id" => $data['0'] ?? "None",
            "province_id" => $data['1'] ?? "None",
            "name" => $data['2'] ?? "None",
          ]);
        }
        $firstline = false;
      }

      // fclose untuk menutup file yang sudah dibuka sebelumnya
      fclose($csvFile);
    }
}
