<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTotalBudgetToCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->bigInteger('total_budget_limit')->nullable()->after('connection_type');
            $table->bigInteger('daily_budget_limit')->nullable()->after('total_budget_limit');
            $table->bigInteger('total_click_limit')->nullable()->after('daily_budget_limit');
            $table->bigInteger('daily_click_limit')->nullable()->after('total_click_limit');
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
