<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            [
                "name" => "Cannelloni",
                "description" => "Nice Italian dish",
                "cook_time" => 40,
                "category_id" => 1
            ],
            [
                "name" => "Lasagne",
                "description" => "Nice Italian dish",
                "cook_time" => 80,
                "category_id" => 1
            ]
        ];

        DB::table('recipes')->insert($recipes);



    }
}
