<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('media_id')->unsigned();
            $table->integer('others_id')->unsigned();
            $table->integer('finishing_id')->unsigned();
            $table->integer('height');
            $table->integer('width');
            $table->string('particular');
            $table->longText('note');
        //    $table->foreign('finishing_id')->references('id')->on('finishings');
         //   $table->foreign('others_id')->references('id')->on('others');
          //  $table->foreign('media_id')->references('id')->on('medias');
          //  $table->foreign('project_id')->references('id')->on('projects');
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
        Schema::dropIfExists('project_lists');
    }
}
