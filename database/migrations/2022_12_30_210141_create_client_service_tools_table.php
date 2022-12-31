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
        Schema::create('client_service_tools', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_service_id')->constrained();
            $table->foreignId('tool_id')->constrained();
            $table->unsignedBigInteger('created_by')->foreignId('user_id')->nullable()->constrained();
            $table->unsignedBigInteger('last_modified_by')->foreignId('user_id')->nullable()->constrained()->nullable();
            $table->json('content')->nullable();
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
        Schema::dropIfExists('client_service_tools');
    }
};
