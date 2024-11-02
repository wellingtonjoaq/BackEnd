<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('voluntarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf', 11);
            $table->string('email', 100);
            $table->string('telefone', 11);
            $table->string('areas');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('voluntarios');
    }
};
