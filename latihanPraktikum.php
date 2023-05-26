<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        echo "Hell World <br><br>";
        $animals = array("cat", "dog", "panda", "t-rex");
        foreach ($animals as $value) {
            if ($value == "cat" || $value == "t-rex") {
                echo "$value <br>";
            }
        }

        $animals = array (
            array(
                "name" => "lion",
                "class" => "mammal",
                "diet" => "carnivore"),
            array(
                "name" => "goat",
                "class" => "mammal",
                "diet" => "herbivore"),
            array(
                "name" => "penguin",
                "class" => "bird",
                "diet" => "carnivore")
        );

        for ($i = 0; $i < count($animals); $i++) {
            if ($animals[$i]["class"] == "mammmal") {
                echo $animals[$i]["name"];
            }
        }

        echo $animals[0]["class"];
    ?>
</body>
</html>