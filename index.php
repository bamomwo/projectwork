<?php
	session_start();
	require('connect.php');

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$pass  = md5($password);

		
			$sql = "SELECT * FROM adminlogin WHERE username='$username' AND password ='$pass'";
		$res = mysqli_query($conn, $sql);
		// $user = mysqli_fetch_assoc($res);
		if(mysqli_num_rows($res) == 1){
			$row = mysqli_fetch_assoc($res);
			$username = $row['username'];
			$_SESSION['admin_id'] = $row['admin_id'];
      $_SESSION['username'] = $username;
			header("Location: account.php");	
		}else{
			$errType = 'danger';
      $errMsg = 'Invalid Credentials. Try Again';
		}

		}
	



?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Desk Assignment System</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body  class="bg-gradient-default">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block " style="background-image:url('img/signin.jpg');"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <span><img src='img/udslogo.jpg' style="max-width: 15%; max-height: 15%;"> </span>
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Sign In</h1>

                    <!-- Error Message Display -->
                    <?php
                      if(isset($errType)&& !empty($errMsg)){
                        echo(
                          "<div class='alert alert-$errType alert-dismissible fade show' role='alert'>
                              <strong>$errMsg</strong>
                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>"
                        );
                      }
                    ?>
                  </div>
                  <form class="user" method="POST" action="">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user"  aria-describedby="username" name="username" placeholder="Enter Username...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user"  placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" name="remember" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    
                    <input type="submit" name="submit" class="btn btn-success btn-user btn-block" value="Login">
                    <hr>
                  </form>
                  
                  <div class="text-center">
                    <strong><a class="small text-success" href="forgot-password.html">Forgot Password?</a></strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>