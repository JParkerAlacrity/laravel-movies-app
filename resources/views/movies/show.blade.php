@extends('layouts/master')

@section('content')
 
	<div class="container">		
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<img src="{{ $movie->poster }}" class="card-img-top col-md-3" alt="Movie poster">

					<div class="card-body col-md-9">
						<h2>
							{{ $movie->title }}
						</h2>

						<h3>
							Cast
						</h3>
			
						@foreach($movie->actors as $actor)
							<a href="{{ $actor->url() }}">
								{{ $actor->actor }} |
							</a>
                    	@endforeach

						<p>
							{{$movie->overview}}
						</p>			
					</div>
				</div>	
			</div>
		</div>
			
				{{-- <h5>
					This actor has starred in {{ $actor->movies->count() }} movies
				</h5>


				@foreach($actor->movies as $otherMovie)
					<p>
						<a href="{{ $otherMovie->url() }}">
							{{ $otherMovie->title }}
						</a>
					</p>
				@endforeach

				<img src="{{ $actor->pic }}" alt="Picture of {{ $actor->actor }}"> --}}
	
	</div>
@endsection