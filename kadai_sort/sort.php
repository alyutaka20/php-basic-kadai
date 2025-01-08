<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$nums = [15, 4, 18, 23, 10];

function sort_2way($array, $order){
    if($order === true){
        echo "降順にソートします。<br>";
        rsort($array);
    } else {
        echo "昇順にソートします。<br>";
        sort($array); 
    }

    foreach ($array as $num) {
        echo $num . "<br>";
    }
    echo "<br>";
}

$order = false; 
sort_2way($nums, $order);

$order = true; 
sort_2way($nums, $order);
?>

</body>
</html>
