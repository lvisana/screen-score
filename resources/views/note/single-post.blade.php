<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalLabel"></h1>

            <button type="button" class="bg-transparent border-0" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" class="">
                <i class="fa-solid fa-ellipsis-vertical icon-md"></i>
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