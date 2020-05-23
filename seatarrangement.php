<?php
  session_start();
  require('connect.php');


  if(isset($_SESSION['username'])&& !empty($_SESSION['username'])){
    $hell = "";
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
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css
">
<link rel="stylesheet"  href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css
">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">SEAT ASSIGNMENT</h1>
          
          </div>

          
          

            

          <div class="row">


            <div class="col-xl-12 col-lg-6 mx-auto">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                	<?php 
                	$currenthall = $_GET['id'];
                  // echo($_SESSION['currenthall']);
                  $_SESSION['currenthall'] = $currenthall;
                		$stmt = $conn->prepare("SELECT capacity FROM examhalls WHERE hallcode = ?");
                		$stmt->bind_param('s',$currenthall);
                		$stmt->execute();
                		$stmt->store_result();
                		$stmt->bind_result($hall);

                		$stmt->fetch();

                	 ?>

                  <h6 class="m-0 font-weight-bold text-primary">Seat Assignment Configuration for <?php echo($_GET['id']); ?> </h6>
                 <small><span class="float-right  text-primary font-weight-bold">Hall Capacity - <?php echo("<span class='text-danger'> $hall</span>"); ?></span></small>


                </div>


                <!-- Card Body -->
                <div class="card-body m-0 p-0">

                    
                	
                  	<?php 
                  		$stmt = $conn->prepare("SELECT course_code FROM hallscourses WHERE hall_code = ? AND writtendate = ?");
                  		$stmt->bind_param("ss", $currenthall,$date);
                  		$stmt->execute();
                  		$stmt->store_result();
                  		$stmt->bind_result($course_code);

                  	 ?>

			<div class="row p-0 ">
				<div class="col-xl-2 ">
					<ul class="list-group ">
					  <?php 
					  	while ($stmt->fetch()) {
					  		echo('<li class="list-group-item"><button class="btn btn-default text-primary" value="'.$course_code.'"  onclick="showResult(this.value);">'. $course_code.'</button></li>');
					  	}
					   ?>

             <li class="list-group-item"><button class="btn btn-default text-danger p-2" value="hello" onclick="progAssign(this.value);">View Details</button></li>
					</ul>

				</div>
				<div class="col-xl-4" id="livesearch">

				</div>
				<div class="col-xl-6" id="progdetails">

				</div>
			</div>
                  	 
           </div>
              </div>
            </div>



          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



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
  <script src="js/demo/programme.js"></script>
  <!-- <script src="js/demo/progdetails.js"></script> -->
  <script src="js/demo/progassign.js"></script>


</body>

</html>
