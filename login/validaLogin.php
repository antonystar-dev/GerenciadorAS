<?php
if (!isset($_SESSION["usuario"])) {
    echo "<script>";
    echo "window.location.href = '../login/index.php';";
    echo "</script> ";
}
?>
