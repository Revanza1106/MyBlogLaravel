{{-- <div class="global">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/logo.jpg') }}" class="w-100" alt="logo" />
            </div>
        </div>
    </div> --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-green">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" ariel-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Community
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Instagram</a></li>
                        <li><a class="dropdown-item" href="#">Telegram</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>
