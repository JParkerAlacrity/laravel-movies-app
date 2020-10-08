@extends('layouts/master')

@section('content')
 
	<div class="container">		
		<div class="row">
			<div class="card">
				<img src="//placehold.it/150" class="card-img-top col-md-3" alt="Picture of {{ $actor->actor }}">
				

				{{-- {{ $actor->pic }} --}}
			
				<div class="card-body col-md-9">

					<h2>
						{{ $actor->actor }}
					</h2>
					<h5>
						Number of movies: {{ $actor->movies->count() }} 
					</h5>
					<h5>
						Number of Awards: {{--{{ $actor->awards->count() }} --}}
					</h5>
					<h5>
						Related Achievements: 
						{{-- {{ $actor->achievements }} --}}
						@foreach($actor->achievements as $achievement)
							<a href="{{ $achievement->url() }}">
								{{ $achievement->achievement }} |
							</a>
                    	@endforeach
					</h5>
				</div>
			</div>
		</div>
		<div class="row"> 
			@foreach($actor->movies as $otherMovie)
				<div class="card col-md-2">
					<img src="//placehold.it/150" class="card-img" alt="...">
					<div class="card-body">	
						<a href="{{ $otherMovie->url() }}">
							{{ $otherMovie->title }}
						</a>
					</div>
				</div>
			@endforeach      
		</div>
	</div>
			
				
	
	</div>
@endsection