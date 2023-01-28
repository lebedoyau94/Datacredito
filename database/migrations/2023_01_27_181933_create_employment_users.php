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
        Schema::create('employment_users', function (Blueprint $table) {
            $table->uuid("id")->primary()->index();
            $table->foreignUuid("user_id")->constrained();
            $table->string("scholarship")->nullable();
            $table->string("profession")->nullable();
            $table->string("year_experincie")->nullable();
            $table->string("file")->nullable();
            $table->boolean("tyc")->default(false);
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
        Schema::dropIfExists('employment_users');
    }
};
