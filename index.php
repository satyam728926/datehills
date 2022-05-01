<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css?v=1.0">
  
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/keen-slider@6.6.10/keen-slider.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

</head>

<body>
  <header class="header">
    <a href="#Datehills">
      <div class="logo">DATE HILLS</div>
    </a>
    <ul>
      <div class="topnav">
        <a href="#About us">
          <li class="li">ABOUT US</li>
        </a>
        <a href="profile.php">
          <li class="li">PROFILE</li>
        </a>
        <a href="Register.php">
          <li class="li">REGISTRATION</li>
        </a>
        <a href="#Home">
          <li class="li">HOME</li>
        </a>
      </div>
    </ul>
  </header>
  <?php
  session_start();
  if (isset($_SESSION['username'])) { ?>
  <body>
     <div id="profilebody">
    <div id="my-keen-slider" class="keen-slider">
      <div class="keen-slider__slide number-slide1">
      <div class="card">
  <img src="sample 6.jfif" alt="John" height="200px" width="300px" ><br>
  <div class="name">johndoe</div><br>
         <div class="info"> Age:24yr
  About:CEO & Founder, Example
  Harvard University</div>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
</div>
      </div>
      <div class="keen-slider__slide number-slide2">
      <div class="card">
  <img src="sample 2.jpg" alt="John" height="200px" width="300px" ><br>
  <div class="name">johndoe</div><br>
         <div class="info"> Age:24yr
  About:CEO & Founder, Example
  Harvard University</div>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
      </div>
      </div>
      <div class="keen-slider__slide number-slide3">
      <div class="card">
  <img src="sample 3.jfif" alt="John" height="200px" width="300px" ><br>
  <div class="name">johndoe</div><br>
         <div class="info"> Age:24yr
  About:CEO & Founder, Example
  Harvard University</div>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
      </div>
      </div>
      <div class="keen-slider__slide number-slide4">
      <div class="card">
  <img src="sample 4.jfif" alt="John" height="200px" width="300px" ><br>
  <div class="name">johndoe</div><br>
         <div class="info"> Age:24yr
  About:CEO & Founder, Example
  Harvard University</div>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
      </div>
      </div>
      <div class="keen-slider__slide number-slide5">
      <div class="card">
  <img src="sample 5.jfif" alt="John" height="200px" width="300px" ><br>
  <div class="name">johndoe</div><br>
         <div class="info"> Age:24yr
  About:CEO & Founder, Example
  Harvard University</div>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
      </div>
      </div>
      <div class="keen-slider__slide number-slide6">
      <div class="card">
  <img src="sample1.jfif" alt="John" height="200px" width="300px" ><br>
  <div class="name">johndoe</div><br>
         <div class="info"> Age:24yr
  About:CEO & Founder, Example
  Harvard University</div>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
      </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/keen-slider@6.6.10/keen-slider.min.js"></script>
    <script>
      var slider = new KeenSlider("#my-keen-slider")
    </script>
     </div>
     <a href="logout.php">
      <div class="logout">LOGOUT</div>
    </a>
  </body>
  <?php
  }
   else
    {
  ?>
    <form action="logindatasession.php" method="post">
      <div class="form">
        <div class="title">Login Here</div>
        <div class="input-container ic2">
          <input id="username" class="input" type="text" placeholder=" " name="username" />
          <div class="cut cut-short"></div>
          <label for="username" class="placeholder">Username
        </div>
        <div class="input-container ic2">
          <input id="password" class="input" type="password" placeholder=" " name="Password1" />
          <div class="cut cut-short"></div>
          <label for="password" class="placeholder">Password
        </div>
        <input type="submit" class="submit" value="LOGIN" name="submit" id="input_button">
      </div>
    </form>
  <?php
  }
  ?>
</body>

</html>