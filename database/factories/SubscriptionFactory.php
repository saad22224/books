<?php

namespace Database\Factories;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Subscription;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'plan_id' => Plan::inRandomOrder()->first()?->id ?? Plan::factory(),
            'start_date' => now(),
            'end_date' => now()->addDays(30),
            'status' => 'active',
        ];
    }
}
