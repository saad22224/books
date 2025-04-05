<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'logo' => 'logos/1743890303.png',
            'retinalogo' => 'retinalogos/1743890303.png',
            'favicon' => 'null',

            // Font sizes
            'font_h1' => 36,
            'font_h2' => 30,
            'font_h3' => 24,
            'font_h4' => 20,
            'font_h5' => 18,
            'font_paragraph' => 16,

            // Colors
            'body' => '#ffffff',
            'heading' => '#17253f',
            'para' => '#949494',
            'button' => '#1876f1',

            // Title
            'title' => 'book',
        ]);
    }
}
