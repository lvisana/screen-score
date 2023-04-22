<div class="col-12 col-12 col-md-6 col-xl-4" id="card" data-id="{{$note->id}}">
    <div type="button" class="card h-100 px-4 py-0 bg-secondary rounded-4 shadow border-0">
            <div class="btn-group bg-transparent px-0 pb-0 pt-4 card-header d-flex align-items-center justify-content-between border-0">
                
                <div class="d-flex align-items-center gap-2 fs-7">
                    <div style="background-image: url({{$poster_path.$note->movie->poster}})" class="note-poster bg-img rounded"></div>
                    <div>
                        <p class="m-0 note-title line-max">{{$note->movie->title}}</p>
                        <span class="text-secondary fst-italic @if ($note->score($note->id)[0]->id == 1) text-danger @elseif ($note->score($note->id)[0]->id == 2) text-warning @elseif ($note->score($note->id)[0]->id == 3) text-success @endif">
                            -{{$note->score($note->id)[0]->name}}
                        </span>
                    </div>
                </div>

                <button type="button" class="bg-transparent p-0 border-0" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" class="">
                    <i class="fa-solid fa-ellipsis-vertical icon-md"></i>
                </button>

                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                    <li><button class="dropdown-item d-flex align-items-center gap-2" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                        <i class="fa-solid fa-eye icon-xsm dropdown-icon"></i>
                        <p class="m-0">View</p>
                    </button></li>
                @if (Auth::user())
                    @if ($note->user_id == Auth::user()->id || Auth::user()->role == 1)
                        <a class="link-dark link-underline link-underline-opacity-0 dropdown-item d-flex align-items-center gap-2" href="{{route('note.create', ['edit' => $note->id])}}">
                            <i class="fa-solid fa-pencil icon-xsm dropdown-icon"></i>
                            <p class="m-0">Edit</p>
                        </a>
                        <a class="link-danger link-underline link-underline-opacity-0 dropdown-item d-flex align-items-center gap-2" href="{{route('note.delete', ['id' => $note->id])}}">
                            <i class="fa-solid fa-trash icon-xsm dropdown-icon"></i>
                            <p class="m-0">Delete</p>
                        </a>
                        @endif
                    @endif
                </ul>

            </div>

            <div class="h-100 d-flex pt-4 flex-column justify-content-between">
                <div class="pb-3" id="card-body" data-bs-toggle="modal" data-bs-target="#modal">
                    <h3 class="secondary-font fw-bold fs-5 mb-3 note-title line-max">{{$note->title}}</h3>
                    <p class="text-secondary note-content line-max">{{$note->content}}</p>
                </div>
    
                <div class="mb-3 card-footer align-items-center row d-flex justify-content-between px-0 fs-7 bg-transparent border-0">
                    <div class="col-6 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-user icon-sm"></i>
                        <p class="m-0 note-title line-max">{{$note->user->name}}</p>
                    </div>

                    <div class="col-6 text-end">
                        <p class="m-0">@if($note->created_at >= $note->updated_at) {{$note->created_at->diffForHumans(null, false, false, 1)}} @else {{$note->updated_at->diffForHumans(null, false, false, 1)}} @endif</p>
                    </div>
                </div>
            </div>
    </div>
</div>