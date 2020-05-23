<?php
  session_start();
  require('connect.php');

  if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
  	 if(isset($_POST['register'])){
        $coursename = $_POST['course_name'];
        $coursecode = $_POST['course_code'];
        $stmt = $conn->prepare("INSERT INTO courses(course_name, course_code)VALUES(?,?)");
        $stmt->bind_param("ss", $coursename, $coursecode);
        $stmt->execute();
        if($stmt->affected_rows > 0){
          $errType = "success";
          $errMsg = "Course Registered Successfully";
        }else{
          $errType = "danger";
          $errMsg = "Error Occured. Could not register course";
        }

     }
}else{
  header("Location: index.php");
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

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/sb-admin-2.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="account.php">
        <div class="sidebar-brand-text mx-3"><b>UDS EXAM OFFICE</b></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="account.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="registeredstudents.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Student Registration</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="courseregistration.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Course Registration</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="examhall.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Exam Halls</span></a>
      </li>

        <!-- Divider -->
      <hr class="sidebar-divider">

       <li class="nav-item">
        <a class="nav-link" href="courseshalls.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Assign Courses to Halls</span></a>
      </li>


       <li class="nav-item">
        <a class="nav-link" href="assignstudentstocourses.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Students to Courses</span></a>
      </li>

      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
        <a class="nav-link" href="reports.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Reports</span></a>
      </li>


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

     
          <div class="d-none d-sm-inline-block ml-md-3 my-2 my-md-0 mw-100">
            <h3 class="text-success"> Desk Assignment System </h3>
          </div>

          <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">
      <div class="topbar-divider d-none d-sm-block"></div> 

            <!-- Nav Item - User Information -->
      <li class="nav-item dropdown">
        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span style="padding: 10px;font-style:bold; color:#fff;" class=" rounded-circle bg-success dropdown-toggle"><?php echo(strtoupper(substr($_SESSION['username'], 0,1))); ?></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>

    </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
                    <?php
                  if(isset($errType)&&isset($errMsg)){
                    echo("
                      <div class='alert alert-$errType alert-dismissible fade show rounded-0' role='alert'>
                  <strong>$errMsg</strong>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                      ");
                  }

                ?>


          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success"> Mass Course Registration</h6>
                </div>
                <div class="card-body">
                    <form  method="POST" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Level</label>
                          <select class="custom-select rounded-0" name="department" id="inputGroupSelect01" required>
                            <option selected>Level</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="300">300</option>
                            <option value="400">400</option>
                            
                          </select>
                      </div>

                      <div class="custom-file form-group">
                          <input type="file" class="custom-file-input" id="validatedCustomFile" name="filetoupload" required>
                          <label class="custom-file-label" for="validatedCustomFile"> Upload Excel File</label>
                      </div>

                      <div class="form-group mt-2">
                        <input type="submit" class="btn btn-success btn-block rounded-0" name="submit" value="Upload">
                      </div>
                    </form>



                </div>
              </div>



            </div>

            <div class="col-lg-6 mb-4">



              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success">Single Course Registration</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="" >
                      <div class="form-group">
                        <label for="exampleInputUsername1">Course Code</label>
                        <input type="text" name="course_code" class="form-control rounded-0"  placeholder="Course Code" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Capacity</label>
                        <input type="text" name="course_name" class="form-control rounded-0"  placeholder="Course Name" required>
                      </div>
                      <div class="form-group">
                        <input type="submit" class="btn btn-success btn-block rounded-0" name="register" value="Register">
                      </div>        
                </form>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
