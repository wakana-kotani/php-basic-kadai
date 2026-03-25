<!DOCTYPE hrml>
<html>

<head>
  <meta charset="UTF-8">
  <title>PHP課題</title>
</head>

<body>
  <p>
      <?php
      //クラスを定義する
      class Food {
        //プロパティを定義する
        private $name;
        private $price;

        //コンストラクタを定義する
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price =$price;
          }

          //メソッドを定義する
        public function set_price($price) {
            $this->price = $price;
        }
        public function show_price() {
                echo $this->price . '<br>';
        }
      }
      //インスタンス化
      $food = new Food('patato', 250);

      //$foodの各プロパティを出力する
      print_r($food);
      echo '<br>';


      
      //クラスを定義する
      class Animal {
        //プロパティを定義する
        private $name;
        private $height;
        private $weight;

        //コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        //メソッドを定義する
        public function set_height($height) {
            $this->height = $height;
        }
        public function show_height() {
              echo $this->height . '<br>';
        }
      }
        
      //インスタンス化
      $animal = new Animal('dog', 60, 50000);

      //$foodの各プロパティを出力する
      print_r($animal);
      echo '<br>';
     
      //メソッドにアクセスして実行
      $food->set_price(250);
      $food->show_price();

      $animal->set_height(60);
      $animal->show_height();

      ?>
  </p>
</body>

</html>