<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Pizza;
use App\Models\Price;
use Illuminate\Http\Resources\PriceResource;

class PizzaResource extends JsonResource
{
    
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'pizza' => $this->name,
            'description' => $this->description,
            'image' => $this->image_link,
            'prices' => $this->prices
            
        ];
    }
}
