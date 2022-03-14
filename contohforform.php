<!DOCTYPE html>
<html lang="en">
<head>
        <title>Contohforform</title>
</head>
<body>
    Menggunakan for didalam form
    <br><br>
    <?php
        echo"<form name=form1 method=post>";
        echo"tanggal";
        echo"<select name=tanggal>";
        for ($tanggal=1;$tanggal<=31;$tanggal++)
        {
            echo"<option value=".$tanggal.">".$tanggal."</option>";
        }
        echo"</select>";
        echo"</form>";
    ?>
</body>
</html>