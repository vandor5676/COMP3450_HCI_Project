@extends('layouts.app')
@section('content')

<header>
  <div class="main-header" ></div>
</header>

<main class="container">

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

<div class="ft-container">
<footer>
     <!-- Footer main -->
     <section class="ft-main">
       <div class="ft-main-item">
         <h2 class="ft-title">Site Links</h2>
         <ul>
           <li><a href="#">Home</a></li>
           <li><a href="#">About Us</a></li>
           <li><a href="#">Services</a></li>
           <li><a href="#">Youth Employment Program</a></li>
           <li><a href="#">Contact</a></li>
         </ul>
       </div>
       <div class="ft-main-item">
         <h2 class="ft-title">Resources</h2>
         <ul>
           <li><a href="#">Docs</a></li>
           <li><a href="#">Blog</a></li>
           <li><a href="#">eBooks</a></li>
           <li><a href="#">Webinars</a></li>
         </ul>
       </div>
       <div class="ft-main-item">
         <h2 class="ft-title">Contact Us</h2>
          <p>250.318.0597</p>
          <p>778.846.6251</p>
          <p>info@insightfultraining.ca</p>
       </div>

       <div class="ft-main-item">
         <h2 class="ft-title">Stay Updated</h2>
         <p>Subscribe to our newsletter to get our latest news.</p>
         <form>
           <input type="email" name="email" placeholder="Enter email address">
           <input type="submit" value="Subscribe">
         </form>
       </div>
     </section>

     <!-- Footer social -->
     <section class="ft-social">
       <ul class="ft-social-list">
         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
         <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
         <li><a href="#"><i class="fa fa-youtube"></i></a></li>
       </ul>
     </section>

     <!-- Footer legal -->
     <section class="ft-legal">
       <ul class="ft-legal-list">
         <li><a href="#">Terms &amp; Conditions</a></li>
         <li><a href="#">Privacy Policy</a></li>
         <li>&copy; 2020 Darko Web Studios </li>
       </ul>
     </section>
   </footer>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    offset:400,
    duration: 1000
    });
</script>
@endsection
