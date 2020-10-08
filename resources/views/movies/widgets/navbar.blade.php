<nav class="navbar navbar-expand-lg navbar-custom">
    <a class="navbar-brand" href="#">PROJECT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i>    {{Auth::user()->name}}
            </button>
            <div class="dropdown-menu dropdown-menu-right " aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('achievements.index') }}">Achievements</a>
                <a class="dropdown-item" href="{{ route('search') }}">Update watched</a>
                <button class="dropdown-item" method="POST" action="{{ route('logout') }}">Log-out</button>
            </div>
        </div>
    </div>
</nav>