<?php
require_once 'StaticCache.php';

$data = StaticCache::getData();
echo json_encode($data);
?>
