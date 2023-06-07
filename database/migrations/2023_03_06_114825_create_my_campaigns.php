<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyCampaigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_campaigns', function (Blueprint $table) {
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
            $table->text('pricing_model')->nullable();
            $table->text('btn_title')->nullable();
            $table->longText('btn_description')->nullable();

            $table->json('country')->nullable();
            $table->json('city')->nullable();
            $table->json('device')->nullable();
            $table->json('os')->nullable();
            $table->json('os_version')->nullable();
            $table->json('browser')->nullable();
            $table->json('browser_language')->nullable();
            $table->json('connection_type')->nullable();
            $table->bigInteger('total_budget_limit')->nullable();
            $table->bigInteger('daily_budget_limit')->nullable();
            $table->bigInteger('total_click_limit')->nullable();
            $table->bigInteger('daily_click_limit')->nullable();
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
        Schema::dropIfExists('my_campaigns');
    }
}
