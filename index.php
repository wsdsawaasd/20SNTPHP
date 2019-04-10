<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$count = 1;
$Number = 20;
$N = 2;
function isPrime($N)
{
    if ($N < 2) {
        return false;
    }
    for ($i = 2; $i < $N; $i++) {
        if ($N % $i === 0) {
            return false;
        }
    }
    return true;
}

while ($count <= 20) {
    if (isPrime($N)) {
        echo $N . "<br/>";
        $N++;
        $count++;
    } else {
        $N++;
    }
}

?>

</body>
</html>
