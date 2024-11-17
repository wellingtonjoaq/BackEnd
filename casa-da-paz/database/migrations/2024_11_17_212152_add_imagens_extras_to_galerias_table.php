<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('galerias', function (Blueprint $table) {
            $table->text('imagens_extras')->nullable(); 
        });
    }
    
    public function down()
    {
        Schema::table('galerias', function (Blueprint $table) {
            $table->dropColumn('imagens_extras');
        });
    }    
};
