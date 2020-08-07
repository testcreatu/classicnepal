@extends('home-master')



@section('content')


<div class="container ma-t">
	<div class="single-product">
		<div class="xzoom-container">
			<div class="product-img">
				<img src="{{url('public/images/5.jpg')}}" class="xzoom img-fluid" xriginal="{{url('public/images/5.jpg')}}" alt="">
				<div class="xzoom-thumbs">
					<a href="{{url('public/images/5.jpg')}}">
						<img class="xzoom-gallery" src="{{url('public/images/5.jpg')}}" xpreview = "{{url('public/images/5.jpg')}}">
					</a>
				</div>
			</div>
		</div>

		<div class="description">
			<div class="title">
				<h4>title</h4>
			</div>
			<div class="content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="but-btn">
				<a href="#" class="btn btn-outline-dark">Buy Now</a>
			</div>
		</div>
	</div>
</div>



@endsection