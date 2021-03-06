<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Documents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('identifier');
            $table->string('type');
            $table->string('lang')->nullable();
            $table->integer('year');
            $table->text('text')->nullable();
            $table->json('meta')->nullable();
            $table->string('src');
            $table->integer('court_id');
            $table->timestamps();
            $table->index('type');
            $table->index('court_id');
            $table->index('year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documents');
    }
}
