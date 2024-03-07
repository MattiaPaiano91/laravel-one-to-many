<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Helpers
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;

//Models
use App\Models\Type;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            
        for ($i = 0; $i < 10; $i++) {
            $type = new Type();
            $type->name = fake()->word();
            $slug = Str::slug($type->name);
            $type->slug = $slug;
            $type->save();
        }
    }
}
        

