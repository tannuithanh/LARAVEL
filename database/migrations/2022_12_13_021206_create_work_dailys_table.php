<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkDailysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_dailys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('work_category_id');
            $table->string('detail_work');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->unsignedBigInteger('user_id');
            $table->string('note');
            $table->foreign('work_category_id')->references('id')->on('work_categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('status')->default(0)->comment('0:chưa hoàn thành, 1:hoàn thành');
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
        Schema::dropIfExists('work_dailys');
    }
}
