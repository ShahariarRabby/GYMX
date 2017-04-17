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
            $table->string('gender')->default('none');
            $table->string('bio')->default('none');
            $table->date('dob')->nullable();
            $table->string('bloodGroup')->nullable();;
            $table->string('phone')->nullable();;
            $table->string('facebook')->default('https://fb.com/');
            $table->decimal('height')->nullable();
            $table->decimal('weight')->nullable();
            $table->dateTime('discontinued')->nullable();
            $table->integer('package_id')->nullable()->default(1);
            $table->integer('recharge_id')->nullable();
            $table->integer('payment_id')->nullable();
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

