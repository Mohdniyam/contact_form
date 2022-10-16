<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//Data conncet
$conn = new mysqli('localhost', 'root', 'test');
if($conn->connection_error){
  die('Connection Failed : .$conn->connect_error');
}
else{
  $stmt=$conn->prepare("select * contact_form(name, email, message) values(?, ?, ?) ");
  $stmt->bind_param("sss",$name, $email, $message);
  $stmt->execute();
  echo "Registration Successfully...."; 
  $smpt->close();
  $conn->close();
}

?>
