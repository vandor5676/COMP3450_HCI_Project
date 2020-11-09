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

<script>
localStorage.setItem("lastname", "Smith");
</script>
@endsection