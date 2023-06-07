<?php

namespace App\Jobs;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Bus\Dispatchable;


class CallRouteJob
{
    use Dispatchable;

    protected $route;

    public function __construct($route)
    {
        $this->route = $route;
    }

    public function handle()
    {
        Http::get($this->route);
    }
}