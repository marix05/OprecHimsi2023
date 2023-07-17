<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Mahasiswa::truncate();
      
      // fopen untuk membuka data file, "r" artinya read only
      $csvFile = fopen(base_path("database/data/DataMahasiswaSI.csv"), "r");
      
      $firstline = true;

      // perulangan mengecek data csv 1/1 tiap barisnya (ada/tidak)
      while (($data = fgetcsv($csvFile, 1000, ";")) !== false) {
        if (!$firstline) {
          Mahasiswa::create([
            "nim" => $data['0'] ?? "None",
            "nama" => $data['1']?? "None",
            "akt" => $data['2'] ?? "None",
            "kelas" => $data['3'] ?? "None",
          ]);
        }
        $firstline = false;
      }

      // fclose untuk menutup file yang sudah dibuka sebelumnya
      fclose($csvFile);
    }
}
