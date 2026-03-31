<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

class PriceService
{
    public function getCurrentPrice(string $metalType, string $currency): float
    {
        $cacheKey = "metal_price_{$metalType}_{$currency}";

        return Cache::remember($cacheKey, now()->addMinutes(1), function () use ($metalType) {
            return match ($metalType) {
                'gold' => 62.50,
                'silver' => 0.78,
                'platinum' => 31.25,
                default => 50.00,
            };
        });
    }
}