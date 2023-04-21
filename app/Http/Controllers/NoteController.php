<?php

namespace App\Http\Controllers;
use App\Models\Note;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class NoteController extends Controller
{
    public static $poster_path = 'http://image.tmdb.org/t/p/w500/';

    public function create()
    {
        $scores = DB::table('scores')->get();
        $movies = Movie::select('id', 'title')->get();

        return view('note.create', [
            'scores' => $scores,
            'movies' => $movies,
        ]);
    }

    public function store(Request $request)
    {
        $user = \Auth::user();
        $title = $request->input('title');
        $content = $request->input('content');
        $movie_id = $request->input('movie');
        $score_id = $request->input('score');

        $request->validate([
            'title' => ['required', 'string', 'max:80'],
            'content' => ['required', 'string', 'max:550'],
            'movie' => ['required', 'integer'],
            'score' => ['required', 'integer'],
        ]);

        $note = new Note();
        $note->user_id = $user->id;
        $note->movie_id = $movie_id;
        $note->score_id = $score_id;
        $note->content = $content;
        $note->title = $title;

        $note->save();

        return Redirect::route('dashboard');
    }
}
