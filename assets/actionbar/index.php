<?php
    if(isset($_POST['submit'])){
        $true = true;
        $errors = array();

        if(empty($_POST['search'])){
            $true = false;
            array_push($errors, "A kereséshez ki kell töltened a mezőt!");
        }

        if($true) {
            header('location: /view.php?userid='.$_POST['search']);
        }
    }
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <div class="bar">
        <form action="index.php" method="POST">
            <input type="number" name="searc" id="search" placeholder="Egyedi azonosító"><input type="submit" name="submit" value="Keresés">
        </form>
    </div> -->
</body>
</html>