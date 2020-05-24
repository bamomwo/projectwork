<?php
    session_start();
    require("connect.php");

    if(isset($_SESSION['username']) && !empty($_SESSION['username'])){

      // Creating Table

        echo('
          <table class="table table-striped id="example" style="width:100%;"">
            <thead>
              <tr>
                <th>Student ID</th>
                <th>Row No</th>
                <th>Column No</th>
                <th>Course Code</th>
              </tr>
            </thead>
            <tbody>



        ');

        $code = $_GET['q'];
        $stmt= $conn->prepare("SELECT rowNo, columnNo, student_id FROM seatnumbers WHERE course_code = ?");
        $stmt->bind_param("s", $code);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($rowNo, $columnNo,$sid);

        while($stmt->fetch()){
          echo('
                <tr>
                  <td>'.$sid.'</td>
                  <td>'.$rowNo.'</td>
                  <td>'.$columnNo.'</td>
                  <td>'.$code.'</td>
                </tr>
          ');
        }

        echo('
            </tbody>
            </table>
        ');

    }else{
      header("Location: logout.php");
    }


 ?>
