<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header px-4">
            <div>
                <h3 class="modal-title fs-5 note-title line-max fw-semibold text-secondary" id="modalLabel"><span class="text-dark" id="user"></span> | <span id="date" class="fs-6"></span></h3>
                <div class="fs-7 d-flex align-items-center gap-2">
                    <div class="d-flex align-items-center gap-1">
                        <i class="fa-solid fa-clapperboard icon-sm"></i>
                        <p class="m-0 note-title line-max" id="movie-title"></p>
                    </div>
                    <p class="text-secondary m-0 fst-italic" id="note-score">-<span></span></p>
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
                <div id="note-options">
                </div>
            </ul>    
            
        </div>
        <div class="modal-body row gx-lg-5 px-4">
            <div id="note-section" class="col-lg-6 col-12 pt-3">
                <h3 class="modal-title fs-5 fw-bold mb-3" id="note-title">Test</h3>
                <blockquote id="note-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, error et adipisci aperiam enim nam voluptatem veniam dolorum quia dolor cum incidunt, repellendus saepe dolores, nobis non earum cumque tempora quidem laborum repudiandae officia iste! Dolor blanditiis totam possimus illo asperiores aperiam dolores provident placeat quos. Commodi blanditiis facilis accusamus modi error quos repellendus odio amet eveniet. Quisquam, repudiandae neque atque hic a quos labore nisi illum commodi laudantium! Similique ducimus et deleniti. Similique est dolore, dignissimos magni optio fugiat velit totam modi quisquam consequatur molestias nihil officiis, saepe cupiditate autem dicta tempora consequuntur culpa eveniet in consectetur distinctio praesentium.</blockquote>
            </div>
            
            <div id="movie-section" class="col-lg-6 col-12">
                <div class="d-flex justify-content-between align-items-center text-secondary  fs-7">
                    <div style="display: none" class="mb-1 fw-semibold" id="movie-genres">Genre/s:
                        <ul class="d-inline list-inline fw-normal">
                        </ul>
                    </div>
                    <div style="display: none" id="movie-rating">
                        <p class="mb-1"><span class="fw-semibold">Rating: </span><span class="fw-normal" id="rating"></span>%</p>
                    </div>
                </div>
                
                <img id="movie-poster" src="" class="w-100 rounded">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>