<?php
if(isset($_GET['date'])){
    $date = $_GET['date'];
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $con = new mysqli('localhost', 'root', '', 'barber');
    $insert_book = "insert into booking (name,email,phone,date)
    values('$name','$email','$phone','$date')";

    $run_product =mysqli_query($con,$insert_book);
    if($run_product){
        echo 
    "<script>alert('Booking Successfull')</script>";
    echo "<script>window.open('index.html#home','_self')</script>";
   
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,600&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  > 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css"> 
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

   <title>Barber_Shop</title>
</head>
  <body> 
  <header>

<a href="#" class="logo"><img src="images/logo1.png" class="logo"></a>

<div id="menu-bar" class="fas fa-hamburger"></div>

<div id="sidenav">
  <nav>
      <ul>
          <li><a href="index.html#banner">HOME</a></li>
          <li><a href="index.html#features">FEATURES</a></li>
          <li><a href="index.html#service">SERVICES</a></li>
          <li><a href="index.html#testimonial">TESTIMONIALS</a></li>
          <li><a href="index.html#footer">MEET US</a></li>
      </ul>
  </nav>
</div>
<div id="menubtn">
  <img src="images/menu.png" id="menu">
</div>

</header>
<section class="order">
    <div class="container" style="margin:120px auto;">
       
     <div class="row"> 
        
              
           
            <form action="" method="post" data-aos="fade-right"> 
                <h1 class="text-center">Book for Date: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
                <input type="text" placeholder="your name" class="box" name="name" require>
                <input type="email" placeholder="your email" class="box" name="email">
                <input type="text" placeholder="your phone" class="box" name="phone" require>
                <button type="submit"  class="btn mybtn3" name="submit" >send now </button>
            </form>
<!-- php start -->

<!--php end -->
            <div class="image" data-aos="fade-left">
                <img src="images/banner1.jpg" alt="">
            </div>

     </div>
    </div>
</section>

<!--footer-->
<section id="footer">
   

    <div class="social-link">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-youtube-play"></i>
        <p>Copyight Easy 2021</p>
    </div>

    
</section>


<script>
      var menubtn=document.getElementById("menubtn");
      var sidenav=document.getElementById("sidenav");
      var menu=document.getElementById("menu");

      sidenav.style.right="-250px";
      menubtn.onclick=function(){
          if(sidenav.style.right=="-250px"){
              sidenav.style.right="0";
              menu.src="images/close.png";

          }
          else{
          sidenav.style.right="-250px";
          menu.src="images/menu.png";
        }

      }

      var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 1000,
	speedAsDuration: true
});
      </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>

</html>
