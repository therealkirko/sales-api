<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidChar;
use \Carbon\Carbon;

class Order extends Model
{
    use HasFactory, UuidChar;

    protected $guarded = [];

    protected $hidden = [
        'updated_at',
        'business_id'
    ];

    public function getCreatedAtAttribute($attr) {
        return Carbon::parse($attr)->format('Y-m-d'); //Change the format to whichever you desire
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
