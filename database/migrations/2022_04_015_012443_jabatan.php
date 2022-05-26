<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jabatan extends Migration{
    
    public function up(){
        Schema::create('jabatans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('jabatans');
    }
}