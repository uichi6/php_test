<?php

namespace App\Controllers;

use App\Models\TestModel; //ファイル名でもあり、クラス名も同じ

class TestController
{
    public function run(){
        $model = new TestModel; //作成したTestModelsをインポートしているので、ここでインスタンス化が出来る
        echo $model->getHello(); //getHelloメソッドをControllerから呼び出している
    }
}