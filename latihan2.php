<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Looping</title>
</head>
<body>
    <h2>Membuat perulangan tabel</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($b=1; $b<=10; $b++){
            echo "<tr>";
            for ($k=1; $k<=8; $k++){
                echo "<td> $b,$k </td>";
            }
            echo "<tr>";
        }
        ?>
</body>
</html>