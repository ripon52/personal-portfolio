<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsAtArticleResources extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article_resources', function (Blueprint $table) {
            $table->string('author')->nullable();
            $table->string('publisher')->nullable();
            $table->string('year')->nullable();
            $table->string('doi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article_resources', function (Blueprint $table) {
            //
        });
    }
}
