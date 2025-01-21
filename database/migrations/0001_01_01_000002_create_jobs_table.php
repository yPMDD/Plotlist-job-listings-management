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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('logo')->nullable();
            $table->string('category');
            $table->bigint('salary');
            $table->string('company');
            $table->string('location');
            $table->string('email');
            $table->string('website')->nullable();
            $table->longText('description');
            $table->timestamps();
        });
        

        

        
    }


    public function add()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->bigInteger('salary')->after('category')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('failed_jobs');
    }
};
