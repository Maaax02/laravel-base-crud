<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableColumnSaleDateToComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->date('saleDate')->nullable()->change();
            $table->string('thumb')->nullable()->change();
            $table->string('series')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->date('saleDate')->nullable(false)->change();
            $table->string('thumb')->nullable(false)->change();
            $table->string('series')->nullable(false)->change();
        });
    }
}
