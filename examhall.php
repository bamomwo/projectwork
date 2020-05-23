<?php
  session_start();
  require('connect.php');

  if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
        if(isset($_POST['submit'])){
            $hallname = $_POST['hallname'];
            $hallcode = $_POST['hallcode'];
            $hallrows = $_POST['hallrows'];
            $hallcolumns = $_POST['hallcolumns'];

            $stmt = $conn->prepare("INSERT INTO examhalls(hallname, hallcode, hallrows, hallcolumns)VALUES(?, ?, ?, ?)");
            $stmt->bind_param("ssii", $hallname, $hallcode, $hallrows, $hallcolumns);
            $stmt->execute();
            if($stmt->affected_rows > 0){
              $errType ="success";
              $errMsg = "Halls Inserted";
            }else{
              $errType = "danger";
              $errMsg = "An Error Occured. Try Again";
            }
        }
    
  }else{
    header("Location:index.php");
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

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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

          <h1 class="h3 mb-4 text-gray-800">Exam Halls & Capacity</h1>
        <div class="row">
          <div class="col-lg-7 mb-4">

          
          
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Avialable Examination Halls</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Code</th>
                      <th>Capacity</th>
                    </tr>
                  </thead>

                  <tbody>
                      <?php

                        $sql = "SELECT * FROM examhalls";
                        $res = mysqli_query($conn,$sql);

                        if(mysqli_num_rows($res) > 0){
                         
                          

                          while($row = mysqli_fetch_assoc($res)){
                            $hallname = strtoupper($row['hallname']);
                            $hallcode = strtoupper($row['hallcode']);
                            $capacity = strtoupper($row['capacity']);
                            echo "<tr>
                                 <td>". $hallname ."</td>
                                 <td>".$hallcode."</td>
                                 <td>".$capacity."</td>
                                </tr>";
                          }
                          
                        }

              ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        
        </div>

        <div class="col-lg-5">
          
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Register Exam Hall</h6>
            </div>
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
            <div class="card-body">
              <div class="table-responsive">
                  
                <form method="POST" action="" >
                      <div class="form-group">
                        <label for="exampleInputUsername1">Hall Name</label>
                        <input type="text" name="hallname" class="form-control rounded-0"  placeholder="Hall Name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Hall Code</label>
                        <input type="text" name="hallcode" class="form-control rounded-0"  placeholder="Hall Code" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Rows</label>
                        <input type="number" name="hallrows" class="form-control rounded-0"  placeholder="Number Of Rows" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Columns</label>
                        <input type="number" name="hallcolumns" class="form-control rounded-0"  placeholder="Number Of Columns" required>
                      </div>
                      <div class="form-group">
                        <input type="submit" class="btn btn-success btn-block rounded-0" name="submit" value="Insert Exam Hall">
                      </div>
                      
                </form>


              </div>
            </div>
          </div>

        </div>
      </div>

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
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
