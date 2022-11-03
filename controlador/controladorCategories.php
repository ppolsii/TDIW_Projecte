<?php

include __DIR__.'/models/connectaBD.php';
include __DIR__.'/models/modelCategories.php';

$conn = getConn();
$categories = getCategories($conn);

include __DIR__.'/vistes/visaCategories.php';
?>