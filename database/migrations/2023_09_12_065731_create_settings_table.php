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
            $table->string('title', 255)->nullable();
            $table->string('favicon', 255)->nullable();
            $table->text('meta')->nullable();
            $table->string('logo', 255)->nullable();
            $table->string('logo_transparent', 255)->nullable();
            $table->string('banner', 255)->nullable();
            $table->string('about_title', 255)->nullable();
            $table->string('about_image', 255)->nullable();
            $table->text('about_text')->nullable();
            $table->string('bg1', 255)->nullable();
            $table->string('bg2', 255)->nullable();
            $table->string('bg3', 255)->nullable();
            $table->string('footer_logo', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('phone', 18)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('facebook', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('linkedin', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('youtube', 255)->nullable();
            $table->text('footer_right')->nullable();
            $table->text('copy_right_text')->nullable();
            $table->string('status', 10)->nullable();
            $table->timestamps();
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
