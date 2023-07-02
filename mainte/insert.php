<?php

// DB接続 PDO
function insertContact($request){
require 'db_connection.php';

// 入力 DB保存 prepare, すべて文字列の場合はexecute(配列(すべて文字列))にするとbindは不要になる

$params = [ //ダミーデータを作っておく
    'id' => null,
    'your_name' => $request['your_name'],
    'email' => $request['email'],
    'url' => $request['url'],
    'gender' => $request['gender'],
    'age' => $request['age'],
    'contact' => $request['contact'],
    'created_at' => null
];

// $params = [ //ダミーデータを作っておく
//     'id' => null,
//     'your_name' => 'なまえ456',
//     'email' => 'test@test.com',
//     'url' => 'http://test.com',
//     'gender' => '1',
//     'age' => '2',
//     'contact' => 'いいい',
//     'created_at' => null
// ];

//連想配列（変数を用意しておいて）
$count = 0;
$columns = '';
$values = '';

// foreachで回していく、0より大きかったら進んでいく
foreach(array_keys($params) as $key){
    if($count++>0){
        $columns .= ',';
        $values .= ',';
    }
    $columns .= $key;
    $values .= ':'.$key;
}

$sql = 'insert into contacts ('. $columns .')values('. $values .')'; //columnsに入ってくるvaluesの値

// var_dump($sql);
// exit; //ここで処理が止まる

$stmt = $pdo->prepare($sql);//プリペアードステートメント
$stmt->execute($params); //実行

}

// お問合せフォームの内容。連想配列($params)に入れて、$pdoでデータベースに繋いで、プレイスフォルダで値を与えて、プリペアドステートメントで準備してexcuteで実行しているという形
// メール文を複数作る場合には、トランザクションも必要になる