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
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('phone_number_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birth_date')->nullable();
            $table->date('picture_url')->nullable();
            $table->boolean('banned')->default(false);
            $table->integer('number_of_bans')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreign('address_id')
                ->references('id')
                ->on('addresses')
                ->onDelete('cascade');
            $table->foreign('phone_number_id')
                ->references('id')
                ->on('phone_numbers')
                ->onDelete('cascade');
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
