<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    public function getPackageByID()
    {
        return $this->hasOne(Package::class,'id','package_id');
    }

    public function getStatus()
    {
        return $this->hasOne(Status::class,'id','status_id');
    }
}
