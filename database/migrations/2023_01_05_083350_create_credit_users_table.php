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
        Schema::create('credit_users', function (Blueprint $table) {
            $table->uuid("id")->primary()->index();
            $table->foreignUuid("user_id")->constrained();
            $table->string("reason")->nullable();
            $table->decimal("income_range", 22, 4)->default(0);
            $table->string("electricity_receipt")->default(0);
            $table->string("water_bill")->nullable();
            $table->string("dreams")->nullable();
            $table->softDeletes();
            $table->timestamp("created_at");
            $table->timestamp("updated_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_users');
    }
};
