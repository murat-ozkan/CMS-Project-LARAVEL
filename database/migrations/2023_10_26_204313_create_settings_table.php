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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('settings_description');
            $table->string('settings_key');
            $table->text('settings_value');
            $table->string('settings_type');
            $table->integer('settings_must');
            $table->enum('settings_delete', ['0', '1']);
            $table->enum('settings_status', ['0', '1']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
