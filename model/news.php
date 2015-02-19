<?php

require_once __DIR__ . '/../functions/sql.php';

function Photo_getAll()
{
    Sql_connect();

    $sql ='SELECT * FROM news';

    return Sql_query($sql);
}

?>