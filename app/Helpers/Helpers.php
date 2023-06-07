<?php

namespace App\Helpers;

use App\Models\Status;
use App\Models\Support;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class Helpers
{
    public static function getStatusById($id) {
        $status = Status::where('id', $id)->first();
        if (isset($status)) {
            return $status->name;
        }
        return "-----";
    }

    public static function getUserById($id) {
        $user = User::where('id', $id)->first();
        if (isset($user->name)) {
            return $user;
        }
        return "-----";
    }

    public static function updateviewingStatus($id) {
        // 1 = viewed
        // 0 = unviewed
        $support = Support::find($id);

        if(auth()->user()->role == 1){
            $support->admin_viewed = 1;
        }else{
            $support->user_viewed = 1;
        }
        $support->save();

        return "-----";

    }
    public static function updateviewingStatusOnSendingMessage($id) {
        // 1 = viewed
        // 0 = unviewed
        $support = Support::find($id);

        if(auth()->user()->role == 1){
            $support->admin_viewed = 1;
            $support->user_viewed = 0;
        }else{
            $support->user_viewed = 1;
            $support->admin_viewed = 0;
        }
        $support->save();

        return "-----";

    }

    public static function hitEvadavApi($apiName) {

        $response = Http::withHeaders([
            'X-Api-Key' => config('services.evadav.api_key'),
        ])->get('https://evadavapi.com/api/v2.2/'.$apiName);

        return $response->json();
    }




}
