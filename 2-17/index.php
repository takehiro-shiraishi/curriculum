<?php
$x = 1;
$y = 0;
$num = 0;
while($num <= 40) {
    $ramdum = rand(1, 6);
    echo $x,"回目=",$ramdum;
    echo "<br>";
    $num += $ramdum;
    $x ++;
    $y ++;
}
echo "合計",$y,"回でゴールしました。";
?>

<?php

?>