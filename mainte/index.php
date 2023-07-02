<?php

require 'db_connection.php';

// ユーザー入力なし query
// $sql = 'select * from contacts where id = 1'; //sql
// $stmt = $pdo->query($sql); //sql実行 ステートメント

// $result = $stmt->fetchall();

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

//　ユーザー入力あり prepare, bind, execute 悪意ユーザ delete *SQLインジェクション対策
$sql = 'select * from contacts where id = :id'; //sql コロンが付くと名前付きプレースホルダー

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

//　トランザクション まとまって処理 beginTransaction, commit, rollback
// ex）銀行 残高を確認->Aさんから引き落とし->Bさんに振込、うまくなかったら最初に戻る

$pdo->beginTransaction();

try{

//sql処理
$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->bindValue('id', 2, PDO::PARAM_INT); //紐付け
$stmt->execute(); //実行

$pdo->commit(); //コミット

}catch(PDOException $e){
    $pdo->rollback(); //更新のキャンセル
}

?>