<?php

namespace Database\Seeders;

use App\Models\StaffFaqCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffFaqCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'General',
            'Technical',
            'Human Resources'
        ];

        foreach ($categories as $category) {
            StaffFaqCategory::create(['name' => $category]);
        }
    }
}
