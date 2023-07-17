<?php

namespace Database\Seeders;

use App\Models\Provinces;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Provinces::truncate();
      
      // fopen untuk membuka data file, "r" artinya read only
      $csvFile = fopen(base_path("database/data/provinces.csv"), "r");
      
      $firstline = true;

      // perulangan mengecek data csv 1/1 tiap barisnya (ada/tidak)
      while (($data = fgetcsv($csvFile, 1000, ";")) !== false) {
        if (!$firstline) {
          Provinces::create([
            "id" => $data['0'] ?? "None",
            "name" => $data['1'] ?? "None",
          ]);
        }
        $firstline = false;
      }

      // fclose untuk menutup file yang sudah dibuka sebelumnya
      fclose($csvFile);
    }
}
