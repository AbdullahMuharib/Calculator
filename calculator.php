<!DOCTYPE html>
<html lang="en">
<head>
    <!--  HIIIIIIIedwedwIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculator</h1><form method="get" action="http://localhost/Code/calculator.php">
    <span>Number1:</span><input type="Number" name="x">
    <br>
    <span>Parameter:</span><input type="text" name="p">
    <br>
    <span>Number2:</span><input type="Number" name="y">
    <br>
    <input type="submit">

    </form>
   
    <?php
    $x=$_GET["x"];
    $y=$_GET["y"];
    $p=$_GET["p"];
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
    echo "The Resulut of Your calculator is :".$r;

    }
         
    ?>
</body>
</html>