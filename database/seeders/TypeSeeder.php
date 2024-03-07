<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Helpers
use Illuminate\Support\Str;

//Models
use App\Models\Type;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::truncate();

        for ($i = 0; $i < 10; $i++) {
            $project = new Type();
            $Type_name = fake()->name();
            $slug = Str::slug($Type_name);
        }
    }
}
