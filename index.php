<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Portfolio Benjamin Koch</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php
        require "header.php";
        if(isset($_GET["x"]))
        {
            $x=$_GET["x"];
            require "php/".$x.".php";
        }
        else
            require "php/acceuil.php";
        require "footer.php";
    ?>
</body>
</html>