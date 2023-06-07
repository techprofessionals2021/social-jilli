<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColAudienceTypeAudiences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('my_campaigns', function (Blueprint $table) {
            //  $table->unsignedBigInteger('status_id')->nullable()->after('name');

            $table->longText('audience_type')->nullable()->after('daily_click_limit');
            $table->longText('audience')->nullable()->after('daily_click_limit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('my_campaigns', function (Blueprint $table) {
            //
        });
    }
}
