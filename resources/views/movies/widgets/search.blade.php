<div class="row">
    <div class="col-10 offset-1">
        <p>
            Here you can add films or TV shows you have already watched to update you achievements. Use the search bar to start looking!
        </p>
    </div>
    <div class="col-10 offset-1">
        <form class="form" action='{{ route('search') }}'>
            <input  name = "search" class="form-control" type="text" placeholder="Search for a key word" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</div>