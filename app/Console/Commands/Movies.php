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
    protected $signature = 'movies {lot=100}';

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
            $syncGenres = MovieController::syncGenres();
            $syncMovies = MovieController::syncMovies($lot);
            $syncReviews = MovieController::syncReviews();

            if ($syncMovies || $syncGenres || $syncReviews) {
                $this->line('Data synchronized succesfully');
            } else {
                $this->line('An error occurred.');
            }

        } else {
            $this->error('"'.$lot.'" is not a number.');
        }
    }
}
