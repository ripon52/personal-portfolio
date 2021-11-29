<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('certificate_title_id')->nullable();
            $table->string('title')->nullable();
            $table->string('institute')->nullable()->comment('School/College/University');
            $table->string('session')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('achievement_title')->nullable();
            $table->longText('notes')->nullable();
            $table->integer('isActive')->default(1)->comment('0=Hide from Website');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graduations');
    }
}