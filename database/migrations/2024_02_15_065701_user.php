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
        Schema::create('user', function (Blueprint $table) {
            $table->integer('UserID');
            $table->integer('Username');
            $table->integer('Password');
            $table->string('Email',255);
            $table->string('NamaLengkap',255);
            $table->text('Alamat');
            $table->timestamps();
            $table->primary('UserID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::drop('user');
    }
};
