<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 3 - Kiem tra so</title>
</head>
<body>
    <?php
    $n = rand(1, 100);
    echo "<h3>Số n = $n</h3>";

    if ($n % 2 == 0) {
        echo "$n là số chẵn <br>";
    } else {
        echo "$n là số lẻ <br>";
    }

    $kt = 1;
    if ($n < 2) {
        $kt = 0;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $kt = 0;
            break;
        }
    }

    if ($kt == 1) {
        echo "$n là số nguyên tố";
    } else {
        echo "$n không phải số nguyên tố";
    }
    ?>
</body>
</html>