<?php
include("connection.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{session_start();
   $inUsername = $_POST["Username"];
   $inPassword1 = $_POST["Password"];
   $inPassword=md5($inPassword1);
   $query="SELECT * from register where Usename='$inUsername' and Password='$inPassword'";
   $result = mysqli_query($conn, $query);
   $num=mysqli_num_rows($result);
   if($num==0){
     echo "<br>";
       echo "No Records Found You are not registered with us pls try again:";
     }
     if($num>0){
   $sql = "DELETE FROM register WHERE Usename='$inUsername' and Password='$inPassword'";
   if(mysqli_query($conn, $sql)){
     echo "<br>";
       echo "Your data has been successfully deleted";
       $_SESSION["Success"]="Your data has been successfully deleted";
       header('Location:http://localhost/projectdb/animation.php');
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
       echo "<br>";
       echo "pls try again";
       $_SESSION["Error"]="ERROR: Could not able to execute $sql. " . mysqli_error($conn);
       header('Location:http://localhost/projectdb/animation.php');
   }
}
   }
   mysqli_close($conn);
 ?>
