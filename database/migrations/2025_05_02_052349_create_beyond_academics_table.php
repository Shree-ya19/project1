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
        // First table: beyond_acedemics
        Schema::create('beyond_academics', function (Blueprint $table) {
            $table->id();
            $table->string('activity');
            $table->text('detail');
            $table->timestamps();
            $table->softDeletes();
        });
    
        // Second table: activity_images
        Schema::create('activity_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activity_id')->constrained('beyond_academics')->onDelete('cascade');
            $table->string('image');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_image');
        Schema::dropIfExists('beyond_academics');
    }
};
