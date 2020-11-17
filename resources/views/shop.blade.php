@extends('layouts.app')
@section('content')
<head>
    <link rel="stylesheet" href="css/shop.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>

<!-- Shop Banner -->
<div class="banner">
    <div class="bannerTitle">
        <p>Shop</p>
    </div>
</div>

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
            <li><a class="sidebar-link" href="">On Sale</a></li>
            <li><a class="sidebar-link" href="">Just Added</a></li>
            <li><a class="sidebar-link" href="">Special Offers</a></li>
            <li><a class="sidebar-link" href="">By Vendor</a></li>
            <li><a class="sidebar-link" href="">By Price</a></li>
          </ul>
      </div>
  </div>

<!-- Products -->
<div class="productContainer">
        <div class="productItem">
            <div class="imageTextContainer">
                <div class="image" id="image" style="display: inline-block;">
                    <img class="itemImage" src={{asset("/images/logo.png")}} alt="Product Image">
                </div>

                <div class="text" id="text">
                    <div>
                        <p id="title">Farm Eggs</p>
                        <p id="subtitle">Thistle Farm</p>
                        <p id="stock">In Stock</p>
                    </div>
                </div>
            </div>

            <div class="addToCart">
                <a href="" class="addToCart-link">Add to Cart</a>
            </div>

            <div style="position: relative; width: auto; font-family: 'Segoe UI','Oswald', 'sans-serif';">
                <div style="padding: 2em">
                    <p>$2.99</p>
                </div>
            </div>
        </div>

        <div class="productItem">
            <div class="imageTextContainer">
                <div class="image" id="image" style="display: inline-block;">
                    <img class="itemImage" src={{asset("/images/logo.png")}} alt="Product Image">
                </div>

                <div class="text" id="text">
                    <div>
                        <p id="title">Farm Eggs</p>
                        <p id="subtitle">Thistle Farm</p>
                        <p id="stock">In Stock</p>
                    </div>
                </div>
            </div>

            <div class="addToCart">
                <a href="" class="addToCart-link">Add to Cart</a>
            </div>

            <div style="position: relative; width: auto; font-family: 'Segoe UI','Oswald', 'sans-serif';">
                <div style="padding: 2em">
                    <p>$2.99</p>
                </div>
            </div>
        </div>
  </div>

</div>


</body>



</html>

@endsection
