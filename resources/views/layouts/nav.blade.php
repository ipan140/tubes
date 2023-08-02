<nav class="navbar navbar-expand-lg bg-body-tertiary" >
    <div class="container">
        <a class="navbar-brand" href="#">Zsnack</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <a id="navbarDropdown" class="nav-link active dropdown-toggle"href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="bi bi-file-person-fill"></i> Profile
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto active"><i
                            class="bi bi-person-circle"></i> {{ Auth::user()->name }}</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        <i class="bi bi-lock"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
