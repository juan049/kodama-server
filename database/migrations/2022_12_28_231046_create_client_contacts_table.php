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
        Schema::create('client_contacts', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('client_id')->constrained();
            $table->string('name');
            $table->string('last_name');
            $table->foreignId('contact_id')->constrained();
            $table->boolean('is_legal_representative');
            $table->unsignedBigInteger('creator')->foreignId('user_id')->nullable()->constrained();
            $table->unsignedBigInteger('legal_power')->foreignId('file_id')->nullable()->constrained();
            $table->unsignedBigInteger('official_id')->foreignId('file_id')->nullable()->constrained();
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
        Schema::dropIfExists('client_contacts');
    }
};
