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
						<button type="button" class="btn btn-dark"  data-toggle="button"  value="{{ $movie->id }}" aria-pressed="false" autocomplete="off" @change="recordWatch({{ $movie->id }})">
							Add as watched!
						</button>		
					</div>
				</div>	
			</div>
		</div>
		<div class="row">
			
		</div>
	</div>

@endsection