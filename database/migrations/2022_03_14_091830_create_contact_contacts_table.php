<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_first_name', 191)->nullable();
            $table->string('contact_last_name', 191)->nullable();
            $table->string('contact_phone_1', 191)->nullable();
            $table->string('contact_phone_2', 191)->nullable();
            $table->string('contact_email', 191)->nullable();
            $table->string('contact_skype', 191)->nullable();
            $table->string('contact_address', 191)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('company_id')->nullable()->index('company_fk_6188671');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_contacts');
    }
}
