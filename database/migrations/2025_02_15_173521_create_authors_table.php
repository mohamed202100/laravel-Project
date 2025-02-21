<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('profile_image')->nullable();
            $table->text('bio');
            $table->string('job_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

};
