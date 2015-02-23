<?php
class Con
{
    public function Sql_connect()
    {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('news_base');
    }
}
class Get_Query{
   public function Sql_query($sql)
    {
        $connect = new Con();
        $connect -> Sql_connect();
        $res = mysql_query($sql);
        $ret =[];
        while(false !== $row = mysql_fetch_assoc($res))
        {
            $ret[] = $row;
        }
        return $ret;
    }
}
function Get_insert($sql)
{
    $connect = new Con();
    $connect -> Sql_connect();
    $insert = mysql_query($sql);
    return $insert;
}
?>
