<?php
include_once('backend/database.php');
if(isset($_GET['Id']))
{
    $sql = "DELETE FROM post WHERE Id=".$_GET['Id'];
    $link->query($sql);
    // echo ($_GET['Id']);
    header("location: allblogs.php");
}
?>
