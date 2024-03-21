<?php

use Ysp\Pinyin\Pinyin;

require './vendor/autoload.php';

$pinyin = new Pinyin();
$join = $pinyin->sentence('我是好人', 'symbol')->join(' ');
$toArray = $pinyin->sentence('我是好人', 'symbol')->toArray();
var_dump($join, $toArray);
