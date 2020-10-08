
<div class="row">
    <div class="col-md-12">
        <input class="form-check-input" type="checkbox" @change="recordWatch({{ $movie->id }})" value="{{ $movie->id }}" id={{"movie" . $movie->id}}>
        <label class="form-check-label col-md-12" for={{"movie" . $movie->id}}>

            @include('movies/widgets/mov-card')

        </label>
    </div>
</div>