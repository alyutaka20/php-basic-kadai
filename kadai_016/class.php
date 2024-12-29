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
    //クラスを定義する
    class Product {
      //プロパティを定義する
      public $name;
      //publicにする事で{}より外から(クラス内からでも外から)でも$nameに対していれるものを変更できる
      //privateにするとできない
      // ここに入れた変数や関数(メソッド)などがまとまった物をオブジェクトという
      // オブジェクトの中に設定された関数をメソッドという。

    }

    //インスタンス化する(上記のオブジェクトを使えるようにする)
    $shampoo = new Product();

    //プロパティにアクセスし、値を代入する(オブジェクトの中の変数に対して値を代入する)
    $shampoo->name ='シャンプー';

    //プロパティにアクセスし、値を出力する
        echo $shampoo->name;

    ?>

  </p>
</body>
</html>