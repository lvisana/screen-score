@extends('layouts.app')

@section('title')
    Your Notes
@endsection

@section('content')

    <main>
        <section class="my-4 container-xxl" id="create-note">
                @include('components.create')
        </section>
        
        <section class="container-xxl" id="note-list">

            <div class="bg-primary w-100 shadow-sm py-3 mb-5 rounded-3">

                <div class="px-4">
                    <h2 class="fw-bold secondary-font fs-4 py-2">My Notes</h2>
                </div>

                <hr class="w-100">

                <div class="container px-4">
                    <div class="row g-3 m-0">
                        @foreach ($notes as $item)
                            @include('components.post', ['title' => $item['title'], 'description' => $item['description'], 'date' => $item['date']])
                        @endforeach
                    </div>
                </div>

                <div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    </main>
@endsection