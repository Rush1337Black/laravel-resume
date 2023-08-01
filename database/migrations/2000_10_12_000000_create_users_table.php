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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('login')->unique();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('role')->default('user');

            $table->string('name')->default('New User');
            $table->integer('messages')->default(0);
            $table->integer('balance')->default(0);
            $table->integer('rating')->default(0);
            $table->integer('sales')->default(0);
            $table->integer('purchases')->default(0);
            $table->string('path_image_avatar')->nullable();
            $table->string('path_image_background')->nullable();

            $table->boolean('isFrozen')->default(0);
            $table->boolean('isBan')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
