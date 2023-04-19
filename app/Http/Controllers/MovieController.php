<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Movie;

class MovieController extends Controller
{
    public function sync($lot)
    {
        // $poster_path = 'http://image.tmdb.org/t/p/w500/your_poster_path';
        $api_key = 'be5fbc890d6dde31ba77480f1e1b9b52';
        $total_pages = $lot / 20;

        for ($i = 0; $i <= $total_pages; $i++) {

            $movie_response = Http::get('https://api.themoviedb.org/3/trending/movie/week?api_key='.$api_key.'&page='.$i);
            if ($movie_response->ok()) {

                $movies = json_decode($movie_response->body())->results;

                foreach($movies as $movie) {
                    $id = $movie->id;
                    $poster = $movie->poster_path;
                    $title = $movie->title;
                    $review_ids = [];

                    if ($movie->genre_ids) {
                        $genre_ids = $movie->genre_ids;
                    }

                    $reviews_response = Http::get('https://api.themoviedb.org/3/movie/'.$id.'/reviews?api_key='.$api_key);
                    if ($reviews_response->ok()) {
                        $reviews = json_decode($reviews_response->body())->results;

                        foreach ($reviews as $review) {
                            array_push($review_ids, $review->id);
                        }
                    }

                    $movie = new Movie();
                    $movie->id = $id;
                    $movie->title = $title;
                    $movie->poster = $poster;
                    $movie->review_ids = $review_ids;
                    $movie->genre_ids = $genre_ids;

                    $movie->save();

                    return true;
                }
            } else {
                return false;
            }
        } 

    }
}
