@extends('layouts.app')
@section('cart')

<head>
    <link rel="stylesheet" href="css/cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<div class="banner">
    <div class="bannerTitle">
        <p>Cart</p>
    </div>
</div>
<div class="cartContainer" id="cart">
    <div class="content" id="itemsContainer">
        <div class="cartItem">

            <div class="image" id="image">
                <img class="cartItemImage" src={{asset("/images/logo.png")}} alt="logo">
            </div>
            <div class="text" id="text">
                <p id="title">Farm Eggs</p>
                <p id="subtitle">Thistle Farm</p>
                <p id="stock">In Stock</p>
            </div>
            <div class="quantity" id="quantity">

                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        1
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">1</a>
                        <a class="dropdown-item" href="#">2</a>
                        <a class="dropdown-item" href="#">3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">more</a>
                    </div>
                </div>
            </div>
            <div class="priceRemove" id="priceRemove">

            </div>
        </div>

    </div>
    <div class="content" id="totalcontainer">
        <!-- <div class="cartItem"></div> -->

    </div>

</div>

</div>
</body>



</html>
@endsection