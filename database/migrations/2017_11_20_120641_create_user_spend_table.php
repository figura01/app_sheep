<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSpendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_spend', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('spend_id')->nullable();
            $table->decimal('price', 7, 2);

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('spend_id')->references('id')->on('spends')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_spend');
    }
}
