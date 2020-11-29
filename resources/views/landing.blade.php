@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="css/landing.css">
</head>

<header>
  <div class="landing-bar">

    <div class="navbarItem">
    </div>

    <div class="navbar__logo-container">
      <div class="logo">
      <a href="#"><img class="navbarLogo" src={{asset("/images/navbar/logo.png")}} alt="logo"></a>
      </div>
    </div>

    <div class="navbarItem">
      <button  id="user-login" class="navbarLink" onclick="document.getElementById('id01').style.display='block'">LOGIN</button>
    </div>
  </div>
<div class="main-header" ><img src={{asset("/images/headerImages/main_header.png")}}></div>
<div class="banner"><img src={{asset("/images/banners/welcome_banner.png")}}></div>
</header>


<div id="id01" class="modal">

  <form class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <p id="signin">SIGN-IN</p>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw">

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <br>
      <div style="text-align:center;">
        <a id="submit" href="/COMP3450_HCL_Project/public/home" style="font-size:20px;">LOGIN</a><br>
      </div>
    </div>

    <div class="bottom-container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">CANCEL</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
@endsection
