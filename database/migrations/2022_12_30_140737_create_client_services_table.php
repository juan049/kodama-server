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
        Schema::create('client_services', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('client_id')->constrained();
            $table->foreignId('service_id')->constrained();
            $table->unsignedBigInteger('status_id')->foreignId('status_id')->nullable()->constrained();
            $table->foreignId('current_process_id')->constrained();
            $table->foreignId('coordination_id')->constrained();
            $table->unsignedBigInteger('created_by')->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('assigned_to')->foreignId('user_id')->constrained();
            $table->string('name');
            $table->string('description')->nullable();
            $table->boolean('is_public');
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
        Schema::dropIfExists('client_services');
    }
};
