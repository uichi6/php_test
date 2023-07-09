<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

//インターフェース
interface ProductInterFace{
    //変数 関数
    // public function echoProduct(){
    //     echo '親クラス';
    // }

    public function getProduct(); //メソッドの内容しか書けない
    
}

//インターフェース
interface NewsInterFace{
    //変数 関数
    // public function echoProduct(){
    //     echo '親クラス';
    // }

    public function getNews(); //メソッドの内容しか書けない
    
}

//具象クラスと呼んだりする（親クラスの他に基底（きてい）クラスと呼んだり、スーパークラスと呼んだりする場合がある）
class BaseProduct{ //クラスなので変数や関数を含めることができる
    //変数 関数
    public function echoProduct(){
        echo '親クラスです';
    }

    //オーバーライド（上書き）getProductという関数を作ったとして、表示させてみるとgetProductが子クラスにあるので優先されて表示は変わらない
    public function getProduct(){
        echo '親の関数です';
    }
}

//継承させるためには子クラス（extendsを書いて親クラスのクラス名を書く）、継承すると親クラスが持っている変数や関数を使うことができる　//finalをつけるとこのクラスの中の関数は継承できない
//子クラスは、派生クラス、サブクラスなどと呼んだりする
class Product implements ProductInterface, NewsInterface {

    //アクセス修飾子, private（外からアクセスできない）, protected（自分・継承したクラス）, public（公開）の3つから選ぶ、インスタンス化して使う場合にはpublicに

    //変数
    private $product = [];

    //関数

    //__は初回コンストラクトを呼び出すときに記述
    function __construct($product){

        $this->product = $product;
    }

    public function getProduct(){ //抽象クラスで設定しているメソッドは必ず子クラスでも書く必要があります。

        echo $this->product;
    }

    public function addProduct($item){ //引数をインプットで書くときにドットとイコールで追記する
        $this->product .= $item;
    }

    public function getNews(){
        echo 'ニュースです';
    }
    
    public static function getStaticProduct($str){
        echo $str;
    }

}

$instance = new Product('テスト'); //newで新しくインスタンス化

var_dump($instance);

$instance->getProduct();
echo '<br>';

// //親クラスのメソッドのメソッドを引き継いで表示することが出来る
// $instance->echoProduct(); //echoインスタンス化をした後に
// echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

// $instance->getNews();
// echo '<br>';

//静的にインスタンスを作らずに使うことができる、その場合にstaticをつければOK
//使い方→ static クラス名::関数名
Product::getStaticProduct('静的');
echo '<br>';