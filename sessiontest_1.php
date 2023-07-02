<?php
session_start();
?>

<html>
<head></head>
<body>

<?php
// セッションは連想配列になっているので、キーとバリュー、キーと値という形で自由に設定することができる。今回はvisitedを受け皿にdateを今回の日付にしている
// セッションがビックリマークを付けているので設定されていなかったら初回訪問と設定されていたら、visitedをインプリメントで一つ増やして、visitedで何回目の訪問で表示
// dateがあったら、前回の訪問を出しつつ、現在の時刻をセッションのdateに入れているという形
// これでページを表示してみると、初めてアクセスしたタイミングで初回訪問でという表示がされて、もう1回読み込むと2回目の訪問ですと表示される
if(!isset($_SESSION['visited'])){
    echo '初回訪問です';

    $_SESSION['visited'] = 1;
    $_SESSION['date'] = date('c');
} else{

    $visited = $_SESSION['visited'];
    $visited++;
    $_SESSION['visited'] = $visited;

    echo $_SESSION['visited'].'回目の訪問です<br>';

    if(isset($_SESSION['date'])){
        echo '前回訪問は' .$_SESSION['date'].'です';
        $_SESSION['date'] = date('c');
    }

    setcookie("id", 'aaa', '/'); //クッキーの場合はsetcookieという関数となってキーとバリューという形になる
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';

    echo '<pre>';
    var_dump($_COOKIE);
    echo '</pre>';
}

?>

</body>
</html>