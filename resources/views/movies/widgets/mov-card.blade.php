<div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-3">
            <img src="//placehold.it/150" class="card-img" alt="...">
        </div>
        <div class="col-md-9">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ $movie->url() }}">
                        {{ $movie->title }}
                    </a>
                </h5>
                <h6>
                    Starring:
                    {{-- rtrim($my_string, '|'); --}}
                    @foreach($movie->actors as $actor)
                        <a href="{{ $actor->url() }}">
                            {{ $actor->actor }} |
                        </a>
                    @endforeach
                </h6>
                <h6 class="card-subtitle mb-2 text-muted">
                     Genre: {{ $movie->genre }}
                </h6>
                <p class="card-text">
                    Overview: <br>
                    <small>
                        {{ $movie->overview }}
                    </small>
                </p>
            </div>
        </div>
    </div>
</div>