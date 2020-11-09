@extends('layouts.app')
@section('cart')

<head>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/banners.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

</head>

<div class="banner" id="cart">
    <div class="bannerTitle">
        <p>Cart</p>
    </div>
</div>
<div class="cartContainer" id="cart">
    <!-- cart item -->
    <div class="content" id="itemsContainer">
        <div class="cartItem">
            <div class="imageTextContainer">
                <div class="image" id="image" style="display: inline-block;">
                    <img class="cartItemImage" src={{asset("/images/logo.png")}} alt="logo">
                </div>
                <div class="text" id="text">
                    <div>
                        <p id="title">Farm Eggs</p>
                        <p id="subtitle">Thistle Farm</p>
                        <p id="stock">In Stock</p>
                    </div>
                </div>
            </div>

            <div class="quantity" id="quantity">
                <div class="quantityWraper">

                    <div> <button class="QuantityButton">-</button> </div>
                    <div> <input class="QuantityInput" value="1" type="number"></div>
                    <div> <button class="QuantityButton">+</button></div>
                </div>
            </div>
            <div class="priceRemove" id="priceRemove">
                <div class="price">
                    <p>$2.99</p>
                </div>
                <div class="remove">
                    <i class="fa fa-trash" aria-hidden="true"></i>Remove
                </div>
            </div>
        </div>
        <!-- cart item -->
        <div class="content" id="itemsContainer">
            <div class="cartItem">
                <div class="imageTextContainer">
                    <div class="image" id="image" style="display: inline-block;">
                        <img class="cartItemImage" src={{asset("/images/logo.png")}} alt="logo">
                    </div>
                    <div class="text" id="text">
                        <div>
                            <p id="title">Farm Eggs</p>
                            <p id="subtitle">Thistle Farm</p>
                            <p id="stock">In Stock</p>
                        </div>
                    </div>
                </div>

                <div class="quantity" id="quantity">
                    <div class="quantityWraper">

                        <div> <button class="QuantityButton">-</button> </div>
                        <div> <input class="QuantityInput" value="1" type="number"></div>
                        <div> <button class="QuantityButton">+</button></div>
                    </div>
                </div>
                <div class="priceRemove" id="priceRemove">
                    <div class="price">
                        <p>$2.99</p>
                    </div>
                    <div class="remove">
                        <i class="fa fa-trash" aria-hidden="true"></i>Remove
                    </div>
                </div>
            </div>

        </div>
        <!-- end of cart items -->
    </div>
    <!-- total -->
    <div class="totalWraper">
        <div class="totalcontainer" id="totalcontainer">
            <div class="totalItemCost">
                <div class="totalText">
                    <p>Item(s):</p>
                </div>
                <div class="totalPrice">
                    <p>$34.99</p>
                </div>
            </div>
            <div class="totalDeliveryFee">
                <div class="totalText">
                    <p>Delivery fee:</p>
                </div>
                <div class="totalPrice">
                    <p>$5.99</p>
                </div>
            </div>
            <!-- devider -->
            <div class="totalDevider"></div>
            <div class="totalTotalCost">
                <div class="totalText">
                    <p>Total:</p>
                </div>
                <div class="totalPrice">
                    <p>$40.98</p>
                </div>
            </div>
            <a href="checkout"><button class="procedeToCheckout"><i class="fas fa-shield-alt"></i>Proceed to Checkout</button></a>

        </div>
    </div>
    <!-- end total -->

</div>



<script>
$(".totalTotalCost").html = localStorage.getItem("lastname");
</script>
</body>



</html>
@endsection