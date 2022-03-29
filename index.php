<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="main.css"> 
<script src="https://kit.fontawesome.com/f0d7a30a28.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Feet Pics</title>
  </head>
  <body>
    <!--Nav Bar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-black">
        <div class="container">
            <a href="#" class="navbar-brand"><span><i class="fas fa-socks"></i>Feet Pics</span></a>
            <button class="navbar-toggler" data-toggle="collapse"
            data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"></li>
                <a href="#" Class="nav-link">Home</a>
                <li class="nav-item">
                  <a href="#" class="nav-link">Human Feet</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Dog Feet</a>
                </li> 
                <li class="nav-item">
                  <a href="calendar.php" class="nav-link">Calendar</a>
                </li>
                <li class="nav-item">
                  <a href="calculator.php" class="nav-link">Calculator</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-arrow-alt-circle-down fa-2x"></i>
                  </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <!--End of Nav Bar--> 

    <!--php -->

    <form method="GET">
      <input type="text" name="person">
      <input type="text" name="verb">
      <input type="text" name="noun">
      <input type="text" name="place">
      <button>SUBMIT</button>
    </form>

    <?php
      $name = $_GET['person'];
      $activity = $_GET['verb'];
      $object = $_GET['noun'];
      $location = $_GET['place'];
      echo $name." is a someone who likes to ".$activity.". However, at night,
       he goes to the ".$location." and unplugs the ".$object." so that nobody can ".$activity." ever again!";
      
    ?>



<!--end of php -->

<!--Slider-->
<section id="main">
  <div id="Carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
        <li data-target="#Carousel" data-slide-to="1"></li>
        <li data-target="#Carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text right mb-5">
              <h1 class="display-3 title-color">Welcome to Feet Pics</h1>
              <p class= "lead">"Home of the Feet. Land of the Brave"</p>
                 <a href="#" class="btn btn-color slide-btn btn-lg">
                   Buy Now
                 </a>
            </div>
          </div>
        </div>
        <!--End-->
        <div class="carousel-item carousel-image-2">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block mb-5">
              <h1 class="display-3 title-color">I Know What You're Thinking...</h1>
              <p class="lead">..."Who in god's Neptune would ever buy this?" </p>
              <p class="lead">Don't Forget, Weird People Exist:) </p>
                <a href="#" class="btn btn-color slide-btn btn-lg">
                  Figure Out Why
                </a>
            </div>
          </div>
        </div>
        <div class="carousel-item carousel-image-3">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block mb-5">
              <h1 class="display-3 title-color">Easily Affordable</h1>
              <p class="lead">The best price for the best quality pictures.</p>
                <a href="#" class="btn btn-color slide-btn btn-lg">
                  See Why
                </a>
            </div>
          </div>
        </div>
        <a href="#Carousel" data-slide="prev" class="carousel-control-prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#Carousel" data-slide="next" class="carousel-control-next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
  </div>
</section>
<!--End of Slider-->
<!--Service Section-->
<section class="services py-5 text-center">
    <div class="container">
        <div class="row">
          <!--Single Service -->
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
              <span class="service-icon">
                  <i class="fas fa-socks fa-2x"></i>
              </span>
              <h5 class="font-weight-bold text-uppercase">
                "Why Feet?"
              </h5>
              <p clas="text-capitalize">Why not?</p>
          </div>
          <!--end of Single Service-->
           <!--Single Service -->
           <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
            <span class="service-icon">
                <i class="fas fa-cheese fa-2x"></i>
            </span>
            <h5 class="font-weight-bold text-uppercase">
              We Keep it Cheesy!
            </h5>
            <p clas="text-capitalize">You might find these pics a little cheesy. Trust me, they are.</p>
        </div>
        <!--end of Single Service-->
         <!--Single Service -->
         <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
          <span class="service-icon">
              <i class="fas fa-photo-video fa-2x"></i>
          </span>
          <h5 class="font-weight-bold text-uppercase">
            Buy & Download
          </h5>
          <p clas="text-capitalize">It is literally that easy because why make
             life harder than it really is?</p>
      </div>
      <!--end of Single Service-->
        </div>
    </div>
</section>
<!--End of Service Section-->
<!--Featured Products-->
<section id="products" class="products py-5">
  <div class="container">
    <!--Section title-->
    <div class="row">
      <div class="col-10 mx-auto col-sm-6 text-center">
        <h1 class="text-capitalize product-title">
          FEETured Pics 
        </h1>
      </div>
    </div>
    <!--End of Section Title-->
    <!--Products items-->
    <div class="row product-items" id="product-items">
      <!--Single Item-->
        <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
          <div class="card single-item">
            <div class="img-container">
              <img src="Images/feetpic10.jpg" alt=""
              class="card-img-top product-img">
            </div>
            <div class="card-body">
                <div class="card-text d-flex justify-content-between text-capitalize">
                  <h5 id="item-name">The Jimin Flops</h5>
                  <span><i class="fas fa-money-bill"></i>$850</span>
                </div>
            </div>
          </div>
        </div>
      <!--End of Single item-->
      <!--Single Item-->
      <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="Images/feetpics4.jpg" alt=""
            class="card-img-top product-img">
          </div>
          <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="item-name">Higher?</h5>
                <span><i class="fas fa-money-bill"></i>$630</span>
              </div>
          </div>
        </div>
      </div>
    <!--End of Single item-->
    <!--Single Item-->
    <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
      <div class="card single-item">
        <div class="img-container">
          <img src="Images/feetpics3.png" alt=""
          class="card-img-top product-img">
        </div>
        <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name">Friendship is Magic!</h5>
              <span><i class="fas fa-money-bill"></i>$1k</span>
            </div>
        </div>
      </div>
    </div>
  <!--End of Single item-->
