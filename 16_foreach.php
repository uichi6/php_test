<?php

// 複数の値 foreach

$menbers = [
    'name' => '本田',
    'height' => 170,
    'hobby' => 'サッカー'
];

// バリューのみ表示
foreach($menbers as $menber){
    echo $menber;
}

echo '<br>';

// キーとバリューそれぞれ表示
foreach($menbers as $menber => $value){
    echo $menber . 'は' . $value . 'です';
}

$menbers_2 = [
    '本田' => [
        'height' => 170,
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'height' => 165,
        'hobby' => 'サッカー'
    ],
];

echo '<br>';

//多段階の配列を展開
foreach($menbers_2 as $menber_1){
    foreach($menber_1 as $menber => $value){
        echo $menber . 'は' . $value . 'です';
    }
}

?>