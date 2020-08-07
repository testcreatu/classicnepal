@extends('home-master')



@section('content')
<div class="home">
	<div class="row p-0 m-0">
		<div class="col-md-6 p-0 m-0">
			<div id="carouselHome" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="carousel-item-img">
							<img src="{{url('public/images/3.jpg')}}" class="d-block w-100" alt="...">
						</div>
					</div>
					<div class="carousel-item">
						<div class="carousel-item-img">
							<img src="{{url('public/images/4.jpg')}}" class="d-block w-100" alt="...">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6  p-0 m-0">
			<div class="carousel-aside">
				<div class="title">
					<h2>Title goes here</h2>
				</div>
				<div class="row">
					<div class=" col-md-10">
						<div class="content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>
				<div class="shop-now">
					<a href="#" class="btn btn-outline-light">Shop Now</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container ma-t">
		<div class="catagory">
			<div class="title text-center">
				<h2>Catagory</h2>
			</div>
			<div class="owl-carousel owl-theme owl-catagory mt-4">
				<div class="item">
					<a href="{{url('single-product')}}" class="product-list">
						<div class="product-list-img">
							<img src="{{url('public/images/5.jpg')}}" class="img-fluid" alt="">
						</div>
						<span class="badage">Sale</span>
						<div class="product-title">
							<h6>FOLDABLE WATER BOTTLE - 300 ML</h6>
						</div>
						<div class="product-price">
							<span>Rs 399/-</span>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="{{url('single-product')}}" class="product-list">
						<div class="product-list-img">
							<img src="{{url('public/images/6.jpg')}}" class="img-fluid" alt="">
						</div>
						<span class="badage">Sale</span>
						<div class="product-title">
							<h6>INSULATED WATER BOTTLE - 360 ML</h6>
						</div>
						<div class="product-price">
							<span>Rs 799/-</span>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="{{url('single-product')}}" class="product-list">
						<div class="product-list-img">
							<img src="{{url('public/images/7.jpg')}}" class="img-fluid" alt="">
						</div>
						<span class="badage">Sale</span>
						<div class="product-title">
							<h6>FLIP COVER WATER BOTTLE-500ML</h6>
						</div>
						<div class="product-price">
							<span>Rs 500/-</span>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="{{url('single-product')}}" class="product-list">
						<div class="product-list-img">
							<img src="{{url('public/images/8.jpg')}}" class="img-fluid" alt="">
						</div>
						<span class="badage">Sale</span>
						<div class="product-title">
							<h6>PLASTIC FLIP FLOP WATER BOTTLE FOR KIDS - 300 ML</h6>
						</div>
						<div class="product-price">
							<span>Rs 399/-</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid home-shop-bg ma-t">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="home-shop-content">
					<div class="title">
						<h2>sometimes its not about the price</h2>
					</div>
					<div class="content">
						<p></p>
						<p>We are re-launching our brand, Classic Selections, that was initially established in 1996. Set off as a gift shop based in Butwal, we are back with a wider horizon and bigger vision. Carrying forward the legacy that our father had set on more than...
						</p>
					</div>
					<div class="text-center">
						<div class="btn">
							<a href="#" class="btn btn-outline-light">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container ma-t">
		<div class="catagory">
			<div class="title text-center">
				<h2>What's trending now</h2>
			</div>
			<div class="owl-carousel owl-theme owl-catagory mt-4">
				<div class="item">
					<a href="{{url('single-product')}}" class="product-list">
						<div class="product-list-img">
							<img src="{{url('public/images/10.jpg')}}" class="img-fluid" alt="">
						</div>
						<span class="badage">Sale</span>
						<div class="product-title">
							<h6>KN95 Five Layer Protective Mask</h6>
						</div>
						<div class="product-price">
							<span>Rs 399/-</span>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="{{url('single-product')}}" class="product-list">
						<div class="product-list-img">
							<img src="{{url('public/images/6.jpg')}}" class="img-fluid" alt="">
						</div>
						<span class="badage">Sale</span>
						<div class="product-title">
							<h6>INSULATED WATER BOTTLE - 360 ML</h6>
						</div>
						<div class="product-price">
							<span>Rs 799/-</span>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="{{url('single-product')}}" class="product-list">
						<div class="product-list-img">
							<img src="{{url('public/images/7.jpg')}}" class="img-fluid" alt="">
						</div>
						<span class="badage">Sale</span>
						<div class="product-title">
							<h6>FLIP COVER WATER BOTTLE-500ML</h6>
						</div>
						<div class="product-price">
							<span>Rs 500/-</span>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="{{url('single-product')}}" class="product-list">
						<div class="product-list-img">
							<img src="{{url('public/images/8.jpg')}}" class="img-fluid" alt="">
						</div>
						<span class="badage">Sale</span>
						<div class="product-title">
							<h6>PLASTIC FLIP FLOP WATER BOTTLE FOR KIDS - 300 ML</h6>
						</div>
						<div class="product-price">
							<span>Rs 399/-</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid instagram ma-t">
		<div class="title text-center mb-4">
			<h2>CLASSIC SELECTION IN INSTAGRAM</h2>
		</div>
		<script src="https://apps.elfsight.com/p/platform.js" defer></script>
		<div class="elfsight-app-f94db3f3-dcfb-4f3d-9b1f-1f0cf5a952c6" style="max-width: 100% !important;"></div>
	</div>
</div>
	


@endsection