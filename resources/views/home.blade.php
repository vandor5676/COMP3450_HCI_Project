@extends('layouts.app')
@section('content')
<header>
<div class="main-header" ><img src={{asset("../public/images/main_header.png")}}></div>
<div class="banner" ><img src="../public/images/banner.png"></div>
</header>

<main class="container">



  <div id="myModal" class="modal fade">
      <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
      </div>
    </div>
  </div>
</div>

  <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselIndicators" data-slide-to="1"></li>
      <li data-target="#carouselIndicators" data-slide-to="2"></li>
    </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card">
        <div class="row no-gutters">
          <div class="col-sm-7">
            <img class="d-block w-100" src="../public/images/CHEESE.jpg">
          </div>
          <div class="col-sm-5 featured-card">
            <div class="card-body featured-title">
              <div style="padding-top:15px">
                <p class="card-title">FEATURED VENDORS</p>
              </div>
              <p class="card-text featured-desc"></p>
              <div style="padding-top:20px">
                <a id="featured_btn" href="#" class="btn btn-primary">VIEW VENDORS</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card">
        <div class="row no-gutters">
          <div class="col-sm-7">
            <img class="d-block w-100" src="../public/images/honey.jpg">
          </div>
          <div class="col-sm-5 vendor1-card">
            <div class="card-body">
              <img class="center" src="../public/images/bee_dark.png" alt="" style="width: 180px; height: 150px; ">
                <div style="padding-top:15px">
                  <p class="card-title vendor1-title">Nothing Sweeter Than Honey</p>
                </div>
                <div class="card-text vendor1-desc">
                  <p>A portion of your purchase goes towards the Save The Bee's campaign</p>
                </div>
                <div style="padding-top:10px">
                  <a id="vendor1_btn" href="#" class="btn btn-primary center">VIEW SHOP</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
          <div class="row no-gutters">
            <div class="col-sm-7">
              <img class="d-block w-100" src="../public/images/veggies.jpg">
            </div>
            <div class="col-sm-5 vendor2-card">
              <div class="card-body">
                <img class="center" src="../public/images/farm.png" alt="" style="width: 150px; height: 170px; ">
                  <div style="padding-top:15px">
                    <p class="card-title vendor2-title">FEED YOUR SOUL</p>
                  </div>
                  <div class="card-text vendor2-desc">
                    <p>Fresh, sustainably grown produce from our farm to your table</p>
                  </div>
                  <div style="padding-top:10px">
                    <a id="vendor2_btn" href="#" class="btn btn-primary center">VIEW SHOP</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
      <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/>
      </svg>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
      <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-11.5.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z"/>
      </svg>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="category">
    <div class="row">
      <div class="col-lg">
        <p id="cat_title">GOODS</p>
      </div>
      <div class="col-auto">
        <img src="../public/images/category-img.png">
      </div>
    </div>
  </div>

  <div class="cat_buttons">
    <div class="row">
      <div class="col">
        <a id="produce_btn" href="#" class="btn btn-primary">PRODUCE</a>
      </div>
      <div class="col">
        <a id="meat_btn" href="#" class="btn btn-primary">MEAT</a>
      </div>
      <div class="col">
        <a id="dairy_btn" href="#" class="btn btn-primary">DAIRY</a>
      </div>
      <div class="w-100" style="margin-top:1em"></div>
      <div class="col">
        <a id="honey_btn" href="#" class="btn btn-primary">HONEY</a>
      </div>
      <div class="col">
        <a id="bakery_btn" href="#" class="btn btn-primary">BAKERY</a>
      </div>
      <div class="col">
        <a id="viewall_btn" href="#" class="btn btn-primary">VIEW ALL</a>
      </div>
    </div>
  </div>

</main>



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    offset:400,
    duration: 1000
    });
</script>
@endsection
