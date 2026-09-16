
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bang cuu chuong</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <?php
            for($i = 1; $i <= 10; $i++) {
                echo "<th>Chương $i</th>";
            }
            ?>
        </tr>
        <?php
        for($i = 1; $i <= 10; $i++){
            echo "<tr>";
            for($j = 1; $j <= 10; $j++){
                echo "<td>$j x $i = ". ($j * $i) ."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>