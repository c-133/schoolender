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

 $Subject_Name = $_POST['subname'];
 $Subject_Days = $_POST['subdays'];
 $Subject_Color = $_POST['subcolor'];
 $Subject_Time = $_POST['subTime'];
 
 $sql = "INSERT INTO subject (Subject_Name, Subject_Days, Subject_Color, Subject_Time) VALUES ('$Subject_Name', '$Subject_Days', '$Subject_Color', '$Subject_Time')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not inserted';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("New Subject Added!");
                         location="home.php";
                           </script>';
 }
 

?>
