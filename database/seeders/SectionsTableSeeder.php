<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionsTableSeeder extends Seeder
{
    public function run(): void
    {
        $names = [
            '1A','1B','1C','1D',
            '2A','2B','2C','2D',
            '3A','3B','3C','3D',
            '4A','4B','4C','4D'
        ];

        foreach ($names as $name) {
            Section::updateOrCreate(
                ['name' => $name],
                ['name' => $name]
            );
        }
    }
}
