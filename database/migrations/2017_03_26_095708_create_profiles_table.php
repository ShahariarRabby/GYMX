<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');

            $table->string('role')->default('User');
            $table->integer('photo_id')->nullable();
            $table->integer('package_id')->nullable();
            $table->integer('payment_id')->nullable();
            $table->integer('reputation_id')->nullable();
            $table->integer('recharge_id')->nullable();
            $table->string('gender')->default('none');
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}

