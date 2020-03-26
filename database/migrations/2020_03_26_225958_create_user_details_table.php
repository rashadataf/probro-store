<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('firstname')->nullable(false);
            $table->string('lastname')->nullable(false);
            $table->string('company')->nullable();
            $table->string('address1')->nullable(false);
            $table->string('address2')->nullable();
            $table->string('country')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('zip')->nullable(false);
            $table->string('phone')->nullable(false);
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
        Schema::dropIfExists('user_details');
    }
}
