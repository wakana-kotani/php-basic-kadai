<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //独自のソート関数
        function sort_2way ($array, $order) {

          //昇順(TRUE)の時
          if ($order) {
            echo '昇順にソートします。<br>';

            //昇順の関数
            sort($array);
            foreach ($array as $value) {
            echo "$value<br>"; 
            }
          }
          //降順(FALSE)の時
          else {
            echo '降順にソートします。<br>';

            //降順の関数
            rsort($array);
            foreach ($array as $value) {
            echo "$value<br>";
            }
          }
        }
      
        //ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        //独自のソート関数を呼び出す
        sort_2way($nums,TRUE);
        sort_2way($nums,FALSE);
        ?>
    </p>
</body>

</html>