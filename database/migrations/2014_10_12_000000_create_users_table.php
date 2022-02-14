<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('account_id');

            $table->integer('role_id')->constrained('role');
            $table->integer('gender_id')->constrained('gender');

            $table->string('first_name', 25);
            $table->string('middle_name', 25)->nullable();
            $table->string('last_name', 25);
            
            $table->string('email',50)->unique();
            $table->string('password',50);

            $table->string('display_picture_link')->nullable();
            $table->integer('delete_flag')->nullable();
            $table->string('modified_by')->nullable();

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
};
