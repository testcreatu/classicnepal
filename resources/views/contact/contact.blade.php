@extends('home-master')



@section('content')

<div class="container-fluid connect">
	<div class="title text-center">
		<h2>CONNECT WITH US</h2>
	</div>
	<div class="map mt-5">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.394689391565!2d85.33959931453754!3d27.674193633556172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190fc042d399%3A0x6064967133397f28!2sCreatu+Developers!5e0!3m2!1sen!2snp!4v1546587783393" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-5">
				<div class="connect-dtl">
					<div class="title">
						<h2>NEED HELP?</h2>
					</div>
					<div class="connect-address mt-3">
						<ul>
							<li><p><i class="fas fa-home "></i> <a href="#">kathmandu nepal</a></p></li>
							<li><p><i class="fas fa-phone-volume"></i><a href="tel:01-0000000">01-0000000</a></p></li>
							<li><p><i class="fas fa-envelope "></i><a href="mailto:">abcd@example.com</a></p></li>
						</ul>
					</div>
					<ul class="social-link mt-5">
						<h4>FOLLOW US</h4>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-7 connect-form">
				<div class="title text-center mb-4">
					<h2>SEND US YOUR MESSAGE</h2>
				</div>
				<form>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>FULL NAME</label>
							<input type="password" class="form-control" id="inputPassword4">
						</div>
						<div class="form-group col-md-6">
							<label>YOUR EMAIL</label>
							<input type="email" class="form-control" id="inputEmail4">
						</div>
					</div>
					<div class="form-group">
						<label>YOUR MESSAGE</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
					<div class="btn text-center">
						<button type="submit" class="btn btn-outline-dark ">Submit</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>	
</div>



@endsection