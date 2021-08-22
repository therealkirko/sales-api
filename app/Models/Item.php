<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Item extends Model
{
    use Uuid, HasFactory;

    protected $guarder = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
