<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php

        $stringa = $_GET['str'];
        $stampa = '';

        if($stringa === "Boolean") {
            $stampa = "<span style='color: green;'>" . $stringa . "</span>";
        } else {
            $stampa = "<span style='color: red;'>" . $stringa . "</span>";
        }

    ?>



</head>
<body>

    <h1>

        <?php

            echo $stampa
            
        ?>

    </h1> 
        
    
</body>
</html>