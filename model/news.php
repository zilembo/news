<?php
require_once __DIR__ . '/../functions/sql.php';



class News_getAll
{
   public function n_getAll()
    {
        $sql = 'SELECT * FROM news ORDER BY date DESC';
        $fun = new Get_Query();
        $fun -> Sql_query($sql);
        return $fun -> Sql_query($sql);
    }
}
?>