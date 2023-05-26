<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
</head>
<body>
    <?php 
        $nama = "Viko";

        if (strlen($nama) == (date("d") - 2)) {
            echo "Berhasil";
        }
        else if (strlen($nama) < date("d")) {
            echo "sedikit lagi";
        }
        else {
            echo "coba lagi";
        }
    ?>
</body>
</html>