@extends('layouts/master')

@section('content')

    <div class="container">

        {{-- @foreach($users as $user)
            {{$user->watches}}
        @endforeach --}}

        @foreach($actors as $actor)
            {{-- <a href="{{ $actor->url() }}">
                <p>
                    {{ $actor->actor }}
                </p>
            </a> --}}

            @include('movies/widgets/actor-card')
        @endforeach

        <div id="movies-list">
            @foreach($movies as $movie)

                @include('movies/widgets/check-box')
                
            @endforeach
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        let csrfToken = '{{ csrf_token() }}';
        new Vue({
            el: '#movies-list',
            methods: {
                recordWatch: function (movieId) {
                
                    axios.post('/watches/store', {
                        _token: csrfToken,
                        movie_id: movieId
                    }).then(function(response) {
                        alert('Done!');
                    });
                }
            }
        });
    </script>

@endsection
