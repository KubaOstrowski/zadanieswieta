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
function sprawdz(){
    var tytul= document.getElementById("tytul").checked ;
    var data = document.getElementById("data").checked ;
    var cena = document.getElementById("cena").checked ;
    if (tytul == true) {
        var zapytanko = "Szukane tytuły  <input type='text' name='tytul' value=''>";
        var szukaj = "<input type='submit' value='wyszukaj'>";
        document.getElementById("div").innerHTML = zapytanko;
        document.getElementById("div2").innerHTML = szukaj;
    }
    else     if (data == true) {
        var zapytanko = "Szukane daty  <input type='text' name='data' value=''>";
        var szukaj = "<input type='submit' value='wyszukaj'>";
        document.getElementById("div").innerHTML = zapytanko;
        document.getElementById("div2").innerHTML = szukaj;
    }
    else     if (cena == true) {
        var zapytanko = "Szukane ceny  <input type='text' name='cena' value=''>";
        var szukaj = "<input type='submit' value='wyszukaj'>";
        document.getElementById("div").innerHTML = zapytanko;
        document.getElementById("div2").innerHTML = szukaj;
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
    <form action="szukaj1.php" method="post">
        <fieldset>
        <legend>szukanie sposób 1</legend>
        <label>Tytuł <input type="radio" name="opcje" value="tytul" checked></label>
        <label>Data  <input type="radio" name="opcje" value="data"></label>
        <label>Cena  <input type="radio" name="opcje" value="cena"></label><br><br>
        <input type="submit" value="wyszukaj">
      </form>
        </fieldset>
        </form>

        <form action="szukaj2.php" method="post">
        <fieldset>
        <legend>szukanie sposób 2</legend>
        <label>Tytuł <input type="radio" name="szukane" id="tytul" value="tytul" onclick="sprawdz()"></label>
        <label>Data  <input type="radio" name="szukane" id="data" value="data" onclick="sprawdz()"></label>
        <label>Cena  <input type="radio" name="szukane" id="cena" value="cena" onclick="sprawdz()"></label><br><br>
        <label id="div"></label>
        <label id="div2"></label>
      </form>
        </fieldset>
        </form>



    </article>
    <footer>
        <p>Copyright Kuba Ostrowski 2017r</p>
    </footer>

</div>
</body>
</html>