<html>
<?php
$n = rand(1, 100);
echo "Số n = $n <br>";
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) echo "$i ";
}
?>
</html>