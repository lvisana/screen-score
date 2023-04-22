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

            <div class='offcanvas-body p-lg-0'>
              <ul class='navbar-nav align-items-center gap-2'>

                <li class='nav-item text-uppercase fw-semibold'>
                  <a class='nav-link py-0 text-light' aria-current='page' href='{{route('dashboard')}}'>Home</a>
                </li>

                @if (Auth::user())

                  <li class='nav-item text-uppercase text-light fw-semibold'>
                    <a class='nav-link py-0 text-light' aria-current='page' href='{{route('note.create')}}'>New note</a>
                  </li>

                  <hr class="d-lg-none w-100 border-light border-3">

                  <li class='nav-item d-lg-none'>
                    <form action="{{route('logout')}}" class="m-0">
                        @csrf
                        <button class="bg-transparent text-light text-uppercase fw-semibold border-0" type="submit">Log out</button>
                    </form>
                  </li>

                  <div class="nav-item px-3 dropdown d-none d-lg-block">
                    <button class="btn accent-secondary text-light fw-semibold fs-7 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{Auth::user()->name}} @isset (Auth::user()->surname) {{Auth::user()->surname}} @endisset
                    </button>

                    <ul class="dropdown-menu">
                      <li>
                        <form action="{{route('logout')}}" class="m-0">
                            @csrf
                            <button class="dropdown-item bg-transparent fw-semibold border-0" type="submit">Log out</button>
                        </form>
                      </li>

                    </ul>
                  </div>

                @else

                <li class='nav-item text-uppercase text-light fw-semibold'>
                  <a class='nav-link py-0 text-light' aria-current='page' href='{{route('register')}}'>Sign Up</a>
                </li>


                <li class='nav-item text-uppercase text-light fw-semibold'>
                  <a class='nav-link py-0 text-light' aria-current='page' href='{{route('login')}}'>Sign In</a>
                </li>
                  
                @endif

                
              </ul>

            </div>
          </div>

        </div>
      </nav>

</header>