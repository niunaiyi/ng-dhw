<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 60);
            $table->unsignedInteger('_lft')->default('0');
            $table->unsignedInteger('_rgt')->default('0');
            $table->bigInteger('type_value')->nullable()->default(101007);
            $table->string('fullname')->nullable()->index('addresses_fullname');
            $table->json('position')->nullable()->comment('经纬度');
            $table->unsignedInteger('parent_id')->nullable()->index();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();

            $table->index(['_lft', '_rgt', 'parent_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
