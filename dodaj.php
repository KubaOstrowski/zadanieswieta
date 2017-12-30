<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KSIEGARNIA</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <script>
    function sprawdz() {
    var tytul = document.getElementById("tytul").value;
    var data = document.getElementById('data').value;
    var cena = document.getElementById('cena').value;
    var dlugosc = tytul.length;
    var Vcena = /^[0-9]{1,}\,[0-9]{2}$/ ;
    var Vdata = /^(19[0-9][0-9]|20[0-9][0-9]|2100)[-](0?[1-9]|1[0-2])[-](0?[1-9]|[12][0-9]|3[01])$/;
    var a = 1;
    var b = 1;
    var c = 1;
    if(dlugosc >= 4)
    {var a = 1;}
    else{var a = 0;}
    if (Vdata.test(data))
    {var b = 1;}
    else{var b = 0;}
    if (Vcena.test(cena)) 
    { var c = 1;}
    else {var c = 0;}

	if (a =="0" && b =="0" && c =="0")
	{
	alert("Wszystkie pola są błednie wypełnione");
	return false;
	}
	else if(a =="0" && b !="0" && c !="0" ){
	alert("pole tytułu jest błednie wypełnione");
	return false;
	}
	else if(a !="0" && b =="0" && c !="0" ){
	alert("pole daty jest błednie wypełnione");
	return false;
	}
	else if(a !="0" && b !="0" && c =="0" ){
	alert("pole ceny jest błednie wypełnione");
	return false;
	}
	else if(a =="0" && b =="0" && c !="0" ){
	alert("pola tytuł i data są błednie wypełnione");
	return false;
	}
	else if(a =="0" && b !="0" && c =="0" ){
	alert("pola tytuł i cena są błednie wypełnione");
	return false;
	}
	else if(a !="0" && b =="0" && c =="0" ){
	alert("pola data i cena są błednie wypełnione");
	return false;
	}
	else if(a !="0" && b !="0" && c !="0") {
    return true;    
    }
    } 
    </script>
<div id="contener">
    <header>
        <h3>KSIEGARNIA INTERNETOWA BOOKLAND</h3>
    </header>
    <nav>
        <p>Menu:</p>
        <ul>
            <a href="index.php"><li>Strona główna</li></a>
            <a href="szukaj.php"><li>Szukaj</li></a>
            <a href="pokaz.php"><li>Pokaż</li></a>
            <a href="dodaj.php"><li>Dodaj</li></a>
            <a href="usun.php"><li>Usuń</li></a>
            <a href="popraw.php"><li>Popraw</li></a>
        </ul>
    </nav>
    <article>
        <?php
        $conn = mysqli_connect("localhost","root","","BOOKLAND");
        if (isset($_GET['edit']))
        {
            $id = $_GET['edit'];
            $zap = "SELECT * FROM `ksiazki` WHERE `id_ksiazki` = '$id' ";
            $res = mysqli_query($conn,$zap);
            $row = mysqli_fetch_array($res,MYSQLI_NUM);
            $cena1 = str_replace(".",",",$row[3]);
    
        }
        if (isset($_GET['s'])){
        $s = $_GET['s'];
        }
        ?>
        <form action="add.php" onsubmit="return sprawdz()"  method="post">
        <fieldset>
        tytuł:<br>
        <input type="text" id="tytul" name="tytul" value="<?php if(isset($_GET['edit'])) {echo $row[1]; } else {echo '';}?>" placeholder="Tytuł"><br>
        data napisania:<br>
        <input type="text" id="data" name="data" value="<?php if(isset($_GET['edit'])) {echo $row[2]; } else {echo '';}?>" placeholder="2000-01-01"><br>
        Cena:<br>
        <input type="text" id="cena" name="cena" value="<?php if(isset($_GET['edit'])) {echo $row[3]; } else {echo '';}?>" placeholder="0.00"><br><br>
        <input type="hidden" name="id" value="<?php if(isset($_GET['edit'])) {echo $id;}  else {echo '0';}?>">
        <input type="hidden" name="s" value="<?php if(isset($_GET['s'])) {echo $s;}  else {echo '0';}?>">
        <input type="submit" value="Submit">
      </fieldset>
    </form>
    </article>
    <footer>
        <p>Copyright Kuba Ostrowski 2017r</p>
    </footer>

</div>
</body>
</html>