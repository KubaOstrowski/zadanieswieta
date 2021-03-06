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
if (isset($_REQUEST['szukane']))
{
    $szukane = $_REQUEST["szukane"];
    if($szukane === "tytul")
    {
        $tytul   = $_REQUEST["tytul"];
        $connect = mysqli_connect("localhost","root","","BOOKLAND");
        if($connect){
            $wynik=mysqli_query($connect, "SELECT * FROM `ksiazki` WHERE `tytul` LIKE '%$tytul%' ORDER BY `id_ksiazki` ASC  ");
            $ile = mysqli_num_rows($wynik);
            if($ile>0) {
                echo "<table border='1'>
                <tr>
                <th>ID</th>
                <th>Tytuł</th>
                <th>Data wydania</th>
                <th>Cena</th>
                </tr>";
                for($i=1;$i<=$ile;$i++)
                {
                    $wiersz = mysqli_fetch_assoc($wynik);
                    $id=$wiersz["id_ksiazki"];    
                    $nazwa=$wiersz["tytul"];
                    $data=$wiersz["data_wydania"];
                    $cena=$wiersz["cena"];     
                    echo "<tr>";
                    echo "<td>".$id."</td>"; 
                    echo "<td>".$nazwa."</td>";
                    echo "<td>".$data."</td>";
                    echo "<td>".$cena."zł </td>";
                 } 
                echo "</table>";
            } else echo "zapytanie nie zwrociło rekordu";
        }      
        else echo "Brak połaczenia z bazą";
        mysqli_close($connect);
    }
    else if($szukane === "data")
    {
        $data   = $_REQUEST["data"];
        $connect = mysqli_connect("localhost","root","","BOOKLAND");
        if($connect){
            $wynik=mysqli_query($connect, "SELECT * FROM `ksiazki` WHERE `data_wydania` LIKE '%$data%' ORDER BY `id_ksiazki` ASC  ");
            $ile = mysqli_num_rows($wynik);
            if($ile>0) {
                echo "<table border='1'>
                <tr>
                <th>ID</th>
                <th>Tytuł</th>
                <th>Data wydania</th>
                <th>Cena</th>
                </tr>";
                for($i=1;$i<=$ile;$i++)
                {
                    $wiersz = mysqli_fetch_assoc($wynik);
                    $id=$wiersz["id_ksiazki"];    
                    $nazwa=$wiersz["tytul"];
                    $data=$wiersz["data_wydania"];
                    $cena=$wiersz["cena"];     
                    echo "<tr>";
                    echo "<td>".$id."</td>"; 
                    echo "<td>".$nazwa."</td>";
                    echo "<td>".$data."</td>";
                    echo "<td>".$cena."zł </td>";
                 } 
                echo "</table>";
            } else echo "zapytanie nie zwrociło rekordu";
        }      
        else echo "Brak połaczenia z bazą";
        mysqli_close($connect);
    }
    else if($szukane === "cena")
    {
        $cena   = $_REQUEST["cena"];
        $connect = mysqli_connect("localhost","root","","BOOKLAND");
        if($connect){
            $wynik=mysqli_query($connect, "SELECT * FROM `ksiazki` WHERE `cena` LIKE '%$cena%' ORDER BY `id_ksiazki` ASC  ");
            $ile = mysqli_num_rows($wynik);
            if($ile>0) {
                echo "<table border='1'>
                <tr>
                <th>ID</th>
                <th>Tytuł</th>
                <th>Data wydania</th>
                <th>Cena</th>
                </tr>";
                for($i=1;$i<=$ile;$i++)
                {
                    $wiersz = mysqli_fetch_assoc($wynik);
                    $id=$wiersz["id_ksiazki"];    
                    $nazwa=$wiersz["tytul"];
                    $data=$wiersz["data_wydania"];
                    $cena=$wiersz["cena"];     
                    echo "<tr>";
                    echo "<td>".$id."</td>"; 
                    echo "<td>".$nazwa."</td>";
                    echo "<td>".$data."</td>";
                    echo "<td>".$cena."zł </td>";
                 } 
                echo "</table>";
            } else echo "zapytanie nie zwrociło rekordu";
        }      
        else echo "Brak połaczenia z bazą";
        mysqli_close($connect);
    }
}
?>
    </article>
    <footer>
        <p>Copyright Kuba Ostrowski 2017r</p>
    </footer>

</div>
</body>
</html>



