@extends('layouts.app')
@section('content')

<header class ="main-header">
  <div class="header-image">

  </div>
</header>

<main class="container">

  <section class ="card" data-aos="fade-right">
    <img src={{asset("/images/intro-image.jpg")}} alt="">
    <div class ="intro__text">
      <img id="icon1" src="../public/images/ecology.png" alt="">
      <br>
      <p><b>Insightful Training Solutions Inc.</b> is a highly reputable training company with a proven reputation with Service Canada contracts, First Nation communities, not-for-profit and private organizations across British Columbia and Alberta.</p>
      <p>We take great pride in our aboriginal culture and in the work that we do, and have first-hand experience working extensively with Indigenous communities.
      </p>
      <div style="text-align:center;">
      <a href="#" class ="btn1">About Us</a>
    </div>
  </section>

  <section class ="card" data-aos="fade-left">
    <div class ="info__text">
      <img id="icon2" src="../public/images/people.png" alt="">
      <p>We are committed to delivering high quality services, customized workshops and employment coaching and training sessions.
        Our team of experienced facilitators have a solid understanding of group dynamics, our subject matter and the individual learning needs we each may have.
        Our sessions are engaging, memorable, and making learning fun and easy to apply to all areas of our life.
        <br>We specialize in providing customized training for a wide variety of audiences.
      </p>
    </div>
    <img src="../public/images/training-image.jpg" alt="">
  </section>

  <section class ="card" data-aos="fade-right">
    <img src="../public/images/info-image.jpg" alt="">
    <div class ="training__text">
      <p><b>Our training includes:</b></p>
      <br>
      <ul>
        <li>Facilitation, curriculum development and training</li>
        <li>Customized workshops for employment programs, teams, personal development and more</li>
        <li>Administration and interpretation of career assessments</li>
        <li>Industry recognized training in employment coaching practices</li>
        <li>Effective employment coaching techniques</li>
        <li>Ethical standards training for Career Practitioners</li>
      </ul>
      <img id="icon3" src="../public/images/charity.png" alt="">
      <div style="text-align:center;">
        <a href="#" class ="btn2">Learn More</a>
      </div>
    </div>
  </section>
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
