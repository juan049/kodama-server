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
        Schema::create('authority_dependencies', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('authority_id')->constrained();
            $table->string('name')->unique();
            $table->string('description');
            $table->foreignId('adress_id')->constrained();
            $table->foreignId('contact_id')->constrained();
            $table->string('director_name')->nullable();
            $table->string('director_last_name')->nullable();
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
        Schema::dropIfExists('authority_dependencies');
    }
};
