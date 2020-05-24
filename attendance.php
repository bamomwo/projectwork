<?php
    session_start();
    require("connect.php");

    if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
      $code = $_GET['q'];
      //Label  Heading

      echo('

        <div class="text-center">
          <h4 class="text-success"> Attendance Report For '.$code.'</h4>

        </div>
        <hr>

      ');

      // Creating Table

        echo('
          <table class="table table-bordered id="example" style="width:100%;"">
            <thead>
              <tr>
                <th>Student Name</th>
                <th>Student ID</th>
                <th>Serial No</th>
                <th>Sign</th>
                <th>Remarks</th>
              </tr>
            </thead>
            <tbody>



        ');


        $stmt= $conn->prepare("SELECT seatnumbers.student_id, firstname, lastname, othername FROM seatnumbers INNER JOIN registered ON seatnumbers.student_id = registered.student_id WHERE seatnumbers.course_code = ?");
        $stmt->bind_param("s", $code);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($sid,$fname,$lname,$oname);

        while($stmt->fetch()){
          echo('
                <tr>
                  <td>'.$fname .' '.$lname .' '.$oname .'</td>
                  <td>'.$sid.'</td>
                  <td></td>
                  <td></td>
                  <td></td>
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
