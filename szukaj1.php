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
if (isset($_REQUEST['opcje']))
{
    $szukane= $_REQUEST["opcje"];
    if($szukane === "tytul")
    {
echo <<<END
        <form action='szukaj2.php' method='POST'>
        Jakiego tytułu szukasz: <input type='text' name="tytul" id='tytul'>&nbsp
        <input type='hidden' id='szukane' name="szukane" value='$szukane'>
        <input type='submit' value='szukaj'>
        </form>
END;
    }
    else if($szukane === "data")
    {
        echo <<<END
        <form action='szukaj2.php' method='POST'>
        Jakiej daty wydania szukasz: <input type='text' name="data" id='data'>&nbsp
        <input type='hidden' id='szukane' name="szukane" value='$szukane'>
        <input type='submit' value='szukaj'>
        </form>
END;
    }
    else if($szukane === "cena")
    {
        echo <<<END
        <form action='szukaj2.php' method='POST'>
        Jakiej ceny szukasz: <input type='text' name="cena" id='cena'>&nbsp
        <input type='hidden' id='szukane' name="szukane" value='$szukane'>
        <input type='submit' value='szukaj'>
        </form>
END;
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



