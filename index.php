<?php

require __DIR__ . '/model/news.php';
$ite = new News_getAll();
$items = $ite -> n_getAll();

include __DIR__ . '/view/index.php';

?>