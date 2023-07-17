<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\TestController; //インポートを読み込み

$app = new TestController; //インポートとして読み込みが出来ているのでnewとしてControllerと上げるとインスタンス化が出来るのでこの中のメソッドが使える
$app->run();
