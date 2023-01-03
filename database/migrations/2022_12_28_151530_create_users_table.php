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
        //Usuarios
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->string('name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('notes')->nullable();
            $table->string('password');
            $table->string('recover_token')->nullable()->unique();
            $table->date('recover_token_expiry_date')->nullable();
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
        Schema::dropIfExists('files'); //TODO reolver esto, hacer una migración que borre en orden
        Schema::dropIfExists('users');
    }
};
