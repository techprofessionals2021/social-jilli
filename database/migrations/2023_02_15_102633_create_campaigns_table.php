<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('traffic_quality')->nullable();
            $table->string('advertising_format')->nullable();
            $table->string('campaign_group')->nullable();
            $table->text('target_url')->nullable();
            $table->bigInteger('frequency_capping')->nullable()->comment('per day');
            $table->text('conversion_postback_url')->nullable();
            $table->string('style')->nullable();
            $table->string('template')->nullable();
            $table->timestamps();
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
