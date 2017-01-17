<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('payment_mode');
            $table->integer('default_card')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('picture')->nullable();
            $table->string('device_token')->nullable();
            $table->enum('device_type',array('android','ios'));
            $table->enum('login_by',array('manual','facebook','google'));
            $table->string('social_unique_id')->nullable();
            $table->enum('gender',array('male','female','others'));
            $table->string('mobile')->nullable();
            $table->double('latitude', 15, 8)->nullable();
            $table->double('longitude',15,8)->nullable();
            $table->string('paypal_email')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
            $table->string('country')->nullable();
            $table->float('wallet_balance')->default(0);
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
