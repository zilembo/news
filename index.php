<?php

require __DIR__ . '/model/news.php';
$items = Photo_getAll();
include __DIR__ . '/view/index.php';

?>