<!--Single Item-->
<div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
  <div class="card single-item">
    <div class="img-container">
      <img src="Images/feetpics5.jpg" alt=""
      class="card-img-top product-img">
    </div>
    <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="item-name">Uh-Oh!</h5>
          <span><i class="fas fa-money-bill"></i>$200</span>
        </div>
    </div>
  </div>
</div>
<!--End of Single item-->
<!--Single Item-->
<div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
  <div class="card single-item">
    <div class="img-container">
      <img src="Images/feetpics6.jpg" alt=""
      class="card-img-top product-img">
    </div>
    <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="item-name">Horse Socks</h5>
          <span><i class="fas fa-money-bill"></i>$5</span>
        </div>
    </div>
  </div>
</div>
<!--End of Single item-->
<!--Single Item-->
<div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
  <div class="card single-item">
    <div class="img-container">
      <img src="Images/feetpics8.jpg" alt=""
      class="card-img-top product-img">
    </div>
    <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="item-name">Born Like This</h5>
          <span><i class="fas fa-money-bill"></i>$2K</span>
        </div>
    </div>
  </div>
</div>
<!--End of Single item-->
<!--Single Item-->
<div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
  <div class="card single-item">
    <div class="img-container">
      <img src="Images/feetpics13.jpg" alt=""
      class="card-img-top product-img">
    </div>
    <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="item-name">LOL:)</h5>
          <span><i class="fas fa-money-bill"></i>$0.01</span>
        </div>
    </div>
  </div>
</div>
<!--End of Single item-->
<!--Single Item-->
<div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
  <div class="card single-item">
    <div class="img-container">
      <img src="Images/feetpics14.jpg" alt=""
      class="card-img-top product-img">
    </div>
    <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="item-name">Sussy Amogus</h5>
          <span><i class="fas fa-money-bill"></i>$2.2K</span>
        </div>
    </div>
  </div>
</div>
<!--End of Single item-->
<!--Single Item-->
<div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
  <div class="card single-item">
    <div class="img-container">
      <img src="Images/feetpics15.jpg" alt=""
      class="card-img-top product-img">
    </div>
    <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="item-name">BTFeet</h5>
          <span><i class="fas fa-money-bill"></i>$100M</span>
        </div>
    </div>
  </div>
</div>
<!--End of Single item-->
<!--Single Item-->
<div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
  <div class="card single-item">
    <div class="img-container">
      <img src="Images/feetpics162.jpg" alt=""
      class="card-img-top product-img">
    </div>
    <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="item-name">Jiminie Feet</h5>
          <span><i class="fas fa-money-bill"></i>$50K</span>
        </div>
    </div>
  </div>
</div>
<!--End of Single item-->
<!--Single Item-->
<div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
  <div class="card single-item">
    <div class="img-container">
      <img src="Images/feetpics17.jpg" alt=""
      class="card-img-top product-img">
    </div>
    <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="item-name">JK Technique</h5>
          <span><i class="fas fa-money-bill"></i>$1K</span>
        </div>
    </div>
  </div>
</div>
<!--End of Single item-->
<!--Single Item-->
<div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
  <div class="card single-item">
    <div class="img-container">
      <img src="Images/feetpics18.jpg" alt=""
      class="card-img-top product-img">
    </div>
    <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="item-name">Lemon Pepper Steppers</h5>
          <span><i class="fas fa-money-bill"></i>$6K</span>
        </div>
    </div>
  </div>
</div>
<!--End of Single item-->

    </div>


    <!--End of Product Items-->
  </div>
</section>
<!--End of Featured Products-->
<!--About Section-->
<section id="about-sec">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 text-center">
          <img src="Images/feetpicmeme.jpg" width="450" height="150"
          class="img-fluid watch-img">
        </div>
        <div class="col-lg-7 text-lg-right text-center text-color about-text">
          <h1>About The Owner</h1>
          <p class="text">I literally wanted to make a website for weirder people
            who would like to buy fascinating feet pics. I think it would be better
            for those people to come to my site than harrass people on social media
            for feet pics:)
          </p>
        </div>
      </div>
    </div>
</section>

<!--End of about Section--->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>




