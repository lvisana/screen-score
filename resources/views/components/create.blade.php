<div id="create">
    <div class="bg-primary rounded-4 mb-2 p-4 shadow-sm d-flex align-items-center gap-2" data-bs-toggle="collapse" href="#collapseCreateNote" role="button" aria-expanded="false" aria-controls="collapseCreateNote">
        <i class="fa-solid fa-plus icon-md"></i>
        <h1 class="secondary-font fw-semibold fs-6 m-0">New note</h1>
    </div>
    
    <div class="collapse" id="collapseCreateNote">
        <div class="card card-body shadow-sm border-0 p-0">
            <form action="" method="POST" class="d-flex flex-column justify-content-stretch">
                @csrf
                <input type="text" name="title" placeholder="Title..." class="fw-semibold p-4 create-note-input fs-3 border-0 w-100">
                <hr class="w-100 m-0">
                <div class="p-4"><textarea name="description" id="description" rows="10" class="create-note-input border-0 w-100" placeholder="Description..."></textarea></div>
                <div class="d-flex align-items-center p-4 align-self-end gap-3">
                    <a class="fw-semibold text-secondary link-underline link-underline-opacity-0" data-bs-toggle="collapse" href="#collapseCreateNote" role="button" aria-expanded="false" aria-controls="collapseCreateNote">Cancel</a>
                    <input type="submit" class="accent-secondary btn text-light fw-semibold" value="Upload note">
                </div>
            </form>
        </div>
    </div>
</div>