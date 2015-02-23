<?php
require_once __DIR__ . '/functions/sql.php';

if(!empty($_POST)) {
    $data = [];
    $content = [];
    if (!empty($_POST['title']) && !empty($_POST['news'])) {
        $data['title'] = $_POST['title'];
        $content['news'] = $_POST['news'];
        $a = $data['title'];
        $b = $content['news'];
        $sql = 'INSERT INTO news (title, content) VALUES ("'.$a.'", "'.$b.'")';
        Get_insert($sql);
    }
}

include __DIR__ . '/view/add.php';

?>