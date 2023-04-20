<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Review;

class MovieController extends Controller
{
    private static $api_key = 'be5fbc890d6dde31ba77480f1e1b9b52';

    public static function syncMovies($lot)
    {
        // $poster_path = 'http://image.tmdb.org/t/p/w500/your_poster_path';

        if (Movie::count('id') >= 1) {

            return false;

        } else {

            $total_pages = $lot / 20;
    
            for ($i = 0; $i <= $total_pages; $i++) {
    
                $movie_response = Http::get('https://api.themoviedb.org/3/trending/movie/week?api_key='.self::$api_key.'&page='.$i);
                if ($movie_response->ok()) {
    
                    $movies = json_decode($movie_response->body())->results;
    
                    
                    foreach($movies as $movie) {

                        $genres = $movie->genre_ids;
                        $id = $movie->id;
                        $poster = $movie->poster_path;
                        $title = $movie->title;
                        
                        $movie = new Movie();
                        $movie->id = $id;
                        $movie->title = $title;
                        $movie->poster = $poster;

                        
                        if ($genres) {
                            self::syncMovieGenres($id, $genres);
                        }
                        
                        $movie->save();
                    }
                }
            }
            
            if (Movie::count('id') >= 1) {
                return true;
            } else {
                return false;
            }

        } 

    }

    public static function syncMovieGenres($movieId, $movieGenres)
    {
        if (Genre::count('id') >= 1) {
            $genres = Genre::get('id');
            
            foreach($genres as $genre) {
                
                foreach($movieGenres as $movieGenre) {
                    if ($movieGenre == $genre->id) {
                        
                        DB::table('movie_genre')->insert([
                            'movie_id' => $movieId,
                            'genre_id' => $movieGenre,
                        ]);
                    }
                }
            }
        }
    }

    public static function syncGenres()
    {
        if (Genre::count('id') < 1) {
            $genres_response = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key='.self::$api_key);
            
            if ($genres_response->ok()) {

                $genres = json_decode($genres_response->body())->genres;

                foreach($genres as $genre) {
                    $id = $genre->id;
                    $name = $genre->name;

                    $genre = new Genre();
                    $genre->id = $id;
                    $genre->name = $name;

                    $genre->save();
                }

                if (Genre::count('id') >= 1) {
                    return true;
                } else {
                    return false;
                }

            }

        } else {
            return false;
        }

    }

    public static function syncReviews()
    {
        if (Movie::count('id') >= 1 && Review::count('id') < 1) {

            $movies = Movie::get('id');

            foreach($movies as $movie) {
                $movieId = $movie->id;

                $reviews_response = Http::get('https://api.themoviedb.org/3/movie/'.$movieId.'/reviews?api_key='.self::$api_key);
                if ($reviews_response->ok()) {

                    $reviews = json_decode($reviews_response->body());

                    foreach($reviews->results as $review) {

                        if ($review->author_details->rating) {
                            $id = $review->id;
                            $rating = $review->author_details->rating;
                            
                            $review = new Review();
                            $review->id = $id;
                            $review->rating = $rating;

                            self::syncMovieReviews($movieId, $id);
    
                            $review->save();
                        }
                    }
                }
            }

            if (Review::count('id') >= 1) {
                return true;
            } else {
                return false;
            }

        } else {
            return false;
        }
    }


    public static function syncMovieReviews($movieId, $id)
    {
        
        DB::table('movie_review')->insert([
            'movie_id' => $movieId,
            'review_id' => $id,
        ]);
    
    }
}