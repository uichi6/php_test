<?php

session_start();

?>

<html>
<head></head>
<body>

<?php

echo 'セッション破棄しました';

$_SESSION = []; // セッションの破棄方法はセッションの空の配列を入れることでセッション情報を空で上書きする

if(isset($_COOKIE['PHPSESSID'])){ // クッキーにもセッションIDが残っているので、setcookieでセッションidからの情報を入れつつ、過去の日付を入れてこちらも削除
    setcookie('PHPSESSID', '', time() - 1800, '/');
}

session_destroy(); //その後にセッションデストロイという関数を使うことでセッションを破棄する

echo 'セッション';
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

echo 'クッキー';
echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

?>
    

</body>
</html>