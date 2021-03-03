<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIadSchedulesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('iad__schedules', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->integer('iso');
      $table->string('name');
      $table->integer('ad_id')->unsigned();
      $table->foreign('ad_id')->references('id')->on('iad__ads')->onDelete('restrict');
      $table->time('start_time');
      $table->time('end_time');
      $table->text('options')->nullable();
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
    Schema::dropIfExists('iad__schedules');
  }
}
