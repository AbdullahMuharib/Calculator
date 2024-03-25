<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Official  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="http://localhost/Code/calculator.php">
    <span>Number 1:</span><input type="Number" name="x">
    <br>
    <span>Paramater:</span><input type="text" name="p">
    <br>
    <span>Number 2:</span><input type="Number" name="y">
    <br><br>
    <input type="submit">

    </form>
    <br>
    <?php
    $x=$_POST["x"];
    $p=$_POST["p"];
    $y=$_POST["y"];
    $r;

    
    switch ($p) {
        case '+':
            $r=$x+$y;
            break;
        case '-':
            $r=$x-$y;
            break;
        case '*':
            $r=$x*$y;
            break;
        case '/':
            $r=$x/$y;
            break; 
        case '%':
            $r=$x%$y;
            break;  
        case '**':
            $r=$x**$y;
            break;         
        
        default:
            echo "Parameter shoulde be (+,-,*,/,**,%)";
            break;
    }
    if(!empty($r)){

  
    echo "The Resulut of Your calculation is : <h2><strong>".$r."</strong></h2>";
    
    }         

     
    ?>
</body>
</html>