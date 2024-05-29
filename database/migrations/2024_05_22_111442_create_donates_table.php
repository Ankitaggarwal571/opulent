<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->string('organization_cat',255)->nullable();
            $table->string('donator_id',255)->nullable();
            $table->string('organization_name',255)->nullable();
            $table->string('fname',255)->nullable();
            $table->string('lname',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('phone',255)->nullable();
            $table->string('city',255)->nullable();
            $table->string('state',255)->nullable();
            $table->string('zip',255)->nullable();
            $table->string('country',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('amount',255)->nullable();
            $table->string('payment_method',255)->nullable();
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
        Schema::dropIfExists('donates');
    }
}
