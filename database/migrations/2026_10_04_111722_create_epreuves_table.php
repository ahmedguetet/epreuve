<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('epreuves', function (Blueprint $table) {
            $table->integer('numepreuve')->primary();
            $table->date('datepreuve');
            $table->string('lieu');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('epreuves');
    }
};
