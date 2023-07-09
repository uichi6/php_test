<?php

class Product{ //クラス名は頭を大文字からスタートするのが決まりになっている

    //アクセス修飾子, private（外からアクセスできない）, protected（自分・継承したクラス）, public（公開）の3つから選ぶ、インスタンス化して使う場合にはpublicに

    //変数
    private $product = [];

    //関数

    //__は初回コンストラクトを呼び出すときに記述
    function __construct($product){

        $this->product = $product;
    }

    public function getProduct(){ //publicは外からもアクセスできるように記述し形にしている
        echo $this->product;
    }

    public function addProduct($item){ //引数をインプットで書くときにドットとイコールで追記する
        $this->product .= $item;
    }
    
    public static function getStaticProduct($str){
        echo $str;
    }

}

$instance = new Product('テスト'); //newで新しくインスタンス化

var_dump($instance);

$instance->getProduct();
echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

//静的にインスタンスを作らずに使うことができる、その場合にstaticをつければOK
//使い方→ static クラス名::関数名
Product::getStaticProduct('静的');
echo '<br>';