<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">

    <div class="container-fluid">

        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
            Inventory Management
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item me-3">

                    <span class="text-white">

                        {{ Auth::user()->name }}

                    </span>

                </li>

                <li class="nav-item">

                    <form
                        action="{{ route('logout') }}"
                        method="POST">

                        @csrf

                        <button
                            class="btn btn-danger btn-sm">

                            Logout

                        </button>

                    </form>

                </li>

            </ul>

        </div>

    </div>

</nav>