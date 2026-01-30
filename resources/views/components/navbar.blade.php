<nav class="navbar navbar-expand-lg nav-custom">
  <div class="d-flex justify-content-between w-100">
    <div class="d-flex">
      <a class="navbar-brand ms-3" href=""><i class="fa-brands fa-facebook fa-2x logo"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex align-items-center" role="search">
        <!-- {{-- <button>
          <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
            <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button> --}} -->

        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
        <i class="fa-solid fa-magnifying-glass fa-1x" type="submit"></i>
      </form>
    </div>


    <div class="d-flex">
      <ul class="navbar-nav mb-0 ps-0 gap-3">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route("welcome")}}"><i class="fa-solid fa-house fa-2x nav-icon"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-brands fa-youtube fa-2x nav-icon"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-people-group fa-2x nav-icon"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-gamepad fa-2x nav-icon"></i></a>
        </li>
      </ul>
    </div>

    <div class="d-flex align-items-center gap-4">
      <button type="button" class="btn position-relative ring-bell">
        <i class="fa-solid fa-bell fa-lg"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
          99+
          <span class="visually-hidden">unread messages</span>
        </span>
      </button>

      <i class="fa-brands fa-facebook-messenger fa-lg"></i>
      <ul class="navbar-nav">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle link-img" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://picsum.photos/300/200" alt="" class="icon-right"> {{Auth::user()->name}}
            </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a href="{{route("profile_index")}}" class="d-flex align-items-center gap-2 text-decoration-none text-black"><img src="https://picsum.photos/300/200" alt="" class="icon-drop"> {{Auth::user()->name}}
            </a></li>
            <li><a class="dropdown-item" href="#">Impostazioni e privacy</a></li>
            <li><a class="dropdown-item" href="#">Assistenze e supporto</a></li>
            <li>
              <hr class="dropdown-divider">
            <li>
              <form action="{{route('logout')}}" method="POST" class="text-center">
                @csrf
                <button class="btn" type="submit"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle link-img" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://picsum.photos/300/200" alt="" class="icon-right"> Benvenut*
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <!-- <li><a href="" class="d-flex align-items-center gap-2 text-decoration-none text-black"><img src="https://picsum.photos/300/200" alt="" class="icon-drop"></a></li> -->
            <li><a class="dropdown-item" href="#">Impostazioni e privacy</a></li>
            <li><a class="dropdown-item" href="#">Assistenze e supporto</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati<i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>

          </ul>
        </li>
        @endauth
      </ul>
    </div>


  </div>
  </div>
</nav>