<?php
session_start();
include("connection.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $inUsername = $_POST["Username"];
  $inPassword1 = $_POST["Password"];
  $inPassword=md5($inPassword1);
  $query="SELECT Usename , Password from register where Usename='$inUsername' and Password='$inPassword'";
  $result = mysqli_query($conn, $query);
  $num=mysqli_num_rows($result);
  if($num>0){
       while($row=mysqli_fetch_assoc($result)){
           if($row['Usename']==$inUsername and $row['Password']==$inPassword){

             echo "successfully loged in";
             $_SESSION['username']=$inUsername;
              $_SESSION['success']="Logged In";
             header("Location:http://localhost/Website%20Project/index.php");
           }

             echo "<br>";
       }
   }
   if($num==0){
       echo "No Records Found You are not registered with us pls try again:";
       header("Location:http://localhost/Website%20Project/Log_in.html");
     }
}
mysqli_close($conn);
 ?>
