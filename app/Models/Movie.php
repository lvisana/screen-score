<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movies';

    public function note()
    {
        return $this->hasMany('App\Models\Note');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function movieGenres($id)
    {
        return DB::table('movie_genre')
                    ->join('movies', 'movies.id', '=', 'movie_genre.movie_id')
                    ->join('genres', 'genres.id', '=', 'movie_genre.genre_id')
                    ->where('movie_genre.movie_id', '=', $id)
                    ->select('genres.*')
                    ->get();
    }

    public function movieReviews($id)
    {
        return DB::table('movie_review')
                    ->join('reviews', 'reviews.id', '=', 'movie_review.review_id')
                    ->join('movies', 'movies.id', '=', 'movie_review.movie_id')
                    ->where('movie_review.movie_id', '=', $id)
                    ->select('reviews.*')
                    ->get();
    }
}
