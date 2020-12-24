<!doctype html>
<html>
<head>
	<title>Php Contact Form </title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html"; charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<style type="text/css">

		body {
			background-image: url("https://snap-photos.s3.amazonaws.com/img-thumbs/960w/L8FYXRB44H.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}

		#resultsMissingFields{
			padding-left: 15px;
		}

		form {
			padding-bottom: 10px;
		}

		.header {
			width: 50%;
			margin: 0 auto;
			margin-bottom: 10px;
		}

		.form-wrapper {
			margin-top: 50px;
			/*border: 2px solid red;*/
		}
	</style>



	<div class="container form-wrapper">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1 class="header">sign in here</h1>
					
				<form method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name" placeholder="Enter your name"
						value=""/>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Enter your email"
						value="" />
					</div>
				
					<input type="submit" name="submit" class=" btn btn-success btn-lg" />
				</form>
			</div><!-- end of col-md-6 -->
		</div><!-- end of row -->
    </div><!-- end of container -->
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
            if(isset($_POST['name']) && isset($_POST['password'])){    //     array(   as   [0]     =>       "username" => "hamzeh","password" => "hamzeh","role"     => "admin",
        foreach($multiArray as $key => $value){  
            $username = $value["username"];
            $password = $value["password"];
            $role = $value["role"] ;
            $user =$_POST['name'];
            $pass = $_POST['password'];
            $_SESSION['name'] = $user ;
            $_SESSION['password'] = $pass ;

                if($username ==  $_SESSION['name'] && $password ==  $_SESSION['password'] && $role == "admin"){ // $key["username"] // error in calling //$key[0] 
                    header("Location: admin.php");
                }elseif($username ==  $_SESSION['name'] && $password ==  $_SESSION['password'] && $value["role"] == "user"){
                    header("Location: user.php");
                }
        }
    }

    ?>
</body>
</html>