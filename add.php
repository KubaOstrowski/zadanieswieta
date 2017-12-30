<?php
$id   = $_REQUEST["id"];
$tytul= $_REQUEST["tytul"];
$data = $_REQUEST["data"];
$cena = $_REQUEST["cena"];
$s    = $_REQUEST["s"];
$cena1 = str_replace(",",".",$cena);
if ($s==1)
{
    $conn = mysqli_connect("localhost","root","","BOOKLAND");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "UPDATE `ksiazki` SET `tytul` = '$tytul',`data_wydania` = '$data', `cena` = '$cena1' WHERE `ksiazki`.`id_ksiazki` = $id";
    if ($conn->query($sql) === TRUE) {} 
        echo "<meta http-equiv='refresh' content='0;url=popraw.php'>";
}
else if($s==0)
{
    $conn = mysqli_connect("localhost","root","","BOOKLAND");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "INSERT INTO `ksiazki` (`id_ksiazki`, `tytul`, `data_wydania`, `cena`) VALUES ('$id', '$tytul', '$data', '$cena1')";
    if ($conn->query($sql) === TRUE) {}
        echo "<meta http-equiv='refresh' content='0;url=dodaj.php'>";
}   
$conn->close();
?>       