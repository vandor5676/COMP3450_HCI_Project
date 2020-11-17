@extends('layouts.app')
@section('content')
<head>
    <link rel="stylesheet" href="css/vendors.css">
</head>

<header>
<div class="main-header" style="position: relative;"><img src={{asset("../public/images/vendor_banner.jpg")}}>
  <div id="vendor_header_text" style="position: absolute;">
    <p><b>VENDORS</b></p>
   </div>
 </div>
</header>

<!-- Category Nav Bar -->
<div class="category-bar">
  <div class="category-bar-item">
    <a class="category-bar-link" href="">All Products</a>
    <a class="category-bar-link" href="">Produce</a>
    <a class="category-bar-link" href="">Meat</a>
    <a class="category-bar-link" href="">Dairy</a>
    <a class="category-bar-link" href="">Honey</a>
    <a class="category-bar-link" href="">Bakery</a>
  </div>
</div>

<!-- Filters Bar -->
<div class="content">
  <div class="filterContainer">
      <div class="filterSidebar">
          <ul style="list-style-type: none;">
            <h5>Filters</h5>
            <li><a class="sidebar-link" href="">Newest</a></li>
            <li><a class="sidebar-link" href="">Certified Organic</a></li>
            <li><a class="sidebar-link" href="">Ascending</a></li>
            <li><a class="sidebar-link" href="">Descending</a></li>
          </ul>
      </div>
  </div>

<!-- Products -->

        <div class="productItem">
            <div class="logo_container">
                    <img class="vendor_logo" src={{asset("/images/bee.png")}} alt="Product Image">
                    <div class="vendor_text">
                    <p style="font-size: 35px;"><b> Natural Bee Farm </b></p>
                    <p style="font-size: 20px;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a ipsum libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
<a id="visit_store" href="#" class="btn btn-primary">VISIT STORE</a>
                  </div>
                  </div>
                <div class="store_preview">
                            <img class="product_img_preview" src="../public/images/honey_jar.png" alt="">
                            <img class="product_img_preview" src="../public/images/honey-treats.png" alt="">
                            <img class="product_img_preview" src="../public/images/candle.jpg" alt="">
                            <img class="product_img_preview" src="../public/images/honey_comb.jpg" alt="">
                      </div>
                      <!-- <div class ="center">
                        <a id="visit_store" href="#" class="btn btn-primary">VISIT STORE</a>
                      </div> -->
                </div>

</div>

</body>



</html>

@endsection
