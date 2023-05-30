<?php

$height = '91';

// if ($height >= 91){
//     echo '身長は' . $height . 'cmです';
// }

// if ($height <= 90){
//     echo '身長は' . $height . 'cmになります。';
// }

if ($height !== 90){ //90でなかったら実行される //==2つは型が同じかどうかなのでこっちを使う
    echo '身長は90cmではありません。';
}

//データが入っているかどうか
// isset empty is_null

$test = '1'; //中身を入れると表示されない //文字

if(!empty($test)){ //!を入れて否定する emptyは日本語で空、$testが空でなかったら実行される
    echo '変数は空です';
}

// AND(&&) と OR(||)

$signal_1 = 'red';
$signal_2 = 'yellow';

if($signal_1 === 'red' || $signal_2 === 'blue'){
    echo '赤です';
}

// 三項演算子
// if else
//  条件 ? 真 : 偽

$math = 80;

$comment = $math > 80 ? 'good' : 'not good';

echo  $comment;

?>