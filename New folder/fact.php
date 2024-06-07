<?php
$n1 = (int)$_POST['n1'];
$fact = 1;
for ($i = 1; $i <= $n1; $i++) {
    $fact = $fact * $i;
}
echo "Factorial of " . $n1 . " is: " . $fact;
?>