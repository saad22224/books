<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use   \App\Models\Subscription;
class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // You can use the SubscriptionFactory to create subscriptions
        Subscription::factory()
            ->count(20) // Adjust the number of subscriptions to create
            ->create();
        
      
    }
}
