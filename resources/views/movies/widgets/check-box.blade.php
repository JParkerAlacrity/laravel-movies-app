
<div class="row">
    <div class="col-md-12">
        <form class="form-check" method="get" action="{{ route('search.store') }}">
            <input class="form-check-input" type="checkbox" value="{{ $movie->id }}" id={{"movie" . $movie->id}}>
            <label class="form-check-label col-md-12" for={{"movie" . $movie->id}}>

                @include('movies/widgets/mov-card')

            </label>
        </form>
    </div>
</div>