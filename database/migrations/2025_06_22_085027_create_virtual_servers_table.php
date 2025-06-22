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
        Schema::create('virtual_servers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status', ['running', 'stopped', 'restarting'])->default('stopped');
            $table->text('console_output')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('virtual_servers');
    }
};
