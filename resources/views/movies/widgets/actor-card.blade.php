{{-- <div class="card col base-card">

    <div class="col-md-4">

        <img src="https://picsum.photos/200" alt="Avatar">
        
    </div>

    <div class="card-body card-group-body">
        <h5 class="card-title"> {{ $actor->actor }} </h5>
        <p class="card-text"> Number of movies: {{ $actor->movies->count() }} </p>
    </div>
</div> --}}

<div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-3">
            <img src="//placehold.it/150" class="card-img" alt="...">
        </div>
        <div class="col-md-9">
            <div class="card-body">
                <label class="card-body" href="{{ $actor->url() }}">
                    <h5 class="card-title">
                        <a href="{{ $actor->url() }}">
                            {{ $actor->actor }}
                        </a>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Number of Films
                    </h6>
                    <p class="card-text">
                        Number of Movies??
                    </p>
                </label>
            </div>
        </div>
    </div>
</div>