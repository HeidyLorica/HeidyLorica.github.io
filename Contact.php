<?php

if (isset ($_POST ['email']) && $_POST['email'] !='') {

   if (filter_var($_POST ['email'], FILTER_VALIDATE_EMAIL)) {
   	$name = $_POST ['name'];
   	$email = $_POST ['email'];
   	$message = $_POST ['message'];

   	$conn = new mysql ('localhost','root','contact');
   	if ($conn ->connect_error) {
   		 die('Connection Failed: '.$conn->connect_error);
   	} else {
   		$stmt =$conn->prepare ("insert into message (name, email, message) value (?, ?, ?)");
   		$stmt->bind_param("sss", $name, $email, $message)
   		$stmt->execute();
   		echo "<script> alert ('Your message sent successfully!') </script>";
   		$stmt->close();
   		$conn->close();
   	}

   }

}
?>
