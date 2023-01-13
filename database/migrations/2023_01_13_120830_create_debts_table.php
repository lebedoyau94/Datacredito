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
        Schema::create('debts', function (Blueprint $table) {
            $table->uuid("id")->primary()->index();
            $table->foreignUuid("user_id")->constrained();
            $table->string("bank")->nullable();
            $table->string("type_credit")->nullable();
            $table->string("past_due")->nullable();
            $table->decimal("amount",22,4)->default(0);
            $table->string("product_number")->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('debts');
    }
};
