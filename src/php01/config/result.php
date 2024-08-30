<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$goods = htmlspecialchars($_POST['goods'], ENT_QUOTES);
$total = htmlspecialchars($_POST['total'], ENT_QUOTES);

echo "お名前は". $name. "<br>";
echo "商品は". $goods. "<br>";
echo "数量は". $total. "<br>";
