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
echo "<br>";
?>

<?php
date_default_timezone_set('Asia/Tokyo');
$time = intval(date('H'));
if (4 <= $time && $time <= 12) {
    echo "今",$time,"時台です";
    echo "<br>";
    echo "おはようございます";
} elseif (12 <= $time && $time <= 20 ) {
    echo "今",$time,"時台です";
    echo "<br>";
    echo "こんにちは";
} else {
    echo "今",$time,"時台です";
    echo "<br>";
    echo "こんばんわ";
}
?>