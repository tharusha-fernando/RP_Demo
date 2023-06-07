<?php

namespace App\Console\Commands;

use App\Models\Books;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ResetBookViews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'books:reset-views';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset the views column of all books to 0.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //Books::query()->update(['views' => 0]);//sdsdsdsd//sdsdsddds
       // Log::info('All book views reset to 0');//sdsdsds//sdsddsd
        //$this->info('All book views reset to 0');//sdsdsd//sdsdsds
        //ssds
        //sdsdsd
        $book = Books::find(11);
    if ($book) {
        $book->views = 0;
        $book->save();
        $this->info("Book views reset successfully.");
    } else {
        $this->error("Book not found.");
    }

        //return Command::SUCCESS;
    }
}
