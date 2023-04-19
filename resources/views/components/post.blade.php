<div class="col-12 col-12 col-md-6 col-xxl-3">
    <div type="button" class="card h-100 p-0 bg-secondary rounded-4 shadow-sm border-0">
            <div class="btn-group bg-transparent p-4 card-header d-flex align-items-center justify-content-end border-0">
                
                <button type="button" class="bg-transparent border-0" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" class="">
                    <i class="fa-solid fa-ellipsis icon-md"></i>
                </button>

                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                    <li><button class="dropdown-item d-flex align-items-center gap-2" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                        <i class="fa-solid fa-eye icon-xsm dropdown-icon"></i>
                        <p class="m-0">View</p>
                    </button></li>
                    <li><button class="dropdown-item d-flex align-items-center gap-2" type="button">
                        <i class="fa-solid fa-pencil icon-xsm dropdown-icon"></i>
                        <p class="m-0">Edit</p>
                    </button></li>
                    <li><button class="dropdown-item d-flex align-items-center gap-2" type="button">
                        <i class="fa-solid fa-trash icon-xsm dropdown-icon"></i>
                        <p class="m-0 text-danger">Delete</p>
                    </button></li>
                </ul>

            </div>

            <div class="h-100 d-flex flex-column justify-content-between">
                <div class="px-4 pb-3" id="card-body" data-bs-toggle="modal" data-bs-target="#modal-1">
                    <h3 class="secondary-font fs-5 mb-3">{{$title ?? $title}}</h3>
                    <p class="text-secondary">{{$description ?? $description}}</p>
                </div>
    
                <div class="mb-3 card-footer d-flex align-items-center justify-content-end gap-2 bg-transparent border-0">
                    <i class="fa-solid fa-calendar icon-sm"></i>
                    <p class="fw-semibold m-0 fs-7">{{$date ?? $date}}</p>
                </div>
            </div>
    </div>
</div>