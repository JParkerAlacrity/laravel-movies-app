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

        @foreach($movies as $movie)

            @include('movies/widgets/check-box')
            
        @endforeach

    </div>

@endsection
