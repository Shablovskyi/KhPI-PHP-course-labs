<?php
header('Content-Type: text/css');
header('Cache-Control: public, max-age=86400'); // 1 доба
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');
?>
body {
    background: #f8f9fa;
}
