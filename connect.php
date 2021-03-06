<?php
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $number = $_POST['number'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $interest = $_POST['interest'];

  //database connection
  $conn = new mysqli('localhost','root','','band');
  if ($conn->connect_error){
  	  die('Connection failed : ' .$conn->connect_error);
      }else{
      	$stmt = $conn->prepare("insert into registration(firstname, lastname, email, password, number, dob, gender, interest) values(?, ?, ?, ?, ?, ?, ?, ?)");
      	$stmt->bind_param("ssssiiss",$firstname, $lastname, $email, $password, $number, $dob, $gender, $interest);
      	$stmt->execute();
      	echo "registration Succesfully...";
      	$stmt->close();
      	$conn->close();
      }


?>