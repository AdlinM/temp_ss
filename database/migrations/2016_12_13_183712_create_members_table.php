<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('members', function (Blueprint $table) {
          $table->increments('id');
          $table->string('firstName', 100);
          $table->string('nim', 9);
          $table->string('lastName', 100)->nullable();
          $table->string('email', 100)->unique();
          $table->string('bio')->nullable();
          $table->string('jurusan', 255);
          $table->text('address')->nullable();
          $table->date('DOB')->nullable();
          $table->string('POB')->nullable();
          $table->string('phone');
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
        Schema::dropIfExists('members');
    }
}
