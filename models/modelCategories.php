<?php


function getCaregories(): array
{
    $conn = getConn();

    $sql = 'SELECT id, `name` 
        FROM categories':
    
    $result = pg_query($conn, $sql) or die ("Cannot execute query");
    return pg_fetch_all($result);
}

?>