<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSavingsPlanRequest;
use App\Models\SavingsPlan;
use App\Services\SavingsPlanService;
use Illuminate\Http\JsonResponse;

class SavingsPlanController extends Controller
{
    public function __construct(private SavingsPlanService $service)
    {
    }

    public function store(StoreSavingsPlanRequest $request): JsonResponse
    {
        $plan = $this->service->createPlan($request->validated());

        return response()->json([
            'message' => 'Savings plan created successfully.',
            'data' => $plan,
        ], 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json([
            'data' => SavingsPlan::findOrFail($id),
        ]);
    }

    public function execute(int $id): JsonResponse
    {
        $this->service->dispatchExecution($id);

        return response()->json([
            'message' => 'Execution queued successfully.',
        ]);
    }
}