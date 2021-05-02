<?php 
 
 $con = mysqli_connect ('localhost', 'root', '');
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, 'insertion'))
 {
	 echo 'database not selected';
 }

 $faculty_Name = $_POST['falname'];
 $Designation = $_POST['Designation'];
 
 $sql = "INSERT INTO faculty (faculty_Name, Designation) VALUES ('$faculty_Name', '$Designation')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not inserted';
 }
 else 
 {
	 echo '<script type="text/javascript">
                      alert("New faculty Added!");
                         location="home.php";
                           </script>';
 }


?>