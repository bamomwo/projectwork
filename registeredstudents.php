<?php
  session_start();
  include('connect.php');
  require_once('SimpleXLSX.php');


  if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
        // function to upload students into database file in excel format
  function uploadRegisteredStudents($path)
   {
     $xlsx = new SimpleXLSX( $path );
    try {
       $conn = new PDO( "mysql:host=localhost;dbname=project", "root", "");
        // $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $sql . "<br> something went wrong " . $e->getMessage();
    }
    $stmt = $conn->prepare( "INSERT INTO registered (student_id, firstname, lastname, othername,level,programme,department) VALUES (?, ?, ?, ?,?,?,?)");
    $stmt->bindParam( 1, $student_id);
    $stmt->bindParam( 2, $firstname);
    $stmt->bindParam( 3, $lastname);
    $stmt->bindParam( 4, $othername);
    $stmt->bindParam( 5, $programme);
    $stmt->bindParam( 6, $level);
    $stmt->bindParam( 7, $department);
    foreach ($xlsx->rows() as $fields)
    {
        $student_id = $fields[0];
        $firstname = $fields[1];
        $lastname = $fields[2];
        $othername = $fields[3];
        $level = $fields[4];
        $programme = $fields[5];
        $department = $fields[6];
        if($stmt->execute()){
          $errType = "success";
        }else{
          $errType="danger"; 
        }
    }
    return $errType;
   } 

   


   // uload students

   if (isset($_POST["submit"])){
      $_SESSION['department'] = $_POST['department'];
      // $GLOBALS['deptment'] = $_POST['department'];
      
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["filetoupload"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['filetoupload']['name'];
        if(move_uploaded_file($_FILES['filetoupload']['tmp_name'], $targetPath)){
          if(uploadRegisteredStudents($targetPath) =="success"){
            $errType = "success";
            $errMsg = "Student data upload successful";
          }else{
            $errType = "danger";
            $errMsg = "Error Occured. Check Duplicate student Id";
          }

        }else{
          echo("erro occured uploading file");
        }
          
         }
  
  else
  { 
        $errType = "error";
        $errMsg = "Invalid File Type. Upload Excel File.";
        
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
                    if($errType == "danger"){
                      echo("
                      <div class='alert alert-danger alert-dismissible fade show rounded-0' role='alert'>
                  <strong>$errMsg</strong>
                  
                  <a href='undo.php' type='button' class='btn btn-warning btn-sm float-right'>Undo</a>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                      ");
                    }else{
                      echo("
                      <div class='alert alert-success alert-dismissible fade show rounded-0' role='alert'>
                  <strong>$errMsg</strong>
                  
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                      ");
                    }
                  }


                  if(isset($_SESSION['undoErrType'])){
                    $undoErrType = $_SESSION['undoErrType'];
                    $undoErrMsg = $_SESSION['undoErrMsg'];
                    echo("
                      <div class='alert alert-$undoErrType alert-dismissible fade show rounded-0' role='alert'>
                  <strong>$undoErrMsg</strong>
                  
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                      ");
                  }

                ?>
         
        
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-center text-gray-800">UPLOAD REGISTERED STUDENTS FOR EXAMS</h1>
          </div>

          
          

            

          

          <!-- Content Row -->


          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success">Upload Registered Students</h6>
                </div>
                <div class="card-body">
                    <form  method="POST" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Department</label>
                          <select class="custom-select rounded-0" name="department" id="inputGroupSelect01" required>
                            <option selected>Select Department</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Satistics">Satistics</option>
                            <option value="Biochemistry">Biochemistry</option>
                            <option value="Earth Science">Earth Science</option>
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
                  <h6 class="m-0 font-weight-bold text-success">Registered Departments</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                <thead>
                  <tr>
                    <td>#</td>
                    <td>Department</td>
                  </tr>
                </thead>
                <tbody>


              <?php
              $i = 1;
              $sql = "SELECT DISTINCT (department) FROM registered";
              $res = mysqli_query($conn, $sql);
              $counter = mysqli_num_rows($res);
              
              if(mysqli_num_rows($res) > 0){

                while($row = mysqli_fetch_assoc($res) and $i <= $counter){
                    $dep = $row['department'];
                    
                  echo"
                    <tr>
                      <td> $i </td>
                      <td> $dep</td>
                    </tr>
                  ";
                  $i++;
                }
              }

              ?>

              </tbody>
              </table>
                </div>
              </div>

            </div>
          </div>

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
