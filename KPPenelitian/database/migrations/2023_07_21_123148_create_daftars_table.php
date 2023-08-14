<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('daftars', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('jenisperm');
            $table->binary('filesp');
            $table->string('jenis');
            $table->string('namanim');
            $table->string('idjss');
            $table->string('nowa','15');
            $table->string('emailindi');
            $table->string('kampus');
            $table->date('tglmul');
            $table->date('tglsel');
            $table->string('judul');
            $table->string('nugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftars');
    }
};
