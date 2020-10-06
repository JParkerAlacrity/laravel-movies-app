@extends('layouts/master')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-12" id="acc-ov-title">
                <h1> Achievement Overview</h1>
            </div>
        </div>

        <div class="row">
            @include('movies/widgets/6-col-ach-card')

            @include('movies/widgets/6-col-ach-card')
        </div>

        @include('movies/widgets/card-row')

        @include('movies/widgets/card-row')

    </div>

@endsection
