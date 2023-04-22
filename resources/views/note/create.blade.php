@extends('layouts.app')

@section('title')
    Create a note
@endsection

@section('content')
    <div class="container-xl">

        <div class=" my-4 bg-primary rounded-4 mb-2 p-4 shadow-sm d-flex align-items-center gap-2">
            <i class="fa-solid fa-star"></i>
            <h1 class="secondary-font fw-semibold fs-6 m-0">Score a movie</h1>
        </div>
        
        <div id="create">
            <div class="card card-body shadow-sm border-0 p-0">
                <div class="row">
                    <form action="@if(isset($note)) {{route('note.update')}} @else {{route('note.store')}} @endif" method="POST" class="d-flex flex-column justify-content-stretch">
                        @csrf
                        @if(isset($note)) <input type="hidden" name="id" value="{{$note->id}}"> @endif
                        <input type="text" name="title" maxlength="80" placeholder="Title..." class="fw-semibold p-4 create-note-input fs-3 border-0 w-100" @if (isset($note)) value="{{$note->title}}" @endif required>
                        <hr class="w-100 m-0">
                        <div id="screen-score">
                            <div class="p-4">
                                <textarea name="content" maxlength="550" id="content" rows="10" class="create-note-input border-0 w-100" placeholder="Review..." required>@if(isset($note)){{$note->content}}@endif</textarea>
                                <div class="my-4 d-flex align-items-center gap-3">
                                    <label class="fw-semibold text-secondary" for="movie">Movie:</label>
                                    <select class="form-select form-select-sm" name="movie" id="movie" required>
                                        @foreach ($movies as $movie)
                                            @if (isset($note) && $note->movie_id == $movie->id)
                                                <option value="{{$movie->id}}" selected>{{$movie->title}}</option>
                                            @elseif (isset($note) && $note->movie_id !== $movie->id)
                                                <option value="{{$movie->id}}">{{$movie->title}}</option>
                                            @else
                                                <option value="{{$movie->id}}">{{$movie->title}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <label class="fw-semibold text-secondary" for="score">Score:</label>
                                    <select class="form-select form-select-sm" name="score" id="score" required>
                                        @foreach ($scores as $score)
                                            @if (isset($note) && $note->score_id == $score->id)
                                                <option value="{{$score->id}}" selected>{{$score->name}}</option>
                                            @elseif (isset($note) && $note->score_id !== $score->id)
                                                <option value="{{$score->id}}">{{$score->name}}</option>
                                            @else
                                                <option value="{{$score->id}}">{{$score->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-4 align-self-end gap-3">
                            <input type="submit" class="accent-secondary btn text-light fw-semibold" value="@if(isset($note))Update @else Upload @endif note">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection