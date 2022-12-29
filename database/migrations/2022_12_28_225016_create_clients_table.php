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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('name')->unique();
             //TODO pasar logo a su propia tabla
            $table->string('street')->nullable();
            $table->string('suburb')->nullable();
            $table->string('zip_code')->nullable();
            // $table->foreignId('municipality_id')->constrained(); //TODO no nullable
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('clients');
    }
};
