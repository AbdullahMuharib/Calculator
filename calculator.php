<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="http://localhost/Code/calculator.php">
    <input type="Number" name="x">
    <br><br>
    <input type="Number" name="y">

    <input type="submit">

    </form>
   
    <?php
    $x=$_GET["x"];
    $y=$_GET["y"];

    echo $x;
    echo "<br>";
    echo $y;

    ?>
</body>
</html>