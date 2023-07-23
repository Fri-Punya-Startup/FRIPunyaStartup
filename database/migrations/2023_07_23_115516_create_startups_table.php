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
        Schema::create('startups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owners_id');
            $table->string('startup_name');
            $table->string('description');
            $table->string('category');
            $table->string('image');
            $table->timestamps();
    
            $table->foreign('owners_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('startups');
    }
};
