<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'name' => 'Free Plan',
            'description' => '3 books/month, 6,000 words limit
            Basic editor with auto-correction
            Export per book in watermarked PDF
            No grammar correction or copyright fix
            No one-click features
',
            'price' => 0.00,
            'status' => 'active',
        ]);
        Plan::create([
            'name' => 'Basic Plan',
            'description' => '10 books/month, unlimited words
             Full text editor
             Limited grammar correction (5 checks per month)
             5 copyright fixes per month (for books)
             Export per book in PDF & Word
             AI Humanizer (Limited uses)
             Auto-correction included
             One-click grammar correction
             One-click copyright fix
           ✨   Ideal for active writers!

',
            'price' => 21,
            'status' => 'active',
        ]);
        Plan::create([
            'name' => 'Pro Plan ',
            'description' => '5 books/month, unlimited words
AI-assisted writing
Unlimited grammar correction
Unlimited copyright fixes
AI Humanizer included
Export per book in PDF & Word
Cloud storage
Priority customer support
One-click humanizer
✨ For professionals creating at scale!


',
            'price' => 41,
            'status' => 'active',
        ]);
        Plan::create([
            'name' => '🔥 Lifetime Plan ',
            'description' => 'Unlimited books & words
Plagiarism checker
Advanced AI Humanizer
Export per book in PDF & Word
Unlimited cloud storage
Exclusive VIP support
For the first 100 users only!
One-click everything
✨ Lifetime access, no recurring fees!

Start writing your dream book today! 🚀
Sign Up Now!

',
            'price' => 299,
            'status' => 'active',
        ]);
    }
}
