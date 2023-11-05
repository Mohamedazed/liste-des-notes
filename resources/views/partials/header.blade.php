<!-- resources/views/partials/header.blade.php -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light p-3 mb-2 bg-info text-white">
        <div class="container">
            <a class="navbar-brand" href="/home">
                <img src="{{ asset('images/25694.png') }}" width="30px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/notes">Resultat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <form class="form-inline d-flex">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark my-2 my-sm-0 " type="submit">Search</button>
              </form>
        </div>
    </nav>
</header>

