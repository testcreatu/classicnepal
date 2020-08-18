@extends('home-master')



@section('content')



<div class="single-product pa-tb">
	<div class="container">
		<div class="row ma-b">
			<div class="col-md-6">
				<div class="zoom-effect box-shadow">
					<div class="show-image" href="{{url('public/images/6.jpg')}}">
						<img src="{{url('public/images/6.jpg')}}" id="show-img">
					</div>

					<div class="small-img">
						<img src="{{url('public/images/11.png')}}" class="icon-left" alt="" id="prev-img">
						<div class="small-container">
							<div id="small-img-roll">
								<img src="{{url('public/images/6-1.jpg')}}" class="show-small-img" alt="">
								<img src="{{url('public/images/6-2.jpg')}}" class="show-small-img" alt="">
								<img src="{{url('public/images/6.jpg')}}" class="show-small-img" alt="">
							</div>
						</div>
						<img src="{{url('public/images/11.png')}}" class="icon-right" alt="" id="next-img">
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="description">
					<div class="title">
						<h3>INSULATED WATER BOTTLE - 360 ML</h3>
					</div>
					<div class="content">
						<p class="price">RS. 799/-</p>
						<ul>
							<li>Type:Insulated Water Bottle</li>
							<li>Capacity: 360 ml</li>
							<li>Dimension: 7"</li>
							<li>Keeps beverages hotter, cooler, fresher longer</li>
							<li>Top handled</li>
						</ul>
					</div>
					<!-- <div class="share mb-4">
						<div id="fb-root"></div>
						<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=706653159797806&autoLogAppEvents=1" nonce="mKLe6wKJ"></script>
						<div class="fb-share-button" data-href="{{url()->current()}}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
					</div> -->
					<form>
						<div class="form-group row">
							<label class="col-sm-6 col-form-label">Enter Your Quantity :</label>
							<div class="col-sm-6">
								<input type="number" name="quantity" min="1" class="form-control" id="examplePhoneNumber" placeholder="Enter quantity" value="1" aria-describedby="emailHelp">
							</div>
						</div>
					</form>
					<div class="but-btn">
						<a href="#" class="btn btn-outline-dark" data-toggle="modal" data-target="#orderModal">Order Now</a>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="orderModalLabel">Order Now</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="title">
										<h5>DELIVERY DETAIL:</h5>
									</div>
									<form>
										<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Phone No</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Address</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="email" class="form-control">
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-dark">Submit</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>

		<div class="catagory ma-t">
			<div class="title text-center">
				<h2>PRODUCTS BOUGHT TOGETHER</h2>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					<a href="{{url('single-product')}}" class="product-list">
						<div class="product-list-img">
							<img src="{{url('public/images/6.jpg')}}" class="img-fluid" alt="">
						</div>
						<span class="badage">Sale</span>
						<div class="product-meta">
							<div class="product-title">
								<h6>INSULATED WATER BOTTLE - 360 ML</h6>
							</div>
							<div class="product-price">
								<span>Rs 799/-</span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="{{url('single-product')}}" class="product-list">
						<div class="product-list-img">
							<img src="{{url('public/images/7.jpg')}}" class="img-fluid" alt="">
						</div>
						<span class="badage">Sale</span>
						<div class="product-meta">
							<div class="product-title">
								<h6>FLIP COVER WATER BOTTLE-500ML</h6>
							</div>
							<div class="product-price">
								<span>Rs 500/-</span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="{{url('single-product')}}" class="product-list">
						<div class="product-list-img">
							<img src="{{url('public/images/8.jpg')}}" class="img-fluid" alt="">
						</div>
						<span class="badage">Sale</span>
						<div class="product-meta">
							<div class="product-title">
								<h6>PLASTIC FLIP FLOP WATER BOTTLE FOR KIDS - 300 ML</h6>
							</div>
							<div class="product-price">
								<span>Rs 399/-</span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="{{url('single-product')}}" class="product-list">
						<div class="product-list-img">
							<img src="{{url('public/images/5.jpg')}}" class="img-fluid" alt="">
						</div>
						<span class="badage">Sale</span>
						<div class="product-meta">
							<div class="product-title">
								<h6>FOLDABLE WATER BOTTLE - 300 ML</h6>
							</div>
							<div class="product-price">
								<span>Rs 399/-</span>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>








@endsection