<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    class Food {
      // プロパティを定義する
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
      
      // メソッドを定義する
      public function set_price(string $price) {
      $this->price = $price;
      }
      public function show_price() {
        return $this->price;
      }
    }

    // インスタンス化する
    $food = new Food('potato' , 250);

    // インスタンス$animalの各プロパティの値を出力する
    print_r($food);

    echo'<br>'; // 改行のためのHTMLタグを追加

    class Animal{
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;
  
      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
      }
  
      // メソッドを定義する
      public function set_height(string $height) {
        $this->height = $height;
      }
      public function show_height(){
        return $this->height;
      }
    }
  
    // インスタンス化する
    $animal = new Animal('dog', 60, 5000);
    
    // インスタンス$animalの各プロパティの値を出力する
    print_r($animal);
    echo '<br>'; // 改行のためのHTMLタグを追加

    // メソッドにアクセスして実行する
    echo $food->show_price(); // 250を出力
    echo '<br>'; // 改行のためのHTMLタグを追加
    // メソッドにアクセスして実行する
    echo $animal->show_height(); // 60を出力
    ?>
  </p>
</body>

</html>
