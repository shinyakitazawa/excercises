<?php
require_once('drink.php');
require_once('food.php');
require_once('dessert.php');
require_once('review.php');
require_once('user.php');

$juice = new Drink('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png', 'アイス');
$coffee = new Drink('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png', 'ホット');
$curry = new Food('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png', 3);
$pasta = new Food('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png', 1);
$chocorateIce = new Dessert('CHOCORATEICE', 450, 'https://awesome-style.com/wp-content/uploads/2020/08/1105849_m.jpg', 'アイス');
$vanillaIce = new Dessert('VANILLAICE', 400, 'https://media.delishkitchen.tv/article/1601/5rl4znk4a2i.jpeg?version=1650854673', 'アイス');

$menus = array($juice, $coffee, $curry, $pasta, $chocorateIce, $vanillaIce);

$user1 = new User('suzuki', 'male');
$user2 = new User('tanaka', 'female');
$user3 = new User('suzuki', 'famale');
$user4 = new User('sato', 'male');

$users = array($user1, $user2, $user3, $user4);

$review1 = new Review($juice->getName(), $user1->getId(), '果肉たっぷりのオレンジジュースです！');
$review2 = new Review($curry->getName(), $user1->getId(), '具がゴロゴロしていてとてもおいしいです');
$review3 = new Review($coffee->getName(), $user2->getId(), '香りがいいです');
$review4 = new Review($pasta->getName(), $user2->getId(), 'ソースが絶品です。また食べたい。');
$review5 = new Review($juice->getName(), $user3->getId(), '普通のジュース');
$review6 = new Review($curry->getName(), $user3->getId(), '値段の割においしいカレーだと思いました');
$review7 = new Review($coffee->getName(), $user4->getId(), '苦味がちょうどよくて、おすすめです');
$review8 = new Review($pasta->getName(), $user4->getId(), '具材にこだわりを感じました。');
$review9 = new Review($chocorateIce->getName(), $user1->getId(), 'ほんのり苦味がありビターな感じでした');
$review10 = new Review($vanillaIce->getName(), $user4->getId(), '食後のお口のリセットにピッタリです！');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8, $review9, $review10);
