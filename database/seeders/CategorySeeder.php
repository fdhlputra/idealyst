<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'description' => 'Ide startup berbasis teknologi',
                'icon' => 'laptop',
                'color' => '#3B82F6',
            ],
            [
                'name' => 'Education',
                'slug' => 'education',
                'description' => 'Ide startup di bidang pendidikan',
                'icon' => 'book',
                'color' => '#10B981',
            ],
            [
                'name' => 'Health',
                'slug' => 'health',
                'description' => 'Ide startup di bidang kesehatan',
                'icon' => 'heart',
                'color' => '#EF4444',
            ],
            [
                'name' => 'E-commerce',
                'slug' => 'e-commerce',
                'description' => 'Ide startup e-commerce dan marketplace',
                'icon' => 'shopping-cart',
                'color' => '#F59E0B',
            ],
            [
                'name' => 'Finance',
                'slug' => 'finance',
                'description' => 'Ide startup fintech dan keuangan',
                'icon' => 'dollar-sign',
                'color' => '#8B5CF6',
            ],
            [
                'name' => 'Social Impact',
                'slug' => 'social-impact',
                'description' => 'Ide startup dengan dampak sosial',
                'icon' => 'users',
                'color' => '#06B6D4',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
