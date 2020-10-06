@extends('layouts/master')

@section('content')
    
    {{-- {{ $movies->links() }} --}}
    {{-- {{ $actors->links() }} --}}

    <div class="container">

        @include('movies/widgets/search')

        @foreach($movies as $movie)

            @include('movies/widgets/check-box')
            
        @endforeach

    </div>

@endsection
