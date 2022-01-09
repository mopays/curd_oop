<?php

include('function.php');

if(isset($_GET['id'])){
    $userid = $_GET['id'];
    $deletedata = new DB_con();
    $sql = $deletedata->delete($userid);

    if ($sql) {
        echo "<script>alert('delete success')</script>";
        echo"<script>window.location.href='index.php'</script>";
    
    }
}

?>