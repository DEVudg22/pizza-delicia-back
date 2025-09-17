<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Price;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pizza extends Model
{
   

    protected $guarded = [];

    public function prices(): HasMany
    {
        return $this->hasMany(Price::class);
    }
}
