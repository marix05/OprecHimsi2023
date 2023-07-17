<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 20)->unique();
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->string('prodi', 50);
            $table->string('kelas', 50);
            $table->string('domisili');
            $table->string('pil1');
            $table->text('alasan1');
            $table->string('pil2');
            $table->text('alasan2');
            $table->text('tentang');
            $table->string('wawancara', 100);
            $table->string('idline', 100);
            $table->string('instagram', 100);
            $table->string('foto');
            $table->string('khs');
            $table->string('bukti_ss');
            $table->string('password');
            $table->string('lulus')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
