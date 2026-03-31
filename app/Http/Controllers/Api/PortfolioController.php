<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\JsonResponse;

class PortfolioController extends Controller
{
    public function show(int $userId): JsonResponse
    {
        $portfolio = Portfolio::where('user_id', $userId)->get();

        return response()->json([
            'data' => $portfolio,
        ]);
    }
}