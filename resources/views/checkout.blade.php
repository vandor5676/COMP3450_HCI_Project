@extends('layouts.app')
@section('cart')

<head>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/banners.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

</head>

<div class="banner" id="checkout">
    <div class="bannerTitle">
        <p>Checkout</p>
    </div>
</div>
<div>
    <button onclick="addItem('Farm Eggs', 'Thistle Farm', 'In Stock', null,1,2.99)" style="width: 100px; height:100px;"></button>
</div>

<script>

var itemArray = [];


function addItem(itemName, farmName, stockText, imageLocation, quantity, price )
{
    var item = {itemName:itemName, farmName:farmName, stockText:stockText,imageLocation:imageLocation,quantity:quantity,price:price };
    itemArray.push(item);
    sessionStorage.setItem("items", JSON.stringify(itemArray));
}
</script>
@endsection