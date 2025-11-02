<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pizza;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Price extends Model
{
    
    protected $guarded = [];
    //muchos precios tienen una pizza
    public function pizza(): BelongsTo
    {
        return $this->belongsTo(Pizza::class);
    }


}
