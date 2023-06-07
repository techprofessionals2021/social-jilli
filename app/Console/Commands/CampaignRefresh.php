<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\CallRouteJob;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use App\Helpers\Helpers;
use App\Models\Campaign;
use App\Http\Requests\campaign\CreateCampaignApiRequest;

class CampaignRefresh extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:Refreshcampaign';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh Campaign based on minutes';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */

     

    public function handle()
    {
      
            $UpdateCampaignStatus = Campaign::get();
            foreach ($UpdateCampaignStatus as $key => $value) {
               $findCampaign = Campaign::findorFail($value->id);

                if (isset($findCampaign)) {
    
                    if ($findCampaign->daily_click_limit > $findCampaign->total_click_limit ) {
                        $findCampaign->status_id = 11;
                        $findCampaign->save();
                    }
    
                    if ($findCampaign->daily_budget_limit > $findCampaign->total_budget_limit ) {
                        $findCampaign->status_id = 10;
                        $findCampaign->save();
                    }
    
                
                }
          
            }
 
            // Set the initial offset to 0
            $offset = 0;
    
            // Set the batch size to 50
            $batchSize = 10;
    
            // Get the total number of records from the API response
    //        $initCampaigns  = Helpers::hitEvadavApi('advertiser/campaigns/list'); // todo we will open it up once we are live
    //        $campaignsCount = $initCampaigns['data']['total']; // todo we will open it up once we are live
            $campaignsCount = 30;
    
            // Loop through the API data in batches of 50 until we reach the end
            while ($offset < $campaignsCount) {
                // Get the next batch of records from the API
                $apiBatch  = Helpers::hitEvadavApi('advertiser/campaigns/list?limit='.$batchSize.'&offset='.$offset.'&extended=true')['data']['campaigns']; // use your own method to get API data with offset and limit
    
                foreach ($apiBatch as $record) {
                    $getCampaign = Helpers::hitEvadavApi('advertiser/campaigns/get?id='.$record['id'])['data']['campaign'];
                  
                    // Use the 'id' field to try and find an existing record in the database
                    $existingRecord = Campaign::where('camp_id', $record['id'])->first();
    
                    // dd($existingRecord);
    
                    if ($existingRecord) {
                        continue;
    //                    dd($existingRecord);
    
                        // Update the existing record with the new values
    //                    $existingRecord->update($record);
                    } else {
                        $creatCampagin = new CreateCampaignApiRequest();
                        $creatCampagin->handle($record);
                    }
                }
                // Increment the offset by the batch size to get the next batch of records
                $offset += $batchSize;
            }
    
            // return redirect()->route('campaign.index')->with('success', __('custom.refresh_successfully'));
    
    }
}

// 