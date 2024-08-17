<?php

// ["商品名", "在庫数", "値段"]
$products = [
    ["りんご", 50, 110],
    ["みかん", 0, 80],
    ["バナナ", 30, 60],
    ["ぶどう", 5, 240]
];

foreach ($products as $product) {
    $name = $product[0];
    $stock = $product[1];

    if ($stock > 0) {
        echo "{$name}は在庫がある。<br>";
    } else {
        echo "{$name}は在庫がない。<br>";
    }
}

$expensive = [];
$medium = [];
$cheap = [];

foreach ($products as $product) {
    $name = $product[0];
    $price = $product[2];

    if ($price >= 200) {
        $expensive[] = $name;
    } elseif ($price >= 100 && $price < 200) {
        $medium[] = $name;
    } else {
        $cheap[] = $name;
    }
}

echo "高価な商品は " . count($expensive) . " 件 、";
echo "中価格の商品は " . count($medium) . " 件 、";
echo "安価な商品は " . count($cheap) . " 件あります。 " ;

?>
