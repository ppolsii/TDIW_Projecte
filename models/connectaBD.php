<?php

function getConn()
{
    return pg_connect("host=DATABASE_HOST dbname=DATABASE_NAME
        user=DATABASE_USER password=DATABASE_PASSWORD")
      or die ("Liada al connectarse al servidor\n");


}
?>