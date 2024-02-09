<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon', 'title', 'price',
    ];

    public function priceService(): HasMany
    {
        return $this->hasMany(PricingService::class);
    }
}
