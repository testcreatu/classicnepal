<div class="box-shadow" id="navbar">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light sticky-top ">
      <a class="navbar-brand logo text-right" href="{{url('/')}}">
        <img src="{{url('public/images/logo.png')}}" class="img-fluid" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('our-story')}}">Our story <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Classic Product
            </a>
            <div class="dropdown-menu catagory-menu" aria-labelledby="navbarDropdown">
              <ul>
                <li><h4 class="nav-title">Bootles</h4></li>
                <li><a href="{{url('single-product')}}">Insulated Water Bottle - 360 ml</a></li>
                <li><a href="{{url('single-product')}}">Plastic Flip Flop Water Bottle For Kids - 300 ml</a></li>
                <li><a href="{{url('single-product')}}">Foldable Water Bottle - 300 ml</a></li>
                <li><a href="{{url('single-product')}}">Flip Cover Water Bottle-500ml</a></li>
              </ul>
              <ul>
                <li><h4 class="nav-title">Bags</h4></li>
              </ul>
              <ul>
                <li><h4 class="nav-title">Cushions</h4></li>
                <li><a href="{{url('single-product')}}">KN95 Five Layer Protective Mask</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('connect-us')}}">connect</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <!-- <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button> -->
        </form>
      </div>
    </nav>
  </div>
</div>

