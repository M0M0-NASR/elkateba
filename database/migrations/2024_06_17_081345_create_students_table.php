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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('genaral_id');
            $table->string('army_id');
            $table->string('name');
            $table->string('govern',30);
            $table->string('markaz',30);
            $table->string('street',30);
            $table->boolean('is_single');
            $table->string('edu');
            $table->foreignId('7kmdar_id')->constrained('students')->onDelete('cascade');
            // $table->foreignId('fasela_id')->constrained('faselas')->onDelete('cascade');
            // $table->foreignId('anbar_id')->constrained('anbars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
