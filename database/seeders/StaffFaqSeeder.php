<?php

namespace Database\Seeders;

use App\Models\StaffFaq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffFaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            [
                'category_id' => 1,
                'author' => 1,
                'question' => 'This is 1 question',
                'answer' => 'This is 1 answer'
            ],
            [
                'category_id' => 1,
                'author' => 1,
                'question' => 'This is 2 question',
                'answer' => 'This is 2 answer'
            ],
            [
                'category_id' => 2,
                'author' => 1,
                'question' => 'This is 3 question',
                'answer' => 'This is 3 answer'
            ],
            [
                'category_id' => 3,
                'author' => 1,
                'question' => 'This is 4 question',
                'answer' => 'This is 4 answer'
            ],
            // Add more FAQs here...
        ];

        foreach ($faqs as $faqData) {
            StaffFaq::create($faqData);
        }
    }
}
