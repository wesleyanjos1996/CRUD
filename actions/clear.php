<?php
require_once './db-connect.php';
function clear($input) {
    global $connect;
    $v = mysqli_escape_string($connect, $input);
    $v = htmlspecialchars($v);
    return $v;
}
?>