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
        Schema::create('golden_abc_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role'); // 'teacher', 'shareholder', 'principal'
            $table->text('description');
            $table->string('image')->nullable(); // for avatar
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('golden_abc_members');
    }
};
