<?php
require ('funktsioonid.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tabel valimised funktsioonidega</title>
</head>
<body>
<h1>tabel valimised kirjutatud funktsioonide abil</h1>
<table>
    <tr>
        <th>Nimi</th>

        <th>Punktid</th>

        <th>+1 punkt</th>

    </tr>
    <?php
    //funktsioon mis naitab tabeli asub funktsioonid.php failis
     naitatabel()
    ?>
</table>
</body>
</html>
