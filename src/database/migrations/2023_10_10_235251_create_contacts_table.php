<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first-name',255);
            $table->string('last-name',255);
            $table->string('gender_id')
            $table->string('email',255);
            $table->string('postcode',8);
            $table->string('address',255);
            $table->string('building_name',255)->nullable();
            $table->string('opinion',120);
            $table->timestamps('created_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
