<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dicts', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('type', 40)->index('type')->comment('类型');
            $table->string('name', 40)->comment('名称');
            $table->string('code', 40)->comment('编码');
            $table->string('desc', 40)->comment('说明');
            $table->bigInteger('value')->index('value')->comment('值');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dicts');
    }
}
