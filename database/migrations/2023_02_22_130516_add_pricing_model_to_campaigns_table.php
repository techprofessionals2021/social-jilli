<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPricingModelToCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->text('pricing_model')->nullable()->after('template');
            $table->text('btn_title')->nullable()->after('pricing_model');
            $table->longText('btn_description')->nullable()->after('btn_title');
            $table->string('country')->nullable()->after('btn_description');
            $table->integer('city')->nullable()->after('country');
            $table->integer('device')->nullable()->after('city');
            $table->integer('os')->nullable()->after('device');
            $table->integer('os_version')->nullable()->after('os');
            $table->integer('browser')->nullable()->after('os_version');
            $table->string('browser_language')->nullable()->after('browser');
            $table->integer('connection_type')->nullable()->after('browser_language');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campaigns', function (Blueprint $table) {
            //
        });
    }
}
