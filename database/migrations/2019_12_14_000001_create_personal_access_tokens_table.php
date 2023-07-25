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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role');
            $table->string('verifikasi')->nullable();
            $table->string('phone')->nullable();
            $table->string('remember_token', 100)->nullable(); // Menggunakan panjang token 100 karakter
            $table->timestamps();
            
            $table->index('email'); // Indeks untuk mempercepat pencarian berdasarkan email
            $table->index('remember_token'); // Indeks untuk mempercepat pencarian berdasarkan remember_token
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
