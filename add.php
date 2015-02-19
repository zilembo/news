<?php

if(!empty($_POST))
{
    $data = [];
    if(!empty($_POST['title']))
    {
        $data['title'] = $_POST['title'];
    }
}
include __DIR__ . '/views/add.php';

?>