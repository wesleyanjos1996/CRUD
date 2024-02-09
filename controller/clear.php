<?php
require_once '../modal/db-connect.php';
function clear($input) {
    global $connect;
    $v = mysqli_escape_string($connect, $input);
    $v = htmlspecialchars($v);
    return $v;
}
?>