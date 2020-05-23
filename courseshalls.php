<?php
  session_start();
  require('connect.php');

  if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
      if(isset($_POST['submit'])){
    if(!empty($_POST['halls'])&& !empty($_POST['courses'])){
        $hall = $_POST['halls'];
        $courses = $_POST['courses'];
        $time = $_POST['time'];
        $writtendate = $_POST['writtendate'];

      
          
        foreach($courses as $course){

          $sql = $conn->prepare("INSERT INTO hallscourses(hall_code, course_code,startingtime,writtendate) VALUES(?, ?,?,?)");

          $sql->bind_param('ssis',$hall,$course,$time,$writtendate);
          $sql->execute();

          if($sql->affected_rows > 0){
            $errType ="success";
            $errMsg = "Courses Assigned To Halls successful";
          }else{
            $errType = "danger";
            $errMsg = "Error Occured Assigning Courses To Halls";
          }
        }


    }else{
      $errType="danger";
      $errMsg = "Please Select Halls and Courses to Assign";
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
        <div class="sidebar-brand-text mx-3"><b>UDS EXAM OFFICE</b> </div>
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
        <form action="" method="POST">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">

            <h1 class="h3 mb-0 text-center text-gray-800">ASSIGN COURSES TO HALLS</h1>
            <label>Exam Date</label>
            <input type="date" class="form-control col-2 rounded-0" name="writtendate" required>
            <input type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success rounded-0 btn-primary shadow-sm" name="submit" value="Assign Courses to Halls" >
            
          </div>

          
          

            

          

          <!-- Content Row -->
          <div class="row">
             
            <!-- Content Column -->
            <div class="col-lg-4 mb-4">
              
              <h4 class="text-center text-success">Choose Exam Hall</h4>

              <?php

                $sql = "SELECT * FROM examhalls";
                $res = mysqli_query($conn,$sql);

                if(mysqli_num_rows($res) > 0){
                  echo "<table class='table table-striped'>";
                  echo "<tbody>";
                  

                  while($row = mysqli_fetch_assoc($res)){
                    $hall_name = strtoupper($row['hallname']);
                    $hall_code = strtoupper($row['hallcode']);
                    echo "<tr>
                      <td> <label class='con'><input type='radio' name='halls' value='$hall_code'><span class='checkmark'> </span></label> </td>

                    <td>". $hall_name."[".$hall_code."]" ."</td> </tr>";
                  }
                  echo "</tbody>";
                  echo " </table>";
                }

              ?>

              

            </div>

         
            <div class="col-lg-6 mb-4">
              
              <h4 class="text-center text-success">Choose Exam Courses</h4>
              
              <?php

                $sql = "SELECT * FROM courses ORDER BY course_code ASC";
                $res = mysqli_query($conn,$sql);

                if(mysqli_num_rows($res) > 0){
                  echo "<table class='table table-striped'>";
                  echo "<tbody>";
                  

                  while($row = mysqli_fetch_assoc($res)){
                    $course_name = strtoupper($row['course_name']);
                    $course_code = strtoupper($row['course_code']);
                    echo "<tr>
                      <td> <label class='cont'><input type='checkbox' name='courses[]' value='$course_code'><span class='checkmar'> </span></label> </td>

                    <td>". $course_name."[".$course_code."]" ."</td> </tr>";
                  }
                  echo "</tbody>";
                  echo " </table>";
                }

              ?>

              </div>

              <!-- Time for Exam -->
            <div class="col-lg-2 mb-4">
              
              <h4 class="text-center text-success">Choose Time</h4>

                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <td> <label class='con'><input type='radio' name='time' value='1'><span class='checkmark'> </span></label> </td>

                      <td>Morning</td>
                    </tr>

                    <tr>
                      <td><label class='con'><input type='radio' name='time' value='0'><span class='checkmark'> </span></label></td>
                      <td>Afternoon</td>
                    </tr>

                  </tbody>
                </table>

            </div>
            </form>
            </div>

          </div>

          </div>


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>








  <!-- Modal showing assigned halls and courses-->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="staticBackdropLabel">Halls & Courses</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success rounded-0" data-dismiss="modal">Exit</button>
          
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
