<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('o_name',255)->nullable();
            $table->string('organization_cat',255)->nullable();
            $table->string('o_mobile',255)->unique();
            $table->string('o_email',255)->unique();
            $table->string('auth_name',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('city',255)->nullable();
            $table->string('state',255)->nullable();
            $table->string('zip',255)->nullable();
            $table->string('auth_email',255)->nullable();
            $table->string('p_mobile',255)->nullable();
            $table->string('o_pan_no',255)->nullable();
            $table->string('gst_in',255)->nullable();
            $table->string('aadhar',255)->nullable();
            $table->string('pan_no',255)->nullable();
            $table->string('upload_o_pan',255)->nullable();
            $table->string('upload_gst_in',255)->nullable();
            $table->string('upload_Aadhar',255)->nullable();
            $table->string('upload_personal_pan',255)->nullable();
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
        Schema::dropIfExists('organizations');
    }
}
