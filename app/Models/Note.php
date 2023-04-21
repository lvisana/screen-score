<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Note extends Model
{
    use HasFactory;

    protected $table = 'notes';

    public function movie()
    {
        return $this->belongsTo('App\Models\Movie', 'movie_id');

    }
    public function score($id)
    {
        return DB::table('notes')
                ->join('scores', 'scores.id', '=', 'notes.score_id')
                ->where('notes.id', '=', $id)
                ->select('scores.*')
                ->get();
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
