<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SavingsPlanTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_savings_plan(): void
    {
        $response = $this->postJson('/api/savings-plans', [
            'user_id' => 1,
            'metal_type' => 'gold',
            'monthly_amount' => 100,
            'currency' => 'EUR',
            'execution_day' => 5,
        ]);

        $response->assertStatus(201)
            ->assertJsonPath('data.metal_type', 'gold');
    }
}