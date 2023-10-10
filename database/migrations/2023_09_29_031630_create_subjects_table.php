<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     //up method is used to run the php artisan migrate
     //created a subjects with the specify columns (id,course_code,coursse_description,and units)
     //timestamps Adds two timestamp columns, created_at and updated_at, 
     //for tracking when records are created and updated. 
    public function up(): void
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('course_code');
            $table->string('course_description');
            $table->integer('units');
            
        });
    }

    /**
     * for rollback of php artisan migrate:rollback
     * reverse the changes made
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
