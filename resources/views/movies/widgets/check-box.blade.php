
<div class="row">
    <div class="col-md-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id={{"movie" . $movie->id}}>
            <label class="form-check-label col-md-12" for={{"movie" . $movie->id}}>

                @include('movies/widgets/mov-card')

            </label>
        </div>
    </div>
</div>