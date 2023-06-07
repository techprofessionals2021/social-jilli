<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use const Grpc\STATUS_ABORTED;

class Service extends Model
{
    use HasFactory,SoftDeletes;

    public function getStatus()
    {
        return $this->hasOne(Status::class,'id','status_id');
    }

    public function getAllPackages()
    {
        return $this->hasMany(Package::class,'service_id','id');
    }
}

