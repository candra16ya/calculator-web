<?php
 if (isset($_GET['operation'])) {
    $x = $_GET['num1'];
    $y = $_GET['num2'];
    $op = $_GET['operation'];

    switch ($op) {
        case '+': $result = $x + $y;
            break;
        case '-': $result = $x - $y;
            break;
        case 'x': $result = $x * $y;
            break;   
        case '/': $result = $x / $y;
            break;  

    }
 }
?>

<!DOCTYPE html>
<html>
<head>
    <title>CALCULATOR</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <h1 id="_judul">CALCULATOR</h1>
</header>

<body>
    
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">

        <input name="num1" value="<?php echo $x; ?>" id="n1"  placeholder="First Number"><br>
        <input name="num2" value="<?php echo  $y; ?>" id="n2" placeholder="Second Number"><br>
        <input type="submit" name="operation" value="+" id="subplus" >
        <input type="submit" name="operation" value="-" id="subminus">
        <input type="submit" name="operation" value="x" id="subperkalian">
        <input type="submit" name="operation" value="/" id="subpembagian"><br>
        <br><input type='text' id="result" placeholder="Result" value="<?php echo $result; ?>" disabled><br>

    </form>

</body>
</html>