<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class blogseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {

            Blog::create([
                'title' => fake()->jobtitle(),
                'content' => fake()->paragraph(3),
                'is_admin' => fake()->randomElement(['1', '0']),
                'is_plan_owner' => fake()->randomElement(['1', '0']),
                'plan' => fake()->randomElement(['premium', 'free', 'student']),
            ]);
        }
    }
}
