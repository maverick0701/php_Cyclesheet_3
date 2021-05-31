<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >


<?php
// PHP program To calculate
// the Value Of nCr
 
 
function nCr( $n, $r)
{
    return fact($n) / (fact($r) *
                  fact($n - $r));
}
 
// Returns factorial of n
function fact( $n)
{
    $res = 1;
    for ( $i = 2; $i <= $n; $i++)
        $res = $res * $i;
    return $res;
}
 
    // Driver code
    $n = 5;
    $r = 3;
    echo nCr($n, $r);
     

?>
</body>
</html>