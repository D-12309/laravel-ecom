<?php

namespace App\Console\Commands;

use App\Models\Admin;
use App\Models\Faq;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class TestFunction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:function';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Faq::create([
            'question' => 'Use service data to identify your most common questions.',
            'answer' => 'Your FAQ page should address the most common questions customers have about your products, services, and brand as a whole. The best way to identify those questions is to tap into your customer service data and see which problems customers are consistently reaching out to you with.'
        ]);
       /* $admin = new Admin();
        $admin->email = "admin@gmail.com";
        $admin->name = "admin";
        $admin->password = Hash::make('admin@123');
        $admin->type = 1;
        $admin->save();*/
    }
}
