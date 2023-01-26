<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strong Password Generator</title>
    </head>
    <body>
        <form action="index.php" method="get">
        <label for="length">Inserisci la lunghezza della password (min 8 caratteri):</label>
        <input type="number" id="length" name="length" min="8" max="32">
        <input type="submit">
    </form>

    <?php
        if(isset($_GET['length'])) {
            $length = $_GET['length'];
            $characters = array_merge(range('a','z'), range('A','Z'), range(0,9), array('!','@','#','$','%','^','&','*'));
            $password = "";
            for($i = 0; $i < $length; $i++) {
                $password .= $characters[array_rand($characters)];
            }
            echo "La tua password: " . $password;
        }
    ?>
    </body>
</html>