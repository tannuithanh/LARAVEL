<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('MSNV');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('department_id')->unsigned()->index()->nullable();
            $table->bigInteger('team_id')->unsigned()->index()->nullable();
            $table->bigInteger('position_id')->unsigned()->index()->nullable();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('position_id')->references('id')->on('positions');
            $table->integer('is_admin');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
