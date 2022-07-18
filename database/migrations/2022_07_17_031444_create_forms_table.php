<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->tinyText('type_cooperation');
            $table->tinyText('city');
            $table->text('time_work');
            $table->text('size_organization');
            $table->tinyText('gender');
            $table->text('Introduction');
            $table->tinyText('category');
            $table->tinyInteger('score');
            $table->text('check');
            $table->string('link');
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
        Schema::dropIfExists('forms');
    }
}
