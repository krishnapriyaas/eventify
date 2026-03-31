<?php

namespace App\Jobs;

use App\Models\Portfolio;
use App\Models\SavingsPlan;
use App\Services\PriceService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessSavingsPlanJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public int $planId)
    {
    }

    public function handle(PriceService $priceService): void
    {
        $plan = SavingsPlan::findOrFail($this->planId);
        $price = $priceService->getCurrentPrice($plan->metal_type, $plan->currency);
        $weight = round($plan->monthly_amount / $price, 4);

        $portfolio = Portfolio::firstOrCreate(
            [
                'user_id' => $plan->user_id,
                'metal_type' => $plan->metal_type,
            ],
            [
                'total_invested' => 0,
                'total_weight' => 0,
            ]
        );

        $portfolio->increment('total_invested', $plan->monthly_amount);
        $portfolio->increment('total_weight', $weight);
    }
}