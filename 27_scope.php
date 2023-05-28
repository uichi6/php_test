<?php

$globalVariable = 'グローバル変数です';

function checkScope($str){
    $localVariable = 'ローカル変数です';
    // global $globalVariable; //　関数の中でグローバル変数を設定してもそのままでは使えない。だがechoをglobalにすると使えるようになる。その後にechoを設定してあげる
    echo $str;
}

echo $globalVariable;
echo $localVariable;   // 出てこない、関数に入っている変数は関数の中だけ使える

checkScope($globalVariable); //実行するときのインプットとしてglobalVariableを入れる

?>

// 変数のスコープには関数の中にだけ使えるlocalとglobalの2種類がある。グローバルを関数の中で使いたい場合はインプットで指定してあげる