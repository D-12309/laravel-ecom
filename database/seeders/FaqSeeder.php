<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
            'question' => 'Use service data to identify your most common questions.',
            'answer' => 'Your FAQ page should address the most common questions customers have about your products, services, and brand as a whole. The best way to identify those questions is to tap into your customer service data and see which problems customers are consistently reaching out to you with.'
        ]);
    }
}
