<?php

trait ProductTrait{

    public function getProduct(){
        echo 'プロダクト';
    }
}

trait NewsTrait{

    public function getNews(){
        echo 'ニュース';
    }
}

class Product{

    use ProductTrait;
    use NewsTrait;

    public function getInformation(){
        echo 'クラスです';
    }

    //     public function getNews(){
    //     echo 'クラスのニュースです';
    // }
}

$product = new Product(); //インスタンス化

$product->getInformation(); //メソッドを呼び出す
echo '<br>';
$product->getProduct();
echo '<br>';
$product->getNews();
echo '<br>';