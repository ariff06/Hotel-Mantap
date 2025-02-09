<nav class="navbar navbar-expand-md navbar-dark bg-info shadow fixed-top">
    <div class="container">
        <a class="navbar-brand h1" href="{{ url('/') }}">
            <img src="images/logo.jpg" width="30" height="30" class="d-inline-block align-top img-circle" alt="Logo">
            Hotel Mantap
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#kamar') }}">Kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#fasilitas') }}">Fasilitas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>