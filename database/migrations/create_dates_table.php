<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatesTable extends Migration
{
    public function up()
    {
        Schema::create('dates', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('project_id')->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image_location')->nullable();
            $table->dateTime('date_start');
            $table->dateTime('date_end')->nullable();
            $table->timestamps();

          //  $table->foreign('project_id')->references('id')->on('projects')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dates');
    }
}
