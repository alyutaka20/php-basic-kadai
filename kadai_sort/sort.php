<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
<p>
    <?php
    $num= [15, 4, 18, 23, 10];

    echo '昇順にソートします。'.'<br>';
 
    sort($num, SORT_NATURAL | SORT_FLAG_CASE);
    foreach ($num as $a) {
    
    echo $a. '<br>';
     }
    ?>
</p>
<p>
<?php
    $num= [15, 4, 18, 23, 10];

    echo '降順にソートします。'.'<br>';
 
    rsort($num, SORT_NATURAL | SORT_FLAG_CASE);
    foreach ($num as $a) {
    echo $a. '<br>';
     }
    ?>

</p>



</html>