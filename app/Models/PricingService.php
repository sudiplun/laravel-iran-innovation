<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PricingService extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'service'];

    public function price(): BelongsTo
    {
        return $this->belongsTo(Pricing::class);
    }
}
