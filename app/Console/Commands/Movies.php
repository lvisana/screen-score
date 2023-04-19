<?php

namespace App\Console\Commands;
use App\Http\Controllers\MovieController;
use Illuminate\Console\Command;

class Movies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'movies {lot?} {--lot=100}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets list of trending movies of the week from The Movie Database API';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $lot = $this->argument('lot');

        if ((int)$lot) {
            $sync = MovieController::sync($lot);

            if ($sync) {
                $this->line($lot.' Movies synchronized in database.');
            } else {
                $this->line('An error occurred');
            }

        } else {
            $this->error($lot.' is not a number.');
        }
    }
}
