<?php

include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$sql="CREATE DATABASE IF NOT EXISTS project";
	 mysqli_query($conn,$sql);

	 //Creating Table In Database
	 $create_query="CREATE TABLE IF NOT EXISTS project.register (Usename VARCHAR NOT NULL UNIQUE,Password VARCHAR NOT NULL ,Phoneno INT NOT NULL,Email TEXT NOT NULL ,Country TEXT NOT NULL ,Gender TEXT NOT NULL,Address TEXT NOT NULL )";
	 $result1=mysqli_query($conn,$create_query);
	 if($result1){

	 } else{

	     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	
	 }

	 $inEmail = $_POST["email"];
	 $inUsername = $_POST["Username"];
	 $inPassword1 = $_POST["Password"];
   $inPhoneno = $_POST["Phoneno"];
   $inCountry = $_POST["Country"];
   $inGender = $_POST["g"];
   $inAddress = $_POST["Address"];
	 $inPassword=md5($inPassword1);
   $sql = "INSERT INTO register (Usename,Password,Phoneno,Email,Country,Gender,Address) VALUES ('$inUsername', '$inPassword',$inPhoneno , '$inEmail', '$inCountry', '$inGender', '$inAddress')";

if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
		session_start();
		$_SESSION["username"]=$inUsername;
		header('Location:http://localhost/Website%20Project/index.php');
} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    echo "Username is already taken pls try again";

}
}
mysqli_close($conn);
?>
