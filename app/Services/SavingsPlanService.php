<?php

namespace App\Services;

use App\Jobs\ProcessSavingsPlanJob;
use App\Models\SavingsPlan;

class SavingsPlanService
{
    public function createPlan(array $data): SavingsPlan
    {
        return SavingsPlan::create([
            'user_id' => $data['user_id'],
            'metal_type' => $data['metal_type'],
            'monthly_amount' => $data['monthly_amount'],
            'currency' => $data['currency'],
            'execution_day' => $data['execution_day'],
            'status' => 'active',
        ]);
    }

    public function dispatchExecution(int $planId): void
    {
        ProcessSavingsPlanJob::dispatch($planId);
    }
}