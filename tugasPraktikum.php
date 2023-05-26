<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
</head>
<body>
    <!-- No 1 -->
    <p>
        <h2>No 1</h2>
        <?php 
            $nama = "Viko";

            echo "Nama: $nama <br>";
            echo "Sekarang tanggal: ", date('j F Y'), "<br>";
            echo "Hasil: ";

            if (strlen($nama) == (date("j") - 2)) {
                echo "Berhasil";
            }
            else if (strlen($nama) < date("j")) {
                echo "sedikit lagi";
            }
            else {
                echo "coba lagi";
            }
        ?>
    </p>

    <!-- No 2 -->
    <p>
        <h2>No 2</h2>
    <?php 
        $group = array (
            array(
                "nama" => "Viko",
                "nim" => 499510,
                "peran" => ""),
            array(
                "nama" => "Pipi",
                "nim" => 500344,
                "peran" => ""),
            array(
                "nama" => "Popo",
                "nim" => 502335,
                "peran" => ""),
            array(
                "nama" => "Joko",
                "nim" => 500121,
                "peran" => ""),
            array(
                "nama" => "N",
                "nim" => 499938,
                "peran" => "")
        );

        for ($i = 0; $i < count($group); $i++) {
            if($group[$i]["nim"] % 2 == 0) {
                $group[$i]["peran"] = "back-end developer";
            }
            else {
                $group[$i]["peran"] = "front-end developer";
            }

            echo "nama: ", $group[$i]["nama"], "<br>";
            echo "NIM: ", $group[$i]["nim"], "<br>";
            echo "Peran: ", $group[$i]["peran"], "<br><br>";
        }
    ?>
    </p>

    <!-- No 3 -->
    <p>
        <h2>No 3</h2>
        <?php
            $nama = "Viko";
            $listKota = array(
                "Lampung", "Riau", "Jambi", "Bengkulu", "Makassar",
                "Kendari", "Gorontalo", "Samarinda", "Papua", "Nusa Tenggara Barat"
            );
            $dapatKota = false;

            for ($i = 0; $i < strlen($nama); $i++) {
                if ($dapatKota) {
                    break;
                }

                foreach ($listKota as $kota) {
                    if (strtolower($nama[$i]) == strtolower($kota[0])) {
                        echo "$nama akan ditempatkan di $kota";
                        $dapatKota = true;
                        break;
                    }
                }
            }

            if ($dapatKota == false) {
                echo "$nama akan ditempatkan di Jawa Timur";
            }

        ?>
    </p>
</body>
</html>