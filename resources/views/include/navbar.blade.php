<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
    <li class="nav-item dropdown">
        @if (Auth::check())
            @php
                $user = Auth::user();
            @endphp
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="{{ asset('storage/' . $user->profile_image) }}" alt="User Image" width="20px" height="20px">
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('admin.profile') }}">Profile</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('landing') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('landing') }}" method="POST" style="display: none;">
                        @csrf
                        @method('POST')
                    </form>
                </li>
            </ul>
        @endif
    </li>
</ul>
