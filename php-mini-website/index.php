<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap 4 Theme 1</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

  </head>
  <body>

    <!-- Srart upper bar-->

    <div class="upper-bar">
      <div class="container">
        <div class="row">
          <div class=" info col-md text-center text-sm-left">
            <i class="fa fa-phone"></i> <span>01772154521,</span> <i class="fa fa-envelope-o"></i> <span>Hamzeh@Hamzeh.com</span>
          </div>

          <div class="info col-md text-center text-sm-right ">
            <span>Let's Work Togather!</span> <span class="get-quote">Get Quote</span>
          </div>

        </div>

      </div>
    </div>


    <!-- End upper bar-->

    <!--Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
          <a class="navbar-brand" href="#">
            <span>Elite</span><span>Corp</span>
          </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

          <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="login.php">Login </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Work</a>
              </li>
             
            </ul>
          </div>
    </div>
</nav>


    <!--End Navbar-->


    <!--Start Slider-->
    <div class="slider">
        <div id="main-slider" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <h1>We're an Independent <br> Design and <span>Development</span> <br>Agency.</h1>
          <div class="overlay"></div>
          <div class="carousel-item carousel-one active">

          </div>
          <div class="carousel-item carousel-two">

          </div>
          <div class="carousel-item carousel-three">

          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#main-slider" data-slide-to="0" class="active"></li>
          <li data-target="#main-slider" data-slide-to="1"></li>
          <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>

      </div>

    </div>

    <!--End Slider-->

    <?php


session_start();
$multiArray = array( 
    array(
        "username" => "hamzeh",
        "password" => "hamzeh",
        "role"     => "admin",
    ),
    array(
        "username" => "maria",
        "password" => "maria",
        "role"     => "admin",
    ),
    array(
        "username" => "yacoub",
        "password" => "yacoub",
        "role"     => "user",
    ),

    array(
        "username" => "ali",
        "password" => "ali",
        "role"     => "user",
    ),

    array(
        "username" => "omar",
        "password" => "omar",
        "role"     => "user",
    )
    
    );

$_SESSION["multiArray"] = $usersdb;

?>

    

    <script  src="js/jquery-3.4.1.min.js"></script>
    <script  src="js/popper.min.js"></script>
    <script  src="js/bootstrap.min.js"></script>
    <script  src="js/main.js"></script>


  </body>
</html>
