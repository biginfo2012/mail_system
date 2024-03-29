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
            $table->string('email')->unique();
            $table->string('unique_id',20)->unique();
            $table->string('password');
            $table->string('mobile',20)->nullable();
            $table->tinyInteger('gender')->default(0);
            $table->tinyInteger('marry')->default(0);
            $table->date('birth')->nullable();
            $table->string('height')->nullable();
            $table->string('region')->nullable();
            $table->integer('point')->default(0);
            $table->enum('role',['admin','user'])->default('user');
            $table->string('verification_code')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->mediumText('memo')->nullable();
            $table->integer('box_id')->nullable();
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
