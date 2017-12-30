<?php
include_once ('usun.php');
$id = $_GET['del'];
$conn = mysqli_connect("localhost","root","","BOOKLAND");
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} 
$sql= "DELETE FROM `ksiazki` WHERE `id_ksiazki` = '$id'";
if ($conn->query($sql) === TRUE) {} 
else {echo "Error: " . $sql . "<br>" . $conn->error;}
$conn->close();
echo "<meta http-equiv='refresh' content='0;url=usun.php'>";
?>       