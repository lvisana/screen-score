<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static $poster_path = 'http://image.tmdb.org/t/p/w500';

    public function dashboard($id = null)
    {
        
        if ($id) {
            $notes = Note::where('id', $id)->first();

            $movie = $notes->movie()->first();

            if (\Auth::user()) {
                $user_id = \Auth::user()->id;
            }

            if ($notes->created_at >= $notes->updated_at) {
                $date = $notes->created_at->diffForHumans(null, false, false, 1);
            } else {
                $date = $notes->updated_at->diffForHumans(null, false, false, 1);
            }

            return response()->json([
                'date' => $date,
                'user' => $notes->user()->first(),
                'auth' => $notes->user_id == isset($user_id) ?? '',
                'admin' => isset($user_id) && \Auth::user()->role == 1,
                'note' => $notes,
                'movie' => $movie,
                'genres' => $movie->movieGenres($movie->id)->all(),
                'reviews' => $movie->movieReviews($movie->id)->all(),
                'score' => $notes->score($notes->id)[0]->name,
            ]);

        } else {
            $notes = Note::orderByDesc('created_at')->paginate(8);

            return view('dashboard', [
                'notes' => $notes,
                'poster_path' => $this::$poster_path
            ]);
        }

    }
}
