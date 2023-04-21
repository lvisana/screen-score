<header>
    <nav class='navbar navbar-expand-lg navbar-light py-3 accent'>

        <div class='container-xl px-4'>
            <a class='navbar-brand text-white' href='{{route('dashboard')}}'>
                @include('components.logo')
            </a>

            <button class='btn navbar-toggler border-3 px-2' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvas' aria-controls='offcanvas'>
                <i class="fa-solid fa-bars icon-md"></i>
            </button>

          <div class='offcanvas align-items-lg-end offcanvas-start-lg accent' tabindex='-1' id='offcanvas' aria-labelledby='offcanvas'>
            
            <div class='offcanvas-header d-flex d-lg-none'>
              <a href='javascript:void(0)' data-bs-dismiss='offcanvas' aria-label='close'>
                <i class="fa-solid fa-xmark icon-md"></i>
              </a>
            </div>

            <div class='offcanvas-body text-uppercase fs-7 fw-semibold p-lg-0'>
              <ul class='navbar-nav align-items-center gap-2'>

                <li class='nav-item'>
                  <a class='nav-link py-0' aria-current='page' href='#'>Home</a>
                </li>

                <li class='nav-item'>
                  <a class='nav-link p-0' aria-current='page' href='#'>My profile</a>
                </li>

                <li class='nav-item'>
                  <a class='nav-link py-0' aria-current='page' href='#'>Settings</a>
                </li>

                <li class='nav-item'>
                    <form action="{{route('logout')}}" class="m-0">
                        @csrf
                        <button class="bg-transparent border-0 text-uppercase text-light fw-semibold" type="submit">Log out</button>
                    </form>
                </li>
              </ul>

            </div>
          </div>

        </div>
      </nav>

</header>