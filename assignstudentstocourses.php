<?php
  session_start();
  include("connect.php");
  if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
      if(isset($_POST['submit'])){
     
     if(!empty($_POST['level']) &&  !empty($_POST['course']) && !empty($_POST['programme'])){

      $level = $_POST['level'];
      $course = $_POST['course'];
      $programmes = $_POST['programme'];
      $writtendate = $_POST['writtendate'];


      foreach($programmes as $programme){

          $sql = $conn->prepare("INSERT INTO coursesprogrammes(course_code, programme,level,writtendate) VALUES(?, ?,?,?)");

          $sql->bind_param('ssis',$course,$programme,$level,$writtendate);
          $sql->execute();

          if($sql->affected_rows > 0){
            $errType ="success";
            $errMsg = "Courses Assigned To Programmes successful";
          }else{
            $errType = "danger";
            $errMsg = "Error Occured Assigning Courses To Programmes";
          }
        }
      
      // $p = implode($programme);
      // $sql = "SELECT * FROM registered WHERE  level = '$level' AND programme IN ('$p')";

      // $res = mysqli_query($conn, $sql);
      // if(mysqli_num_rows($res) > 0){
      //   while($row = mysqli_fetch_assoc($res)){

      //     var_dump($row);
      //   }
      // }else{
      //   echo("No data to fetch");
      // }
      
     }else{
      echo("error occured");
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
         
        <form method="POST" action="">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0  text-gray-800">STUDENTS TO COURSES</h1>
            <label>Exam Date</label>
            <input type="date" class="form-control col-2 rounded-0" name="writtendate" required>
            <input type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success rounded-0  shadow-sm" name="submit" value="Assign Programmes to Courses" >
          </div>

          <div class="row">


            <!-- Choose Level -->
            <div class="col-sm-2">
              <table class='table table-hover'>
                <thead>
                  <th></th>
                  <th>Level</th>
                </thead>
                <tbody>
              <?php
                  $level = "SELECT * FROM level";
                  $levelres = mysqli_query($conn, $level);
                  if(mysqli_num_rows($levelres) > 0){

                    while($row = mysqli_fetch_assoc($levelres)){
                      $lev = $row['level'];
                      echo"<tr>";
                      echo"<td> <label class='con'><input type='radio' name='level' value='$lev'><span class='checkmark'> </span></label> </td>";
                      echo"<td>".$lev."</td>";
                      echo"</tr>";
                    }
                  }
                  
              ?>

                </tbody>
              </table>  
            </div>


            <!-- Choose Course to be written -->
            <div class="col-sm-6">
              <table class='table table-hover'>
                <thead>
                  <th></th>
                  <th>Select Course</th>
                </thead>
                <tbody>
              <?php
                  $course = "SELECT * FROM courses";
                  $courseres = mysqli_query($conn, $course);
                  if(mysqli_num_rows($courseres) > 0){

                    while($row = mysqli_fetch_assoc($courseres)){
                      $course_code = $row['course_code'];
                      echo"<tr>";
                      echo"<td> <label class='con'><input type='radio' name='course' value='$course_code'><span class='checkmark'> </span></label> </td>";
                      echo"<td>".strtoupper($row['course_name'])." - ".strtoupper($course_code)."</td>";
                      echo"</tr>";
                    }
                  }
                  
              ?>

                </tbody>
              </table>
            </div>


            <!-- Choose Programmes writting that course -->
            <div class="cols-sm-4">
              <table class='table table-hover'>
                <thead>
                  <th></th>
                  <th>Select Programme(s)</th>
                </thead>
                <tbody>
              <?php
                  $prog = "SELECT * FROM programme";
                  $progres = mysqli_query($conn, $prog);
                  if(mysqli_num_rows($progres) > 0){

                    while($row = mysqli_fetch_assoc($progres)){
                      $programme = $row['programme_name'];
                      echo"<tr>";
                      echo"<td> <label class='cont'><input type='checkbox' name='programme[]' value='$programme'><span class='checkmar'> </span></label> </td>";
                      echo"<td>".strtoupper($row['programme_name'])."</td>";
                      echo"</tr>";
                    }
                  }
                  
              ?>
                </tbody>
              </table>
            </div>
          </div>

        </form>

          
          

            

          



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


    
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

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
