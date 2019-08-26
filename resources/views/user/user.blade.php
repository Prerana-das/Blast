@extends('layouts/master')
@section('title')
Home
@endsection
	
@section('content')


<!-- GALLERY START -->
	<div class="gallery-area">
		<div class="container">
			<div class="row">
				<!-- ITEM -->
				@foreach($table as $row)
				<div class="col-md-3">
					<div class="single-gallery">
						<img src="{{asset('public/uploads/'.$row->image)}}" alt="">
						<h3 class="gallery-title">{{$row->img_title}}</h3>
						<a href="#" class="img-link">google.com</a>
						<span class="img-pin"><i class="fas fa-bell"></i></span>
					</div>
				</div>
				@endforeach
			</div>
		</div>	
	</div>
<!-- GALLERY END -->





@endsection