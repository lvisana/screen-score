@extends('layouts.app')

@section('title')
    All Notes
@endsection

@section('content')

        <div class="container-xl">

            <section class="my-4" id="create-note">
                <a class="link-dark link-underline link-underline-opacity-0 bg-primary rounded-4 mb-2 p-4 shadow-sm d-flex align-items-center gap-2" href="@if (Auth::user()) {{route('note.create')}} @else {{route('login')}} @endif">
                    <i class="fa-solid fa-plus icon-md"></i>
                    <h1 class="secondary-font fw-semibold fs-6 m-0">New note</h1>
                </a>
            </section>

            <section id="note-list">
                <div class="bg-primary w-100 shadow-sm py-3 rounded-3">
                    <div class="px-4">
                        <h2 class="fw-bold secondary-font fs-4 py-2">All Notes</h2>
                    </div>
                    <hr class="w-100">
                    <div class="container px-4 pb-4">
                        @if (count($notes) >= 1)
                            <div class="row gy-4 gx-5 m-0" id="note-list">
                                @foreach ($notes as $note)
                                    @include('note.post')
                                @endforeach
                            </div>
                        @else

                        <div>
                            <p class="text-center fs-5 text-secondary">No notes yet.</p>
                        </div>

                        @endif
                    </div>
                    
                    @include('note.single-post')
            
                </div>
            </section>

            <div>
                <div class="clearfix"></div>
                {{$notes->links()}}
            </div>

        </div>
@endsection